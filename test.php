<?php

$data = array(

'project_year' => "2018", 
'project_description' => "",
'type_id' => "1",
'project_creators' => "test",
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

    $array = json_decode($result);
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    return $result;
}
?>