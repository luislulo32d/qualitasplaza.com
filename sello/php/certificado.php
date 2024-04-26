<?php
/*
$id		// 50
$slug	// s50-videosoneminute

$nombre			// Ej: videosONEminute
$url 			// Ej: www.videosoneminute.com
$imgVistaPrevia // dimensiones 380x216  "captura en base a 1280 width"


$ic_miembroDesde	// Ej: 19/07/2016
$ic_telefono		// Ej: +34 600 00 97 27.
$ic_cif				// Ej: B90069931
$ic_fax				// Ej: +34 600 00 97 27.
$ic_contacto		// Ej: Jose Luis Sanchez-Garrido García
$ic_correo			// Ej: info@videosoneminute.com
$ic_direccion		// Ej: C/ Escultor Duque Cornejo 2, Edificio Miró, 2º planta-oficina 5, 41500 Alcalá de Guadaíra, Sevilla, España
$ic_gmapPosition	// Ej: 37.3403681, -5.8290499

$isValidacionWeb		// mostrar logo?
$isAcreditacionEmpresa	// mostrar logo?
$isCertificacion		// mostrar logo?

$vw_validadoDesde	// Ej: 19/07/2016

$bp_acreditadoDesde	// Ej: 02/08/2016

$c_certificadoDesde // Ej: 02/06/2015

*/
class certificadoModel{
	
	private $_db;
	private $_table;
	
	private $data = array();
	
	function __construct()
	{
		require_once 'medoo.php';
        $this->_db = new medoo( array(
		    'database_type' => 'mysql',
		    'database_name' => 'market56_qualitas',
		    'server' => 'localhost',
		    'username' => 'market56_qualitas',
		    'password' => 'r?hSU2Y~S$}a',
		    'charset' => 'utf8',
	    ));
		$this->_table = 'certificado';
	}
	
	public function __get($name)
	{
		if(isset($this->data[$name]))
			return $this->data[$name];
		else
			return null;
	}
	
	public function exist($name)
	{
		if(isset($this->data[$name]))
			return true;
		else
			return false;
	}
	
	public function loadById($id)
	{
		unset($this->data);
		$data = $this->_db->get($this->_table, "*", array( "AND" => array(
						"id" => $id,
						"is_active" => 1
		)));
		
		if(is_array($data)){
			$this->data = $data;
			return true;
		}		
		return false;
	}
	
	public function loadBySlug($slug)
	{
		unset($this->data);
		$data = $this->_db->get($this->_table, "*", array( "AND" => array(
						"slug" => $slug,
						"is_active" => 1
		)));
		
		if(is_array($data)){
			$this->data = $data;
			return true;
		}
		return false;
	}
	
}