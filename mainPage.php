<?php

	// 开启 会话 ( 此后的 一段时间，可以将数据 丢入Session中  )
	// 直到 关闭 整个程序，会话 才算结束
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link href="Bootstrap5dist/css/bootstrap.min.css" rel="stylesheet" />
		<script src="js/jquery-3.6.0.js"></script>

		<style>
			body::-webkit-scrollbar {
				display: none;
			}
			body {
				height: 6000px;
			}


			#navigation_section {
				/* border: solid; */
				width: 100%;
				position: absolute;

				z-index: 999;
			}
			.navbar-brand{
				font-family: "华文行楷";
			}
			.navbar-brand {
				color: white;
				font-size: 50px;
				/* font-weight: 600; */
			}

			.nav-link {
				color: white !important;
				font-size: 20px;
			}

			.navbar-toggler>img {
				width: 50px;
			}


			#imgBackground_section {
				/* border: solid red; */
				width: 100%;
				height: 100vh;
				/* overflow: hidden; */

				display: flex;
				justify-content: center;
				align-items: center;
			}

			#imgBackground_section>div {
				background-size: cover;
				-webkit-background-size: cover;
				width: 100%;
				height: 100%;

				position: absolute;

				display: none;

				background-attachment: fixed;
			}

			.mainImg01 {
				background: url("img/mainImg01.jpg") no-repeat center;

				display: block !important;
			}

			.mainImg02 {
				background: url("img/mainImg02.jpg") no-repeat center;
			}

			.mainImg03 {
				background: url("img/mainImg03.jpg") no-repeat center;
			}

			.mainImg04 {
				background: url("img/mainImg04.jpg") no-repeat center;
			}

			.mainImg05 {
				background: url("img/mainImg05.jpg") no-repeat center;
			}

			.main_font {
				/* border: solid; */

				color: white;
				z-index: 999;
				font-size: 50px;
				font-weight: 900 !important;
			}

			.main_font>span {
				color: #828282;
			}


			#niceMoment_section {
				padding-top: 80px;
				/* border: solid; */
				/* background-color: #828282; */
			}

			#niceMoment_section>.container {
				/* border: solid red; */
				overflow: hidden;
			}

			.Moment_content {
				/* border: solid; */
			}

			.MomentImg {
				/* border: solid; */
			}

			.MomentImg>img {
				position: relative;
				left: 300px;
				opacity: 0;
			}

			.MomentFont {
				/* border: solid green; */
			}

			.MomentFont_01 {
				/* border: solid; */
				padding: 60px;

				position: relative;
				left: 300px;
				opacity: 0;
			}

			.MomentFont_01>h2 {
				color: rgb(255, 192, 1);
			}

			.MomentFont_01>small {
				font-size: 16px;
				color: rgb(119, 119, 119);
			}

			.MomentFont_02 {
				/* border: solid; */
				font-size: 20px;
				color: rgb(187, 187, 187);
				padding: 10px;
				padding-left: 60px;

				position: relative;
				left: 300px;
				opacity: 0;
			}

			.MomentFont_03 {
				/* border: solid; */
				padding-left: 60px;
				padding-top: 30px;

				position: relative;
				left: 300px;
				opacity: 0;
			}

			.MomentFont_03>.row {
				/* border: solid limegreen; */
			}

			.MomentFont_03>.row>.col-md {
				/* border: solid; */
			}

			.MomentFont_03>.row>.col-md>h1 {
				color: rgb(255, 192, 1);
				font-size: 60px;

				/* border: solid; */
				position: relative;

				height: 72px;
				overflow: hidden;
			}

			.MomentFont_03>.row>.col-md>h1>small {
				font-size: 40px;
			}

			.MomentFont_03>.row>.col-md>small {
				font-size: 18px;
				color: rgb(58, 58, 58);
			}

			span[class^="increase0"] {
				/* border: solid green; */
				/* 解决 relative 不脱离文档流 */
				float: left;
				position: relative;
				/* top: -72px; */
				/* top: 0px; */
			}



			#seaBackground_section {
				/* border: solid #6f00a7; */
				width: 100%;
				height: 100vh;

				margin-top: 80px;
				/* background-color: #F0F6F6; */

				position: relative;

				display: flex;
				align-items: center;
			}

			.seaPicture {
				/* border: solid red; */
				width: 100%;
				height: 100%;

				background: url("img/seabg.png") no-repeat center;
				background-size: cover;
				-webkit-background-size: cover;

				position: absolute;
				z-index: -99;
			}

			#seaBackground_section>.container {
				/* border: solid; */
			}

			#seaBackground_section .col-md {
				/* border: solid green; */
			}

			.seainner01 {
				width: 555px;

				position: relative;
				left: -100px;
				opacity: 0;
			}

			.seainner02 {
				width: 360px;
				margin-left: -200px;

				position: relative;
				right: -100px;
				opacity: 0;
			}

			.seafont {
				font-weight: 900;
				font-size: 36px;

				margin-top: 75px;
				margin-bottom: 85px;

				position: relative;
				bottom: -45px;
				opacity: 0;

			}
			
			
			
			
			
			#section_rotate_icon{
				/* border: solid; */
				width: 100%;
				height: 100vh;
				
				position: relative;
			}
			.rotateIconFont{
				/* border: solid #b37759; */
				font-weight: 900;
				color: #666;
				font-family: "华文彩云";
				font-size: 2vw;
				
				text-align: center;
				
				margin-top: 80px;
				margin-bottom: 80px;
				
				position: relative;
				top: 20px;
				opacity: 0;
			}
			.rotateIconImg{
				/* border: solid #0000ff; */
				width: 100%;
				height: 360px;
				
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.iconContainer{
				/* border: solid #aaaaff; */
				/* border-radius: 50%; */
				width: 262.4px;
				height: 262.4px;
				
				display: flex;
				justify-content: center;
				align-items: center;
				
				position: relative;
				
				/* transform: rotate(360deg); */
				animation-name: myRotate;
				animation-duration: 5s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
			}
			@keyframes myRotate{
				from{
					transform: rotate(0deg);
				}
				to{
					transform: rotate(360deg);
				}
			}
			.iconContainer>img{
				
				opacity: 0;
				
				width: 44px;
				animation-name: fixed_myRotate;
				animation-duration: 5s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
			}
			@keyframes fixed_myRotate{
				from{
					transform: rotate(0deg);
				}
				to{
					transform: rotate(-360deg);
				}
			}
			.main_icon{
				width: 88px !important;
				opacity: 1 !important;
			}
			.iconContainer>img[class="top01"]{
				position: absolute;
				top: 0px;
				left: 40px;
			}
			.iconContainer>img[class="top02"]{
				position: absolute;
				top: 0px;
				right: 40px;
			}
			.iconContainer>img[class="bottom01"]{
				position: absolute;
				bottom: 0px;
				left: 40px;
			}
			.iconContainer>img[class="bottom02"]{
				position: absolute;
				bottom: 0px;
				right: 40px;
			}
			.iconContainer>img[class="left00"]{
				position: absolute;
				left: -22px;
				top: 41%;
			}
			.iconContainer>img[class="right00"]{
				position: absolute;
				right: -22px;
				top: 41%;
			}
			
			
			
			
			#motherLove_section{
				/* border: solid; */
				width: 100%;
				height: 160vh;
			}
			.motherLoveContainer{
				/* border: solid green; */
				width: 100%;
				height: 100%;
				
				position: relative;
			}
			.motherLoveContainer>div[class^="blank_"]{
				/* border: solid red; */
				
				position: absolute;
				height: 100%;
				
				background-color: white;
				
				width: 14%;
				/* width: 2%; */
			}
			.motherLoveContainer>div[class="blank_left"]{
				top: 0px;
				left: 0px;
			}
			.motherLoveContainer>div[class="blank_right"]{
				top: 0px;
				right: 0px;
			}
			.motherImg{
				/* border: solid; */
				width: 100%;
				height: 100%;
				background: url("img/motherLove.jpg") no-repeat center;
				background-size: cover;
			}
			.motherLoveFont{
				/* border: solid #ffff00; */
				width: 100%;
				
				position: absolute;
				bottom: 0px;
			}
			.motherLoveFont>h1{
				/* border: solid; */
				color: #0078d4;
				font-weight: 500 !important;
				line-height: 0.95;
				font-size: 560%;
				
				padding-left: 10%;
				margin-bottom: 58px;
			}
			.motherLoveFont>.describe{
				width: 100%;
				/* border: solid #ff557f; */
				/* background-color: white; */
			}
			.motherLoveFont>.describe>p{
				/* border: solid; */
				color: #666;
				background-color: white;
				font-size: 130%;
				
				padding: 52px 0px 52px 0px;
				
				padding-left: 10%;
				
				max-width: 720px;
			}
			
			
			
			
			
			#phone_section{
				/* border: solid; */
				width: 100%;
				height: 100vh;
				
				margin-top: 110px;
			}
			#phone_section>.container{
				/* border: solid yellow; */
				height: 100%;
			}
			.phoneContent{
				/* border: solid #0078d4; */
				height: 100%;
			}
			.phoneFont{
				/* border: solid #666; */
				width: 100%;
				height: 100%;
				
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.phoneFont>h1{
				color: #0078d4;
				font-size: 50px;
				/* font-weight: 500; */
			}
			.phoneImg{
				/* border: solid #aa007f; */
				width: 100%;
				height: 100%;
				
				position: relative;
				
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.phoneImg>img[class^="android"]{
				width: 45%;
				
				position: absolute;
				top: 50%;
				transform: translate(0px,-50%);
			}
			.phoneImg>img[class="android1"]{
				/* left: 0px; */
				/* left: auto; */
				/* left: 145px; */
			}
			.phoneImg>img[class="android3"]{
				/* right: 0px; */
				/* right: 115px; */
			}
			
			
			#returnTOP{
				position: fixed;
				right: 25px;
				bottom: 40px;
				
				opacity: 0;
			}
			#returnTOP>img{
				width: 55px;
			}
			
			
			#accountManagement{
				border: solid 0.5px #959595;
				box-shadow: 2.5px 2.5px 6.5px #959595;
				border-radius: 15px;
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				
				background-color: transparent;
				backdrop-filter: blur(10px);
				z-index: 999;
				
				padding: 150px;
				
				
				display: none;
			}
			#accountManagement>button{
				border: solid 0.5px #959595;
				box-shadow: 2.5px 2.5px 6.5px #959595;
				border-radius: 5px;
				
				padding: 25px;
				margin: 20px;
				color: #666;
			}
			#accountManagement>img{
				position: absolute;
				width: 35px;
				
				top: 8px;
				right: 10px;
			}
			
		</style>
	</head>
	<body>

		<!-- 导航栏 -->
		<section id="navigation_section">

			<nav class="navbar navbar-expand-md navbar-dark">

				<div class="container">

					<a class="navbar-brand" href="#"> lucky </a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Mynavmenu">
						<img src="img/more.png" />
					</button>

					<div class="collapse navbar-collapse" id="Mynavmenu">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item"> <a href="#phone_section" class="nav-link">笔记</a> </li>
							<li class="nav-item"> <a href="#section_rotate_icon" class="nav-link">朋友</a> </li>
							<li class="nav-item"> <a href="#" class="nav-link accountSET">账户管理</a> </li>
						</ul>
					</div>

				</div>

			</nav>

		</section>



		<!-- 背景大图片 -->
		<section id="imgBackground_section">

			<div class="mainImg01"></div>
			<div class="mainImg02"></div>
			<div class="mainImg03"></div>
			<div class="mainImg04"></div>
			<div class="mainImg05"></div>

			<h1 class="main_font">Welcome to <span>personal</span> homepage</h1>

		</section>


		<!-- 第二部分 留住瞬间 -->
		<section id="niceMoment_section">
			<div class="container">

				<div class="row Moment_content">

					<div class="col-md-4 MomentImg">
						<img class="d-none d-md-block" src="img/second01.webp" />
					</div>

					<div class="col-md-8 MomentFont">
						<div class="MomentFont_01">
							<h2>把美好的一瞬间留住</h2>
							<small>June</small>
						</div>

						<div class="MomentFont_02">
							<small>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
								nam aut! Ut, praesentium mollitia dolores eaque rem debitis
								reiciendis sequi, nam, labore assumenda accusantium necessitatibus neque.
								Sapiente cumque dolorem recusandae?
							</small>
						</div>

						<div class="MomentFont_03">
							<div class="row">
								<div class="col-md">
									<h1><span
											class="increase01">0<br />1<br />2<br />3<br />4<br />5</span><small>+</small>
									</h1>
									<small>从业年限</small>
								</div>
								<div class="col-md">
									<h1><span class="increase02">0<br />1<br />2<br />3</span><small>+</small></h1>
									<small>专业摄影</small>
								</div>
								<div class="col-md">
									<h1><span
											class="increase03">00<br />10<br />30<br />40<br />50<br />60</span><small>+</small>
									</h1>
									<small>作品案例</small>
								</div>
							</div>
						</div>


					</div>

				</div>

			</div>
		</section>



		<!-- 第三部分 海-背景 -->
		<section id="seaBackground_section">


			<!-- 海洋背景 -->
			<div class="seaPicture"> </div>

			<!-- 内容 -->
			<div class="container">
				<div class="row">
					<div class="col-md">
						<img class="img-fluid seainner01" src="img/seainner02.jpg" />
					</div>

					<div class="col-md">
						<h2 class="seafont">Feel the beauty of nature</h2>
						<img class="img-fluid d-none d-md-block seainner02" src="img/seainner04.jpg" />
					</div>
				</div>
			</div>


		</section>
		
		
		
		
		<!-- 第四部分 旋转图标 -->
		<section id="section_rotate_icon">
			
			
			<p class="rotateIconFont">
				<!-- We will feel the new life in the new era --> <br />
				点击查看 朋友的笔记
			</p>
			
			
			<div class="rotateIconImg">
				<div class="iconContainer">
					<img src="img/logoie.png" class="main_icon" />
				
					<img src="img/logocss_3.png" class="top01" />
					<img src="img/logofreebsd.png" class="top02" />
					<img src="img/logojquery.png" class="bottom01" />
					<img src="img/logokfckfc.png" class="bottom02" />
					<img src="img/logomusic.png" class="left00" />
					<img src="img/logowechat.png" class="right00" />
				</div>
			</div>
			
			
			
		</section>
		
		
		
		
		<!-- 第五部分 母亲与小女孩 -->
		<section id="motherLove_section">
			
			
			<div class="motherLoveContainer">
				
				<div class="blank_left"></div>
				<div class="motherImg"></div>
				<div class="blank_right"></div>
				
				
				<div class="motherLoveFont">
					<h1>
						让你忙碌的生活 <br />井然有序
					</h1>
					<div class="describe">
						<p>使用 Outlook 强大的内置日历持续跟踪你的会议和安排 <br />与他人的会议。</p>
					</div>
				</div>
				
			</div>
			
			
		</section>
		
		
		
		
		<!-- 第六部分 手机 -->
		<section id="phone_section">
			
			
			<div class="container">
				
				<div class="row phoneContent">
					<div class="col-md">
						<div class="phoneFont">
							<h1>开始记录笔记吧</h1>
						</div>
					</div>
					
					<div class="col-md">
						<div class="phoneImg">
							<img class="android1" src="img/android1.png"/>
							<img class="android2" src="img/android2.png"/>
							<img class="android3" src="img/android3.png"/>
						</div>
					</div>
				</div>
				
			</div>
			
			
		</section>
		
		
		
		
		
		<!-- 返回顶部 -->
		<a id="returnTOP" href="#navigation_section">
			<img src="img/returnTOP.png"/>
		</a>
		
		
		
		<!-- 账户管理 界面 -->
		<div id="accountManagement">
			
			<img src="img/close.png"/>
			
			<button class="cancelAccount"> 注销 </button>
			<button class="exitAccount"> 退出 </button>
			
		</div>













		<script src="Bootstrap5dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>





