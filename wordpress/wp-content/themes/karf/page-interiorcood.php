<?php
/*
Template Name: Interior Coodinate
*/
?>
<?php get_header(); ?>
<article class="products-menu-article interiorcood-article"> 
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
  <!-- interiorcood-navi -->
  <section class="interiorcood-navi">
    <div class="container-xl">
      <div class="row">
        <div class="col-12">
          <nav class="collection-nav">
            <ul>
              <li class="nav-item en"><a href="#content01" class="nav-link" data-toggle="tab">01</a></li>
              <li class="nav-item en"><a href="#content02" class="nav-link" data-toggle="tab">02 </a></li>
              <li class="nav-item en"><a href="#content03" class="nav-link" data-toggle="tab">03</a></li>
              <li class="nav-item en"><a href="#content04" class="nav-link" data-toggle="tab">04</a></li>
              <li class="nav-item en"><a href="#content05" class="nav-link" data-toggle="tab">05</a></li>
              <li class="nav-item en"><a href="#content06" class="nav-link" data-toggle="tab">06 </a></li>
              <li class="nav-item en"><a href="#content07" class="nav-link" data-toggle="tab">07</a></li>
              <li class="nav-item en"><a href="#content08" class="nav-link" data-toggle="tab">08</a></li>
              <li class="nav-item en"><a href="#content09" class="nav-link" data-toggle="tab">09</a></li>
              <li class="nav-item en"><a href="#content10" class="nav-link" data-toggle="tab">10 </a></li>
              <li class="nav-item en"><a href="#content11" class="nav-link" data-toggle="tab">11</a></li>
              <li class="nav-item en"><a href="#content12" class="nav-link" data-toggle="tab">12</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- interiorcood-content -->
  <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
  <section class="interiorcood-content">
    <div class="container-xl">
      <div class="row layerpage-headline-row">
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
