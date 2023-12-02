<?php
require '../admin/connection.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $tenbaihat=$_POST['txtCatName'];
    try{
        $sql='insert into theloai(ten_tloai) values(:ten_tloai)';
        $insert=$cnn->prepare($sql);
        $data=[
            'ten_tloai'=>$tenbaihat
        ];
        $insert->execute($data);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }
    header('Location:category.php');
}
