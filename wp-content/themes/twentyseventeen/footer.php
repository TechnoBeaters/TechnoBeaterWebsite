<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			 <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        Technobeater
                    </div>
                    <ul class="footer-menu">
                        <li>About Us</li>
                        <li>Career</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
			<div class="copyright">
				Copyright © 2020 Technobeater | All Rights Reserved
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });

    $(document).ready(function () {
        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: false,

            // the magic
            responsive: [{

                breakpoint: 768,
                settings: {
                    arrows: false,
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
        $(".service-slider").slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: false,

            // the magic
            responsive: [{

                breakpoint: 768,
                settings: {
                    arrows: false,
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
    });
</script>
</html>
