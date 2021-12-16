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


<h3>Đăng ký thành viên</h3>
<form action="" method="POST">
<table>
    <tr>
        <td>Họ tên</td>
        <td><input type="text" name="hoten"></td>
    </tr>  
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" name="dienthoai"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="diachi"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="text" name="matkhau"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="dangky" value="Đăng ký"></td>
        <td><a>Bạn đã có tài khoản? </a><a href="index.php?quanly=dangnhap">Đăng nhập</a></td>
    </tr>
</table>
</form>