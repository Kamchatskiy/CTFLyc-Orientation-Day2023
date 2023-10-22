<meta charset="UTF-8">
<html>
	<head>
		<title>
			r u ins4ne?
		</title>
		<style>
.sanity-form {
	display: block;
	width: 50%;
	margin:auto;
}
img {
	margin: auto;
	width: 200px;
}
		</style>
	<body>
		<h1>r u s4ne or ins4ne?</h1>
		<hr />
		<div class="sanity-form">
		<img src="img.php?file=sanae.jpg" />
			<p>
			<?php 
$FLAG = getenv("FLAG");
$sane = ($_GET['sanity'] == "14ms4n43th4nky0u");

if ($sane) {
	echo "yep, ur s4n3! here's y0ur fl4g: " . $FLAG;
} else {
	echo "lol ur ins4n3 !!! s4n1t4rbi uj3 vbi3x4jlu! drink m3d1cat1on 1mmed1at3ly!!!";
}
?>
			</p>
		</div>
	</body>
</html>
