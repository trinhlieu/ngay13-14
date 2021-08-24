<?php
function signUp($str) {
    $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexp, $str)) {
        echo "Sign Up Success";
    }else {
        echo "Registration failed";
    }
}

signUp('123abc_');
echo '<br>';
signUp('_abc123');
echo '<br>';
signUp('123456');
echo '<br>';
signUp('.@');
echo '<br>';
signUp('asdbf');
echo '<br>';
