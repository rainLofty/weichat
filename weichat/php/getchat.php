<?php
    header('Content-Type: text/html;charset=utf-8');
    header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
    header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin'); // 设置允许自定义请求头的字段
  
	include "data.php";
	
	$arr =$_POST;
	if($arr){
		$id = $_POST['id'];
		$length = count($chats);
		for ($i=0; $i < $length; $i++) { 
			if($chats[$i]['id'] == $id){
				$userinfo = $chats[$i];
			}
		}
		if(isset($userinfo)){
			$reData = [
			    'status' => 1,
			    'message' =>'查询成功',
			    'result'=>$userinfo
			];
		}else{
			foreach ($info as $key => $value) {
				for ($i=0; $i < count($value); $i++) {
					if($value[$i]['id']==$id){
						$userinfo = $value[$i];
					}
				}
			}
			if(isset($userinfo)){
				$reData = [
				    'status' => 1,
				    'message' =>'查询成功',
				    'result'=>$userinfo
				];
			}else{
				$reData = [
				    'status' => 0,
				    'message' =>'没有该用户',
				];
			}
		}
	    
	}else{
	    $reData = [
	        'status' =>0,
	        'message' =>'请传入id值'
	    ];
	}
		
    $json = json_encode($reData);//把数据转换为JSON数据.
    echo $json;
    die();

?>