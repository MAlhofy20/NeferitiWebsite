<?php

use GuzzleHttp\Client;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Modules\Country\Entities\Country;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

function httpsHelper($link)
{
    if (substr($link, 0, 8) === "https://") {
        return $link;
    } else {
        return "//" . $link;
    }
}
function editedBody($body)
{
    // التعامل مع عناوين البريد الإلكتروني أولاً
    $body = preg_replace(
        '/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/',
        '<a style="color: #1d4ed8; text-decoration: underline;" href="mailto:\\0">\\0</a>',
        $body
    );

    // التعامل مع الروابط
    $body = preg_replace(
        '~(?<!mailto:)(?:(?:https?://)|(?:www\.))([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})(/[^\s<>]*)?~',
        '<a style="color: #1d4ed8; text-decoration: underline;" target="_blank" href="http://\\1\\2">\\1\\2</a>',
        $body
    );

    return nl2br($body);
}

function lang($lang = null)
{
    if (isset($lang)) {
        return app()->islocale($lang);
    } else {
        return app()->getlocale();
    }
}

function RemoveFirstSlash($String)
{
    if (mb_substr($String, 0, 1) == '/') {
        return substr($String, 1);
    }else{
        return $String;
    }
}

function amount_format($amount)
{
    return number_format($amount, 3, '.', '');
}

function Admin($lang = null)
{
    if (! Config::get('Admin')) {
        Config::set('Admin', auth()->user());
    }

    return Config::get('Admin');
}

// function Countries()
// {
//     if (! Config::get('Countries')) {
//         Config::set('Countries', Country::get());
//     }

//     return Config::get('Countries');
// }

function Settings()
{
    Session::put('Settings', Setting::get());

    if (! Session::get('Settings')) {
        Session::put('Settings', Setting::get());
    }
    return Session::get('Settings');
}

function setting($key)
{
    return Settings()->where('key', $key)->first()->value ?? null;
}

function DT_Lang()
{
    if (lang('ar')) {
        return '//cdn.datatables.net/plug-ins/1.10.16/i18n/Arabic.json';
    } else {
        return '//cdn.datatables.net/plug-ins/1.10.16/i18n/English.json';
    }
}

function image_path($file)
{
    if ($file && file_exists(public_path($file))) {
        return $file;
    }

    return setting('logo');
}

function delete_files($path)
{
    $dirs = File::directories(public_path($path));
    foreach ($dirs as $dir) {
        $arr = [];
        $max = '';
        $files = File::files($dir);
        if (count($files) > 1) {
            foreach ($files as $string) {
                if (str_contains($string, '.png') || str_contains($string, '.jpg') || str_contains($string, '.jpeg') || str_contains($string, '.gif')) {
                    $arr[] = $string->getRelativePathname();
                }
            }
            $max = max($arr);
            foreach ($files as $string) {
                if (! str_contains($string, $max)) {
                    unlink($string);
                }
            }
        }
    }
    dd('Done');
}

function MergeArrays(array $input)
{
    $new_arr = [];
    $keys = array_keys($input);
    foreach ($input[$keys[count($keys) - 1]] as $key => $value) {
        foreach ($keys as $array_key => $value) {
            $new_arr[$key][$keys[$array_key]] = is_array($input[$keys[$array_key]]) ? $input[$keys[$array_key]][$key] : $input[$keys[$array_key]];
        }
    }

    return $new_arr;
}

function times()
{
    return  ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"];
}

function costformat($cost)
{
    return number_format($cost, 3, '.', '');
}

function DayesNames()
{
    return ['SATURDAY', 'SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY'];
}

function getDayNum($day)
{
    foreach (DayesNames() as $key => $value) {
        if($day == $value){
            return $key + 1;
        }
    }
}

function getMapPoint($link)
{
    $isLongLink = isLongLink($link);
    if(!$isLongLink){
        $client = new Client();
        $response = $client->head($link, [
            'allow_redirects' => [
                'track_redirects' => true
            ]
        ]);
    
        $link = $response->getHeaderLine('X-Guzzle-Redirect-History');
        
    }

    $pattern = '/@(-?\d+\.\d+),(-?\d+\.\d+)/';
    $search_pattern = '/\/search\/(-?\d+\.\d+),(-?\d+\.\d+)\?/';
    
    if (preg_match($pattern, $link, $matches)) {
        $latitude = $matches[1];
        $longitude = $matches[2];
    } else if (preg_match($search_pattern, $link, $search_matches)) {
        $latitude = $search_matches[1];
        $longitude = $search_matches[2];
    }

        $coordinates = [
            'lat' => $latitude ?? 0 ,
            'long' => $longitude ?? 0
        ];        
        return $coordinates;
}

function isLongLink($link)
{
    return strpos($link, '@') !== false;
}

function culcPercent($total, $percent)
{
    $discount = $total * ( $percent / 100);
    return $total - $discount;
}

function checkForYoutube($body)
{
    $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

    // Check if the string contains a YouTube video link
    if (preg_match($pattern, $body, $matches)) {
        $video_id = $matches[1];
        return "https://www.youtube.com/embed/$video_id";
    } else {
        return false;
    }

    // if (strpos($body, 'youtube.com') !== false || strpos($body, 'youtu.be') !== false) {
    //     $videoId = substr(parse_url($url, PHP_URL_QUERY), 2);

    //     // Construct embed URL
    //     $embedUrl = "https://www.youtube.com/embed/$videoId";
    // } else {
    //     return false;
    // }
}