<?php



	// 获取 会话 中的数据
	$MasterID = $_SESSION["masterID"];
	var_dump( $MasterID );



?>








<script>
	$(function() {

		// 轮播 背景大图片
		// 定义 背景图片 索引
		var idx = 0;
		var backgroundImg_setInterval = setInterval(function() {
			idx++;
			// 重置 背景图片 索引
			if (idx == 5) {
				idx = 0;
			}
			$("div[class^='mainImg0']").eq(idx).fadeIn(1900).siblings("div").fadeOut(1900);

		}, 4000);



		// 第二部分 留住美好瞬间 动画    400 - 1500
		var flag = 0;
		// 滚动事件
		$(window).scroll(function() {

			// console.log( $(window).scrollTop() );

			// 判断 scroll滚动条 是否到达 指定位置
			if (150 < $(window).scrollTop() && $(window).scrollTop() < 1450) {

				flag++;
				// 解决 "动画队列"问题
				if (flag == 1) {

					$(".MomentImg>img").animate({
						"left": "0px",
						"opacity": 1
					}, 600)
					$(".MomentFont_01").animate({
						"left": "0px",
						"opacity": 1
					}, 600)

					$(".MomentFont_02").animate({
						"left": "0px",
						"opacity": 1
					}, 1400, function() {
						Fadd00()
					})

					$(".MomentFont_03").animate({
						"left": "0px",
						"opacity": 1
					}, 600)

					// console.log("其中 触发flag++");
				}

				// console.log("其中");
			} else {

				// 解决 "动画队列"问题
				flag = 0;

				$(".MomentImg>img").css({
					"left": "300px",
					"opacity": 0
				})
				$(".MomentFont_01").css({
					"left": "300px",
					"opacity": 0
				})

				$(".MomentFont_02").css({
					"left": "300px",
					"opacity": 0
				})

				$(".MomentFont_03").css({
					"left": "300px",
					"opacity": 0
				})

				Fend00();

				// console.log("外面");
			}

		})




		// 增加数字 动画
		function Fadd00() {

			var add01 = 0;
			var add02 = 0;
			var add03 = 0;
			var digitalIncrease_setInterval = setInterval(function() {
				// 判断加到几
				if (add01 <= 5) {
					$(".increase01").animate({
						"top": -72 * add01
					}, 120, "linear");

					add01++;
				}

				if (add02 < 3) {
					$(".increase02").animate({
						"top": -72 * add01
					}, 120, "linear");

					add02++;
				}

				if (add03 < 5) {
					$(".increase03").animate({
						"top": -72 * add01
					}, 120, "linear");

					add03++;
				}
			}, 120);

		}

		function Fend00() {
			$("span[class^='increase0']").css({
				"top": 0
			})
		}



		// 海-背景 动画
		var flagsea = 0;
		$(window).scroll(function() {

			// console.log($(window).scrollTop()); // 850 - 1900

			if (850 < $(window).scrollTop() && $(window).scrollTop() < 1900) {
				flagsea++;
				if (flagsea == 1) {

					$(".seainner01").animate({
						"left": 0,
						"opacity": 1
					}, 1000)
					$(".seainner02").animate({
						"right": 0,
						"opacity": 1
					}, 1000, function() {

						$(".seafont").animate({
							"bottom": 0,
							"opacity": 1
						}, 1500)

					})

				}
			}
			else {
				
				flagsea = 0;
				
				$(".seainner01").css({
					"left": "-100px",
					"opacity": 0
				})
				$(".seainner02").css({
					"right": "-100px",
					"opacity": 0
				})

				$(".seafont").css({
					"bottom": "-45px",
					"opacity": 0
				})
			}

		})
		
		
		
		
		
		
		// 第四部分 旋转图标
		var flagRotate = 0;
		$(window).scroll(function(){
			
			
			// console.log( $(window).scrollTop() );   // 1500 - 2800
			
			if( 1500<$(window).scrollTop()&&$(window).scrollTop()<2800 ){
				// 解决 动画队列
				flagRotate++;
				if(flagRotate == 1){
					
					$(".rotateIconFont").animate({
						"top" : 0,
						"opacity" : 1
					},500, function(){
						$(".top01").fadeTo(250,1,function(){
							$(".top02").fadeTo(280,1,function(){
								$(".right00").fadeTo(310,1,function(){
									$(".bottom02").fadeTo(340,1,function(){
										$(".bottom01").fadeTo(370,1,function(){
											$(".left00").fadeTo(400,1)
										})
									})
								})
							})
						})
						
						
					});
					
					// console.log("其中");
				}
			}
			else{
				flagRotate = 0;
				
				$(".rotateIconFont").css({
					"top" : "20px",
					"opacity" : 0
				})
				$(".iconContainer>img").css({"opacity" : 0})
				// console.log("外面");
			}
			
			
			
		})
		
		
		
		
		
		// 第五部分 母亲与小女孩
		var flagMotherlove = 0;
		$(window).scroll(function(){
			
			
			// console.log( $(window).scrollTop() );   // 2300 - 4000
			
			if( 2300<$(window).scrollTop()&&$(window).scrollTop()<4000 ){
				flagMotherlove++;
				// 解决 动画队列
				if( flagMotherlove == 1 ){
					
					$(".motherLoveContainer>div[class^='blank_']").animate({
						"width" : "2%"
					},2000)
					// console.log("其中");
				}
			}
			else{
				flagMotherlove = 0;
				$(".motherLoveContainer>div[class^='blank_']").css({
					"width" : "14%"
				})
				
				// console.log("外面");
			}
			
			
		})
		
		
		
		
		
		// 第六部分 手机
		var flagPhone = 0;
		$(window).scroll(function(){
			
			
			// console.log( $(window).scrollTop() );   // 3700 - 4800
			
			if( 3600<$(window).scrollTop()&&$(window).scrollTop()<4800 ){
				flagPhone++;
				// 解决 动画队列
				if( flagPhone==1 ){
					
					$(".phoneImg>img[class='android1']").animate({
						"left" : "150px"
					},600,function(){
						$(".phoneImg>img[class='android1']").animate({
							"left" : "0px"
						},260);
					});
					$(".phoneImg>img[class='android3']").animate({
						"right" : "150px"
					},600,function(){
						$(".phoneImg>img[class='android3']").animate({
							"right" : "0px"
						},260)
					});
					// console.log("其中");
				}
			}
			else{
				flagPhone = 0;
				$(".phoneImg>img[class='android1']").css({
					"left" : "auto"
				})
				$(".phoneImg>img[class='android3']").css({
					"right" : "auto"
				})
				// console.log("外面");
			}
			
			
			
			
		})
		
		
		
		
		// 点击 开始笔记字体 跳转页面
		$(".phoneFont>h1").click(function(){
			
			window.location.href = "NotePage.html";
			
		})
		
		
		
		
		// 跳转我的好友 页面
		$(".rotateIconFont").click(function(){
			
			window.location.href = "friendRelation_page.html";
			
		})
		$(".main_icon").click(function(){
			
			window.location.href = "friendRelation_page.html";
			
		})
		
		
		
		// 跳转顶部 按钮
		$(window).scroll(function(){
			
			// console.log( $(window).scrollTop() ); // 800
			if( $(window).scrollTop()>800 ){
				$("#returnTOP").stop(true,false).fadeTo(600,1);
			}
			else{
				$("#returnTOP").stop(true,false).fadeTo(600,0);
			}
			
			
		})
		
		
		
		// 管理账户
		$(".accountSET").click(function(){
			
			document.querySelector("#accountManagement").style.display="block";
			
		})
		// 关闭账户管理
		$("#accountManagement>img").click(function(){
			
			document.querySelector("#accountManagement").style.display="none";
			
		})
		
		
		// 注销账户
		$(".cancelAccount").click(function(){
			
			// 发送Ajax请求 注销账户
			$.ajax({
				type : "POST",
				url : "requestALL_ajax/cancelAccount.php",
				success : function(data){
					if(data==1){
						alert("注销成功");
						window.location.href="log in.php";
					}
					else{
						alert("注销失败");
					}
				}
			})
			
		})
		
		
		// 退出账户
		$(".exitAccount").click(function(){
			
			
			window.location.href = "log in.php";
			
			
		})
		















	})
</script>
