<?php
include_once("../base.php");
$a=$Adm->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($a){
  $_SESSION['admin']=$_POST['acc'];
}
echo ($a)?"1":"0";
?>