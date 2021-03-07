<?php
include_once("../base.php");
$ts=$Title->all();
foreach($ts as $t){
  if(!empty($_POST['sh'])){
      in_array($t['id'],$_POST['sh']);
      $t['sh']=1;
      $Title->save($t);
    }else{
      $t['sh']=0;
      $Title->save($t);
    }
    
    if(!empty($_POST['del'])){
      in_array($t['id'],$_POST['del']);
      $Title->delete($t['id']);
    }
}
to("../admin.php?do=atitle");

