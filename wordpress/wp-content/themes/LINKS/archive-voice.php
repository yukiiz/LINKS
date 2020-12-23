<?php get_header() //header.phpを取得 
?>
<!-- main-content-->
<div class="main-content voice-page">
    <div class="ccontent-inner">
        <!-- ------------------------------------------------------title------------------------------------------------------------ -->
        <h1 class="title01 bold"><span class="color">お客様</span>の声</h1>
        <!-- -------------------------------------------------------box-------------------------------------------------------------- -->
        <article>
            <ul class="box03">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $my_query = new WP_Query(
                    array('paged' => $paged, 'posts_per_page' => 9, 'post_type' => 'voice')
                );
                ?>
                <?php if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="item move">
                    <a href="<?php the_permalink(); ?>">
                        <div class="item-img">
                            <div class="hover-img">
                                <?php the_post_thumbnail('single-post-thumbnail', array('title' => '' . get_the_title() . '')); ?>
                                <!-- サムネイルの画像タイトルを投稿タイトルへ変更 -->
                                <?php
                                        $image = get_post_meta(get_the_ID(), 'voice-img', true);
                                        $size =  array(200, 200);
                                        if ($image) {
                                            echo wp_get_attachment_image($image, $size);
                                        }
                                        ?>
                            </div>
                        </div>
                        <div class="passing">
                            <div class="passing-box">
                                <div class="passing-bar">
                                    <div class="passing-txt"><?php the_title(); ?></div>
                                </div>
                            </div>
                        </div>
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
</div>
<!-- -----------------------------------------------------------footer----------------------------------------------------------- -->
<?php get_footer();