<?php
include_once("../base.php");
$u=$User->find(['acc'=>$_POST['acc']]);
echo ($u)?"1":"0";