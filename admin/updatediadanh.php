<?php
include "../1connect.php";

if (isset($_POST['updatemadiadiem'])){
    $user_id=$_POST['updatemadiadiem'];

    $sql="Select * from `diadiem` where madiadiem=$user_id";
    $result=mysqli_query($connect, $sql);
    $response = array();
    while ($row=mysqli_fetch_assoc($result)){
        $response=$row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}

//update query

if(isset($_POST['hiddendata'])){
    $uniquemadiadiem=$_POST['hiddendata'];
    $tendiadiem=$_POST['updatetendiadiem'];
    $hinhanhdd=$_POST['updatehinhanhdd'];
    $tieude=$_POST['updatetieude'];
    $noidung=$_POST['updatenoidung'];
    $ngaydang=$_POST['updatengaydang'];
    $luotxem=$_POST['updateluotxem'];
    $id=$_POST['updateid'];
    $sotien1nguoi=$_POST['updatesotien1nguoi'];

    $sql="UPDATE `diadiem` SET tendiadiem='$tendiadiem', hinhanhdd='$hinhanhdd', tieude='$tieude', 
    noidung='$noidung', ngaydang='$ngaydang', luotxem='$luotxem', 
    id='$id', sotien1nguoi='$sotien1nguoi' WHERE madiadiem=$uniquemadiadiem";

    $result=mysqli_query($connect, $sql);

}


?>