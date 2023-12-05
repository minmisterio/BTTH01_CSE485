<?php
    try{
$conn = new PDO(dsn:"mysql:host=localhost;dbname=btth01_cse485",username:"root",password:"");
// $sql = "select * from tacgia where tacgia.ma_tgia ='2'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$tacgia=$stmt->fetchAll();
echo "<pre>";
print_r($tacgia);
echo "</pre>";
    }
    catch(PDOException $e){
        echo $e -> getMessage();
    }
?>