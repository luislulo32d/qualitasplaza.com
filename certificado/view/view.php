<!DOCTYPE html>
<html lang="es">
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<?php header('Content-Type: text/html; charset=UTF-8'); ?>
		
		
		<title>Certificación / Qualitas Plaza</title>
		<meta name="robots" content="nofollow">
	<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/certificado/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/certificado/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/certificado/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/certificado/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/certificado/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/certificado/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/certificado/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/certificado/img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/certificado/img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/certificado/img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/certificado/img/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/certificado/img/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/certificado/img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/certificado/img/favicon/manifest.json">
<link rel="mask-icon" href="/certificado/img/favicon/safari-pinned-tab.svg">
<?php //TODO el link "mask-icon" debe tener el atributo --> color="#F9690E" <-- ::  fue eliminado para lograr la validacion de W3
?>
<link rel="shortcut icon" href="/certificado/img/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#f9690e">
<meta name="msapplication-TileImage" content="/certificado/img/favicon/mstile-144x144.png">
<meta name="msapplication-config" content="/certificado/img/favicon/browserconfig.xml">
<meta name="theme-color" content="#f9690e">
	<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap css file-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><!-- Font awesome css file-->
	<!-- Certificado structure css file -->
		<link href="/certificado/css/certificado.css" rel="stylesheet">

		<script type="text/javascript">
			var baseURL = "<?= $request->getHostInfo(); ?>";
		</script>
	</head>
	<body>
	
	<a class="scrollToTop" href="#" style="display: inline;"><i class="fa fa-angle-up"></i></a>
		
<!--nav class="navbar navbar-default navbar-static-top"-->
<header class="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
    		<div class="navbar-header">
			<!-- Navigation mobile trigger button -->
			<button type="button" class="navbar-toggle navbar-toggle-left js-navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav-collapse" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
       			<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
			<a class="navbar-brand" href="/" title="Qualitas Plaza e-Center">
                <img src="/certificado/img/qualitasplaza.png" alt="Qualitas Plaza" height="50">                
            </a>
           </div>

           <div class="navbar-collapse collapse" id="top-nav-collapse">
            	<!--ul class="nav navbar-nav">
					<li>
                        <a href="/servicios">Servicios</a>
                    </li>
                    <li>
                        <a href="/suscripciones">Planes y tarifas</a>
                    </li>
				</ul-->
				
                <ul class="nav navbar-nav navbar-right">
					<!--li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
    						<span class="icon-text language-value">Español</span>
    						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu js-lang-dropdown" role="menu">
                        	<li>
			                    <a href="#">English</a>
                			</li>
                        </ul>
                    </li-->
                    <li>
				        <a class="btn btn-default btn-sm navbar-btn link" href="/">Acceder</a>
    				</li>
                </ul>
			</div>
		</div>
	</nav>
</header>
		
<section class="container page-container">

<div class="container section-container">

	<div class="page-header">
		<h1 style="text-align: center;">
			<img src="/certificado/img/favicon/android-chrome-48x48.png" alt="Logo QP"/>
			Perfil para "<?= $model->nombre; ?>" <small> <?= $model->url; ?> </small></h1>
	</div>
	
	<div class="row">
		<div class="col-md-6 col-lg-5">
			<div class="div-monitor">
				<a href="http://<?= $model->url; ?>" target="_blank" rel="noopener">
					<img class="monitor imagen-preview" src="/certificado<?= $model->imgVistaPrevia; ?>" alt="preview <?= $model->url; ?>"/>
					<img class="monitor" src="/certificado/img/monitor.png" alt="monitor"/>
				</a>
			</div>
		</div>
		<div class="col-md-6 col-lg-7">
			<h2 class="title-s">Certificados aprobados previa auditoría:</h2>
		<?php
		if($model->isValidacionWeb > 0){ ?>
			<a href="#validacionWeb"><img src="/certificado/img/sello/ins_C02-min.png" width="300" height="130" alt="QualitasPlaza Web compliance" /></a>
		<?php 
		}
		if($model->isAcreditacionEmpresa > 0){ ?>
			<a href="#acreditacionEmpresa"><img src="/certificado/img/sello/ins_C01-min.png" width="300" height="130" alt="QualitasPlaza e-Commerce assurance" /></a>
		<?php 
		}
		if($model->isCertificacion > 0){  ?>
			<a href="#certificacion"><img src="/certificado/img/sello/ins_C03-min.png" width="300" height="130" alt="QualitasPlaza Web online customer experience" /></a>
		<?php 
		} ?>
		</div>
	</div>
	<hr />
	<div class="row">
		<div class="col-md-12">
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active">
  	<a href="#informacionContacto" aria-controls="informacionContacto" role="tab" data-toggle="tab">Información General</a>
  </li>
