<?php
include_once("base.php");
print_r($_SESSION);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="jquery-3.4.1.js"></script>
<script src="./home_files/js.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="?">
            	<img src="./home_files/0416.jpg">
            </a>
                        <div style="padding:10px;">
                <a href="index.php">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |
                <?php
                if(empty($_SESSION['user'])){
                        ?>
        <a href="?do=login">會員登入</a> |
                        <?php
        
}else{
        
        ?>
        <a href="api/mlogout.php">登出</a> |
                <?php
                }
                ?>
                                <a href="?do=adlogin">管理登入</a>
           </div>
           <marquee behavior="" direction="">
           年終特賣會開跑了&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情人節特惠活動
           </marquee>
                </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
<!-- menu -->
<?php
        $tn=$Goods->count(['sh'=>1]);
?>
<a href="?do=main">全部商品(<?=$tn?>)</a>
<?php
$fs=$Cls->all(['fa'=>0]);
foreach($fs as $f){
        $fn=$Goods->count(['sh'=>1,'fa'=>$f['id']])[0];
?>
<a href="?do=main&id=<?=$f['id']?>" onmouseover="show(<?=$f['id']?>)"><?=$f['tt']?>(<?=$fn?>)</a>
<?php
$ss=$Cls->all(['fa'=>$f['id']]);
foreach($ss as $s){
        $sn=$Goods->count(['sh'=>1,'son'=>$s['id']])[0];
?>
<a href="?do=main&id=<?=$s['id']?>&f=<?=$f['id']?>" class="son fa<?=$f['id']?>" style="background:#Fee"><?=$s['tt']?>(<?=$sn?>)</a>
<?php
}
}
?>
<script>
$(".son").hide()
function show(id){
        $(".son").hide()
        $(`.fa${id}`).show()
}
</script>




        	            </div>
                        <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                <?php 
                if(empty($_SESSION['total'])){
                        $num=$Visit->find(['date'=>date("m-d")]);
                        if(!$num){
                                $Visit->save(['date'=>date("m-d"),'num'=>1]);
                        }else{
                                $num['num']++;
                                $Visit->save($num);
                        }
                        $total=$Visit->q("select sum(`num`) from visit");
                        $_SESSION['total']=$total[0];
                }
                        echo $_SESSION['total'];
                ?></div>
            </span>
                    </div>
        <div id="right">

        
		<?php
		if(empty($_GET['do'])){
			include_once("main.php");
		}else{
			include_once($_GET['do'].".php");
		}
		
		?>

        	        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
        <?=$Ft->find(1)['ft']?></div>
    </div>

</body></html>