<?php
include_once("../base.php");
$_POST['pr']=serialize($_POST['pr']);
$Adm->save($_POST);
to("../admin.php");
?>