<?php
function createPassword($lettere, $numeri, $simboli, $lenghtPassword)
{
    $_characters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm';
    $number = '0123456789';
    $symbol = '!&/*+-.:';
    $all = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789!&/*+-.:';
    $numberAndCharacters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
    $symbolAndCharacters = 'QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm!&/*+-.:';
    $symbolAndNumber = '!&/*+-.:0123456789';
    if ($lettere === 'on' && !empty($lettere) && empty($numeri) && empty($simboli)) {
        $password = substr(str_shuffle($_characters), 0, $lenghtPassword);
    } elseif ($numeri === 'on' && !empty($numeri) && empty($lettere) && empty($simboli)) {
        $password = substr(str_shuffle($number), 0, $lenghtPassword);
    } elseif ($simboli === 'on' && !empty($simboli) && empty($numeri) && empty($lettere)) {
        $password = substr(str_shuffle($symbol), 0, $lenghtPassword);
    } elseif ($lettere === 'on' && $numeri === 'on'  && $simboli === 'on') {
        $password = substr(str_shuffle($all), 0, $lenghtPassword);
    } elseif ($numeri === 'on' && !empty($numeri) && $lettere === 'on' && !empty($lettere) && empty($simboli)) {
        $password = substr(str_shuffle($numberAndCharacters), 0, $lenghtPassword);
    } elseif ($lettere === 'on' && !empty($lettere) && $simboli === 'on' && !empty($simboli) && empty($numeri)) {
        $password = substr(str_shuffle($symbolAndCharacters), 0, $lenghtPassword);
    } elseif ($numeri === 'on' && !empty($numeri) && $simboli === 'on' && !empty($simboli) && empty($lettere)) {
        $password = substr(str_shuffle($symbolAndNumber), 0, $lenghtPassword);
    }
    return $password;
}
