<!DOCTYPE html>
<html>

<head>
	<title>Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c002b551d9.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		.left {
			margin-right: 20px;
			margin-left: 20px;
			width: 13%;
			float: left;
		}

		.main {
			width: 83%;
			float: left;
		}

		.content ul {
			padding: 0;
			list-style: none;
		}

		.content li {
			margin: 10px 0;

		}

		.content a {
			color: white;
			text-decoration: none;
			display: inline-block;
		}

		.content a:hover {
			background-color: #1abc9c;
		}

		.title {
			text-transform: uppercase;
			background-color: #34495e;
		}

		.block {
			margin-bottom: 3rem;
			border: 1px solid gray;
			padding: 10px 10px;
		}

		.dropbtn {
			font-size: 20px;
			color: white;
			padding: 10px;
			border: none;
			cursor: pointer;
			width: auto;
			height: 50px;
			background: none;
			font-family: monospace;
			text-transform: uppercase;
			float: none;
		}

		.dropdown {
			position: relative;
			display: inline-block;
			text-transform: uppercase;
		}

		.dropdown-content {
			margin-left: 15rem;
			display: none;
			position: absolute;
			background-color: #34495e;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: white;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			font-size: 15px;
		}

		.dropdown-content a:hover {
			background-color: #1abc9c;
		}

		.dropdown:hover .dropdown-content {
			display: block;
			border: none;
		}

		.dropdown:hover .dropbtn {
			background-color: #1abc9c;
		}
	</style>
</head>
<?php
//liên kết file db.php vào file index để có các hàm kết nối csdl
require_once('./db.php');
if(isset($_POST['add1']))
{

	$id = $_POST['id'];
	$name = $_POST['name'];
	if($_FILES)
	{
		$image = $_FILES['image']['name'];
		$path = "../images/" . $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);
	}
	
	$brand = $_POST['brand'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$phonedetail = $_POST['phonedetail'];
	$sql = "Insert Into Phone values('" . $id . "', '" . $name . "', '" . $path . "','" . $phonedetail . "', '" . $price . "', '" . $size . "',  '" . $brand . "', '" . $color . "')";
	
	execsql($sql);
}

if (isset($_GET['delete1id'])) {
	$id = $_GET['delete1id'];
	$sql = "delete from phone where PhoneId = '" . $id . "'";
	execsql($sql);
}
if (isset($_POST['update1'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$path = $_POST['imageold'];

	if ($_FILES) {
		if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
			$image = $_FILES['image']['name'];
			$path = "../images/" . $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}
	}
	$brand = $_POST['brand'];
	$phonedetail = $_POST['phonedetail'];
	$price = $_POST['price'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$sql = "Update phone set PhoneName='" . $name . "', Image='" . $path . "', PhoneDetail='" . $phonedetail . "', Price='" . $price . "', Size='" . $size . "', BrandId='" . $brand . "', Color='" . $color . "' Where PhoneId = '" . $id . "'";
	execsql($sql);
}
?>

<body>
	<div class="boundary">
		<?php
		require_once('header.php');
		?>
		<div class="container-fluid">
			<!-- heading and main content -->
			<h1>Welcome </h1>
			<div class="row">
				<?php
				require_once('left.php');
				?>
				<?php
				require_once('main1.php');
				?>
			</div>
		</div>
</body>

</html>