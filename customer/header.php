<div class="row header">
    <ul class="nav">
        <p class="nav-item logo"><a href="home.php"><img src="../images/logo.jpg" alt="Phone Shop"></a></p>
        <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="home.php" class="nav-link">Product</a></li>
        <li class="dropdown">
            <button class="dropbtn">Brand</button>
            <div class="dropdown-content">
                <?php
                $sql = "Select * From brand";
                $rows = query($sql);
                for ($i = 0; $i < count($rows); $i++) {
                ?>
                    <a href="home.php?brandid=<?= $rows[$i][0] ?>"><?= $rows[$i][1] ?></a>
                <?php
                }
                ?>
            </div>
        </li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" name="keyword">
            <button class="btn btn-outline-warning" type="submit" name="search" value="Search">Search</button>
        </form>
    </ul>
</div>