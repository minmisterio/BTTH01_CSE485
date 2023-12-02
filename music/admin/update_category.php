<?php 
require '../admin/connection.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $ten_tloai=$_POST['txtCatName'];
    $ma_tloai=$_POST['txtCatId'];
    try{
        $sql="UPDATE theloai SET ten_tloai=:ten_tloai where ma_tloai=:ma_tloai ";
        $update=$cnn->prepare($sql);
        $data=[
            'ten_tloai'=>$ten_tloai,
            'ma_tloai'=>$ma_tloai
            
        ];
        $update->execute($data);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }
    header('Location:category.php');
}