<?php
if($model->isValidacionWeb > 0){ ?>
  <li role="presentation">
  	<a href="#validacionWeb" aria-controls="validacionWeb" role="tab" data-toggle="tab">Validación de Calidad Web</a>
  </li>
<?php 
}
if($model->isAcreditacionEmpresa > 0){ ?>
  <li role="presentation">
  	<a href="#acreditacionEmpresa" aria-controls="acreditacionEmpresa" role="tab" data-toggle="tab">Buenas Prácticas</a>
  </li>
<?php
}
if($model->isCertificacion > 0){ ?>
  <li role="presentation">
  	<a href="#certificacion" aria-controls="certificacion" role="tab" data-toggle="tab">Certificación</a>
  </li>
<?php
} ?>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="informacionContacto">
	<h2 class="title-ie">Información de Contacto</h2>
	<?php
	    	include dirname(__FILE__) . '/_infoEmpresa.php';
	?>
</div>
<?php
if($model->isValidacionWeb > 0){ ?>
<div role="tabpanel" class="tab-pane fade" id="validacionWeb">
	<h2 class="title-vcw">Validación de Calidad Web</h2>
	<?php
    	include dirname(__FILE__) . '/_validacionWeb.php';
	?>
</div>
<?php 
}
if($model->isAcreditacionEmpresa > 0){ ?>
<div role="tabpanel" class="tab-pane fade" id="acreditacionEmpresa">
	<h2 class="title-ae">Acreditación Empresarial de Buenas Prácticas del e-Commerce</h2>
	<?php
	   	include dirname(__FILE__) . '/_acreditacionEmpresa.php';
	?>
</div>
<?php
}
if($model->isCertificacion > 0){ ?>
<div role="tabpanel" class="tab-pane fade" id="certificacion">
	<h2 class="title-c">Certificación de Calidad Web y de Buenas Prácticas del e-Commerce</h2>
	<?php
	      	include dirname(__FILE__) . '/_certificacion.php';
	?>
</div>
<?php
} ?>
</div>


		</div>
	</div>
</div>

</section>

<!--=========== BEGAIN FOOTER ================-->
<?php 
$l_certificado = true;
?>


<footer class="container page-footer">
	<div class="container">
	    <div class="row">
   	    	<div class="col-sm-12 block-copyright pull-left">
				© 2018 Qualitas Plaza e-Center. Todos los derechos reservados.
	       	</div>
	    </div>
    </div>
</footer>

<?php //include '_footer.php'; ?> 
<!--=========== END FOOTER ================-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- For smooth animatin  -->
<script src="/certificado/js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="/certificado/js/bootstrap.min.js"></script>

<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwcuQm8kVDJx2r6KbV42suj8lN_tULVME"></script>
<script src="/certificado/js/jquery.ui.map.js"></script>


<script type="text/javascript">
var customScripts = {
    acordion: function () {
      	/*$('.pagina h4.panel-title a').click(function(){
      		if($(this).attr("aria-expanded")=='false'){
	      		$(this).children().addClass('glyphicon-minus').removeClass('glyphicon-plus');
	      	} else {
	      		$(this).children().addClass('glyphicon-plus').removeClass('glyphicon-minus');
	      	}
      	});
     
		$("#demo").on("hide.bs.collapse", function(){
    		$(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Open');
  		});
  		$("#demo").on("show.bs.collapse", function(){
    		$(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Close');
  		});*/
  		$('#accordion1').on('hide.bs.collapse', function (o) {
			//$(this).find('.collapse.in').prev().addClass('glyphicon-minus').removeClass('glyphicon-plus');
			console.log($('#accordion1 .collapse.in').prev());
		});
		$('#accordion1').on('show.bs.collapse', function (o) {
			//console.log($(this).find('.collapse.in'));
		});
		
		
    },
    gmap: function (gmap_position) {
    	if($('#map_canvas').length>0){ // si existe
			var zoom= $('#map_canvas').gmap('option', 'zoom');
      		$('#map_canvas').gmap().bind('init', function(ev, map) {
        		$('#map_canvas').gmap('addMarker', {'position': gmap_position, 'bounds': true});
        		$('#map_canvas').gmap('option', 'zoom', 16);
      		});
		}
    },
    init: function () {
    	//customScripts.navOpen();
    	customScripts.acordion();
    	<?= $model->exist('ic_gmapPosition')? 'customScripts.gmap("'.$model->ic_gmapPosition.'");' : ''; ?>
    }
}
$('document').ready(function () {
    customScripts.init();
});
</script>
	
	</body>
</html>