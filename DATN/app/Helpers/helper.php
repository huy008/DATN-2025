<?php

if (!function_exists('format_currency')) {
    function format_currency($number, $suffix = '₫')
    {
        if (!is_numeric($number)) return $number;

        return number_format($number, 0, ',', '.') . $suffix;
    }
}
