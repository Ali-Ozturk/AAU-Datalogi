<!-- Meta start -->
<?php include('web/meta.php'); ?>
<!-- Meta end -->

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
            <p style="text-shadow: 0px 3px 3px black;">DE_MIRAGE</p>
        </div>
    </div>
</div>

<div id="chooseStrategy" class="fullPage">
    <div class="wrapper" style="width: 80%;margin-bottom: 100px;">

        <div class="strategyList">
            <div class="header" style="">
                <h1 style="display: inline-block">
                    Choose a strategy
                </h1>
                <label style="padding: 25px;line-height: 38px;">Sort by:
                    <label class="sortItems" style="margin-left: 15px;">
                        <bold>Mid</bold>
                        <bold>A</bold>
                        <bold>B</bold>
                    </label>
                </label>
            </div>

            <?php include('strategyCards.php'); ?>

        </div>
    </div>
</div>
<!-- Content end -->

<?php include('web/footer.php'); ?>