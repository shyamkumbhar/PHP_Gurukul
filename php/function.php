<?php

 /*    function first(){
        echo "this is my first function";
        echo "<br> <br>";
    }
    first();
 

   //function with arguments and
   function add ($num1,$num2){
    $sum = $num1+$num2;
    echo $sum."<br>";
}
add(2,2);
add(2,52); */
//function with default arguments and default

/* //function with multiple arguments and default
function multiple(...$numbers){
    
    foreach ($numbers as $key => $value) {
       echo "$value <br>";
    }
}
multiple(1,2,3,4,5,6,8,9,9,9,8); */


//function with return type and

function cal($num){
    $cube = $num*$num*$num;
    return $cube;
}
$num =5;
$cube=cal($num);
echo $cube;

?>