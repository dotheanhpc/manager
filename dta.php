<?php
$token = 'EAAAAAYsX7TsBAJZBxB2ku5855ZBzbREnBKvSwxsfg0CFvbdfltUBOmiSHADR3cWPt1dI8IuHHRZC2Ijcx9XNW9emGImPLRQu8ZBk2xIcg0YZBXCA0pmKZCvkKvfV5EBCxki1O9hsncCLt93a9HPtZA4rnhrmq5ukZCs2epjkNuTI5Wm5p3zd04dzddk3s9nGVTZAOVwX7Pl30FQZDZD';
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
