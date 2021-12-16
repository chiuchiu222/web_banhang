<?php
session_start();
include('../../admincp/config/config.php');
//thêm số lượng
if(isset($_GET['cong'])){
    $id=$_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
            'hinhanh'=>$cart_item['hinhanh']);
            $_SESSION['cart']=$product;
        }else {
            $congsoluong= $cart_item['soluong']+1;
            if($cart_item['soluong']<10){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$congsoluong,'giasp'=>$cart_item['giasp'],
                'hinhanh'=>$cart_item['hinhanh']);
            }else {
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                'hinhanh'=>$cart_item['hinhanh']);            
            }
            $_SESSION['cart']=$product;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
//trừ số lượng
if(isset($_GET['tru'])){
    $id=$_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
            'hinhanh'=>$cart_item['hinhanh']);
            $_SESSION['cart']=$product;
        }else {
            $trusoluong= $cart_item['soluong']-1;
            if($cart_item['soluong']>1){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$trusoluong,'giasp'=>$cart_item['giasp'],
                'hinhanh'=>$cart_item['hinhanh']);
            }else {
                $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
                'hinhanh'=>$cart_item['hinhanh']);            
            }
            $_SESSION['cart']=$product;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
//xoá từng sản phẩm
if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
    $id=$_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],
            'hinhanh'=>$cart_item['hinhanh']);
        }
        $_SESSION['cart']=$product;
        header('Location:../../index.php?quanly=giohang');
    }
}
//xoá toàn bộ giỏ hàng
if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
    unset($_SESSION['cart']);
    header('Location:../../index.php?quanly=giohang');
}
if(isset($_POST['themgiohang']))
{
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql= "SELECT * FROM tbl_sanpham WHERE id_sanpham ='".$id."' LIMIT 1";
    $query= mysqli_query($mysqli,$sql);
    $row= mysqli_fetch_array($query);
    if($row){
        $new_pro=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasp'=>$row['giasp'],
        'hinhanh'=>$row['hinhanh']));
            //kiểm tra session giỏ hàng
        if(isset($_SESSION['cart'])){
            $found=false;
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id']==$id){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giasp'=>$cart_item['giasp'],
        'hinhanh'=>$cart_item['hinhanh']);
                    $found=true;
                }else{
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong,'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh']);
                }
            }
            if($found==false){
                $_SESSION['cart']= array_merge($product,$new_pro);
            }else{
                $_SESSION['cart']= $product;
            }
        }else{
            $_SESSION['cart']= $new_pro;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
?>
