<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/projects.css">
    <link rel="stylesheet" type="text/css" href="/public/css/articleinclude.css">
    <link rel="stylesheet" type="text/css" href="/public/css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="/public/css/userprofile.css">


    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/includearticle.js" defer></script>
    <title>PROJECTS</title>
</head>

<body>
<div class="base-container">
    <nav>
        <img src="public/img/logo.svg">
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
                <a href="logout" class="button" name="logout">log out</a>
                <i class="fas fa-door-open"></i>
            </li>
        </ul>
    </nav>
    <main>
        <header>
            <div class="myDropdown">
                <a href="#"><i class="fas fa-arrow-down"></i> Show categories</a>
                <ul class="unnStyled">
                    <?php foreach ($categories as $i => $category): ?>
                        <li class="unnStyled"><a href="<?=$url."/category/".$category;?>"><?= $category; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="search-bar">
                <input class="input-search-bar" placeholder="search project"></i>">
            </div>
            <div class="add-project">
                <i class="fas fa-plus"></i> add project
            </div>
        </header>
        <div class="mainPanel">
            <div class="myProfile">
                <h1> Informacje o użytkowniku</h1>
                <div class="contentPanel">
                    <div class="textPanel">
                        <h3> Email użytkownika: <?=$profile->getEmail(); ?></h3>
                        <h3> Imię użytkownika: <?=$profile->getName(); ?></h3>
                        <h3> Nazwisko użytkownika: <?=$profile->getSurname(); ?></h3>
                        <button type="submit">EDIT PROFILE</button>
                    </div>
                    <div class="imagePanel">
                        fsdfsd
                    </div>

                </div>
            </div>
        </div>
    </main>
</div>
</body>

