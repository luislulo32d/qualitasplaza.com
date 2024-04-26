<?php

function guardar_registro_en_remesas(){
	// Conectando, seleccionando la base de datos
	$link = mysql_connect('localhost', 'ustestt2_remeqp', 'AlBohN(+nX8X');
    if($link){
		if(mysql_select_db('ustestt2_newremesas')){
			$insert = 'insert into `wp_pagostarjetas` (`Monto`,`Numero_orden`) values('.$_GET["order_total"].','.$_GET["order_id"].')';
	        if(mysql_query($insert)){
			// Cerrar la conexión
		        mysql_close($link);
	        }
	        else
	         	echo "No se pudo insertar";
	    }
	    else
	    	echo "No se pudo conectar a la base de datos";
	}
	else
	    echo "No se pudo conectar al servidor mysql";
}
	
//Recibir parametros necesarios
//Calcular pago adicional para clientes
	if(isset($_GET['order_total'])){
		$f_fixed = 0.0;
		$f_percent = 1.9;// base 100
		$p_goal = (float) $_GET['order_total'];
		$cargo = $p_goal * ($f_percent / 100);
		$monto = $p_goal + $f_fixed + $cargo;
		
    }else{
	    echo "Error";
		$monto = 0;
	}
	$error = false;
	$success = false;
	
	$cur = $_GET['currency'];


	if($_POST){
		//Conectars stripe
		require(dirname(__FILE__) .'/php/stripe-php-3.6.0/init.php');
		if(isset($_POST['stripeToken'])){
    		if(isset($cur)){
    			$moneda = (strcmp($cur,"USD") == 0)? "usd" : ((strcmp($cur,"EUR") == 0)? "eur" : ((strcmp($cur,"CAD") == 0)? "cad": "gbp"));
	  			}
			\Stripe\Stripe::setApiKey("sk_live_78YH0s7sfXVC8V9lf0uqtuBf");
			
			try {
	               $montoStripe = number_format((float)$monto, 2, '.', '')*100;
				if (!isset($_POST['stripeToken']))
					throw new Exception("No funciona Token(stripe): Error en el servicio de pago.");
				\Stripe\Charge::create(array("amount" => $montoStripe,
		        		                    "currency" => $moneda,
		            		                "card" => $_POST['stripeToken']));
				if(strcmp($_GET['url_ok'],"https://remesasparavenezuela.com/pago-realizado-tarjeta/") == 0)
					guardar_registro_en_remesas();                           
				$success = 'Tu pago fué realizado con éxito';
				$url = $_GET['url_ok'];
				echo '<meta http-equiv="refresh" content="3;URL='.$url.'?order='.$_GET["order_id"].'"/>';
			} catch (\Stripe\Error\ApiConnection $e) {
			    // Network problem, perhaps try again.
			    $error = "Problemas de conexión con la plataforma, intente nuevamente";
			} catch (\Stripe\Error\InvalidRequest $e) {
		    	// You screwed up in your programming. Shouldn't happen!
		    	$error = "Petición inválida, intente nuevamente ";
			} catch (\Stripe\Error\Api $e) {
			    // Stripe's servers are down!
			    $error = "El servidor de pagos esta caído, intente más tarde";
			} catch (\Stripe\Error\Card $e) {
		    	// Card was declined.
		    	$error = "La tarjeta ha sido rechazada, intente de nuevo o pruebe con otra tarjeta";
			}
		}
	}
	
	
	$i=1;
	$detail_name  = array_key_exists('n1', $_GET)? $_GET['n1'] : false;
	$detail_value = array_key_exists('v1', $_GET)? $_GET['v1'] : false;
	$details = array();
	while ($detail_name && $detail_value){
		$details[] = array('n' => $detail_name, 'v' => number_format((float)$detail_value, 2, '.', ''));
		$i++;
		$detail_name  = array_key_exists('n'.$i, $_GET)? $_GET['n'.$i] : false;
		$detail_value = array_key_exists('v'.$i, $_GET)? $_GET['v'.$i] : false;
	}
	$simbolo = (strcmp($cur,"EUR") == 0)? "€ " : (((strcmp($cur,"USD") == 0 || strcmp($cur,"CAD") == 0))? "$ " : "£ ");		
	$monto = number_format((float)$monto, 2, '.', '');
	$url_ok = $_GET['url_ok'];
	$order_id = $_GET['order_id'];
	$d_name = $_GET['d_name'];
	$d_lastname = $_GET['d_lastname'];
	$cargo = number_format((float)$cargo, 2, '.', '');

///////////////////////////////////////////////////// VIEW //////////////////////////////

