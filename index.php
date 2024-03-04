<?php
include'config/db.php';
$query="SELECT * FROM posts ORDER BY id DESC";
$result=mysqli_query($conn,$query);
$posts=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<?php include'layouts/header.php'; ?>
			<?php foreach ($posts as $data): ?>
			<div class="row justify-content-center my-4">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title" style=" font-family: Garamond;"><?php echo $data['title']; ?></h4>
						</div>
						<div class="card-body" style=" font-family: Garamond;">
							<p><?php echo $data['body']; ?></p>
							<p><a href="details.php?id=<?php echo $data['id']; ?>" class="btn btn-info btn-sm">Read More</a></p>
						</div>
						<div class="card-footer" style=" font-family: Garamond;">
							<p>Created on <span class="text-primary"><?php echo $data['created_at']; ?></span> By <span class="text-primary"><?php echo $data['author']; ?></span></p>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach ?>
		<?php include 'layouts/footer.php'; ?>