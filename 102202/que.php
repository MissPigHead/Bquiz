<fieldset>
<legend>目前位置 : 首頁 > 問卷調查</legend>
<table>
<tr>
<td>編號</td>
<td>問卷題目</td>
<td>投票總數</td>
<td>結過</td>
<td>狀態</td>
</tr>
<?php
$qs=$Que->all(['fa'=>0]);
foreach($qs as $q){
?>
<tr>
<td><?=$q['id']?></td>
<td><?=$q['text']?></td>
<td><?=$q['num']?></td>
<td><a href="?do=result&id=<?=$q['id']?>">結果</a></td>
<td>
<?php
if(empty($_SESSION['user'])){

  ?>

  請先登入
<?php
}else{

  ?>
  <a href="?do=vote&id=<?=$q['id']?>">
  參與投票
  </a>
<?php
}
?>
</td>
</tr>
<?php
}
?>

</table>
</fieldset>