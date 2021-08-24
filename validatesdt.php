<?php
function isNumberPhone($str) {
    $regexp = '/\(+[0-9]{2}+\)-+\(+(0)[0-9]{9}+\)$/';
    if (preg_match($regexp, $str)) {
        echo 'Is number phone';
    }else {
        echo 'Is not number phone';
    }
}

isNumberPhone('(84)-(0978489648)');
echo '<br>';
isNumberPhone('(a8)-(22222222)');