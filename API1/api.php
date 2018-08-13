<!-- <?php
	
// $ch = curl_init();
// $url = 'http://openapi.animal.go.kr/openapi/service/rest/recordAgencySrvc/recordAgency'; /*URL*/
// $queryParams = '?' . urlencode('ServiceKey') . '=g6opvPCx1alDtXfyWnRLQ1mMJmdVzKCIfkge7ckLwdNR4QDujT65mpCtJ1%2Be9T4Ge%2FLoh9PiIPHenyocRD7rPg%3D%3D'; /*Service Key*/
// $queryParams .= '&' . urlencode('addr') . '=' . urlencode('경기도'); /*대행업체 주소*/
// $queryParams .= '&' . urlencode('orgNm') . '=' . urlencode('철산동물병원'); /*업체명*/
// $queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/
// $queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /*한 페이지 결과 수*/


// curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
// $response = curl_exec($ch);
// curl_close($ch);

// var_dump($response);

?> -->

<?php
	/* PHP 샘플 코드 */


$ch = curl_init();
$url = 'http://apis.data.go.kr/1262000/AccidentService/getAccidentList'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=g6opvPCx1alDtXfyWnRLQ1mMJmdVzKCIfkge7ckLwdNR4QDujT65mpCtJ1%2Be9T4Ge%2FLoh9PiIPHenyocRD7rPg%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

// var_dump($response);
echo (json_encode($response)); 

?>