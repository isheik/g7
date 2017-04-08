<?php
    // Temporarily using sample database. Need to change config.php later.
    // Start session
    session_start();

    // Load config file if it was not.
    require_once('config.php');

    // If not logged in, redirects the user to the log-in page
    // if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    //     header("location:" . $add_to_path . " account.php");
    //     exit();
    // }

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)) or die("cannot connect");
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE'))) or die("cannot select DB");

    // Temporarily using sample database. Need to change table name later.
    $tbl_name='topic';

    // Inquiry forum post data
    $sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id ORDER BY id DESC";
    $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Windows 10 Shortcuts</title>
        <link rel="stylesheet" type="text/css" href="style/base.css">
        <link rel="stylesheet" type="text/css" href="style/forum.css">
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article id="forum_topics">
                    <h2>Forum</h2>
                    <p><?php
                        if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
                            echo 'Please <a href="./account.php">log in / register</a> to post.';
                        } else {
                            echo '<a href="./post.php">Create a new topic</a>';
                        }
                    ?></p>
                    <table>
                        <tr class="forum_header_row">
                            <th class="forum_post_id_header"><strong>AUTHOR</strong></th>
                            <th class="forum_topic_header"><strong>TOPIC</strong></th>
                            <th class="forum_post_date_header"><strong>POSTED DATE</strong></th>
                        </tr>

                        <!-- enumrate topics from SQL result -->
                        <?php
                            while($rows=mysqli_fetch_array($result)){
                        ?>
                        <tr class="forum_contents_row">
                            <td class="forum_post_id_cell"><?php echo $rows['login']; ?></td>
                            <td class="forum_topic_cell"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><br><p class="forum_preview"><?php echo substr($rows['detail'],0,256); ?></p></td>
                            <td class="forum_post_date_cell">
                                <?php
                                    echo DateTime::createFromFormat('d/m/y H:i:s', $rows['datetime'])->format('M d, Y G:i:s');
                                ?>
                            </td>
                        <?php
                            }
                            ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
                        ?>
                        </tr>
                    </table>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
