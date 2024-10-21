<?php


for($x=16;$x<=25;$x=$x+2){
    echo "$x <br>";
}



$age = 15;

while($age<=18){
    echo "Age is $age <br>";
    $age++;
}

$number = 15;

do{
    echo "Now Number is $number <br>";
    $number++;
}
    while($number<15);


$cars = ['Mercedes','Mustang','BMW','Audi','Dacia' ];

foreach($cars as $car){
    echo "car model is $car <br>";
}

?>

