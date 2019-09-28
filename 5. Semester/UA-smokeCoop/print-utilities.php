<?php
$utilitySQL = "SELECT * FROM `utilities` WHERE map_id=$map_id ORDER BY id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);


foreach ($utilityList as $utility) {
    $userID = $utility["created_by"];
    $SQL = "SELECT username FROM users WHERE id=$userID";
    $sql_result = mysqli_fetch_assoc(mysqli_query($db, $SQL));
    $creator = $sql_result['username'];

    printf('<div class="card myCard" id="%s">
    <div class="c-image">
        <img src="gifs/%s">
        <div class="overlay"></div>
    </div>

    <div class="container" >
        <div class="c-title">
            <p>%s</p>
        </div>
        <hr>

        <div class="type-author" >
            <p class="alignleft">%s</p>
            <p class="alignright">%s</p>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>', $utility["id"], $utility["source"], $utility["title"], $utility["type"], $creator);
}

?>