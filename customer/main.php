<?php
if(isset($_GET['brandid']))
    $sql = "Select * From Phone Where BrandId ='" . $_GET['brandid'] . "'";
elseif(isset($_GET["keyword"]))
    $sql = "Select * From Phone Where PhoneName like '%" . $_GET['keyword'] . "%'";
else
    $sql = "Select * From Phone";
$rows = query($sql);
?>

<div class="row main">
    <?php
    for ($i = 0; $i < count($rows); $i++) {
    ?>
        <div class="col-lg-4">
            <div class="item" >
                <div>
                    <a href="product.php?pid=<?=$rows[$i][0]?>" class="nav-link">
                        <img class="rounded" src="<?= $rows[$i][2] ?>" alt="">
                    </a>
                </div>
                <div><?= $rows[$i][1] ?></div>
                <div><?= $rows[$i][4] ?>$</div>
            </div>
        </div>
    <?php
    }
    ?>
</div>