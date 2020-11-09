<?php
/*
Template Name: Vintage
*/
?>
<?php get_header(); ?>
<article class="products-menu-article"> 
  <!-- products-navi -->
  <section class="products-navi">
    <div class="container-xl">
      <div class="row layerpage-headline-row">
        <div class="col-12">
          <h1 class="en">Products</h1>
        </div>
      </div>
      <div class="row products-menu-tab-row">
        <div class="col-12">
          <ul class="nav nav-tabs">
            <li class="nav-item en"><a href="#furniture" class="nav-link" data-toggle="tab">Furniture</a></li>
            <li class="nav-item en"><a href="#lighting" class="nav-link" data-toggle="tab">Lighting</a></li>
            <li class="nav-item en"><a href="#vintagefurniture" class="nav-link active" data-toggle="tab">Vintage Furniture</a></li>
            <li class="nav-item en"><a href="#artwork" class="nav-link" data-toggle="tab">Art Work</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Lighting-navi -->
  <section class="vintage-navi">
    <div class="container-xl">
      <div class="row">
        <div class="col-12">
          <nav class="collection-nav">
            <ul>
              <li class="en"><a href="">Modern</a></li>
              <li class="en"><a href="">Classic</a></li>
              <li class="en"><a href="">Industrial</a></li>
              <li class="en"><a href="">Others</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Lighting-content -->
  <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
  <section class="vintage-content">
    <div class="container-xl">
      <div class="row layerpage-headline-row">
        <div class="col-12">
          <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; // 繰り返し終了 ?>
  <?php else : // 条件分岐：投稿が無い場合は ?>
  <h2>投稿が見つかりません。</h2>
  <?php endif; // 条件分岐終了 ?>
  <section class="product-lineup-section">
    <div class="container-xl">
      <div class="row mb-5">
        <div class="offset-md-9 col-md-3 product-lineup-col">
          <div class="box">
            <p class="img-headline"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linup-btn.png" alt="ONLINE STORE"></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
<?php get_footer(); ?>
