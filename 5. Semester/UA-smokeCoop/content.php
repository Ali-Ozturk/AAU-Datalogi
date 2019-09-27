<?php
$utilitySQL = "SELECT * FROM utilities ORDER BY id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);
?>

<div id="header">
    <h1>de_inferno</h1>
</div>

<div id="content">

    <?php
    foreach ($utilityList as $utility) {
        printf('<a href="#" class="myBtn"><div class="card" id="%s">', $utility["id"]);
        printf('<img src="gifs/%s"><div class="container">', $utility["source"]);
        printf('<h4><b>%s</b></h4>', $utility["type"]);
        printf('<p>%s</p>', $utility["title"]);
        printf('</div></div></a>');
    }
    ?>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">

        </div>

    </div>

    <script src="js/modal.js" type="text/javascript"></script>

    <div id="testingContainer"></div>

</div>