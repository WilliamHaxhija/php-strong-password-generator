<?php
$charList = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';

$passwordLength = intval(isset($_GET['password-length']) ? $_GET['password-length'] : 0);

$userPassword = generateRandPassword($passwordLength, $charList);
function generateRandPassword($number, $string) {
    $password = '';
    $stringLength = strlen($string);

    for ($i = 0; $i < $number; $i++) {
        $password .= $string[rand(0, $stringLength - 1)];
    }

    return $password;
}
