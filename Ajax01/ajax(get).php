<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ajax登录</title>
</head>
<body>
	<div>
		<form id="form">
			用户名: <input type="text" name="username" id="username"><br>
			密码: 	<input type="password" name="password" id="password">
			<input type="button" name="" value="登录" id="btn"> <!-- 要用button,别用submit -->
		</form>
		<div id="showInfo"></div>
	</div>
	<script type="text/javascript">
		window.addEventListener("load",function(){
			var btn = document.getElementById("btn");
			var showInfo = document.getElementById("showInfo");
			btn.addEventListener("click",function(){

				var username = document.getElementById("username").value;
				var password = document.getElementById("password").value;
		
				// 第一步：创建xhr
				var xhr = null;
				if (window.XMLHttpRequest) {	// 标准浏览器
					xhr = new XMLHttpRequest();
				}
				else {							// 旧版本的IE浏览器
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}

				// 第二步：准备发送请求，配置发送请求的一些行为（xhr要干什么工作）
				var url = "./check(get).php?username="+username+"&password="+password+"&_t="+new Date().getTime();
				// 加上时间戳是为了避免因为缓存的问题，而没有获取到最新的数据，post提交则不需要
				xhr.open('get',url,true); 

				// 第三步：执行发送动作
				xhr.send(null);

				// 第四步：就是有没有回调函数（xhr工作完成后，是否还有其他工作要做）
				xhr.onreadystatechange = function(){
					if (xhr.readyState == 4) {
						if (xhr.status == 200) {
							var data = xhr.responseText;
							if (data == 1) {
								showInfo.innerHTML = "用户名或者密码错误";
							}
							else if (data == 2) {
								showInfo.innerHTML = "登录成功";
							}
						}
					};
				}
				
			});
		});
	</script>
</body>
</html>