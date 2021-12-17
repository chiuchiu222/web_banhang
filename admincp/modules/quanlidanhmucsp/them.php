<h4 class="title py-3">Thêm danh mục sản phẩm</h4>
<div class="card card-body">
  <table>
    <form  method="POST" action="modules\quanlidanhmucsp\xuly.php">
        <div class="card-body">
          <div class="form-group">
            <label>Tên danh mục</label>
            <input class="form-control" type="text" name="tendanhmuc" >
          </div>
          <div class="form-group">
            <label>Thứ tự</label>
            <input class="form-control" type="text" name="thutu" >
          </div>
          <div class="form-group">
          <button name="themdanhmuc" type="submit" class="btn btn-primary btn-block">Thêm danh mục</button>
          </div>
      </div>
    </form>
  </table>
</div>
