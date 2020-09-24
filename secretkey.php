<?php

//predefined php -- add this to your code
function i0(){

    if(!empty($_SERVER[base64_decode('U0VSVkVSX05BTUU=')])){
        $m1=$_SERVER[base64_decode('U0VSVkVSX05BTUU=')];
    }else{
        $m1=$_SERVER[base64_decode('U0VSVkVSX05BTUU=')];
    }
    return base64_encode($m1);
}





function postToPaymentApi($amount, $student_id, $secret_key){
    $data = array('amt' => $amount, 'userid' => $student_id, 'secretkey' => $secret_key);

    $endpoint = "https://apps.ashesi.edu.gh/e-com/";
    $curl = curl_init($endpoint);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if($httpCode < 400)
    {
        return $response;
    }
    else
    {
        //There was an error in the response
        return false;
    }
    curl_close($curl);
}

//Make the request
//$response =  http_post_request(BASE_URL, 300, 59942021, i0());

//return response
//echo $response



function processPayment($amount,$student_id,$secret_key){


    //API URL
    $curl = curl_init();
//    $redirect_url = "https://localhost/store/view/verifypayment.php";

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://apps.ashesi.edu.gh/e-com/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'amt'=>$amount,
            'userid'=>$student_id,
            'secretkey'=>$secret_key,


        ]),
        CURLOPT_HTTPHEADER => [
            "content-type: application/json",
            "cache-control: no-cache"
        ],
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    if($err){
        // there was an error contacting the rave API
        die('Curl returned error: ' . $err);
    }

    $transaction = json_decode($response);

    if($transaction){
        // there was an error from the API
        return $transaction;
    }else{
        return false;
    }

//    header('Location: ' . $transaction->data->link);
}



?>