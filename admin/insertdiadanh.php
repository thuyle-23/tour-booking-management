<?php
include "../1connect.php";

extract($_POST);
if(isset($_POST['hinhanhddsend']) && isset($_POST['tendiadiemsend']) && isset($_POST['tieudesend'])
&& isset($_POST['noidungsend']) && isset($_POST['ngaydangsend']) && isset($_POST['luotxemsend']) && isset($_POST['sotien1nguoisend'])){

    $sql="INSERT INTO `diadiem` (hinhanhdd, tendiadiem, tieude, noidung, ngaydang, luotxem, sotien1nguoi) VALUES 
    ('$hinhanhddsend', '$tendiadiemsend', '$tieudesend', '$noidungsend', '$ngaydangsend', '$luotxemsend', '$sotien1nguoisend')";

    $result=mysqli_query($connect,$sql);
}

?>