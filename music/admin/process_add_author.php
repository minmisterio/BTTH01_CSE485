<?php
require '../admin/connection.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $tentacgia=$_POST['txtCatName'];
    try{
        $sql='insert into tacgia(ten_tgia) values(:ten_tgia)';
        $insert=$cnn->prepare($sql);
        $data=[
            'ten_tgia'=>$tentacgia
        ];
        $insert->execute($data);
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }
    header('Location:author.php');
}
