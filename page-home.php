<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
	<div class="banner jumbotron">
		<div class="bg-color jumbotron">
			<div class="container">
				<div class="row">
					<div class="banner-text text-center">
                        <div class="text-border">
                            <h2 class="main-title-p1">DESENVOLVA SEU POTENCIAL</h2>>
                        </div>
							<h2 class="text-dec main-title-banner">EMPREENDEDOR</h2>
						<div class="intro-para text-center quote">
							<h2 class="main-title-p2">APRENDENDO HOJE. LIDERANDO AMANHÃ.</h2>
							<!--<p class="small-text main-title-banner">A <b>TECNATUS</b> visa estimular a criação de empresas a partir de inovações advindas dos cursos do Centro de Tecnologia (CT), Centro de Ciências Exatas e da Terra (CCET) e Instituto de Química (IQ) da UFRN, por meio da atuação de professores, servidores e alunos, apoiando empreendedores, empresas de tecnologia inovadora e startups.</p>-->
							<a class="btn get-quote" href="http://tecnatus.ct.ufrn.br/sobre-a-tecnatus/">Saiba mais</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel 
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  
			  <div class="carousel-inner" align="center">
			    
			    <div class="item active">
			      <a href="http://www.in.gov.br/web/dou/-/edital-n%C2%BA-1-de-25-de-abril-de-2019-86327340?inheritRedirect=true&redirect=%2Fsearch%3FqSearch%3Dtecnatus" target="_blank">
			      	<img src="<?php echo get_template_directory_uri(); ?>/img/editalTecnatus.jpg">
			      </a>
			      <div class="carousel-caption">
			      </div>
			    </div>
			  </div>
			  
			</div> Fim-Carousel -->
		</div>
	</div>
	
<!--
===== BAR DESCRIPTION BANNER ====
 -->
<!--<div class="bar">
	<div class="intro-para text-center quote">
	<p class="small-text">A <b>TECNATUS</b> visa estimular a criação de empresas a partir de inovações advindas dos cursos do Centro de Tecnologia (CT), Centro de Ciências Exatas e da Terra (CCET) e Instituto de Química (IQ) da UFRN, por meio da atuação de professores, servidores e alunos, apoiando empreendedores, empresas de tecnologia inovadora e startups.</p>
	</div>
</div>
-->	

<section id="noticias">
<div class="img-bg-notices jumbotron">
	<div class="header-section text-center">
		<h2 style="margin-top: 100px;margin-bottom: 40px; font-size: 35px">Notícias</h2>
	</div>
	<br/>
	<div class="container">
		<div class="row">
		<?php 
	      $args = array( 
	        'type' => 'post',
	        'posts_per_page' => 3,
	      );
	          
	      $lastPost = new WP_Query( $args );
	          
	      if( $lastPost->have_posts() ):
	    	while( $lastPost->have_posts() ): $lastPost->the_post();?>
			    <div class="col-md-4">
			    	<div class="row">
			    		<div class="col-md-11 card " style="background-color: #fff;">
			    			<div class="capa">
			    			<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->
							</div>
					        <div >
				            	<a href="<?php the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
				            </div>
				            
				            <div class="resumo">
				            	<p><?php echo excerpt('30'); ?></p>
				            </div>
				          	</a>
					        
					        <p class="date" style="position: absolute; bottom: 0px; "><?php the_time('d/m/Y'); ?>  <?php the_time('G:i'); ?></p>
				    	</div>
					</div>
			    </div>    
	    	<?php 
	        endwhile;   
	      	endif;
	  		wp_reset_postdata();
	  		?>
	  		</div>
		</div>

		<h2 style="text-align: center; margin-top: 3em;"><a class="ver-noticias" href=<?php echo site_url() . '/noticias' ?>>Ver Todas as Notícias</a></h2>
	</br>
</div>
</section>

<!--SERVIÇOS -->
<section id="servicos" class="section-padding bg-servicos">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2 style="color: #02C28A; font-size: 35px; margin-top: 120px;">Serviços</h2>
                <p class="text-subtitle-servicos">A Tecnatus oferece uma ambiência diferenciada para a criação
                e desenvolvimento de empresas/startups inovadoras de base tecnológica</p>
            </div>
            <div class="feature-info">
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right title-servicos">
                            <h4>Capacitação</h4>
                            <p style="color: white" font="font-family:OpenSans-Regular">Capacitação, treinamento e formação gerencial e tecnológica dos empreendedores.</p>

                        </div>
                        <div class="fea-img pull-left"></div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right title-servicos">
                            <h4>Proteção Intelectual</h4>
                            <p style="color: white">Auxílio na proteção de marcas e patentes, com o apoio do NIT - Núcleo de Inovação
                            Tecnológica da UFRN.</p>

                        </div>
                        <div class="fea-img pull-left"></div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right title-servicos">
                            <h4>Viabilização</h4>
                            <p style="color: white">Viabilização de parcerias cooperativas, de acesso a informações, bibliotecas e laboratórios</p>

                        </div>
                        <div class="fea-img pull-left"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="feature-info">
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right title-servicos">
                            <h4>Divulgação</h4>
                            <p style="color: white">Promoção e divulgação da incubadora e empreendimentos incubados por meio das diversas mídias
                            e eventos.</p>

                        </div>
                        <div class="fea-img pull-left"></div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right title-servicos">
                            <h4>Oportunidades</h4>
                            <p style="color: white">Prospecção de oportunidades de financiamento público e privado aos empreendimentos
                            participantes do programa de incubação</p>

                        </div>
                        <div class="fea-img pull-left"></div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right title-servicos">
                            <h4>Projetos</h4>
                            <p style="color: white">Colaboração com os empreendedores na elaboração de projetos que visem a captação de
                            investimentos e a prospecção de oportunidades.</p>

                        </div>
                        <div class="fea-img pull-left"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Equipe -->

<section id="equipe" class="section-padding bg-equipe">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2 style="margin-top: 130px;margin-bottom: 40px; font-size: 35px">Equipe</h2>

                <hr class="bottom-line" />

                <!-- ### Em construção ### -->

            </div>
            <div class="row">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name" style="margin-bottom: -10px;">Gerente Geral Executiva</p>
                        <p class="pm-staff-profile-title">Carla Wilza Souza de Paula Maitelli</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name" style="margin-bottom: -10px;">Gerentes Operacionais</p>
                        <p class="pm-staff-profile-title">Heliana Bezerra Soares<br>
                            Débora do Carmo Sousa</br>
                            Fernando José Volpi Eusébio de Oliveira</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pm-staff-profile-container">
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name" style="margin-bottom: -10px;">Assessora de Projetos e Empreendedorismo</p>
                        <p class="pm-staff-profile-title">Jéssyca de Sousa Gonçalves</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php the_content(); ?>

<?php get_footer(); ?>
