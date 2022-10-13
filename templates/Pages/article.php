<?php $this->assign('title', $articles->title); ?> 

<div class="general-single-page-layout single-page-layout-two">
        <div class="single-page-inner">
            <div class="main-post-area-holder">
                <article class="single-page-details-holder">
                    <div class="single-page-layout-two-top-style">
                        <div class="single-post-layout-two-fimage-and-few-meta">
                            <div class="post-fimage" style="background:url(<?= $this->Url->build($articles->img)?>)">
                                <div class="mask"></div>
                                <div class="container single-page-other-information-holder post-ttl-n-meta">
                                    <div class="posted-category">
                                        <div class="post-meta-category">
                                            <span><a href="#">Lifestyle</a></span>
                                            <span><a href="#">Health</a></span>
                                            <span><a href="#">Art</a></span>
                                        </div>
                                    </div>
                                    <div class="post-title">
                                        <h2><?= $articles->title ?></h2>
                                    </div>
                                    <!-- // post-title -->
                                    <div class="post-extra-meta">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="post-author">
                                                    <img src="/img/favicon.png" alt="....">
                                                    <span><a href="#">Alexis OLIVE</a></span>
                                                </div>
                                            </div>
                                            <!-- // col -->
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="posted-date">
                                                    <span><a href="#"><?= $articles->created ?></a></span>
                                                </div>
                                            </div>
                                            <!-- // col -->
                                        </div>
                                        <!-- // row -->
                                    </div>
                                    <!-- // post-extra-meta -->
                                </div>
                                <!-- // container -->
                            </div>
                            <!-- // post-fimage -->
                        </div>
                        <!-- // single-post-layout-two-fimage-and-few-meta -->
                        <div class="container single-page-other-information-holder">
                            <div class="post-the-content">
                                <?= $articles->body ?>
                            </div>
                            <!-- // post-the-content  -->
                            <div class="post-share">
                                <div class="share"></div>
                            </div>
                            <div class="tags-meta-and-others clearfix">
                                <div class="post-tags">
                                    <span><a href="#">lifestyle</a></span>
                                    <span><a href="#">Trending</a></span>
                                </div>
                                <div class="view-count">
                                    <span class="display-view-count"><i class="fa fa-eye" aria-hidden="true" style="padding-right: 5px;"></i><?= $articles->view?> vues</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // single-page-layout-two-top-style -->
                </article>
                <div class="container">
                    <div class="related-posts-wrapper">
                        <div class="related-posts-inner">
                            <div class="related-post-carousel owl-carousel">
                                <div class="grid-item item">
                                    <article class="post-details-holder layout-three-post-details-holder">
                                        <div class="post-image">
                                            <img src="./assets/dist/img/placeholder1280x720.png" alt="....">
                                        </div>
                                        <!-- // post image -->
                                        <div class="post-extra-details">
                                            <div class="post-title">
                                                <h2><a href="#">That evening at bali beach was wounderful then any other evening</a></h2>
                                            </div>
                                        </div>
                                        <!-- // post extra details -->
                                    </article>
                                    <!-- // article -->
                                </div>
                                <!-- // grid-item -->
                                <div class="grid-item item">
                                    <article class="post-details-holder layout-three-post-details-holder">
                                        <div class="post-image">
                                            <img src="./assets/dist/img/placeholder1280x720.png" alt="....">
                                        </div>
                                        <!-- // post image -->
                                        <div class="post-extra-details">
                                            <div class="post-title">
                                                <h2><a href="#">5 Reasons Why Ladies Prefer To Have Brown Hair And Black Dress</a></h2>
                                            </div>
                                        </div>
                                        <!-- // post extra details -->
                                    </article>
                                    <!-- // article -->
                                </div>
                                <!-- // grid-item -->
                            </div>
                            <!-- // related-post-carousel -->
                        </div>
                        <!-- // related-posts-inner -->
                    </div>
                    <!-- // related-posts-wrapper -->
                    <div class="comment-area-wrapper">
                        <div class="comment-area-inner">
                            <div class="comments">
                                <div class="comments__list">
                                    <div class="comment-listing-tile">
                                        <h4>Commentaires</h4>
                                    </div>
                                    <article class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="./assets/dist/img/profiles/placeholder300x300.png" alt=""></figure>
                                        <div class="rev-content">
                                            <?php foreach($comments as $comment): ?>
                                            <div class="rev-info"><strong><?= $comment->name ?></strong></div>
                                            <div class="rev-text">
                                                <p><?= $comment->comment ?></p>
                                            </div>
                                            <div class="rev-reply">
                                                <a href="#"><span><i class="fa fa-reply" aria-hidden="true"></i> Reply</span></a>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </article>
                                </div>
                                <!-- // comments__list -->
                                <div class="comment-box">
                                    <div class="comment-box-tile">
                                        <h4>Laissez un commentaire</h4>
                                    </div>
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
                                <!-- // comment-box -->
                            </div>
                        </div>
                        <!-- // comment-area-inner -->
                    </div>
                    <!-- // comment-area-wrapper -->
                </div>
                <!-- // container -->
            </div>
            <!-- // main-post-area-holder-->
        </div>
        <!-- // single-page-inner -->
    </div>