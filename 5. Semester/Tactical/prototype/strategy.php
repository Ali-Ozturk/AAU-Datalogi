<?php include('web/meta.php'); ?>

    <!-- Header start -->
    <header>

    </header>
    <!-- Header end -->

    <!-- Content start -->
    <div id="mainMap" class="fullPage">
        <div class="wrapper">

            <div class="logo">
                <a href="index" style="text-decoration: none; color: white;">
                    <img src="images/logo2.png">
                    <p>TACTICAL</p>
                </a>
            </div>

            <div class="content" style="text-align: center;">
                <p style="text-shadow: 0px 3px 3px black;">B Split (T-Side)</p>
            </div>
        </div>
    </div>

    <div id="chooseStrategy" class="fullPage">
    <div class="wrapper" style="width: 80%;">

        <div class="header" style="text-align: center">
            <h1 style="display: inline-block">
                Strategy overview
            </h1>
        </div>

        <div class="s-container">
            <div class="s-overview">

                <div class="s-video">
                    <a href="#" onclick="document.getElementById('modal-content').style.display='block'">
                        <img class="strat-img" src="videos/strats/thumbnails/mirage_bsplit.png">
                        <img class="overlay-img" src="images/play-btn.png">
                    </a>
                </div>

            </div>

            <div class="s-details" style="">
                <h1 style="padding: 10px 10px 0px;margin: auto;">
                    B Split (T-Side)
                    <h4 style="font-weight: 400;padding-left: 10px;margin: auto; color: #c4c4c4;">de_mirage
                    </h4>
                </h1>

                <div class="s-details-container" style="padding: 10px;">
                    <!-- <p> = Header
                         <label> = Text to header -->

                    <p class="thick medium-size">Required utility:</p>
                    <span class="regular c-gray">2 Smokes 1 Flashbang</span>

                    <p class="thick medium-size" style="margin-bottom: 5px;">Prefered execution round:</p>
                    <span class="regular c-gray"><label class="group g-blue">Pistol round</label> <label class="group g-orange">Buy round</label> <label class="group g-red">Whenever</label></span>

                    <p class="thick medium-size">Creator comments:</p>
                    <span class="regular c-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nisl
                        nisi, vestibulum nec turpis vitae, congue facilisis eros. Curabitur vel lectus lobortis,
                        molestie erat non, viverra sapien. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia Curae; Curabitur imperdiet consectetur tellus in elementum.
                        Maecenas nec nibh nec tellus gravida ultricies. Curabitur tincidunt mauris ac vestibulum
                        varius.
                    </span>

                </div>

            </div>
        </div>

        <div class="requiredSmokes">
            <h1 style="">Required smokes</h1>

            <?php include('smokesCards.php'); ?>
        </div>
    </div>
    <!-- Content end -->

    <!-- Hidden content start -->
    <?php include('modal.php'); ?>
    <!-- Hidden content end -->

<?php include('web/footer.php'); ?>