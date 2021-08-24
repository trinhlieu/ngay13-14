<?php
function isEmail($str) {
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        echo "Email is availability";
    }else {
        echo "Email is invalid";
    }
}

isEmail('a@gmail.com');
echo '<br>';
isEmail('ab@yahoo.com');
echo '<br>';
isEmail('@gmail.com');
echo '<br>';
isEmail('ad@gmail.');