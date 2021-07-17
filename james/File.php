<?php
 
 readfile("File.txt");

 echo "<br>";

 $file = fopen("File.txt","r");

 
 $read = fread($file,10);
  echo $read;

 echo "<br>";
 echo fgets($file);
 echo "<br>";
 echo fgetc($file);
  
 echo"<br>";  
 
 

 while ($a=fgets($file)) {
     echo $a;


  }


 while($b=fgetc($file)){
 
    echo $b;
   if ($b==".") {
     break;
   }

 }


 fclose($file);



?>