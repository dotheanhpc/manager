<?php
$token = 'EAAAAAYsX7TsBAHuL8mFnkMiPEPU07ZAYMxl120BHBPUwvHfXulNWT2gZA5aFzWz6yHMQX9L4EoqDSxjOHBCEwrliRoq49ZAiqqdCBxLGYmefPkSJjZCMs7DZBigyflgKL7lciiAXCzXjr2qQfpH5kCZBZBoOpOjlKZA37QwTxZCLRCoIRhtEfgpwI65udZCVXbkPqN4LPcdnS0ZAgZDZD';
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
