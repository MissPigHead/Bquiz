<?php
include_once("../base.php");
$Good->delete($_POST);
$b=$Blog->find($_POST['blog']);
$b['good']--;
$Blog->save($b);
