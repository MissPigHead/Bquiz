<?php
include_once("../base.php");
$Que->save(['text'=>$_POST['que']]);
$fa=$Que->find(['text'=>$_POST['que']])['id'];
foreach($_POST['opt'] as $txt){
  $Que->save(['text'=>$txt,'fa'=>$fa]);
}
to("../admin.php?do=aque");