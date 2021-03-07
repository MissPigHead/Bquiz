<?php
$b=$Blog->find($_GET['id']);
$g=$Good->find(['user'=>$_SESSION['user'],'blog'=>$_GET['id']]);
?>

<fieldset>
<legend>文章標題: <?=$b['title']?>|
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
</legend>
<?=$b['txt']?>
</fieldset>

<script>
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
