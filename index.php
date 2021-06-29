<?php 
	require_once('template/head.php');	
	require_once('api.php');
	$data = allfilms();
?>

	<main class="content mt-5">
		<div class="container">
					<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">Home</li>
					</ol>
				</nav>
			</div>
		</div>
			<div class="row">
				<?php foreach ($data as $pelicula) { ?>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card mb-4">
							<img src="https://via.placeholder.com/300" class="card-img-top img-fluid">
							<div class="card-body">
								<h5 class="card-title"><?php echo $pelicula->title; ?> <span class="badge bg-secondary"><?php echo $pelicula->release_date; ?></span></h5>
								<p class="card-text"><?php echo $pelicula->description; ?></p>
								<a href="film.php?film=<?php echo $pelicula->id; ?>" class="btn btn-dark">Ver más</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</main>

<?php require_once('template/foot.php'); ?>