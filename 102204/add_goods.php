<h1>新增商品</h1>
<form action="api/add_good.php" method="post" enctype="multipart/form-data">
<table class="all">
<tr>
<td>所屬大分類</td>
<td onchange="getson()"><select name="fa" id="fa">
<?php
$fs=$Cls->all(['fa'=>0]);
foreach($fs as $f){
  echo "<option value='".$f['id']."'>".$f['tt']."</option>";
}
?>
</select></td>
</tr>
<tr>
<td>所屬中分類</td>
<td>
<select name="son" id="son">
</select></td>
<script>
function  getson() {
  let id=$("#fa").val();
  $.post("api/get_son.php",{id},(re)=>{
    $("#son").empty()
    $("#son").append(`${re}`)
  })
}
</script>
</tr>
<tr>
<td>商品編號</td>
<td>完成分類後自動分配</td>
</tr>
<tr>
<td>商品名稱</td>
<td><input type="text" name="tt" id=""></td>
</tr>
<tr>
<td>商品價格</td>
<td><input type="number" name="price" id=""></td>
</tr>
<tr>
<td>規格</td>
<td><input type="text" name="spec" id=""></td>
</tr>
<tr>
<td>庫存量</td>
<td><input type="number" name="stock" id=""></td>
</tr>
<tr>
<td>商品圖片</td>
<td><input type="file" name="img" id=""></td>
</tr>
<tr>
<td>商品介紹</td>
<td><input type="text" name="intro" id=""></td>
</tr>
</table>
<input type="submit" value="新增">
<input type="reset" value="重置">
</form>
