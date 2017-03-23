<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="style/base.css">
        <link rel="stylesheet" type="text/css" href="style/contact.css">
        <script src="script/warn-functions.js"></script>
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article>

                    <form name="contact" method="post" id="contact" action="http://webdevbasics.net/scripts/demo.php">
                        <h2>Contact</h2>

                        <div class="form_block_sm">
                            <label for="firstname">First Name*</label><br>
                            <input type="text" name="firstname" id="firstname" placeholder="First Name" size="26"
                                oninput="warnRealName('firstname', 'firstname_feedback')">
                            <label class="error" id="firstname_feedback"></label>
                        </div>

                        <div class="form_block_sm">
                            <label for="lastname">Last Name</label><br>
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name" size="26">
                        </div>

                        <div class="form_block_sm">
                            <label for="email">Email Address*</label><br>
                            <input type="text" name="email" id="email" placeholder="Email Address" size="26">
                        </div>

                        <div class="form_block_sm">
                            <label for="remail">Confirm Email Address*</label><br>
                            <input type="text" name="remail" id="remail" placeholder="Email Address" size="26">
                        </div>

                        <div class="form_block_lg">
                            <label for="comment">Message*</label>
                            <textarea name="comment" id="comment" rows="5" cols="82" placeholder="Type here your message..."></textarea><br>
                            <button type="submit" form="contact" value="Submit">Submit</button>
                        </div>

                    </form>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
