<?php
$token = 'EAAAAAYsX7TsBAHWcC4zdQrpMsK8e8mtnsxt2hZB1YNfUo70ZCT7SPjNThFWnWdnZCH1DsdXQP0BuM8aTUi8nm5l4QPkZASwA54Fe3zp6i1jT5NlR7uL774sHjfuZBhZCbmqXnvKBcT4TCKFUJ8nxCBEUtIrI7MOA1RZAzyskq1w2tVZBTmYjxfO8HnxosTC9nRHJoEAnwXuUHERmsjSlv5mS';
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
