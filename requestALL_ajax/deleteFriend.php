<?php

	// 开启 会话 ( 此后的 一段时间，可以将数据 丢入Session中  )
	// 直到 关闭 整个程序，会话 才算结束
	session_start();

?>


<?php


	// 连接MySQL
	$IFlink = mysqli_connect("localhost", "root", "wpj666999", "personalsystem");
	// 统一 编码格式
	mysqli_query($IFlink,"set names utf8");
	
	
	
	// 获取会话 $_SESSION数组 中的数据
	$MasterID = $_SESSION["masterID"];
	
	
	// 获取 Ajax请求 携带过来的数据
	$friendID = $_POST["friend_ID"];
	
	
	// 向 当前"数据库对象"，发送SQL语句 ( 删除好友 )
	$deleteSQL = mysqli_query($IFlink," delete from user_relation where oneselfID='$MasterID' and friendID='$friendID' ");
	if( $deleteSQL ){
		echo 1;
	}












?>