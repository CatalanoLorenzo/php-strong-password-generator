<?php
function generator_password_repeat($lenght, $chars)
{
    echo ' funzione che si ripete';
    $random_str = '';
    for ($x = 0; $x < $lenght; $x++) {
        $random_str = $random_str  .  $chars[rand(0, strlen($chars) - 1)];
    }
    var_dump($random_str);
    return $random_str;
}
function generator_password_norepeat($length, $chars)
{
    echo ' funzione che non si ripete';
    $random_str = '';
    $chars_left = $chars;
    while (strlen($random_str) < $length && strlen($chars_left) > 0) {
        $random_char = $chars_left[rand(0, strlen($chars_left) - 1)];
        $random_str .= $random_char;
        $chars_left = str_replace($random_char, '', $chars_left);
    }
    return $random_str;
}

function control_repeat($repeat_condition, $lenght, $chars)
{
    if (is_bool($repeat_condition)) {
        session_start();
        if ($repeat_condition == 1) {
            $_SESSION["pass"] = generator_password_repeat($lenght, $chars);
            var_dump($_SESSION,'sto nel if');
        } elseif ($repeat_condition == 0) {
            $_SESSION["pass"] =  generator_password_norepeat($lenght, $chars);
            var_dump($_SESSION,'sto nel else');
        }
    }else{
        echo ' ERROR';
    }
    
    
}


function chois_charstot($condition, $charsadd)
{
    $charsTot = '';
    if ($condition) {
        $charsTot .= $charsadd;
    }
    return $charsTot;
}
