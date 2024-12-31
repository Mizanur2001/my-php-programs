<!--PHP part for Login check -->
<?php

 session_start();
 if (($_SESSION['Loggedin']==false)&&(!isset($_SESSION['u_name']))&&(!isset($_SESSION['password']) )) {
   header("location:login.php");
   exit;
 }

?>

<!--PHP part for Grade calculation function -->
<?php

    function check($total){
        if ($total<25) {
            $grade = "D";
        }
        elseif ($total<35) {
            $grade = "C";
        }
        elseif ($total<45) {
            $grade = "B";
        }
        elseif ($total<60) {
            $grade = "B+";
        }
        elseif ($total<80) {
            $grade = "A";
        }
        elseif ($total<90) {
            $grade = "A+";
        }
        else{
            $grade ="AA";
        }
        return $grade;
    }


?>

<!-- PHP part to add subject number-->

<?php

function add($s1w,$s1p,$s2w,$s2p){
    $s1w=str_replace("AB","0",$s1w);
    $s1p=str_replace("AB","0",$s1p);
    $s2w=str_replace("AB","0",$s2w);
    $s2p=str_replace("AB","0",$s2p);
    return $s1w+$s1p+$s2w+$s2p;
}

function add_2($s3w,$s3p){
    $s3w=str_replace("AB","0",$s3w);
    $s3p=str_replace("AB","0",$s3p);
    return $s3w+$s3p;
}

?>


