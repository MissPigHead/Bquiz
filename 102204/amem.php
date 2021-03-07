<h1>會員管理</h1>
<table>
<tr>
<td>姓名</td>
<td>會員帳號</td>
<td>註冊日期</td>
<td>操作</td>
</tr>
<?php
$ms=$Mem->all();
foreach($ms as $a){
?>
<tr>
<td><?=$a['name']?></td>
<td><?=$a['acc']?></td>
<td><?=$a['regdate']?></td>
<td>
<input type="button" value="修改" onclick="lof('?do=edit_mem&id=<?=$a['id']?>')">
<input type="button" value="刪除" onclick="del(<?=$a['id']?>)">
</td>
</tr>
<?php
}
?>
<?php
?>
<?php
?>
</table>