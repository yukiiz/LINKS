<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <mate name="sitelock-site-verification" content="6386" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_url'); ?>/assets/slick/slick/slick-theme.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="content-wrap">
        <!-- header -->
        <header class="header">
            <div class="content-inner">
                <div class="header-logo">
                    <h1 class="logo">
                        <a class="bold color" href="/"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_w300.png" alt=""></a>
                    </h1>
                    <p class="header-img">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon19.png"
                                alt="web受付">
                        </span>
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon20.png"
                                alt="専任プランナー"></span>
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-icon21.png"
                                alt="全国対応"></span>
                    </p>
                </div>
                <nav class="header-navi">
                    <ul class="pc-menu01">
                        <li class="item item01">
                            <a href="<?php echo home_url(); ?>/reason/">選ばれる理由</a>
                        </li>
                        <li class="item item01">
                            <a href="<?php echo home_url(); ?>/voice/">お客様の声</a>
                        </li>
                        <li class="item item01"><a href="<?php echo home_url(); ?>/performance/">施工事例</a></li>
                        <li class="item item01">
                            <a href="<?php echo home_url(); ?>/guide/">施工の流れ</a>
                        </li>
                        <li class="item item01">
                            <a href="<?php echo home_url(); ?>/faq/">よくある質問</a>
                        </li>
                        <li class="item item01">
                            <a href="<?php echo home_url(); ?>/about/">LINKSについて</a>
                        </li>
                        <li class="item item01">
                            <a href="<?php echo home_url(); ?>/coating/">取り扱いコーティング</a>
                        </li>
                        <li class="item item02">
                            <a href="<?php echo home_url(); ?>/estimate/">
                                <div class="icon">
                                    <i class="fa fa-calculator"></i>
                                </div>
                                <p>無料お見積り相談</p>
                            </a>
                        </li>
                        <li class="item item03">
                            <a href="<?php echo home_url(); ?>/contact/">
                                <div class="icon"><i class="fa fa-envelope"></i></div>
                                <p>企業・個人お問い合わせ</p>
                            </a>
                        </li>
                    </ul>
                    <div class="open-close">
                        <span class="line"></span><span class="txt">Menu</span>
                    </div>
                    <div class="sp-menu">
                        <ul class="list">
                            <li class="item"><a href="/">TOP</a></li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/reason/">選ばれる理由</a>
                            </li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/voice/">お客様の声</a>
                            </li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/performance/">施工事例</a>
                            </li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/guide/">施工の流れ</a>
                            </li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/faq/">よくある質問</a>
                            </li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/about/">LINKSについて</a>
                            </li>
                            <li class="item item01">
                                <a href="<?php echo home_url(); ?>/coating/">取り扱いコーティング</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- /.content-inner -->
        </header>
        <!-- SpBottomNav START -->
        <div class="sp-btm-nav">
            <ul class="sp-btm-nav_list">
                <li class="item item01">
                    <a class="text-center" href="<?php echo home_url(); ?>/estimate/">
                        <div class="icon"><i class="fa fa-calculator"></i></div>
                        <p>無料お見積り相談</p>
                    </a>
                </li>
                <li class="item item02">
                    <a class="text-center" href="<?php echo home_url(); ?>/contact/">
                        <div class="icon"><i class="fa fa-envelope"></i></div>
                        <p>企業・個人お問い合わせ</p>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SpBottomNav END -->
        <?php if (!(is_home() || is_front_page())) : ?>
        <section class="breadcrumb-area">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
            </div>
        </section>
        <?php endif; ?>