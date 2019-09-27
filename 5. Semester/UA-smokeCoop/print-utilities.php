<?php
$utilitySQL = "SELECT * FROM utilities ORDER BY id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);

foreach ($utilityList as $utility) {
    printf('<div class="card myBtn" id="%s">', $utility["id"]);
    printf('<img src="gifs/%s"><div class="container">', $utility["source"]);
    printf('<h4><b>%s</b></h4>', $utility["type"]);
    printf('<p>%s</p>', $utility["title"]);
    printf('</div></div>');
}
?>
