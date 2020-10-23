<?php
$url = 'https://content.guardianapis.com/search?api-key=5680fb03-5325-40da-b69a-d3aa453ceef5';
$response = file_get_contents($url);
$newsObject = json_decode($response,true);
$newsResults = $newsObject['response']['results'];

/*test case*/
/*foreach ($newsResults as $news)
{

   echo date('d-M-y h:i:sa', strtotime($news['webPublicationDate']));
   echo '<br>';
}*/
 /*$newsResults[0]['type']    ;*/
?>