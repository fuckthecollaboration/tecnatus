<?php /* Template Name: Processos */ ?>

<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<section id="sobre" class="secondary">
			<div class="container">
				<div class="row">		
					<h1 class="page-header"><?php the_title(); ?></h1>
					<hr>
					<div class="col-sm-10 col-sm-offset-1">
						<div class="service-box text-center edital-aberto">
							<div class="icon-box">
								<i class="fa fa-file-pdf-o color-green"></i>
							</div>
							<div class="icon-text">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>