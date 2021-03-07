<?php
include_once("../base.php");
$a=$Mem->find(['acc'=>$_POST['acc']]);
echo ($a)?"1":"0";