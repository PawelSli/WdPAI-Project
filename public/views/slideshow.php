<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" defer>
    <link rel="stylesheet" type="text/css" href="public/css/projects.css" defer>
    <link rel="stylesheet" type="text/css" href="public/css/slideshow.css" defer>

    <script src="https://kit.fontawesome.com/723297a893.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/cae2952b66.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/statistics.js" defer></script>
    <script type="text/javascript" src="./public/js/slideshow.js" defer></script>
    <title>Java</title>
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
                <input placeholder="search project">
            </div>
            <div class="add-project">
                <i class="fas fa-plus"></i> add project
            </div>
        </header>
        <div class="slideshow">
            <a href="#" class="hvr-icon-back" onclick="plusSlides(-1)">
                <i class="fa fa-chevron-circle-left hvr-icon"></i>
            </a>
            <?php foreach ($slides as $slide): ?>
                <div class="slider fade" >
                    <div class="imgsection">
                        <img src="public/uploads/<?= $slide->getImage(); ?>">
                    </div>
                    <div class="textsection"><div class="text"><?= $slide->getDesc(); ?></div></div>
                </div>
            <?php endforeach; ?>

            <!--<div class="slider fade" >
                <div class="imgsection">
                    <img src="public/uploads/123.jpg" >
                </div>
                <div class="textsection"><div class="text">Caption One</div></div>
            </div>
            <div class="slider fade" >
                <div class="imgsection">
                    <img src="public/uploads/hyhy.jpg" >
                </div>
                <div class="textsection"><div class="text">Caption Two</div></div>
            </div>
            <div class="slider fade" >
                <div class="imgsection">
                    <img src="public/uploads/xd1211.jpg" >
                </div>
                <div class="textsection"><div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum tellus, viverra non faucibus nec, convallis nec dui. Nam ac orci vel arcu lobortis condimentum. Ut suscipit sapien quam, et viverra quam bibendum id. Nullam fermentum libero in turpis interdum, sit amet eleifend arcu tincidunt. Etiam euismod sem dui, eget posuere tortor mollis a. Nulla et eros ut orci hendrerit mattis bibendum sollicitudin sapien. Aenean eget auctor risus. Nam hendrerit, orci vel egestas porttitor, lorem magna tempor quam, quis dapibus nunc magna nec lacus. Proin tincidunt viverra velit eget porta. Maecenas ut accumsan tortor. Aenean varius fermentum aliquet. Nunc non massa gravida, gravida arcu viverra, fermentum metus. Pellentesque eget venenatis dui, ut lobortis ex. Proin dignissim malesuada magna sit amet pharetra.

                        Donec at tempor nisl. Proin vel posuere diam, vel iaculis erat. Donec fringilla quis ipsum ac imperdiet. In hendrerit, augue et sagittis faucibus, tortor erat porta tellus, ut elementum nunc ante eget dolor. Cras cursus nisi malesuada sapien finibus molestie. Etiam in sem enim. Vestibulum vitae odio et magna dapibus iaculis.

                        Ut at mollis quam. Morbi auctor lacus quis est blandit convallis ut vitae ante. Mauris malesuada nibh sed nulla commodo, et lobortis elit imperdiet. Etiam et sem et est consectetur consequat. Quisque auctor congue mauris, tincidunt finibus nisi aliquam sed. Nunc vitae justo in elit ultricies placerat. Quisque ut dictum ex. In sed risus quis risus placerat laoreet at eu odio. In ut lectus aliquet, tincidunt nulla lobortis, pulvinar lacus. Quisque tempor tellus eu semper consequat. Nam leo nibh, porta a metus sed, dapibus interdum odio. Aenean dapibus lorem sit amet sollicitudin tincidunt. Aliquam eu dui vitae ipsum tempus iaculis eget ut metus. Pellentesque in facilisis ligula. Duis ex libero, varius eu luctus in, dignissim vitae lorem.

                        Integer malesuada metus at odio condimentum laoreet at gravida arcu. Suspendisse eu lacus efficitur, ultrices quam ultricies, pulvinar ex. Nulla tellus tellus, porta eu ligula ut, elementum commodo ante. Morbi vulputate neque id mi dictum bibendum. Aliquam arcu ipsum, gravida id pellentesque eu, consequat ut ipsum. Ut a porttitor mi. Sed ornare ipsum ac lacus dictum, quis bibendum lacus interdum. Etiam convallis semper nunc eget convallis. In eu porta odio. Quisque ac ante ac mi vestibulum efficitur et ac felis. Curabitur rhoncus nunc dui, sed viverra urna vestibulum sed. Nullam rutrum aliquet ex, non cursus dui vehicula quis.

                        Pellentesque lacus erat, egestas at bibendum non, pharetra eu erat. Morbi vestibulum ante lectus, id sodales dolor dictum sit amet. Duis feugiat quis diam quis scelerisque. Aliquam id pulvinar nisi. Sed tincidunt mi ut tortor rhoncus, sit amet imperdiet dolor consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis auctor fermentum mi non eleifend.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum tellus, viverra non faucibus nec, convallis nec dui. Nam ac orci vel arcu lobortis condimentum. Ut suscipit sapien quam, et viverra quam bibendum id. Nullam fermentum libero in turpis interdum, sit amet eleifend arcu tincidunt. Etiam euismod sem dui, eget posuere tortor mollis a. Nulla et eros ut orci hendrerit mattis bibendum sollicitudin sapien. Aenean eget auctor risus. Nam hendrerit, orci vel egestas porttitor, lorem magna tempor quam, quis dapibus nunc magna nec lacus. Proin tincidunt viverra velit eget porta. Maecenas ut accumsan tortor. Aenean varius fermentum aliquet. Nunc non massa gravida, gravida arcu viverra, fermentum metus. Pellentesque eget venenatis dui, ut lobortis ex. Proin dignissim malesuada magna sit amet pharetra.

                        Donec at tempor nisl. Proin vel posuere diam, vel iaculis erat. Donec fringilla quis ipsum ac imperdiet. In hendrerit, augue et sagittis faucibus, tortor erat porta tellus, ut elementum nunc ante eget dolor. Cras cursus nisi malesuada sapien finibus molestie. Etiam in sem enim. Vestibulum vitae odio et magna dapibus iaculis.

                        Ut at mollis quam. Morbi auctor lacus quis est blandit convallis ut vitae ante. Mauris malesuada nibh sed nulla commodo, et lobortis elit imperdiet. Etiam et sem et est consectetur consequat. Quisque auctor congue mauris, tincidunt finibus nisi aliquam sed. Nunc vitae justo in elit ultricies placerat. Quisque ut dictum ex. In sed risus quis risus placerat laoreet at eu odio. In ut lectus aliquet, tincidunt nulla lobortis, pulvinar lacus. Quisque tempor tellus eu semper consequat. Nam leo nibh, porta a metus sed, dapibus interdum odio. Aenean dapibus lorem sit amet sollicitudin tincidunt. Aliquam eu dui vitae ipsum tempus iaculis eget ut metus. Pellentesque in facilisis ligula. Duis ex libero, varius eu luctus in, dignissim vitae lorem.

                        Integer malesuada metus at odio condimentum laoreet at gravida arcu. Suspendisse eu lacus efficitur, ultrices quam ultricies, pulvinar ex. Nulla tellus tellus, porta eu ligula ut, elementum commodo ante. Morbi vulputate neque id mi dictum bibendum. Aliquam arcu ipsum, gravida id pellentesque eu, consequat ut ipsum. Ut a porttitor mi. Sed ornare ipsum ac lacus dictum, quis bibendum lacus interdum. Etiam convallis semper nunc eget convallis. In eu porta odio. Quisque ac ante ac mi vestibulum efficitur et ac felis. Curabitur rhoncus nunc dui, sed viverra urna vestibulum sed. Nullam rutrum aliquet ex, non cursus dui vehicula quis.

                        Pellentesque lacus erat, egestas at bibendum non, pharetra eu erat. Morbi vestibulum ante lectus, id sodales dolor dictum sit amet. Duis feugiat quis diam quis scelerisque. Aliquam id pulvinar nisi. Sed tincidunt mi ut tortor rhoncus, sit amet imperdiet dolor consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis auctor fermentum mi non eleifend.</div></div>
            </div>
            -->





            <a href="#" class="hvr-icon-forward" onclick="plusSlides(1)">
                <i class="fa fa-chevron-circle-right hvr-icon"></i>
            </a>
        </div>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </main>
