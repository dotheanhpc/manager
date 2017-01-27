<?php
$token = 'EAAAAAYsX7TsBAGiIZAIDFxnedvt4eIIg9rgZAl0U13p3DN3n4VwV93qNq7FMl9Kowb8bi2f9CzTUutl6ny2PB4YMkjuhSk5MuIJ6PJsihZBwZB20bUyFESZAztYZAMskcUogR1PstcxrX4rkmHxRO0naoinQBBOaoyx5iQV3tiTMkx8UDOnvSb3FZCCZAAjXvoOHcgcZA8JPnfwZDZD';
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
