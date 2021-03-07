<?php
if(empty($_GET['id'])){
  $gs=$Goods->all(['sh'=>1]);
  $nav="全部商品";
}else{
  if(empty($_GET['f'])){
    $gs=$Goods->all(['sh'=>1,'fa'=>$_GET['id']]);
    $nav=$Cls->find($_GET['id'])['tt'];
  }else{
    $gs=$Goods->all(['sh'=>1,'son'=>$_GET['id']]);
    $nav=$Cls->find($_GET['id'])['tt'].">".$Cls->find($_GET['f'])['tt'];
  }
}
?>
<h1><?=$nav?></h1>
<table>
<?php
foreach($gs as $g){
?>
<tr class="all">
<td><img src="<?=$g['img']?>" width="250px"></td>
<td>
<p class="tt"><?=$g['tt']?></p><br>
<span>價錢:<?=$g['price']?></span><a href="?do=buycart&id=<?=$g['id']?>"><img src="img/0402.jpg"></a>
<br>
<span>規格:<?=$g['spec']?></span><br>
<span>簡介:<?=$g['intro']?></span>
</td>
</tr>
<?php
}
?>
</table>