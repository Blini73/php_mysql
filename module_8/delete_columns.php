<?php
try{
    //Connect to the database
    $pdo = new PDO("mysql:host=localhost;dbname=db", "root", "");

    //Table alteration SQL
    $sql = "ALTER TABLE users DROP COLUMN email";

    //Execute the statment
    $pdo -> exec($sql);

    echo "Column deleted succesfully!!";
}catch(PDOException $e){
   echo "Error deleted column: ".$e->getmessage();
}



?>