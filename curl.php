<?php
$url='http://www.moneycontrol.com/sensex/bse/sensex-live';
$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
$part = explode('</div>',$data,69) ;
$val = explode('<div>',$part[67]);
echo $val[0] ;
$val = explode('<p',$part[68]);
echo $val[0] ;
echo "<html><body> <br/><br/><br/><br/><br/><br/><br/></body> </html>" ;
$url='http://www.moneycontrol.com/nifty/nse/nifty-live';
$ch = curl_init();
$timeout = 50;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
$data = curl_exec($ch);
$part = explode('</div>',$data,69) ;
$val = explode('<div>',$part[67]);
echo $val[0] ;
$val = explode('<div>',$part[68]);
echo $val[0] ;


curl_close($ch);


?>
