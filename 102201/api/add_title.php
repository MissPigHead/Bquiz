<?php
include_once("../base.php");
if(!empty($_FILES['img']['tmp_name'])){
  $_POST['img']=$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'],"img/{$_POST['img']}");
}
$Title->save($_POST);
to("../admin.php?do=atitle");
