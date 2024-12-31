<?php

namespace App\Functions;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\Laravel\Facades\Image;

class Upload
{
    public static function UploadFile($file, $path, $private = false)
    {
        $allowedImageTypes = ['image/jpeg', 'image/jpg', 'image/webp', 'image/png'];
        $allowedExtensions = ['jpeg', 'jpg', 'webp', 'png'];
    
        if (in_array($file->getClientMimeType(), $allowedImageTypes) || in_array($file->getClientOriginalExtension(), $allowedExtensions)) {
            $name = time().'_'.rand(1000, 10000).'.webp';
            $imgFile = Image::read($file->getRealPath())->encode(new WebpEncoder(quality: 65));
            $imgFile = $imgFile->toFilePointer();
            $path = $path.'/'.$name;
        } elseif ($file->getClientMimeType() === 'image/svg+xml' || $file->getClientOriginalExtension() === 'svg') {
            $name = time().'_'.rand(1000, 10000).'.svg';
            $imgFile = file_get_contents($file->getRealPath());
            $path = $path.'/'.$name;
        } else {
            $name = time().'_'.rand(1000, 10000).'.'.$file->extension();
            $imgFile = File::get($file);
            $path = $path.'/'.$name;
        }
    
        Storage::disk($private ? config('filesystems.default') : 'public')->put($path, $imgFile);
    
        if ($private) {
            return $path;
        } else {
            return '/storage/'.$path;
        }
    }
    
    public static function UploadFileSVG($file, $path, $private = false)
    {
        $name = time().'_'.rand(1000, 10000).'.'.$file->extension();
        $imgFile = File::get($file);
        $path = $path.'/'.$name;
        Storage::disk($private ? config('filesystems.default') : 'public')->put($path, $imgFile);
        if($private){
            return $path;
        }else{
            return '/storage/'.$path;
        }
    }

    public static function UploadFiles($files, $path)
    {
        $filesName = [];
        foreach ($files as $file) {
            $filesName[] = self::UploadFile($file, $path);
        }

        return $filesName;
    }

    public static function StoreUrlImage($url, $path)
    {
        $name = time().'_'.rand(1000, 10000).'.png';
        $path = '/uploads'.$path.'/'.$name;
        $imgFile = Image::read(file_get_contents($url))->insert(public_path('watermark.png'), 'bottom-right', 10, 10)->toFilePointer();
        Storage::disk('public')->put($path, $imgFile);

        return $path;
    }

    public static function deleteImage($path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }

    public static function deleteImages($paths = [])
    {
        foreach ($paths as $path) {
            self::deleteImage($path);
        }
    }
}
