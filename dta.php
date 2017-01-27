<?php
$token = 'EAAAAAYsX7TsBABFrn21cY6G14ZALoS6N1yvSP6oLtb0qp0EZCv5KHOaRZC07VauAdRdtBmDmg8U7MBU8ZBgxuvSkqb1h9xpAw1sk2suKEgX5WNCkEyQ3ZAZCNgOh5lFbZBxPZCg4x9DTZAWN2p0J6ODHAGn9OAg2tFV6jN1ttKzCarf4KZAgfKranzKxMxhzPdZC3Xc0NgTtNVk3QZDZD';
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
