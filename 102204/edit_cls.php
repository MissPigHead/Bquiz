<h1>修改分類名稱</h1>
名稱<input type="text" name="tt" id="tt">
<input type="button" value="修改" onclick="mdy(<?=$_GET['id']?>)">
<script>
function mdy(id){
  let tt=$("#tt").val()
  $.post("api/add_cls.php",{id,tt},()=>{
    lof("?do=ath")
  })
}
</script>
