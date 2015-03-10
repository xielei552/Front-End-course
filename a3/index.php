<!DOCTYPE html>
<html>
<head>
        <title>PHP_example</title>
</head>
<body>

<?php

//case 1
$x = 2;
echo "<br> While loop <br>";
while($x <= 7) {
    echo "The number will be: $x <br>";
    $x++;
}

//case 2
$x = 4;
echo "<br> Do loop <br>";
do {
         echo "The number is: $x <br>";
              $x++;
} while ($x <= 9);

//case 3
$x = 6;
echo "<br> Do loop (condition failed) <br>";
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x<=5);

//case 4
echo "<br> function_1 <br>";
function SomefamilyName($fname, $year, $month) {
     echo "$fname Refsnes. Born in $month $year <br>";
     }

     SomefamilyName("Hege","1975","Feb");
     SomefamilyName("Stale","1978","Jan");
     SomefamilyName("Kai Jim","1983","Oct");

//case 5
echo "<br> function_2 <br>";
function setHeight($minheight = 20) {
         echo "The height is : $minheight <br>";
}

setHeight(250);
setHeight();
setHeight(135);
setHeight(80);

//case 6
echo "<br> function_3 <br>";
function mult($x, $y) {
         $z = $x * $y;
              return $z;
}

echo "5 * 10 = " . mult(5,10) . "<br>";
echo "7 * 13 = " . mult(7,13) . "<br>";
echo "2 * 4 = " . mult(2,4) . "<br>";

//case 7
echo "<br> array_1 <br>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 2; $x >= 0 ; $x--) {
         echo $cars[$x];
              echo "<br>";
}

//case 8
echo "<br> arrar_2 <br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old. <br>";
echo "Ben is " . $age['Ben'] . " years old. <br>";
echo "Joe is " . $age['Joe'] . " years old. <br>";

//case 9
echo "<br> array_3 <br>";
$age = array("Alice"=>"20", "Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
         echo "Name=" . $x . ", Age=" . $x_value;
              echo "<br>";
}
?>
</body>
</html>


