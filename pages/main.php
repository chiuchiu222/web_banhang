<div id="main">
        <?php
        include ("pages/sidebar/sidebar.php");
        ?>

            <div class="maincontent">
                <?php
                if(isset($_GET['quanly'])){
                    $tmp=$_GET['quanly'];
                }
                else{
                    $tmp='';
                }
                if($tmp=='danhmucsanpham'){
                    include("pages/main/danhmuc.php");
                }elseif($tmp=='giohang'){
                    include("pages/main/giohang.php");
                }elseif($tmp=='tintuc'){
                    include("pages/main/tintuc.php");
                }elseif($tmp=='sanpham'){
                    include("pages/main/sanpham.php");
                }elseif($tmp=='profile'){
                    include("pages/main/profile.php");
                }elseif($tmp=='dangky'){
                    include("pages/main/dangky.php");
                }elseif($tmp=='dangnhap'){
                    include("pages/main/dangnhap.php");
                }elseif($tmp=='thanhtoan'){
                    include("pages/main/thanhtoan.php");
                }elseif($tmp=='dathangthanhcong'){
                    include("pages/main/dathangthanhcong.php");
                }else{
                    include("pages/main/index.php");
                }
                ?>
            </div>
        </div>