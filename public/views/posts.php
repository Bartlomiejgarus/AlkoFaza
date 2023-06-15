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
                        <button class="button" a href="#">Posts</a>
                    </form>
                </li>
                <li>
                    <form  action="users" method="GET">
                        <button class="button" a href="#"> Users</a>
                    </form>
                </li>
                <li>
                    <form  action="login" method="GET">
                        <button class="button-logout" href="#">Log out</a>
                    </form>
                </li>
            </ul>
        </nav>
        <main>
            <section class="posts">
                <?php foreach($posts as $post): ?>
                <div class="post">
                    <img src="public/uploads/<?=$post->getImage(); ?>">
                    <span class="postText"><p><?=$post->getTitle(); ?></p></span>
                </div>
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