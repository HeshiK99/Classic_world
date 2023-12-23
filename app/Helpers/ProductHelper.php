<?php

namespace App\Helpers;

use App\Models\Categories;
use App\Models\Product;
use DateTime;

class ProductHelper
{
    public static function getDateDifference($date2 = null)
    {
        $date1 = date('Y-m-d H:i:s');

        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);

        $interval = $date1->diff($date2);
        $daysDifference = $interval->days;
        
        if($daysDifference < 10)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public static function arrayCount($array = null)
    {
        return $product_count = count($array);
    }

    public static function newArrivals($count = 3)
    {
        $currentDate = new DateTime();
        $tenDaysAgo = $currentDate->modify('-10 days');
        $tenDaysAgoFormatted = $tenDaysAgo->format('Y-m-d');

        $new_arrivals = Product::where('active', 1)->where('deleted', 0)->where('created_at', '>=', $tenDaysAgoFormatted)->limit($count)->get();
        return $new_arrivals;
    }
}