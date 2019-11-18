<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<section id="sobre" class="secondary">
			<div class="container">
				<div class="row">		
					<h1 class="page-header"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>