<!-- PHP part for fathing data from db -->
<?php 
require "partial/db_connect.php";
$sql_f="SELECT * from `students`";
 $result = mysqli_query($connect,$sql_f);
 while ($row=mysqli_fetch_assoc($result)) {
 $roll_no=$row['roll_no'];
 $name=$row['name'];

 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Marksheet Print</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/marksheet_print.css">
</head>

<body>

    <div id="container">
        <?php
        $date =date("Y");
        require "partial/db_connect.php";
        $roll_no=$_POST['roll_no'];
        $sql_f="SELECT * from `students` WHERE `roll_no`='$roll_no'";
         $result = mysqli_query($connect,$sql_f);
         while ($row=mysqli_fetch_assoc($result)) {
         $roll_no=$row['roll_no'];
         $name=$row['name'];
         $bengali=$row['bengali'];
         $be_s1_p=$row['be_s1_p'];
         $be_s2_w=$row['be_s2_w'];
         $be_s2_p=$row['be_s2_p'];
         $be_s3_w=$row['be_s3_w'];
         $be_s3_p=$row['be_s3_p'];
         $english=$row['english'];
         $en_s1_p=$row['en_s1_p'];
         $en_s2_w=$row['en_s2_w'];
         $en_s2_p=$row['en_s2_p'];
         $en_s3_w=$row['en_s3_w'];
         $en_s3_p=$row['en_s3_p'];
         $history=$row['history'];
         $hi_s1_p=$row['hi_s1_p'];
         $hi_s2_w=$row['hi_s2_w'];
         $hi_s2_p=$row['hi_s2_p'];
         $hi_s3_w=$row['hi_s3_w'];
         $hi_s3_p=$row['hi_s3_p'];
         $geography=$row['geography'];
         $ge_s1_p=$row['ge_s1_p'];
         $ge_s2_w=$row['ge_s2_w'];
         $ge_s2_p=$row['ge_s2_p'];
         $ge_s3_w=$row['ge_s3_w'];
         $ge_s3_p=$row['ge_s3_p'];
         $mathematics=$row['mathematics'];
         $ma_s1_p=$row['ma_s1_p'];
         $ma_s2_w=$row['ma_s2_w'];
         $ma_s2_p=$row['ma_s2_p'];
         $ma_s3_w=$row['ma_s3_w'];
         $ma_s3_p=$row['ma_s3_p'];
         $physics=$row['physics'];
         $ph_s1_p=$row['ph_s1_p'];
         $ph_s2_w=$row['ph_s2_w'];
         $ph_s2_p=$row['ph_s2_p'];
         $ph_s3_w=$row['ph_s3_w'];
         $ph_s3_p=$row['ph_s3_p'];
         $lscience=$row['l.science'];
         $li_s1_p=$row['li_s1_p'];
         $li_s2_w=$row['li_s2_w'];
         $li_s2_p=$row['li_s2_p'];
         $li_s3_w=$row['li_s3_w'];
         $li_s3_p=$row['li_s3_p'];
         $islam_parichay=$row['islam_parichay'];
         $is_s1_p=$row['is_s1_p'];
         $is_s2_w=$row['is_s2_w'];
         $is_s2_p=$row['is_s2_p'];
         $is_s3_w=$row['is_s3_w'];
         $is_s3_p=$row['is_s3_p'];
         $arabic=$row['arabic'];
         $ar_s1_p=$row['ar_s1_p'];
         $ar_s2_w=$row['ar_s2_w'];
         $ar_s2_p=$row['ar_s2_p'];
         $ar_s3_w=$row['ar_s3_w'];
         $ar_s3_p=$row['ar_s3_p'];
         require "partial/sanitizing_data(neg_to_zero&ab).php";
        echo
        '<div class="box">
            <div class="heading">
                <h1>Bhabta Azizia High Madrasah</h1>
                <img src="img/logo.png" alt="logo">
                <p>INDEX-NO:-12-04-03-01-005</p>
                <p>H.S- INST- CODE- 116136 </p>
                <p>P.O: Bhabta * P.S: Beldanga</p>
                <p>DiST: Murshidabad</p>
                <h2>Session : '.  $date .'</h2>
            </div>
            <div class="stu_info">
                <p>Student Name :- '.$name.'</p>
                <p>Class:- iX . Section :-B</p>
                <p>Roll No :- '.$roll_no.'</p>
            </div>
            <div class="table">';
                echo
                '<table class="myTable">
                    <tr>
                        <th>Subject Name</th>
                        <th>S1(W)[40]</th>
                        <th>S1(P)[10]</th>
                        <th>S2(W)[40]</th>
                        <th>S2(p)[10]</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>

                    <tr>
                        <td>Bengali</td>
                        <td>'.$bengali.'</td>
                        <td>'.$be_s1_p.'</td>
                        <td>'.$be_s2_w.'</td>
                        <td>'.$be_s2_p.'</td>';
                        $total = add($bengali , $be_s1_p , $be_s2_w , $be_s2_p);
                        $grade=check($total);
                         
                        echo
                       '<td>'.$total.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>'.$english.'</td>
                        <td>'.$en_s1_p.'</td>
                        <td>'.$en_s2_w.'</td>
                        <td>'.$en_s2_p.'</td>';
                        $total=add($english , $en_s1_p , $en_s2_w , $en_s2_p); 
                        $grade=check($total);

                        echo
                        '<td>'. $total .'</td>
                        <td>'.$grade.'</td>
                    </tr>
                    <tr>
                        <td>History</td>
                        <td>'.$history.'</td>
                        <td>'.$hi_s1_p.'</td>
                        <td>'.$hi_s2_w.'</td>
                        <td>'.$hi_s2_p.'</td>';
                        $total=add($history,$hi_s1_p,$hi_s2_w,$hi_s2_p);
                        $grade=check($total);

                        echo
                        '<td>'.$total.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td>'.$geography.'</td>
                        <td>'.$ge_s1_p.'</td>
                        <td>'.$ge_s2_w.'</td>
                        <td>'.$ge_s2_p.'</td>';
                        $total=add($geography , $ge_s1_p , $ge_s2_w , $ge_s2_p);
                        $grade=check($total);

                        echo
                        '<td>'. $total .'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>'.$mathematics.'</td>
                        <td>'.$ma_s1_p.'</td>
                        <td>'.$ma_s2_w.'</td>
                        <td>'.$ma_s2_p.'</td>';
                        $total=add($mathematics , $ma_s1_p , $ma_s2_w , $ma_s2_p);
                        $grade=check($total);

                        echo
                        '<td>'. $total .'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Phyics</td>
                        <td>'.$physics.'</td>
                        <td>'.$ph_s1_p.'</td>
                        <td>'.$ph_s2_w.'</td>
                        <td>'.$ph_s2_p.'</td>';
                        $total=add($physics , $ph_s1_p , $ph_s2_w , $ph_s2_p);
                        $grade=check($total);

                        echo
                        '<td>'.$total.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>L.Science</td>
                        <td>'.$lscience.'</td>
                        <td>'.$li_s1_p.'</td>
                        <td>'.$li_s2_w.'</td>
                        <td>'.$li_s2_p.'</td>';
                        $total=add($lscience , $li_s1_p , $li_s2_w , $li_s2_p) ; 
                        $grade=check($total);

                        echo
                        '<td>'.$total.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>I.p</td>
                        <td>'.$islam_parichay.'</td>
                        <td>'.$is_s1_p.'</td>
                        <td>'.$is_s2_w.'</td>
                        <td>'.$is_s2_p.'</td>';
                        $total=add($islam_parichay , $is_s1_p , $is_s2_w , $is_s2_p);
                        $grade=check($total);

                        echo
                        '<td>'.$total.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Arabic</td>
                        <td>'.$arabic.'</td>
                        <td>'.$ar_s1_p.'</td>
                        <td>'.$ar_s2_w.'</td>
                        <td>'.$ar_s2_p.'</td>';
                        $total=add($arabic , $ar_s1_p , $ar_s2_w , $ar_s2_p);
                        $grade=check($total);

                        echo
                        '<td>'.$total.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                </table>
                <p class="mt-20">Result : </p>
            </div>
            <div class="sign">
                <p>Class teacher\'s sign</p>
                <p>Head Master\'s sign</p>
                <p>Guardian\'s sign</p>
            </div>
        </div>';

         //3rd sammetive 

        echo
        '<div class="box">
            <div class="heading">
                <h1>Bhabta Azizia High Madrasah</h1>
                <img src="img/logo.png" alt="logo">
                <p>INDEX-NO:-12-04-03-01-005</p>
                <p>H.S- INST- CODE- 116136 </p>
                <p>P.O: Bhabta * P.S: Beldanga</p>
                <p>DiST: Murshidabad</p>
                <h2>Session : '.  $date .'</h2>
            </div>
            <div class="stu_info">
                <p>Student Name :- '.$name.'</p>
                <p>Class:- iX . Section :-B</p>
                <p>Roll No :- '.$roll_no.'</p>
            </div>
            <div class="table">';
                echo
                '<table class="myTable">
                    <tr>
                        <th>Subject Name</th>
                        <th>S3(W)[90]</th>
                        <th>S3(P)[10]</th>
                        <th>F.M[100]</th>
                        <th>S1+S2[100]</th>
                        <th>Total[200]</th>
                        <th>Avg</th>
                        <th>Grade</th>
                    </tr>

                    <tr>
                        <td>Bengali</td>
                        <td>'.$be_s3_w.'</td>
                        <td>'.$be_s3_p.'</td>
                        <td>'.add_2($be_s3_w,$be_s3_p).'</td>';
                        $total = add($bengali , $be_s1_p , $be_s2_w , $be_s2_p);
                        $avg=round(($total+add_2($be_s3_w,$be_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);
                         
                        echo
                       '<td>'.$total.'</td>
                       <td>'.$total+add_2($be_s3_w,$be_s3_p).'</td>
                       <td>'.$avg.'</td>
                       <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>'.$en_s3_w.'</td>
                        <td>'.$en_s3_p.'</td>
                        <td>'.add_2($en_s3_p,$en_s3_w).'</td>';
                        $total=add($english , $en_s1_p , $en_s2_w , $en_s2_p); 
                        $avg=round(($total+add_2($en_s3_w,$en_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'. $total .'</td>
                        <td>'.$total+add_2($en_s3_w,$en_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'.$grade.'</td>
                    </tr>
                    <tr>
                        <td>History</td>
                        <td>'.$hi_s3_w.'</td>
                        <td>'.$hi_s3_p.'</td>
                        <td>'.add_2($hi_s3_p,$hi_s3_w).'</td>';
                        $total=add($history,$hi_s1_p,$hi_s2_w,$hi_s2_p);
                        $avg=round(($total+add_2($hi_s3_w,$hi_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'.$total.'</td>
                        <td>'.$total+add_2($hi_s3_w,$hi_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Geography</td>
                        <td>'.$ge_s3_w.'</td>
                        <td>'.$ge_s3_p.'</td>
                        <td>'.add_2($ge_s3_p,$ge_s3_w).'</td>';
                        $total=add($geography , $ge_s1_p , $ge_s2_w , $ge_s2_p);
                        $avg=round(($total+add_2($ge_s3_w,$ge_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'. $total .'</td>
                        <td>'.$total+add_2($ge_s3_w,$ge_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td>'.$ma_s3_w.'</td>
                        <td>'.$ma_s3_p.'</td>
                        <td>'.add_2($ma_s3_p,$ma_s3_w).'</td>';
                        $total=add($mathematics , $ma_s1_p , $ma_s2_w , $ma_s2_p);
                        $avg=round(($total+add_2($ma_s3_w,$ma_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'. $total .'</td>
                        <td>'.$total+add_2($ma_s3_w,$ma_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Phyics</td>
                        <td>'.$ph_s3_w.'</td>
                        <td>'.$ph_s3_p.'</td>
                        <td>'.add_2($ph_s3_p,$ph_s3_w).'</td>';
                        $total=add($physics , $ph_s1_p , $ph_s2_w , $ph_s2_p);
                        $avg=round(($total+add_2($ph_s3_w,$ph_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'.$total.'</td>
                        <td>'.$total+add_2($ph_s3_w,$ph_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>L.Science</td>
                        <td>'.$li_s3_w.'</td>
                        <td>'.$li_s3_p.'</td>
                        <td>'.add_2($li_s3_p,$li_s3_w).'</td>';
                        $total=add($lscience , $li_s1_p , $li_s2_w , $li_s2_p) ; 
                        $avg=round(($total+add_2($li_s3_w,$li_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'.$total.'</td>
                        <td>'.$total+add_2($li_s3_w,$li_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>I.p</td>
                        <td>'.$is_s3_w.'</td>
                        <td>'.$is_s3_p.'</td>
                        <td>'.add_2($is_s3_p,$is_s3_w).'</td>';
                        $total=add($islam_parichay , $is_s1_p , $is_s2_w , $is_s2_p);
                        $avg=round(($total+add_2($is_s3_w,$is_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'.$total.'</td>
                        <td>'.$total+add_2($is_s3_w,$is_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                    <tr>
                        <td>Arabic</td>
                        <td>'.$ar_s3_w.'</td>
                        <td>'.$ar_s3_p.'</td>
                        <td>'.add_2($ar_s3_p,$ar_s3_w).'</td>';
                        $total=add($arabic , $ar_s1_p , $ar_s2_w , $ar_s2_p);
                        $avg=round(($total+add_2($ar_s3_w,$ar_s3_p))/2,0,PHP_ROUND_HALF_UP);
                        $grade=check($avg);

                        echo
                        '<td>'.$total.'</td>
                        <td>'.$total+add_2($ar_s3_w,$ar_s3_p).'</td>
                        <td>'.$avg.'</td>
                        <td>'. $grade .'</td>
                    </tr>
                </table>';
                echo
                '<p class="mt-20">Result : </p>
            </div>
            <div class="sign">
                <p>Class teacher\'s sign</p>
                <p>Head Master\'s sign</p>
                <p>Guardian\'s sign</p>
            </div>
        </div>';
       }
        ?>
    </div>

</body>

</html>