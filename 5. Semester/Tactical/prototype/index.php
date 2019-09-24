<?php include('web/meta.php'); ?>

<!-- Header start -->
<header>

</header>
<!-- Header end -->

<!-- Content start -->
<div id="main" class="fullPage">
    <div class="wrapper">

        <div class="logo">
            <a href="index" style="text-decoration: none; color: white;">
                <img src="images/logo2.png">
                <p>TACTICAL</p>
            </a>
        </div>

        <div class="content">
            <p>
                CREATE<br>
                AND MANAGE<br>
                TACTICS IN CS:GO
            </p>
        </div>

        <div class="hSeparator"></div>

        <div class="buttons">
            <a href="#chooseMap" class="ghost-button">TACTICS</a>
            <div class="vSeparator"></div>
            <a href="smokes" class="ghost-button">SMOKES</a>
            <div class="vSeparator"></div>
            <a href="#contact" class="ghost-button">CONTACT</a>
        </div>
    </div>
</div>

<div id="chooseMap" class="fullPage">
    <div class="wrapper" style="width: 80%;">

        <div class="mapList">
            <h1>
                Choose desired map
            </h1>

            <?php include('mapCards.php'); ?>

        </div>
    </div>
</div>

<div id="contact" class="fullPage">
    <div class="wrapper">

        <div class="contactForm">
            <h1 style="padding-bottom: 0px;margin-bottom: 0px;">
                Get in <span style="color: #00bdbb;">touch</span> with us
            </h1>
            <p style="padding-bottom: 20px; color: #c4c4c4">If you have any questions feel free to contact us</p>

            <div class="fullSeparator">
                <span class="divider"></span>
                <img src="images/triangle.png" style="height: 10px;">
                <span class="divider"></span>
            </div>

            <div class="container">
                <form action="#">
                    <input class="inputField" style="float: left;" type="text" id="fname" name="fullname"
                           placeholder="Name">

                    <input class="inputField" style="float: right;" type="email" id="email" name="email"
                           placeholder="Email">

                    <input class="inputField" style="width: 100%;" type="text" id="subject" name="subject"
                           placeholder="Subject">

                    <textarea class="inputField" style="width: 100%; height: 60px;" id="message" name="message"
                              placeholder="Message"></textarea>

                    <div class="submit" style="text-align: center;">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- Content end -->

<?php include('web/footer.php'); ?>