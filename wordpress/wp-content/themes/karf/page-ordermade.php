<?php
/*
Template Name: Order Made
*/
?>
<?php get_header(); ?>
<article class="products-menu-article  ordermade-article"> 
  <!-- products-navi -->
  <section class="products-navi">
    <div class="container-xl">
      <div class="row layerpage-headline-row">
        <div class="col-12">
          <h1 class="en">Work Contents</h1>
        </div>
      </div>
      <div class="row details-menu-tab-row">
        <div class="col-12">
          <ul class="nav nav-tabs">
            <li class="nav-item en"><a href="<?php echo home_url(); ?>/order-made/">Order Made</a></li>
            <li class="nav-item en"><a href="<?php echo home_url(); ?>/interior-coodinate/" >Interior Coodinate</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- ordermade-navi -->
  <section class="ordermade-navi">
    <div class="container-xl">
      <div class="row">
        <div class="col-12">
          <nav class="collection-nav">
            <ul>
              <li class="nav-item en"><a href="#content01" class="nav-link" data-toggle="tab">01 Shelf</a></li>
              <li class="nav-item en"><a href="#content02" class="nav-link" data-toggle="tab">02 AV Board</a></li>
              <li class="nav-item en"><a href="#content03" class="nav-link" data-toggle="tab">03 Storage</a></li>
              <li class="nav-item en"><a href="#content04" class="nav-link" data-toggle="tab">04 Kitchen Cabinet</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>  
  <!-- ordermade-content -->
  <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
  <section class="ordermade-content">
    <div class="container-xl">
      <div class="row layerpage-headline-row contract-menu-panel-row">
        <div class="tab-content">
          <div class="col-12">
            <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; // 繰り返し終了 ?>
  <?php else : // 条件分岐：投稿が無い場合は ?>
  <h2>投稿が見つかりません。</h2>
  <?php endif; // 条件分岐終了 ?>
</article>
<?php get_footer(); ?>
