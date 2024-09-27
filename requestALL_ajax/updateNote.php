

<?php


	// 连接MySQL
	$IFlink = mysqli_connect("localhost", "root", "wpj666999", "personalsystem");
	// 统一 编码格式
	mysqli_query($IFlink,"set names utf8");
	

	
	// 获取 Ajax请求 携带过来的数据
	$noteid = $_POST["noteid"];
	$noteTitle = $_POST["Title"];
	$noteContent = $_POST["Content"];
	
	
	// 向 数据库 发送SQL语句，更改 笔记内容
	$updateSQL = mysqli_query($IFlink,"update user_notes set title='$noteTitle',content='$noteContent' where noteid='$noteid'");
	if( $updateSQL ){
		echo 1;
	}
	
	
	
	




?>