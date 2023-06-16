<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/allStyles.css">
    <link rel="stylesheet" type="text/css" href="public/css/stylePost.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./public/js/search.js" defer></script>
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
                <?php foreach ($posts as $post): ?>
                    <form class="post" action="showPost" method="GET">
                        <?php $imagePath = 'public/uploads/' . $post->getImage(); ?>
                        <?php if (file_exists($imagePath)): ?>
                            <input type="image" src="<?= $imagePath ?>" class="imagepostimput" value="Submit"/>
                        <?php else: ?>
                            <input type="image" src="public/img/logo.svg" class="imagepostimput" value="Submit"/>
                        <?php endif; ?>
                        <span class="postText"><p><?= $post->getTitle(); ?></p></span>
                        <div class="heart-container">
                            <button type="button" class="heart-button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                    <path fill="purple" stroke="purple" d="M20.84 4.58a5.5 5.5 0 0 0-7.78 0L12 5.47l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.91l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </section>
            <header>
                <div class="search-bar">
                        <input placeholder="search">
                </div>
                <form  action="addPost" method="GET">
                    <button class="add">ADD</button>
                </form>
            </header>
        </main>
    </div>
</body>

<template id="post-template">
    <form class="post" action="showPost" method="GET">
        <input type="image" src="" class="imagepostimput" value="Submit"/>
        <span class="postText"><p>title</p></span>
        <div class="heart-container">
            <button type="button" class="heart-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path fill="purple" stroke="purple" d="M20.84 4.58a5.5 5.5 0 0 0-7.78 0L12 5.47l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.91l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
            </button>
        </div>
    </form>
</template>