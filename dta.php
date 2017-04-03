<?php
$token = 'EAAAAAYsX7TsBAKxI9Ek66szhApNYV92QQJRhM6A9koc1zrTTlbtIToO5MigAsSd8S9SCkSIHuedbMuW4ILpu6zJZCdmYBt45eO6pZCcuflj2dE3cIZCwVgM7nKoKgZBEYD3hD1MjPoCeS8VKKBiTwalgHVh2OR2DLs6CFZAIbxrbH0iOjxWaW9wH7PyHFieL6k9q5IBZC5xAZDZD';
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
