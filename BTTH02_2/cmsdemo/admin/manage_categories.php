<?php
include_once 'config/Database.php';
include_once 'class/Category.php';
$database = new Database();
$db = $database->getConnection();

$category = new Category($db);

if(!empty($_POST['action']) && $_POST['action'] == 'categoryListing') {
	$category->getCategoryListing();
}
if(!empty($_POST['action']) && $_POST['action'] == 'categoryDelete') {
	$category->id = (isset($_POST['categoryId']) && $_POST['categoryId']) ? $_POST['categoryId'] : '0';
	$category->delete();
}
?>