</div>
</body>

<!--<div class="slides fade">
                <div class="numbertext">1 / 3</div>
                <img src="public/uploads/xd1211.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque ante a lacus interdum tincidunt. In dignissim tincidunt blandit. Morbi aliquet sagittis porta. Praesent ullamcorper rhoncus dolor, quis ultricies sem aliquet ut. Ut efficitur arcu ex, in pretium est facilisis sit amet. Sed volutpat ligula metus, non vestibulum dui condimentum id. Pellentesque cursus posuere nulla, sed bibendum leo placerat ac. Ut lectus mi, venenatis et lobortis at, dignissim pretium sapien. Integer sed ex a lacus pellentesque varius nec vitae nibh. Etiam eget turpis in turpis dictum sodales. Aenean volutpat ipsum sed urna facilisis vehicula. Suspendisse sollicitudin feugiat faucibus. Mauris tortor nunc, sagittis sit amet orci nec, efficitur blandit magna. Curabitur efficitur mi in lacus ornare sodales.

                    Sed sed quam pretium urna fringilla efficitur. Quisque faucibus eu lectus nec blandit. Aenean et feugiat augue, in pretium tortor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam fringilla risus in feugiat mollis. Nunc maximus, sapien ac tincidunt tempor, ligula eros dignissim augue, vitae venenatis ex eros quis ipsum.

                    Suspendisse sed facilisis lacus. In sem neque, lobortis sed molestie a, efficitur sit amet mi. Morbi placerat nisl faucibus dolor iaculis, a dignissim urna pulvinar. Vestibulum vulputate nulla sit amet eros convallis faucibus. Suspendisse suscipit lectus nibh, id blandit lectus mattis et. Sed pulvinar efficitur quam, id egestas tellus. Aenean porta sed ante condimentum tincidunt. Nam lobortis ipsum in vestibulum cursus. Integer sagittis diam id lorem aliquam, ut congue sem tempor. Suspendisse finibus faucibus elit, vitae volutpat elit ullamcorper eu. Quisque volutpat quis augue ut volutpat. Ut feugiat pulvinar cursus. Aliquam ornare lacus felis, a varius magna venenatis eu.

                    Vestibulum tempus eros vitae elit ultrices, eu laoreet velit fringilla. Curabitur sit amet urna at dolor dignissim sollicitudin sit amet sit amet est. In non accumsan ante. Nulla blandit urna neque, et aliquet metus pharetra nec. Donec dapibus neque eget arcu consequat, sed efficitur dui elementum. Quisque dui nulla, auctor vitae hendrerit vitae, posuere id nisi. Etiam hendrerit dolor quis consequat blandit. Integer vulputate magna vitae hendrerit aliquam. Ut id mollis elit. Etiam rutrum consequat dui, ut ultricies erat congue a. Aenean et luctus odio. Integer mi ex, sollicitudin hendrerit scelerisque quis, bibendum non ex. Nulla sit amet purus sollicitudin lacus venenatis cursus. Praesent pellentesque elit justo, ac auctor massa tempus et. Integer consectetur posuere ullamcorper.

                    Etiam hendrerit aliquam nisi, eu euismod nibh lacinia et. Fusce in commodo mauris. Ut consequat fringilla mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi venenatis magna nec mi rutrum, in tincidunt massa posuere. Vestibulum ipsum felis, dictum eu sodales eget, condimentum quis velit. Aliquam sed lorem tristique, faucibus lectus et, rutrum risus. Morbi eget rhoncus sem, vitae pretium ligula. Fusce id ante in eros aliquam ultrices. In ac posuere mi.</p>
            </div>
            <div class="slides fade">
                <div class="numbertext">2 / 3</div>
                <img src="public/uploads/123.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque ante a lacus interdum tincidunt. In dignissim tincidunt blandit. Morbi aliquet sagittis porta. Praesent ullamcorper rhoncus dolor, quis ultricies sem aliquet ut. Ut efficitur arcu ex, in pretium est facilisis sit amet. Sed volutpat ligula metus, non vestibulum dui condimentum id. Pellentesque cursus posuere nulla, sed bibendum leo placerat ac. Ut lectus mi, venenatis et lobortis at, dignissim pretium sapien. Integer sed ex a lacus pellentesque varius nec vitae nibh. Etiam eget turpis in turpis dictum sodales. Aenean volutpat ipsum sed urna facilisis vehicula. Suspendisse sollicitudin feugiat faucibus. Mauris tortor nunc, sagittis sit amet orci nec, efficitur blandit magna. Curabitur efficitur mi in lacus ornare sodales.

                    Sed sed quam pretium urna fringilla efficitur. Quisque faucibus eu lectus nec blandit. Aenean et feugiat augue, in pretium tortor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam fringilla risus in feugiat mollis. Nunc maximus, sapien ac tincidunt tempor, ligula eros dignissim augue, vitae venenatis ex eros quis ipsum.

                    Suspendisse sed facilisis lacus. In sem neque, lobortis sed molestie a, efficitur sit amet mi. Morbi placerat nisl faucibus dolor iaculis, a dignissim urna pulvinar. Vestibulum vulputate nulla sit amet eros convallis faucibus. Suspendisse suscipit lectus nibh, id blandit lectus mattis et. Sed pulvinar efficitur quam, id egestas tellus. Aenean porta sed ante condimentum tincidunt. Nam lobortis ipsum in vestibulum cursus. Integer sagittis diam id lorem aliquam, ut congue sem tempor. Suspendisse finibus faucibus elit, vitae volutpat elit ullamcorper eu. Quisque volutpat quis augue ut volutpat. Ut feugiat pulvinar cursus. Aliquam ornare lacus felis, a varius magna venenatis eu.

                    Vestibulum tempus eros vitae elit ultrices, eu laoreet velit fringilla. Curabitur sit amet urna at dolor dignissim sollicitudin sit amet sit amet est. In non accumsan ante. Nulla blandit urna neque, et aliquet metus pharetra nec. Donec dapibus neque eget arcu consequat, sed efficitur dui elementum. Quisque dui nulla, auctor vitae hendrerit vitae, posuere id nisi. Etiam hendrerit dolor quis consequat blandit. Integer vulputate magna vitae hendrerit aliquam. Ut id mollis elit. Etiam rutrum consequat dui, ut ultricies erat congue a. Aenean et luctus odio. Integer mi ex, sollicitudin hendrerit scelerisque quis, bibendum non ex. Nulla sit amet purus sollicitudin lacus venenatis cursus. Praesent pellentesque elit justo, ac auctor massa tempus et. Integer consectetur posuere ullamcorper.

                    Etiam hendrerit aliquam nisi, eu euismod nibh lacinia et. Fusce in commodo mauris. Ut consequat fringilla mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi venenatis magna nec mi rutrum, in tincidunt massa posuere. Vestibulum ipsum felis, dictum eu sodales eget, condimentum quis velit. Aliquam sed lorem tristique, faucibus lectus et, rutrum risus. Morbi eget rhoncus sem, vitae pretium ligula. Fusce id ante in eros aliquam ultrices. In ac posuere mi.</p>
            </div>
            <div class="slides fade">
                <div class="numbertext">3 / 3</div>
                <img src="public/uploads/hyhy.jpg" style="width:100%">
                <div class="text">Caption Text</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque ante a lacus interdum tincidunt. In dignissim tincidunt blandit. Morbi aliquet sagittis porta. Praesent ullamcorper rhoncus dolor, quis ultricies sem aliquet ut. Ut efficitur arcu ex, in pretium est facilisis sit amet. Sed volutpat ligula metus, non vestibulum dui condimentum id. Pellentesque cursus posuere nulla, sed bibendum leo placerat ac. Ut lectus mi, venenatis et lobortis at, dignissim pretium sapien. Integer sed ex a lacus pellentesque varius nec vitae nibh. Etiam eget turpis in turpis dictum sodales. Aenean volutpat ipsum sed urna facilisis vehicula. Suspendisse sollicitudin feugiat faucibus. Mauris tortor nunc, sagittis sit amet orci nec, efficitur blandit magna. Curabitur efficitur mi in lacus ornare sodales.

                    Sed sed quam pretium urna fringilla efficitur. Quisque faucibus eu lectus nec blandit. Aenean et feugiat augue, in pretium tortor. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam fringilla risus in feugiat mollis. Nunc maximus, sapien ac tincidunt tempor, ligula eros dignissim augue, vitae venenatis ex eros quis ipsum.

                    Suspendisse sed facilisis lacus. In sem neque, lobortis sed molestie a, efficitur sit amet mi. Morbi placerat nisl faucibus dolor iaculis, a dignissim urna pulvinar. Vestibulum vulputate nulla sit amet eros convallis faucibus. Suspendisse suscipit lectus nibh, id blandit lectus mattis et. Sed pulvinar efficitur quam, id egestas tellus. Aenean porta sed ante condimentum tincidunt. Nam lobortis ipsum in vestibulum cursus. Integer sagittis diam id lorem aliquam, ut congue sem tempor. Suspendisse finibus faucibus elit, vitae volutpat elit ullamcorper eu. Quisque volutpat quis augue ut volutpat. Ut feugiat pulvinar cursus. Aliquam ornare lacus felis, a varius magna venenatis eu.

                    Vestibulum tempus eros vitae elit ultrices, eu laoreet velit fringilla. Curabitur sit amet urna at dolor dignissim sollicitudin sit amet sit amet est. In non accumsan ante. Nulla blandit urna neque, et aliquet metus pharetra nec. Donec dapibus neque eget arcu consequat, sed efficitur dui elementum. Quisque dui nulla, auctor vitae hendrerit vitae, posuere id nisi. Etiam hendrerit dolor quis consequat blandit. Integer vulputate magna vitae hendrerit aliquam. Ut id mollis elit. Etiam rutrum consequat dui, ut ultricies erat congue a. Aenean et luctus odio. Integer mi ex, sollicitudin hendrerit scelerisque quis, bibendum non ex. Nulla sit amet purus sollicitudin lacus venenatis cursus. Praesent pellentesque elit justo, ac auctor massa tempus et. Integer consectetur posuere ullamcorper.

                    Etiam hendrerit aliquam nisi, eu euismod nibh lacinia et. Fusce in commodo mauris. Ut consequat fringilla mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi venenatis magna nec mi rutrum, in tincidunt massa posuere. Vestibulum ipsum felis, dictum eu sodales eget, condimentum quis velit. Aliquam sed lorem tristique, faucibus lectus et, rutrum risus. Morbi eget rhoncus sem, vitae pretium ligula. Fusce id ante in eros aliquam ultrices. In ac posuere mi.</p>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>-->
