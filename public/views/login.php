<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/allStyles.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <form action="posts" method="GET">
                <input type="image" src="public/img/logo.svg" alt="Logo" class="logoimput" value="Submit"/>
            </form>
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
            </form>
            <form class="login" action="register">
                <button class="register-button">REGISTER</button>
            </form>
        </div>
    </div>
</body>