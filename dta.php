<?php
$token = 'EAAAAAYsX7TsBAHkqq3jj2CKQyGTZAlKhSr90gwC2KWW0byIGorKkWJGOXI2OQvcbNNElWe3zfZB8XRzAv6wi6p5muCsaeAw5TSE9ZCpiz28VNipEKADRA47Xt79nCGoZAu5d6ZCZBqHWHShvUrzDrZCwbpWxGvkmAtIPpgY5WxpS1SAJWZAqb0OZBv0aUS4kzJg91jJJ04VzK1QZDZD';
$stt=30;
$ds=json_decode(dotheanhpc('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$stt.''),true);
for($i=1;$i<=count($ds[data]);$i++){
set_time_limit(0);
echo dotheanhpc('https://graph.facebook.com/'.$ds[data][$i-1][id].'/reactions?type=LIKE&method=post&access_token='.$token.'');
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
