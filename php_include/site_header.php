<?php
    require_once("rel_link.php");
    include ($add_to_path . 'functions.php');
    require_once($add_to_path . 'config.php');
    // require_once($add_to_path . 'auth.php');
    session_start();

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    $tbl_name="topic"; // Table name

?>
        <header class="page_row">
            <div class="centered">
                <a href="<?php echo $add_to_path ?>index.php"><img src="<?php echo $add_to_path ?>images/logo_header.png" id="header_logo" alt="logo" width="120" height="108"></a>
                <h1 id="header_title">Windows 10 Shortcuts</h1>
                <div id="auth">
                    <?php 
                    if (isLoggedIn()) {
                        echo "<span>Welcome, " . $_SESSION['SESS_FIRST_NAME'] . " " . $_SESSION['SESS_LAST_NAME'] . "</span>";
                        echo '<a href="' . $add_to_path . 'logout.php" class="auth_button">Log Out</a>';
                    } else {
                        echo '<a href="' . $add_to_path . 'account.php" class="auth_button">Sign Up/Log In</a>';
                    }
                    ?>
                </div>
            </div>
        </header>

        <nav id="top_nav" class="site_nav page_row">
            <div class="centered">
                <ul>
                    <li><a href="<?php echo $add_to_path ?>index.php">Home</a></li>
                    <li><a href="<?php echo $add_to_path ?>lessons-main.php">Lessons</a></li>
                    <li><a href="<?php echo $add_to_path ?>catalog.php">Catalog</a></li>
                    <li><a href="<?php echo $add_to_path ?>forum.php">Forum</a></li>
                    <li><a href="<?php echo $add_to_path ?>contact.php">Contact</a></li>
                    <li><a href="<?php echo $add_to_path ?>about.php">About</a></li>
                </ul>
            </div>
        </nav>
