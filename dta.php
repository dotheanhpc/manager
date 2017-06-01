<?php
$token = 'EAAAAAYsX7TsBAFdspq5OAfdVRvvgz5ZB7uGgm0NryiNgzNZB0YnV3HZCo6Nb7vy25mGe8v1XQyuVdtuSEnJcYz2XXwuxNPS7QSSfRmuuyc3n6NIlZBN8wAfGwPPddNgG4m10sfvtexFjhdQcMAZAcZBm3aH1fNpM5xnztkYVZAxT9Rk95lomXZAzFzOkEiijN9BZAWVGHEZBXvkwZDZD';
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
