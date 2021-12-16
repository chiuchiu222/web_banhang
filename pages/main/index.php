<?php
$sql_pro="SELECT * FROM tbl_category, tbl_sanpham
WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc
ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
$query_product=mysqli_query($mysqli,$sql_pro);
?>

<h3>Tất cả sản phẩm</h3>
<ul class="product_list">
<?php
while ($row_pro=mysqli_fetch_array($query_product)) {?>
<li>
  <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
  <img src="admincp/modules/quanlisp/uploads/<?php echo $row_pro['hinhanh']?>">
  <p class="title_product">Tên sản phẩm: <?php echo $row_pro['tensanpham']?></p>
  <p class="price_product">Giá: <?php echo number_format($row_pro['giasp']).'VNĐ'?></p>
  <p class="title_product">Danh mục: <?php echo $row_pro['tendanhmuc']?></p>
  </a>
</li>
<?php
}
?>
   
</ul>

