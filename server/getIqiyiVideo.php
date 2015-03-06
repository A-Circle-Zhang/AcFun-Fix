<?php
require "core/base.class.php";
require "core/iqiyi.class.php";

$vid = $_GET['vid'];
$tvid = $_GET['tvid'];
$bid = intval($_GET['bid']);
$part = intval($_GET['part']);
Iqiyi::parse("http://www.iqiyi.com/vid_".$vid.":".$tvid.".html",$bid,$part);
exit;
?>
