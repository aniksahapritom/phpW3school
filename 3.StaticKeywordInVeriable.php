<?php

function testFunction(){
    static $x = 25;   //why we use static keyword
    echo $x;
    $x++;

}
testFunction();
echo "\n";
testFunction();
echo "\n";
testFunction();


$x = 25;
print("\n".$x);