<?php
echo "Welcome to the Associative arrays";

$acarr =array("Mizanur"=>" 100T ","Amina"=> "50T", "Harry"=>"100 B","Jonty"=>"75B");

foreach ($acarr as $key => $value) {
    echo "<br>$key Has $value Dolers..";
}

 echo "<br>";
 echo $acarr["Mizanur"];
?>