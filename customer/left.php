<?php
$ad = array(
    array("../images/iphone14_blue.jpg"),
    array("../images/iphone-14-pro.jpg"),
    array("../images/z-flip.jpg"),
    array("../images/S23.jpg"),
);
?>

<?php
    for($i = 0; $i < count($ad); $i++){
?>
<div class="row ad">
    <div class="col-lg-12">
        <img src="<?=$ad[$i][0]?>" alt="">
    </div>
</div>
<?php
    }
?>