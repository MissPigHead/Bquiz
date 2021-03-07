<h1>商品分類</h1>
新增大分類<input type="text" name="fa" id="fa"><input type="button" value="新增" onclick="addfa()"><br>
新增中分類<select name="son_fa" id="son_fa">
<?php
$fs=$Cls->all(['fa'=>0]);
foreach($fs as $f){
  echo "<option value='".$f['id']."'>".$f['tt']."</option>";
}
?>
</select><input type="text" name="son" id="son"><input type="button" value="新增" onclick="addson()">
<table class="all">
<?php
foreach($fs as $f){
?>
<tr class="tt all">
<td><?=$f['tt']?></td>
<td>
<input type="button" value="修改" onclick="lof('?do=edit_cls&id=<?=$f['id']?>')">
<input type="button" value="刪除" onclick="delcls(<?=$f['id']?>)">
</td>
</tr>
<?php
$ss=$Cls->all(['fa'=>$f['id']]);
foreach($ss as $s){
?>
<tr class="pp all">
<td><?=$s['tt']?></td>
<td>
<input type="button" value="修改" onclick="lof('?do=edit_cls&id=<?=$s['id']?>')">
<input type="button" value="刪除" onclick="delcls(<?=$s['id']?>)">
</td>
</tr>
<?php
}
}
?>
</table>

<script>
function addfa() {
  let fa=0, tt=$("#fa").val();
  $.post("api/add_cls.php",{fa,tt},()=>{
    location.reload()
  })
}
function addson() {
    let fa=$("#son_fa").val(),tt=$("#son").val();
  $.post("api/add_cls.php",{fa,tt},()=>{
    location.reload()
  })
}
function delcls(id) {
  $.post("api/del_cls.php",{id},()=>{
    location.reload()
  })
}
</script>


<br>
<h1>商品管理</h1>
<input type="button" value="新增商品" onclick="lof('?do=add_goods')">
<table class="all">
<tr class="tt">
<td>編號</td>
<td>商品名稱</td>
<td>庫存量</td>
<td>狀態</td>
<td>操作</td>
</tr>
<?php
$gs=$Goods->all();
foreach($gs as $g){
?>
<tr class="pp">
<td><?=$g['seq']?></td>
<td><?=$g['tt']?></td>
<td><?=$g['stock']?></td>
<td><?=($g['sh']==1)?"販售中":"已下架"?></td>
<td>
<input type="button" value="修改" onclick="lof('?do=edit_goods&id=<?=$g['id']?>')">
<input type="button" value="刪除" onclick="del('<?=$g['id']?>')"><br>
<input type="button" value="上架" onclick="up('<?=$g['id']?>')">
<input type="button" value="下架" onclick="down('<?=$g['id']?>')">
</td>
</tr>
<?php
}
?>
</table>
<script>
function up(id) {
  let sh=1;
  $.post("api/sh_goods.php",{id,sh},()=>{
    location.reload()
  })
}
function down(id) {
  let sh=0;
  $.post("api/sh_goods.php",{id,sh},()=>{
    location.reload()
  })
}
function  del(id) {
  $.post("api/del_g.php",{id},()=>{
    location.reload()
  })
}
</script>