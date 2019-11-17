<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple_Diverse_Portfolio
 */

?>
<?php
if ( is_singular() ) :
?>
<div id="post-<?php the_ID(); ?>" class="singleProjectMeta">
	<div class="stickyWrapper">
		<div class="projectTitleImage" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
		<!-- <img class="projectTitleImage" src="exampleImage.jpg">-->
		<div class="infoOverProject">
			<?php
			the_title( '<div class="projectTitle"><a href="' . esc_url( get_permalink() ) . '" >', '</a></div>' );
			?>
			<div class="projectCategory">
				<?php
				$categories_list = get_the_category_list( esc_html__( ', ', 'simple-diverse-portfolio' ) );
				if ( $categories_list ) {
					/* translators: 1: list of categories. */
					printf( esc_html__( '%1$s', 'simple-diverse-portfolio' ), $categories_list ); // WPCS: XSS OK.
				}
				?>
			</div>
			<div class="projectTags">
				TAGGED
				<?php
				$post_tags = get_the_tags();
				$separator = ' ';
				if (!empty($post_tags)) {
					foreach ($post_tags as $tag) {
						$output .= '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
					}
					echo trim($output, $separator);
				}
				?>
			</div>
			<div class="publishDate">
				PUBLISHED
				<?php 
				$post_date = get_the_date( 'd/m/Y' );
				echo "<a href='" . esc_url( get_permalink() ) . "'>" . $post_date . "</a>";
				?>
			</div>
			<div class="projectAuthor">
				BY <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
			</div>
		</div>
	</div>
</div>
<div class="singleProjectTextAndMedia">
	<?php echo the_content(); ?>
</div>

<?php
else :
?>

<div id="post-<?php the_ID(); ?>" class="project">
	<!-- <img class="projectTitleImage" src="exampleImage.jpg">-->
	<div class="infoOverProject">
		<?php
		the_title( '<div class="projectTitle"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
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
<?php
endif;
?>
