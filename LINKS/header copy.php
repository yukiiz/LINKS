<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <mate name="sitelock-site-verification" content="6386" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="content-wrap">
        <div class="header-fix">
            <header class="header">
                <div class="content-inner">
                    <!-- header-logo -->
                    <h1 class="header-logo"><a href="<?php echo home_url(); ?>"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                                alt="c-design株式会社"></a></h1>
                    <!-- header-navi -->
                    <nav class="navi header-navi">
                        <!-- pc-menu -->
                        <ul class="pc-menu">
                            <li class="item"><a href="<?php echo home_url(); ?>/about/">会社概要</a></li>
                            <li class="item sub-btn hover"><a href="<?php echo home_url(); ?>/service/">サービス</a>
                                <div class="gray"></div>
                                <ul class="sub-list">
                                    <li class="item"><a href="https://cocrea.design/">
                                            <div class="sub-img">
                                                <div class="hover-img center"> <img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img01.png">
                                                </div>
                                            </div>
                                            <p>cocrea</p>
                                        </a></li>
                                    <li class="item"><a href="<?php echo home_url(); ?>/service/contract/">
                                            <div class="sub-img">
                                                <div class="hover-img center"><img
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img02.png">
                                                </div>
                                            </div>
                                            <p>電子契約</p>
                                        </a></li>
                                    <li class="item"><a href="<?php echo home_url(); ?>/service/workstyle-management/">
                                            <div class="sub-img">
                                                <div class="hover-img center"><img class="img-70"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/service-img03.png">
                                                </div>
                                            </div>
                                            <p>ワークスタイルマネジメント</p>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="item"><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
                            <li class="item"><a href="<?php echo home_url(); ?>/document/">資料ダウンロード</a></li>
                            <li class="item"><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
                        </ul>
                        <!-- sp-menu -->
                        <div class="open-close"><span class="line"></span><span class="txt">Menu</span></div>
                        <div class="sp-menu">
                            <ul class="list">
                                <li class="item"><a href="<?php echo home_url(); ?>">TOP</a></li>
                                <li class="item"><a href="<?php echo home_url(); ?>/about/">会社概要</a></li>
                                <li class="item"> <span class="sub-list-menu">サービス</span>
                                    <ul class="sub-list">
                                        <li class="item"><a href="https://cocrea.design/">cocrea</a></li>
                                        <li class="item"><a href="<?php echo home_url(); ?>/service/contract/">電子契約</a>
                                        </li>
                                        <li class="item"><a
                                                href="<?php echo home_url(); ?>/service/workstyle-management/">ワークスタイルマネジメント</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item"><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
                                <li class="item"><a href="<?php echo home_url(); ?>/document/">資料ダウンロード</a></li>
                                <li class="item"><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- /.content-inner -->
            </header>
        </div>
        <?php if (!(is_home() || is_front_page())) : ?>
        <div class="breadcrumb-area">
            <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
        </div>
        <?php endif; ?>