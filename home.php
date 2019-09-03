<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>php page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	include "nav.php";
	include "head.php";
	?>
	<div class="container container-fluid">
		<div class="card-deck">
			<?php
			$images = scandir('./images');
			foreach ($images as $image) {
				if ($image != '.' && $image != '..') {
					array_push($images, $image);
				}
			}
			$handle = fopen('info.txt', 'r');
			$lines = [];
			while (!feof($handle)) {
				$line = fgets($handle);
				array_push($lines, $line);
			};
			echo '
				<div class="card">
					<img class="card-img-top" src="./images/' . $images[2] . '">
					<div class="card-body">
						<h5 class="card-title">' . $lines[0] . '</h5>
						<p class="card-text">' . $lines[1] . '</p>
						<p class="card-text"><small class="text-muted">' . $lines[2] . '</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="./images/' . $images[3] . '">
					<div class="card-body">
						<h5 class="card-title">' . $lines[3] . '</h5>
						<p class="card-text">' . $lines[4] . '</p>
						<p class="card-text"><small class="text-muted">' . $lines[5] . '</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="./images/' . $images[4] . '">
					<div class="card-body">
						<h5 class="card-title">' . $lines[6] . '</h5>
						<p class="card-text">' . $lines[7] . '</p>
						<p class="card-text"><small class="text-muted">' . $lines[8] . '</small></p>
					</div>
				</div>';
			?>
		</div>
		<?php
		include "footer.php";
		?>
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>