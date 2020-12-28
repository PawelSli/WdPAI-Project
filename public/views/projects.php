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
            <section class="projects">
                <div id="project1">
                    <img src="public/img/uploads/xd^4.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                        <div class="social-section">
                            <i class="fas fa-heart">600</i>
                            <i class="fas fa-minus-square">2137</i>
                        </div>
                    </div>
                </div>
                <div id="project1">
                    <img src="public/img/uploads/xd^4.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                        <div class="social-section">
                            <i class="fas fa-heart">600</i>
                            <i class="fas fa-minus-square">2137</i>
                        </div>
                    </div>
                </div>
                <div id="project1">
                    <img src="public/img/uploads/xd^4.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                        <div class="social-section">
                            <i class="fas fa-heart">600</i>
                            <i class="fas fa-minus-square">2137</i>
                        </div>
                    </div>
                </div>
                <div id="project1">
                    <img src="public/img/uploads/xd^4.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                        <div class="social-section">
                            <i class="fas fa-heart">600</i>
                            <i class="fas fa-minus-square">2137</i>
                        </div>
                    </div>
                </div>
                <div id="project1">
                    <img src="public/img/uploads/xd^4.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                        <div class="social-section">
                            <i class="fas fa-heart">600</i>
                            <i class="fas fa-minus-square">2137</i>
                        </div>
                    </div>
                </div>
                <div id="project1">
                    <img src="public/img/uploads/<? $project-getImage() ?>">
                    <div>
                        <h2><? $project-getTitle() ?></h2>
                        <p><? $project-getDescription() ?></p>
                        <div class="social-section">
                            <i class="fas fa-heart">600</i>
                            <i class="fas fa-minus-square">2137</i>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>