s<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/allStyles.css">
    <link rel="stylesheet" type="text/css" href="public/css/addPost.css">
    <title>posts</title>
</head> 

<body>
    <div class="base-container">
        <nav>
            <img src="public/img/logo.svg">
            <ul>
                <li>
                    <form  action="posts" method="GET">
                        <button class="button" a href="#">Posts</button>
                    </form>
                </li>
                <li>
                    <form  action="users" method="GET">
                        <button class="button" a href="#"> Users</button>
                    </form>
                </li>
                <li>
                    <form action="login" method="GET">
                        <button class="button-logout" href="#">
                        <?php
                        if (isset($_COOKIE['email']) && !empty($_COOKIE['email'])) {
                            echo "Log out";
                        } else {
                           echo "Log in";
                        }
                        ?>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <main>
            <section class="addNewPost">
                <h1>UPLOAD</h1>
                <form action="addNewPost" method="POST" ENCTYPE="multipart/form-data">
                    <div class="messages">
                        <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <input name="title" type="text" placeholder="Title">
                    <div>
                        <textarea class="textarea" name="ingredients" rows=5 placeholder="Ingredients"></textarea>
                        <textarea class="textarea" name="description" rows=5 placeholder="Description"></textarea>
                        <textarea class="textarea" name="howToDo" rows=5 placeholder="How To Do"></textarea>
                    </div>
                    <input type="file" name="file"/><br/>
                    <button class="submitButton" type="submit">send</button>
                </form>
            </section>
        </main>
    </div>
</body>