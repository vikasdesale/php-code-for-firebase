<?php
$server_key="AIzaSyCPrl-UpLSeVV75IFmu5x-62pSTfsxMxy4";
$topic_address="/topics/info";
$fcm_server_url="http://fcm.googleapis.com/fcm/send";

$title=utf8_encode("GECA TPO");
$content_text=utf8_encode("Welcome At GECA TPO...2017");

$httpheader=array('Content-Type:application/json','Authorization:key='.$server_key);
$post_content=array('to' => $topic_address,'data' => array('title' => $title,'content-text' => $content_text));

$curl_connection=curl_init();
curl_setopt($curl_connection,CURLOPT_URL,$fcm_server_url);
curl_setopt($curl_connection,CURLOPT_POST,true);
curl_setopt($curl_connection,CURLOPT_HTTPHEADER,$httpheader);
curl_setopt($curl_connection,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl_connection,CURLOPT_POSTFIELDS,json_encode($post_content));

$ans_from_server=curl_exec($curl_connection);

curl_close($curl_connection);

echo "Answer from server<br/>".$ans_from_server;
?>