<h4 class="title py-3">Sửa danh mục sản phẩm</h4>
<?php
$sql_sua_danhmucsp= "SELECT * FROM tbl_category WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp= mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
  <div class="card card-body">
    <table>
      <form method="POST" action="modules\quanlidanhmucsp\xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <div class="card-body">
            <?php
            while($dong=mysqli_fetch_array($query_sua_danhmucsp)){
            ?>
            <div class="form-group">
              <label>Tên danh mục</label>
              <input class="form-control" type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" >       
            </div>
            <div class="form-group">
              <label>Thứ tự</label>
              <input class="form-control" type="text" value="<?php echo $dong['thutu'] ?>" name="thutu" >          
            </div>
            <div class="form-group">
            <button name="suadanhmuc" type="submit" class="btn btn-primary btn-block">Sửa danh mục</button>
            </div>
            <?php
            }
            ?>
        </div>
      </form>
    </table>
  </div>


  