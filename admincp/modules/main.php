<div class="clear"></div>
<div class="main">
<?php
    if(isset($_GET['action'])&& $_GET['query']){
            $tmp=$_GET['action'];
            $query=$_GET['query'];
            }
            else{
                $tmp='';
                $query='';
            }
            if($tmp=='quanlydanhmucsanpham'&&$query=='them'){
                include("../admincp/modules/quanlidanhmucsp/them.php");
                include("../admincp/modules/quanlidanhmucsp/lietke.php");
            }elseif($tmp=='quanlydanhmucsanpham'&&$query=='sua'){
                include("../admincp/modules/quanlidanhmucsp/sua.php");
            }elseif($tmp=='quanlysanpham'&&$query=='them'){
                include("../admincp/modules/quanlisp/them.php");
                include("../admincp/modules/quanlisp/lietke.php");
            }elseif($tmp=='quanlysanpham'&&$query=='sua'){
                include("../admincp/modules/quanlisp/sua.php");
            }else{
                    include("../admincp/modules/dashbroad.php");
                }
                ?>
</div>