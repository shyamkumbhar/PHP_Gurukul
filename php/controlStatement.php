<?php

/*  
    1. Control Statments :
        1.simple if Statements
        2.if else 
        3.if ..elseif ...else (if slse ladder)
        4. nested if, nested if else,nested if else ladder
    2. Swith  Statement
    3.loop statement 
    4.jump statement


*/

//nested if else
$num = 19;
if ($num > 12) {
    if ($num % 2 == 0) {
        echo "Number is greater than 12 And number is Even ";
    } else {
        echo "Number is greater than 12 And number is odd <br>";
    }
} else {
    if ($num % 2 == 0) {
        echo "Number is less than 12 And number is Even <br>";
    } else {
        echo "Number is less than 12 And number is odd <br>";
    }
}
