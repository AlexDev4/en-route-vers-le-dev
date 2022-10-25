<div class="container">
    <div class="main-post-area-wrapper main-post-area-layout-one">
        <div class="main-post-area-inner">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="main-post-area-holder">
                        <article class="post-details-holder">
                            <?php $i = 0 ?>
                            <?php foreach ($articlesHist as $article) : ?>
                                <div class="post-image">
                                    <img src="<?= $article->img ?>" alt="....">
                                </div>
                                <!-- // post image -->
                                <div class="post-title">
                                    <h2><?= $article->title ?></h2>
                                </div>
                                <!-- // post-title -->
                                <div class="post-the-content clearfix layout-one-first-letter">
                                    <p><?= substr($article->body, 0, 120) . '...' ?></p>
                                </div>
                                <!-- // post-the-content -->
                                <div class="post-permalink">
                                    <a <?= $this->Html->link('Voir l\'article', ['controller' => 'blog', 'action' => 'article', $article->id, $article->slug]) ?></a>
                                </div>
                                <!-- // post-permalink -->
                                <div class="post-meta-and-share">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="post-author">
                                                <span class="post-author"><a href="#">Alexis OLIVE</a></span>
                                            </div>
                                        </div>
                                        <!-- // col 4 -->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="post-share">
                                                <div class="share"></div>
                                            </div>
                                        </div>
                                        <!-- // col 4 -->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="post-comment-count">
                                                <span class="post-comment-count"><a href="#"><?= isset($nbComments[$i]) ? $nbComments[$i] . ' commentaires' : "0 commentaire" ?></a></span>
                                            </div>
                                        </div>
                                        <!-- // col 4 -->
                                    </div>
                                    <!-- // row -->
                                </div>
                                <?php $i = $i + 1; ?>
                            <?php endforeach ?>
                        </article>
                        <!-- // post-details-holder -->
                    </div>
                    <!-- // main-post-area-holder -->
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
                                                <?= $this->Form->create(null, ["url" => "/pages/newsletters"]) ?>
                                                <div class="form-group">
                                                    <input type="email" name="mailNew" placeholder="paul.otlet@mondaneum.be" class="form-control">
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
            <!-- <div class="pagination_holder">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div> -->
        </div>
        <!-- // main-post-area-inner -->
    </div>
    <!-- // main-post-area-wrapper main-post-area-layout-one -->
</div>