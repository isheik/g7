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

                    <form name="contact" method="post" id="contact" action="http://webdevbasics.net/scripts/demo.php"
                        onsubmit="return warnContact('firstname', 'lastname', 'email', 'remail', 'comment',
                            'firstname_feedback', 'lastname_feedback', 'email_feedback', 'remail_feedback', 
                                'comment_feedback')">
                        <h2>Contact</h2>

                        <div class="form_block_sm">
                            <label for="firstname">First Name*</label><br>
                            <input type="text" name="firstname" id="firstname" placeholder="First Name" size="26"
                                oninput="warnRealName('firstname', 'firstname_feedback')">
                            <label class="error" id="firstname_feedback"></label>
                        </div>

                        <div class="form_block_sm">
                            <label for="lastname">Last Name</label><br>
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name" size="26"
                                oninput="warnRealName('lastname', 'lastname_feedback')">
                            <label class="error" id="lastname_feedback"></label>
                        </div><br class="clear">

                        <div class="form_block_sm">
                            <label for="email">Email Address*</label><br>
                            <input type="text" name="email" id="email" placeholder="Email Address" size="26"
                                oninput="warnEmail('email', 'email_feedback')">
                            <label class="error" id="email_feedback"></label>
                        </div>

                        <div class="form_block_sm">
                            <label for="remail">Confirm Email Address*</label><br>
                            <input type="text" name="remail" id="remail" placeholder="Email Address" size="26"
                                oninput="warnREmail('email', 'remail', 'remail_feedback')">
                            <label class="error" id="remail_feedback"></label>
                        </div>

                        <div class="form_block_lg">
                            <label for="comment">Message*</label>
                            <textarea name="comment" id="comment" rows="5" cols="82" placeholder="Type here your message..."
                                oninput="warnMessage('comment', 'comment_feedback')"></textarea><br>
                            <label class="error" id="comment_feedback"></label>
                        </div>
                        <button id="contact_submit_button" type="submit" form="contact" value="Submit">Submit</button>
                    </form>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
