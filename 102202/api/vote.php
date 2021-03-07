<?php
include_once("../base.php");

$fa=$Que->find(['id'=>$_POST['fa']]);
$fa['num']++;
$Que->save($fa);
$os=$Que->all(['fa'=>$_POST['fa']]);
foreach($os as $o){
  if(in_array($o['id'],$_POST['opt'])){
    $o['num']++;
    $Que->save($o);
  }
}
to("../index.php?do=result&id={$_POST['fa']}");