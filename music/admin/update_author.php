<?php 
require '../admin/connection.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $ten_tgia=$_POST['txtCatName'];
    $ma_tgia=$_POST['txtCatId'];
    try{
        $sql="UPDATE tacgia SET ten_tgia=:ten_tgia where ma_tgia=:ma_tgia ";
        $update=$cnn->prepare($sql);
        $data=[
            'ten_tgia'=>$ten_tgia,
            'ma_tgia'=>$ma_tgia
            
        ];
        $update->execute($data);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }
    header('Location:author.php');
}