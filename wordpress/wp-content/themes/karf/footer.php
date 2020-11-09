	</main>
	
	<footer id="footer">
		<div class="container-xl">
			<div class="row">
				<div class="col-12">
					<nav class="footer-nav">
						<ul>
							<li><a href="<?php echo home_url(); ?>">会社概要</a></li>
							<li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
							<li><a href="<?php echo home_url(); ?>">リクルート</a></li>
							<li><a href="<?php echo home_url(); ?>">プライバシー・ポリシー</a></li>
						</ul>
					</nav>
					<p class="address">3-10-11 Meguro, Meguro-ku Tokyo 153-0063, Japan    tel.03-5721-3931</p>
					<p class="copy">karf all rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/smooth-scroll.polyfills.min.js"></script>
<script>
var scroll = new SmoothScroll('a[href*="#"]', {
	header: '#header',
	easing:'easeOutQuad',
	speed: 1000,
	updateURL: false,
});	
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/footerFixed.js"></script>
<script>
$(function () {
  $(".nav-link").click(function () {
      $(".tab-content").addClass("panelactive");
  });
});
</script>
<script>
function init() {
    var px_change   = 50;
    window.addEventListener('scroll', function(e){
        if ( $(window).scrollTop() > px_change ) {
            $("header").addClass("opacity-header");

        } else if ( $("header").hasClass("opacity-header") ) {
            $("header").removeClass("opacity-header");
        }
    });
}
window.onload = init();
</script>
<?php wp_footer(); ?>
</body>
</html>