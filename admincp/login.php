<?php
session_start();
include("../admincp/config/config.php");
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $matkhau=md5($_POST['password']);
    $sql= " SELECT * FROM tbl_admin WHERE username= '".$taikhoan."'  AND password='".$matkhau."' LIMIT 1 ";
    $row= mysqli_query($mysqli,$sql); 
    $count=mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap']=$taikhoan;
        header("Location:index.php");
    }else {
        echo '<p style="font-size: 20px; color:red; margin: 20px 20px 20px 20px">Sai Mật khẩu hoặc Tài khoản!</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>
<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>
    <title>Admin Shop</title>
</head>
<body>

<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Đăng nhập Admin</h4>
        <form method="POST">
            <div class="form-group">
                <label>Email</label>
                <input name="username" class="form-control" type="text">
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="password" class="form-control" placeholder="******" type="password">
            </div> <!-- form-group// --> 
            <div class="form-group"> 
                <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
            </div> <!-- form-group form-check .// -->
            <div class="form-group">
                <button name="dangnhap" type="submit" class="btn btn-primary btn-block"> Đăng nhập  </button>
            </div> <!-- form-group// -->    
        </form>
    </div>
</div>
</body>
</html>
