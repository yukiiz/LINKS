<?php get_header(); //header.phpを取得 
?>
<!-- main-content-->
<div class="main-content voice-details-page">
    <div class="ccontent-inner">
        <!-- ------------------------------------------------------title------------------------------------------------------------ -->
        <h1 class="title01 bold"><span class="color">お客様</span>の声</h1>
        <!-- -------------------------------------------------------voicemain-------------------------------------------------------------- -->
        <?php if (have_posts()) : //条件分岐：投稿があるなら 
        ?>
        <?php while (have_posts()) : the_post(); //繰り返し処理開始 
            ?>
        <section class="voice-main">
            <ul class="voicemain-box">
                <li class="item item-img item01">
                    <?php
                            $image = get_post_meta(get_the_ID(), 'voice-img', true);
                            $size = 'full';
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                </li>
                <li class="item item-txt item02">
                    <h2 class="bold mb-5"> <?php the_title(); ?></h2>
                    <dl>
                        <dt class="live color">お住まい</dt>
                        <dd><?php echo get_post_meta(get_the_ID(), 'live', true); ?></dd>
                        <dt class="construction color">施工内容</dt>
                        <dd>
                            <?php echo get_post_meta(get_the_ID(), 'construction', true); ?>
                        </dd>
                        <dt class="building color">建物詳細</dt>
                        <dd>
                            <?php echo get_post_meta(get_the_ID(), 'building', true); ?>
                        </dd>
                    </dl>
                </li>
            </ul>
        </section>
        <!-- ------------------------------------------------------opinion------------------------------------------------------------ -->
        <section class="opinion">
            <h2 class="title02"><span>ご意見・感想</span></h2>
            <div class="txt-box">
                <p class="item">
                    <?php echo get_post_meta(get_the_ID(), 'opinion', true); ?>
                </p>
            </div>
        </section>
        <!-- ------------------------------------------------------ratings------------------------------------------------------------- -->
        <section class="ratings">
            <h2 class="title02"><span>依頼した際の評価</span></h2>
            <p class="rating">
                <span class="star5_rating"
                    data-rate="<?php echo get_post_meta(get_the_ID(), 'rating', true); ?>"></span>
            </p>
            <div class="case-box">
                <div class="item">
                    <?php
                            $image = get_post_meta(get_the_ID(), 'before-img', true);
                            $size = 'full';
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                    <p class="text-center bold mt-3">Before</p>
                </div>
                <div class="item">
                    <?php
                            $image = get_post_meta(get_the_ID(), 'after-img', true);
                            $size = 'full';
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                    <p class="text-center bold mt-3">After</p>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------link----------------------------------------------------------------- -->
        <section class="post-list-link">
            <div class="list-link text-center">
                <a href="/voice/">
                    <p class="post-list"><span class="color bold">お客様の声</span>一覧はこちら</p>
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
</div>
<!-- -----------------------------------------------------------footer----------------------------------------------------------- -->
<?php get_footer();