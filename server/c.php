<?php
if(!isset($_GET["i"])){exit;}
$is = explode("|",$_GET["i"]);
if(substr($is[0],0,1)=="/"){$is[0]=substr($is[0],1);}
header("Location:http://static.comment.acfun.mm111.net/".$is[0]."-0");
exit;
?>
