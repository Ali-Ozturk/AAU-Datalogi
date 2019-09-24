<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tactical admin panel</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="wrapper">
    <div class="logo">
        <img src="../images/logo2.png">
        <label>TACTICAL</label>
        <label class="l-subtitle">ADMIN CONTROL PANEL</label>
    </div>

    <div class="content">
        <div class="m-header">
            <span class="header">Select or add a map</span>
        </div>

        <div class="maps-list" style="padding-bottom: 50px;">
            <div class="map">
                <div class="m-container">
                    <a href="map-control.php?name=de_mirage">
                        <img src="../images/mirage.jpg">
                        <span class="centered">de_mirage</span>
                    </a>
                </div>
            </div>

            <div class="map">
                <div class="m-container">
                    <a href="#">
                        <img src="../images/inferno.jpg">
                        <span class="centered">de_inferno</span>
                    </a>
                </div>
            </div>

            <!-- New map button -->
            <div class="map" style="padding: 0;">
                <div class="m-container" style="width: 50px; height: 100px;">
                    <a href="#">
                        <span class="centered fas fa-plus m-new" style="padding: 8px"></span>
                    </a>
                </div>
            </div>

        </div>

        <div class="add-map" style="display: none;">
            <span class="header">Add a new map</span>

            <form>
                <input type="textfield" id="" name="" placeholder=""><br>
                <span>Thumbnail: </span>
                <input type="file">

            </form>


        </div>
    </div>
</div>

</body>
</html>