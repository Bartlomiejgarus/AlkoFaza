<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/stylePosts.css">
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
                    <input name="title" type="text" placeholder="title">
                    <textarea name="ingredients" rows=5 placeholder="ingredients"></textarea>
                    <textarea name="description" rows=5 placeholder="description"></textarea>

                    <input type="file" name="file"/><br/>
                    <button type="submit">send</button>
                </form>
            </section>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="search">
                    </form>
                </div>
                <button class="add">
                    ADD
                </button>
            </header>
        </main>
    </div>
</body>