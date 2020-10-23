<?php
$url = $singleNews.'?api-key=5680fb03-5325-40da-b69a-d3aa453ceef5';
$response = file_get_contents($url);
$newsObject = json_decode($response,true);
$newsSingle = $newsObject['response']['content'];
?>