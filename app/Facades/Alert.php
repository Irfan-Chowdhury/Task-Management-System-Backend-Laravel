<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
    public static function getFacadeAccessor(){
        return 'alert';
    }
}


