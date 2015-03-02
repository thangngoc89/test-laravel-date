<?php

use Jenssegers\Date\Date;

require_once('vendor/autoload.php');

Date::setLocale('vi');

// Expected 1 giờ trước
// Get 1 giờ trước
echo Date::now()->subHour()->diffForHumans();
echo '<br>';
// Expected 5 giờ trước
// Get 1 giờ trước
echo Date::now()->subHours(5)->diffForHumans();
echo '<br>';
// Expected 1 ngày trước
// Get 1 ngày trước
echo Date::now()->subDay()->diffForHumans();
echo '<br>';
// Expected 5 ngày trước
// Get 1 ngày trước
echo Date::now()->subDays(5)->diffForHumans();

