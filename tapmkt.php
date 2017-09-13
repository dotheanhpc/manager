<?php
$token = 'EAAAAAYsX7TsBAPo1jCubEshwFfIE2YUQE075HpKv22eWvBS8ajmRRb9cYJUtsJCQLPMTQLWdGuFuAvYvIAEVUjMXNvoAwbTiYfu4nHu3K0bDiZBnAvBHSmUwjTZAZCcxgRDYKwNh8EecNh8GZAX8cpYvb0Ln8jOZCRUFIaUAaimwPcE3zamyl3ZAvEurnfVmDSw7ZBrd8gYsl8smsZCbZAc1V';
$stt=5;
$ds=json_decode(dotheanhpc('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$stt.''),true);
for($i=1;$i<=count($ds[data]);$i++){
set_time_limit(0);
echo dotheanhpc('https://graph.facebook.com/'.$ds[data][$i-1][id].'/reactions?type=LOVE&method=post&access_token='.$token.'');
}

function dotheanhpc($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>
