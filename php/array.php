<?php
/*
//index array
$number= array(1,2,5,25,"shyam","kumbhar");
// echo "<pre>";
// print_r($number);
for ($i=0; $i <count($number) ; $i++) { 
    echo $number[$i]."<br>";
}
*/


/* // Associative array
$Names = array('shyam' => 'cycle','deepak' => 'maruti','samir' => 'takter','ajit' => 'cycle');
echo "<pre>";
print_r($Names);
foreach ($Names as $ClientName => $cars) {
echo "$ClientName gift is $cars <br> ";
}

 */

//Multidimentional 2D array
$class = array(
    array("1", "shyam", "shyam@gmail.com", "9767668448"),
    array("2", "shyam", "shyam@gmail.com", "9767668448"),
    array("5", "shyam", "shyam@gmail.com", "9767668448"),
    array("4", "shyam", "shyam@gmail.com", "9767668448"),
    array("5", "shyam", "shyam@gmail.com", "9767668448"),
    array("5", "shyam", "shyam@gmail.com", "9767668448"),
);

// print_r($class);
echo "<table border= '1' cellspacing= '0' cellpadding= '20'>";
    echo "<tr>";
        echo "<th>Roll Number</th>";
        echo "<th>Name</th>";
        echo "<th>email</th>";
        echo "<th>Mobile</th>";
    echo "</tr>";
for ($i = 0; $i < count($class); $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        echo "<td>";
          echo $class[$i][$j] . " ";
        echo "</td>";
    }
    echo "</td>";
}
echo "</table>";
