<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/imagehover.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

	<body <?php body_class(); ?>>
	  <!--Navigation bar-->
	  <nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a href="<?php echo site_url(); ?>" class="navbar-brand" href="index.html"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo-tecnatus.png" alt="placeholder+image"></a>
	      </div>
	      <div class="collapse navbar-collapse" id="myNavbar">
	      	<?php if(is_page(4)) {
	      		$url = "";
	      		//echo "is home";
      		} else {
	      		$url = site_url();
	      		//echo "is not home";
      		}
	      	?>
	        <ul class="nav navbar-nav navbar-right">
	          <li><a href="<?php echo site_url(); ?>/">Início</a></li>
	          <li><a href="<?php echo $url; ?>#noticias">Notícias</a></li>
	          <li><a href="<?php echo site_url(); ?>/sobre-a-tecnatus/">Sobre</a></li>
	          <li><a href="<?php echo $url; ?>#servicos">Serviços</a></li>          
	          <!-- <li><a href="#empresas">Empresas Incubadas</a></li> -->
	          <li><a href="<?php echo $url; ?>#equipe">Equipe</a></li>
	          <li><a href="<?php echo site_url(); ?>/documentos">Documentos</a></li>
	          <li><a href="<?php echo $url; ?>#footer">Contato</a></li>
	          <li class="btn-trial"><a href="<?php echo site_url(); ?>/processos-seletivos"><i class="fa fa-bullhorn" aria-hidden="true"></i> Processo Seletivo Aberto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <!--/ Navigation bar-->