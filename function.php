<?php 
function createPassword($letters, $lenghtPassword)
{
    $password = substr(str_shuffle($letters), 0, $lenghtPassword);
    return $password;
}
