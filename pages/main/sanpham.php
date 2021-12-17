<header class="section-heading heading-line" ><h4 class="title-section text-uppercase">Chi tiết sản phẩm</h4></header>
<?php
    $sql_chitiet="SELECT * FROM tbl_category, tbl_sanpham
    WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc
    AND tbl_sanpham.id_sanpham= '$_GET[id]'
    LIMIT 1";
    $query_chitiet=mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet=mysqli_fetch_array($query_chitiet))
{
?>
<article class="card card-product-list">
	<div class="row no-gutters">
		<aside class="col-md-3">
			<a href="#" class="img-wrap">
				<span class="badge badge-danger"> Mới </span>
				<img src="admincp/modules/quanlisp/uploads/<?php echo $row_chitiet['hinhanh']?>">
			</a>
		</aside> <!-- col.// -->
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="col-md-6">
			<div class="info-main">
				<a href="#" class="h5 title"><?php echo $row_chitiet['tensanpham']?></a>
				<div class="rating-wrap mb-2">
					<ul class="rating-stars">
						<li style="width:100%" class="stars-active"> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
						<li>
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
					</ul>
					<div class="label-rating">Giá: <?php echo number_format($row_chitiet['giasp']).'VNĐ'?></div>
				</div> <!-- rating-wrap.// -->
			
				<p class="mb-3">
					<span class="tag"> <i class="fa fa-check"></i> Cam kết chính hãng</span> 
					<span class="tag"> Hạn dùng 5 năm </span> 
					<span class="tag"> 80 đánh giá </span>
				</p>
				<p><?php echo $row_chitiet['noidung']?></p>
			</div> <!-- info-main.// -->
		</div> <!-- col.// -->
        <p><input class="btn btn-block btn-primary" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
        </form>
	</div> <!-- row.// -->
</article> <!-- card-product .// -->
<?php
}
?>