<?php
const _HOST='localhost';
const _DB='btth01_cse485';
const _USER='root';
const _PASSWORD='';
$option=[
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
try{
    if(class_exists('PDO')){
        $sql='mysql:host='._HOST.';dbname='._DB;
        $cnn=new PDO($sql,_USER,_PASSWORD,$option);
    }
}
catch(PDOException $ex){
    echo $ex->getMessage();
}