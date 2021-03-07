<fieldset>
<legend>會員登入</legend>
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
<td>
<input type="button" value="登入" onclick="login()">
<input type="button" value="清除" onclick="javascript:location.reload()">
</td>
<td>
<a href="?do=forget">忘記密碼</a>|
<a href="?do=reg">尚未註冊</a>
</td>
</tr>
</table>
</fieldset>
<script>
function login(){
  let acc=$("#acc").val(),pw=$("#pw").val();
  $.post("api/chk_acc.php",{acc},(re)=>{
    if(re==0){
      alert("查無帳號");
      location.reload()
    }else{
      $.post("api/chk_pw.php",{acc,pw},(re)=>{
        if(re==0){
          alert("密碼錯誤");
          location.reload()
        }else{
          if(acc=='admin'){
            to("admin.php")
          }else{
            to("index.php")
          }
        }
      })
    }
  })
}
</script>
