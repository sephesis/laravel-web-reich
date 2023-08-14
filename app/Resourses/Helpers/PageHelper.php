<?php

namespace App\Resourses\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class PageHelper
{
    private const TITLE_MAP_PATH = 'resources/json/titles.json'; 

    public static function getTitleMap()
    {
        return self::TITLE_MAP_PATH;
    }

    public static function getTitlesJsonFile()
    {
        if (file_exists(base_path(self::getTitleMap()))) {
            return File::json(base_path(self::getTitleMap()));
        }
        return '';
    }

    public static function getCurrentTitle()
    {
        $json = self::getTitlesJsonFile();
        $pageTitle = '';
        if (is_array($json)) {
            $routePrefix = Route::current()->getPrefix();
            $pageTitle = array_key_exists($routePrefix, $json) ? $json[$routePrefix] : 'Разработка и дизайн сайтов';
        }
        return $pageTitle;
    }
}