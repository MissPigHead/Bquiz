<fieldset>
<legend>新增問卷</legend>
<form action="api/add_que.php" method="post">
<table>
<tr>
<td>問卷名稱
</td>
<td><input type="text" name="que">
</td>
</tr>
<tr id="opt"><td colspan="2">選項 <input type="text" name="opt[]" id=""><input type="button" value="更多" onclick="more()"></td></tr>
</table>
<input type="submit" value="新增">|
<input type="reset" value="清空">
</form>
</fieldset>
<script>
function more(){
  $("#opt").after("<tr><td colspan='2'>選項 <input type='text' name='opt[]' ></td></tr>")
  }
</script>