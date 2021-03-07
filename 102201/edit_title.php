<?php

?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">修改標題區圖片</p>
<form method="post" action="api/add_title.php" enctype="multipart/form-data">
                                    <table>
                                    <tr>
                                    <td>標題區圖片</td>
                                    <td><input type="file" name="img" id=""></td>
                                    </tr>
                                    <tr>
                                    
                                    </table>
<input type="hidden" name="id" value="<?=$_GET['id']?>">
<input type="submit" value="修改">
<input type="reset" value="重置">
</form>