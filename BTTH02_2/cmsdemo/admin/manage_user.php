<?php
include_once 'config/Database.php';
include_once 'class/User.php';
$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if(!empty($_POST['action']) && $_POST['action'] == 'userListing') {
	$user->getUsersListing();
}
if(!empty($_POST['action']) && $_POST['action'] == 'userDelete') {
	$user->id = (isset($_POST['userId']) && $_POST['userId']) ? $_POST['userId'] : '0';
	$user->delete();
}
?>