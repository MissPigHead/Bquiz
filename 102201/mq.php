<?php
$ms=$Mq->all(['sh'=>1]);
foreach($ms as $m){
  echo $m['txt']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>