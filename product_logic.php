<?php

$msg = '';

if ($_GET['id']) {
	$product_id = $_GET['id'];

	if ($product_id == 1) {
		$msg = "You chose Mac";
	} else if ($product_id == 2) {
		$msg = "You chose Ubuntu";
	} else if ($product_id == 3) {
		$msg = "You chose Windows";
	} else {
		$msg = "Your choice is not valid, please choose again";
	}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include ('header.php')
?>

<div class="content">
	<?php echo ("<h1>$msg</h1>"); ?>
</div>

<?php
include('footer.php');
?>
	
</body>
</html>