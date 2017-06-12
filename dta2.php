<?php
$token = 'EAAAAAYsX7TsBAKsp6C1adO06eBoZCxz8PXmTeMYzflxEQyOHQC8EZC3rrRJVn1rnQ2S1DZAgCDnrzWvYBGFrGbNZBpCeLZARI15ZCMZBtkfCvOgR1oX3jEntgLh3GpYb6P2bJuZB2BxNCAgXgIbprRsm7UfNWdihZCn5h7oZCaQ3Gov7h6FdcsXKa4kZBfeYJ8NZAAgSuYsCT5qgZCTXASaZB6Y8mV';
$stt=30;
$ds=json_decode(dotheanhpc('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$stt.''),true);
for($i=1;$i<=count($ds[data]);$i++){
set_time_limit(0);
echo dotheanhpc('https://graph.facebook.com/'.$ds[data][$i-1][id].'/reactions?type=PRIDE&method=post&access_token='.$token.'');
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
