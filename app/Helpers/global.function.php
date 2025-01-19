<?php

/**
 * formatte la date au format français
 * @param $date
 * @return string
 */
function format_date($date){
    return date('d/m/Y', strtotime($date));
}

function num_format($num){
    return number_format($num,2,'.','.');
}
