<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">


    <!-- local css -->
    <link href="scss/style.css" rel="stylesheet">

    <!-- local js -->
    <script src="js/ajax.js"></script>
    <script src="js/main.js"></script>

    <!-- error script -->
    <style id="response_style"></style>

    <!-- window -->
    <title>Sign Up</title>
    <link rel="icon" type="image/png" href="resources/images/fire2.gif">
</head>
<body>
<div id="main_flex_box">
    <div id="sing_up_form">
        <div id="sign_up_inputs">
            <div>
                <label>
                    <img src="resources/icons/user.png" alt="user">
                    <input id="user" type="text" placeholder="Username" name="user" autocomplete="off" minlength="3" title="username length should be more than 3 characters" required>
                </label>
            </div>
            <div>
                <label>
                    <img src="resources/icons/email.png" alt="email">
                    <input id="email" type="email" placeholder="Email" name="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                </label>
            </div>
            <div>
                <label>
                    <img src="resources/icons/padlock.png" alt="lock">
                    <input id="password" type="password" placeholder="Password" name="password" autocomplete="off" minlength="8" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Minimum of 8 characters, should have at least one uppercase letter and 1 numbers" required>
                </label>
            </div>
        </div>
        <div id="button"></div>

        <div id="error_message">
            <span>error</span>
        </div>
    </div>
    <div id="right_picture">
        <img src="resources/images/fire2.gif" alt="boy_at_fire_camp">
    </div>
</div>
</body>
</html>