<?php

    $db = new mysqli("localhost","root","","chat");
    if($db->connect_error){
        die("connection failed" .$db->connect_error);
    }

    $result = array();
    $message =isset($_POST['message'])?$_POST['message']:null;
    $from = isset($_POST['from'])?$_POST['from']:null;

    if (!empty($message) && !empty($from)) {
       $sql = "INSERT INTO `chat_data` (`message`,`sender_id`) VALUE ('".$message."' ,'".$from."')";
       $result['send_status'] = $db->query($sql);
    }

    //Printing message 
    $start = isset($_GET['start'])? intval($_GET['start']) :0;
    $items =$db->query("SELECT * from `chat_data` WHERE `sl_no` >".$start);
    while($row =$items->fetch_assoc()){
        $result['items'][] = $row;
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');

    echo json_encode($result);
?>