<!--PHP part for Login check -->
<?php

 session_start();
 if (($_SESSION['Loggedin']==false)&&(!isset($_SESSION['u_name']))&&(!isset($_SESSION['password']) )) {
   header("location:login.php");
   exit;
 }

?>

<!--PHP part All add function And grade function-->

<?php

function add_4($s1w,$s1p,$s2w,$s2p){

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

function check_g($total){
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Result</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/all_students.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_head_foot.css">
</head>

<body>
    <?php require "partial/header.php"; ?>

    <!--1ST SUMMETIVE -->

    <div class="container">
        <h1 class="center" >Summative-1</h1>
        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Ben(W)</th>
                    <th>Ben(p)</th>
                    <th>Eng(W)</th>
                    <th>Eng(P)</th>
                    <th>Phys(W)</th>
                    <th>Phys(P)</th>
                    <th>L.Sc(W)</th>
                    <th>L.Sc(P)</th>
                    <th>Math(W)</th>
                    <th>Math(P)</th>
                    <th>Hist(W)</th>
                    <th>Hist(P)</th>
                    <th>Geo(W)</th>
                    <th>Geo(P)</th>
                    <th>I.p(W)</th>
                    <th>I.p(P)</th>
                    <th>arbic(W)</th>
                    <th>arbic(P)</th>
                </tr>
                <?php 
                 //fatching data from data base
                 require "partial/db_connect.php";
                 $sql_f="SELECT * from `students`";
                 $result = mysqli_query($connect,$sql_f);
                 while ($row=mysqli_fetch_assoc($result)) {
                 $roll_no=$row['roll_no'];
                 $name=$row['name'];
                 $bengali=$row['bengali'];
                 $be_s1_p=$row['be_s1_p'];
                 $be_s3_w=$row['be_s3_w'];
                 $be_s3_p=$row['be_s3_p'];
                 $english=$row['english'];
                 $en_s1_p=$row['en_s1_p'];
                 $en_s3_w=$row['en_s3_w'];
                 $en_s3_p=$row['en_s3_p'];
                 $history=$row['history'];
                 $hi_s1_p=$row['hi_s1_p'];
                 $hi_s3_w=$row['hi_s3_w'];
                 $hi_s3_p=$row['hi_s3_p'];
                 $geography=$row['geography'];
                 $ge_s1_p=$row['ge_s1_p'];
                 $ge_s3_w=$row['ge_s3_w'];
                 $ge_s3_p=$row['ge_s3_p'];
                 $mathematics=$row['mathematics'];
                 $ma_s1_p=$row['ma_s1_p'];
                 $ma_s3_w=$row['ma_s3_w'];
                 $ma_s3_p=$row['ma_s3_p'];
                 $physics=$row['physics'];
                 $ph_s1_p=$row['ph_s1_p'];
                 $ph_s3_w=$row['ph_s3_w'];
                 $ph_s3_p=$row['ph_s3_p'];
                 $lscience=$row['l.science'];
                 $li_s1_p=$row['li_s1_p'];
                 $li_s3_w=$row['li_s3_w'];
                 $li_s3_p=$row['li_s3_p'];
                 $islam_parichay=$row['islam_parichay'];
                 $is_s1_p=$row['is_s1_p'];
                 $is_s3_w=$row['is_s3_w'];
                 $is_s3_p=$row['is_s3_p'];
                 $arabic=$row['arabic'];
                 $ar_s1_p=$row['ar_s1_p'];
                 $ar_s3_w=$row['ar_s3_w'];
                 $ar_s3_p=$row['ar_s3_p'];
                    $be_s2_w=$row['be_s2_w'];
                    $be_s2_p=$row['be_s2_p'];
                    $en_s2_w=$row['en_s2_w'];
                    $en_s2_p=$row['en_s2_p'];
                    $hi_s2_w=$row['hi_s2_w'];
                    $hi_s2_p=$row['hi_s2_p'];
                    $ge_s2_w=$row['ge_s2_w'];
                    $ge_s2_p=$row['ge_s2_p'];
                    $ma_s2_w=$row['ma_s2_w'];
                    $ma_s2_p=$row['ma_s2_p'];
                    $ph_s2_w=$row['ph_s2_w'];
                    $ph_s2_p=$row['ph_s2_p'];
                    $li_s2_w=$row['li_s2_w'];
                    $li_s2_p=$row['li_s2_p'];
                    $is_s2_w=$row['is_s2_w'];
                    $is_s2_p=$row['is_s2_p'];
                    $ar_s2_w=$row['ar_s2_w'];
                    $ar_s2_p=$row['ar_s2_p'];

                 //sanitizing data 
                 require "partial/sanitizing_data(neg_to_zero&ab).php";
                 
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>
                    <td>'.$bengali.'</td>
                    <td>'.$be_s1_p.'</td>
                    <td>'.$english.'</td>
                    <td>'.$en_s1_p.'</td>
                    <td>'.$physics.'</td>
                    <td>'.$ph_s1_p.'</td>
                    <td>'.$lscience.'</td>
                    <td>'.$li_s1_p.'</td>
                    <td>'.$mathematics.'</td>
                    <td>'.$ma_s1_p.'</td>
                    <td>'.$history.'</td>
                    <td>'.$hi_s1_p.'</td>
                    <td>'.$geography.'</td>
                    <td>'.$ge_s1_p.'</td>
                    <td>'.$islam_parichay.'</td>
                    <td>'.$is_s1_p.'</td>
                    <td>'.$arabic.'</td>
                    <td>'.$ar_s1_p.'</td>
                </tr>';
                 }
                ?>
            </table>
        </div>
    </div>

    <!--2NS SUMMETIVE -->

    <div class="container">
        <h1 class="center" >Summative-2</h1>
        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Ben(W)</th>
                    <th>Ben(p)</th>
                    <th>Eng(W)</th>
                    <th>Eng(P)</th>
                    <th>Phys(W)</th>
                    <th>Phys(P)</th>
                    <th>L.Sc(W)</th>
                    <th>L.Sc(P)</th>
                    <th>Math(W)</th>
                    <th>Math(P)</th>
                    <th>Hist(W)</th>
                    <th>Hist(P)</th>
                    <th>Geo(W)</th>
                    <th>Geo(P)</th>
                    <th>I.p(W)</th>
                    <th>I.p(P)</th>
                    <th>arbic(W)</th>
                    <th>arbic(P)</th>
                </tr>
                <?php 
                 //fatching data from data base
                 require "partial/db_connect.php";
                 $sql_f="SELECT * from `students`";
                 $result = mysqli_query($connect,$sql_f);
                 while ($row=mysqli_fetch_assoc($result)) {
                 $roll_no=$row['roll_no'];
                 $name=$row['name'];
               
                   $be_s2_w=$row['be_s2_w'];
                    $be_s2_p=$row['be_s2_p'];
                    $en_s2_w=$row['en_s2_w'];
                    $en_s2_p=$row['en_s2_p'];
                    $hi_s2_w=$row['hi_s2_w'];
                    $hi_s2_p=$row['hi_s2_p'];
                    $ge_s2_w=$row['ge_s2_w'];
                    $ge_s2_p=$row['ge_s2_p'];
                    $ma_s2_w=$row['ma_s2_w'];
                    $ma_s2_p=$row['ma_s2_p'];
                    $ph_s2_w=$row['ph_s2_w'];
                    $ph_s2_p=$row['ph_s2_p'];
                    $li_s2_w=$row['li_s2_w'];
                    $li_s2_p=$row['li_s2_p'];
                    $is_s2_w=$row['is_s2_w'];
                    $is_s2_p=$row['is_s2_p'];
                    $ar_s2_w=$row['ar_s2_w'];
                    $ar_s2_p=$row['ar_s2_p'];

                 //sanitizing data 
                 require "partial/sanitizing_data(neg_to_zero&ab).php";
                 
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>
                    <td>'.$be_s2_w.'</td>
                    <td>'.$be_s2_p.'</td>
                    <td>'.$en_s2_w.'</td>
                    <td>'.$en_s2_p.'</td>
                    <td>'.$ph_s2_w.'</td>
                    <td>'.$ph_s2_p.'</td>
                    <td>'.$li_s2_w.'</td>
                    <td>'.$li_s2_p.'</td>
                    <td>'.$ma_s2_w.'</td>
                    <td>'.$ma_s2_p.'</td>
                    <td>'.$hi_s2_w.'</td>
                    <td>'.$hi_s2_p.'</td>
                    <td>'.$ge_s2_w.'</td>
                    <td>'.$ge_s2_p.'</td>
                    <td>'.$is_s2_w.'</td>
                    <td>'.$is_s2_p.'</td>
                    <td>'.$ar_s2_w.'</td>
                    <td>'.$ar_s2_p.'</td>
                </tr>';
                 }
                ?>
            </table>
        </div>
    </div>

    
    <!--3RD SUMMETIVE -->

    <div class="container">
        <h1 class="center" >Summative-3</h1>
        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Ben(W)</th>
                    <th>Ben(p)</th>
                    <th>Eng(W)</th>
                    <th>Eng(P)</th>
                    <th>Phys(W)</th>
                    <th>Phys(P)</th>
                    <th>L.Sc(W)</th>
                    <th>L.Sc(P)</th>
                    <th>Math(W)</th>
                    <th>Math(P)</th>
                    <th>Hist(W)</th>
                    <th>Hist(P)</th>
                    <th>Geo(W)</th>
                    <th>Geo(P)</th>
                    <th>I.p(W)</th>
                    <th>I.p(P)</th>
                    <th>arbic(W)</th>
                    <th>arbic(P)</th>
                </tr>
                <?php 
                 //fatching data from data base
                 require "partial/db_connect.php";
                 $sql_f="SELECT * from `students`";
                 $result = mysqli_query($connect,$sql_f);
                 while ($row=mysqli_fetch_assoc($result)) {
                 $roll_no=$row['roll_no'];
                 $name=$row['name'];
               
                    $be_s3_w=$row['be_s3_w'];
                    $be_s3_p=$row['be_s3_p'];
                    $en_s3_w=$row['en_s3_w'];
                    $en_s3_p=$row['en_s3_p'];
                    $hi_s3_w=$row['hi_s3_w'];
                    $hi_s3_p=$row['hi_s3_p'];
                    $ge_s3_w=$row['ge_s3_w'];
                    $ge_s3_p=$row['ge_s3_p'];
                    $ma_s3_w=$row['ma_s3_w'];
                    $ma_s3_p=$row['ma_s3_p'];
                    $ph_s3_w=$row['ph_s3_w'];
                    $ph_s3_p=$row['ph_s3_p'];
                    $li_s3_w=$row['li_s3_w'];
                    $li_s3_p=$row['li_s3_p'];
                    $is_s3_w=$row['is_s3_w'];
                    $is_s3_p=$row['is_s3_p'];
                    $ar_s3_w=$row['ar_s3_w'];
                    $ar_s3_p=$row['ar_s3_p'];

                 //sanitizing data 
                 require "partial/sanitizing_data(neg_to_zero&ab).php";
                 
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>
                    <td>'.$be_s3_w.'</td>
                    <td>'.$be_s3_p.'</td>
                    <td>'.$en_s3_w.'</td>
                    <td>'.$en_s3_p.'</td>
                    <td>'.$ph_s3_w.'</td>
                    <td>'.$ph_s3_p.'</td>
                    <td>'.$li_s3_w.'</td>
                    <td>'.$li_s3_p.'</td>
                    <td>'.$ma_s3_w.'</td>
                    <td>'.$ma_s3_p.'</td>
                    <td>'.$hi_s3_w.'</td>
                    <td>'.$hi_s3_p.'</td>
                    <td>'.$ge_s3_w.'</td>
                    <td>'.$ge_s3_p.'</td>
                    <td>'.$is_s3_w.'</td>
                    <td>'.$is_s3_p.'</td>
                    <td>'.$ar_s3_w.'</td>
                    <td>'.$ar_s3_p.'</td>
                </tr>';
                 }
                ?>
            </table>
        </div>
    </div>


    <!--S1+ S2-->

    
    <div class="container">
        <h1 class="center" >S1 + S2 Total [100] </h1>
        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Ben</th>
                    <th>Eng</th>
                    <th>Phys</th>
                    <th>L.Sc</th>
                    <th>Math</th>
                    <th>Hist</th>
                    <th>Geo</th>
                    <th>I.p</th>
                    <th>arbic</th>
                </tr>
                <?php 
                 //fatching data from data base
                 require "partial/db_connect.php";
                 $sql_f="SELECT * from `students`";
                 $result = mysqli_query($connect,$sql_f);
                 while ($row=mysqli_fetch_assoc($result)) {
                 $roll_no=$row['roll_no'];
                 $name=$row['name'];
                 $bengali=$row['bengali'];
                 $be_s1_p=$row['be_s1_p'];
                 $english=$row['english'];
                 $en_s1_p=$row['en_s1_p'];
                 $history=$row['history'];
                 $hi_s1_p=$row['hi_s1_p'];
                 $geography=$row['geography'];
                 $ge_s1_p=$row['ge_s1_p'];
                 $mathematics=$row['mathematics'];
                 $ma_s1_p=$row['ma_s1_p'];
                 $physics=$row['physics'];
                 $ph_s1_p=$row['ph_s1_p'];
                 $lscience=$row['l.science'];
                 $li_s1_p=$row['li_s1_p'];
                 $islam_parichay=$row['islam_parichay'];
                 $is_s1_p=$row['is_s1_p'];
                 $arabic=$row['arabic'];
                 $ar_s1_p=$row['ar_s1_p'];
                    $be_s2_w=$row['be_s2_w'];
                    $be_s2_p=$row['be_s2_p'];
                    $en_s2_w=$row['en_s2_w'];
                    $en_s2_p=$row['en_s2_p'];
                    $hi_s2_w=$row['hi_s2_w'];
                    $hi_s2_p=$row['hi_s2_p'];
                    $ge_s2_w=$row['ge_s2_w'];
                    $ge_s2_p=$row['ge_s2_p'];
                    $ma_s2_w=$row['ma_s2_w'];
                    $ma_s2_p=$row['ma_s2_p'];
                    $ph_s2_w=$row['ph_s2_w'];
                    $ph_s2_p=$row['ph_s2_p'];
                    $li_s2_w=$row['li_s2_w'];
                    $li_s2_p=$row['li_s2_p'];
                    $is_s2_w=$row['is_s2_w'];
                    $is_s2_p=$row['is_s2_p'];
                    $ar_s2_w=$row['ar_s2_w'];
                    $ar_s2_p=$row['ar_s2_p'];
                  
                 //sanitizing data 
                 require "partial/sanitizing_data(neg_to_zero&ab).php";
                 
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>
                    <td>'.add_4($bengali,$be_s1_p,$be_s2_w,$be_s2_p).'</td>
                    <td>'.add_4($english,$en_s1_p,$en_s2_w,$en_s2_p).'</td>
                    <td>'.add_4($physics,$ph_s1_p,$ph_s2_w,$ph_s2_p).'</td>
                    <td>'.add_4($lscience,$li_s1_p,$li_s2_w,$li_s2_p).'</td>
                    <td>'.add_4($mathematics,$ma_s1_p,$ma_s2_w,$ma_s2_p).'</td>
                    <td>'.add_4($history,$hi_s1_p,$hi_s2_w,$hi_s2_p).'</td>
                    <td>'.add_4($geography,$ge_s1_p,$ge_s2_w,$ge_s2_p).'</td>
                    <td>'.add_4($islam_parichay,$is_s1_p,$is_s2_w,$is_s2_p).'</td>
                    <td>'.add_4($arabic,$ar_s1_p,$ar_s2_w,$ar_s2_p).'</td>
                </tr>';
                 }
                ?>
            </table>
        </div>
    </div>

    <!--S1+S2+S3-->

    <div class="container">
        <h1 class="center" >S1 + S2 + S3 Total [200] </h1>
        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Ben</th>
                    <th>Eng</th>
                    <th>Phys</th>
                    <th>L.Sc</th>
                    <th>Math</th>
                    <th>Hist</th>
                    <th>Geo</th>
                    <th>I.p</th>
                    <th>arbic</th>
                </tr>
                <?php 
                 //fatching data from data base
                 require "partial/db_connect.php";
                 $sql_f="SELECT * from `students`";
                 $result = mysqli_query($connect,$sql_f);
                 while ($row=mysqli_fetch_assoc($result)) {
                 $roll_no=$row['roll_no'];
                 $name=$row['name'];
                 $bengali=$row['bengali'];
                 $be_s1_p=$row['be_s1_p'];
                 $english=$row['english'];
                 $en_s1_p=$row['en_s1_p'];
                 $history=$row['history'];
                 $hi_s1_p=$row['hi_s1_p'];
                 $geography=$row['geography'];
                 $ge_s1_p=$row['ge_s1_p'];
                 $mathematics=$row['mathematics'];
                 $ma_s1_p=$row['ma_s1_p'];
                 $physics=$row['physics'];
                 $ph_s1_p=$row['ph_s1_p'];
                 $lscience=$row['l.science'];
                 $li_s1_p=$row['li_s1_p'];
                 $islam_parichay=$row['islam_parichay'];
                 $is_s1_p=$row['is_s1_p'];
                 $arabic=$row['arabic'];
                 $ar_s1_p=$row['ar_s1_p'];
                    $be_s2_w=$row['be_s2_w'];
                    $be_s2_p=$row['be_s2_p'];
                    $en_s2_w=$row['en_s2_w'];
                    $en_s2_p=$row['en_s2_p'];
                    $hi_s2_w=$row['hi_s2_w'];
                    $hi_s2_p=$row['hi_s2_p'];
                    $ge_s2_w=$row['ge_s2_w'];
                    $ge_s2_p=$row['ge_s2_p'];
                    $ma_s2_w=$row['ma_s2_w'];
                    $ma_s2_p=$row['ma_s2_p'];
                    $ph_s2_w=$row['ph_s2_w'];
                    $ph_s2_p=$row['ph_s2_p'];
                    $li_s2_w=$row['li_s2_w'];
                    $li_s2_p=$row['li_s2_p'];
                    $is_s2_w=$row['is_s2_w'];
                    $is_s2_p=$row['is_s2_p'];
                    $ar_s2_w=$row['ar_s2_w'];
                    $ar_s2_p=$row['ar_s2_p'];
                    
                    $be_s3_w=$row['be_s3_w'];
                    $be_s3_p=$row['be_s3_p'];
                    $en_s3_w=$row['en_s3_w'];
                    $en_s3_p=$row['en_s3_p'];
                    $hi_s3_w=$row['hi_s3_w'];
                    $hi_s3_p=$row['hi_s3_p'];
                    $ge_s3_w=$row['ge_s3_w'];
                    $ge_s3_p=$row['ge_s3_p'];
                    $ma_s3_w=$row['ma_s3_w'];
                    $ma_s3_p=$row['ma_s3_p'];
                    $ph_s3_w=$row['ph_s3_w'];
                    $ph_s3_p=$row['ph_s3_p'];
                    $li_s3_w=$row['li_s3_w'];
                    $li_s3_p=$row['li_s3_p'];
                    $is_s3_w=$row['is_s3_w'];
                    $is_s3_p=$row['is_s3_p'];
                    $ar_s3_w=$row['ar_s3_w'];
                    $ar_s3_p=$row['ar_s3_p'];
                  
                 //sanitizing data 
                 require "partial/sanitizing_data(neg_to_zero&ab).php";
                 
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>
                    <td>'.add_4($bengali,$be_s1_p,$be_s2_w,$be_s2_p)+add_2($be_s3_w,$be_s3_p).'</td>
                    <td>'.add_4($english,$en_s1_p,$en_s2_w,$en_s2_p)+add_2($en_s3_w,$en_s3_p).'</td>
                    <td>'.add_4($physics,$ph_s1_p,$ph_s2_w,$ph_s2_p)+add_2($ph_s3_w,$ph_s3_p).'</td>
                    <td>'.add_4($lscience,$li_s1_p,$li_s2_w,$li_s2_p)+add_2($li_s3_w,$li_s3_p).'</td>
                    <td>'.add_4($mathematics,$ma_s1_p,$ma_s2_w,$ma_s2_p)+add_2($ma_s3_w,$ma_s3_p).'</td>
                    <td>'.add_4($history,$hi_s1_p,$hi_s2_w,$hi_s2_p)+add_2($hi_s3_w,$hi_s3_p).'</td>
                    <td>'.add_4($geography,$ge_s1_p,$ge_s2_w,$ge_s2_p)+add_2($ge_s3_w,$ge_s3_p).'</td>
                    <td>'.add_4($islam_parichay,$is_s1_p,$is_s2_w,$is_s2_p)+add_2($is_s3_w,$is_s3_p).'</td>
                    <td>'.add_4($arabic,$ar_s1_p,$ar_s2_w,$ar_s2_p)+add_2($ar_s3_w,$ar_s3_p).'</td>
                </tr>';
                 }
                ?>
            </table>
        </div>
    </div>
    

    
    <!--Avg & Grade-->

    <div class="container">
        <h1 class="center" >Avg [100] & Grade</h1>
        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Ben[A]</th>
                    <th>Ben[G]</th>
                    <th>Eng[A]</th>
                    <th>Eng[G]</th>
                    <th>Phys[A]</th>
                    <th>Phys[G]</th>
                    <th>L.Sc[A]</th>
                    <th>L.Sc[G]</th>
                    <th>Math[A]</th>
                    <th>Math[G]</th>
                    <th>Hist[A]</th>
                    <th>Hist[G]</th>
                    <th>Geo[A]</th>
                    <th>Geo[G]</th>
                    <th>I.p[A]</th>
                    <th>I.p[G]</th>
                    <th>arbic[A]</th>
                    <th>arbic[G]</th>
                </tr>
                <?php 
                 //fatching data from data base
                 require "partial/db_connect.php";
                 $sql_f="SELECT * from `students`";
                 $result = mysqli_query($connect,$sql_f);
                 while ($row=mysqli_fetch_assoc($result)) {
                 $roll_no=$row['roll_no'];
                 $name=$row['name'];
                 $bengali=$row['bengali'];
                 $be_s1_p=$row['be_s1_p'];
                 $english=$row['english'];
                 $en_s1_p=$row['en_s1_p'];
                 $history=$row['history'];
                 $hi_s1_p=$row['hi_s1_p'];
                 $geography=$row['geography'];
                 $ge_s1_p=$row['ge_s1_p'];
                 $mathematics=$row['mathematics'];
                 $ma_s1_p=$row['ma_s1_p'];
                 $physics=$row['physics'];
                 $ph_s1_p=$row['ph_s1_p'];
                 $lscience=$row['l.science'];
                 $li_s1_p=$row['li_s1_p'];
                 $islam_parichay=$row['islam_parichay'];
                 $is_s1_p=$row['is_s1_p'];
                 $arabic=$row['arabic'];
                 $ar_s1_p=$row['ar_s1_p'];
                    $be_s2_w=$row['be_s2_w'];
                    $be_s2_p=$row['be_s2_p'];
                    $en_s2_w=$row['en_s2_w'];
                    $en_s2_p=$row['en_s2_p'];
                    $hi_s2_w=$row['hi_s2_w'];
                    $hi_s2_p=$row['hi_s2_p'];
                    $ge_s2_w=$row['ge_s2_w'];
                    $ge_s2_p=$row['ge_s2_p'];
                    $ma_s2_w=$row['ma_s2_w'];
                    $ma_s2_p=$row['ma_s2_p'];
                    $ph_s2_w=$row['ph_s2_w'];
                    $ph_s2_p=$row['ph_s2_p'];
                    $li_s2_w=$row['li_s2_w'];
                    $li_s2_p=$row['li_s2_p'];
                    $is_s2_w=$row['is_s2_w'];
                    $is_s2_p=$row['is_s2_p'];
                    $ar_s2_w=$row['ar_s2_w'];
                    $ar_s2_p=$row['ar_s2_p'];
                    
                    $be_s3_w=$row['be_s3_w'];
                    $be_s3_p=$row['be_s3_p'];
                    $en_s3_w=$row['en_s3_w'];
                    $en_s3_p=$row['en_s3_p'];
                    $hi_s3_w=$row['hi_s3_w'];
                    $hi_s3_p=$row['hi_s3_p'];
                    $ge_s3_w=$row['ge_s3_w'];
                    $ge_s3_p=$row['ge_s3_p'];
                    $ma_s3_w=$row['ma_s3_w'];
                    $ma_s3_p=$row['ma_s3_p'];
                    $ph_s3_w=$row['ph_s3_w'];
                    $ph_s3_p=$row['ph_s3_p'];
                    $li_s3_w=$row['li_s3_w'];
                    $li_s3_p=$row['li_s3_p'];
                    $is_s3_w=$row['is_s3_w'];
                    $is_s3_p=$row['is_s3_p'];
                    $ar_s3_w=$row['ar_s3_w'];
                    $ar_s3_p=$row['ar_s3_p'];
                  
                 //sanitizing data 
                 //$avg=round(($total+add_2($ph_s3_w,$ph_s3_p))/2,0,PHP_ROUND_HALF_UP);
                 require "partial/sanitizing_data(neg_to_zero&ab).php";
                 
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>';

                    $avg=round((add_4($bengali,$be_s1_p,$be_s2_w,$be_s2_p)+add_2($be_s3_w,$be_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($english,$en_s1_p,$en_s2_w,$en_s2_p)+add_2($en_s3_w,$en_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($physics,$ph_s1_p,$ph_s2_w,$ph_s2_p)+add_2($ph_s3_w,$ph_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($lscience,$li_s1_p,$li_s2_w,$li_s2_p)+add_2($li_s3_w,$li_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($mathematics,$ma_s1_p,$ma_s2_w,$ma_s2_p)+add_2($ma_s3_w,$ma_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($history,$hi_s1_p,$hi_s2_w,$hi_s2_p)+add_2($hi_s3_w,$hi_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($geography,$ge_s1_p,$ge_s2_w,$ge_s2_p)+add_2($ge_s3_w,$ge_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($islam_parichay,$is_s1_p,$is_s2_w,$is_s2_p)+add_2($is_s3_w,$is_s3_p))/2,0,PHP_ROUND_HALF_UP);

                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>';

                    $avg=round((add_4($arabic,$ar_s1_p,$ar_s2_w,$ar_s2_p)+add_2($ar_s3_w,$ar_s3_p))/2,0,PHP_ROUND_HALF_UP);
                    
                    echo
                    '<td>'.$avg.'</td>
                    <td>'.check_g($avg).'</td>
                </tr>';
                 }
                ?>
            </table>
        </div>
    </div>

    <?php require "partial/footer.php"; ?>
</body>

</html>