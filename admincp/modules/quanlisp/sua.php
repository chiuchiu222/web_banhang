<h4 class="title py-3">Sửa sản phẩm</h4>
<?php
$sql_sua_sp= "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$query_sua_sp= mysqli_query($mysqli,$sql_sua_sp);
?>
<div class="card card-body">
  <table>
    <?php
    while($row=mysqli_fetch_array($query_sua_sp)){
    ?>
    <form method="POST" action="modules/quanlisp/xuly.php?idsanpham=<?php  echo $row['id_sanpham']?>" enctype="multipart/form-data">
      <div class="card-body">
        <div class="form-group">
          <label>Tên sản phẩm</label>
          <input class="form-control" type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham" >
        </div>
      
        <div class="form-group">
          <label>Mã sản phẩm</label>
          <input class="form-control" type="text" value="<?php echo $row['masp'] ?>" name="masp" >
        </div>

        <div class="form-group">
          <label>Số lượng</label>
          <input class="form-control" type="text" value="<?php echo $row['soluong'] ?>" name="soluong" >
        </div>

        <div class="form-group">
            <label>Tóm tắt</label>
            <textarea class="form-control" rows="10" name="tomtat"  style="resize: none"  ><?php echo $row['tomtat']?></textarea>
        </div>

        <div class="form-group">
          <label>Nội dung</label>
          <textarea class="form-control" rows="10" name="noidung"  style="resize: none"  ><?php echo $row['noidung']?></textarea>
        </div>

        <div class="form-group">
          <label>Giá</label>
          <input class="form-control" type="text" value="<?php echo $row['giasp'] ?>" name="giasp">
        </div>

        <div class="form-group">
            <label>Hình ảnh</label>
            <input class="form-control-file" type="file" name="hinhanh" ><img src="modules/quanlisp/uploads/<?php echo $row['hinhanh']?>" width="150px">       
        </div>

        <div class="form-group">
            <label>Danh mục</label>
            <select id="inputState" class="form-control" name="danhmuc">
            <?php
                $sql_danhmuc="SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
                $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
                while ($row_danhmuc= mysqli_fetch_array($query_danhmuc)) {
                  if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
              ?>
                <option selected value = "<?php echo $row_danhmuc['id_danhmuc']?>">   <?php echo $row_danhmuc['tendanhmuc'] ?>  
              </option>
              <?php
                  }else{
              ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>">   <?php echo $row_danhmuc['tendanhmuc'] ?>
                </option>
              <?php
                        }
                }
              ?>
            </select>        
          </div>
          <div class="form-group">
            <label>Tình trạng</label>
              <select id="inputState" class="form-control" value="<?php echo $row['tinhtrang'] ?>" name="tinhtrang">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
              </select>        
          </div>
          <div class="form-group">
          <button name="suasanpham" type="submit" class="btn btn-primary btn-block">Sửa sản phẩm</button>
          </div>
      <?php
      }
      ?>
        </div>
    </form>
  </table>
</div>