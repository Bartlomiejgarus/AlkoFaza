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
            <section class="showPost">
                <h1>UPLOAD</h1>
                <form action="showPost" method="POST" ENCTYPE="multipart/form-data">
                    <img src="public/uploads/long-island-iced-tea.jpg">
                    <input name="title" type="text" placeholder="title">
                    <textarea name="ingredients" rows=5 placeholder="ingredients"></textarea>
                    <textarea name="description" rows=5 placeholder="description"></textarea>
                    <button type="submit">send</button>
                </form>
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