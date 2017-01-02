<?php
$token = 'EAAAAAYsX7TsBAJl1Dl8ZALYUQublog7MZABWQKfo1ulbL2fTE1xYM1x1dFClhzME48QY1RYAkmbTpPkx1pVeCFph5VZBxQ8KicRcd06crKj0c6x0vwVX6N6CvWMLR8d8ZCkJnIqYSKTGukGgaR0SGxvEGKJScaCbGZB9Arf4mYMB3hLX50DSNoZBMVgXpWU2mZBSRuiHNvZCYAZDZD';
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
