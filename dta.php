<?php
$token = 'EAAAAAYsX7TsBAFItiHy1e1WKSkwZAD8yZCedxZBHtAjOIkellhwfdJBG74WZAwMXjLZBGybob5zCpWZCunjLzaRE4ZCAEYXvwc4z8mg3iPfB43TjeT54Vc62uR6YqMEn4630vJpGLa4YH1x5kFRC99P9haZCfRlZCJBufcZAGqWvdZCF5iXCR12tAAoRApmzSlmaKXGFp5vbe2GkQZDZD';
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