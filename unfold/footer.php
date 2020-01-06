<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Unfold
 */
?>




</div><!-- #content -->



	<footer id="footer" class="footer-area">
		<div class="footer-copyright pb-20">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright-text text-center pt-20">
					<p>&copy;2020 Grace Witter <br /> Template by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
				</div> <!-- copyright text -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> <!-- footer widget -->
</footer><!-- #footer -->
</div><!-- #page -->



<?php wp_footer(); ?>
<script>

//===== Prealoder

$(window).on('load', function(event) {
		$('.preloader').delay(500).fadeOut(500);
});

//===== Section Menu Active

var scrollLink = $('.page-scroll');
		// Active link switching
		$(window).scroll(function() {
		var scrollbarLocation = $(this).scrollTop();

		scrollLink.each(function() {

			var sectionOffset = $(this.hash).offset().top - 73;

			if ( sectionOffset <= scrollbarLocation ) {
				$(this).parent().addClass('active');
				$(this).parent().siblings().removeClass('active');
			}
		});
});

//===== Mobile Menu

$(".navbar-toggler").on('click', function() {
		$(this).toggleClass('active');
});

$(".navbar-nav a").on('click', function() {
		$(".navbar-toggler").removeClass('active');
});


//===== close navbar-collapse when a  clicked

$(".navbar-nav a").on('click', function () {
		$(".navbar-collapse").removeClass("show");
});
</script>
</body>
</html>
