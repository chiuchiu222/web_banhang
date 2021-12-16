<?php
$sql_lietke_sp= "SELECT * FROM tbl_sanpham, tbl_category WHERE tbl_sanpham.id_danhmuc=tbl_category.id_danhmuc ORDER BY id_sanpham DESC";
$query_lietke_sp= mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse:collapse">
  <tr>
      <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sản phẩm</th>
    <th>Tóm tắt</th>
    <th>Trạng thái </th>
    <th>Quản lý </th>
  </tr>

<?php
$i=0;
while($row=mysqli_fetch_array($query_lietke_sp)){
?>
  <tr>
      <td><?php echo $i++      ?></td>
      <td><?php echo $row['tensanpham']?></td>
      <td><img src="modules/quanlisp/uploads/<?php echo $row['hinhanh']?>" width="150px"></td>
      <td><?php echo $row['giasp']?></td>
      <td><?php echo $row['soluong']?></td>
      <td><?php echo $row['tendanhmuc']?></td>
      <td><?php echo $row['masp']?></td>
      <td><?php echo $row['tomtat']?></td>
      <td>
        <?php if($row['tinhtrang']==1) {
          echo 'Hiện';
        }
        else {
          echo 'Ẩn';
        }
        ?>
      </td>
      <td>
          <a href="modules/quanlisp/xuly.php?idsanpham=<?php  echo $row['id_sanpham']?>">Xoá</a> | 
          <a href="?action=quanlysanpham&query=sua&idsanpham=<?php  echo $row['id_sanpham']?>">Sửa</a>
      </td>
  </tr>
  <?php
}
?>
</table>