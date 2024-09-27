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
	
	
	
	// 向 当前"数据库对象"，发送SQL语句 ( 查询好友 )
	$selectSQL = mysqli_query($IFlink,"select * from user_relation where oneselfID='$MasterID'");
	
	// 数组下标
	$idx = 0;
	// 取出 结果集，拼接成 JSON格式的 字符串
	echo "[";
	while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
		$friendID = $fetch_row["friendID"];
		
		// 通过id 寻找 好友姓名
		$selectSQL_inner = mysqli_query($IFlink,"select * from system_user where id='$friendID'");
		$fetch_rowinner = mysqli_fetch_assoc($selectSQL_inner);
		$friendname = $fetch_rowinner["uname"];
		
		$ALLNotes[$idx] = "{
			\"friendID\" : \"$friendID\",
			\"friendname\" : \"$friendname\"
		}";
		
		echo $ALLNotes[$idx].",";
		$idx++;
	}
	echo "]";
	
	
	









?>