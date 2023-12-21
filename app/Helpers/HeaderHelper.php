<?php

namespace App\Helpers;

use App\Models\Categories;

class HeaderHelper
{
    public static function getCategories()
    {
        $categories = Categories::where('active', 1)->where('deleted', 0)->get();
        return $categories;
    }
}