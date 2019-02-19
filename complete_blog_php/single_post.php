

<?php  include('config.php'); ?>
<?php  include('includes/public_function.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title> <?php echo $post['title'] ?> | LifeBlog</title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
	
	<div class="content" >
		<!-- Page wrapper -->
		<div class="post-wrapper">
			<!-- full post div -->
			<div class="full-post-div">
			<?php if ($post['published'] == false): ?>
				<h2 class="post-title">Sorry... This post has not been published</h2>
			<?php else: ?>
				<h2 class="post-title"><?php echo $post['title']; ?></h2>
				<div class="post-body-div">
					<?php echo html_entity_decode($post['body']); ?>
				</div>
			<?php endif ?>
			<button type="submit" class="btn btn-primary" name="create_upvote">Upvote</button>
			<button type="submit" class="btn btn-primary" name="create_downvote">Downvote</button>
			</div>
			<!-- // full post div -->
			<?php  include('admin/viewcomments.php'); ?>
			<!-- comments section -->
			<div class="panel panel-default">
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

				<div class="panel-heading">Submit Your Comments</div>
				  <div class="panel-body">
				  	<form method="post">
				  	  <div class="form-group">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Subject</label>
					    <textarea name="subject" class="form-control" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
					</form>
				  </div>
				</div>
			<div
			<!--  coming soon ...  -->
		</div>

		<!-- // Page wrapper -->

		<!-- post sidebar -->
		<div class="post-sidebar">
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- // post sidebar -->
	</div>
</div>
<!-- // content -->

<?php include( ROOT_PATH . '/includes/footer.php'); ?>