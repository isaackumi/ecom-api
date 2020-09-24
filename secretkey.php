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

//To use the function above, just call it. e.g.
//echo i0();

//add the return value to post parameters
//userid, amount and secretkey (the echo value/content on line 7 above)



function postToPaymentApi($amount, $student_id, $secret_key){
    $data = array('amount' => $amount, 'student_id' => $student_id, 'secret_key' => $secret_key);
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



?>