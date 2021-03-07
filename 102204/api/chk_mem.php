<?php
include_once("../base.php");
$a=$Mem->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($a){
  $_SESSION['user']=$_POST['acc'];
}
echo ($a)?"1":"0";
?>