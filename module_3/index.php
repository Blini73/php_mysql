<?php
 $num = -1;

if($num<0){
   // echo "$snum is less than 0":
}

$age = 12;

if(($age > 12) && ($age <15));{
    //echo "In saleee!!!!";
}

if($age > 18){
 //   echo "You are an adultt!!!";
}else{
  //  echo "You are under 18!!!";
}


if($num<0){
  //  echo "The value of \$num is a negative number";
}elseif($snum==0){
  //  echo "The value of \$num is equal to zero";
}else{
   // echo "The value is \$num is a positive number";
}

// Write a program that takes a student's score as input and outputs their grades with this system: A: 90-100, B: 80-89, C:70-79, D: 60-69, F: below 60

$score = 100;

if(($score > 90) && ($score < 100));{
    echo "You got an A";
}else($score < 89) && ($score >80){
    echo "You got an B";
}else($score < 79) && ($score >70){
    echo "You got an C";
}else($score < 69) && ($score >60){
    echo "You got an D";
}else($score < 60){
    echo "You got an F";
}


?>
