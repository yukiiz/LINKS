<?php get_header(); //header.phpを取得 
?>
<!-- main-content-->
<div class="main-content news-page">
    <div class="content-inner">
        <!-- ------------------------------------------------------title------------------------------------------------------------ -->
        <h1 class="title01 bold">
            <span class="color">news</span>一覧
        </h1>
        <!-- -------------------------------------------------------box-------------------------------------------------------------- -->
        <article class="news-section">
            <div class="content-inner">
                <div class="box center">
                    <div class="inner">
                        <ul class="list">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $taxonomy_name  = get_query_var('taxonomy');
                            $tax_posts = get_posts(array('post_type' => get_post_type(), 'taxonomy' => $taxonomy_name, 'term' => $taxonomy->slug));
                            $term_var = get_query_var('term');
                            $my_query = new WP_Query();
                            $param = array(
                                'paged' => $paged,
                                'posts_per_page' => 9,
                                'post_type' => 'news',
                                'taxonomy' => $taxonomy_name,
                                'term' => $term_var,
                            );
                            $my_query->query($param);
                            ?>
                            <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li class="item">
                                <span class="date"><?php the_time('Y.m.d'); //投稿日時を表示 パラメータで書式を指定 
                                                            ?></span>
                                <span class="category <?php $terms = wp_get_object_terms($post->ID, 'cat_news');
                                                                foreach ($terms as $term) {
                                                                    echo $term->slug . '';
                                                                } ?>"><?php the_terms($post->ID, 'cat_news'); //投稿の属するカテゴリー名をすべて表示 パラメータで区切り文字を指定 
                                                                        ?></span>
                                <span class="post-title"><a class="bold"
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
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
        <div class="pager mb-5">
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