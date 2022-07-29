<?php

// local
// global
// static



// local Start

$local = "This is local variable";

// local End


// Global Start
function writ($text){

    global $sub_txt;
    $sub_txt = "This is Sub TXT";

    echo $text;
}


writ("This is text"); // Test for local


echo ($sub_txt); // Test for Global


// Global End


// Static Start

// ON HOLD

// Static End


echo "<hr>";

/*
function aor($l, $b){
    $area_of_rect = $l * $b;
    echo $area_of_rect;
}

aor(2, 5);

*/

echo "<hr>";