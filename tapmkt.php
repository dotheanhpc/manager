<?php
$token = 'EAAAAAYsX7TsBAJZCHpnbhP5MK1XbMX62f4tt49iNoyCUAOEJ1oDZBzpH0nH9XwivKSzmpQQvkUG7E07Fhwj3mElNaXqxGa93Vl1K77OLEJBukxtmtN99tBggZAxQdPyGbaBlTmS2uorCKLEX1cfQusAL6Guz5JZCEw6n5a1TWXNhrOoDB4r1zZB4faov9rp5eKVQPplQeye3T0oO7ZBKU4';
$stt=5;
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
