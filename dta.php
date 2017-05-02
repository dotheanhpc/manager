<?php
$token = 'EAAAAAYsX7TsBAPMHBn33ki2gL166xpO0VRW7pfAsIw5ITfMlq5T1pZAX11WRZCGZAFtxcqr2ZAkMZCSoZCvZApoKNhpTmi3L6gsz3Ib8jBZBBXTWZBVLPqmUpD6E2dJ1JNSog4i48XLsI2AfkLEA4FevZAjHBYHrifkAIgMcEZAQtCGvs3AXKpN9MC3mRtRBF4MtE34Na1NZBxFixwZDZD';
$stt=30;
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
