<div class="header">
    <!-- navigation bar -->
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
            <button class="dropbtn">Brand</button>
            <div class="dropdown-content">
                <?php
                $sql = "Select * From Brand";
                $rows = query($sql);
                for ($i = 0; $i < count($rows); $i++) {
                ?>
                    <a href="index.php?brandid=<?= $rows[$i][0] ?>"><?= $rows[$i][1] ?></a>
                <?php
                }
                ?>
            </div>
        </li>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" name="keyword">
            <button class="btn btn-outline-success" type="submit" name="search" value="Search">Search</button>
            <button onclick="location.href='login.php'" class="btn btn-danger" type="button" name="logout" href="login.php">Log out</button>
        </form>
    </ul>
</div>