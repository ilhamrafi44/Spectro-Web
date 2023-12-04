<?php

namespace App\Helpers;

class TokenHelper

{
    public static function generateToken($filename)
    {
        $currentTime = now()->format('YmdH');
        return hash('sha256', $filename . $currentTime);
    }
}
