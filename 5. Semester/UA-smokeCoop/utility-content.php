<?php
$map_id = $_GET['map_id'];
$map_sql = "SELECT name FROM maps WHERE id=$map_id";
$map_result = mysqli_fetch_assoc(mysqli_query($db, $map_sql));
$map_name = $map_result['name'];
?>


<div id="utility-content">

    <div class="wrapper">
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
                        <div class="modal-body-left">
                            <!-- TODO: Add content to left side of modal here (getPos etc.) -->

                            <h1>Name of smoke</h1>
                            <span>map_name</span>

                            <h2>Smoke technique</h2>
                            <span class="tag jumpthrow">Jumpthrow</span>
                            <span class="tag crouched">Crouched</span>

                            <h2>Teleport coordinates</h2>
                            <input id="setposInput" onclick="copyClipboard()" readonly
                                   type="text" value="setpos 1239128312, 123123123812, 38523821">
                            <button onclick="copyClipboard()"><i class="fa fa-copy"></i></button>

                            <h2>Creator comment</h2>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl nisi, vestibulum nec turpis vitae, congue facilisis eros. Curabitur vel lectus lobortis, molestie erat non, viverra sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur imperdiet consectetur tellus in elementum. Maecenas nec nibh nec tellus gravida ultricies. Curabitur tincidunt mauris ac vestibulum varius.</span>



                        </div>

                        <div class="modal-body-right">

                        </div>
                        <!-- Modal content (modal-data.php) -->
                    </div>
                </div>

            </div>

            <!-- Script that requires to be loaded later -->
            <script src="js/modal.js" type="text/javascript"></script>
            <script src="js/copyClipboard.js" type="text/javascript"></script>
        </div>
    </div>
</div>