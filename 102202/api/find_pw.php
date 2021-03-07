<?php
include_once("../base.php");
$u=$User->find(['email'=>$_POST['email']]);
echo ($u)?"您的密碼為:{$u['pw']}":"查無此資料";