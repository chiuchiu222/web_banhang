<?php
$sql_lietke_danhmucsp= "SELECT * FROM tbl_category ORDER BY thutu DESC";
$query_lietke_danhmucsp= mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<h4 class="title py-3">Liệt kê danh mục sản phẩm</h4>
<div class="card">
  <table style="width:100%" border="1" style="border-collapse:collapse">
    <thead class="text-muted">
      <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
      </tr>
    </thead>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($query_lietke_danhmucsp)){
  ?>
    <tr>
        <td><?php echo $i++      ?></td>
        <td><?php echo $row['tendanhmuc']?></td>
        <td>
            <a class="btn btn-light btn-round" href="modules/quanlidanhmucsp/xuly.php?iddanhmuc=<?php  echo $row['id_danhmuc']?>">Xoá</a> | 
            <a class="btn btn-light btn-round" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php  echo $row['id_danhmuc']?>">Sửa</a>
        </td>
    </tr>
    <?php
  }
  ?>
  </table>
</div>