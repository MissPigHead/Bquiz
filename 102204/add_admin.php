<h1>新增管理帳號</h1>
<form action="api/add_adm.php" method="post">
<table>
<tr>
<td>帳號</td>
<td><input type="text" name="acc" id="acc"></td>
</tr>
<tr>
<td>密碼</td>
<td><input type="password" name="pw" id="pw"></td>
</tr>
<tr>
<td>權限</td>
<td>
<input type="checkbox" name="pr[]" value="1">商品分類與管理<br>
<input type="checkbox" name="pr[]" value="2">訂單管理<br>
<input type="checkbox" name="pr[]" value="3">會員管理<br>
<input type="checkbox" name="pr[]" value="4">頁尾版權區管理<br>
<input type="checkbox" name="pr[]" value="5">最新消息管理
</td>
</tr>
</table>
<input type="submit" value="新增">
<input type="reset" value="重置">
</form>