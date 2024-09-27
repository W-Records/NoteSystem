<?php

	// 开启 会话 ( 此后的 一段时间，可以将数据 丢入Session中  )
	// 直到 关闭 整个程序，会话 才算结束
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			* {
				margin: 0px;
				padding: 0px;
			}
			
			body::-webkit-scrollbar {
				display: none;
			}
			
			body {
				width: 100vw;
				height: 100vh;
				background: url("img/view.jpg") no-repeat center;
				background-size: cover;
				
				display: flex;
				justify-content: center;
				align-items: center;
			}
			form {
				/* border: solid; */
				width: 480px;
				height: 500px;
				background-color: rgba(255, 255, 255, 0.9);
				border-radius: 15px;
			}
			.container>h1{
				/* border: solid; */
				text-align: center;
				padding-top: 90px;
				font-size: 40px;
			}
			.container>p{
				/* border: solid; */
				text-align: center;
				padding-top: 50px;
			}
			
			.container>p>input[type="text"]{
				margin-top: 15px;
				
				padding: 12px;
				width: 310px;
				border-radius: 4px;
				border: 1px solid #E0E0E0;
				outline: none;
				
				transition: box-shadow 0.3s, border 0.3s;
			}
			.container>p>input[type="text"]:focus{
				border: solid 1px rgba(0, 85, 255, 0.6);
				box-shadow: -1px 1px 5px rgba(0, 85, 255, 0.3),
					1px 1px 5px rgba(0, 85, 255, 0.3),
					1px -1px 5px rgba(0, 85, 255, 0.3),
					-1px -1px 5px rgba(0, 85, 255, 0.3);
			}
			
			.container>p>input[type="submit"]{
				width: 410px;
				height: 50px;
				background-color: #BDCEFC;
				border-radius: 25px;
				border: none;
				
				color: white;
				font-size: 18px;
				font-weight: 700;
				letter-spacing: 12px;
				
				margin-top: 95px;
			}
		</style>
	</head>
	<body>
		<form action="resetPasswordPage.php" method="GET">
			<div class="container">
				
				<h1>设置 新密码</h1>
			
				<p>
					<label>请输入 新密码</label>
					<br />
					<input type="text" name="NewPassword"/>
					<br />
					<input type="submit" name="resetBtn" value="重置密码"/>
				</p>
				
			</div>	
<?php

	// 连接MySQL
	$IFlink = mysqli_connect("localhost", "root", "wpj666999", "personalsystem");

	// 判断 是否 点击了，重置密码 按钮
	if( !empty( $_GET["resetBtn"] ) ){
		
		$getNewPassword = $_GET["NewPassword"];
		
		// 获取 会话 中的数据
		$getSetname = $_SESSION["getSetname"];
		
		// 判断 用户 是否输入
		if($getNewPassword==""){
			echo "<script>";
			echo "alert(' 请输入密码！！！ ')";
			echo "</script>";
		}
		else{
			// 向 当前"数据库对象"，发送SQL语句 ( 修改语句 )
			$updateSQL = mysqli_query($IFlink," update system_user set upassword = '$getNewPassword' where uname = '$getSetname' ");
			
			// 销毁 会话 $_SESSION数组中 单个数据
			unset( $_SESSION["getSetname"] );
			
			echo "<script>";
			echo "alert(' 重置密码成功。 ');
				  window.location.href = 'log in.php' ";
			echo "</script>";
		}
	}

?>

		</form>
	</body>
</html>