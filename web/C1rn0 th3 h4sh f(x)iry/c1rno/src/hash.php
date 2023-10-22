<meta charset="UTF-8">
<html>
	<head>
		<title>
			C1rn0 the h4sh f(x)iry
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
		<h1>C1rn0 the h4sh f(x)iry - Result<h1>
		<hr />
		<div class="sanity-form">
			<?php 
$FLAG = getenv("FLAG");
$check = (hash('md5',$_GET['hash']) == "0");
?>
<?php
if ($check){
	echo '<img src="img.php?file=cirno.jpeg" />';
} else {
	echo '<img src="img.php?file=cirno.png" />';
}
?>
			<p>
<?php
if ($check) {
	echo "N000!!! You defeated me - the strongest hash f(x)iry, here's your flag " . $FLAG;
} else {
	echo "Here's hash of your string: " . hash('sha256', $_GET['hash']);
}
?>
			</p>
		</div>
	</body>
</html>
