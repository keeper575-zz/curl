<?php
include("alfa.sms.class.php");
$url = 'http://www.astrosage.com/sunrise.asp' ;
$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
$val = explode('<br/>',$data);
//$sunset = explode('');
echo $val[5];
$username="8745932313";//replace username with your way2sms username
$password="gaurav575";//replace Password with your way2sms Password
$sms = new AlfaSMS() ;
$result = $sms->login("$username","$password") ;
//echo $result ;
$sms->send("8800745461","$val[5]");
$sms->logout ;
?>
