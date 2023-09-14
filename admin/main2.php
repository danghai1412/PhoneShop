<div class="main" name="main2">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_GET["keyword"]))
            $sql = "Select * From Brand Where BrandName like '%" . $_GET['keyword'] . "%'";
        else
            $sql = "select * from brand";
        $rows = query($sql);
        for ($i = 0; $i < count($rows); $i++) {
        ?>
            <tr>
                <td><img src="<?= $rows[$i][2] ?>" width="100%" alt=""></td>
                <td><?= $rows[$i][1] ?></td>
                <td>
                    <a class="btn btn-success" href="index2.php?update2id=<?= $rows[$i][0] ?>#update2">Edit</a>
                    <a class="btn btn-danger" href="index2.php?delete2id=<?= $rows[$i][0] ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET['update2id']))
    require_once('update2.php');
else
    require_once('add2.php');
?>
</div>