header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Qualitas Plaza - Pagos Remesas para Venezuela</title>
	<meta name="google-site-verification" content="Szb7iNHiVyhtSqF--0d_DAHHbmAYj1Dnj6BV4bDqxwg">
    <meta name="robots" content="nofollow">
    <link rel="shortcut icon" href="/pagos-paginas/img/favicon.ico">
    <link rel="stylesheet" href="/pagos-paginas/css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link id="orginal" href="/pagos-paginas/css/default-theme.css" rel="stylesheet">
    <link href="/pagos-paginas/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="apple-touch-icon" sizes="57x57" href="/pagos-paginas/img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/pagos-paginas/img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/pagos-paginas/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/pagos-paginas/img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/pagos-paginas/img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/pagos-paginas/img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/pagos-paginas/img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/pagos-paginas/img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/pagos-paginas/img/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/pagos-paginas/img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/pagos-paginas/img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/pagos-paginas/img/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/pagos-paginas/img/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/pagos-paginas/img/favicon/manifest.json">
	<link rel="mask-icon" href="/pagos-paginas/img/favicon/safari-pinned-tab.svg">
	<?php //TODO el link "mask-icon" debe tener el atributo --> color="#F9690E" <-- ::  fue eliminado para lograr la validacion de W3
	?>
	<link rel="shortcut icon" href="/pagos-paginas/img/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#f9690e">
	<meta name="msapplication-TileImage" content="/pagos-paginas/img/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="/pagos-paginas/img/favicon/browserconfig.xml">
	<meta name="theme-color" content="#f9690e">
<style>
 .color_one{
       background: #B9B3B2;
       color:white;
 }
 .color_dos{
       background: #9C9C9C;
       color: white;
 }
.color_tres{
       background: #e1e3e4;
}
#pagos_remesas{
	    background: url(/pagos-paginas/img/landing_pagos_4.jpg);
	    background-size: cover;
        background-repeat: no-repeat;
}
.section-pagos{
	  	border-radius: 5px;
	  	margin-top: 50px;
        margin-bottom: 20px;
        padding: 20px;
}
.pricingtables{
	  	width: 80%;
	  	margin-left: 10%;
}
.newrow{	
		font-size: 60px;
		color: white;
		position: absolute;
		bottom: 5%;
		right: 10%;
		text-shadow: 2px 2px 4px #000000;
		font-family: 'Lato', sans-serif;
}
.newrow li{
		font-size:  20px;
}
.list-inline {
		text-align: center;
		font-size: 50px;
		color: white;
}
.payment-menssage{
		text-align: center;
    	margin-top: 20px;
}

#popup {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1001;
}

.content-popup {
    margin:0px auto;
    margin-top:120px;
    position:relative;
    padding:20px;
    width:400px;
    min-height:200px;
    border-radius:4px;
    /*background-color: #dff0d8;*/
    background: rgba(255,255,255,.95); 
    box-shadow: 0 5px 5px #666666;
    border-color: #d6e9c6;
}

.content-popup h3 {
    color: #009C14;
    padding-bottom: 4px;
}

.content-popup p{
    text-align: center;
}

.popup-overlay {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
    display:none;
    background-color: #777777;
    cursor: pointer;
    opacity: 0.7;
}
.refresh-pupup{
	text-align: center;
	font-size: 40px;
	color: #F9690E;
}
</style>
</head>
<body id="pagos_remesas">
<section>
<!-- to display errors returned by createToken -->
<div class="payment-menssage">
<span class="payment-errors alert alert-danger" style="display: none"></span>
<?php if($error){ ?>
<span class="payment-errors alert alert-danger"><?= $error; ?></span>
<?php } ?>
</div>
<div id="popup" style="display: none;">
    <div class="content-popup">
        <div>
           <h3>Tu pago fue realizado con éxito</h3>
           <p>Estás siendo redirigido a <?= $url_ok; ?></p>
           <div class="refresh-pupup">
           <i class="fa fa-spinner fa-spin"></i>
           </div>
        </div>
    </div>
</div>
<div class="newrow">
	<p>Realiza tu pago</p>
	<ul>
		<li>Estás en una plataforma de pagos para PyMES.</li>
		<li>Pagos de manera rápida y confiable.</li>
	</ul>
</div>
<div class="section-pagos col-md-8">
	<div class="row">
		<?php if(isset($order_id)){ ?>
					<table class="table pricingtables">
						<tr>
							<td class="panel-heading fondo-negro" colspan="2">
								<h3 class="text-center"><?= "Pedido: " . $order_id; ?></h3>
							</td>
						</tr>
						<?php
							foreach ($details as $item) {
								echo '<tr class="color_one"><td>'.$item['n'].'</td><td>'.
									 $simbolo .' '. $item['v'].'</td></tr>';
							}
						?>
						<tr class="color_one">
							<td>Cargo por pago con tarjeta: </td>
							<td><?= $simbolo . $cargo; ?></td>
						</tr>
						<tr class="color_one">
							<td>Total: </td>
							<td><?= $simbolo . $monto; ?></td>
						</tr>
						<tr class="color_dos">
							<td>Cliente</td>
							<td></td>
						</tr>
						<tr class="color_tres">
							<td colspan="2"><?= $d_name;?> <?= $d_lastname;?></td>
						</tr>
					</table>
		<?php } ?>
		<div class="form-stripe col-md-6 col-md-offset-3">
	        <form method="post" id="payment-form">
	            <h4>Datos de la tarjeta</h4>
	            <div class="form-row form-group">
	                <label>Numero tarjeta</label>
	                <input type="text" size="24" autocomplete="off" class="card-number" maxlength="16" required/>
	            </div>
	            <div class="form-row form-group">
	                <label>CVC</label>
	                <input type="text" size="4" autocomplete="off" class="card-cvc" maxlength="4" required/>
	            </div>
	            <div class="form-row form-group">
	                <label>Expiración (MM/YYYY)</label>
	                <input type="text" size="2" class="card-expiry-month" maxlength="2" required/>
	                <span> / </span>
	                <input type="text" size="4" class="card-expiry-year" maxlength="4" required/>
	            </div>
                    <p>Este pago será procesado por una plataforma encriptada para su seguridad.  Nosotros no almacenaremos la información de su tarjeta.  El pago se reflejará en su estado de cuenta como Marketing Standard\XXXXXXXXXXXX 0208.</p>
	            <button type="submit" class="submit_btn submit-button form-btn">Pagar</button>
	        </form>
		</div>
	</div>
