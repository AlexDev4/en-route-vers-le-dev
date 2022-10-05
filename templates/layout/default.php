<!DOCTYPE html>
<html dir="ltr" lang="fr">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Alexis OLIVE" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,700i&amp;subset=cyrillic,greek-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Stalemate&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <link href="/css/style.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />


    <title><?= !empty($this->fetch('title')) ? $this->fetch('title') : '' ?></title>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="general-header header-layout-one">
        <div class="general-header-inner">
            <div class="header-top-wrapper">
                <div class="header-top-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input type="search" placeholder="Recherche.......">
                                </div>
                            </div>
                            <!-- // col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="social-networks">
                                    <ul class="social-links">
                                        <li><a href="https://www.facebook.com/profile.php?id=100078513240834"></a></li>
                                        <li><a href="https://twitter.com/AlexDev83"></a></li>
                                        <li><a href="https://www.linkedin.com/in/alexis-olive-576738201/"></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCXPJpOp5RzF-EKjVzkl7jEg"></a></li>
                                        <li><a href="https://github.com/AlexDev4"></a></li>
                                    </ul>
                                </div>
                                <!-- // social-networks -->
                            </div>
                            <!-- // col -->
                        </div>
                        <!-- // row -->
                    </div>
                    <!-- // container -->
                </div>
                <!-- // header-top-inner -->
            </div>
            <!-- // header-top-wrapper -->
            <div class="container">
                <div class="site-info">
                    <img src="/img/logo.png" alt="Logo En route vers le dev">
                </div>
                <!-- // site-info -->
            </div>
            <!-- // container -->
            <nav class="main-nav layout-one">
                <div id="main-nav" class="stellarnav">
                    <ul>
                        <li><a href="<?= $this->Url->build('/')?>">Accueil</a>
                        </li>
                        <li><a href="#">Catégories</a>
                            <ul>
                                <li><a href="single-page-layout-one.html">Reconversion</a></li>
                                <li><a href="single-page-layout-two.html">Langage de programmation</a></li>
                                <li><a href="single-page-layout-two-video.html">Cybersécurité et réseaux</a></li>
                                <li><a href="single-page-layout-three.html">Histoire de l'informatique</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Qui suis je ?</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Me contacter</a></li>
                    </ul>
                </div>
                <!-- .stellar-nav -->
            </nav>
        </div>
        <!-- // general-header-inner -->
    </header>

    <main id="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <footer class="general-footer" style="background-image:url(./assets/dist/img/placeholder1900x800.png)">
        <div class="footer-mask"></div>
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footer-block">
                        <div class="">
                            <div class="footer-widget-content about-widget">
                                <div class="widget-title">
                                    <h2>A propos</h2>
                                </div>
                                <div class="widget-about-site-logo">
                                    <span><img src="/img/logo.png" alt="Logo En route vers le dev"></span>
                                </div>
                                <div class="widget-content">
                                    <p>Si vous voulez lire des articles sur l'informatique et son histoire, la programmation et les hauts et les bas d'un reconverti dans le développement, vous êtes au bon endroit !</p>
                                </div>
                                <!-- // widget-content -->
                                <div class="social-networks">
                                    <ul class="social-links">
                                        <li><a href="https://www.facebook.com/profile.php?id=100078513240834"></a></li>
                                        <li><a href="https://twitter.com/AlexDev83"></a></li>
                                        <li><a href="https://www.linkedin.com/in/alexis-olive-576738201/"></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCXPJpOp5RzF-EKjVzkl7jEg"></a></li>
                                        <li><a href="https://github.com/AlexDev4"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- // footer-widget-content -->
                        </div>
                        <!-- // footer block -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footer-block">
                        <div class="">
                            <div class="footer-widget-content">
                                <div class="widget-title">
                                    <h2>Navigation</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="widget-category-listings">
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Article</a></li>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Uncategorised</a></li>
                                    </ul>
                                </div>
                                <!-- // widget-content -->
                            </div>
                            <!-- // footer-widget-content -->
                        </div>
                        <!-- // footer block -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 footer-block">
                        <div class="">
                            <div class="footer-widget-content">
                                <div class="widget-title">
                                    <h2>A lire</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-posts">
                                        <div class="post-title">
                                            <h5><a href="#">5 Reasons Why Ladies Prefer To Have Brown Hair And Black Dress</a></h5>
                                        </div>
                                        <div class="posted-date">
                                            <span><a href="#">January 10, 2018</a></span>
                                        </div>
                                    </div>
                                    <!-- // widget-post -->
                                    <div class="widget-posts">
                                        <div class="post-title">
                                            <h5><a href="#">Summer at fuji beach was something like i always had dreamed</a></h5>
                                        </div>
                                        <div class="posted-date">
                                            <span><a href="#">January 11, 2018</a></span>
                                        </div>
                                    </div>
                                    <!-- // widget-post -->
                                    <div class="widget-posts">
                                        <div class="post-title">
                                            <h5><a href="#">Superstar arabic female singer rocking like a master pro singer</a></h5>
                                        </div>
                                        <div class="posted-date">
                                            <span><a href="#">January 10, 2018</a></span>
                                        </div>
                                    </div>
                                    <!-- // widget-post -->
                                </div>
                                <!-- // widget-content -->
                            </div>
                            <!-- // footer-widget-content -->
                        </div>
                        <!-- // footer block -->
                    </div>
                    <!-- // col -->
                </div>
                <!-- // row -->
                <div class="copyright-and-nav-row">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="copyrights">
                                <p>Copyrights @ 2022 Alexis OLIVE</p>
                            </div>
                            <!-- // copyrights -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="footer-navigation">
                                <li>Besoin d'un développeur ?</li>
                                <li><a href="https://www.malt.fr/profile/alexisolive">Malt</a></li>
                                <li><a href="https://app.comet.co/freelancer/profile">Comet.co</a></li>
                                <li><a href="https://www.codeur.com/-alexdev83">Codeur.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- // row -->
                </div>
                <!-- // copyright-and-nav-row -->
            </div>
            <!-- // container -->
        </div>
        <!-- // footer inner -->
    </footer>
    <script src="/js/bundle.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https://kit.fontawesome.com/2ace45f598.js" crossorigin="anonymous"></script>
</body>

</html>