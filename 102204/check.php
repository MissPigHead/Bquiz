<h1>填寫資料</h1>
<form action="api/add_order.php" method="post">
<table class="all">
<tr>
<td>登入帳號</td>
<td><?=$_SESSION['user']?></td>
</tr>
<tr>
<td>姓名</td>
<td><input type="text" name="name" id=""></td>
</tr>
<tr>
<td>電子信箱</td>
<td><input type="text" name="email" id=""></td>
</tr>
<tr>
<td>聯絡地址</td>
<td><input type="text" name="addr" id=""></td>
</tr>
<tr>
<td>連絡電話</td>
<td><input type="text" name="tel" id=""></td>
</tr>
<tr>
<td>商品名稱</td>
<td>編號</td>
<td>數量</td>
<td>單價</td>
<td>小計</td>
</tr>
<?php
$total=0;
foreach($_SESSION['cart'] as $id=>$qt){
  $g=$Goods->find($id);
  ?>
<tr>
<td><?=$g['tt']?></td>
<td><?=$g['seq']?></td>
<td><?=$qt?></td>
<td><?=$g['price']?></td>
<td><?=$g['price']*$qt?></td>
</tr>
<?php
$total=$total+($g['price']*$qt);
}
?>
<tr><td colspan="5">總價:<?=$total?></td></tr>
</table>
<input type="hidden" name="seq" value="<?=date('Ymd').rand(100000,999999)?>">
<input type="hidden" name="total" value="<?=$total?>">
<input type="submit" value="確定送出">
<input type="button" value="返回修改訂單" onclick="lof('?do=buycart')">
</form>