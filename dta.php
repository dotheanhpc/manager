<?php
$token = 'EAAAAAYsX7TsBACI3EKlfDrcnLoV5cw4U93votOZAjSqu8Hux0CDavy2WWMaeDRLay8thaZB3BKMkrRZCkRH5hu6VLmmx5JG7kNDBm7cxBeheBsMWH7HpRLK4ZBo7swxDt3uZAkyp6XsOwql1lfMdESzTBViGvMio2XgAVou8ogz190kO6O8ZBCfwN4w5GlUNJFwelKBw97ggZDZD';
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
