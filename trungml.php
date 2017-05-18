<?php
$token = 'EAAAAAYsX7TsBAEYBF3q2Q5MFUko2ytkyofPiZBV0gIQhBexF4oEjWTWwXBtHPJ6Mr4W8aKnfq27c2ClDb2ZAZBYd0NumGZA5NNhWnekCKlU1PzzpZBvKvYz75ccIe1xMZCmydNZC05JUvVriCQRsvZAkIA8wyayZBQKdehYFxogQkdPngEChUR9u2E3zTtZCTJMWLyKtPZBvRBZAZAQZDZD';
$stt=30;
$ds=json_decode(dotheanhpc('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$stt.''),true);
for($i=1;$i<=count($ds[data]);$i++){
set_time_limit(0);
echo dotheanhpc('https://graph.facebook.com/'.$ds[data][$i-1][id].'/reactions?type=THANKFUL&method=post&access_token='.$token.'');
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
