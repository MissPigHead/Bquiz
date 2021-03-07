<?php
$fa=$Que->find($_GET['id']);
$opt=$Que->all(['fa'=>$_GET['id']]);
?>
<fieldset>
<legend>目前位置 : 首頁 > 問卷調查 > <?=$fa['text']?></legend>
<h4><?=$fa['text']?></h4>
<table>
<?php
foreach($opt as $o){
  $w=round($o['num']/(($fa['num']==0)?"1":$fa['num'])*100,2);
  ?>
<tr>
<td style="width:50%">
  <?=$o['text']?>
</td>
<td style="width:50%">
<div style="background: #f00;height:10px;width:<?=$w?>px;display:inline-block"></div><?=$o['num']?>票(<?=$w?>%)
</td>
</tr>

<?php
}
?>
<?php
?>
</table>


</fieldset>