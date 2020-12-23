<?php get_header() //header.phpを取得 
?>
<!-- main-content-->
<div class="main-content performance-page">
    <div class="ccontent-inner">
        <!-- ------------------------------------------------------title------------------------------------------------------------ -->
        <h1 class="title01 bold"><span class="color">施工</span>事例</h1>
        <!-- -------------------------------------------------------main-------------------------------------------------------------- -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 performance-main order-sm-2 mb-5">
                    <article>
                        <h2 class="title text-center">全ての施工事例</h2>
                        <ul class="performance-box">
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $my_query = new WP_Query(
                                array('paged' => $paged, 'posts_per_page' => 9, 'post_type' => 'performance')
                            );
                            ?>
                            <?php if ($my_query->have_posts()) :
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li class="item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="item-img">
                                        <div class="hover-img">
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
                                    </div>
                                    <p class="pt-3 pb-5">
                                        <?php the_title(); ?>
                                    </p>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : //記事が1つも無い場合 
                    ?>
                        <p>現在表示できる記事はありません。</p><br>
                        <div class="btn">
                            <a href="<?php echo esc_url(home_url()); ?>/">TOPへ戻る</a>
                        </div>
                        <?php endif; ?>
                    </article>
                    <div class="pager">
                        <?php if (function_exists('wp_pagenavi')) { //ページネーションプラグイン
                            wp_pagenavi(array('query' => $my_query));
                        } ?>
                        <?php wp_reset_postdata();
                        wp_reset_query(); ?>
                    </div>
                </div>
                <!-- ------------------------------------------------------sidebar------------------------------------------------------------ -->
                <div class="col-sm-4 sidebar order-sm-1">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -----------------------------------------------------------footer----------------------------------------------------------- -->
<?php get_footer();