<h1>編輯頁尾版權區</h1>
頁尾版權內容
<input type="text" name="bot" id="bot">
<br>
<input type="button" value="編輯" onclick="bot()">
<input type="button" value="重置" onclick="javascript:location.reload()">
<script>
function  bot() {
  let ft=$("#bot").val(),id=1;

  $.post("api/bot.php",{ft,id},()=>{
    location.reload()
  })
}
</script>