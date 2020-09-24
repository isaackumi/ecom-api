<?php

require ('secretkey.php');


if (isset($_POST['payment'])){

    $key = $_POST['secret_key'];
    $amount = $_POST['amount'];
    $student_id = $_POST['student_id'];

    $res = postToPaymentApi($amount,$student_id,$key);
    if($res){
        echo $res;

    }else{
        echo "An error occurred!!";
    }
}