<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>
<ul class="admincp_list">
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lí danh mục sản phẩm</a></li>
    <li><a href="index.php?action=quanlysanpham&query=them">Quản lí sản phẩm</a></li> 
    <li><a href="index.php?action=quanlydonhang&query=lietke">Quản lí đơn hàng</a></li>

    <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
</ul>