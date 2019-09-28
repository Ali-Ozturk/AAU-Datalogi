<?php
include('includes/connect.php');
$id = $_GET['id'];

$utilitySQL = "SELECT * FROM utilities WHERE id=$id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);


foreach ($utilityList as $row):
    echo '<img src="gifs/' . $row['source'] . '">';
endforeach;

mysqli_close($db);
?>