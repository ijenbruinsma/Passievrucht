<?php

$data = array(

'project_title' => "1"
);

$url = "http://viggo.holidayrentcenter.com/project/get?" . http_build_query($data);
CallAPI($url);



function CallAPI($url, $data = false)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    if ($data)
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
             

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
     curl_close($curl);

    $array = json_decode($result, true);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    return $result;
	
	require([], function(Filter){
        var url = "http://viggo.holidayrentcenter.com/project/get?";
        var filter = new Filter();
        filter.placeAt(filterDiv);
        filter.buildByExpr(url, "1=1");
      });
}
?>