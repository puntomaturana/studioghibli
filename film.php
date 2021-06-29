<?php 

require_once('template/head.php');
require_once('api.php');

$id_film = $_GET['film'];
	//echo $id_film;
$data = getfilm($id_film);
	//print_r($data);
?>

<main class="content mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $data->title; ?></li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-12 order-2">
				<h1><?php echo $data->title; ?></h1>
				<h2><?php echo $data->original_title; ?></h2>
				<p>Director <strong><?php echo $data->director; ?></strong></p>
				<p>Productor <strong><?php echo $data->producer; ?></strong></p>
				<p>Fecha de lanzamiento<?php echo $data->release_date; ?></p>
				<p>Puntaje <?php echo $data->rt_score; ?></p>
				<p><?php echo $data->description; ?></p>

				<a href="index.php" class="btn btn-link">Back</a>
			</div>
			<div class="col-lg-4 col-md-4 col-12 order-1">
				<img src="https://via.placeholder.com/300" class="card-img-top img-fluid mb-3">
			</div>
		</div>
	</div>
</main>

<?php require_once('template/foot.php'); ?>