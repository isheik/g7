<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Windows 10 Shortcuts</title>
        <link rel="stylesheet" type="text/css" href="style/index.css">
        <link rel="stylesheet" type="text/css" href="style/base.css">
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

       <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article class="clearfix">
                    <div class="slide_show_images">
                        <img class="mySlides" src="images/logo1.jpg" width="100%" height="auto" alt="pic1">
                        <img class="mySlides" src="images/logo2.jpg" width="100%" height="auto" alt="pic2">
                        <img class="mySlides" src="images/logo3.jpg" width="100%" height="auto" alt="pic3">

                        <div class="button_alignment" style="width:100%">
                            <div class="left_arrow" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="right_arrow" onclick="plusDivs(1)">&#10095;</div>

                            <span class="button_configuration hover-white" onclick="currentDiv(1)"></span>
                            <span class="button_configuration hover-white" onclick="currentDiv(2)"></span>
                            <span class="button_configuration hover-white" onclick="currentDiv(3)"></span>
                        </div>
                    </div>

                    <section class="highlight">
                        <p>Welcome to our tutorial on Windows 10 Shortcuts. Our program is designed to turn new users into masters, building the skills for both top-tier workflow in professional environments, and more enjoyment in day-to-day use.</p>
                    </section>

                    <div class="featured_content">
                        <img src="images/smallImg2.jpg" height="200" width="400" alt="p">
                        <h3>Lessons</h3>
                        <p>View our lessons to get started. From beginner to advanced, we've got you covered.</p>
                        <div><a href="lessons-main.php">Learn more<img src="images/right.png" height="" width="" alt="arrow"></a></div>
                    </div>

                    <div class="featured_content">
                        <img src="images/abcd.jpg" height="200" width="400" alt="p">
                        <h3>About us</h3>
                        <p>Five BCIT students sharing knowledge and trying to make the world a better place.</p>
                        <div><a href="about.php">Learn more<img src="images/right.png" height="" width="" alt="arrow"></a></div>
                    </div>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

        <script src="script/home.js"></script>

    </body>
</html>
