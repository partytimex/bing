<?php
/**
* CopyRight Bitmoe · eary
* Link https://api.ioliu.cn 
* Follow https://github.com/eary/bing
*/
require('../../lib/base.php');
$d = $_REQUEST['d'];
$w = $_REQUEST['w'];
$h = $_REQUEST['h'];
$base = new Base();

if($d){
    $img = $base->getPicOnDay($d);
    $url = $img['url'];
    $base -> imageBlur($url,$w,$h);
}else{
    $img = $base->getLastPic();
    $url = $img['url'];
    $base -> imageBlur($url,$w,$h);
}

?>