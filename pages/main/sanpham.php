<p>Chi tiết sản phẩm</p>
<?php
    $sql_chitiet="SELECT * FROM tbl_category, tbl_sanpham
    WHERE tbl_sanpham.id_danhmuc = tbl_category.id_danhmuc
    AND tbl_sanpham.id_sanpham= '$_GET[id]'
    LIMIT 1";
    $query_chitiet=mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet=mysqli_fetch_array($query_chitiet))
{
?>
    <div class="hinhanh_sanpham">
       <img src="admincp/modules/quanlisp/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div class="chitiet_sanpham">
        <h3><?php echo $row_chitiet['tensanpham']?></h3>
        <p><?php echo number_format($row_chitiet['giasp']).'VNĐ'?></p>
        <p><?php echo $row_chitiet['masp']?></p>
        <p><?php echo $row_chitiet['noidung']?></p>
        <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
        </div>
    </form>
<?php
}
?>