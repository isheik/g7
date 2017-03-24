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
        <link rel="stylesheet" type="text/css" href="style/base.css">
        <link rel="stylesheet" type="text/css" href="style/view_topic.css">
        <script src="script/warn-functions.js"></script>
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article id="forum_post">
                    <div id="forum_view">
                        <h2>Forum</h2>
                        <p><a href="./forum.php">Return to forum top page</a></p>
                        <table id="forum_view_table" class="layout_table">
                            <tr>
                                <th class=" forum_view_header"><label>Author:</label></th>
                                <td class="forum_view_body">testuser</td>
                                <th class=" forum_view_header"><label>Date:</label></th>
                                <td class="forum_view_body"><?php echo $rows['datetime']; ?></td>
                            </tr>
                            <tr>
                                <th class="forum_view_header"><label>Title:</label></th>
                                <td colspan="3" class="forum_view_body"><strong><?php echo $rows['topic']; ?></strong></td>
                            </tr>
                            <tr>
                                <th class="forum_view_header"><label>Content:</label></th>
                                <td colspan="3" class="forum_view_body"><?php echo $rows['detail']; ?></td>
                            </tr>
                        </table>
                        <table class="layout_table">
                            <tr id="forum_response_form">
                                <th class="forum_view_header" id="forum_response_header"><label for="forum_response_text">Response:</label></th>
                                <td colspan="3">
                                    <form method="post" action="http://webdevbasics.net/scripts/demo.php" 
                                        onsubmit="return warnViewTopic('forum_response_text', 'forum_response_feedback')">
                                        <textarea required id="forum_response_text" name="input" 
                                            oninput="warnResponse('forum_response_text', 'forum_response_feedback')"></textarea>
                                        <label class="error" id="forum_response_feedback"></label>
                                        <button type="submit" name="post">Post</button>
                                    </form>
                                </td>
                            </tr>
                                

                        </table>
                    </div>
                    <div id="forum_comment">
                        <h3>Comments</h3>
                        <!-- enumerate comments related to the post -->
                        <?php
                            $tbl_name2="response"; // Switch to table "response"

                            $sql2="SELECT * FROM $tbl_name2 WHERE topic_id='$id' ORDER BY id DESC";
                            $result2=mysqli_query($GLOBALS["___mysqli_ston"], $sql2);

                            while($rows=mysqli_fetch_array($result2)){
                        ?>
                        <table id="forum_comment_table" class="layout_table">
                            <tr>
                                <th class="forum_comment_header"><label>Commentator:</label></th>
                                <td class="forum_comment_body"><?php echo $rows['response']; ?></td>
                            </tr>
                        </table>
                       <?php
                            }
                            ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
                        ?>
                    </div>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
