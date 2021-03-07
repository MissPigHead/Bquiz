<fieldset>
<legend>帳號管理</legend>
<form action="api/del_user.php" method="post">
<table>
<tr>
<td>帳號</td>
<td>密碼</td>
<td>刪除</td>
</tr>
<?php
$us=$User->all();
foreach($us as $u){
  if($u['acc']!='admin'){
?>
<tr>
<td><?=$u['acc']?></td>
<td><?=$u['pw']?></td>
<td><input type="checkbox" name="del[]" value="<?=$u['id']?>"></td>
</tr>
<?php
  }
}
?>
</table>
<input type="submit" value="確定刪除">
<input type="reset" value="清空選取">
</form>

<br>
<h1>新增會員</h1>
*請設定您要註冊的帳號及密碼(最長12個字元)
<table>
<tr></tr>
  <td>Step1:登入帳號</td>
  <td><input type="text" name="acc" id="acc"></td>
</tr>
<tr>
  <td>Step2:登入密碼</td>
  <td><input type="password" name="pw" id="pw"></td>
</tr>
<tr>
  <td>Step3:再次確認密碼</td>
  <td><input type="password" name="pw2" id="pw2"></td>
</tr>
<tr>
  <td>Step4:信箱(忘記密碼時使用)</td>
  <td><input type="text" name="email" id="email"></td>
</tr>
<tr>
  <td><input type="button" value="註冊" onclick="reg()">
  <input type="reset" value="清除">
  </td>
  <td></td>
</tr>
</table>
</fieldset>
<script>
function reg(){
  let acc=$("#acc").val();
  let pw=$("#pw").val();
  let pw2=$("#pw2").val();
  let email=$("#email").val();

  if(!acc||!pw||!pw2||!email){
    alert("不可空白")
  }else{
    if(pw!=pw2){
      alert('密碼錯誤')
    }else{
      $.post("api/chk_acc.php",{acc},(re)=>{
        if(re!=0){
          alert('帳號重複')
        }else{
          $.post("api/reg.php",{acc,pw,email},()=>{
            location.reload()
          })
        }
      })
    }
  }
}
</script>