<?php

echo "Welcome to File Writeing programming in php<br>";
/*
$file = fopen("File2.txt","w");

fwrite($file,"This is file2.txt And this is my Second file in php\n");
fwrite($file,"And this is second line on this file file2.txt\n");
fwrite($file,"For Test I make this third line on this file file2.txt\n");
*/

$File2 = fopen("File2.txt","a");

fwrite($File2,"Virtual World\n");





?>