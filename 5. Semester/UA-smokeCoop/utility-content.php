<?php
$map_id = $_GET['map_id'];
$map_sql = "SELECT name FROM maps WHERE id=$map_id";
$map_result = mysqli_fetch_assoc(mysqli_query($db, $map_sql));
$map_name = $map_result['name'];
?>

<div id="header">
    <h1><?php print_r($map_name); ?></h1>
</div>

<div id="content">

    <!-- Fetch and load all utilities -->
    <?php include('print-utilities.php'); ?>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Utility</h2>
            </div>
            <div class="modal-body">
                <!-- Modal content (modal-data.php) -->
            </div>
        </div>

    </div>

    <!-- Script that requires to be loaded later -->
    <script src="js/modal.js" type="text/javascript"></script>
</div>