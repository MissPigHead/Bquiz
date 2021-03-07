<h1>會員登入</h1>
<a href="?do=reg">
<img src="img/0413.jpg" alt="">
</a>
<br>
<h1>會員登入</h1>
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
<td>驗證碼</td>
<td id="ck"><span></span><input type="number" name="ch" id="ch"></td>
</tr>

</table>
<input type="button" value="確定" onclick="chk()">
<script>
let a=Math.ceil(Math.random()*20)+10;
let b=Math.ceil(Math.random()*20)+10;
console.log(a,b)
$("#ck>span").text(`${a}+${b}=`)
function chk(){
  let ch=$("#ch").val()
  let acc=$("#acc").val()
  let pw=$("#pw").val()
  if(ch!=(a+b)){
    alert("對不起，您輸入的驗證碼有誤請您重新輸入")
    location.reload()
  }else{
    $.post("api/chk_mem.php",{acc,pw},(re)=>{
      if(re==0){
        alert("輸入錯誤")
        location.reload()
      }else{
        lof("index.php");
      }
    })
  }
}
</script>