<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="style/base.css">
        <link rel="stylesheet" type="text/css" href="style/contact.css">
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article>
                    <h2>Contact</h2>

                    <form name="contact" method="post" id="contact" action="http://webdevbasics.net/scripts/demo.php">

                        <label for="firstname" class="form_block_sm">First Name*<br>
                        <input type="text" name="firstname" id="firstname"
                               placeholder="First Name" size="26"></label>

                        <label for="lastname" class="form_block_sm">Last Name<br>
                        <input type="text" name="lastname" id="lastname"
                               placeholder="Last Name" size="26"></label>

                        <label for="email" class="form_block_sm">Email Address*<br>
                        <input type="text" name="email" id="email"
                               placeholder="Email Address" size="26"></label>

                        <label for="remail" class="form_block_sm">Confirm Email Address*<br>
                        <input type="text" name="remail" id="remail"
                               placeholder="Email Address" size="26"></label>

                        <label for="comment" class="form_block_lg">Message*
                        <textarea name="comment" id="comment" style="font-size:12pt; font-family:arial"
                               rows="5" cols="82" placeholder="Type here your message..."></textarea></label><br>
                        <button type="submit" form="contact" value="Submit">Submit</button>

                    </form>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
