<?php
$x = 5;

function myTest()
    { global $x;  //If we don't define here global veriable then we see a error.
        echo "$x";
        $x++;
    }

myTest();
echo "\n";
myTest();
echo "\n";
myTest();