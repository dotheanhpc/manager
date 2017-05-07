<?php
$token = 'EAAAAAYsX7TsBADolIZAh0Ks26ZAXXWZCOCNU7gAz2JANp3d5p2POPoKthHiZBNG1WPG2m93klcUQqMR2SnQIHyHhKj4rraZBJwd8suG6YUb6cxEyDcLJP57rZCQiepqsadbIHz6ZCsdw79xKm1cxZB7DLZBmnguWZCuZC9YnemqlWUaGMM1JsNEIATIe0WU68UM8xRw6nQ0fWlUfQZDZD';
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
