<h4 class="title py-3">Thêm sản phẩm</h4>

<div class="card card-body">
    <table>
      <form method="POST" action="modules\quanlisp\xuly.php" enctype="multipart/form-data">
        <div class="card-body">

          <div class="form-group">
            <label>Tên sản phẩm</label>
            <input class="form-control" type="text" name="tensanpham" >
          </div>

          <div class="form-group">
            <label>Mã sản phẩm</label>
            <input class="form-control" type="text" name="masp" >
          </div>          

          <div class="form-group">
            <label>Số lượng</label>
            <input class="form-control" name="soluong" type="text">
          </div>          

          <div class="form-group">
            <label>Tóm tắt</label>
            <textarea class="form-control" rows="10" name="tomtat"  style="resize: none"  ></textarea>
          </div>

          <div class="form-group">
            <label>Nội dung</label>
            <textarea class="form-control" rows="10" name="noidung"  style="resize: none"  ></textarea>
          </div>

          <div class="form-group">
            <label>Giá</label>
            <input class="form-control" name="giasp" type="text">
          </div>

          <div class="form-group">
            <label>Hình ảnh</label>
            <input class="form-control-file" type="file" name="hinhanh">        
          </div>

          <div class="form-group">
            <label>Danh mục</label>
            <select id="inputState" class="form-control" name="danhmuc">
                <?php
                  $sql_danhmuc="SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
                  $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
                  while ($row_danhmuc= mysqli_fetch_array($query_danhmuc)) {
                ?>
                  <option value="<?php echo $row_danhmuc['id_danhmuc']?>">   <?php echo $row_danhmuc['tendanhmuc'] ?>  </option>
                <?php
                }
                ?>
            </select>        
          </div>

          <div class="form-group">
            <label>Tình trạng</label>
            <select id="inputState" class="form-control" name="tinhtrang">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>        
          </div>
          <div class="form-group">
          <button name="themsanpham" type="submit" class="btn btn-primary btn-block">Thêm sản phẩm</button>
          </div>
        </div>
      </form>
    </table>
</div>