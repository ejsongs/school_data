<?php
$buslocation = $_GET["buslocation"]; 

echo $buslocation; 
ob_start();
       $ch = curl_init();

       //$code=$_GET['busname'];//?�류?�id
//header("Content-Type: text/html; charset=UTF-8");
$url = 'http://ws.bus.go.kr/api/rest/stationinfo/getStationByUid'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=umfGiqjtzOMarryKchlVrnqw7%2BGPqeV1bDPWigHtwAFpAB8d5lfQ8TXoBvRDCRecXTrmkbz24APGWQR0kPY3Ow%3D%3D';
$queryParams .= '&' . urlencode('stSrch') . '=' . urlencode($buslocation); /*?�류??ID*/
$queryParams .= '&' . urlencode('arsId') . '=' . urlencode('03151'); /*?�류??ID*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검?�건??/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*?�이지 번호*/


curl_setopt($ch, CURLOPT_URL, $url . $queryParams);// ?�속 url ?�보 ?�정
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE); // Request ???�??결과값을 받아?�는지 체크 - exec ?�수�??�한 반환값을 ?�격지 ?�용??받는??

curl_setopt($ch, CURLOPT_HEADER, FALSE); // ?�더?�보�?가?�오?��????�??체크 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // 받는방식
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");    
$response = curl_exec($ch); // ?�션???�행???�순??미리?�의???�션?�행
curl_close($ch);
//var_dump($response); // 값전??
 // 리소?��? 비우�? ?�러번호리턴, ?�들??�� 
// adirection
print $response;
print $buslocation; 


?>
