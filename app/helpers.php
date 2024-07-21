<?php
use Carbon\Carbon;

//

function greetings()
{
    $h = Carbon::now()->hour;
    if ($h > 5 && $h < 12) {
        return __('Good Morning');
    } elseif ($h >= 12 && $h < 17) {
        return __('Good Afternoon');
    } elseif ($h >= 17 && $h < 20) {
        return __('Good Evening');
    } else {
        return __('Good Night');
    }
}