<?php
$sql_pro="SELECT * FROM tbl_category, tbl_sanpham
WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc
AND tbl_sanpham.id_danhmuc='$_GET[id]'
ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro= mysqli_query($mysqli,$sql_pro);
$query_product=mysqli_query($mysqli,$sql_pro);
$title_pro= mysqli_fetch_array($query_pro);
?>


<section  class="padding-bottom-sm">
	<header class="section-heading heading-line">
			<h4 class="title-section text-uppercase">Danh mục <?php echo $title_pro['tendanhmuc']?></h4>
	</header>
	<div class="row row-sm">
	<?php while ($row_pro=mysqli_fetch_array($query_product)) {?>
		<div class="col-xl-2 col-lg-3 col-md-4 col-6">
			<div href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>" class="card card-sm card-product-grid">
						<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>" class="img-wrap"> <img src="admincp/modules/quanlisp/uploads/<?php echo $row_pro['hinhanh']?>"> </a>
						<figcaption class="info-wrap">
							<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>" class="title"><?php echo $row_pro['tensanpham']?></a>
							<div class="price mt-1"><?php echo number_format($row_pro['giasp']).'VNĐ'?></div>
							</figcaption>
			</div>
		</div>
<?php
}
?>
</div> <!-- col.// -->

<!-- =============== SECTION ITEMS .//END =============== -->