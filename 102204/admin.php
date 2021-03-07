<?php
include_once("base.php");
print_r($_SESSION);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./Manage Page_files/css.css" rel="stylesheet" type="text/css">
<script src="jquery-3.4.1.js"></script>
<script src="./Manage Page_files/js.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="?">
            	<img src="./Manage Page_files/0416.jpg">
            </a>
                            <img src="./Manage Page_files/0417.jpg">
                   </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
        	            	<a href="?do=aadmin">管理權限設置</a>
            	            	<a href="?do=ath">商品分類與管理</a>
            	            	<a href="?do=aorder">訂單管理</a>
            	            	<a href="?do=amem">會員管理</a>
            	            	<a href="?do=abot">頁尾版權管理</a>
            	            	<a href="?do=anews">最新消息管理</a>
            	        	<a href="api/logout.php" style="color:#f00;">登出</a>
                    </div>
                    </div>
        <div id="right">

		<?php
		if(empty($_GET['do'])){
			include_once("aadmin.php");
		}else{
			include_once($_GET['do'].".php");
		}
		
		?>


        	        </div>
        <div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
        <?=$Ft->find(1)['ft']?></div>
    </div>

</body></html>