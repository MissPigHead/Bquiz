<?php
$m=$Mem->find($_GET['id']);

?>
<h1>編輯會員資料</h1>
<form action="api/add_mem.php" method="post">
<table>
<tr>
<td>帳號</td>
<td><?=$m['acc']?></td>
</tr>
<tr>
<td>姓名</td>
<td><input type="text" name="name" id="" value="<?=$m['name']?>"></td>
</tr>
<tr>
<td>電子信箱</td>
<td><input type="text" name="email" id="" value="<?=$m['email']?>"></td>
</tr>
<tr>
<td>地址</td>
<td><input type="text" name="addr" id="" value="<?=$m['addr']?>"></td>
</tr>
<tr>
<td>電話</td>
<td><input type="text" name="tel" id="" value="<?=$m['tel']?>"></td>
</tr>
<tr>
<td colspan="2">
<input type="hidden" name="id"  value="<?=$m['id']?>">
<input type="submit" value="編輯">
<input type="reset" value="重置">
<input type="button" value="取消">
</td>
</tr>
</table>
</form>

