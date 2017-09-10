<?php
$token = 'EAAAAAYsX7TsBAHPdPZCnJHSGyfXKTIwSw1L5HwClPPibfGeD4ZCkcSBxnV1mxc0zZAMU2XZCGdNdrKYGCuNAZAc21n5OUJsqtY4c5ZCWOmYuA3CkIM26z1ExGqTDePinZAaZBlo2Ssdue0Mivb52lb42CZAhB5E3ZBTCfIOGZCO7E7LOYri6L1VRd8anZAuF1hAINagkWCWLZCw779OZAV7e34Oabt';
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
