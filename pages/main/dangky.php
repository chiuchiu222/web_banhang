<header class="section-heading heading-line" ><h4 class="title-section text-uppercase">Đăng ký thành viên</h4></header>


<?php
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['hoten'];
        $email=$_POST['email'];
        $dienthoai=$_POST['dienthoai'];
        $diachi=$_POST['diachi'];
        $matkhau=md5($_POST['matkhau']);
        $sql=" INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
        VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')";
        $sql_dangky=mysqli_query($mysqli,$sql);
        if($sql_dangky){
            echo'<p>Đăng ký thành công!</p>';
            $_SESSION['id_khachhang']=mysqli_insert_id($mysqli);
            $_SESSION['dangky']=$tenkhachhang;

            header('Location:index.php?quanly=giohang');
        }
    }
?>


<div class="card mb-4">
<article class="card-body">
<form method="POST" action="">
	<div class="form-row">
		<div class="col form-group">
			<label>Họ và tên</label>
		  	<input name="hoten" type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Số điện thoại</label>
		  	<input name="dienthoai" type="text" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email</label>
		<input name="email" type="email" class="form-control" placeholder="">
		<small class="form-text text-muted">Email của bạn được bảo đảm riêng tư.</small>
	</div> <!-- form-group end.// -->
	
	<div class="form-row">
		<div class="form-group col-md-6">
			<label>Mật khẩu</label>
		    <input name="matkhau" class="form-control" type="password">
		</div> <!-- form-group end.// --> 
		<div class="form-group col-md-6">
			<label>Địa chỉ</label>
		    <input name="diachi" class="form-control" type="text">
		</div> <!-- form-group end.// -->  
	</div>
    <div class="form-group">
        <button name="dangky" type="submit" class="btn btn-primary btn-block"> Đăng ký  </button>
    </div> <!-- form-group// -->      
                                          
</form>
<hr>
<p class="text-center">Bạn đã có tài khoản? <a href="index.php?quanly=dangnhap">Đăng nhập</a></p>
</article> <!-- card-body end .// -->
</div>