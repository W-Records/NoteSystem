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
		<script src="js/jquery-3.6.0.js"></script>
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
				background: url("img/baidu.jpg") no-repeat center;
				background-size: cover;
			}

			.brandFont {
				color: white;
				/* border: solid; */

				position: fixed;
				top: 50%;
				left: 195px;
				transform: translate(0px, -50%);
			}

			.brandFont>h1 {
				font-size: 333%;
			}

			.brandFont>div {
				font-size: 200%;
				font-weight: 200;
				letter-spacing: 4px;
			}

			form {
				/* border: solid; */
				width: 480px;
				height: 500px;
				background-color: rgba(255, 255, 255, 0.9);
				border-radius: 15px;

				position: fixed;
				right: 139px;
				top: 50%;
				transform: translate(0px, -50%);

				overflow: hidden;
			}

			.registered_container>h2 {
				/* border: solid; */
				font-size: 40px;
				margin: 30px;
				margin-left: 39px;
				margin-bottom: 4px;
			}
			.returnEnter{
				/* border: solid; */
				margin-left: 39px;
				font-size: 14px;
				color: #9B9B9B;
			}
			.returnEnter>span{
				color: #0055ff;
				/* border: solid; */
			}

			.enter_container>h2 {
				font-size: 40px;
				margin: 30px;
				margin-left: 39px;
			}

			.inputGroup {
				/* border: solid; */
				display: flex;
				flex-direction: column;
				padding-top: 70px;
			}
			.enter_container>.inputGroup {
				/* border: solid; */
				display: flex;
				flex-direction: column;
				padding-top: 40px;
			}

			.inputGroup>div {
				display: flex;
				justify-content: space-between;
				align-items: baseline;
				margin-bottom: 55px;
			}
			.enter_container>.inputGroup>div {
				/* margin-bottom: 60px; */
			}

			.inputGroup>div>label {
				margin-left: 39px;
				width: 48px !important;
				text-align: right;
				font-weight: 200;
			}

			.inputGroup>div>input {
				padding: 12px;
				width: 310px;
				margin-right: 39px;
				border-radius: 4px;
				border: 1px solid #E0E0E0;
				outline: none;

				transition: box-shadow 0.3s, border 0.3s;
			}

			.registerBtn {
				/* border: solid; */
				text-align: center;
				padding-top: 15px;
			}
			.enter_container>.registerBtn {
				padding-top: 25px;
			}

			.registerBtn>input {
				width: 410px;
				height: 50px;
				background-color: #BDCEFC;
				border-radius: 25px;
				border: none;

				color: white;
				font-size: 18px;
				font-weight: 700;
				letter-spacing: 12px;
			}

			a {
				text-decoration: none;
			}

			.agreementText {
				/* border: solid; */
				text-align: center;
				font-size: 13px;
				margin-top: 20px;
			}

			.NewAccount {
				/* border: solid; */
				text-align: right;
				font-size: 18px;
				margin-top: 30px;
			}

			.NewAccount>label {
				/* border: solid; */
				color: #0055ff;
				margin-right: 30px;
				font-weight: 300;
			}

			.agreementText>input {
				position: relative;
				top: 2.5px;
			}

			.inputGroup>div>input:focus {
				border: solid 1px rgba(0, 85, 255, 0.6);
				box-shadow: -1px 1px 5px rgba(0, 85, 255, 0.3),
					1px 1px 5px rgba(0, 85, 255, 0.3),
					1px -1px 5px rgba(0, 85, 255, 0.3),
					-1px -1px 5px rgba(0, 85, 255, 0.3);
			}

			.registered_container {
				/* border: solid; */
				width: 480px;
				height: 500px;
			}

			.enter_container {
				/* border: solid; */
				width: 480px;
				height: 500px;
			}
			
			.All_container{
				/* border: solid; */
				width: 1000px;
				display: flex;
				
				position: absolute;
				/* left: 0px; */
				/* bottom: -500px; */
			}
			
			.forgetPassword{
				/* border: solid; */
				position: absolute;
				left: 373px;
				bottom: 175px;
				
				font-size: 15px;
			}
			
			.forget_container{
				/* border: solid; */
				width: 480px;
				height: 500px;
				position: absolute;
				
				/* top: -500px; */
				display: none;
			}
			.forget_container>h1{
				/* border: solid; */
				text-align: center;
				padding-top: 90px;
				font-size: 40px;
			}
			.searchContent{
				/* border: solid; */
				text-align: center;
				
				padding-top: 50px;
			}
			.searchContent>input[type="text"]{
				margin-top: 15px;
				
				padding: 12px;
				width: 310px;
				border-radius: 4px;
				border: 1px solid #E0E0E0;
				outline: none;
				
				transition: box-shadow 0.3s, border 0.3s;
			}
			
			.searchContent>input[type="text"]:focus{
				border: solid 1px rgba(0, 85, 255, 0.6);
				box-shadow: -1px 1px 5px rgba(0, 85, 255, 0.3),
					1px 1px 5px rgba(0, 85, 255, 0.3),
					1px -1px 5px rgba(0, 85, 255, 0.3),
					-1px -1px 5px rgba(0, 85, 255, 0.3);
			}
			
			.searchContent>input[type="submit"]{
				width: 410px;
				height: 50px;
				background-color: #BDCEFC;
				border-radius: 25px;
				border: none;
				
				color: white;
				font-size: 18px;
				font-weight: 700;
				letter-spacing: 12px;
				
				margin-top: 90px;
			}
			
		</style>
	</head>
	<body>

		<div class="brandFont">
			<h1>用科技</h1>
			<div>让复杂的世界更简单</div>
		</div>

		<form action="log in.php" method="GET">
			<div class="All_container">
				
				<!-- 登录 -->
				<div class="enter_container">
					<h2>欢迎登录</h2>
				
					<div class="inputGroup">
						<div>
							<label for="uname">用户名</label> <input name="uname" type="text" id="uname" placeholder="请输入用户名" />
						</div>
						<div>
							<label for="upassword">密&emsp;码</label> <input name="upassword" type="text" id="upassword" placeholder="请输入用户名" />
						</div>
						
						<span class="forgetPassword">忘记密码？</span>
					</div>
				
					<p class="registerBtn">
						<input type="submit" value="登录" name="enterBtn"/>
					</p>
					<p class="NewAccount">
						<label class="NewAccount_label">立即注册</label>
					</p>
				</div>
