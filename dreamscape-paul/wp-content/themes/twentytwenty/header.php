<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					
					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>
						
								
					</div><!-- .header-titles -->


				</div><!-- .header-titles-wrapper -->

	
					
						<div class="header-phone" style="float:right;">
							<span href="#" class="fa fa-phone"></span> +1234 5657 &nbsp; | 
							<span href="#" class="fa fa-envelope-o"></span> mail@crazydomains.com 
							<button style="border-radius: 80px;padding: 20px;">
								<span href="#" class="fa fa-paper-plane-o"></span> Book Now
							</button>
						</div>
						

			</div><!-- .header-inner -->


		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
 ?>
		<script>
			var myHeader = $('#site-header');
myHeader.data( 'position', myHeader.position() );
$(window).scroll(function(){
    var hPos = myHeader.data('position'), scroll = getScroll();
    if ( hPos.top < scroll.top ){
        myHeader.addClass('fixed');
    }
    else {
        myHeader.removeClass('fixed');
    }
});
			</script>