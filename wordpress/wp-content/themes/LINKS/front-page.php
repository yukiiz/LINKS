<?php
/*
Template Name: トップページ
*/
?>
<?php get_header() //header.phpを取得 
?>
<!-- main-content-->
<div class="top-page">
    <!-- main-visual -->
    <section class="top-page__main-visual-bg">
        <div class="content-inner">
            <h1 class="title bold">放つ魅力、輝きずっと。</h1>
        </div>
        <div class="main-img main-img01"></div>
        <div class="main-img main-img02"></div>
        <div class="main-img main-img03"></div>
        <!-- /.content-inner -->
    </section>
    <!-- infomation -->
    <section class="top-page__infomation animation">
        <div class="content-inner">
            <div class="box center">
                <div class="inner">
                    <h2 class="title bold"><span class="color">新着</span>情報</h2>
                    <ul class="list">
                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $my_query = new WP_Query(
                            array('paged' => $paged, 'posts_per_page' => 3, 'post_type' => 'news')
                        );
                        ?>
                        <?php if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="item">
                            <span class="date"><?php the_time('Y.m.d'); //投稿日時を表示 パラメータで書式を指定 
                                                        ?></span>
                            <span class="category <?php $terms = wp_get_object_terms($post->ID, 'cat_news');
                                                            foreach ($terms as $term) {
                                                                echo $term->slug . '';
                                                            } ?>"><?php the_terms($post->ID, 'cat_news'); //投稿の属するカテゴリー名をすべて表示 パラメータで区切り文字を指定 
                                                                    ?></span>
                            <span class="txt"><a class="bold"
                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                        </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <a href="<?php echo home_url(); ?>/news/" class="news-link">お知らせはこちら</a>
            </div>
        </div>
        <!-- /.content-inner -->
    </section>
    <!-- reason -->
    <section class="top-page__reason animation">
        <div class="content-inner">
            <div class="inner">
                <h2 class="title bold text-center">
                    <span class="color">選</span>ばれる理由
                </h2>
                <ul class="list">
                    <li class="item_box">
                        <p class="center">
                            <span class="box_mumber color bold">01</span>
                            <span class="box-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon01.png"
                                    alt="" /></span>
                            <span class="txt">信頼</span>
                        </p>
                    </li>
                    <li class="item_box">
                        <p class="center">
                            <span class="box_mumber color">02</span>
                            <span class="box-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon02.png"
                                    alt="" /></span>
                            <span class="txt">誠実</span>
                        </p>
                    </li>
                    <li class="item_box">
                        <p class="center">
                            <span class="box_mumber color">03</span>
                            <span class="box-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon03.png"
                                    alt="" /></span>
                            <span class="txt">安心</span>
                        </p>
                    </li>
                    <li class="item_box">
                        <p class="center">
                            <span class="box_mumber color">04</span>
                            <span class="box-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon04.png"
                                    alt="" /></span>
                            <span class="txt">技術</span>
                        </p>
                    </li>
                    <li class="item_box">
                        <p class="center">
                            <span class="box_mumber color">05</span>
                            <span class="box-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon05.png"
                                    alt="" /></span>
                            <span class="txt">実績</span>
                        </p>
                    </li>
                    <li class="item_box">
                        <p class="center">
                            <span class="box_mumber color">06</span>
                            <span class="box-img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon06.png"
                                    alt="" /></span>
                            <span class="txt">安心</span>
                        </p>
                    </li>
                </ul>
                <div class="link">
                    <a href="<?php echo home_url(); ?>/reason/" class="color bold">選ばれる理由へ</a>
                </div>
            </div>
            <img class="top-icon07" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon07.png"
                alt="" />
            <img class="top-icon08" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon08.png"
                alt="" />
            <img class="top-icon09" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon09.png"
                alt="" />
        </div>
        <!-- /.content-inner -->
    </section>
    <!-- voice -->
    <section class="top-page__voice">
        <div class="box animation02">
            <div class="item-left img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-img02.jpg" alt="" />
            </div>
            <div class="item-right inner">
                <h2 class="title bold text-center">
                    <span class="color">お客様</span>の声
                </h2>
                <p class="txt text-center">施行したお客様からいただいた、意見や感想を紹介いたします </p>
                <div class="link">
                    <a href="<?php echo home_url(); ?>/voice/" class="color bold">お客様の声へ</a>
                </div>
            </div>
        </div>
        <p class="bg-title bold">VOICE</p>
    </section>
    <!-- performance -->
    <section class="top-page__performance">
        <div class="inner">
            <h2 class="title bold text-center">
                <span class="color">施工</span>実績
            </h2>
            <ul class="list slick-wrp slider">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $my_query = new WP_Query(
                    array('paged' => $paged, 'posts_per_page' => 12, 'post_type' => 'performance')
                );
                ?>
                <?php if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="item_box">
                    <a class="bold" href="<?php the_permalink(); ?>">
                        <div class="box-img">
                            <?php the_post_thumbnail('single-post-thumbnail', array('title' => '' . get_the_title() . '')); ?>
                            <!-- サムネイルの画像タイトルを投稿タイトルへ変更 -->
                            <?php
                                    $image = get_post_meta(get_the_ID(), 'performance-img', true);
                                    $size =  array(200, 200);
                                    if ($image) {
                                        echo wp_get_attachment_image($image, $size);
                                    }
                                    ?>
                        </div>
                        <div class="inner">
                            <p>
                                <span class="date"><?php the_time('Y.m.d'); //投稿日時を表示 パラメータで書式を指定 
                                                            ?></span>
                                <span class="category"><?php
                                                                if ($terms = get_the_terms($post->ID, 'cat_performance')) {
                                                                    foreach ($terms as $term) {
                                                                        echo $term->name;
                                                                    }
                                                                }
                                                                ?></span>
                                <span class="txt"><?php the_title(); ?></span>
                            </p>
                        </div>
                    </a>
                </li>
                <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
            <div class="link">
                <a href="<?php echo home_url(); ?>/performance/" class="color bold">施工実績一覧へ</a>
            </div>
        </div>
        <!-- /.content-inner -->
    </section>
    <!-- guide -->
    <section class="top-page__guide inview">
        <div class="box">
            <div class="inner animation">
                <h2 class="title bold text-center">
                    <span class="color">お問い合わせ</span>の流れ
                </h2>
                <ul class="list">
                    <li class="item">
                        <div class="item-img">
                            <span class="number bold">
                                <p class="center">1</p>
                            </span>
                            <span>
                                <img class="center"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon10.png"
                                    alt="" /></span>
                            <span>
                                <p class="txt">お問い合わせ</p>
                            </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-img">
                            <span class="number bold">
                                <p class="center">2</p>
                            </span>
                            <span>
                                <img class="center"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon11.png"
                                    alt="" /></span>
                            <span>
                                <p class="txt">お見積り提示</p>
                            </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-img">
                            <span class="number bold">
                                <p class="center">3</p>
                            </span>
                            <span>
                                <img class="center"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon12.png"
                                    alt="" /></span>
                            <span>
                                <p class="txt">ご契約</p>
                            </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-img">
                            <span class="number bold">
                                <p class="center">4</p>
                            </span>
                            <span>
                                <img class="center"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon13.png"
                                    alt="" /></span>
                            <span>
                                <p class="txt">入金確認</p>
                            </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-img">
                            <span class="number bold">
                                <p class="center">5</p>
                            </span>
                            <span>
                                <img class="center"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon14.png"
                                    alt="" /></span>
                            <span>
                                <p class="txt">日時選定</p>
                            </span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-img">
                            <span class="number bold">
                                <p class="center">6</p>
                            </span>
                            <span>
                                <img class="center"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon15.png"
                                    alt="" /></span>
                            <span>
                                <p class="txt">施工・納品</p>
                            </span>
                        </div>
                    </li>
                </ul>
                <div class="link">
                    <a href="<?php echo home_url(); ?>/guide/" class="color bold">工事までの流れへ</a>
                </div>
            </div>
        </div>
    </section>
    <!-- link -->
    <section class="top-page__link">
        <div class="inner">
            <p class="center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon16.png" alt="" />
            </p>
            <ul class="list">
                <li class="item">
                    <a class="hover-img" href="<?php echo home_url(); ?>/contact/"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon17.png" alt="" /></a>
                </li>
                <li class="item">
                    <a class="hover-img" href="<?php echo home_url(); ?>/faq/"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon18.png" alt="" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- coating -->
    <section class="top-page__coating inview">
        <div class="box animation02">
            <div class="item-right img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-img12.jpg" alt="" />
            </div>
            <div class="item-left inner">
                <h2 class="title bold text-center">
                    <span class="color">コーティング</span>について
                </h2>
                <p class="txt text-center">LINKSで取扱いをしているコーティングの種類と内容の紹介をいたします</p>
                <div class="link">
                    <a href="<?php echo home_url(); ?>/coating/" class="color bold">コーティングについてへ</a>
                </div>
            </div>
        </div>
        <p class="bg-title bold">COATING</p>
    </section>
</div>
<!-- -----------------------------------------------------------footer----------------------------------------------------------- -->
<?php get_footer();