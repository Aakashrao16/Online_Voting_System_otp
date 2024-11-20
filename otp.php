<?php
session_start();
$phone=$_POST['phone'];
$otp=rand(0000,9999);
$_SESSION['otp']=$otp;

$API="3b92d18aa7a6176dd37d372bc2f1eb71";
$PHONE=$phone;
$OTP=$otp;
$URL="https://sms.renflair.in/V1.php?API=$API&PHONE=$PHONE&OTP=$OTP";
$curl=curl_init($URL);
curl_setopt($curl,CURLOPT_URL,$URL);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$resp=curl_exec($curl);
curl_close($curl);
$data=json_decode($resp);
$status=$data->status;
$message=$data->message;
if($status=="SUCCESS"){
    header("location:submit-otp.php");
}

 

?>