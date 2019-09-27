<?php
include('includes/connect.php');
$id = $_GET['id'];

$utilitySQL = "SELECT * FROM utilities WHERE id=$id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);

echo $id;
echo "Here is the data retrieved:\n";
foreach ($utilityList as $row):
    print_r($row);
    echo "\n";
endforeach;
?>