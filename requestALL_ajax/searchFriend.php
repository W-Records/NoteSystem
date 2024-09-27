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
	$userName = $_POST["userName"];
	
	// 获取会话 $_SESSION数组 中的数据
	$MasterID = $_SESSION["masterID"];
	
	
	if($userName==""){
		exit();
	}
	
	
	// 向 当前"数据库对象"，发送SQL语句 ( 查询用户 )
	$selectSQL = mysqli_query($IFlink," select * from system_user where uname like '%$userName%' ");
	
	
	// 数组下标
	$idx = 0;
	// 取出 结果集，拼接成 JSON格式的 字符串
	echo "[";
	while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
		$id = $fetch_row["id"];
		$uname = $fetch_row["uname"];
		
		// 判断 登录账户 id
		if( $MasterID==$id ){
			continue;
		}
		
		$ALLNotes[$idx] = "{
			\"id\" : \"$id\",
			\"uname\" : \"$uname\"
		}";
		
		echo $ALLNotes[$idx].",";
		$idx++;
	}
	echo "]";








?>