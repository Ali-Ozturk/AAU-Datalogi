<?php
include('includes/connect.php');
$id = $_GET['id'];

$utilitySQL = "SELECT * FROM utilities WHERE id=$id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);


foreach ($utilityList as $row):
    printf('        
        <video autoplay controls>
            <source src="media/%s" type="video/mp4">
            Your browser does not support videos. 
        </video>
        ', $row['source']);
endforeach;

mysqli_close($db);
?>