</div>
</section>
<div class="col-md-12">
	<ul class="list-inline footer-payment">
		<li><i class="fa fa-cc-amex"></i></li>
		<li><i class="fa fa-cc-mastercard"></i></li>
		<li><i class="fa fa-cc-visa"></i></li>
		<li><i class="fa fa-cc-stripe"></i></li>
	</ul>
</div>
<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
	            // this identifies your website in the createToken call below
	            Stripe.setPublishableKey('pk_live_AEOHteenr7Z5tHCE09SD5Srj');
	            function stripeResponseHandler(status, response) {
	                if (response.error) {
	                    // re-enable the submit button
	                    $('.submit-button').removeAttr("disabled");
	                    // show the errors on the form
	                    if(response.error.type=="card_error"){
	                    	var message_error = "Error con la tarjeta: ";

	                    	if(response.error.code=="invalid_number")
	                    		message_error+=" numero de tarjeta invalido.";
	                    	if(response.error.code=="invalid_expiry_year")
	                    		message_error+=" año de expiración invalido.";
	                    	if(response.error.code=="invalid_cvc")
	                    		message_error+=" cvc invalido.";
	                    	if(response.error.code=="incorrect_cvc")
	                    		message_error+=" cvc incorrecto.";
	                    	if(response.error.code=="incorrect_number")
	                    		message_error+=" numero de tarjeta incorrecto.";
	                    	if(response.error.code=="expired_card")
	                    		message_error+=" la tarjeta ha expirado.";
	                    	if(response.error.code=="card_declined")
	                    		message_error+=" la tarjeta fue rechazada.";
	                    	if(response.error.code=="missing")
	                    		message_error+=" no hay ninguna tarjeta de un cliente que está siendo cargada.";
	                    	if(response.error.code=="processing_error")
	                    		message_error+=" se ha producido un error al procesar la tarjeta.";
	                    	if(response.error.code=="invalid_expiry_month")
	                    		message_error+=" mes de expiración invalido.";

	     	               	$(".payment-errors").html(message_error);
	                    }else{
	                    	if(response.error.type=="api_connection_error"){
	                    		$(".payment-errors").html("Servicio no disponible en este momento, error #apix001");
	                    	}else{
	                    		if(response.error.type=="api_error"){
									$(".payment-errors").html("Servicio no disponible en este momento, error #apix002");
	                    		}else{
	                    			if(response.error.type=="authentication_error"){
	                    				$(".payment-errors").html("Servicio no disponible en este momento, error #authx001");
	                    			}else{
	                    				if(response.error.type=="invalid_request_error"){
	                    					$(".payment-errors").html("Servicio no disponible en este momento, error #invreqx001");
	                    				}else{
	                    					$(".payment-errors").html("Servicio no disponible en este momento, error #rtlimitx001");
	                    				}
	                    			}
	                    		}
	                    	}
	                    }
	                    
	                    $("html, body").animate({ scrollTop: 0 }, 600);
	                    $('.payment-errors').removeAttr("style");
	                } else {
	                    var form$ = $("#payment-form");
	                    // token contains id, last4, and card type
	                    var token = response['id'];
	                    // insert the token into the form so it gets submitted to the server
	                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
	                    // and submit
	                    form$.get(0).submit();
	                }
	            }
	            $(document).ready(function() {
	                $("#payment-form").submit(function(event) {
	                    // disable the submit button to prevent repeated clicks
	                    $('.submit-button').attr("disabled",true);
	                    // createToken returns immediately - the supplied callback submits the form if there are no errors
	                    Stripe.createToken({
	                        number: $('.card-number').val(),
	                        cvc: $('.card-cvc').val(),
	                        exp_month: $('.card-expiry-month').val(),
	                        exp_year: $('.card-expiry-year').val()
	                    }, stripeResponseHandler);
	                    return false; // submit from callback
	                });
	            });
	</script>
<script src="https://www.google-analytics.com/scr.js"></script>
<?php 

if($success)
echo "<script type='text/javascript'>$(document).ready(function(){ $('#popup').fadeIn('slow');$('.popup-overlay').fadeIn('slow');$('.popup-overlay').height($(window).height());$('#popup').removeAttr('style'); });</script>";

?>
</body>
</html>