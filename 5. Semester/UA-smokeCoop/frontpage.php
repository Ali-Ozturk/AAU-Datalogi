<?php
$mapsSQL = "SELECT * FROM maps ORDER BY id";
$mapList = mysqli_fetch_all(mysqli_query($db, $mapsSQL), MYSQLI_ASSOC);
?>

<div id="frontpage">
    <div class="wrapper">
        <div class="logo">
            <img src="images/logo.png">
        </div>

        <div class="maps">
            <p class="maps-text">Choose your desired map</p>

            <?php
            foreach ($mapList as $map):
                echo '<a href="utility.php?map_id=' . $map['id'] . '"><img src="images/' . $map['source'] . '"></a>';
            endforeach;
            ?>

        </div>
    </div>
</div>
