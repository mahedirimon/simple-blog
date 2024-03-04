<?php 


include'config/db.php';

if (isset($_POST['submit'])) {
	$update_id= mysqli_real_escape_string($conn,$_POST['update_id']);
	$title= mysqli_real_escape_string($conn,$_POST['title']);
	$body= mysqli_real_escape_string($conn,$_POST['body']);
	$author= mysqli_real_escape_string($conn,$_POST['author']);


	$query=" UPDATE posts SET
		title='$title',
		body='$body',
		author='$author'
		WHERE id ={$update_id}";

		if (mysqli_query($conn,$query)) {
			header('Location:index.php');
		}else{
			echo " Something Wrong";
		}
}

$id= $_GET['id'];

$query= "SELECT * FROM posts WHERE id=".$id;

$result= mysqli_query($conn,$query);

$post=mysqli_fetch_assoc($result);

 ?>

<?php 	include 'layouts/header.php' ?>

<div class="row justify-content-center my-4">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title" style=" font-family: Garamond;">Edit Post</h4>
						</div>
						<div class="card-body" style=" font-family: Garamond;">
							<form action="" method="POST">
								<div class="mb-3">
									<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
								</div>
								<div class="mb-3">
									<textarea name="body" class="form-control" rows="6"><?php echo $post['body']; ?></textarea>
								</div>
								<div class="mb-3">
									<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
								</div>
								<div class="mb-3 d-grid">
									<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
									<input type="submit" name="submit" class="btn btn-primary" value="Update">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
 <?php 	include'layouts/footer.php' ?>