<?php

	// 连接MySQL
	$IFlink = mysqli_connect("localhost", "root", "wpj666999", "personalsystem");
	
	// 判断 是否 点击了，登录 按钮
	if( !empty( $_GET["enterBtn"] ) ){
		
		$getUname = $_GET["uname"];
		$getUpassword = $_GET["upassword"];
		
		// 向 当前"数据库对象"，发送SQL语句 ( 返回表的 结果集 )
		$selectSQL = mysqli_query($IFlink,"select * from system_user");
		
		// 判断 是否有 与账户密码 匹配的
		$flag = 0;
		// 取出 结果集，与 账户密码 进行 验证
		while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
			
			if( $getUname==$fetch_row["uname"] && $getUpassword==$fetch_row["upassword"] ){
				$flag++;
			}
		}
		if( $flag>0 ){
			
			// 查询 用户ID
			$selectSQL = mysqli_query($IFlink,"select id from system_user where uname='$getUname'");
			$userID = mysqli_fetch_assoc($selectSQL);
			
			// 向会话 $_SESSION数组 中，添加数据
			$_SESSION["masterID"] = $userID["id"];
			
			echo "<script>";
			echo " window.location.href = 'mainPage.php' ";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo "alert('账户 或 密码 错误')";
			echo "</script>";
		}
		
		
	}

?>
				
				
				

				<!-- 注册 -->
				<div class="registered_container">
					<h2>欢迎注册</h2>
					<p class="returnEnter">已有帐号？  <span>登录</span> </p>

					<div class="inputGroup">

						<div>
							<label for="loginName">用户名</label> <input name="loginName" type="text" id="loginName" placeholder="请设置用户名" />
						</div>
						<div>
							<label for="loginPassword">密&emsp;码</label> <input name="loginPassword" type="text" id="loginPassword" placeholder="请设置用户名" />
						</div>

					</div>

					<p class="registerBtn">
						<input type="submit" value="注册" name="loginBtn"/>
					</p>
					<p class="agreementText">
						<input type="checkbox" />
						<label>阅读并接受 <a href="#">《百度用户协议》</a> 及 <a href="#">《百度隐私权保护声明》</a></label>
					</p>
				</div>
<?php

	// 判断 是否 点击了，注册 按钮
	if( !empty( $_GET["loginBtn"] ) ){
		
		$getloginName = $_GET["loginName"];
		$getloginPassword = $_GET["loginPassword"];
		
		// 判断 用户 是否输入
		if($getloginName==""){
			echo "<script>";
			echo "alert(' 账户、密码，不能为 空 ')";
			echo "</script>";
		}
		else{
			// 向 当前"数据库对象"，发送SQL语句 ( 插入语句 )
			$insertSQL = mysqli_query($IFlink,"insert into system_user(uname,upassword) values('$getloginName','$getloginPassword')");
			
			echo "<script>";
			echo "alert(' 恭喜 注册成功! ')";
			echo "</script>";
		}
		
	}

?>
			</div>
			
			<!-- 忘记密码 -->
			<div class="forget_container">
				<h1>账号设置</h1>
				
				<p class="searchContent">
					<label>请输入 需要设置的账号</label>
					<br />
					<input type="text" name="setname"/>
					<br />
					<input type="submit" name="forgetBtn" value="下一步"/>
				</p>
			</div>
<?php

	// 判断 是否 点击了，下一步 按钮
	if( !empty( $_GET["forgetBtn"] ) ){
		
		// 向会话 $_SESSION数组 中，添加数据
		$_SESSION["getSetname"] = $_GET["setname"];
		
		// 向 当前"数据库对象"，发送SQL语句 ( 返回表的 结果集 )
		$selectSQL = mysqli_query($IFlink,"select * from system_user");
		
		// 取出 结果集，判断 用户 是否 存在
		$flag = 0;
		while( $fetch_row = mysqli_fetch_assoc($selectSQL) ){
			
			if( $fetch_row["uname"]==$_GET["setname"] ){
				$flag++;
			}
		}
		if($flag>0){
			echo "<script>";
			echo " window.location.href = 'resetPasswordPage.php' ";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo "alert('设置的账号 不存在')";
			echo "</script>";
		}
		
	}

?>

		</form>

	</body>
</html>


<script>
	$(function() {

		$(".NewAccount_label").click(function() {
			
			$(".All_container").animate({
				"left" : "-480px"
			},500);
			
		})
		
		
		$(".forgetPassword").click(function(){
			
			$(".All_container").animate({
				"bottom" : "-500px"
			},400);
			
			// $(".forget_container").animate({
			// 	"top" : "0px"
			// },400);
			
			$(".forget_container").fadeIn(1000);
			
		})
		
		$(".returnEnter>span").click(function(){
			
			$(".All_container").animate({
				"left" : "0px"
			},500);
			
		})

	})
</script>
