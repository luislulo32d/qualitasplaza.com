<?php
/*
$id
$slug			// s51o87t1-remesasparavenezuela

$url_referente 	// remesasparavenezuela
$tipo 			// 1,2,3
$id_certificado // 51
$script
is_active 

*/
class selloModel{
	
	private $_db;
	private $_table;
	
	private $certificado;
	
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
        
		$this->_table = 'sello';
	}
	
	public function __get($name)
	{
		if($name == 'certificado')
			return $this->getCertificado();
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
		unset($this->certificado);
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
		unset($this->certificado);
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
	
	public function getCertificado()
	{
		if(empty($this->data)){
			return false;
		}
		if(isset($this->certificado)){
			return $this->certificado;
		}
		
		include_once 'certificado.php';
		$aux =  new certificadoModel();
        
		if($aux->loadById($this->data['id_certificado'])){
			$this->certificado = $aux;
			return $this->certificado;
		}
		return false;
	}
	
}