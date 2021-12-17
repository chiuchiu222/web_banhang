<?php
if(isset($_POST['dangnhap'])){
    $email=$_POST['email'];
    $matkhau=md5($_POST['password']);
    $sql= " SELECT * FROM tbl_dangky WHERE email= '".$email."'  AND matkhau='".$matkhau."' LIMIT 1 ";
    $row= mysqli_query($mysqli,$sql); 
    $count=mysqli_num_rows($row);
    if($count>0){
        $row_data= mysqli_fetch_array($row);
        $_SESSION['dangky']=$row_data['tenkhachhang'];
        $_SESSION['id_khachhang']=$row_data['id_dangky'];

        header("Location:index.php?quanly=giohang");
    }else {
        echo '<p style="font-size: 20px; color:red" >Sai Mật khẩu hoặc Tài khoản!</p>';
    }
}
?>
<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
<div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title mb-4">Đăng nhập</h4>
      <form method="POST">
          <div class="form-group">
             <label>Email</label>
             <input name="email" class="form-control" placeholder="ex. name@gmail.com" type="email">
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
</div>