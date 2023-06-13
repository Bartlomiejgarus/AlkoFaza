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
                    <i class="fas"></i>
                    <a href="#" class="button">Posts</a>
                </li>
                <li>    
                    <i class="fas"></i>
                    <a href="#" class="button"> Users</a>
                </li>
                <li>
                    <i class="fas"></i>
                    <a href="#" class="button-logout">Log out</a>
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