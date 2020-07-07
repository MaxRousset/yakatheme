<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>

</head>

	<?php get_header(); ?>
	<!-- Blog start -->
	<div class="main-container">


		<div class="blog-main">
			<?php	if (have_posts()) : while (have_posts()) : the_post();?>
				<article>
					<h2>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h2>

					<?php
						// check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						}

						the_content();
					?>

						<?php
						if ( is_home() ) {
						    // This is the blog posts index
								the_time('F jS, Y'); //the_author();
						} else {
						    // This is not the blog posts index
						}
						?>
					<hr/>
				</article>
			<?php endwhile;
				endif;
			?>


		</div> <!-- /.blog-main -->


		<!-- Sidebar-->
		<?php get_sidebar( 'primary' ); ?>

	</div> <!-- /.container -->



	<footer class="blog-footer">
	<?php wp_footer(); ?>
	<!--Made with love in larache-->
	</footer>

	</body>
</html>
