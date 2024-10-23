<?php
// phpinfo();

 $x = 5;
 $name = "Puhiza";
 $number = 3.14;


 echo gettype($x);
 echo "<br>";
 echo gettype($name);
 echo "<br>";
 echo gettype($number);


function addNumber ($number1,$number2){
    $sum = $number1 + $number2;
    echo "<br> The sum of $number1 and $number2 is $sum";
}
addNumber(10,5);

function addProduct ($product1,$product2){
    $sum = $product1 * $product2;
    echo "<br> The sum of $product1 and $product2 is $sum ";
}
addProduct (2,3);

function maxnumber ($number1,$number2){
    if($number1 > $number2){
        return $number1;}
    else{
        return $number2;
    }        
        
    
}
$max = maxnumber (5,7);
echo "<br>";
echo "<br>";
echo "<br>";
echo "Max is $max";

?>