
<p>Giỏ hàng của <?php if(isset($_SESSION['dangky'])){ echo $_SESSION['dangky']; }?></p>
<?php
if(isset($_SESSION['cart'])){
}
?>
<table>
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
  </tr>
<?php
if(isset($_SESSION['cart'])){
    $i=0;
    $tongtien=0;
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien= $cart_item['giasp']*$cart_item['soluong'];
        $i++;
        $tongtien+=$thanhtien;
?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlisp/uploads/<?php echo $cart_item['hinhanh'];?>" alt="" width='150'></td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').' VNĐ'; ?></td>
    <td>
        <a style="text-decoration: none" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a>
    <?php echo $cart_item['soluong']; ?>
        <a style="text-decoration: none" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a>
    </td>
    <td><?php echo number_format($thanhtien,0,',','.').' VNĐ'; ?></td>
    <td><a style="text-decoration: none" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
  </tr>
<?php
}
?>
 <tr>
    <td colspan="5"><p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ' ?></p>    
    <p><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
    <div>
      <?php
        if(isset($_SESSION['dangky'])){
      ?>
          <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
      <?php
        }else{
      ?>
          <p><a href="index.php?quanly=dangky">Đăng kí để đặt hàng</a></p>
      <?php    
        }
      ?>
    </div>
    </td>
 </tr>
<?php
}else{
?>
 <tr>
    <td colspan="5"><p>Hiện tại giỏ hàng trống</p></td>    
 </tr>
<?php
}
?>
</table>
