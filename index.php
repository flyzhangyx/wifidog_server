<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>flyzhangyx - 正在验证</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link href="../css/amazeui.min.css" rel="stylesheet" type="text/css">
		<link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>
	
	<body>
	
		<div class="header am-topbar-inverse">
		  <div class="am-g">
			<h1>flyzhangyx - 认证系统</h1>
			<p><img class="am-radius" alt="150*150" src="img.png" width="150" height="150" /></p>
		  </div>
		  <hr />
		</div>
		
		<div class="am-g">
			<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
				<h2>正在验证 (<span id="daojishi"></span>)</h2>
				<?php
                    session_start();
                    echo $_SESSION['loginurl1'];
					echo "<meta http-equiv='refresh' content='3;{$_SESSION['loginurl1']}'>";
				?>
			<hr>
			<p>© 2020 flyzhangyx </p>
			</div>
		</div>
		<script>
		var i = 3;
		function djs(){
			document.getElementById("daojishi").innerHTML = i;
			if (i <= 0) stop();
				i--; 
		}
		djs();
		var bb = setInterval("djs()",1000);
		function stop(){
			clearInterval(bb);
		}
		</script>
	</body>
</html>
