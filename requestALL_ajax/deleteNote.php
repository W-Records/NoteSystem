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
	
	
	// 获取 Ajax 携带过来的数据
	$NoteId = $_POST["NoteId"];
	
	
	// 向 数据库 发送SQL语句，删除 指定笔记
	$delete = mysqli_query($IFlink,"delete from user_notes where noteid='$NoteId'");
	if($delete){
		echo 1;
	}
	
	
	




?>