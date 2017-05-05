<?php
$token = 'EAAAAAYsX7TsBAPEIsDyhPijD4lNviLYOcd2YcH5duVi30AfkFn31l9ZCI1BIEOkDECYguv9w8ZC8RLDEghNlZCBWZAPFuNJfQdRdkscJuZAx7LqfUvttReKaZAwZC0ZCNNMpZAJxvZAOzMQ1oqAIbUpQ3AHP1jx8Ti5z4bb1ZCcXmZBExPI9a2zm5Ni67p1Y1NxxjZAUxaZB9KAlskTwZDZD';
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
