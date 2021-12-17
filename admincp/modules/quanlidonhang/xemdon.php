<h4 class="title py-3">Xem đơn hàng</h4>
<?php
$code=$_GET['code'];
$sql= "SELECT * FROM tbl_cart_details, tbl_sanpham 
WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham 
AND tbl_cart_details.code_cart='".$code."'
ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_donhang= mysqli_query($mysqli,$sql);
?>
<table style="width:100%" border="1" style="border-collapse:collapse">
  <tr>
      <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>
<?php
$i=0;
$tongtien=0;
while($row=mysqli_fetch_array($query_lietke_donhang)){
    $thanhtien=$row['giasp']*$row['soluongmua'];
    $tongtien+=$thanhtien;
?>
  <tr>
      <td><?php echo $i++      ?></td>
      <td><?php echo $row['code_cart']?></td>
      <td><?php echo $row['tensanpham']?></td>
      <td><?php echo $row['soluongmua']?></td>
      <td><?php echo $row['giasp']?></td>
      <td><?php echo $thanhtien?></td>
  </tr>
  <?php
}
?>
    <tr>
        <td colspan="6">  <p class="btn btn-secondary btn-sm" style=" font-size: 15px; margin: 20px 20px 20px 20px">Tổng tiền: <?php echo $tongtien; ?></p></td>
    </tr>
</table>