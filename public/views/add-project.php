<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    <script src="https://kit.fontawesome.com/cae2952b66.js" crossorigin="anonymous"></script>
    <title>PROJECTS</title>
</head>
<body>
<div class="base-container">
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li>
                <a href="#" class="button">main page</a>
                <i class="far fa-building"></i>
            </li>
            <li>
                <a href="#" class="button">my profile</a>
                <i class="far fa-user-cog"></i>
            </li>
            <li>
                <a href="#" class="button">about us</a>
                <i class="fas fa-users"></i>
            </li>
            <li>
                <a href="#" class="button">log out</a>
                <i class="fas fa-door-open"></i>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="search-bar">
                <form>
                    <input placeholder="search-project">
                </form>
            </div>
            <div class="add-project">
                <i class="fas fa-plus"></i>
                add project
            </div>
        </header>
        <section class="project-form">
            <h1>UPLOAD:</h1>
            <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</div>
</body>