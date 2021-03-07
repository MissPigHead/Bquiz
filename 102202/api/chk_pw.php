<?php
include_once("../base.php");
$u=$User->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($u){$_SESSION['user']=$_POST['acc'];}
echo ($u)?"1":"0";
?>