<!doctype html>

<html lang="en">
<?php include('includes/connect.php'); ?>
<head>
    <meta charset="utf-8">

    <title>Testing page</title>
    <link rel="stylesheet" href="css/stylesheet-test.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">

    <!-- w3 Styling -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="js/scrolling.js"></script>

</head>
<body>

<!-- HEADER -->
<div id="header" class="fullPage">
    <div class="wrapper">

        <div class="logo">
            <a href="index.php" style="text-decoration: none; color: white;">
                <img src="images/logo2.png">
                <p>SMOKEHUB</p>
            </a>
        </div>

        <div class="content">
            <p>
                SUBMIT<br>
                AND MANAGE<br>
                UTILITY IN CS:GO
            </p>
        </div>

        <div class="hSeparator"></div>

    </div>
</div>


<div id="chooseMap" style="height: 500px" class="fullPage">
    <div class="wrapper" style="width: 80%;">

        <div class="mapList" style="text-align: center;">
            <h1>
                Choose desired map
            </h1>

            <?php
            $mapsSQL = "SELECT * FROM maps ORDER BY id";
            $mapList = mysqli_fetch_all(mysqli_query($db, $mapsSQL), MYSQLI_ASSOC);

            foreach ($mapList as $map){
                $map_id = $map['id'];
                $map_name = $map['name'];
                $map_origin = $map['origin'];
                $map_source = $map['source'];

                $totalSQL = "SELECT COUNT(*) as total from utilities where map_id=$map_id";
                $result = mysqli_query($db, $totalSQL);
                $row = mysqli_fetch_assoc($result);

                $map_total = $row['total'];


                printf('            <div class="cardsWrapper">

                <div id="map-card">
                    <div id="map-details">
                        <div class="shadow"></div>

                        <div class="bg-image"
                             style="background: url(\'images/%s\'") center;background-size: cover;"></div>

                        <div class="image_overlay"></div>
                        <a href="utility.php?map_id=%d">
                            <div id="view_details">View more</div>
                        </a>

                        <div class="stats">
                            <div class="stats-container">
                                <span class="map_name">%s</span>
                                <p>%s</p>

                                <div class="map-info">
                                    <strong>Map details</strong>
                                    <span>%d Smokes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>', $map_source, $map_id, $map_name, $map_origin, $map_total);
            }
            ?>

        </div>
    </div>
</div>

<script src="js/card-animations.js"></script>


</body>
</html>