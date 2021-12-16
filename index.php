<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
     type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop thú cưng</title>
</head>
<body>
    <div class="wapper">
     <?php
        session_start();
    //  unset($_SESSION['dangky']);
        include("admincp/config/config.php");
        include("pages/header.php");
        include("pages/menu.php");
        include("pages/main.php");
        include("pages/footer.php");
     ?>
    </div>
</body>
</html>