<p>Sửa danh mục sản phẩm</p>
<?php
$sql_sua_danhmucsp= "SELECT * FROM tbl_category WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp= mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<table border="1px" width="50%" style="border-collapse: collapse;">
<form method="POST" action="modules\quanlidanhmucsp\xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_danhmucsp)){
    ?>
  <tr>
      <td>Tên danh mục</td>
      <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" ></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu" ></td>
  </tr>
<tr>
<td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
</tr>
<?php
}
?>
</form>
</table>
