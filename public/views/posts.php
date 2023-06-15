<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/allStyles.css">
    <link rel="stylesheet" type="text/css" href="public/css/stylePost.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
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
            <section class="posts">
                <?php foreach($posts as $post): ?>
                <form class="post" action="showPost" method="GET">
                    <input type="image" src="public/uploads/<?=$post->getImage(); ?>" class="imagepostimput" value="Submit"/>
                    <span class="postText"><p><?=$post->getTitle(); ?></p></span>
                </form>
                <?php endforeach; ?>
            </section>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="search">
                    </form>
                </div>
                <form  action="addPost" method="GET">
                    <button class="add">ADD</button>
                </form>
            </header>
        </main>
    </div>
</body>