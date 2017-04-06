<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Windows 10 Shortcuts</title>
        <link rel="stylesheet" type="text/css" href="style/base.css">
        <link rel="stylesheet" type="text/css" href="style/account.css">
        <script src="script/warn-functions.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- plugin source: https://github.com/M1Sh0u/pStrength -->
        <script src="script/pStrength.jquery.js"></script>
        <script>
            $.noConflict();
            jQuery(document).ready(function($) {
                $('#signup_password').pStrength({
                    'changeBackground': false,
                    'onPasswordStrengthChanged': function(passwordStrength, strengthPercentage) {
                        if ($(this).val())
                            $.fn.pStrength('changeBackground', this, passwordStrength);
                        else
                            $.fn.pStrength('resetStyle', this);

                        var message = ""

                        if (strengthPercentage <= 0)
                            message = "";
                        else if (strengthPercentage < 20)
                            message = "Very weak";
                        else if (strengthPercentage < 40)
                            message = "Weak";
                        else if (strengthPercentage < 60)
                            message = "Medium";
                        else if (strengthPercentage < 80)
                            message = "Strong";
                        else
                            message = "Very strong";

                        $('#password_strength').html(message);
                        // $('#password_strength').html('Your password strength is ' + strengthPercentage + '%');
                    }
                });
            });
        </script>
    </head>

    <body>

<?php require_once("./php_include/site_header.php") ?>

        <main class="page_row">
            <div id="content_wrapper" class="centered">
                <article id="account">
                    <div class="account_table">
                        <h2>Login</h2>
                        <form method="post" action="<?php echo $add_to_path ?>login.php"
                            onsubmit="return warnLogin('login_username', 'login_password',
                             'login_username_feedback', 'login_password_feedback')">
                            <table class="layout_table" id="account_login_table">
                                <tr>
                                    <th><label for="login_username">Username:</label></th>
                                    <td><input type="text" id="login_username" name="login_username"
                                    oninput="warnUsername('login_username','login_username_feedback')"
                                    maxlength="128" required>
                                    <label class="error" id="login_username_feedback"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="login_password">Password:</label></th>
                                    <td><input type="password" id="login_password" name="login_password"
                                    oninput="warnPassword('login_password','login_password_feedback')"
                                    maxlength="128" required>
                                    <label class="error" id="login_password_feedback">
                                        <?php
                                            if ($_SESSION['USER_NOT_FOUND']) {
                                                echo "Invalid Username/Password.";
                                                $_SESSION['USER_NOT_FOUND'] = false;
                                            }
                                        ?>
                                    </label>
                                    <button type="submit" name="login">Login</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <div class="account_table">
                        <h2>Sign up</h2>
                        <form method="post" action="register.php"
                            onsubmit="return warnRegistration('signup_firstname', 'signup_lastname', 'signup_username',
                             'signup_email', 'signup_remail', 'signup_password', 'signup_repassword',
                             'signup_firstname_feedback', 'signup_lastname_feedback', 'signup_username_feedback',
                             'signup_email_feedback', 'signup_remail_feedback', 'signup_password_feedback',
                             'signup_repassword_feedback')">
                            <table class="layout_table" id="sign_up">
                                <tr>
                                    <th><label for="signup_firstname">First Name:</label></th>
                                    <td><input type="text" id="signup_firstname" name="signup_firstname"
                                    oninput="warnRealName('signup_firstname','signup_firstname_feedback')"
                                    maxlength="128">
                                    <label class="error" id="signup_firstname_feedback"></label></td>
                                </tr>
                                <tr>
                                    <th><label for="signup_lastname">Last Name:</label></th>
                                    <td><input type="text" id="signup_lastname" name="signup_lastname"
                                    oninput="warnRealName('signup_lastname','signup_lastname_feedback')"
                                    maxlength="128">
                                    <label class="error" id="signup_lastname_feedback"></label></td>
                                </tr>
                                <tr>
                                    <th><label for="signup_username"><span class="required">*</span>User Name:</label></th>
                                    <td><input type="text" id="signup_username" name="signup_username"
                                    oninput="warnUsername('signup_username','signup_username_feedback')"
                                    maxlength="128" required>
                                    <label class="error" id="signup_username_feedback">
                                    <?php
                                            if ($_SESSION['DUPLICATE_USERNAME']) {
                                                echo "Username already taken.";
                                                $_SESSION['DUPLICATE_USERNAME'] = false;
                                            }
                                    ?>
                                    </label></td>
                                </tr>
                                <tr>
                                    <th><label for="signup_email"><span class="required">*</span>Email:</label></th>
                                    <td><input type="email" id="signup_email"
                                    name="signup_email" placeholder="example@abc.com"
                                    oninput="warnEmail('signup_email','signup_email_feedback'); warnREmail('signup_email','signup_remail','signup_remail_feedback');"
                                    maxlength="128" required>
                                    <label class="error" id="signup_email_feedback"></label></td>
                                </tr>
                                <tr>
                                    <th><label for="signup_remail"><span class="required">*</span>Retype Email:</label></th>
                                    <td><input type="email" id="signup_remail"
                                    name="signup_remail" placeholder="example@abc.com"
                                    oninput="warnREmail('signup_email','signup_remail','signup_remail_feedback')"
                                    maxlength="128" required>
                                    <label class="error" id="signup_remail_feedback"></label></td>
                                </tr>
                                <tr>
                                    <th><label for="signup_password"><span class="required">*</span>Password:</label></th>
                                    <td><input type="password" id="signup_password" name="signup_password"
                                    oninput="warnPassword('signup_password','signup_password_feedback'); warnRePassword('signup_password','signup_repassword','signup_repassword_feedback');"
                                    maxlength="128" required>
                                    <label id="password_strength"></label>
                                    <label class="error" id="signup_password_feedback"></label></td>
                                </tr>
                                <tr>
                                    <th><label for="signup_repassword"><span class="required">*</span>Retype Password:</label></th>
                                    <td><input type="password" id="signup_repassword" name="signup_repassword"
                                    oninput="warnRePassword('signup_password','signup_repassword','signup_repassword_feedback')"
                                    maxlength="128" required>
                                    <label class="error" id="signup_repassword_feedback"></label>
                                    <button type="submit" name="sign_up">Sign up</button></td>
                                </tr>
                            </table>
                       </form>
                    </div>
                </article>
            </div>
        </main>

<?php require_once("./php_include/site_footer.php") ?>

    </body>
</html>
