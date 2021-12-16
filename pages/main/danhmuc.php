<?php
$sql_pro="SELECT * FROM tbl_category, tbl_sanpham
WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc
AND tbl_sanpham.id_danhmuc='$_GET[id]'
ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro= mysqli_query($mysqli,$sql_pro);
$query_product=mysqli_query($mysqli,$sql_pro);
$title_pro= mysqli_fetch_array($query_pro);
?>

<h3>Danh mục <?php echo $title_pro['tendanhmuc']?></h3>
<ul class="product_list">
<?php
while ($row_pro=mysqli_fetch_array($query_product)) {?>
<li>
  <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
  <img src="admincp/modules/quanlisp/uploads/<?php echo $row_pro['hinhanh']?>">
  <p class="title_product">Tên sản phẩm: <?php echo $row_pro['tensanpham']?></p>
  <p class="price_product">Giá: <?php echo number_format($row_pro['giasp']).'VNĐ'?></p>
  </a>
</li>
<?php
}
?>
   
</ul>