<?php

namespace App\Models;

class TShirt
{
    public static function getPackSizes() {
        // Make sure it is decending order
        return [
            5000,
            2000,
            1000,
            500,
            250,
        ];
    }
}
