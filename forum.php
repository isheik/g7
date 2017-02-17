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

    // Inquiry forum post data
    $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
    $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
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
                <article id="forum_topics">
                    <h2>Forum</h2>
                    <p><a href="./add_topic.php">Create a new topic</a></p>
                    <table>
                        <tr class="forum_header_row">
                            <th id="forum_post_id_header"><strong>Post #</strong></th>
                            <th id="forum_topic_header"><strong>TOPIC</strong></th>
                            <th id="forum_post_date_header"><strong>POSTED DATE</strong></th>
                        </tr>

                        <!-- enumrate topics from SQL result -->
                        <?php 
                            while($rows=mysqli_fetch_array($result)){ 
                        ?>
                        <tr class="forum_contents_row">
                            <td id="forum_post_id_cell"><?php echo $rows['id']; ?></td>
                            <td id="forum_topic_cell"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a></td>
                            <td id="forum_post_date_cell"><?php echo $rows['datetime']; ?></td>
                        <?php
                            }
                            ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
                        ?>
                        </tr>
                    </table>
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
