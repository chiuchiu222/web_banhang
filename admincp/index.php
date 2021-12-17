<?php  
session_start();
if(!isset($_SESSION['dangnhap'])){
    header("Location:login.php");
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
    <header class="section-heading heading-line" ><h4 class="title-section text-uppercase">Admin</h4></header>
    <div class="wapper">
    <?php
        include("../admincp/config/config.php");
        include("../admincp/modules/menu.php");
        include("../admincp/modules/main.php");
        include("../admincp/modules/footer.php");
     ?>
     </div>
</body>
</html>