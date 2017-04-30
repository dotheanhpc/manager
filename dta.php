<?php
$token = 'EAAAAAYsX7TsBAPpZBzLMl3sPVte2kziJvU6WNivSsBQGaNyJNNMOzHJdzWvu4xL9gszRzlgIS6oz7J2iQG9GZCritr6RO1Xscr7wzWycXGwMDWP9BXMIxW05Rrw6sazTj1wlKIY1cXj3ARmGejVQq646Wv4ps7IRzp86r83cM5mym9pSl4ZBPujbcuUoIg9sUeCUfccDwZDZD';
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
