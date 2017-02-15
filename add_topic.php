<?php
    // Temporarily using sample database. Need to change config.php later.
    // Start session
    session_start();

    // Load config file if it was not.
    require_once('config.php'); 

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)) or die("cannot connect");
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE'))) or die("cannot select DB");

    // Temporarily using sample database. Need to change table name later.
    $tbl_name='topic';

    // get value of id that sent from address bar
    $id=$_GET['id'];

    // Inquiry post data
    $sql="SELECT * FROM $tbl_name WHERE id='$id'";
    $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

    $rows=mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Windows 10 Shortcuts</title>
        <link rel="stylesheet" type="text/css" href="base.css">
        <script src="script.js"></script>
    </head>

    <body>
        <header class="page_row">
            <div class="centered">
                <img id="header_logo" alt="logo" width="130" height="50">
                <div id="auth">
                    <a href="#" class="auth_button">Sign Up</a>
                    <a href="#" class="auth_button">Log In</a>
                </div>
            </div>
        </header>

        <nav id="top_nav" class="site_nav page_row">
            <div class="centered">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Lessons</a></li>
                    <li><a href="#">Catalog</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </nav>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article id="forum_add_topic">
                    <h2>Forum</h2>
                    <p><a href="./forum.php">Return to forum top page</a></p>
                    <form method="post" action="http://webdevbasics.net/scripts/demo.php">
                        <table id="forum_post_table">
                            <tr>
                                <th class="forum_post_header">Title</th>
                                <td><input type="text" id="forum_post_title" name="title"></td>
                            </tr>
                            <tr id="forum_post_form">
                                <th class="forum_post_header" id="forum_response_header">Response</th>
                                <td><textarea id="forum_post_text" name="input"></textarea><div id="forum_response_post_button"><button type="submit" name="post">Post</button></td>
                            </tr>
                        </table>
                    </form>
                </article>
            </div>
        </main>

        <footer class="page_row">
            <div class="centered">
                <nav id="bottom_nav" class="site_nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Lessons</a></li>
                        <li><a href="#">Catalog</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </nav>
                <div id="logo_copyright">
                    <img id="footer_logo" alt="logo" width="65" height="25">
                    <p>&copy; Copyright 2017. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

    </body>
</html>
