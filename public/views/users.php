<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/allStyles.css">
    <link rel="stylesheet" type="text/css" href="public/css/stylePosts.css">
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
            <section class="users-container">
            </section>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="Search">
                    </form>
                </div>
                <button class="add">
                    ADD
                </button>
            </header>
        </main>
    </div>
</body>