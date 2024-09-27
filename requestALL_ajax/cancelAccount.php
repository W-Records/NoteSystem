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
	
	
	
	// 清空外键的 引用
	$deleteSQL = mysqli_query($IFlink,"delete from user_relation where oneselfID='$MasterID' or friendID='$MasterID'");
	$deleteSQL = mysqli_query($IFlink,"delete from user_notes where userno='$MasterID'");
	
	
	
	// 发送SQL语，删除好友
	$deleteSQL = mysqli_query($IFlink,"delete from system_user where id='$MasterID'");
	
	if( $deleteSQL ){
		echo 1;
	}





?>