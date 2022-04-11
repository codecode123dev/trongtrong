<!DOCTYPE html>
<html>
<head>
	<title>Home Company</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmin.css">
</head>
<?php

?>
<?php 
if(isset($_POST['add']))
{

	$id = $_POST['id'];
	$name = $_POST['name'];
	if($_FILES)
	{
		$image = $_FILES['image']['name'];
		$path = "images/" . $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);
	}
	
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$sql = "Insert Into product values('" . $id . "', '" . $name . "', '" . $path . "', " . $price . ", " . $cat . ")";
	
	
}
if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
	$sql = "delete from product where ProductId = '" . $id . "'";

}
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$path = $_POST['imageold'];

	if($_FILES)
	{
		if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !='')
		{
			$image = $_FILES['image']['name'];
			$path = "images/" . $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}
				
	}
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$sql = "Update product set ProductName='" . $name . "', Image='" . $path . "', Price=" . $price . ", CatId=" . $cat . " Where ProductId = '" . $id . "'";	
	
}
?>
<body>
<div class="boundary">
	<?php 
	require_once('headeradmin.php');
	?>
	<div class="container">
		<!-- heading and main content -->
		<h1>Web Developers, Inc.</h1>
		<?php 
		require_once('left.php');
		?>
		<?php 
		require_once('right.php');
		?>		
	</div>
	<?php 
	require_once('footeradmin.php') 
	?>
</body>
</html>
