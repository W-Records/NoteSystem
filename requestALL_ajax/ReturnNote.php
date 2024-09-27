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
	
	
	
	// 获取 Ajax请求 携带过来的数据
	$SearchValue = $_POST["SearchValue"];
	$friendid = $_POST["friendid"];
	
	
	if( $friendid=="" ){
		
		// 获取会话 $_SESSION数组 中的数据
		$MasterID = $_SESSION["masterID"];
		
	}
	else{
		// 设置 应该的主人ID
		$MasterID = $friendid;
	}
	
	
	
	
	// 判断 用户输入 的数据
	if( $SearchValue=="" ){
		
		$idx = 0;
		
		// 向 当前"数据库对象"，发送SQL语句 ( 查询所有笔记 )
		$selectSQL = mysqli_query($IFlink,"select * from user_notes where userno='$MasterID'");
		// 取出 结果集，拼接成 JSON格式的 字符串
		echo "[";
		while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
			$id = $fetch_row["noteid"];
			$title = $fetch_row["title"];
			$content = $fetch_row["content"];
			
			$ALLNotes[$idx] = "{
				\"noteid\" : \"$id\",
				\"NoteTitle\" : \"$title\",
				\"NoteContent\" : \"$content\"
			}";
			
			echo $ALLNotes[$idx].",";
			$idx++;
		}
		echo "]";
		// print_r($ALLNotes);
		
	}
	else{
		
		$idx = 0;
		
		// 向 当前"数据库对象"，发送SQL语句 ( 模糊查询 )
		$selectSQL = mysqli_query($IFlink,"select * from user_notes where title like '%$SearchValue%' and userno='$MasterID'");
		// 取出 结果集，拼接成 JSON格式的 字符串
		echo "[";
		while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
			$id = $fetch_row["noteid"];
			$title = $fetch_row["title"];
			$content = $fetch_row["content"];
			
			$ALLNotes[$idx] = "{
				\"noteid\" : \"$id\",
				\"NoteTitle\" : \"$title\",
				\"NoteContent\" : \"$content\"
			}";
			
			echo $ALLNotes[$idx].",";
			$idx++;
		}
		echo "]";
		
		
	}
	

	




?>