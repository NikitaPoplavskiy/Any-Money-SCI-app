<?php

// SCI-key
$key = "Z7Gcamy_MyCLug_uAufm0CGzItreunf2zAsl_ki55wxjViQzjKZh2yCjEeJxBWlVLXwp";

// form data
$data = [
    'merchant' => $_POST['merchant'],
    'amount' => $_POST['amount'],
    'in_curr' => $_POST['in_curr'],
    'payway' => $_POST['payway'],
    'merchant_payfee' => $_POST['merchant_payfee'],
    'externalid' => $_POST['externalid'],
];

// signnature calculating
$data['sign'] = sign_form_data($key, $data);

// url for sending data
$url = "https://sci.any.money/invoice";

$ch = curl_init($url);

// curl options
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); // request methode
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // request data

// sending request
$result = curl_exec($ch);

// checking for some errors
$error = curl_errno($ch);
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// get response info
$info = curl_getinfo($ch);

// get redirect url
$redirectUrl = $info['redirect_url'];

// redirect
header("Location:" . $redirectUrl);


/**
 * @param $key SCI-key
 * @param $data array with form data
 * @return string
 */
function sign_form_data($key, $data) {
    ksort($data);
    $s = '';
    foreach($data as $k=>$value) {
        if (in_array(gettype($value), array('array', 'object', 'NULL')) ){
            continue;
        }
        if(is_bool($value)){
            $s .= $value ? "true" : "false";
        } else {
            $s .= $value;
        }
    }
    return hash_hmac('sha512', strtolower($s), $key);
}


