<?php

function writeToFile($message){
   //Open the file in 'a' mode
   $file = fopen("example.txt", "a");


//Check if the file was successfully opened
if($file){
    //Write the message to the file 
    fwrite($file, $message.PHP_EOL)

   // Close the file
   fclose($file);

    
   echo "Message written to the file successfully!br/>";
}else{
    echo "Failed to open the file for writting!!!<br/>";
}
}

// 2. Read from a file using 'fopen', 'fread', 'feof', and  'fclose'

function readFromFile(){
    //Open the file
    fopen("example.txt", "r");

    //check if the file was open successfully
    if($file){
        echo "<strong>Content of the example.txt</strong><br>";

//Read from the file until the end (eof)
while(!feof($file)){
    $line = fgets($file);
    echo $line. "<br>";
}
fclose($file);
    }else{
        echo "Failed to open the file for reading!!!<br/>"
    }
}



writeToFile("This is sample log message!!");


?>