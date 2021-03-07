<fieldset>
<legend>目前位置 : 首頁 > 人氣文章區</legend>
<table>
<tr>
<td style="width: 30%;">標題</td>
<td style="width: 45%;">內容</td>
<td style="width: 25%;">人氣</td>
</tr>
<?php
if(empty($_GET['p'])){
  $p=1;
}else{
  $p=($_GET['p']);
}

$tt=$Blog->count();
$ps=ceil($tt/5);
$start=($p-1)*5;
$bs=$Blog->all([]," order by good desc limit {$start},5");
foreach($bs as $b){
  $g=$Good->find(['user'=>$_SESSION['user'],'blog'=>$b['id']]);
?>
<tr>
<td><?=$b['title']?></td>
<td id="part<?=$b['id']?>"><?=mb_substr($b['txt'],0,20)?>...</td>
<td id="full<?=$b['id']?>" style="display:none;"><?=$b['txt']?></td>
<td><?=$b['good']?>個人說 <img src="img/02B03.jpg" width="20px">-
<?php
if($g){
  ?>
<input type="button" value="收回讚" onclick="del(<?=$b['id']?>,'<?=$_SESSION['user']?>')">
<?php
}else{
  ?>
<input type="button" value="讚" onclick="good(<?=$b['id']?>,'<?=$_SESSION['user']?>')">
<?php
}
?>
</td>
</tr>
<?php
}
?>
</table>

<div style="display: inline-blcok;">
<?php if($ps>1&&$p>1){
?>
<span onclick="to('?do=pop&p=<?=$p-1?>')"><</span>
<?php 
}?>
<span onclick="to('?do=pop&p=1')" <?=($p==1)?"style='font-size:30px'":""?>>1</span>
<?php
if($ps>1){
  ?>

<span onclick="to('?do=pop&p=2')" <?=($p==2)?"style='font-size:30px'":""?>>2</span>
<?php
}
if($ps>2){
  ?>
<span onclick="to('?do=pop&p=3')" <?=($p==3)?"style='font-size:30px'":""?>>3</span>
<?php
}
if($ps>1 && $p<$ps){
?>
<span onclick="to('?do=pop&p=<?=$p+1?>')">></span>
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

function good(blog,user){
  $.post("api/good.php",{blog,user},()=>{
    location.reload();
  })
}
function del(blog,user){
  $.post("api/del_good.php",{blog,user},()=>{
    location.reload();
  })
}
</script>
