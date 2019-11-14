<?php
include('includes/connect.php');
$id = $_GET['id'];

$utilitySQL = "SELECT * FROM utilities WHERE id=$id";
$makeQuery = mysqli_query($db, $utilitySQL);
$utilityList = mysqli_fetch_all($makeQuery, MYSQLI_ASSOC);


foreach ($utilityList as $row):
    printf('<div class="modal-body-left"> 
                            <!-- TODO: Add content to left side of modal here (getPos etc.) -->

                            <h1>%s</h1>
                            <span>Created %s</span>

                            <h2>Smoke technique</h2>
                            <span class="tag %s">%s</span>

                            <h2>Teleport coordinates</h2>
                            <input id="setposInput" onclick="copyClipboard()" readonly
                                   type="text" value="%s">
                            <button onclick="copyClipboard()"><i class="fa fa-copy"></i></button>

                            <h2>Creator comment</h2>
                            <span>%s</span>



                        </div>

                        <div class="modal-body-right">
                        <video autoplay controls>
    <source src="media/%s" type="video/mp4">
    Your browser does not support videos. 
</video>
                        </div>', $row['title'], $row['created_at'], $row['execution'], $row['execution'], $row['setpos'], $row['comment'], $row['source']);
endforeach;

mysqli_close($db);
?>