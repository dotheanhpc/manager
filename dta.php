<?php
$token = 'EAAAAAYsX7TsBANl2raL5JjomkdZAj0lD9QzBndjTsUMKTQqhT3IiYE83D42PbQQ5U8ZCf4xtZCm4erVXITu9ht0d6hZBZCg6ukb33ZB2RZCVZCeABnqA3oAFKvdMn2u5YgxN807yBo7aV3t6hImXHYZAJaxZCV0FXf8oBkTIZCMlm8HBVjqyrFrMmk9T4GWBNXnu7WZCAuc3RGZBLMAZDZD';
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
