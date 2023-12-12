<?php 
include_once 'config/Database.php';
include_once 'class/Articles.php';
$database = new Database();
$db = $database->getConnection();

$article = new Articles($db);

$article->id = 0;

$result = $article->getArticles();

include('inc/header.php');

?>
<title>phpzag.com : Demo Build Content Management System with PHP & MySQL</title>
<link href="css/style.css" rel="stylesheet" id="bootstrap-css">

<?php include('inc/container.php');?>
<div class="container">	
		<div id="blog" class="row">
			<div class="header">
			<a href="#default" class="logo">My DEMO CMS</a>
			<div class="header-right">
				<a href="index.php">Home</a>
				<a href="#contact">Contact</a>
				<a href="#about">About</a>
				<a href="http://localhost/cmsdemo/admin/index.php">Log in</a>
			</div>
		</div>	
		<?php
		while ($post = $result->fetch_assoc()) {
			$date = date_create($post['created']);					
			$message = str_replace("\n\r", "<br><br>", $post['message']);
			$message = $article->formatMessage($message, 100);
			?>
			<div class="col-md-10 blogShort">
			<h3><a href="view.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>		
			<em><strong>Published on</strong>: <?php echo date_format($date, "d F Y");	?></em>
			<em><strong>Category:</strong> <a href="#" target="_blank"><?php echo $post['category']; ?></a></em>
			<br><br>
			<article>		
			<p><?php echo $message; ?> 	</p>
			</article>
			<a class="btn btn-blog pull-right" href="view.php?id=<?php echo $post['id']; ?>">READ MORE</a> 
			</div>
		<?php } ?>   	
	</div>
</div>
<?php include('inc/footer.php');?>