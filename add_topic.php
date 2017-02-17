<?php
    // Temporarily using sample database. Need to change config.php later.
    // Start session
    session_start();

    // Load config file if it was not.
    require_once('config.php'); 

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)) or die("cannot connect");
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE'))) or die("cannot select DB");
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Windows 10 Shortcuts</title>
        <link rel="stylesheet" type="text/css" href="style/base.css">
        <script src="script.js"></script>
    </head>

    <body>
        <header class="page_row">
            <div class="centered">
                <a href="index.html"><img src="images/logo_header.png" id="header_logo" alt="logo" width="120" height="108"></a>
                <h1 id="header_title">Windows 10 Shortcuts</h1>
                <div id="auth">
                    <a href="account.html" class="auth_button">Sign Up</a>
                    <a href="account.html" class="auth_button">Log In</a>
                </div>
            </div>
        </header>

        <nav id="top_nav" class="site_nav page_row">
            <div class="centered">
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./lessons-main.html">Lessons</a></li>
                    <li><a href="./catalog.html">Catalog</a></li>
                    <li><a href="./forum.php">Forum</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                    <li><a href="./about.html">About</a></li>
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
                                <td><textarea id="forum_post_text" name="input"></textarea><div id="forum_response_post_button"><button type="submit" name="post">Post</button></div></td>
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
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./lessons-main.html">Lessons</a></li>
                        <li><a href="./catalog.html">Catalog</a></li>
                        <li><a href="./forum.php">Forum</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./sitemap.html">Sitemap</a></li>
                    </ul>
                </nav>
                <div id="logo_copyright">
                    <img src="images/logo_footer.png" id="footer_logo" alt="logo" width="56" height="50">
                    <p id="copyright">&copy; Copyright 2017.<br>All Rights Reserved.</p>
                </div>
            </div>
        </footer>

    </body>
</html>
