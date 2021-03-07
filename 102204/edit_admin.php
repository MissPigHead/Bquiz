<?php
$a=$Adm->find($_GET['id']);
$a['pr']=unserialize($a['pr']);
?>

<h1>新增管理帳號</h1>
<form action="api/add_adm.php" method="post">
<table>
<tr>
<td>帳號</td>
<td><input type="text" name="acc" id="acc" value="<?=$a['acc']?>"></td>
</tr>
<tr>
<td>密碼</td>
<td><input type="password" name="pw" id="pw" value="<?=$a['pw']?>"></td>
</tr>
<tr>
<td>權限</td>
<td>
<input type="checkbox" name="pr[]" value="1" <?=in_array(1,$a['pr'])?'checked':''?>>商品分類與管理<br>
<input type="checkbox" name="pr[]" value="2" <?=in_array(2,$a['pr'])?'checked':''?>>訂單管理<br>
<input type="checkbox" name="pr[]" value="3" <?=in_array(3,$a['pr'])?'checked':''?>>會員管理<br>
<input type="checkbox" name="pr[]" value="4" <?=in_array(4,$a['pr'])?'checked':''?>>頁尾版權區管理<br>
<input type="checkbox" name="pr[]" value="5" <?=in_array(5,$a['pr'])?'checked':''?>>最新消息管理
</td>
</tr>
</table>
<input type="hidden" name="id" value="<?=$a['id']?>">
<input type="submit" value="修改">
<input type="reset" value="重置">
</form>