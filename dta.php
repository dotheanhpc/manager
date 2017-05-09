<?php
$token = 'EAAAAAYsX7TsBAMml9Hh3fv9NRaTfWNLpxtI3BeTNfULws75yY79ZA3IiywA9mL6o68CxEcLNUZAnMKwXXKzM6FUMZBoek6lBKTscv2i7Ibnp4Kr3J6UbLHZCWnt45Sbt3fzHtZCToRtGbdJNrKxho3npafkN3siPe9dNkrse62GlZAatbfeCZAKOzrnl2oVhQBvDSf1SW6nxgZDZD';
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
