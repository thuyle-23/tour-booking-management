<?php

include "1connect.php";
if (isset($_POST['dattour'])) {
    $id = (int)$_POST['dattour'];
    $diadiemdi = $_POST['diadiemdi'];
    $diadiemden = $_POST['diadiemden'];
    $ngaykhoihanh = (String)$_POST['ngaykhoihanh'];
    $ngayketthuc = (String)$_POST['ngayketthuc'];
    $dienthoai = (double)$_POST['dienthoai'];
    $soluongnguoi = (int)$_POST['soluongnguoi'];
    $tongtien = (double)$_POST['sotientra']*(double)$_POST['soluongnguoi'];
    $sql = "INSERT INTO hoadon(id, diadiemdi, diadiemden, ngaykhoihanh, ngayketthuc, sodienthoai, soluongnguoi, tongtien) VALUES ($id, '$diadiemdi', '$diadiemden', '$ngaykhoihanh', '$ngayketthuc', $dienthoai, $soluongnguoi, $tongtien)";
    
//    $sqlxoatrung = "DELETE FROM hoadon WHERE id=$id";
//    $connect->query($sqlxoatrung);
 
    if ($connect->query($sql) == true) {
        include('rahoadon.php');
    }
    
}
//$connect->close();
?>