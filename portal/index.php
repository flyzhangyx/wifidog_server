<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>flyzhangyx - 访问正常</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />			
		<?php
            session_start();
            if (empty($_SESSION['loginname'])) {
                die("错误的请求");
            }
        ?>
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
		
		<div class="am-g am-g-fixed am-margin-top">
			<div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
				<h2>登录信息</h2>			
					<table class="am-table am-table-bordered am-table-radius">
						<tbody>
							<tr>
								<td class="am-hide-sm-only">当前帐号</td>					
								<td><?php echo $_SESSION['loginname'] ?></td>

							</tr>
							<tr>
								<td class="am-hide-sm-only">继续访问</td>
								<td><a href="<?php echo $_SESSION['loginurl'] ?>"><?php echo @$_SESSION['loginurl']; ?></a></td>
							</tr>						
						</tbody>
					</table>
				
					<div class="am-cf">
						<form method="post" >
							<button type="submit" name="sub" class="am-btn am-btn-danger am-btn-sm am-fr">注销</button>
							<?php
								if (isset($_POST['sub'])) {
									include("../conn.php");
									$sql="update users set usertoken='' where userid={$_SESSION['loginname']}";
									mysqli_query($conn,$sql);
									session_destroy();
									echo "<script type='text/javascript'>document.onload = window.close();</script>";
									}
							?>
						</form>
					</div>
				<hr>
				<p>© 2020 flyzhangyx.com licensed by Aliyun.</p>
			</div>
		</div>
	
    </body>
</html>
