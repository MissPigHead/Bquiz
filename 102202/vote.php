<?php
$fa=$Que->find($_GET['id']);
$opt=$Que->all(['fa'=>$_GET['id']]);
?>
<fieldset>
<legend>目前位置 : 首頁 > 問卷調查 > <?=$fa['text']?></legend>
<h4><?=$fa['text']?></h4>

<form action="api/vote.php" method="post">
<table>
<?php
foreach($opt as $o){
  ?>
<tr>
<td style="width:90%">
  <input type="radio" name="opt[]" value="<?=$o['id']?>"><?=$o['text']?>
</td>
</tr>
<?php
}
?>
</table>
<input type="hidden" name="fa" value="<?=$fa['id']?>">
<input type="submit" value="我要投票">
</form>

</fieldset>