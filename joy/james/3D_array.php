<?php

echo "Welcome to 3D_arrays project <br>";

$three_D_arr=array(
                      array(
                            array(5,6,0 ,'*'),
                            array(2,5,3 ,'*'),
                           ),

                   array(
                         array("Mizanur","Amina","Harry",'*'),
                         array("jesim","Rushad","Jonty",'*'),
                        ),

                    array(
                          array('M','A','H','*'),
                          array('j','R','J','   *'),

                        )    

                    );           
              
 // echo count($three_D_arr) . "<br>";

                 for ($i=0; $i < count($three_D_arr) ; $i++) {

                    //echo count($three_D_arr) . "<br>";

                    for ($j=0; $j < count($three_D_arr[$i]); $j++) { 

                        //echo count($three_D_arr[$i]) . "<br>";

                       for ($k=0; $k < count($three_D_arr[$j])+2; $k++) { 
                       // echo count($three_D_arr[$j]) . "<br>";

                           echo $three_D_arr[$i][$j][$k];
                           echo " ";
                       }
                       echo "<br>";
                    }

                    echo "<br>";
                 }


?>