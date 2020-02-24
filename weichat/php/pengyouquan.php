<?php
    header('Content-Type: text/html;charset=utf-8');
    header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
    header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // 设置允许自定义请求头的字段
    
	include "data.php";
	$pyqData = $pyqs[0];
	$arr =$_POST;
	if($arr){
		$n = $_POST['n'];
		$pyqData = $pyqs[$n];
	}
    $reData = [
        'status' => 1,
        'message' =>'查询成功'.$n,
        'result'=>$pyqData
    ];
    $json = json_encode($reData);//把数据转换为JSON数据.
    echo $json;
    die();

?>