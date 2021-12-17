<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>


<nav class="navbar navbar-main navbar-expand-lg border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item">
        <li><a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lí danh mục sản phẩm</a></li>
        </li>
        <li class="nav-item">
        <li><a  class="nav-link" href="index.php?action=quanlysanpham&query=them">Quản lí sản phẩm</a></li>
        </li>
        <li><a  class="nav-link" href="index.php?action=quanlydonhang&query=lietke">Quản lí đơn hàng</a></li>
        </li>
        <li><a  class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>