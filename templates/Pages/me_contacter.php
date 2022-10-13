<?php

use App\Model\Entity\Category;

$this->assign('title', 'En route vers le dev | Le Blog d\'un jeune développeur'); ?>

<div class="container">
    <div class="main-post-area-wrapper main-post-area-layout-one">
        <div class="main-post-area-inner">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <form class="comments__form">
                        <div class="comments__form-info">
                            <div class="comments__form-field">
                                <input id="comments__form-label-name" name="author" placeholder="Nom" type="text" class="comments__form-input">
                                <label class="comments__form-label" for="comments__form-label-name">
                                    <span class="comments__form-label-text">Nom</span>
                                </label>
                            </div>
                        </div>
                        <div class="comments__form-text">
                            <div class="comments__form-field">
                                <textarea id="comments__form-label-text" name="comment" placeholder="Mon commentaire..." type="text" class="comments__form-input comments__form-textarea"></textarea>
                                <label class="comments__form-label" for="comments__form-label-text">
                                    <span class="comments__form-label-text">Exprimez votre avis, vos suggestions, ...</span>
                                </label>
                            </div>
                        </div>
                        <input name="submit" type="submit" id="submit" class="comments__form-submit" value="Poster mon commentaire">
                    </form>
                </div>
                <!-- // col -->
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
                                                <form>
                                                    <div class="form-group">
                                                        <input type="email" name="newsletter-email" placeholder="Email Address ..." class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="submit" class="layout-one-btn">Subscribe</button>
                                                    </div>
                                                </form>
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

        </div>
        <!-- // main-post-area-inner -->
    </div>
    <!-- // main-post-area-wrapper main-post-area-layout-one -->
</div>
<!-- // container -->