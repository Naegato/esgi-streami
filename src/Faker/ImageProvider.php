<?php

namespace App\Faker;

use Faker\Provider\Base;

class ImageProvider extends Base
{
    public static function picsumUrl($width = 640, $height = 480, $grayscale = false, $blur = false): string
    {
        $url = "https://picsum.photos/{$width}/{$height}";

        if ($grayscale || $blur) {
            $options = [];
            if ($grayscale) {
                $options[] = 'grayscale';
            }
            if ($blur) {
                $options[] = 'blur';
            }
            $url .= '?' . implode('&', $options);
        }

        return $url;
    }
}
