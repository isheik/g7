<?php
    // Temporarily using sample database. Need to change config.php later.
    // Start session
    session_start();

    // Load config file if it was not.
    require_once('config.php'); 

    // If not logged in, redirects the user to the log-in page
    if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
        header("location:" . $add_to_path . " account.php");
        exit();
    }

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
        <script src="script/warn-functions.js"></script>
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article id="forum_add_topic">
                    <h2>Forum</h2>
                    <p><a href="./forum.php">Return to forum top page</a></p>
                    <form method="post" action="add_topic.php"
                        onsubmit="return warnPost('forum_post_title', 'forum_post_text', 
                        'forum_post_title_feedback', 'forum_post_text_feedback')">
                        <table id="forum_post_table" class="layout_table">

                            <tr>
                                <th><label for="forum_post_title">Title:</label></th>
                                <td><input required maxlength="128" type="text" id="forum_post_title" name="post_title"
                                    oninput="warnTitle('forum_post_title','forum_post_title_feedback')">
                                    <label class="error" id="forum_post_title_feedback"></label>
                                </td>
                            </tr>

                            <tr id="forum_post_form">
                                <th><label for="forum_post_text">Content:</label></th>
                                <td><textarea required id="forum_post_text" name="post_contents"
                                    oninput="warnContent('forum_post_text','forum_post_text_feedback')"></textarea>
                                    <label class="error" id="forum_post_text_feedback"></label>
                                    <button type="submit" name="post">Post</button>
                                </td>
                            </tr>

                        </table>
                    </form>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
