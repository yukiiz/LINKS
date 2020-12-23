<?php
/*
Template Name: 施工事例ページ
*/
?>
<?php get_header() //header.phpを取得 
?>
<!-- main-content-->
<div class="main-content performance-detail-page">
    <div class="ccontent-inner">
        <!-- ------------------------------------------------------title------------------------------------------------------------ -->
        <h1 class="title01 bold"><span class="color">施工</span>事例</h1>
        <!-- -------------------------------------------------------main-------------------------------------------------------------- -->
        <?php if (have_posts()) : //条件分岐：投稿があるなら 
        ?>
        <?php while (have_posts()) : the_post(); //繰り返し処理開始 
            ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 performance-main order-sm-2">
                    <section class="performance-detail">
                        <ul class="performance-detail-box">
                            <li class="item">
                                <div class="img">
                                    <?php
                                            $image = get_post_meta(get_the_ID(), 'performance-img', true);
                                            $size = 'full';
                                            if ($image) {
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                            ?>
                                </div>
                                <p class="categry"><span><?php the_terms($post->ID, 'cat_performance'); ?></span></p>
                                <h2 class="pt-3 pb-5">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="txt">
                                    <?php echo get_post_meta(get_the_ID(), 'performance-txt', true); ?></p>
                            </li>
                        </ul>
                        <p><?php the_content(); ?></p>
                    </section>
                    <section class="page-nav">
                        <?php // 現在の投稿に隣接している前後の投稿を取得する
                                $prev_post = get_previous_post(); // 前の投稿を取得
                                $next_post = get_next_post(); // 次の投稿を取得
                                if ($prev_post || $next_post) : // どちらか一方があれば表示
                                ?>
                        <ul class="list-link text-center">
                            <?php if ($prev_post) : // 前の投稿があれば表示 
                                        ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
                                <li class="item prev text-center">
                                    <span>前の記事へ</span><!-- <br /><?php echo get_the_title($prev_post->ID); ?> -->
                                </li>
                            </a>
                            <?php endif; ?>
                            <?php if ($next_post) : // 次の投稿があれば表示 
                                        ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
                                <li class="item next text-center">
                                    <span>次の記事へ</span><!-- <br /><?php echo get_the_title($next_post->ID); ?> -->
                                </li>
                            </a>
                            <?php endif; ?>
                        </ul>
                    </section>
                    <?php endif; ?>
                    <?php endwhile; // 繰り返し終了 
                    ?>
                    <?php else : //条件分岐：投稿が無い場合は 
                ?>
                    <h2>投稿がみつかりません。</h2>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></p>
                    <?php endif; //条件分岐終了 
                ?>
                </div>
                <!-- ------------------------------------------------------sidebar------------------------------------------------------------ -->
                <div class="col-sm-4 sidebar order-sm-1">
                    <aside>
                        <?php get_sidebar(); //sidebar.phpを取得 
                                ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------------------------footer----------------------------------------------------------- -->
<?php get_footer();