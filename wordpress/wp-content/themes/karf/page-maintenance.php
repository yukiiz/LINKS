<?php
/*
Template Name: Maintenance& Materials
*/
?>
<?php get_header(); ?>
<?php get_header(); //header.phpを取得 ?>
<div id="content" class="clearfix">
<article class="maintenance-menu-article"> 
  <!-- maintenance-maintenance-menu -->
  <section class="maintenance-maintenance-menu">
    <div class="container-xl">
      <div class="row layerpage-headline-row">
        <div class="col-12">
          <h1 class="en categoryname">Maintenance&<br>
            Materials</h1>
        </div>
      </div>
    </div>
  </section>
  
  <!-- maintenance-menu -->
  <section class="maintenance-navi">
    <div class="container-xl">
      <div class="row details-menu-tab-row">
        <div class="col-6 col-md-3"> <a href="#content01" class="nav-link" data-toggle="tab"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maintenance-img01.png" alt="maintenance">
          <h3>Wood</h3>
          <h6>Maintenance</h6>
          <p>時間の変化とともに、変化する無垢の家具</p>
          </a> </div>
        <div class="col-6 col-md-3"> <a href="#content02" class="nav-link" data-toggle="tab"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maintenance-img02.png" alt="maintenance">
          <h3>Leather</h3>
          <h6>Maintenance</h6>
          <p>ソファやコーナーソファなど組み合わせること。</p>
          </a> </div>
        <div class="col-6 col-md-3"> <a href="#content03" class="nav-link" data-toggle="tab"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maintenance-img04.png" alt="maintenance">
          <h3>Sofa</h3>
          <h6>Materia</h6>
          <p>さまざまな空間にマッチするソファです<br>
            コーナーソファなど組み合わせること。</p>
          </a></div>
        <div class="col-6 col-md-3"> <a href="#content04" class="nav-link" data-toggle="tab"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maintenance-img05.png" alt="maintenance">
          <h3>Chair</h3>
          <h6>Materials</h6>
          <p>ちょっとしたひと手間で、<br>
            より長く気持ちの良いソファに</p>
          </a> </div>
      </div>
    </div>
  </section>
  <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
  <section class="maintenance-content">
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
  </div>
  </div>
  </div>
</article>
</div>
<?php
get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です
