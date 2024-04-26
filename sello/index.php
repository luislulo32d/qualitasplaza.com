<?php

include_once 'php/request.php';
$request = new request();
$requestUri = '' . trim($request->getPathInfo(),'/');

    include_once 'php/sello.php';
	$model =  new selloModel();
    if ($model->loadBySlug($requestUri)) {

//        $ref = JG::request()->getReferente();
//        if (strpos($ref, $model->url_referente) !== false) {


/////////////////  view  ////////////////////

function isSeguro()
{
	return $seguro = isset($_SERVER['HTTPS']) && (strcasecmp($_SERVER['HTTPS'], 'on') === 0 || $_SERVER['HTTPS'] == 1)
           || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
}
$base = 'http'.(isSeguro()?'s://':'://') . $_SERVER['SERVER_NAME'];
$imagen = '';
switch ($model->tipo) {
	case '1':
		$imagen = $base . '/sello/img/ins_C02.png';
		break;
	case '2':
		$imagen = $base . '/sello/img/ins_C01.png';
		break;
	case '3':
		$imagen = $base . '/sello/img/ins_C03.png';
		break;
}

?>
<html><head></head><body style="width: 100%; margin: 0; padding: 0;">
	<a href="<?= $base; ?>/certificado/<?= $model->certificado->slug; ?>" target="_blank" rel="noopener">
		<div style="background-image:url('<?= $imagen; ?>');background-size: contain;background-repeat: no-repeat; width: 100%;height: 100%;"></div>
	</a>
</body></html>

/////////////////////////////////////////////

<?php
           
//       }
    }