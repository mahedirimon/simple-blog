<?php 


include'config/db.php';



$id= $_GET['id'];

$query= "SELECT * FROM posts WHERE id=".$id;

$result= mysqli_query($conn,$query);

$post=mysqli_fetch_assoc($result);


 ?>

<?php include'layouts/header.php' ?>
<div class="container">
	<div class="row my-4 justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					<div class="h4-card-title" style=" font-family: Garamond;"><?php echo $post['title']; ?></div>
				</div>
				<div class="card-body" style=" font-family: Garamond;">
					<p><?php echo $post['body']; ?></p>
					<p>
						<a href="edit.php?id=<?php echo $post['id']; ?>" class=" btn btn-primary btn-sm">Edit</a>//
						<a href="delete.php?id=<?php echo $post['id']; ?>" class=" btn btn-danger btn-sm">Delete</a>
					</p>
				</div>
				<div class="card-footer" style=" font-family: Garamond;">
					<p>Created on <span class="text-primary"><?php echo $post['created_at']; ?></span> By <span class="text-primary"><?php echo $post['author']; ?></span></p>
				</div>
			</div>
		</div>
	</div>
</div>



<?php include 'layouts/footer.php' ?>