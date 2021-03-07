<?php
include_once("../base.php");
foreach($_POST['del']as $id){
  $User->delete($id);
}
to("../admin.php?do=auser");