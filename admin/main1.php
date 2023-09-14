<div class="main" name="main1">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Phone Name</th>
            <th scope="col">Size</th>
            <th scope="col">Color</th>
            <th scope="col">Price</th>
            <th scope="col" style="width: 30%;">Phone Detail</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_GET['brandid']))
            $sql = "select * from phone where BrandId=" . $_GET['brandid'];
        elseif (isset($_GET["keyword"]))
            $sql = "Select * From Phone Where PhoneName like '%" . $_GET['keyword'] . "%'";
        else
            $sql = "select * from phone";
        $rows = query($sql);
        for ($i = 0; $i < count($rows); $i++) {
        ?>
            <tr>
                <td><img src="<?= $rows[$i][2] ?>" width="100%" alt=""></td>
                <td><?= $rows[$i][1] ?></td>
                <td><?= $rows[$i][5] ?></td>
                <td><?= $rows[$i][7] ?></td>
                <td><?= $rows[$i][4] ?></td>
                <td style="text-align: justify;"><?= $rows[$i][3] ?></td>
                <td>
                    <a class="btn btn-success" href="index.php?update1id=<?= $rows[$i][0] ?>#update1">Edit</a>
                    <a class="btn btn-danger" href="index.php?delete1id=<?= $rows[$i][0] ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET['update1id']))
    require_once('update1.php');
else
    require_once('add1.php');
?>
</div>