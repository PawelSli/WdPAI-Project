<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/projects.css">

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/public/js/search.js" defer></script>
    <script type="text/javascript" src="/public/js/statistics.js" defer></script>
    <title>PROJECTS</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="/public/img/logo.svg">
        <ul>
            <li>
                <a href="main" class="button">main page</a>
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
                <a href="<?= $url."/logout"; ?>" class="button" name="logout">log out</a>
                <i class="fas fa-door-open"></i>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="search-bar">
                <input placeholder="search project">
            </div>
            <div class="add-project">
                <i class="fas fa-plus"></i> add project
            </div>
        </header>
        <section class="projects">
            <?php
            $url = "http://$_SERVER[HTTP_HOST]";
            foreach ($projects as $project): ?>
                <div id="<?= $project->getId(); ?>">
                    <img src="/public/uploads/<?= $project->getImage(); ?>">
                    <div>
                        <a href="<?= $url."/slideshow/".$project->getTitle(); ?>" ><h2><?= $project->getTitle(); ?></h2></a>
                        <p><?= $project->getDescription(); ?></p>
                        <div class="social-section">
                            <i class="fas fa-heart"> <?= $project->getLike(); ?></i>
                            <i class="fas fa-minus-square"> <?= $project->getDislike(); ?></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</div>
</body>

<template id="project-template">
    <div id="">
        <img src="">
        <div>
            <h2>title</h2>
            <p>description</p>
            <div class="social-section">
                <i class="fas fa-heart"> 0</i>
                <i class="fas fa-minus-square"> 0</i>
            </div>
        </div>
    </div>
</template>
