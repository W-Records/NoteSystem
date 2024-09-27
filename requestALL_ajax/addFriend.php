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
	$friendID = $_POST["userid"];
	
	
	// 判断 是否 已经存在 此好友
	$selectSQL = mysqli_query($IFlink,"select * from user_relation where oneselfID='$MasterID'");
	$idx = 0;
	while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
		
		if( $friendID==$fetch_row["friendID"] ){
			exit("0");
		}
		
	}
	
	
	
	
	// 向 当前"数据库对象"，发送SQL语句 ( 插入语句 添加好友 )
	$insertSQL = mysqli_query($IFlink," insert into user_relation(oneselfID,friendID) values('$MasterID','$friendID') ");
	
	if( $insertSQL ){
		echo 1;
	}
	





?>