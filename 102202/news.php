<fieldset>
<legend>目前位置 : 首頁 > 最新文章區</legend>
<table>
<tr>
<td style="width: 40%;">標題</td>
<td style="width: 60%;">內容</td>
</tr>
<?php
if(empty($_GET['p'])){
  $p=1;
}else{
  $p=($_GET['p']);
}

$tt=$Blog->count();
$ps=ceil($tt/3);
$start=($p-1)*3;
$bs=$Blog->all([]," limit {$start},3");
foreach($bs as $b){
?>
<tr 
<?php
if(empty($_SESSION['user'])){
  ?>
onclick="show('<?=$b['id']?>')"
  <?php
}else{
  ?>
onclick="to('?do=detail&id=<?=$b['id']?>')"
  <?php
}
?>
>
<td><?=$b['title']?></td>
<td id="part<?=$b['id']?>"><?=mb_substr($b['txt'],0,20)?>...</td>
<td id="full<?=$b['id']?>" style="display:none;"><?=$b['txt']?></td>
</tr>
<?php
}
?>
</table>

<div style="display: inline-blcok;">
<?php if($ps>1&&$p>1){
?>
<span onclick="to('?do=news&p=<?=$p-1?>')"><</span>
<?php 
}?>
<span onclick="to('?do=news&p=1')" <?=($p==1)?"style='font-size:30px'":""?>>1</span>
<?php
if($ps>1){
  ?>

<span onclick="to('?do=news&p=2')" <?=($p==2)?"style='font-size:30px'":""?>>2</span>
<?php
}
if($ps>2){
  ?>
<span onclick="to('?do=news&p=3')" <?=($p==3)?"style='font-size:30px'":""?>>3</span>
<?php
}
if($ps>1 && $p<$ps){
?>
<span onclick="to('?do=news&p=<?=$p+1?>')">></span>
<?php 
}
?>
</div>
</fieldset>
<script>
function show(id){
  $(`#part${id}`).toggle();
  $(`#full${id}`).toggle();
}
</script>
