<h1>會員註冊</h1>
<form action="api/reg_mem.php" method="post">
<table class="all">
<tr>
<td>姓名</td>
<td><input type="text" name="name" id=""></td>
</tr>
<tr>
<td>帳號</td>
<td><input type="text" name="acc" id="acc"><input type="button" value="檢測帳號" onclick="chk()"></td>
</tr>
<tr>
<td>密碼</td>
<td><input type="password" name="pw" id=""></td>
</tr>
<tr>
<td>電話</td>
<td><input type="text" name="tel" id=""></td>
</tr>
<tr>
<td>住址</td>
<td><input type="text" name="addr" id=""></td>
</tr>
<tr>
<td>電子信箱</td>
<td><input type="text" name="email" id=""></td>
</tr>
</table>
<input type="hidden" name="regdate" value="<?=date('Y-m-d')?>">
<input type="submit" value="註冊">
<input type="reset" value="重置">
</form>

<script>
function chk(){
  let acc=$("#acc").val()
  if(acc=='admin'){
    alert("該帳號不可使用")
  }else{

    $.post("api/chk_acc.php",{acc},(re)=>{
      if(re==1){
      alert("該帳號已使用")
      location.reload()
    }else{
      alert("該帳號可使用")
    }
  })
}
}
</script>