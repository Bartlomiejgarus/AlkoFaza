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
            <section>
                <h1>Long Island Iced Tea</h1>
                <form class="showPost" action="showPost" method="POST" enctype="multipart/form-data">
                    <div>
                        <img class="img-post" src="public/uploads/long-island-iced-tea.jpg">
                    </div>
                    <div class="postDescription">
                        <p class="postHeader">Description</p>
                        <span class="postText" name="description">The strongest drink in the world!</span>
                    </div>
                    <div class="postIngredients">
                        <p class="postHeader">Ingredients</p>
                        <span class="postText" name="ingredients">vodka, rum, gin, tequila, triple sec, sweet, cola, lime</span>
                    </div>
                    <div class="postHowToDo">
                        <p class="postHeader" >How to do</p>
                        <span class="postText" name="how_to_do">Mix all with ice</span>
                    </div>
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