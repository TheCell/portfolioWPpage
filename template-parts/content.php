<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple_Diverse_Portfolio
 */

?>
<div id="post-<?php the_ID(); ?>" class="project">
	<!-- <img class="projectTitleImage" src="exampleImage.jpg">-->
	<div class="infoOverProject">
		<?php
		if ( is_singular() ) :
			the_title( '<div class="projectTitle">', '</div>' );
		else :
			the_title( '<div class="projectTitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
		endif;
		
		?>
		<!--<div class="projectTitle"><a href="https://adasdsf.ch">1D tetris</a></div>-->
		<div class="projectCategory">
			<?php
			$categories_list = get_the_category_list( esc_html__( ', ', 'simple-diverse-portfolio' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( esc_html__( '%1$s', 'simple-diverse-portfolio' ), $categories_list ); // WPCS: XSS OK.
			}
			?>
		</div>
		<div class="projectDescription">
			
		</div>
	</div>
	
	<a href="<?php echo esc_url( get_permalink() ) ?>">
		<div class="projectTitleImage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
		<?php //simple_diverse_portfolio_post_thumbnail_link(); ?>
	</a>
</div>