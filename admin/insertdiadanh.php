<?php
include "../1connect.php";

extract($_POST);
if(isset($_POST['tendiadiemsend']) && isset($_POST['tieudesend'])
&& isset($_POST['ngaydangsend']) && isset($_POST['luotxemsend']) 
&& isset($_POST['idsend']) && isset($_POST['sotien1nguoisend'])){

    $sql="INSERT INTO `diadiem` (tendiadiem, tieude, ngaydang, luotxem, id, sotien1nguoi) VALUES 
    ('$tendiadiemsend', '$tieudesend', '$ngaydangsend', '$luotxemsend', '$idsend', '$sotien1nguoisend')";

    $result=mysqli_query($connect,$sql);
}

?>