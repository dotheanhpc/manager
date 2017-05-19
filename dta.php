<?php
$token = 'EAAAAAYsX7TsBAL7CAAiPDSlXLUBBAVawfJWuHv6jmyrVZCdNZBMzcBAOTdIzF0rJagoyDtw4gDuxEDX4cVZCGnmZA1VFJGa80n1ZCBhOQnJG62Ya9d4AYWZBJnbIys3QIKHmmjcaHEB3Ef7oCTfjpqBPUiJmxCBltH9KiNtVzEkiDO6uYn8Iq5vEABkf7m2hljY93l67xq8AZDZD';
$stt=30;
$ds=json_decode(dotheanhpc('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$stt.''),true);
for($i=1;$i<=count($ds[data]);$i++){
set_time_limit(0);
echo dotheanhpc('https://graph.facebook.com/'.$ds[data][$i-1][id].'/reactions?type=HAHA&method=post&access_token='.$token.'');
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
