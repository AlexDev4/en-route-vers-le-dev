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
                        <li><a href="<?= $this->Url->build('/') ?>">Accueil</a>
                        </li>
                        <li style="text-transform: uppercase;padding: 20px 20px;font-weight: 500">Catégories
                            <ul>
                                <?php foreach ($categories as $category) : ?>
                                    <li><a href="<?= $this->Url->build($category->url) ?>"><?= $category->name ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="<?= $this->Url->build('/qui-suis-je') ?>">Qui suis je ?</a></li>
                        <li><a href="https://www.alexis-olive-developpeur.fr/">Portfolio</a></li>
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
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                        <div class="sidebar-inner">
                            <div class="widget widget-about-me">
                                <div class="widget-content">
                                    <div class="widget-about-me-profile">
                                        <img src="/img/picture-sidebar.jpg" alt="...">
                                    </div>
                                    <div class="widget-extra-info-holder">
                                        <div class="widget-author-name">
                                            <h3>Alexis OLIVE</h3>
                                            <span class="author-profession">Développeur indépendant</span>
                                        </div>
                                        <div class="widget-author-bio">
                                            <p>Historien de formation, je me suis réorienté dans la programmation informatique après quelques années et assure aujourd'hui des missions de développeur en freelance.</p>
                                        </div>
                                        <div class="widget-author-social">
                                            <ul class="social-links">
                                                <li><a href="https://www.facebook.com/profile.php?id=100078513240834"></a></li>
                                                <li><a href="https://twitter.com/AlexDev83"></a></li>
                                                <li><a href="https://www.linkedin.com/in/alexis-olive-576738201/"></a></li>
                                                <li><a href="https://www.youtube.com/channel/UCXPJpOp5RzF-EKjVzkl7jEg"></a></li>
                                                <li><a href="https://github.com/AlexDev4"></a></li>
                                            </ul>
                                        </div>
                                        <div class="widget-author-signature">
                                            <img src="/img/slack.png" alt="...">
                                        </div>
                                    </div>
                                    <!-- // widget-extra-info-holder -->
                                </div>
                                <!-- // widget-content -->
                            </div>
                            <!-- // widget -->
                            <div class="widget widget-social-links">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h2>Profils pro</h2>
                                    </div>
                                    <div class="widget-extra-info-holder">
                                        <div class="widget-social-links">
                                            <ul class="social-links-list">
                                                <li>
                                                    <a href="https://www.facebook.com/profile.php?id=100078513240834" class="clearfix" target="_blank">
                                                        Malt
                                                        <span class="social-icon">
                                                            <img src="/img/freelance/malt.png"></img>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://twitter.com" class="clearfix" target="_blank">
                                                        Comet.co
                                                        <span class="social-icon">
                                                            <img src="/img/freelance/comet.svg"></img>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://plus.google.com" class="clearfix" target="_blank">
                                                        Codeur.com
                                                        <span class="social-icon">
                                                            <img src="/img/freelance/codeur.png"></img>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://instagram.com" class="clearfix" target="_blank">
                                                        Kamatz
                                                        <span class="social-icon">
                                                            <img src="/img/freelance/kamatz.png"></img>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="http://linkedin.com" class="clearfix" target="_blank">
                                                        Freelance-informatique
                                                        <span class="social-icon">
                                                            <img src="/img/freelance/freelance-informatique.png"></img>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- // widget-extra-info-holder -->
                                </div>
                                <!-- // widget-content -->
                            </div>
                            <!-- // widget -->

                            <!-- // widget widget-newsletter -->
                            <div class="widget widget-popular-post">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h2>Les + vus</h2>
                                    </div>
                                    <div class="widget-extra-info-holder">
                                        <div class="widget-posts">
                                            <div class="post-thumb">
                                                <img src="./assets/dist/img/thumb/placeholder200x120.png" alt=".....">
                                            </div>
                                            <div class="post-title">
                                                <h5><a href="#">That Evening At Bali Beach Was Wounderful Then Any Other Mornings</a></h5>
                                            </div>
                                            <div class="post-view-count post-meta">
                                                <p>1277 <span>Views</span></p>
                                            </div>
                                        </div>
                                        <!-- // widget-post -->
                                        <div class="widget-posts">
                                            <div class="post-thumb">
                                                <img src="./assets/dist/img/thumb/placeholder200x120.png" alt=".....">
                                            </div>
                                            <div class="post-title">
                                                <h5><a href="#">5 Reasons Why Ladies Prefer To Have Brown Hair And Black Dress</a></h5>
                                            </div>
                                            <div class="post-view-count post-meta">
                                                <p>865 <span>Views</span></p>
                                            </div>
                                        </div>
                                        <!-- // widget-post -->
                                        <div class="widget-posts">
                                            <div class="post-thumb">
                                                <img src="./assets/dist/img/thumb/placeholder200x120.png" alt=".....">
                                            </div>
                                            <div class="post-title">
                                                <h5><a href="#">This post has just gone viral with many views</a></h5>
                                            </div>
                                            <div class="post-view-count post-meta">
                                                <p>721 <span>Views</span></p>
                                            </div>
                                        </div>
                                        <!-- // widget-post -->
                                        <div class="widget-posts">
                                            <div class="post-thumb">
                                                <img src="./assets/dist/img/thumb/placeholder200x120.png" alt=".....">
                                            </div>
                                            <div class="post-title">
                                                <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h5>
                                            </div>
                                            <div class="post-view-count post-meta">
                                                <p>234 <span>Views</span></p>
                                            </div>
                                        </div>
                                        <!-- // widget-post -->
                                    </div>
                                    <!-- // widget-extra-info-holder -->
                                </div>
                                <!-- // widget-content -->
                            </div>
                            <!-- // widget -->
                            <div class="widget widget-facebook-page-box">
                                <div class="widget-content">
                                    <div class="widget-title">
                                        <h2>Derniers Tweets</h2>
                                    </div>
                                    <div class="widget-extra-info-holder">
                                        <a class="twitter-timeline" data-height="500" href="https://twitter.com/AlexDev83?ref_src=twsrc%5Etfw">Tweets by AlexDev83</a>
                                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> <!-- // widget-extra-info-holder -->
                                    </div>
                                    <!-- // widget-content -->
                                </div>
                                <!-- // widget widget-category -->
                                <div class="widget widget-category">
                                    <div class="widget-content">
                                        <div class="widget-title">
                                            <h2>Categories</h2>
                                        </div>
                                        <div class="widget-extra-info-holder">
                                            <ul class="widget-category-listings">
                                                <?php foreach ($categories as $category) : ?>
                                                    <li><a href="#"><?= $category->name ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <!-- // widget-extra-info-holder -->
                                    </div>
                                    <!-- // widget-content -->
                                </div>
                                <!-- // widget widget-category -->

                                <!-- // widget -->
                                <div class="widget widget-newsletter">
                                    <div class="widget-content">
                                        <div class="widget-title">
                                            <h2>Newsletter</h2>
                                        </div>
                                        <div class="widget-extra-info-holder">
                                            <div class="widget-newsletter-content">
                                                <p>Abonnez-vous à ma newsletter pour être toujours au courant des nouveaux articles !</p>
                                                <?= $this->Form->create(null, ["url" => "/pages/newsletter"]) ?>
                                                <div class="form-group">
                                                    <input type="email" name="newsletter-email" placeholder="paul.otlet@mondaneum.be" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="submit" class="layout-one-btn">S'inscrire</button>
                                                </div>
                                                <?= $this->Form->end() ?>
                                            </div>
                                            <!--// widget-newsletter-content -->
                                        </div>
                                        <!-- // widget-extra-info-holder -->
                                    </div>
                                    <!-- // widget-content -->
                                </div>
                                <!-- // widget widget-newsletter -->
                            </div>
                            <!-- // sidebar-inner -->
                    </aside>
                    <!-- // sidebar -->
                </div>
                <!-- // col 4 -->
            </div>
            <!-- // main row that divies left and sidebar -->
            <div class="pagination_holder">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- // main-post-area-inner -->
    </div>
    <!-- // main-post-area-wrapper main-post-area-layout-one -->
</div>
<!-- // container -->
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
                                        <li><a href="#">Accueil</a></li>
                                        <li><a href="<?= $this->Url->build('/blog') ?>">Blog</a></li>
                                        <ul>
                                            <li><a href="<?= $this->Url->build('/blog/reconversion') ?>">Reconversion</a></li>
                                            <li><a href="<?= $this->Url->build('/blog/programmation') ?>">Langage de programmation</a></li>
                                            <li><a href="<?= $this->Url->build('/blog/cybersecurite-reseau') ?>">Cybersécurité et réseaux</a></li>
                                            <li><a href="<?= $this->Url->build('/blog/histoire-informatique') ?>">Histoire de l'informatique</a></li>
                                        </ul>
                                        <li><a href="#">Qui suis-je ?</a></li>
                                        <li><a href="#">Mon portfolio</a></li>
                                        <li><a href="#">Me contacter</a></li>
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