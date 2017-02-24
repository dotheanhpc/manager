<?php
$token = 'EAAAAAYsX7TsBAG8ughiVHZCWZCJnI4e0y0ZCZCYJoGvmwnMTQn36eV8yafpvgC5X9UZCRXJ9dFYKZBohIVqY5PZA17ZCtugkIR97eq00ZB1qjuYG77sunMbiZCVjhLOMj1T2SdLxQGL2ljGgG5BbSYC2T8ocHWMHl3lkNbtLyhXMb5VblQASTeajRZBJULFJylsYZCKrYXICNxOEXQZDZD';
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
