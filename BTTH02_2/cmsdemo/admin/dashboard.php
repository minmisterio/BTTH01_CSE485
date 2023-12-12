<?php
include_once 'config/Database.php';
include_once 'class/User.php';
include_once 'class/Post.php';
include_once 'class/Category.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$post = new Post($db);
$category = new Category($db);

if(!$user->loggedIn()) {
	header("location: index.php");
}


include('inc/header.php');
?>
<link href="css/style.css" rel="stylesheet" type="text/css" >  
</head>
<body>
<?php include "menus.php"; ?>

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
			</div>
			<br>
			<div class="col-md-2">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Manage
					<span class="caret"></span></button>
					<ul class="dropdown-menu">						
						<li><a href="#">Add Post</a></li>
						<li><a href="#">Add Category</a></li>
					</ul>
				</div> 
			</div>
		</div>
	</div>
</header>
<br>

<section id="main">
  <div class="container">
    <div class="row">
	
	<?php include "left_menus.php"; ?>
	
	
	
      <div class="col-md-9">
          <div class="panel panel-default">
  <div class="panel-heading" style="background-color:  #095f59;">
    <h3 class="panel-title">Website Overview</h3>
  </div>
  <div class="panel-body">
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $user->totalUser(); ?></h2>
       <h4>Users</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $category->totalCategory(); ?></h2>
       <h4>Categories</h4>
     </div>
   </div>
   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><?php echo $post->totalPost(); ?></h2>
       <h4>Posts</h4>
     </div>
   </div>   
  </div>
</div>


      </div>
    </div>
  </div>
</section>


 <?php include('inc/footer.php');?>
