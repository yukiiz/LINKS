<section>
    <div class="taxonomy-performance">
        <h2 class="title text-center">カテゴリー</h2>
        <?php // get_terms を使ったターム一覧の表示
        $taxonomy_terms = get_terms('cat_performance', 'hide_empty=0'); // タクソノミースラッグを指定
        if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {
            echo '<ul class="categry-box">';
            foreach ($taxonomy_terms as $taxonomy_term) : // foreach ループの開始

        ?>
        <li class="item <?php if (is_object_in_term(get_the_ID(), 'cat_performance', $taxonomy_term->slug)) {
                                    echo 'current';
                                } ?>"><a
                href="<?php echo get_term_link($taxonomy_term); ?>"><?php echo $taxonomy_term->name; ?></a></li>
        <?php
            endforeach; // foreach ループの終了
            echo '</ul>';
        }
        ?>
        </ul>
    </div>
</section>
<section>
    <?php dynamic_sidebar('デモサイトのサイドバー'); ?>
</section>