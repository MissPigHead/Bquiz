<?php
include_once("../base.php");
$_POST['pro']=serialize($_SESSION['cart']);
$_POST['acc']=$_SESSION['user'];
$_POST['date']=date("Y-m-d");
$Ord->save($_POST);
unset($_SESSION['cart']);
?>
<script>
alert("訂購成功")
location.href="../index.php"
</script>