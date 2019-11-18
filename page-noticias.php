<?php /* Template Name: Noticias */ ?>

<?php get_header(); ?>

<div class="container container-post">
	<hr />
		<h1> TODAS AS NOTICIAS </h1>
	<hr />
	<?php $posts = query_posts( 'posts_per_page=10' ); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<content>
				<!-- post title -->
				<h1>
					<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></strong>
				</h1>
				<!-- /post title -->
				<hr />
				<!-- post details -->
				<span class="date"><?php the_time('d/m/Y'); ?>  <?php the_time('G:i'); ?></span>
				<br></br>
				<p>
					<?php echo excerpt('50'); // Build your custom callback length in functions.php ?>
				</p>
				<!-- /post details -->
			</content>
			</br>
			<a href="<?php the_permalink(); ?>" class="more">Ver Noticia Completa</a>
			
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>
</div>

<?php get_footer(); ?>