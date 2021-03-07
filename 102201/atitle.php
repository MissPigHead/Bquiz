<?php
$ts=$Title->all();
?>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">網站標題管理</p>
        <form method="post" action="?do=atitle">
    <table width="100%">
    	<tbody><tr class="yel">
        	<td width="45%">網站標題</td><td width="23%">替代文字</td><td width="7%">顯示</td><td width="7%">刪除</td><td></td>
                    </tr>
                    <?php
foreach($ts as $t){
  ?>
  <tr>
    <td>
    <img src="img/<?=$t['img']?>" width="300px" height="30px">
    </td>
    <td><input type="text" name="text" value="<?=$t['text']?>"></td>
    <td><input type="radio" name="sh[]" value="<?=$t['id']?>" <?=($t['sh']==1)?"checked":""?>></td>
    <td><input type="checkbox" name="del[]" id="" value="<?=$t['id']?>"></td>
    <td><input type="button" value="更新圖片" onclick="lo('?do=edit_title&id=<?=$t['id']?>')"></td>
  </tr>
  <?php
}
?>
<script>
function del(id){
  $.post("api/del_title.php",{id},()=>{
    location.reload();
  })
}

function img(id){

}
</script>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="lo('?do=add_title')" value="新增網站標題圖片"></td><td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
                                    </div>