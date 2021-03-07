<?php
include_once("../base.php");
$ss=$Cls->all(['fa'=>$_POST['id']]);
foreach($ss as $s){
  echo "<option value='{$s['id']}'>{$s['tt']}</option>";
}