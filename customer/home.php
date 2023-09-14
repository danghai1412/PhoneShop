<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c002b551d9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/home.css">
    <style>
    .item img {
        max-width: auto;
        max-height: 200px;
    }

    .main {
        margin-right: 5rem;
    }

    .ad img {
        width: auto;
        height: 250px;
        margin-left: 35px;
    }

    .nav {
        background-color: #CCFFFF;
    }

    .nav li:hover {
        background-color: #00CC99;
    }

    nav a:hover {
        background-color: #00CC99;
        color: black;
    }

    .product {
        background-color: #00CC99;
    }

    .item {
        background-color: #CCFFFF;
    }

    .dropdown-content {
        background-color: #CCFFFF;
    }

    .dropdown-content a:hover {
        background-color: #00CC99;
    }

    .dropdown:hover .dropbtn {
        background-color: #00CC99;
    }
	.footer{
		background-color: #CCFFFF;
	}
	.ad img{
		border: 1px solid #CCFFFF;
	}
    </style>
</head>

<body>
    <?php
	include_once("db.php");
	?>
    <div class="container-fluid">
        <?php
		include_once("header.php");
		?>
        <div class="row">
            <div class="left col-lg-3">
                <?php
				include_once("left.php");
				?>
            </div>
            <div class="right col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
						include_once("main.php");
						?>
                    </div>
                </div>
            </div>
        </div>
        <?php
		include_once("footer.php");
		?>

    </div>
</body>

</html>