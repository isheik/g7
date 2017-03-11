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
        <link rel="stylesheet" type="text/css" href="style/add_topic.css">
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

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

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
