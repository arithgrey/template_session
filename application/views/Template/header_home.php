<?= doctype('html5')?>
<html>
<head>
<title><?=$titulo?></title>	
	<!--TAGS-->	
	<?php
		$meta = array(
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'description', 'content' => 'Social I'),
	        array('name' => 'keywords', 'content' => 'social media, business intelligence, emprendimiento'),
	        array('name' => 'robots', 'content' => 'no-cache'),
	        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	    );	    
	?>
	<?=meta($meta);?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!--CSS-->
	<?=link_tag('application/css/foundation.min.css');?>
	<?=link_tag('application/css/normalize.css');?>
	<?=link_tag('application/css/foundation.css');?>
	<?=link_tag('application/css/main.css');?>	
	<?=link_tag('application/css/animate.css');?>	


	
	<!--JS-->
		<script src="<?=base_url('application/js/main.js')?>"></script>
		<script type="text/javascript" src="<?=base_url('application/js/jquery-2.1.1.min.js')?>"></script>
		<script type="text/javascript" src="<?=base_url('application/js/foundation.min.js')?>"></script>	
		<script type="text/javascript" src="<?=base_url('application/js/main.js')?>"></script>	
		<script src="<?=base_url('application/js/vendor/jquery.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.equalizer.js')?>"></script>
		<script src="<?=base_url('application/js/vendor/modernizr.js')?>"></script>
		<script src="<?=base_url('application/js/vendor/jquery.js')?>"></script>
		<script src="<?=base_url('application/js/foundation/foundation.js')?>"></script>
		
		<script>
		    $(document).foundation();
	    </script>


</head>
<body>	
		<header>

			<label id="first_text_main">Dawnig Dual</label>
			<label id="first_text_f">La plataforma de Marketing para eventos musicales</label>
				<label id="first_text">
				    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un imp.
				</label>
		</header>		
	<div id='wrapper' class='wrapper'>
		<div class='content' id='content'>


