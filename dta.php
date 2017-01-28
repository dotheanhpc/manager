<?php
$token = 'EAAAAAYsX7TsBAO35lDiUeazQ5ySAfGWAxJq9ydyD0gmGgvzWb1auVHPdn7k5M1Rww6BcZCWIZCbFpv3kyeUS6cAas5RWglsgnGBb5W7ZB99XYQWenXdPgIQ7PRtaQA5VfARfx9lmCZANA3O89LYpH8b3ZCr71cP1OoWlaXwvjMISH1mGHLHD7Duyiuv3tcFvjE65ZB3sBDHQZDZD';
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
