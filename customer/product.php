<!DOCTYPE html>
<html>

<head>
    <title>First page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <div class="product">
            <?php
            $pid = $_GET['pid'];
            $sql = "Select * From Phone where PhoneId ='" . $pid . "'";
            $rows = query($sql);
            ?>
            <img src="<?= $rows[0][2] ?>" alt="" class="border border-primary rounded">
            <div class="content">
                <h2><?= $rows[0][1] ?></h2>
                <p class="font-weight-bold">Price: <?= $rows[0][4] ?>$</p>
                <p>__________Phone Details__________</p>
                <br>
                <p >Size: <?= $rows[0][5] ?></p>
                <p >Color: <?= $rows[0][7] ?></p>
                <p style="text-align: start;"><?= $rows[0][3] ?></p>
                <div  class="btn btn-info" style="margin: 20px 15px">
                <a style="margin-right: 5px;">Add To Cart</a><i class="fa-solid fa-cart-plus"></i>
                </div>
            </div>
        </div>
        <?php
        include_once("footer.php");
        ?>
    </div>
</body>

</html>
</div>

</div>
</body>

</html>