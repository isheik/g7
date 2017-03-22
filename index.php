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
                <article>
                    <div class="slide_show_images">
                        <img class="mySlides" src="images/logo1.jpg" width="100%" height="100%" alt="d">
                        <img class="mySlides" src="images/logo2.jpg" width="100%" height="100%" alt="d">
                        <img class="mySlides" src="images/logo3.jpg" width="100%" height="100%" alt="d">

                        <div class="button_allignment" style="width:100%">
                            <div class="left_arrow" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="right_arrow" onclick="plusDivs(1)">&#10095;</div>
                           
                            <span class="button_configuration hover-white" onclick="currentDiv(1)"></span>
                            <span class="button_configuration hover-white" onclick="currentDiv(2)"></span>
                            <span class="button_configuration hover-white" onclick="currentDiv(3)"></span>
                        </div>
                    </div>
                
                    <div>
                        <h2>Do not wait for a perfect moment. Take the moment and make it perfect.</h2>
                        <p class="p">Lorem ipsum dolor sit amet, Suspendisse dignissim Lorem ipsum dolor sit amet, conLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim Lorem ipsum dolor sit amet, con</p>
                    </div>
                    
                    
                    <div class="featured-content">
                        <img src="images/abcd.jpg" height="200" width="400" alt="p">
                        <h3>About us</h3>
                        <p>Find out about our organization, mission, our methods, and the results of our decades of advocacy.</p>
                    </div>
                    
                    <div class="featured-content">
                        <img src="images/abcd.jpg" height="200" width="400" alt="p">
                        <h3>Take action</h3>
                        <p>Ready to take the first step? You can start with beginner level and become a expert</p>
                    </div>
                </article>
            </div>   
        </main>

<?php require_once("./php_include/site_footer.php") ?>

        <script src="script/home.js"></script>

    </body>
</html>
