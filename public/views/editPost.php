<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/mainStyles.css">
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
                    <a href="#" class="button">Users</a>
                </li>
                <li>
                    <i class="fas"></i>
                    <a href="#" class="button-logout">Log out</a>
                </li>
            </ul>
        </nav>
        <main>
            <section class="editPost">
                <h1>UPLOAD</h1>
                <form action="editPost" method="POST" ENCTYPE="multipart/form-data">
                    <div class="messages">
                        <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <img src="public/uploads/long-island-iced-tea.jpg">
                    <input name="title" type="text" placeholder="title">
                    <textarea name="ingredients" rows=5 placeholder="Ingredients"></textarea>
                    <textarea name="description" rows=5 placeholder="Description"></textarea>
                    <textarea name="howToDo" rows=5 placeholder="HowToDo"></textarea>
                    <button type="submit">send</button>
                </form>
            </section>
            <header>
                <div class="search-bar">
                    <form>
                        <input placeholder="Search">
                    </form>
                </div>
                <button class="add">ADD</button>
            </header>
        </main>
    </div>
</body>