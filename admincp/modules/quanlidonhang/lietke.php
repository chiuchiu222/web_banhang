<?php
$sql= "SELECT * FROM tbl_giohang, tbl_dangky WHERE tbl_giohang.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_giohang.id_cart DESC";
$query_lietke_donhang= mysqli_query($mysqli,$sql);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse:collapse">
  <tr>
      <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
  </tr>
<?php
$i=0;
while($row=mysqli_fetch_array($query_lietke_donhang)){
?>
  <tr>
      <td><?php echo $i++      ?></td>
      <td><?php echo $row['code_cart']?></td>
      <td><?php echo $row['tenkhachhang']?></td>
      <td><?php echo $row['diachi']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['dienthoai']?></td>

      <td>
          <a href="index.php?action=donhang&query=xemdonhang&code=<?php  echo $row['code_cart']?>">Xem đơn hàng</a>
      </td>
  </tr>
  <?php
}
?>
</table>