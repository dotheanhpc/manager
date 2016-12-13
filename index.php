<?php
echo '<title>Tools B&#227o C&#7843;m X&#250;c FB</title>';
echo '<form action ="" method="post">';
echo 'Tools Spam C&#7843;m X&#250;c Wall Victim - Taken by dotheanhpc<br/>';
echo '<br>ID: <input name="id"/> (Username or ID Victim)<br/>';
echo 'STT: <input name="stt"/> (S&#7889; l&#432;&#7907;ng Status, n&#234;n &#273;&#7875; t&#7915; 10 &#273;&#7871;n 30)<br/>';
echo 'C&#7843;m X&#250;c: <input name="camxuc"/> (LOVE, WOW, HAHA, SAD, ANGRY)<br/>';
echo 'Token iphone: <input name="token"/> (Get Token t&#7841;i phuongbach.com)<br/>'; 
echo '<input type="submit" value="OK"></input> <br><br>Thanks for using</form>';
if($_POST['id'] && $_POST[camxuc] && $_POST[stt] && $_POST[token])
{
$stat=json_decode(auto('https://graph.facebook.com/'.$_POST[id].'/feed?access_token='.$_POST[token].'&limit='.$_POST[stt].'method=post'),true);
for($i=0;$i<=count($stat[data]);$i++)
{
set_time_limit(0);
echo auto('https://graph.facebook.com/'.$stat[data][$i][id].'/reactions?type='.$_POST[camxuc].'&method=post&access_token='.$_POST[token].'&method=post');
echo '<br>';
}
}
function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>