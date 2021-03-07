<fieldset>
<legend>忘記密碼</legend>
請輸入信箱以查詢密碼<br>
<input type="email" name="" id="email">
<br>
<input type="button" value="尋找" id="find" onclick="email()">
</fieldset>

<script>
function email(){
  let email=$("#email").val()
  $.post("api/find_pw.php",{email},(re)=>{
    $("#find").before(`${re}<br>`)
  })
}
</script>