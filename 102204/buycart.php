<?php
if(empty($_SESSION['user'])){
  to("?do=login");
}
if(!empty($_GET['id'])){
  if(empty(($_GET['qt']))){
    $_SESSION['cart'][$_GET['id']]=1;
  }else{
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
  }
}
?>
<h1><?=$_SESSION['user']?>購物車</h1>
<table style="width:95%">
<tr class="tt">
<td style="width:15%">編號</td>
<td style="width:20%">商品名稱</td>
<td style="width:10%">數量</td>
<td style="width:15%">庫存量</td>
<td style="width:15%">單價</td>
<td style="width:15%">小計</td>
<td style="width:10%">操作</td>
</tr>
<?php
if(!empty($_SESSION['cart'])){
  foreach($_SESSION['cart'] as $id=>$qty){
    $g=$Goods->find($id);
    ?>
    <tr>
    <td><?=$g['seq']?></td>
    <td><?=$g['tt']?></td>
    <td><input type="number" name="qt" id="qt<?=$g['id']?>" value="<?=$qty?>" onchange="ch(<?=$g['id']?>)"></td>
    <td><?=$g['stock']?></td>
    <td><?=$g['price']?></td>
    <td><?=$g['price']*$qty?></td>
    <td><img src="img/0415.jpg" onclick="del(<?=$g['id']?>)"></td>
    </tr>
    <?php
  }
}
?>
</table>
<script>
function  ch(id) {
let qt=$(`#qt${id}`).val();
lof(`?do=buycart&id=${id}&qt=${qt}`);
}
function del(id) {
  $.post("api/del_cart.php",{id},()=>{
    lof("?do=buycart");
  })
}
</script>
<a href="?do=main"><img src="img/0411.jpg" alt=""></a>
<a href="?do=check"><img src="img/0412.jpg" alt=""></a>