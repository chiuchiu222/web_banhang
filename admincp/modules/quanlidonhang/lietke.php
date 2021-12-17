<?php
$sql= "SELECT * FROM tbl_giohang, tbl_dangky WHERE tbl_giohang.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_giohang.id_cart DESC";
$query_lietke_donhang= mysqli_query($mysqli,$sql);
?>
<h4 class="title py-3">Danh sách đơn hàng</h4>
<table style="width:100%" border="1" style="border-collapse:collapse">
<thead class="text-muted">
  <tr>
      <th>ID</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
  </tr>
</thead>
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
          <a class="btn btn-light btn-round"  href="index.php?action=donhang&query=xemdonhang&code=<?php  echo $row['code_cart']?>">Xem đơn hàng</a>
      </td>
  </tr>
  <?php
}
?>
</table>