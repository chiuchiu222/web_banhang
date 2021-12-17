<header class="section-heading heading-line" ><h4 class="title-section text-uppercase">Giỏ hàng <?php if(isset($_SESSION['dangky'])){ echo 'của '.$_SESSION['dangky']; }?></h4></header>
<?php
if(isset($_SESSION['cart'])){
}
?>
<div class="card">
<table>
  <thead class="text-muted">
  <tr class="small text-uppercase">
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
  </tr>
  </thead>
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
        <a style="text-decoration: none;font-size:17px; font-weight:700; color:cornflowerblue" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"> + </a>
    <?php echo $cart_item['soluong']; ?>
        <a style="text-decoration: none; font-weight:700;font-size:17px; color:cornflowerblue" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"> - </a>
    </td>
    <td><?php echo number_format($thanhtien,0,',','.').' VNĐ'; ?></td>
    <td><a class="btn btn-light btn-round" style="text-decoration: none;float: left;" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
  </tr>
<?php
}
?>
 <tr>
    <td colspan="5"><p class="btn btn-secondary btn-sm" style=" font-size: 20px; margin-top: 35px;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ' ?></p>    
    <p><a class="btn btn-light btn-round" href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
    <div>
      <?php
        if(isset($_SESSION['dangky'])){
      ?>
          <p><a class="btn btn-primary float-md-right" href="pages/main/thanhtoan.php">Đặt hàng</a></p>
      <?php
        }else{
      ?>
          <p><a class="btn btn-primary float-md-right" href="index.php?quanly=dangky">Đăng kí để đặt hàng</a></p>
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
    <td colspan="5" style="font-size: 20px;"><p style="margin: 20px 20px 20px 20px; ">Hiện tại giỏ hàng trống</p></td>    
 </tr>
<?php
}
?>
</table>
</div>
