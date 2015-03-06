<?php
//error_reporting(0);
require 'parserVideo.class.php';

require "core/iqiyi.class.php";
require "core/base.class.php";
require "core/letv.class.php";
//require "core/letv.class_2013.php";
require "core/tudou.class.php";
require "core/youku.class.php";
//require "core/youku_2013.class.php";
require "core/sohu.class.php";
require "core/qq.class.php";
require "core/sina.class.php";

header("content-type:text/html;charset=utf-8");
function parse($url){
    try{
    $result = ParserVideo::parse($url);
    if(!$result){
    	$arr = array("success"=>false);
    }
    $arr = array("code"=>200,"message"=>"request success.","success"=>true,"result"=>$result);
    //$result = Iqiyi::parse($url);
    }catch(Exception $e){
        $arr = array("success"=>false,"ex:"+$e);
    }
	header('Content-type: application/json');
    print_r(json_encode($arr));
}

//include_once "../xhprof/xhprof_lib/utils/xhprof_lib.php";
//include_once "../xhprof/xhprof_lib/utils/xhprof_runs.php";


// start profiling
//xhprof_enable();
//xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);  //同时分析CPU和Mem的开销

//$url = "http://v.qq.com/cover/y/ypq1qwp0ktzusj9/h00132shwru.html";
// $url = "http://v.youku.com/v_show/id_XNzM0MzEyNDY0.html";
$url = isset($_GET['vid'])?$_GET['vid']:$_GET['url']; 
//$url = "http://www.iqiyi.com/v_19rrnbyreg.html";
//$url = $_GET['url'];>
parse($url);

/*
// stop profiler
$xhprof_data = xhprof_disable();

// display raw xhprof data for the profiler run
//echo '<pre>';
//print_r($xhprof_data);


// save raw data for this profiler run using default
// implementation of iXHProfRuns.
$xhprof_runs = new XHProfRuns_Default();

// save the run under a namespace "xhprof_foo"
$run_id = $xhprof_runs->save_run($xhprof_data, "xhprof_foo");

echo "<a href='http://localhost/xhprof/xhprof_html/callgraph.php?run={$run_id}&source=xhprof_foo'>点击查看消耗时间</a>";


//print_r(get_headers("http://data.vod.itc.cn/preview?file=/233/52/28FAAL9Tq9UX9kOatm6bj7.mp4&start=28"));
*/
