<?php
function getCon() {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "btth02_1";
    try {
        return new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
