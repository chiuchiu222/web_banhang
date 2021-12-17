<?php
  $sql_danhmuc="SELECT * FROM tbl_category ORDER BY id_danhmuc DESC";
  $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
  if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
  }
?> 
<nav class="navbar navbar-main navbar-expand-lg border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div style="font-weight: 600;" class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item">
        <li><a class="nav-link" href="index.php">Trang chủ</a></li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-bars text-muted mr-2"></i> Danh mục </a>
          <div class="dropdown-menu">
            <!-- <a class="dropdown-item" href="#">Machinery</a> -->
            <?php  while ($row_danhmuc= mysqli_fetch_array($query_danhmuc)) { ?>
             <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a><?php } ?>
          </div>
        </li>
        <li class="nav-item">
        <li><a  class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a></li>
        </li>
 
        <li class="nav-item">
        <?php
                if(isset($_SESSION['dangky'])){
                ?>
                  <li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
                <?php
                }else{
                ?>
                  <li class="nav-item"><a class="nav-link" href="index.php?quanly=dangky">Đăng ký</a></li>
                <?php
                }
                ?>
                </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>

