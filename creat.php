<?php
include 'config/db.php';

if (isset($_POST['submit'])) {

	$post_title= mysqli_real_escape_string($conn,$_POST['title']);

	$post_body= mysqli_real_escape_string($conn,$_POST['body']);

	$post_author= mysqli_real_escape_string($conn,$_POST['author']);

	$query= "INSERT INTO posts (title, body, author) VALUES ('$post_title','$post_body','$post_author')";

	if (mysqli_query($conn,$query)) {
		header('Location:index.php');

	}else{
		echo "Something Wrong";
	}
}
?>
	
	<?php include'layouts/header.php'; ?>
			<div class="row justify-content-center my-4">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title" style=" font-family: Garamond;">Created New Post</h4>
						</div>
						<div class="card-body" style=" font-family: Garamond;">
							<form action="" method="POST">
								<div class="mb-3">
									<input type="text" name="title" class="form-control" placeholder="Input Post title">
								</div>
								<div class="mb-3">
									<textarea name="body" class="form-control" placeholder="Input Post Details" rows="6"></textarea>
								</div>
								<div class="mb-3">
									<input type="text" name="author" class="form-control" placeholder="Input Post Author Name">
								</div>
								<div class="mb-3 d-grid">
									<input type="submit" name="submit" class="btn btn-primary" value="Create">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php include 'layouts/footer.php'; ?>