<?php

namespace App\Resourses;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class Config
{
    private const TITLE_MAP_PATH = 'resources/json/titles.json'; 

    public static function getCurrentTitle()
    {
        $json = File::json(base_path(self::TITLE_MAP_PATH));
        $routePrefix = Route::current()->getPrefix();
        $pageTitle = array_key_exists($routePrefix, $json) ? $json[$routePrefix] : '';
        return $pageTitle;
    }
}