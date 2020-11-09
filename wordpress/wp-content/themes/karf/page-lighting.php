<?php
/*
Template Name: Lighting
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
            <li class="nav-item en"><a href="#lighting" class="nav-link active" data-toggle="tab">Lighting</a></li>
            <li class="nav-item en"><a href="#vintagefurniture" class="nav-link" data-toggle="tab">Vintage Furniture</a></li>
            <li class="nav-item en"><a href="#artwork" class="nav-link" data-toggle="tab">Art Work</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Lighting-navi -->
  <section class="lighting-navi">
    <div class="container-xl">
      <div class="row">
        <div class="col-12">
          <nav class="collection-nav">
            <ul>
              <li class="en"><a href="">Luciol</a></li>
              <li class="en"><a href="">Little</a></li>
              <li class="en"><a href="">Holz</a></li>
              <li class="en"><a href="">Knot</a></li>
              <li class="en"><a href="">Enouph</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
	<!-- Lighting-content -->
  <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
  <section class="lighting-content">
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
	<!-- product-lineup-section -->
  <section class="product-lineup-section">
    <div class="container-xl">
      <div class="row mb-5">
        <div class="col-12 product-lineup-col">
          <div class="box">
            <p class="en lineup-headline">Lineup</p>
            <div class="d-lg-flex justify-content-between align-items-center">
              <p class="txt mb-lg-0 mb-3">目指す何十年経っても新鮮さを失わない家具、住まいのあり方。それをひもとくうちに、ひとつのキーワードが見えてきました。</p>
              <p class="img-headline"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linup-btn.png" alt="ONLINE STORE"></a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-lineup-list">
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-coffeetable.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname">Coffee table 60</p>
              </div>
              <div class="hover info">
                <p class="more">more information<br>
                  <span>ONLINE STORE</span></p>
                <p class="productname">Coffee table 60</p>
                <p class="size">W600 / D600 / H400</p>
                <p class="price">48,000円(税抜)</p>
              </div>
              </a> </div>
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-product02.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname">Stool</p>
              </div>
              <div class="hover info"> </div>
              </a> </div>
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-product03.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname">1 Sheet</p>
              </div>
              <div class="hover info"> </div>
              </a> </div>
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-product04.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname"></p>
              </div>
              <div class="hover info"> </div>
              </a> </div>
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-product05.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname"></p>
              </div>
              <div class="hover info"> </div>
              </a> </div>
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-product06.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname"></p>
              </div>
              <div class="hover info"> </div>
              </a> </div>
            <div class="product-lineup-block"> <a href="">
              <p class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tolime-product07.jpg" alt="" class="mw-100"></p>
              <div class="nohover info">
                <p class="productname"></p>
              </div>
              <div class="hover info"> </div>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
<?php get_footer(); ?>
