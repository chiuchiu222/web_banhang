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
        echo '<p>Sai Mật khẩu hoặc Tài khoản!</p>';
    }
}
?>

<form action="" autocomplete="off" method="POST">
    <table>
        <tr>
            <td colspan="2"><h3>Đăng nhập Admin</h3></td>   
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" placeholder="email" name="email"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr >
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
    </form>