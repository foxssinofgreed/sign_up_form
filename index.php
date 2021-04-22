<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- local css -->
    <link href="public/scss/style.css" rel="stylesheet">

    <!-- local js -->
    <script src="ajax.js"></script>
    <script src="public/js/main.js"></script>

    <!-- error script -->
    <style id="response_style"></style>

    <!-- window -->
    <title>Sign Up</title>
    <link rel="icon" type="image/png" href="public/resources/images/fire2.gif">
</head>
<body>
    <div id="main_flex_box">
        <div id="sing_up_form">
            <div id="sign_up_inputs">
                <div>
                    <label>
                        <img src="public/resources/icons/user.png" alt="user">
                        <input id="user" type="text" placeholder="Username" name="user" autocomplete="off" minlength="3" title="username length should be more than 3 characters" required>
                    </label>
                </div>
                <div>
                    <label>
                        <img src="public/resources/icons/email.png" alt="email">
                        <input id="email" type="email" placeholder="Email" name="email" autocomplete="off" pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" required>
                    </label>
                </div>
                <div>
                    <label>
                        <img src="public/resources/icons/padlock.png" alt="lock">
                        <input id="password" type="password" placeholder="Password" name="password" autocomplete="off" minlength="8" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Minimum of 8 characters, should have at least one uppercase letter and two numbers." required>
                    </label>
                </div>
            </div>
            <div id="button"></div>
        </div>
        <div id="right_picture">
            <img src="public/resources/images/fire2.gif" alt="boy_at_fire_camp">
        </div>
    </div>
</body>
</html>