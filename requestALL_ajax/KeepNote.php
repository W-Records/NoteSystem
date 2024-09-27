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
	$NoteTitle = $_POST["NoteTitle"];
	$NoteContent = $_POST["NoteContent"];
	
	if( !empty($NoteTitle) ){
		
		// 向 当前"数据库对象"，发送SQL语句 ( 插入用户笔记 )
		$insertSQL = mysqli_query($IFlink,"insert into user_notes(title,content,userno) values('$NoteTitle','$NoteContent','$MasterID')");
		
	}
	
	// 判断 笔记是否 插入成功
	if( !empty($insertSQL) ){
		echo '{
			"IFinsertNote" : 1
		}';
	}
	else{
		echo '{
			"IFinsertNote" : 0
		}';
	}
	
	
	



?>