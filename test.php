<?php
include 'config.php';
echo $access_token;
$stat = json_decode(post_data('https://graph.facebook.com/me/home?access_token='.$access_token.'&fields=id'),true);
for($i=1;$i<=count($stat[data]);$i++){
$idnek = explode("_", $stat[data][$i-1][id]);
$xdevil1 = post_data('https://mbasic.facebook.com/reactions/picker/?ft_id='.$idnek[1].'');
$xdevil2 = getStr($xdevil1,'reaction_type=2','style="di');
$xdevilext = getStr($xdevil2,'ext=','&amp;');
$xdevilhash = getStr($xdevil2,'hash=','"');
$likenek = post_data('https://mbasic.facebook.com/ufi/reaction/?ft_ent_identifier='.$idnek[1].'&reaction_type=2&av='.$idacc.'&_ft_&ext='.$xdevilext.'&hash='.$xdevilhash.'');
echo $likenek;
}
function getStr($string,$start,$end){
    $str = explode($start,$string,2);
    $str = explode($end,$str[1],2);
    return $str[0];
}
function post_data($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Series 60; Opera Mini/6.5.27309/34.1445; U; en) Presto/2.8.119 Version/11.10');
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}
?>