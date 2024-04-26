<section class="pagina tab-info">
	<div class="row">
	<div class="col-md-12">
		<p><small style="color: #FFFFFF; padding: 2px 8px; background: #F9690E;">
			Miembro desde: <?= date("d-m-Y", strtotime($model->ic_miembroDesde)); ?>
		</small></p>
	</div>
	<div class="col-md-6">
		<h2 style="margin-top: 10px;"><?= $model->nombre; ?></h2>
		<ul>
			<?= $model->exist('ic_telefono')? '<li><b>Teléfono:</b>'. $model->ic_telefono.'</li>' : ''; ?>
			<?= $model->exist('ic_cif')? '<li><b>CIF:</b>'. $model->ic_cif.'.</li>' : ''; ?>
			<?= $model->exist('ic_fax')? '<li><b>Fax:</b>'. $model->ic_fax.'.</li>' : ''; ?>
			<?= $model->exist('url')? '<li><b>Web:</b>'. $model->url.'</li>' : ''; ?>
			<?= $model->exist('ic_contacto')? '<li><b>Contacto:</b>'. $model->ic_contacto.'.</li>' : ''; ?>
			<?= $model->exist('ic_correo')? '<li><b>Correo:</b>'. $model->ic_correo.'</li>' : ''; ?>
			<?= $model->exist('ic_direccion')? '<li><b>Direccion:</b>'. $model->ic_direccion.'.</li>' : ''; ?>
		</ul>
	</div>
	
	<div class="col-md-6">
		<!-- BEGAIN GOOGLE MAP -->
		<div id="map_canvas"></div>
	</div>
	</div>
</section>