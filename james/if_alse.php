<?php

$age =20;

if($age>=25 && $age<=65){
echo "Yeah Dude!! You can Drive";
}
elseif($age<=24&&$age>=18){
    echo "Sorry Dude !! You Are adult but can not drive (Rule made by Harry Bhai..)";
}
elseif ($age<=17) {
    echo "You are not adult so, you cann't drive ."."Try cycle for ride";
}
elseif($age>=66){
echo "You are too old . so, you cann't drive ";
}
else{
    echo "Error In programming!! it will be solve soon...";
}

?>