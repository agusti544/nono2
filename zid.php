MaznYs97JTiqaqEwnZGZ5jar6TDt6PotXE6-cBfEUYQZcV3RCFqMAyDcG4VnDGXW0J05xr-i7PviBBPbmB-kcrakEcNKIMouhDpAuCdcOFBT-wEOvrYK4SsyOVuVectNFmcBTD3D7JMg-9MOfvGgN2IBcITT47Xf7HikKvGVFHI=
 
<?php
        echo "Enter Your Email: ";
        $email = trim(fgets(STDIN));
        echo "Enter Your Password: ";
        $password = trim(fgets(STDIN));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://appnana.com/model/service.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"'.$email.'","password":"'.$password.'","fn":"login","device":"QlpoOTFBWSZTWT3iK9gAAAXcAAAQAAFxYAAAEIAAiBobUIMmIKGgYuPF3JFOFCQPeIr2A","broadcast_name":"login"}');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Host: appnana.com';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: id';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Origin: http://appnana.com';
$headers[] = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1';
$headers[] = 'Referer: http://appnana.com/nanas?action=login&device=QlpoOTFBWSZTWT3iK9gAAAXcAAAQAAFxYAAAEIAAiBobUIMmIKGgYuPF3JFOFCQPeIr2A';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://appnana.com/model/service.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"'.$email.'","password":"'.$password.'","fn":"getUserInfo","broadcast_name":"update_user_info"}');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Host: appnana.com';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: id';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Origin: http://appnana.com';
$headers[] = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_4_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Mobile/15E148 Safari/604.1';
$headers[] = 'Referer: http://appnana.com/nanas?action=login&device=QlpoOTFBWSZTWT3iK9gAAAXcAAAQAAFxYAAAEIAAiBobUIMmIKGgYuPF3JFOFCQPeIr2A';
$headers[] = 'Cookie: sessionid='.json_decode($result,true)['sessionid'].';';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result1 = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
print_r($result1);
