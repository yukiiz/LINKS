<?php get_header() //header.phpを取得 
?>

<?php if (have_posts()) : //条件分岐：投稿があるなら 
?>
<?php while (have_posts()) : the_post(); //繰り返し処理開始 
  ?>

<section <?php post_class(); //投稿の種類に応じたクラスを付加 
              ?>>

    <?php the_content(); //投稿（固定ページ）の本文を表示 
      ?>
</section>

<?php endwhile; // 繰り返し終了 
  ?>
<?php else : // 条件分岐：投稿が無い場合は 
?>

<h2>投稿が見つかりません。</h2>

<?php endif; // 条件分岐終了 
?>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です