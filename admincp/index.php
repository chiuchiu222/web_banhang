<?php  
session_start();
if(!isset($_SESSION['dangnhap'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
     type="text/css" href="../admincp/css/styleadmin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
</head>
<body>
    <h3 class="title_admin">Welcom</h3>
    <div class="wapper">
    <?php
        include("../admincp/config/config.php");
        include("../admincp/modules/header.php");
        include("../admincp/modules/menu.php");
        include("../admincp/modules/main.php");
        include("../admincp/modules/footer.php");
     ?>
     </div>
</body>
</html>