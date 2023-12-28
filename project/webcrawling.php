<?php 

//to crawl a website you need two steps
//step 1
//send a request and get the response
//step 2
//parse the response and get the data we need

//step 1
$curl = curl_init();
$requestType = "GET";
$url = "https://www.imdb.com/chart/boxoffice/";
curl_setopt_array($curl, [
    CURLOPT_URL =>  $url,
    CURLOPT_CUSTOMREQUEST => $requestType,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => true
]);
$response = curl_exec($curl);
curl_close($curl);
// echo $response;

//writing as xml files
//dismissing possible error from php
libxml_use_internal_errors(use_errors: true);
$dom = new DOMDocument();
$dom->loadHTML($response);
$xpath = new DOMXPath($dom);

$weekendTitlenode= $xpath->query(expression: "/html/body/div[2]/main/div/div[3]/section/div/div[1]/div/div[2]/div");
// $firstItem = $weekendTitlenode->item(0);
// echo $firstItem->nodeValue;

//iterating over a giving table
for ($i=1; $i < 10 ; $i++) { 
    $MovieNode = $xpath->query("/html/body/div[2]/main/div/div[3]/section/div/div[2]/div/ul['.$i.']");
    $firstItem = $MovieNode->item(0);
    echo $firstItem->nodeValue . "<br>";
}












?>