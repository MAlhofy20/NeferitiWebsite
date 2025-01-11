<?php

namespace App\Functions;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;  // أو Imagick\Driver حسب تفضيلك
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;  // أو Imagick\Encoders\WebpEncoder

class Upload
{
    public static function UploadFile($file, $path, $private = false)
    {
        $allowedImageTypes = ['image/jpeg', 'image/jpg', 'image/webp', 'image/png'];
        $allowedExtensions = ['jpeg', 'jpg', 'webp', 'png'];
        
        // إنشاء مدير الصور باستخدام محرك GD أو Imagick
        $manager = new ImageManager(new Driver());  // يمكنك تغييره إلى Imagick\Driver حسب الحاجة
        
        if (in_array($file->getClientMimeType(), $allowedImageTypes) || in_array($file->getClientOriginalExtension(), $allowedExtensions)) {
            $name = time().'_'.rand(1000, 10000).'.webp';
            // استخدام WebpEncoder مع جودة 65
            $encoder = new WebpEncoder(quality: 65);
            $imgFile = $manager->read($file->getRealPath())->encode($encoder);  // تشفير باستخدام WebpEncoder
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
    
        return $private ? $path : '/storage/'.$path;
    }
    
    public static function UploadFileSVG($file, $path, $private = false)
    {
        $name = time().'_'.rand(1000, 10000).'.'.$file->extension();
        $imgFile = File::get($file);
        $path = $path.'/'.$name;
        Storage::disk($private ? config('filesystems.default') : 'public')->put($path, $imgFile);
        return $private ? $path : '/storage/'.$path;
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
        // إنشاء مدير الصور باستخدام محرك GD أو Imagick
        $manager = new ImageManager(new Driver());

        $name = time().'_'.rand(1000, 10000).'.png';
        $path = '/uploads'.$path.'/'.$name;
        $imgFile = $manager->read($url)
            ->place(public_path('watermark.png'), 'bottom-right', 10, 10);
        Storage::disk('public')->put($path, $imgFile);

        return $path;
    }

    public static function deleteFile($path)
    {
        Storage::disk('public')->delete($path);  // تم تحسينه باستخدام Storage
    }

    public static function deleteFiles($paths = [])
    {
        foreach ($paths as $path) {
            self::deleteFile($path);
        }
    }
}
