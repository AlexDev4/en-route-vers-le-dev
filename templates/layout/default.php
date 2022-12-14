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
                                <div class="col-md-5">
                                    <a class="connexion" href="<?= $this->Url->build('/backoffice') ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>Espace membre</a>
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
                        <li><a href="<?= $this->Url->build('/') ?>">Accueil</a>
                        </li>
                        <li style="text-transform: uppercase;padding: 20px 20px;font-weight: 500">Cat??gories
                            <ul>
                                <?php foreach ($categories as $category) : ?>
                                    <li><a href="<?= $this->Url->build($category->url) ?>"><?= $category->name ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="<?= $this->Url->build('/coming-soon') ?>">Portfolio</a></li>
                        <li><a href="<?= $this->Url->build('/me-contacter') ?>">Me contacter</a></li>
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
                                <div class="widget-content" style="text-align:justify">
                                    <p>Si vous voulez lire des articles sur l'informatique et son histoire, la programmation et les hauts et les bas d'un reconverti dans le d??veloppement, vous ??tes au bon endroit !</p>
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
                                        <li><a href="<?= $this->Url->build('/') ?>">Accueil</a></li>
                                        <li><a href="<?= $this->Url->build('/blog') ?>">Blog</a></li>
                                        <ul>
                                            <li><a href="<?= $this->Url->build('/blog/reconversion') ?>">Reconversion</a></li>
                                            <li><a href="<?= $this->Url->build('/blog/langages-programmation') ?>">Langage de programmation</a></li>
                                            <li><a href="<?= $this->Url->build('/blog/cybersecurite-reseaux') ?>">Cybers??curit?? et r??seaux</a></li>
                                            <li><a href="<?= $this->Url->build('/blog/histoire-informatique') ?>">Histoire de l'informatique</a></li>
                                        </ul>
                                        <li><a href="<?= $this->Url->build('/coming-soon') ?>">Mon portfolio</a></li>
                                        <li><a href="<?= $this->Url->build('/me-contacter') ?>">Me contacter</a></li>
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
                                        <?php foreach ($articlesFooter as $art) : ?>
                                            <div class="post-title">
                                                <h5><a href="#"><?= $art->title ?></a></h5>
                                            </div>
                                            <div class="posted-date">
                                                <span><a href="#"><?= $art->created ?></a></span>
                                            </div>
                                            <br>
                                        <?php endforeach ?>
                                    </div>

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
                                <li>Besoin d'un d??veloppeur ?</li>
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