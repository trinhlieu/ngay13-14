<?php
function nameClass($str) {
    $regexp = '/^[CAP]{1}[0-9]{4}[GHIKLM]{1}$/';
    if (preg_match($regexp, $str)) {
        echo "Is name class";
    }else {
        echo "Is not name class";
    }
}

nameClass('C0318G');
echo '<br>';
nameClass('M0318G');
echo '<br>';
nameClass('P0323A');