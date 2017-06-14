<?php
$token = 'EAAAAAYsX7TsBALvFC2HqM1KlS1xYlPhZC4sxzAbvEJBZCg299SPN0xArh40CWKOiVoEdZCCf4h4oZCKwo1zBBFrN8juq3IiqTGuXMwqPuVW4ABLpLFbJggC7OBZAazDUN0QJ6NuFniZBt9hCZAu7BybATgtTr2ygykb9ZANDzdUN4Cq5Wc8ye0H8W7ol1OCoCyydJB9FPbZBoZCwCLWnNfkeTM';
$stt=30;
$ds=json_decode(dotheanhpc('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$stt.''),true);
for($i=1;$i<=count($ds[data]);$i++){
set_time_limit(0);
echo dotheanhpc('https://graph.facebook.com/'.$ds[data][$i-1][id].'/reactions?type=PRIDE&method=post&access_token='.$token.'');
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
