<?php
$token = 'EAAAAAYsX7TsBAGSZAs2WNmD19oc5j9Sgc1YQBezXIt8w40SfvlwoDYct0Bboh1RZBqu03gMU2HAsoiAlLuqFSlCF0VpcVuaOVxiwvrMeRvbCXZBv9ZB2pabroFZAqTfVaFyyUerSrWkFb7LagwjkjcrlQ0y2vuTvrnk6PzP21DOIfQpPmZBrfiD2iazTFqMte2SnDdMj5lZBTZBYX0HUOquH';
$stt=5;
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
