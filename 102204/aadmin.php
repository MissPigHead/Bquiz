<input type="button" value="新增管理員" onclick="lof('?do=add_admin')">
<table>
<tr>
<td>帳號</td>
<td>密碼</td>
<td>操作</td>
</tr>
<?php
$as=$Adm->all();
foreach($as as $a){

  ?>
  <tr>
  <td><?=$a['acc']?></td>
  <td><?=$a['pw']?></td>
  <td>
  <?php
if($a['acc']!='admin'){
?>
  
  <input type="button" value="修改" onclick="lof('?do=edit_admin&id=<?=$a['id']?>')">
  <input type="button" value="刪除" onclick="del(<?=$a['id']?>)">
  </td>
<?php
}
?>
</tr>
<?php
}
?>
</table>
<input type="button" value="返回" onclick="lof('index.php')">
<script>
function  del(id) {
  $.post("api/del_adm.php",{id},()=>{
    location.reload()
  })
}
</script>