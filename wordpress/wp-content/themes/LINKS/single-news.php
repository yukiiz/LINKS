<?php get_header(); //header.phpを取得 
?>
<!-- main-content-->
<article class="main-content news-detail-page">
    <?php if (have_posts()) : //条件分岐：投稿があるなら 
    ?>
    <?php while (have_posts()) : the_post(); //繰り返し処理開始 
        ?>
    <div class="ccontent-inner">
        <!-- ------------------------------------------------------title------------------------------------------------------------ -->
        <h1 class="title01 bold"><span class="color"><?php the_title(); ?></span></h1>
        <!-- -------------------------------------------------------box-------------------------------------------------------------- -->
        <section class="main-txt">
            <div class="blog-header">
                <div class="date"><?php the_time('Y.m.d'); //投稿日時を表示 パラメータで書式を指定 
                                            ?></div>

                <span class="category <?php $terms = wp_get_object_terms($post->ID, 'cat_news');
                                                foreach ($terms as $term) {
                                                    echo $term->slug . '';
                                                } ?>"><?php the_terms($post->ID, 'cat_news'); //投稿の属するカテゴリー名をすべて表示 パラメータで区切り文字を指定 
                                                        ?></span>

            </div>
            <div class="blog-body">
                <?php the_content(); //投稿（固定ページ）の本文を表示 
                        ?>
            </div>
        </section>
        <section class="post-list-link">
            <div class="list-link text-center">
                <a href="/news/">
                    <p class="post-list"><span class="color bold">news</span>一覧はこちら</p>
                </a>
            </div>
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
</article>
<!-- -----------------------------------------------------------footer----------------------------------------------------------- -->
<?php get_footer();