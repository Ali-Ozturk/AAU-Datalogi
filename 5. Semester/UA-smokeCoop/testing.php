<?php
include('includes/connect.php');
$id = $_GET['id'];

$utilitySQL = "SELECT * FROM utilities WHERE id=$id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);

echo '<div class="modal-header">
                <span class="close">&times;</span>
                <h2>Modal Header</h2>
            </div>
            <div class="modal-body">';
foreach ($utilityList as $row):
    print_r($row);
endforeach;
            echo '</div>';


?>