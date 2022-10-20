<?php

use App\Model\Entity\Category;

$this->assign('title', 'En route vers le dev | Le Blog d\'un jeune développeur'); ?>

<section class="general-banner banner-layout-one">
    <div class="general-banner-inner">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($sliders as $slider) : ?>
                    <div class="swiper-slide  banner-card">
                        <div class="featured-post-image">
                            <img src="<?= $slider->img ?>" alt="....">
                            <div class="mask"></div>
                        </div>
                        <!-- // featured-post-image -->
                        <div class="featured-content-holder">
                            <div class="featured-content-meta">
                                <a href="#"><span class="category"><?= $slider->category ?></span></a>
                            </div>
                            <div class="featured-content-title">
                                <h2><a href="#"><?= $slider->title ?></a></h2>
                            </div>
                            <div class="featured-posted-date">
                                <span class="posted-date"><?= $slider->created ?></span>
                            </div>
                        </div>
                        <!-- // featured-content-holder -->
                    </div>
                <?php endforeach ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!-- // general banner inner -->
</section>
<div class="container">
    <div class="main-post-area-wrapper main-post-area-layout-one">
        <div class="main-post-area-inner">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="main-post-area-holder">
                        <article class="post-details-holder">
                        <?php $i= 0 ?>
                            <?php foreach ($articles as $article) : ?>
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
                                        <a <?= $this->Html->link('Voir l\'article', ['controller' => 'blog', 'action' => 'article', $article->id]) ?></a>
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
                                                    <span class="post-comment-count"><a href="#"><?= $nbComments[$i] ?> commentaire</a></span>
                                                </div>
                                            </div>
                                            <!-- // col 4 -->
                                        </div>
                                        <!-- // row -->
                                    </div>
                                    <?php $i = $i+1; ?>
                                <?php endforeach ?>
                        </article>
                        <!-- // post-details-holder -->
                    </div>
                    <!-- // main-post-area-holder -->
                </div>
                <!-- // col -->