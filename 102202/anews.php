<fieldset>
<legend>最新文章管理</legend>
<table>
<tr>
<td>編號</td>
<td>標題</td>
<td>顯示</td>
<td>刪除</td>
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
<tr>
<td><?=$b['id']?></td>
<td><?=$b['title']?></td>
<td><input type="checkbox" name="sh[]" value="<?=$b['id']?>" <?=($b['sh']==1)?"checked":""?>></td>
<td><input type="checkbox" name="del[]" value="<?=$b['id']?>"></td>
</tr>
<?php
}
?>
</table>
<div style="display: inline-blcok;">
<?php if($ps>1&&$p>1){
?>
<span onclick="to('?do=anews&p=<?=$p-1?>')"><</span>
<?php 
}?>
<span onclick="to('?do=anews&p=1')" <?=($p==1)?"style='font-size:30px'":""?>>1</span>
<?php
if($ps>1){
  ?>

<span onclick="to('?do=anews&p=2')" <?=($p==2)?"style='font-size:30px'":""?>>2</span>
<?php
}
if($ps>2){
  ?>
<span onclick="to('?do=anews&p=3')" <?=($p==3)?"style='font-size:30px'":""?>>3</span>
<?php
}
if($ps>1 && $p<$ps){
?>
<span onclick="to('?do=anews&p=<?=$p+1?>')">></span>
<?php 
}
?>
</div>



</fieldset>
