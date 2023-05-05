<?php
function generator_password_words($lenght,$chars)
{
    $random_str = '';
    for ($x = 0; $x < $lenght; $x++) {
        $random_str = $random_str  .  $chars[rand(0, strlen($chars) - 1)];
    }
    return $random_str;
}