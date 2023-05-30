<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/mainStyles.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input class="email" name="email" type="text" placeholder="email@mail.com">
                <input class="password" name="password" type="password" placeholder="password">
                <button class="continue" type="submit">CONTINUE</button>
                <button class="register">REGISTER</button>
            </form>
        </div>
    </div>
</body>