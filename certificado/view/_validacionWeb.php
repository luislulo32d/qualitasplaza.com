<?php
$acordion = array(
'name' =>'accordion22',
'efect' =>'wow fadeInLeft',
'items' => array(
	array(
		'id' => 21,
		'abierto' => false,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Facilidad de Entendimiento',
		'isHTML' => true,
		'content' => '<p>Legibilidad Visual:</p>
<ul>
<li>Los tamaños de fuente son adecuados a cada contexto</li>
<li>La longitud de los campos de los formularios se ajustan a un tamaño coherente</li>
</ul>
<p>Facilidad de lectura:</p>
<ul>
<li>No existe sobrecarga de textos</li>
</ul>
<p>Ahorro de esfuerzo:</p>
<ul>
<li>No hay dificultad de entendimiento de la información del Sitio</li>
</ul>
<p>Orientación al usuario:</p>
<ul>
<li>Existen mensajes que avisan al usuario sobre la acción que llevará a cabo</li>
</ul>
<p>Navegabilidad:</p>
<ul>
<li>Hay facilidad para acceder a los contenidos o acciones del Sitio</li>
<li>Existen accesos directos a contenido directamente desde el home</li>
</ul>'
	),
	array(
		'id' => 22,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Facilidad de Aprendizaje',
		'isHTML' => true,
		'content' => '<p>Predictibilidad:</p>
<ul>
<li>Los nombres de los enlaces predicen la acción que va a realizar el sitio</li>
</ul>
<p>Retroalimentación informativa:</p>
<ul>
<li>El Sitio proporciona a los usuarios el estado de las transacciones que se realizan 
(tareas completadas con éxito, estado en una transacción, etc.)</li>
<li>El sitio proporciona a los usuarios el contexto en el que se encuentran?.
(Sesión iniciada, nivel de privacidad de la información, etc.)</li>
</ul>'
	),
	array(
		'id' => 23,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Facilidad de Uso',
		'isHTML' => true,
		'content' => '<p>Controlabilidad:</p>
<ul>
<li>Las acciones del usuario se pueden interrumpir sin perjudicar el funcionamiento normal.</li>
<li>Las acciones se pueden deshacer sin perjudicar el funcionamiento normal.</li>
<li>Las acciones se pueden rehacer para ahorrar trabajo al usuario.</li>
</ul>
<p>Consistencia:</p>
<ul>
<li>Los enlaces con el mismo nombre siempre apuntan al mismo destino.</li>
</ul>
<p>Gestión de errores:</p>
<ul>
<li>El Sitio valida los campos de los formularios.</li>
<li>El sitio es capaz de volver a un estado estable tras un error.</li>
<li>El mensaje representa de forma clara y concisa el error ocurrido.</li>
</ul>'
	),
	array(
		'id' => 24,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Facilidad de Ayuda',
		'isHTML' => true,
		'content' => '<p>Facilidad de ayuda:</p>
<ul>
<li>Completitud de la ayuda online</li>
<li>Completitud del mapa de Sitio</li>
<li>Calidad de los mensajes de asesoramiento</li>
</ul>'
	),
	array(
		'id' => 25,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Accesibilidad Técnica',
		'isHTML' => true,
		'content' => '<p>Accesibilidad técnica:</p>
<ul>
<li>El texto del sitio se redimensiona independientemente del navegador</li>
<li>El contenido multimedia (imágenes, sonidos, animaciones) tienen una descripción alternativa.</li>
</ul>'
	),
	array(
		'id' => 26,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Grado de Atracción ',
		'isHTML' => true,
		'content' => '<p>Accesibilidad técnica:</p>
<ul>
<li>Los colores de fondo de las interfaces se mantienen en los procesos del usuario.</li>
<li>Los colores, fuentes y tamaño de las fuentes se mantienen en los procesos del usuario.</li>
<li>Las opciones del usuario se mantienen a la vista a lo largo de los procesos.</li>
</ul>'
	),
	array(
		'id' => 27,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Interoperabilidad + Compatibilidad Web',
		'isHTML' => true,
		'content' => '<p>Sitio Web se aprecia de la misma forma en los navegadores:</p>
<ul>
<li>Google Chrome</li>
<li>Mozilla Firefox</li>
<li>Internet Explorer</li>
<li>Safari</li>
<li>Ópera</li>
</ul>'
	),
	array(
		'id' => 28,
		'title-icon' => 'glyphicon-plus',
		'title' => 'Rendimiento',
		'isHTML' => true,
		'content' => '<ul>
<li>El Sitio Web no tiene links rotos.</li>
<li>El tiempo de carga del sitio cumple con los Estándares de la industria.</li>
<li>Redirección www correctamente configurada.</li>
<li>No utiliza flash.</li>
<li>No utiliza frames.</li>
<li>No utiliza tablas.</li>
<li>Se encuentra optimizado para dispositivos móviles</li>
<li>No tiene errores CSS/HTML/Javascript</li>
</ul>'
	)
));
?>
<section class="pagina">
	<p><small style="color: #FFFFFF; padding: 2px 8px; background: #F9690E;">
		Negocio Validado por Qualitas Plaza desde <?= date("d-m-Y", strtotime($model->vw_validadoDesde)); ?>
	</small></p>
	
	<h2><?= $model->nombre; ?></h2>
	
	<p><b>Teléfono:</b> <?= $model->ic_telefono; ?>.</p>
		
	<p>Qualitas Plaza ha determinado que la empresa
<?= $model->nombre; ?> cumple con los estándares internacionales de organizaciones 
independientes como World Wide Web Consortium, además de tendencias 
aceptadas a nivel mundial como las reglas heurísticas de usabilidad de 
Jakob Nielsen y normas ISO relacionadas evaluadas a través 
de un proceso de Auditoría de Calidad Web que incluye la evaluación de
elementos como: Usabilidad, Rendimiento y Conectividad.</p>
	
	<p class="small">
		<em>La Validación de Calidad Web no avala el cumplimiento de las Buenas Prácticas Empresariales.</em>
	</p>
	<br />
	<p><strong class="name"><?= $model->nombre; ?></strong>. Cumple con las siguientes normas:</p>
	
	<h3>Usabilidad:</h3>

<?= generedCollapse($acordion); ?>

</section>