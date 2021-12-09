<p>Thêm sản phẩm</p>
<table border="1px" width="50%" style="border-collapse: collapse;">
<form method="POST" action="modules\quanlidanhmucsp\xuly.php">
  <tr>
      <td>Tên sản phẩm</td>
      <td><input type="text" name="tensanpham" ></td>
  </tr>
  <tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" name="masp" ></td>
  </tr>

  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong" ></td>
  </tr>

  <tr>
    <td>Tóm tắt</td>
    <td><textarea row="5" name="noidung" >   </textarea></td>
  </tr>

  <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" >   </textarea></td>
  </tr>

  <tr>
  <td>Giá</td>
    <td><input type="text" name="giasp" ></td>

  </tr>

  <tr>
  <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" ></td>
  </tr>

  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="" id="">
        <option value="">Kích hoạt</option>
        <option value="">Ẩn</option>
      </select>
    </td>
  </tr>

<tr>
<td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
</tr>
</form>
</table>
