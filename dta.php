<?php
$token = 'EAAAAAYsX7TsBAEDqPKpmlHfwjdiHpBsZBgJZB64ZBz9ixrkyYVwphHASfZB0EVaBkfEGZA52FOndlUZBrBWT5p2CnB6EhHxqZAGdLZCv9ZCXZB7qdZCyhcvVXNXMmCpeMLCQJPhYqZCAWKYpbgbPqJNI6QMyYq4XStgsZBFMZBjAY4qZBVLh59HnpnFvCIq7RpBQpapEUQR3G5wZC2yZAgQZDZD';
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
