<?php
$token = 'EAAAAAYsX7TsBABeOBeUQjHS7a6J3tZCIxybql0Pn7xpvJJyyHl852WoEWFP1Wau33LOnZBggJIujHCCSEzc0RApCFGZCqPoZAScFc4qSoAnWiBsyzwZAMjNUxrY5xJt9ZC65uOnkFUP6ud18SIEPltUhDPEGde97TcizKAbi9ksudnvj3ZCcWMpY9u2zxntedDHd4liUnPGSgZDZD';
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
