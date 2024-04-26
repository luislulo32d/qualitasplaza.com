<?php

include_once 'php/request.php';
$request = new request();
$requestUri = '' . trim($request->getPathInfo(),'/');

    include_once 'php/certificado.php';
	$model =  new certificadoModel();
	if ($model->loadBySlug($requestUri)) {
            
    // genera Accordion collapse Boostrap
	function generedCollapse($opc){
		echo '<div class="panel-group" id="'.$opc['name'].'" role="tablist" aria-multiselectable="true">';
		foreach ($opc['items'] as $item) {
			echo '<div class="panel panel-default '.(isset($item['efect'])?$item['efect']:(isset($opc['efect'])?$opc['efect']:'')).'">';
			echo '<div class="panel-heading" role="tab" id="heading'.$item['id'].'">';
			echo '<h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#'.$opc['name'].'" href="#collapse'.$item['id'].'" aria-expanded="true" aria-controls="collapse'.$item['id'].'">';
			echo isset($item['title-icon'])? '<span class="glyphicon '.$item['title-icon'].'" aria-hidden="true"></span>'.$item['title'].'</a></h4>' : $item['title'].'</a></h4>';
			echo '</div>';
			echo '<div id="collapse'.$item['id'].'" class="panel-collapse collapse'.((isset($item['abierto']) && $item['abierto'])?' in':'').'" role="tabpanel" aria-labelledby="heading'.$item['id'].'">';
			echo '<div class="panel-body">';
			if(is_array($item['content'])){
				echo '<ul>';
				foreach($item['content'] as $value){
					echo '<li>'.$value.'</li>';	
				}
				echo '</ul>';
			}else{
				if(isset($item['isHTML']) && $item['isHTML'])
					echo $item['content'];
				else
					echo '<p>'.$item['content'].'</p>';
			}
			echo '</div></div></div>';
		}					
		echo '</div>';
	}
	
	
        //////////////////////  view  ///////////
            
	    	include dirname(__FILE__) . '/view/view.php';
            
        ////////////////////////////////////
    } else {
        http_response_code(404);
    }