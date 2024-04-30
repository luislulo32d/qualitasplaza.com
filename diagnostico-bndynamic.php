<!DOCTYPE html>
<html lang="es">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Title -->
  <title>Qualitas Plaza</title>
  <!-- Required Meta Tags Always Come First -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img-temp/favicon.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="../assets/vendor/hs-admin-icons/hs-admin-icons.css">  <!-- this -->
     <link rel="stylesheet" href="../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">  <!-- this -->
  <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/css/flatpickr.min.css">  <!-- this -->
   <link rel="stylesheet" href="../assets/vendor/bootstrap-select/css/bootstrap-select.min.css"><!-- this -->
     <link rel="stylesheet" href="../assets/vendor/chartist-js/chartist.min.css"><!-- this -->
  <link rel="stylesheet" href="../assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css"><!-- this -->
  <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="assets/vendor/animate.css">
  <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css"> 
  <link rel="stylesheet" href="assets/vendor/typedjs/typed.css">
  <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
  <link  rel="stylesheet" href="../../assets/vendor/custombox/custombox.min.css">
  <link  rel="stylesheet" href="../../assets/vendor/animate.css">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="assets/css/unify-core.css">
  <link rel="stylesheet" href="assets/css/unify-components.css">
  <link rel="stylesheet" href="assets/css/unify-globals.css">
 <link rel="stylesheet" href="../assets/css/unify-admin.css"><!-- This -->
  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
  <main>
    <!-- Header -->
    <?php
      include_once 'includes/header.php'
    ?>
    <!-- End Header -->
          <section class="g-py-0 g-px-80 g-mt-0 g-mb-0">
         <div class="shortcode-html">
           <div class="row">
             <div class="col-md-4">
              <!-- Select with Text -->
                  <div class="g-mb-30">
                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                      <select class="js-select u-select--v3-select u-select-dropdown--blue-theme u-sibling w-100" required="required" title="bnsdynamic.com" style="display: none;">
                        <option value="selectListItem1" data-content='<span class="d-flex align-items-center w-100"><span>Sitio web 1</span><i class="hs-admin-desktop g-font-size-18 ml-auto"></i></span>'>Sitio web 1
                        </option>
                        <option value="selectListItem2" data-content='<span class="d-flex align-items-center w-100"><span>Sitio web 2</span><i class="hs-admin-desktop g-font-size-18 ml-auto"></i></span>'>Sitio web 2
                        </option>
                        <option value="selectListItem3" data-content='<span class="d-flex align-items-center w-100"><span>Sitio web 3</span><i class="hs-admin-desktop g-font-size-18 ml-auto"></i></span>'>Sitio web 3
                        </option>
                        <option data-divider="true"></option>
                       
                      </select>

                      <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                        <span class="g-mr-10">Seleccionar otra URL</span>
                        <i class="hs-admin-angle-down"></i>
                      </div>
                    </div>
                  </div>
       <!-- End Select with Text -->
          </div>

          <div class="col-md-4">
           <!-- With Button (Colorful BG) -->
                  <div class="form-group">
                    <div class="g-pos-rel">
                      <button class="btn u-input-btn--v1 g-width-40 g-bg-primary g-rounded-right-20" type="submit" data-toggle="modal" data-target="#myModal4-1">
                        <i class="hs-admin-plus g-absolute-centered g-font-size-16 g-color-white"></i>
                      </button>
                      
                      <input id="inputGroup-3_4" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3 g-rounded-20 g-px-14 g-py-10" type="text" placeholder="Agregar nueva URL">
                    </div>
                  </div>
                  <!-- End With Button (Colorful BG) -->
          </div>
          
           <div class="col-md-4">
           <!-- With Button (Colorful BG) -->
                  <div class="form-group">
                    <div class="g-pos-rel">
                      <button class="btn u-input-btn--v1 g-width-40 g-bg-primary g-rounded-right-20" type="submit">
                        <i class="hs-admin-search  g-absolute-centered g-font-size-16 g-color-white"></i>
                      </button>
                      <input id="inputGroup-3_4" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3 g-rounded-20 g-px-14 g-py-10" type="text" placeholder="Buscar URL">
                    </div>
                  </div>
                  <!-- End With Button (Colorful BG) -->
          </div>
        </div>
      </div>

</section>
    
    
    
      <section class="g-py-0 g-px-80 g-mt-40 g-mb-0">
       <div class="shortcode-html">
                  <!-- Taglines Bordered -->
                    <div class="g-brd-around g-brd-gray-light-v4 g-brd-left-4 g-brd-green-left g-line-height-1_8 g-rounded-3 g-pa-10 g-mb-0" role="alert">
                    <h4 class="g-color-green g-font-weight-400"><strong>Diagnóstico Demo del portal:</strong> bnsdynamic.com</h4>
                  </div>
                  <!-- End Taglines Bordered -->
                </div>
       </section>
       <section class="g-py-0 g-px-80 g-mt-0 g-mb-0">
         <div class="shortcode-html">
           <div class="row">
             <div class="col-md-6">
             <!-- Accordion v1 -->
             <section class="g-py-0">
              <div class="text-center g-mb-20">
              </div>

              <div id="shortcode11">
                <div class="shortcode-html">
                  <div id="accordion-11" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                    <!-- Card -->
                    <div class="card g-brd-none rounded-0 g-mb-15">
                      <div id="accordion-11-heading-01" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0">
                          <a class="d-flex g-color-main g-text-underline--none--hover g-brd-around g-brd-gray-light-v4 g-rounded-5 g-pa-10-15" href="#accordion-11-body-01" aria-expanded="true" aria-controls="accordion-11-body-01"
                             data-toggle="collapse"
                             data-parent="#accordion-11">
                            <span class="u-accordion__control-icon g-mr-10">
                              <i class="fa fa-angle-down"></i>
                              <i class="fa fa-angle-up"></i>
                            </span>
                            Datos del cliente
                          </a>
                        </h5>
                      </div>
                      <div id="accordion-11-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-11-heading-01" data-parent="#accordion-11">
                        <div class="u-accordion__body g-color-gray-dark-v5">
                           <address class="g-line-height-2">
                            <i class="fas fa-building"></i>
                              <strong>Empresa: BNS Dynamic</strong>
                            <br>
                            <i class="fas fa-id-badge"></i>
                            <strong>Contacto: Manuel Cobos</strong>
                            <br>
                              <i class="fas fa-phone-volume"></i>
                              <strong>Teléfono: ---</strong>
                              <br>
                               <i class="fas fa-clipboard"></i>
                             <strong>Informe emitido:</strong> 03-08-2020
                                       <br>
                                  <i class="fas fa-clipboard-list"></i>
                                 <strong>Informe generado:</strong> 03-08-2020
                            </address>
                        </div>
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
              </div>
            </section>
            <!-- End Accordion v1 -->
          </div>

          <div class="col-md-6">
            <!-- Accordion v2 -->
            <section class="g-py-0">
              <div class="text-center g-mb-20">
              </div>

              <div id="shortcode12">
                <div class="shortcode-html">
                  <div id="accordion-12" class="u-accordion u-accordion-color-primary" role="tablist" aria-multiselectable="true">
                    <!-- Card -->
                    <div class="card g-brd-none rounded-0 g-mb-15">
                      <div id="accordion-12-heading-01" class="u-accordion__header g-pa-0" role="tab">
                        <h5 class="mb-0">

                          <a class="d-flex g-color-main g-text-underline--none--hover g-brd-around g-brd-gray-light-v4 g-rounded-5 g-pa-10-15" href="#accordion-12-body-01"

                             data-toggle="collapse"

                             data-parent="#accordion-12"

                             aria-expanded="true"

                             aria-controls="accordion-12-body-01">

                            <span class="u-accordion__control-icon g-mr-10">

                              <i class="fa fa-angle-down"></i>

                              <i class="fa fa-angle-up"></i>

                            </span>

                            Criterios de evaluación

                          </a>

                        </h5>
                      </div>
                      <div id="accordion-12-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-12-heading-01" data-parent="#accordion-12">
                        <div class="u-accordion__body g-color-gray-dark-v5">
                           <div class="shortcode-html">
                  <!-- Unify Teal Outline Panel-->
                  <div class="card g-brd-teal rounded-0">
                    <div class="card-block">
                      <p class="card-text">Utilizamos criterios con base en valores ajustados a la industria y
                      estándares internacionales del World Wide Web
                      Consortium, además de tendencias aceptadas a nivel mundial como las reglas de usabilidad de Jakob Nielsen y normas ISO relacionadas, 
                      Normas de las Buenas Prácticas del Comercio Electrónico. Puedes ver los estándares <a href="https://qualitasplaza.com/estandares.html" target="_blank">aquí</a>.</p>
                    </div>
                  </div>
                  <!-- End Unify Teal Outline Panel-->
                </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
              </div>
            </section>
            <!-- End Accordion v2 -->
          </div>
        </div>
      </div>

</section>
    
     
    
     <section class="g-py-0 g-px-80 g-mt-40 g-mb-40">
  <div class="shortcode-html g-mt-50">
              <div class="row">
                <div class="col-md-4">
                  <div class="u-heading-v2-3--bottom g-brd-primary g-mb-30">
                       
            <h2 class="h4 text-left g-font-weight-500 g-mb-0">Evaluación general</h2><p class="mb-0">Indicadores de cumplimiento de estándares:</p>
                  </div>
                    <!-- Evaluación general Usabilidad. -->
                  <div class="shortcode-html">
                    <h6 class="text-uppercase g-font-size-12 g-font-weight-600 g-letter-spacing-0_5 g-pos-rel g-z-index-2">Usabilidad</h6>

                    <div class="js-hr-progress-bar progress g-height-20 rounded-0 g-overflow-visible g-mb-20">
                      <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                        <div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-primary g-rounded-50x">35%</div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Evaluación general rendimiento. -->
                   <div class="shortcode-html">
                    <h6 class="text-uppercase g-font-size-12 g-font-weight-600 g-letter-spacing-0_5 g-pos-rel g-z-index-2">Rendimiento</h6>

                    <div class="js-hr-progress-bar progress g-height-20 rounded-0 g-overflow-visible g-mb-20">
                      <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                        <div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-primary g-rounded-50x">76%</div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Evaluación general Operatividad. -->
                    <div class="shortcode-html">
                    <h6 class="text-uppercase g-font-size-12 g-font-weight-600 g-letter-spacing-0_5 g-pos-rel g-z-index-2">Operatividad</h6>

                    <div class="js-hr-progress-bar progress g-height-20 rounded-0 g-overflow-visible g-mb-20">
                      <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-primary g-rounded-50x">80%</div>
                      </div>
                    </div>
                  </div>
                  
                   <!-- Evaluación general consistencia. -->
                    <div class="shortcode-html">
                    <h6 class="text-uppercase g-font-size-12 g-font-weight-600 g-letter-spacing-0_5 g-pos-rel g-z-index-2">Marketing</h6>

                    <div class="js-hr-progress-bar progress g-height-20 rounded-0 g-overflow-visible g-mb-20">
                      <div class="js-hr-progress-bar-indicator progress-bar g-pos-rel" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100">
                        <div class="text-center u-progress__pointer-v1 g-font-size-11 g-color-white g-bg-primary g-rounded-50x">44%</div>
                      </div>
                    </div>
                  </div>
                  
                </div>

                <div class="col-md-4">
                  <div class="u-heading-v2-3--bottom g-brd-primary g-mb-30">
                        <h2 class="h4 text-left g-font-weight-500 g-mb-0">Alertas</h2>
                       <p class="mb-0">Elementos a corregir con urgencia:</p>
                  </div>
             <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> Alertas disponibles para usuarios con plan negocios.
          
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-5 g-mb-15 g-mt-5">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
             <!--
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="h5">

                          <i class="fa fa-exclamation-triangle"></i>

                          Alerta de errores de código!

                        </h4>
                        <p class="g-mb-10">Tienes 24 Errores CSS/HTML/Javascript.</p>
                      </div>
                      -->
                            <!-- 
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="h5">

                          <i class="fa fa-exclamation-triangle"></i>

                          Alerta enlaces rotos!

                        </h4>
                        <p class="g-mb-10">Tu portal tiene 11 enlaces rotos.</p>
                      </div>
                      
                              -->
                
                </div>
                
                  <div class="col-md-4">
                  <div class="u-heading-v2-3--bottom g-brd-primary g-mb-30">
                        <h2 class="h4 text-left g-font-weight-500 g-mb-0">Notificaciones</h2>
                       <p class="mb-0">Avisos y elementos esenciales:</p>
                  </div>
              
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="h5">

                          <i class="fa fa-exclamation-triangle"></i>

                          Revisar configuración de email

                        </h4>
                        <p class="g-mb-10">Verificar el funcionamiento del servicio de correos del servidor si no se están utilizando servicios de terceros para recibir y enviar emails (Ejemplo: servicios de Google).</p>
                      </div>
                         
             
                </div>
              </div>
            </div>
</section>
    
    
    
             <section class="g-py-0 g-px-80 g-mt-40 g-mb-40">
            
            <h2 class="h4 text-center g-font-weight-500 g-mb-20">Overview / Salud en ventas online</h2>
            <div class="row g-mb-35">
         
                 <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                  <div class="card-block g-pa-20">
                    <h4 class="media g-font-weight-400 g-font-size-16 g-mb-10 g-mb-20--md">
                    <span class="d-flex align-self-center g-color-gray-dark-v6 g-font-weight-500"><span class=""><i class="fas fa-building"></i></span> Identidad <br> de tu web</span>
                    <span class="media-body d-flex align-self-center justify-content-end g-font-size-18--md g-color-black">
                      <span>  <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-ml-25 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a></span>
                      
                    </span>
                  </h4>

                    <div class="progress g-height-6 g-rounded-3 g-mb-10 g-mb-15--md">
                      <div class="progress-bar g-bg-darkblue-v2 g-rounded-3" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                   <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><span data-toggle="modal" data-target="#myModal7-1">
    <button type="button" class="btn estilos-tooltip" data-placement="bottom" title="Elementos evaluados" data-toggle="tooltip"><i class="fa fa-info-circle"></i></button>
</span> Indice de reputación</p>
                  </div>
                </div>
                <!-- End Panel -->
              </div>
            
               <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                  <div class="card-block g-pa-20">
                    <h4 class="media g-font-weight-400 g-font-size-16 g-mb-10 g-mb-20--md">
                    <span class="d-flex align-self-center g-color-gray-dark-v6 g-font-weight-500"><span class=""><i class="fas fa-shopping-cart"></i></span>Fortaleza <br>de ventas</span>
                    <span class="media-body d-flex align-self-center justify-content-end g-font-size-18--md g-color-black">
                      <span>  <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-ml-25 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a></span>
                    
                    </span>
                  </h4>

                    <div class="progress g-height-6 g-rounded-3 g-mb-10 g-mb-15--md">
                      <div class="progress-bar g-bg-darkblue-v2 g-rounded-3" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"><span data-toggle="modal" data-target="#myModal7-2">
    <button type="button" class="btn estilos-tooltip" data-placement="bottom" title="Elementos evaluados" data-toggle="tooltip"><i class="fa fa-info-circle"></i></button>
</span> Indice de esfuerzo</p>
                  </div>
                </div>
                <!-- End Panel -->
              </div>
              <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                  <div class="card-block g-pa-20">
                    <h4 class="media g-font-weight-500 g-font-size-16 g-mb-10 g-mb-20--md">
                    <span class="d-flex align-self-center g-color-gray-dark-v6 g-font-weight-500"><span class=""></span><i class="fas fa-download"></i>Tiempo <br>de carga</span>
                    <span class="media-body d-flex align-self-center justify-content-end g-font-size-18--md g-color-black">
                      <span><strong>6.3s</strong></span>
                      <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                        <i class="g-fill-lightblue-v3">
                          <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(-21.000000, -751.000000)">
                              <g transform="translate(0.000000, 64.000000)">
                                <g transform="translate(20.000000, 619.000000)">
                                  <g transform="translate(1.000000, 68.000000)">
                                    <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </i>
                        <i class="g-fill-gray-dark-v9">
                          <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(-33.000000, -751.000000)">
                              <g transform="translate(0.000000, 64.000000)">
                                <g transform="translate(20.000000, 619.000000)">
                                  <g transform="translate(1.000000, 68.000000)">
                                    <polygon
                                      transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                      points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </i>
                      </span>
                    </span>
                  </h4>
                <span class="u-label u-label-danger g-color-white">Deficiente</span>

                     <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"> Tiempo óptimo menor a 2.4s</p>
                  </div>
                </div>
                <!-- End Panel -->
              </div>

              <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                <!-- Panel -->
                <div class="card h-100 g-brd-gray-light-v7 rounded">
                  <div class="card-block g-pa-20">
                    <h4 class="media g-font-weight-500 g-font-size-16 g-mb-10 g-mb-20--md">
                    <span class="d-flex align-self-center g-color-gray-dark-v6 g-font-weight-500"><i class="fas fa-database"></i>Estado <br>del servidor</span>
                    <span class="media-body d-flex align-self-center justify-content-end g-font-size-18--md g-color-black">
                      <span><strong>Activo</strong></span>
                      <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                        <i class="g-fill-gray-dark-v9">
                          <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(-21.000000, -751.000000)">
                              <g transform="translate(0.000000, 64.000000)">
                                <g transform="translate(20.000000, 619.000000)">
                                  <g transform="translate(1.000000, 68.000000)">
                                    <polygon points="6 20 0 13.9709049 0.576828937 13.3911999 5.59205874 18.430615 5.59205874 0 6.40794126 0 6.40794126 18.430615 11.4223552 13.3911999 12 13.9709049"></polygon>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </i>
                        <i class="g-fill-lightblue-v3">
                          <svg width="12px" height="20px" viewbox="0 0 12 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g transform="translate(-33.000000, -751.000000)">
                              <g transform="translate(0.000000, 64.000000)">
                                <g transform="translate(20.000000, 619.000000)">
                                  <g transform="translate(1.000000, 68.000000)">
                                    <polygon
                                      transform="translate(18.000000, 10.000000) scale(1, -1) translate(-18.000000, -10.000000)"
                                      points="18 20 12 13.9709049 12.5768289 13.3911999 17.5920587 18.430615 17.5920587 0 18.4079413 0 18.4079413 18.430615 23.4223552 13.3911999 24 13.9709049"></polygon>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </i>
                      </span>
                    </span>
                  </h4>

                  <span class="u-label u-label-success g-color-white">Excelente</span>

                     <p class="g-font-weight-300 g-color-gray-dark-v6 mb-0"> Servidor en funcionamiento</p>
                  </div>
                </div>
                <!-- End Panel -->
              </div>
            </div> 
    </section>
  
      <div class="shortcode-html">
              
                  <div class="d-md-flex justify-content-md-center text-center">
                    <div class="align-self-md-center">
                      
              <div class="shortcode-html">
                <section class="g-brd-around g-brd-gray-light-v4 g-pa-30">
                  <div class="d-md-flex justify-content-md-center text-center">
                    <div class="align-self-md-center">
                      <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md"><span class="g-color-primary">1. Informe (Demo):</span> a continuación presentamos los resultados y la evaluación de tu Sitio Web</p>
                    </div>
                  </div>
                </section>
              </div>
            
                    </div>
                  </div>
              </div>     
    
     <section class="g-py-0 g-px-80 g-mt-40 g-mb-0">
                <div class="shortcode-html">
                  <div class="g-bg-gray-v2 g-color-black g-px-15 g-py-50">
                    <!-- Nav tabs -->
                    <ul class="nav nav-fill u-nav-v8-2 u-nav-light" role="tablist" data-target="nav-8-2-accordion-primary-hor-fill" data-tabs-mobile-type="accordion" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-white g-mb-20">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#nav-8-2-accordion-primary-hor-fill--1" role="tab">
                          <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-rounded-50x g-brd-around g-brd-1 g-brd-gray-dark-v2">

                           <i class="fas fa-chalkboard-teacher"></i>

                          </span>
                          <strong class="text-uppercase u-nav-v8__title">1. Usabilidad</strong>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#nav-8-2-accordion-primary-hor-fill--2" role="tab">
                          <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-rounded-50x g-brd-around g-brd-1 g-brd-gray-dark-v2">

                             <i class="fas fa-draw-polygon"></i>

                          </span>
                          <strong class="text-uppercase u-nav-v8__title">2. Componentes</strong>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#nav-8-2-accordion-primary-hor-fill--3" role="tab">
                          <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-rounded-50x g-brd-around g-brd-1 g-brd-gray-dark-v2">

                            <i class="fas fa-heartbeat"></i>

                          </span>
                          <strong class="text-uppercase u-nav-v8__title">3. Rendimiento</strong>
                        </a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#nav-8-3-accordion-primary-hor-fill--4" role="tab">
                          <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-rounded-50x g-brd-around g-brd-1 g-brd-gray-dark-v2">

                            <i class="fas fa-server"></i>

                          </span>
                          <strong class="text-uppercase u-nav-v8__title">4. Operatividad</strong>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#nav-8-2-accordion-primary-hor-fill--5" role="tab">
                          <span class="u-nav-v8__icon u-icon-v3 u-icon-size--lg g-rounded-50x g-brd-around g-brd-1 g-brd-gray-dark-v2">

                           <i class="fas fa-chart-line"></i>

                          </span>
                          <strong class="text-uppercase u-nav-v8__title">5. Marketing</strong>
                        </a>
                      </li>
                    </ul>
                    <!-- End Nav tabs -->

                    <!-- Tab panes -->
                    <div id="nav-8-2-accordion-primary-hor-fill" class="tab-content g-pt-20--md">
                     <div class="tab-pane fade show active" id="nav-8-2-accordion-primary-hor-fill--1" role="tabpanel">
                   <!-- select vertical sección 1 Usabilidad. -->
                <div class="shortcode-html">
                  <div class="row">
                    <div class="col-md-3">
                           <i class="fa fa-tasks g-mr-5"></i>
                         Secciones / Elementos:
                      <!-- Nav tabs -->
                      <br>
                      <br>
                      <ul class="nav flex-column u-nav-v5-1" role="tablist" data-target="nav-5-1-accordion-ver-default-icons" data-tabs-mobile-type="accordion" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray g-mb-20">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--1" role="tab">
                           <i class="fas fa-book-reader"></i>
                           Facilidad de Entendimiento
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--2" role="tab">
                          <i class="fas fa-diagnoses"></i>
                          Facilidad de Aprendizaje
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--3" role="tab">
                            <i class="fas fa-hands"></i>
                         Facilidad de uso <span class="g-ml-40 g-color-primary"> <i class="fas fa-arrow-alt-circle-up "></i></span>
                         </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--4" role="tab">
                          <i class="fas fa-question"></i>
                         Facilidad de Ayuda <span class="g-ml-30 g-color-primary"> <i class="fas fa-arrow-alt-circle-up "></i></span>
                          </a>
                        </li>
                          <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--5" role="tab">
                           <i class="fas fa-cog"></i>
                         Accesibilidad técnica
                          </a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--6" role="tab">
                             <i class="fas fa-cookie-bite"></i>
                         Grado de atracción 
                          </a>
                        </li>
                      </ul>
                      <!-- End Nav tabs -->
                    </div>



                    <div class="col-md-9">
                      <!-- Tab panes -->
                      <div id="nav-5-1-accordion-ver-default-icons" class="tab-content">
                      
                        <div class="tab-pane fade show active" id="nav-5-1-accordion-ver-default-icons--1" role="tabpanel">
                                <!-- Tabla 1. facilidad de entendimiento -->
                            <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                       <i class="fas fa-book-reader"></i>

                     Facilidad de entendimiento

                    </h3>

                    <div class="card-block g-pa-15">
                      <p class="card-text">Se corresponde con el atributo “Understandability”
                     definido en la ISO 9126-1, el cual ha sido renombrado para ofrecer una definición más precisa.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Característica</th>
                            <th>Atributo</th>
                            <th>Estudio</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Legibilidad Visual</td>
                            <td>Adecuación de la fuente</td>
                            <td>¿Los tamaños de fuente son adecuados a cada contexto?</td>
                            <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                     <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>

                            </td>
                            <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-12">
                            Ver más
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Legibilidad Visual'</td>
                            <td>Tamaños de campos de formularios</td>
                            <td>¿La longitud de los campos de los formularios se ajustan a un tamaño coherente?</td>
                            <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                  <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-13">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Facilidad de lectura</td>
                             <td>Densidad de información</td>
                            <td>¿Existe sobrecarga de textos?</td>
                             <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                    <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>

                            </td>
                            <td> <button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-14">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Ahorro de esfuerzo</td>
                            <td class="hidden-sm">Complejidad de la información</td>
                            <td>¿Hay dificultad de entendimiento de la información?</td>
                              <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>

                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-15">
                            Ver más
                            </button></td>
                          </tr>
                            <tr>
                            <td>Orientación al usuario</td>
                            <td class="hidden-sm">Calidad de los mensajes de aviso</td>
                            <td>¿Existen mensajes que avisan al usuario sobre la acción que llevará a cabo?</td>
                              <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                   <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>

                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-16">
                            Ver más
                            </button></td>
                          </tr>
                               <tr>
                            <td>Navegabilidad</td>
                            <td class="hidden-sm">Alcanzabilidad</td>
                            <td>¿Hay facilidad para acceder a los contenidos o acciones del Sitio?</td>
                              <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                     <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>

                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-17">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Navegabilidad'</td>
                            <td class="hidden-sm">Soporte a búsqueda interna</td>
                            <td>¿Existen accesos directos a contenido directamente desde el home?</td>
                              <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-18">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>

                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--2" role="tabpanel">
                               <!-- Tabla 2. facilidad de aprendizaje -->
                             <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                     <i class="fas fa-diagnoses"></i>
                     Facilidad de aprendizaje

                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">(Learnability) hace referencia a todos aquellos atributos presentes en un
Sitio Web que hacen posible que el usuario aprenda su uso. Su definición viene del concepto “adecuación para el aprendizaje” definido en la ISO 9241- 10.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Característica</th>
                            <th>Atributo</th>
                            <th>Estudio</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Predictibilidad</td>
                            <td>Nombre de enlaces significativos</td>
                            <td>¿Los nombres de los enlaces predicen la acción que va a realizar el sitio?</td>
                            <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                                <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-2">
                            Ver más
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Retroalimentación informativa</td>
                             <td>Progreso explícito de las transacciones</td>
                            <td>¿El Sitio proporciona a los usuarios el estado de las transacciones que se realizan? (tareas completadas con éxito, estado en una
                            transacción, etc.)
                            </td>
                             <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
</td>
                            <td>
                             <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-2">
                            Ver más
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <td>'Retroalimentación informativa</td>
                            <td class="hidden-sm">Contexto explícito del usuario</td>
                            <td>¿El sitio proporciona a los usuarios el contexto en el que se encuentran?. (Sesión iniciada, nivel de privacidad de la información, etc.)</td>
                              <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
</td>
                            <td>
 <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-2">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--3" role="tabpanel">
                              <!-- Tabla 3. facilidad de uso -->
                          <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                        <i class="fas fa-hands"></i>
                     Facilidad de uso

                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">(Easy of use) hace referencia a todos aquellos atributos del Sitio Web que
permiten controlarlo adecuadamente. Se corresponde con el atributo Operability definido en la ISO 9126-1, estando su definición basada en los términos controlabilidad, tolerancia a fallos y
conformidad con las expectativas del usuario definidas en la ISO 9241-10.
</p>

 <div class="col-lg-14">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> resultados sólo están disponibles para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>

                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Característica</th>
                            <th>Atributo</th>
                            <th>Estudio</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Controlabilidad</td>
                            <td>Soporte a la interrupción</td>
                            <td>¿Las acciones del usuario se pueden interrumpir sin perjudicar el funcionamiento normal?</td>
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-3">
                            Ver más
                            </button>
                           </td>
                          </tr>
                          <tr>
                            <td></td>
                             <td>Soporte a operaciones de deshacer</td>
                            <td>¿Las acciones se pueden deshacer sin perjudicar el funcionamiento normal?
                            </td>
                             
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-3">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Soporte a operaciones de rehacer</td>
                            <td>¿Las acciones se pueden rehacer para ahorrar trabajo al usuario?</td>
                              
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-3">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Consistencia</td>
                            <td>Comportamiento constante de los enlaces</td>
                            <td>¿Los enlaces con el mismo nombre siempre apuntan al mismo destino?</td>
                             
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-3">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Gestión de errores</td>
                            <td>Prevención de errores</td>
                            <td>¿El Sitio valida los campos de los formularios?</td>
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-35">
                            Ver más
                            </button></td>
                          </tr>
                            <tr>
                            <td></td>
                            <td>Recuperación ante errores</td>
                            <td>¿El sitio es capaz de volver a un estado estable tras un error?</td>
                             
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-3">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td></td>
                            <td>Calidad de los mensajes de error</td>
                            <td>¿El mensaje representa de forma clara y concisa el error ocurrido?</td>
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-3">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--4" role="tabpanel">
                             <!-- Tabla 4. facilidad de ayuda -->
                            <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fas fa-question"></i>
                     Facilidad de ayuda

                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Facilidad de ayuda: (helpfulness) hace referencia a todos aquellos atributos del Sitio Web que proveen ayuda a los usuarios cuando lo necesitan. Es elemento agregado a la norma SQuaRE (System and Software Quality Requirements and Evaluation).</p>
                     <div class="col-lg-14">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> resultados sólo están disponibles para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Característica</th>
                            <th>Atributo</th>
                            <th>Estudio</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Facilidad de ayuda</td>
                            <td>Completitud de la ayuda online</td>
                            <td>¿La ayuda del sitio contempla todas las funcionalidades especificadas para el Sitio Web?</td>
                            
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-4">
                            Ver más
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                             <td>Calidad de los mensajes de asesoramiento</td>
                            <td>¿Existen mensajes de asesoramiento claros al usuario durante los procesos? (Uso de tooltips, consejos)
                            </td>
                            
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-4">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                        </div>
                            <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--5" role="tabpanel">
                             <!-- Tabla 5. Accesibilidad técnica -->
                            <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fas fa-cog"></i>
                    Accesibilidad técnica
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">(Technical accesibility) es un elemento agregado a la norma SQuaRE (System
                      and Software Quality Requirements and Evaluation). Pertenece a la familia de normas ISO/IEC 25000
                      que tienen por objetivo la creación de un marco de trabajo común para evaluar la calidad del producto
                      software.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Característica</th>
                            <th>Atributo</th>
                            <th>Estudio</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Accesibilidad técnica</td>
                            <td>Soporte a la ampliación/reducción del texto</td>
                            <td>¿El texto del sitio se redimensiona independientemente del navegador?</td>
                            <td>SÍ</td>
                            <td>
                               <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-5">
                            Ver más
                            </button>
                        </td>
                          </tr>
                          <tr>
                            <td></td>
                             <td>Soporte a texto alternativo</td>
                            <td>¿El contenido multimedia (imágenes, sonidos, animaciones) tienen una descripción alternativa?
                            </td>
                             <td>SÍ</td>
                            <td>
                            <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-5">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                        </div>
                         <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--6" role="tabpanel">
                             <!-- Tabla 5. Accesibilidad técnica -->
                            <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fas fa-cookie-bite"></i>
                   Grado de atracción
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">(Attractiveness) hace referencia a aquellos aspectos estéticos del Sitio Web que influyen en las impresiones que el usuario percibe.</p>
                      
                       <div class="col-lg-14">
    
                    </div>
                      
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Característica</th>
                            <th>Atributo</th>
                            <th>Estudio</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Accesibilidad técnica</td>
                            <td>Uniformidad del color de fondo</td>
                            <td>¿Los colores de fondo de las interfaces se mantienen en los procesos del usuario?</td>
                           
                    <td>SÍ</td>
                            <td>
                                  <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-6">
                            Ver más
                            </button>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                             <td>Uniformidad de la fuente</td>
                            <td>¿Los colores, fuentes y tamaño de las fuentes se mantienen en los procesos del usuario?
                            </td>
                   <td>SÍ</td>
                            <td>
                                   <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-62">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td></td>
                             <td>Uniformidad en la posición de las secciones de la interfaz</td>
                            <td>¿Las opciones del usuario se mantienen a la vista a lo largo de los procesos?
                            </td>
                            
                     <td>SÍ</td>
                            <td>
                                  <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-6">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                        </div>
                      </div>
                      <!-- End Tab panes -->
                    </div>
                  </div>
                </div>

                <div class="shortcode-scripts">
                  <!-- JS Unify -->
                  <script  src="../../../assets/js/components/hs.tabs.js"></script>

                  <!-- JS Plugins Init. -->
                  <script >
                    $(document).on('ready', function () {
                      // initialization of tabs
                      $.HSCore.components.HSTabs.init('[role="tablist"]');
                    });

                    $(window).on('resize', function () {
                      setTimeout(function () {
                        $.HSCore.components.HSTabs.init('[role="tablist"]');
                      }, 200);
                    });
                  </script>
                </div>
              
                      </div>
                      <div class="tab-pane fade" id="nav-8-2-accordion-primary-hor-fill--2" role="tabpanel">
                               <div class="shortcode-html">
                  <div class="row">
                    <div class="col-md-3">
                          <i class="fa fa-tasks g-mr-5"></i>
                         Secciones / Elementos:
                         <br>
                         <br>
                      <!-- Nav tabs -->
                      <ul class="nav flex-column u-nav-v5-1" role="tablist" data-target="nav-5-1-accordion-ver-default-icons" data-tabs-mobile-type="accordion" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray g-mb-20">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--7" role="tab">
                            <i class="icon-communication-010 u-tab-line-icon-pro g-mr-3"></i>
                           Servidor / Dominio
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--8" role="tab">
                            <i class="icon-communication-025 u-tab-line-icon-pro g-mr-3"></i>
                          Plugins / Widgets
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--9" role="tab">
                            <i class="icon-communication-017 u-tab-line-icon-pro g-mr-3"></i>
                        Otras herramientas                       
                         </a>
                        </li>
                      </ul>
                      <!-- End Nav tabs -->
                    </div>
                    <div class="col-md-9">
                      <!-- Tab panes -->
                      <div id="nav-5-1-accordion-ver-default-icons" class="tab-content">
                      
                        <div class="tab-pane fade show active" id="nav-5-1-accordion-ver-default-icons--7" role="tabpanel">
                                <!-- Tabla 1. Servidor / Dominio -->
                            <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>

                     Servidor / Dominio

                    </h3>

                    <div class="card-block g-pa-15">
                      <p class="card-text">Información referente a los servicios instalados en el servidor y datos de interés.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Resultado</th>
                            <th>Elementos adicionales detectados</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Dominio</td>
                            <td>www.bnsdynamic.com</td>
                            <td>---</td>
                          </tr>
                          <tr>
                            <td>Servidor Web</td>
                            <td>Apache</td>
                            <td>---</td>
                          </tr>
                          <tr>
                            <td>Plataforma del servidor</td>
                             <td>No figura</td>
                            <td>---</td>
                          </tr>
                          <tr>
                            <td>Servicios de email</td>
                            <td>SPF</td>
                            <td>---</td>
                          </tr>
                            <tr>
                            <td>Proveedor DNS</td>
                            <td>NAMECHEAP</td>
                            <td>---</td>
                          </tr>
                               <tr>
                            <td>Dirección IP del servidor</td>
                            <td>185.61.154.40</td>
                            <td>---</td>
                          </tr>
                           <tr>
                            <td>Expiración del dominio</td>
                            <td class="hidden-sm">02-10-2020</td>
                            <td>---</td>
                          </tr>
                            <tr>
                            <td>Localización del servidor</td>
                            <td>Londres, Inglaterra</td>
                            <td>---</td>
                          </tr>
                           <tr>
                            <td>Persona que registró el Sitio</td>
                            <td>No figura</td>
                            <td>---</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>

                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--8" role="tabpanel">
                               <!-- Tabla 2. Plugins / Widgets -->
                            <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>

                     Plugins / Widgets
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Información referente a plugins y widgets instalados en tu web.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Resultado</th>
                            <th>Elementos adicionales detectados</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Herramientas de tráfico</td>
                            <td>Funnelytics</td>
                            <td>Facebook Pixel, Facebook Conversion Tracking</td>
                          </tr>
                          <tr>
                            <td>Herramientas de publicidad y estadísticas</td>
                            <td>Facebook Custom Audiences</td>
                            <td>---</td>
                          </tr>
                          <tr>
                            <td>Widgets</td>
                             <td>Rocket Chat</td>
                            <td>Google Font API, tawk.to, Font Awesome</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>
                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--9" role="tabpanel">
                              <!-- Tabla 3. Otros elementos -->
                         <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>

                    Otros elementos
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Información referente a frameworks y librerías javascript instaladas en tu sitio web.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Resultado</th>
                            <th>Elementos adicionales detectados</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Sistema de gestión de contenidos</td>
                            <td>Wishpond</td>
                            <td>---</td>
                          </tr>
                          <tr>
                            <td>Frameworks</td>
                            <td>No figura</td>
                            <td>---</td>
                          </tr>
                          <tr>
                            <td>Librerías Javascript</td>
                             <td>jQuery</td>
                            <td>Google Hosted Libraries, TweenMax, GSAP</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>
                        </div>
                      </div>
                      <!-- End Tab panes -->
                    </div>
                  </div>
                </div>

                <div class="shortcode-scripts">
                  <!-- JS Unify -->
                  <script  src="../../../assets/js/components/hs.tabs.js"></script>

                  <!-- JS Plugins Init. -->
                  <script >
                    $(document).on('ready', function () {
                      // initialization of tabs
                      $.HSCore.components.HSTabs.init('[role="tablist"]');
                    });

                    $(window).on('resize', function () {
                      setTimeout(function () {
                        $.HSCore.components.HSTabs.init('[role="tablist"]');
                      }, 200);
                    });
                  </script>
                </div>
                      </div>
                      
    <div class="tab-pane fade" id="nav-8-2-accordion-primary-hor-fill--3" role="tabpanel">
    <div class="shortcode-html">
                  <div class="row">
                        <div class="col-md-4 g-py-5">
                         <i class="fa fa-tasks g-mr-5"></i>
                         Elementos a corregir con urgencia:
 <br>
 <br>
  <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> Lista de elementos críticos sólo está disponible para usuarios con plan negocios.
          <br>
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
                              <!-- Alerta 1. Usabilidad --> 
                              <!--
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="h5">

                          <i class="fa fa-exclamation-triangle"></i>

                          Alerta de errores de código!

                        </h4>
                        <p class="g-mb-10">Tienes 24 Errores CSS/HTML/Javascript.</p>
                        <a href="https://validator.w3.org/check?uri=www.visitasguiadasroma.com&charset=%28detect+automatically%29&doctype=Inline&group=0" class="btn u-btn-teal btn-xs rounded-0 " target="_blank">
                          <i class="fa fa-chain-broken g-mr-2"></i>
                          Ver lista de errores
                        </a>
                        
                      </div>
                      --> 
                      <!--
                                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="h5">

                          <i class="fa fa-exclamation-triangle"></i>

                          Alerta enlaces rotos!

                        </h4>
                        <p class="g-mb-10">Tu portal tiene 11 enlaces rotos.</p>
                        
                      </div>
                      --> 
                      <!-- Alerta 2. Usabilidad --> 
                  
                             <!-- Alerta 3. Usabilidad --> 
    
    
    
                     </div>
                    <div class="col-md-8">
                      <!-- Nav tabs -->
                        <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>
                     Rendimiento del Sitio 

                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">A continuación presentamos el resultado de la evaluación de los factores que afectan el rendimiento de tu sitio Web:</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Resultado</th>
                            <th>Estándar recomendado</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>¿Existen links rotos?</td>
                            <td>0 Enlace roto</td>
                            <td>0 Enlaces rotos</td>
                            <td><span class="u-label u-label-success g-color-white">Excelente</span></td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-1">
                            Ver más
                            </button>
                           </td>
                          </tr>
                          <tr>
                            <td>Tiempo de carga del sitio</td>
                             <td>6.3 seg</td>
                            <td>Menor a 2.4 seg.</td>
                            <td>
                               <span class="u-label u-label-danger g-color-white">Deficiente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-2">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Redirección www</td>
                            <td>Configurado</td>
                            <td>Apuntar el dominio con y sin el www a la misma dirección.</td>
                            <td>
                                 <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-3">
                            Ver más
                            </button></td>
                          </tr>
                            <tr>
                            <td>Uso de flash</td>
                            <td>No utiliza flash</td>
                            <td>No usar elementos flash.</td>
                            <td>
                             <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-4">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Uso de tablas</td>
                            <td>No utiliza tablas</td>
                            <td>No usar tablas en sitio web.</td>
                            <td>
                                     <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-5">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Uso de frames</td>
                            <td>No utiliza frames</td>
                            <td>No es recomendable tener frames en tu Sitio.</td>
                            <td>
                                   <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-5">
                            Ver más
                            </button></td>
                          </tr>
                             <tr>
                            <td>Optimización Móvil</td>
                            <td>Optimizado para dispositivos móviles</td>
                            <td>Mantener optimizado el Sitio Web para diferentes resoluciones de pantalla.</td>
                            <td>
                              <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-6">
                            Ver más
                            </button></td>
                          </tr>
                              <tr>
                            <td>Errores CSS/HTML</td>
                            <td>Existen 9 Errores</td>
                             <td>
                            Mantener sitio sin errores CSS/HTML.
                            </td>
                            <td>
                             <span class="u-label u-label-warning g-color-white">Mejorable</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal2-7">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                      <!-- End Nav tabs -->
                    </div>
                  </div>
                </div>
        
             </div>
                       <div class="tab-pane fade" id="nav-8-3-accordion-primary-hor-fill--4" role="tabpanel">
                 <!-- Sección 4. Operatividad -->       
    <div class="shortcode-html">
                  <div class="row">
                        <div class="col-md-4 g-py-5">
                         <i class="fa fa-tasks g-mr-5"></i>
                         Elementos a corregir con urgencia:
 <br>
 <br>
                        
           
                             <!-- Alerta 2. Operatividad --> 
                              <!--   
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <strong>Urgente!</strong> Adquirir certificado SSL para tu Web
    </div>
    -->
  <!--
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
           <i class="fa fa-exclamation-triangle"></i>
      <strong>Configuración servidor DNS</strong> <br> Servicio funcionando con posibles errores.
    </div>
    -->
     <!-- Alerta 3. Operatividad --> 
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="h5">

                          <i class="fa fa-exclamation-triangle"></i>

                          Recomendación

                        </h4>
                        <p class="g-mb-10">Verificar el funcionamiento del servicio de correos del servidor si no se están utilizando servicios de
                        terceros para recibir y enviar emails (Ejemplo: servicios de Google).</p>
                      </div>
                     </div>
                    <div class="col-md-8">
                      <!-- Nav tabs -->
                        <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>
                     Operatividad del Sitio 

                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">A continuación presentamos el resultado de la evaluación de los factores que afectan la operatividad de tu sitio Web:</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Resultado</th>
                            <th>Diagnóstico</th>
                            <th>Estado</th>
                            <th>Detalles</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Lista negra del correo</td>
                            <td>0</td>
                            <td>Tu Sitio Web no se encuentra en lista negra.</td>
                            <td><span class="u-label u-label-success g-color-white">Excelente</span></td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-1">
                            Ver más
                            </button>
                            </td>
                          </tr>
                             <!--
                          <tr>
                            <td>Escaneo de puertos de un dominio</td>
                             <td>0 puertos adicionales abiertos</td>
                            <td>No hay entradas adicionales a las estándares.</td>
                            <td>
                             <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-2">
                            Ver más
                            </button></td>
                          </tr>
                           Table -->
                            <tr>
                            <td>URL permite conexiones http</td>
                            <td>SÍ</td>
                            <td>El servidor permite conexiones por http.</td>
                            <td>
                                 <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-2">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>URL permite conexiones http seguras.</td>
                            <td>SÍ</td>
                            <td>Certificado de seguridad SSL generado por USERTrust Sectigo RSA.</td>
                            <td>
                        <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-4">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Chequeo estándar de conexión (ping)</td>
                            <td>SÍ</td>
                            <td>Tu servidor está en funcionamiento.</td>
                            <td>
                                   <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-5">
                            Ver más
                            </button></td>
                          </tr>
                             <tr>
                            <td>Trazado de ruta (tracer)</td>
                            <td>15 Saltos</td>
                            <td>Dentro del rango de saltos (Nodos).</td>
                            <td>
                                        <span class="u-label u-label-success g-color-white">Excelente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-5">
                            Ver más
                            </button></td>
                          </tr>
                              <tr>
                            <td>Chequeo valores DNS</td>
                            <td> <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                             <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-6">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Autenticación de email</td>
                            <td>Verificación dmarc</td>
                             <td>
                             Registro dmarc no configurado
                            </td>
                            <td>
                             <span class="u-label u-label-danger g-color-white">Deficiente</span>
                            </td>
                            <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal3-7">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                      <!-- End Nav tabs -->
                    </div>
                  </div>
                </div>
                      </div>
                        <div class="tab-pane fade" id="nav-8-2-accordion-primary-hor-fill--5" role="tabpanel">
                               <div class="shortcode-html">
                  <div class="row">
                    <div class="col-md-3">
                          <i class="fa fa-tasks g-mr-5"></i>
                         Secciones / Elementos:
                         <br>
                         <br>
                      <!-- Nav tabs -->
                      <ul class="nav flex-column u-nav-v5-1" role="tablist" data-target="nav-5-1-accordion-ver-default-icons" data-tabs-mobile-type="accordion" data-btn-classes="btn btn-md btn-block rounded-0 u-btn-outline-lightgray g-mb-20">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--10" role="tab">
                           <i class="far fa-building"></i>
                           Identidad
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--11" role="tab">
                           <i class="far fa-check-circle"></i>
                         Confianza / Reputación
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--12" role="tab">
                          <i class="fas fa-user-friends"></i>
                        Comunicación <span class="g-ml-30 g-color-primary"> <i class="fas fa-arrow-alt-circle-up "></i></span>                   
                         </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--13" role="tab">
                          <i class="fas fa-shopping-cart"></i>
                        Proceso de ventas <span class="g-ml-6 g-color-primary"> <i class="fas fa-arrow-alt-circle-up "></i></span>                       
                         </a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#nav-5-1-accordion-ver-default-icons--14" role="tab">
                            <i class="fas fa-chart-area"></i>
                        Marketing                     
                         </a>
                        </li>
                      </ul>
                      <!-- End Nav tabs -->
                    </div>
                    <div class="col-md-9">
                      <!-- Tab panes -->
                      <div id="nav-5-1-accordion-ver-default-icons" class="tab-content">
                      
                        <div class="tab-pane fade show active" id="nav-5-1-accordion-ver-default-icons--10" role="tabpanel">
                                <!-- Tabla 1. Servidor / Dominio -->
                            <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>
                    Identidad
                    </h3>

                    <div class="card-block g-pa-15">
                      <p class="card-text">
Información sobre la evaluación de los elementos visuales críticos y el enfoque de mercado.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Diagnóstico</th>
                            <th>Puntuación</th>
                            <th>Ubicación</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Conexión entre mensaje e imágenes <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Conexión entre mensaje e imágenes.">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                            <td>   <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                            <td>
                      <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span></td>
                             <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-81">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Calidad de imágenes <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Evaluación de calidad de imágenes.">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                            <td>  <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td><span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span></td>
                             <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Balance <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Equilibrio entre la extensión de contenido y el número de imágenes.">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                             <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td> <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                             <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>

                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--11" role="tabpanel">
                               <!-- Tabla 2. Plugins / Widgets -->
                            <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>

                     Confianza / Reputación
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Información sobre la evaluación de elementos que transmiten confianza a tus clientes.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Diagnóstico</th>
                            <th>Puntuación</th>
                            <th>Ubicación</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>Elementos de confiabilidad <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Son los elementos de autoridad que respaldan a la empresa, tales como Sellos de calidad, Pertenencia a gremios, fotos del equipo,  política de privacidad y de protección de datos, entre otros.">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                            <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>
                      <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                              <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Errores de ortografía</td>
                            <td> <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>    <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Errores gramaticales</td>
                             <td> <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>   <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>

</td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Transmisión del mensaje <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Consistencia entre mensaje y público objetivo">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                             <td> <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td> <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-82">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>
                        </div>
                        <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--12" role="tabpanel">
                              <!-- Tabla 3. Otros elementos -->
                         <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>
                    Comunicación
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Información sobre la evaluación de elementos relacionados con el contenido del sitio web.</p>
                          <div class="col-lg-14">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> resultados sólo están disponibles para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Diagnóstico</th>
                            <th>Puntuación</th>
                            <th>Ubicación</th>
                          </tr>
                        </thead>

                        <tbody>
                         <tr>
                            <td>Claridad de la información</td>
                            
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Presencia de imagen <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Preservación de la imagen corporativa en todas las secciones del sitio web y las redes sociales (logotipo, colores, estilos, fuentes)">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                          
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Segmentación del contenido <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Diferenciación de contenido para diferentes tipos de clientes, por ejemplo: usuarios, socios, proveedores.">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                           
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>
                    </div>
                           <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--13" role="tabpanel">
                              <!-- Tabla 3. Otros elementos -->
                         <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
                      <i class="fa fa-tasks g-mr-5"></i>
                   Proceso de ventas
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Información sobre la evaluación de elementos relacionados con la apariencia del sitio web y el proceso de ventas.</p>
                          <div class="col-lg-14">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> resultados sólo están disponibles para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                             <th>Elemento</th>
                            <th>Diagnóstico</th>
                            <th>Puntuación</th>
                            <th>Ubicación</th>
                          </tr>
                        </thead>

                        <tbody>
                         <tr>
                            <td>Estilo visual general <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Visual quality of design">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                            
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Llamadas a la acción <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Purchase action buttons properly highlights (make purchase / cancel purchase).">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                        
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Funcionalidad de chat</td>
                            
                       <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                            <tr>
                            <td>Funcionalidad de chatbot</td>
                                  <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                           <tr>
                            <td>Formulario de contacto</td>
                                  <td>
                    <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
                                
                            </td>
                            <td>
                            <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
                            </td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>
                        </div>
                        
                          <div class="tab-pane fade" id="nav-5-1-accordion-ver-default-icons--14" role="tabpanel">
                              <!-- Tabla 3. Otros elementos -->
                         <div class="shortcode-html">
                  <!-- Basic Table -->
                  <div class="card g-brd-primary rounded-0">
                    <h3 class="card-header g-bg-primary g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">

                      <i class="fa fa-tasks g-mr-5"></i>

                    Marketing
                    </h3>
                    <div class="card-block g-pa-15">
                      <p class="card-text">Información sobre la evaluación de elementos relacionados con herramientas de marketing y conexión con el público objetivo.</p>
                    </div>

                    <div class="table-responsive">
                      <table class="table u-table--v1 mb-0">
                        <thead>
                          <tr>
                            <th>Elemento</th>
                            <th>Diagnóstico</th>
                            <th>Puntuación</th>
                            <th>Ubicación</th>
                          </tr>
                        </thead>
                        <tbody>
                         <tr>
                            <td>Referencias a fuentes externas. <button type="button" class="btn estilos-tooltip" data-toggle="tooltip" data-placement="top" title="Indicar fuentes en caso de publicar contenido de terceros.">
                                  <i class="fa fa-info-circle"></i>
                                </button></td>
                             <td>   <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>

                              <td><span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Conexión con el público objetivo</td>
                             <td>   <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a>
</td>
                            <td><span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span></td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                          <tr>
                            <td>Herramientas de marketing y analíticas.</td>
                             <td><a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>    <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                            Ver más
                            </button></td>
                          </tr>
                            <tr>
                            <td>Estructura de precios</td>
                             <td> <a href="#!" class="btn btn-md g-width-10 g-mr-10 g-mb-15">
                    <i class="fa fa-cog fa-spin"></i>
                    <span class="sr-only">Loading...</span>
                    </a></td>
                            <td>  <span class="u-icon-v1 g-mr-20 g-mb-20">
                            <i class="fas fa-lock"></i>
                            </span>
</td>
                               <td><button type="button" class="btn btn-sm u-btn-outline-indigo g-mr-10 g-mb-15" data-toggle="modal" data-target="#myModal1-33">
                          Ver más
                            </button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- End Basic Table -->
                </div>
                        </div>
                      </div>
                      <!-- End Tab panes -->
                    </div>
                  </div>
                </div>

                <div class="shortcode-scripts">
                  <!-- JS Unify -->
                  <script  src="../../../assets/js/components/hs.tabs.js"></script>

                  <!-- JS Plugins Init. -->
                  <script >
                    $(document).on('ready', function () {
                      // initialization of tabs
                      $.HSCore.components.HSTabs.init('[role="tablist"]');
                    });

                    $(window).on('resize', function () {
                      setTimeout(function () {
                        $.HSCore.components.HSTabs.init('[role="tablist"]');
                      }, 200);
                    });
                  </script>
                </div>
                      </div>
                    </div>
                    <!-- End Tab panes -->
                  </div>
                </div>
     </section>


                <div class="shortcode-scripts">
                  <!-- JS Unify -->
                  <script  src="../../../assets/js/components/hs.tabs.js"></script>

                  <!-- JS Plugins Init. -->
                  <script >
                    $(document).on('ready', function () {
                      // initialization of tabs
                      $.HSCore.components.HSTabs.init('[role="tablist"]');
                    });

                    $(window).on('resize', function () {
                      setTimeout(function () {
                        $.HSCore.components.HSTabs.init('[role="tablist"]');
                      }, 200);
                    });
                  </script>
                </div>


<div class="shortcode-html">
              
                  <div class="d-md-flex justify-content-md-center text-center">
                    <div class="align-self-md-center">
                      
              <div class="shortcode-html">
                <section class="g-brd-around g-brd-gray-light-v4 g-pa-30">
                  <div class="d-md-flex justify-content-md-center text-center">
                    <div class="align-self-md-center">
                      <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md"><span class="g-color-primary">2. Evaluación del auditor:</span> a continuación presentamos el resultado de la evaluación general de tu Sitio Web</p>
                    </div>
                  </div>
                </section>
              </div>
            </div>
        </div>
    </div>     



   <section class="g-py-0 g-px-80 g-mt-40 g-mb-40">
  <div class="shortcode-html g-mt-50">
              <div class="row">
                <div class="col-md-12">
                  <div class="u-heading-v2-3--bottom g-brd-primary g-mb-30">
                    <h2 class="h3 text-uppercase g-font-weight-300 u-heading-v2__title">Recomendación del auditor. 
                     </h2>
                       <p class="mb-0">Indicador de recomendación por parte del auditor Manuel Enrique Rangel:</p>
                  </div>
                
                <div class="shortcode-html">
                  <!-- Table Striped Rows -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Resultado</th>
                          <th>Veredicto</th>
                          <th>Recomendaciones / Acciones a seguir</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>1. Informe favorable</td>
                          <td></td>
                          <td>Validación Aprobada.</td>
                        </tr>
                        <tr>
                          <td>2. Informe favorable con observaciones de carácter menor.</td>
                          <td><span class="u-label u-label-danger g-color-white">Ejecutar correcciones</span></td>
                          <td>Se han observado deficiencias leves que es conveniente que sean
corregidas. Una vez tomadas las acciones correctivas, el portal
podrá recibir el sello de Validación de Calidad Web.</td>
                        </tr>
                        <tr>
                          <td>3. Informe desfavorable.</td>
                          <td></td>
                          <td>Existen no conformidades y/o un número de observaciones superior al 30% de los requisitos evaluados. Se deben llevar a cabo acciones correctivas profundas.</td>
                          <td>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table Striped Rows -->
                </div>
                
                </div>
              </div>
            </div>
</section>



<!-- Modal Por que es importante Usabilidad-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Qué importancia tiene la Usabilidad en mi Sitio Web?</h4>
      </div>
      <div class="modal-body">
        <p>Para acceder exitosamente al mercado actual es fundamental cumplir con los factores de Usabilidad.
        El cumplimiento de los factores de Usabilidad es un componente indispensable y esencial en el
        desempeño de Buenas Prácticas Comerciales y de la aplicación de Estándares de la industria</p>
         <p>Usabilidad es un término reciente y tiene que ver con la noción de facilitar el entendimiento y la
         interacción con un sitio Web. En términos prácticos, un portal web bien estructurado donde consigas
         rápidamente lo que buscas, que no esté recargado de contenido, que sea intuitivo, que sea
         consistente, en fin que respete al usuario.</p>
          <p>Principales beneficios de la Usabilidad:</p>
         <ul style="list-style-type:disc;">
         <li>Mayor satisfacción del usuario: representa más comodidad y menos esfuerzo.</li>
         <li>Fidelización: Usuarios más agradecidos, recurren a tu portal.</li>
         <li>Más Ventas: Evidentemente facilita el proceso de Compra y apoya al usuario.</li>
         </ul>
<p>Para medir y evaluar tu sitio Web en éste informe recurriremos a normas y estándares muy precisos en
relación a los factores de Usabilidad, consideraremos los principales factores basados en forma
cualitativa en la mayor parte de los resultados por la naturaleza misma de la medición.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Por que es importante componentes-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2">¿Qué importancia tienen los componentes de mi web?</h4>
      </div>
      <div class="modal-body">
        <p>En muchos casos, al instalar algún nueva funcionalidad en nuestra web, pueden agregarse automáticamente elementos que no necesitamos. Es muy importante
        verificar que plugins y widgets tenemos instalados en nuestra web y así evitar eventuales inconvenientes</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Por que es importante rendimiento-->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel3">¿Qué importancia tiene el rendimiento de mi Sitio Web?</h4>
      </div>
      <div class="modal-body">
        <p>Evidentemente mientras mejor sea el rendimiento de un Sitio Web mejor será la experiencia de
        usuario (Usabilidad), ésto se traducirá en usuarios más satisfechos y repercute en mejores ventas, por
        lo tanto incide en la reputación del Sitio Web, afectando positivamente el posicionamiento natural.</p>
        <p>
         Es necesario considerar que el rendimiento de un sitio Web depende de los recursos con los que
         cuenta para responder óptimamente a los requerimientos de los usuarios, dichos recursos son por
         ejemplo, la capacidad del servidor de respuesta simultánea, velocidad del procesador del servidor,
         memoria RAM, etc. que permitan garantizar un sitio moderno, rápido y robusto.  
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Por que es importante operatividad-->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel4">¿Mi Sitio Web se encuentra en riesgo de colapsar?</h4>
      </div>
      <div class="modal-body">
        <p>La elección de un buen proveedor y la correcta configuración del Servidor es un punto esencial en el desempeño de tu sitio web.</p>
        <p>
         La disponibilidad y operatividad web son factores que son tomados en cuenta por los motores de búsqueda. 
         Un sitio web con un servidor sano mantiene una buena reputación asegurando la tranquilidad de tu empresa y la de de tus clientes
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Por que es importante consistencia-->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel5">Consistencia</h4>
      </div>
      <div class="modal-body">
        <p>La consistencia comprende el grado en que los elementos de comunicación (del sitio Web en éste caso) están alineados -tales como alto nivel de coherencia textual, expresión gráfica, visual y emocional de la propuesta de la marca para lograr la conexión con el cliente potencial.</p>
        <p>
         Es un factor fundamental para lograr la persuasión y generar credibilidad necesaria en el proceso de compra que involucra la toma de decisiones. 
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Por que es importante marketing-->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel6">Marketing</h4>
      </div>
      <div class="modal-body">
        <p>Es imprescindible asegurar que los componentes y herramientas de marketing apoyen y respalden la gestión y misión del sitio Web.</p>
        <p>
         Cuando las herramientas usadas en una página Web están correctamente enfocadas al objetivo y propuesta del negocio, no se pierden recursos, se optimizan las ventas/resultados y se potencia la comunicación con el mercado.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal adecuacion de la fuente -->
<div class="modal fade" id="myModal1-1" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-1">Consistencia entre el sistema y el mundo real.</h4>
      </div>
      <div class="modal-body">
        <p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal tamaño de campos de formulario -->
<div class="modal fade" id="myModal1-12" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-12">Consistencia entre el sistema y el mundo real.</h4>
      </div>
<div class="modal-body">
<p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>

<p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal densidad de información -->
<div class="modal fade" id="myModal1-13" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-13">Consistencia entre el sistema y el mundo real.</h4>
      </div>
<div class="modal-body">


  
          
                    <p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>


<!-- Dificultad entendimiento de la informacion -->
<div class="modal fade" id="myModal1-14" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-14">Consistencia entre el sistema y el mundo real.</h4>
      </div>
   
<div class="modal-body">
<p><strong>Observaciones / Localización del incidente:</strong></p>

                    <p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Complejidad de la información -->
<div class="modal fade" id="myModal1-15" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-15">Consistencia entre el sistema y el mundo real.</h4>
      </div>
<div class="modal-body">
<p><strong>Observaciones / Localización del incidente:</strong></p>


 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Calidad de los mensajes de aviso -->
<div class="modal fade" id="myModal1-16" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-16">Consistencia entre el sistema y el mundo real.</h4>
      </div>
<div class="modal-body">
<p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4-1" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal4-1">Agregar URL.</h4>
      </div>
<div class="modal-body">
 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> la función agregar URL sólo está disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Alcanzabilidad -->
<div class="modal fade" id="myModal1-17" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-17">Consistencia entre el sistema y el mundo real.</h4>
      </div>
<div class="modal-body">
    <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Soporte a busqueda interna -->
<div class="modal fade" id="myModal1-18" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-18">Consistencia entre el sistema y el mundo real.</h4>
      </div>
<div class="modal-body">
<p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
<p>El Sitio Web tiene que “hablar” al usuario en su mismo lenguaje. Y esto no se refiere sólo al texto, sino también a
         elementos como:</p>
         <ul style="list-style-type:disc;">
         <li>Las imágenes</li>
         <li>El orden en que se hacen las cosas</li>
         <li>La forma en que se presenta la información</li>
         </ul>

<p>Consigue que la relación entre el cliente y la plataforma Web sea natural. Internet no es otra realidad, es parte
de la vida de las personas, y eso significa que el usuario rechaza, consciente o inconscientemente, interactuar
bajo unos códigos de comunicación y de conducta distintos a los suyos.</p>
<p>“Ser original”, “innovar” o “hacer cosas diferentes” no significa que debas imponer a tus usuarios un enfoque que
rompa sus esquemas “porque es más creativo”… salvo que sea requerido, pero recuerda que estamos hablando
de interfaces de usuario. Cuanto más claro, mejor.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Facilidad de aprendizaje-->
<div class="modal fade" id="myModal1-2" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-2">Visibilidad del Status (ESTADO) del Sistema.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>Es de vital importancia que tu usuario esté permanentemente informado sobre lo que está pasando cuando
        interactúa en tu Web, ya que “por detrás” ocurren acciones que no puede ver, y que le pueden producir
        incertidumbre en muchas situaciones. Esto parece obvio, pero lo cierto es que todavía se cometen errores graves
         de esta naturaleza, incluso en Webs de empresas del sector tecnológico.</p>
         <p>Debes proporcionar al usuario un feedback constante, esa es la función que cumplen, por ejemplo:</p>
         <ul style="list-style-type:disc;">
         <li>Las barras de proceso que nos indican cómo avanza la subida de un archivo.</li>
         <li>Los mensajes que nos confirman que “el formulario se ha enviado correctamente”.</li>
         <li>Una animación que nos indica que algo está siendo procesado sin incidencias.</li>
         </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Facilidad de uso-->
<div class="modal fade" id="myModal1-3" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-3">El usuario es libre y tiene el control.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>No fuerces al usuario a seguir un camino determinado, ya sea por un mal diseño o incluso de forma deliberada,
           porque a ti te interese. Evita a toda costa los “callejones sin salida”. Ejemplo: el usuario tiene que poder navegar
           libremente, encontrar con facilidad botones de salida” y botones a rutas alternativas, además de tener todas las
           facilidades que necesite para “hacer” y “deshacer”.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Prevencion de errores -->
<div class="modal fade" id="myModal1-35" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-35">El usuario es libre y tiene el control.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>No fuerces al usuario a seguir un camino determinado, ya sea por un mal diseño o incluso de forma deliberada,
           porque a ti te interese. Evita a toda costa los “callejones sin salida”. Ejemplo: el usuario tiene que poder navegar
           libremente, encontrar con facilidad botones de salida” y botones a rutas alternativas, además de tener todas las
           facilidades que necesite para “hacer” y “deshacer”.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Facilidad de ayuda-->
<div class="modal fade" id="myModal1-4" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-4">Ayuda al usuario a reconocer, diagnosticar y recuperarse de los errores.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>Los mensajes de error tienen que estar escritos en un lenguaje que el usuario pueda entender (sin palabras
        técnicas) y deben siempre sugerir una solución o un camino de salida.</p>
        <p>
         Por ejemplo, un ERROR 404 (página no encontrada), que es el más frecuente en cualquier Web, debería ser
         sustituido por una pantalla amistosa donde se dijera algo como: “Vaya, la página que buscas no está aquí. Por
        favor, utiliza este buscador [buscador] o haz clic en el enlace para volver a la página principal [enlace]”.   
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Accesibilidad técnica-->
<div class="modal fade" id="myModal1-5" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-5">Ayuda y documentación.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>Es preferible que el Sitio Web pueda usarse de manera intuitiva sin tener que acudir a “unas instrucciones”. No
        obstante, el usuario necesitará en ocasiones ayuda y documentación. Es preciso que esta información sea fácil de
        encontrar, y sobre todo que esté orientada a las tareas concretas que realiza el usuario, antes que a cuestiones
        teóricas o demasiado genéricas.</p>
        <p>
         Un buen ejemplo es la lista de preguntas frecuentes (normalmente abreviado en inglés como FAQ).   
        </p>
        <p>
        La idea es evitar que el usuario tenga que leer contenidos de ayuda que no le interesan antes de llegar al texto
        que realmente va a resolver su problema.   
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Grado de atracción-->
<div class="modal fade" id="myModal1-6" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-6">Consistencia y estándares.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>Tu Sitio Web debe seguir un estándar consistente en todas sus páginas. Es decir, no debes hacer por ejemplo que
        el menú funcione de manera diferente en distintas partes de tu Web, ni cambiarlo de ubicación porque te parece
        que “queda mejor”. No puedes usar distintos diseños para la misma cosa en distintos apartados (forma, color), ni
        una terminología variable.</p>
        <p>
         Si en tu tienda online el carrito se llama “cesta” y tiene un icono verde en la home, no puede llamarse “carro” y
        tener un icono rojo en la ficha de producto; tampoco puede estar situado unas veces en una esquina y en otra
        página aparece en una esquina diferente. Sé consistente en las decisiones que tomes. Es muy frecuente
        encontrar errores de este tipo en Internet, especialmente en Webs veteranas que han ido sufriendo
        modificaciones con el paso del tiempo.
        </p>
        <p>
        Los estándares simplifican el trabajo, optimizan la productividad y siguen las premisas de las buenas prácticas del
        comercio.   
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal7-1" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal7-1">Identidad de tu web - Elementos evaluados</h4>
      </div>
      <div class="modal-body">
       <ul style="list-style-type:disc;">
         <li>Identificación de la organización.</li>
         <li>Descripción de productos y servicios.</li>
         <li>Precios de productos y servicios.</li>
         <li>Alternativas y condiciones de envío.</li>
          <li>Códigos de conducta aplicados.</li>
               <li>Mecanismos para darse de baja en las comunicaciones comerciales.</li>
         </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal7-2" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal7-2">Fortaleza de ventas - Elementos evaluados</h4>
      </div>
      <div class="modal-body">
          <p>Permitir al cliente:</p>
       <ul style="list-style-type:disc;">
         <li>Posponer o cancelar proceso de compra.</li>
         <li>Disponer de un sistema de fácil comprensión que le guíe.</li>
         <li>Consultar el proceso en tiempo real.</li>
         <li>Información completa y sin errores sobre legislación aplicable y donde demandar.</li>
          <li>Acceder a las condiciones generales de contratación antes de iniciar la compra.</li>
               <li>Acceso al contrato para revisar y corregir errores.</li>
         </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Grado de atracción-->
<div class="modal fade" id="myModal1-62" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-62">Consistencia y estándares.</h4>
      </div>
      <div class="modal-body">
          <p><strong>Observaciones / Localización del incidente:</strong></p>

 <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
                    <p><strong>Tomar en cuenta:</strong></p>
        <p>Tu Sitio Web debe seguir un estándar consistente en todas sus páginas. Es decir, no debes hacer por ejemplo que
        el menú funcione de manera diferente en distintas partes de tu Web, ni cambiarlo de ubicación porque te parece
        que “queda mejor”. No puedes usar distintos diseños para la misma cosa en distintos apartados (forma, color), ni
        una terminología variable.</p>
        <p>
         Si en tu tienda online el carrito se llama “cesta” y tiene un icono verde en la home, no puede llamarse “carro” y
        tener un icono rojo en la ficha de producto; tampoco puede estar situado unas veces en una esquina y en otra
        página aparece en una esquina diferente. Sé consistente en las decisiones que tomes. Es muy frecuente
        encontrar errores de este tipo en Internet, especialmente en Webs veteranas que han ido sufriendo
        modificaciones con el paso del tiempo.
        </p>
        <p>
        Los estándares simplifican el trabajo, optimizan la productividad y siguen las premisas de las buenas prácticas del
        comercio.   
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<!-- Enlaces rotos-->
<div class="modal fade" id="myModal2-1" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-1">Links (Enlaces) rotos.</h4>
      </div>
      <div class="modal-body">
             <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> resultados sólo están disponibles para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
        <p>Los enlaces rotos son vínculos de un Sitio Web que llevan a un contenido que no existe.</p>
        <p>
         Existen dos problemas graves cuando tienes enlaces rotos, el primero es que tus usuarios van a tener una mala
         experiencia de navegación e incomodidad, ésto puede traer como consecuencia la pérdida de tus clientes.
        </p>
        <p>
        El segundo problema es que generan un impacto negativo en los buscadores. Ellos utilizan un mecanismo
        llamado arañas (spiders), que rastrean todos los enlaces de los Sitios Web, posteriormente hacen una evaluación. 
        </p>
          <p>
        Si detectan una cantidad importante de enlaces rotos clasifican a tu sitio Web como no-recomendable, ésto
        genera una mala reputación en tu Sitio Web y en el peor de los casos tu Web sería invisible para motores de
        búsqueda como Google.
        </p>
         <p>
        Para evitar ésta situación, tu Sitio Web debe ser monitorizado periódicamente para corregir este fallo.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2-2" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-2">Tiempo de carga del Sitio.</h4>
      </div>
      <div class="modal-body">
          <p><strong>El tiempo de carga de tu web se puede optimizar aún más:</strong></p>
         
         <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
          
             <p><strong>Tomar en cuenta:</strong></p>
        <p>La velocidad de una página puede afectar la experiencia del usuario, éste elemento es vital y uno de los más
         importantes en la evaluación de calidad de tu Sitio Web.</p>
        <p>
         Un tiempo de carga alto genera una mala reputación en la Web, ésto puede ocurrir por varias razones: pobre
         optimización del código, problemas con el servidor, problemas con la red o problemas de terceros (códigos
         publicitarios, de análisis, etc.). La optimización oportuna del código mejora el tiempo de carga de tu Sitio Web.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2-3" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-3">La URL de mi sitio Web ¿con ó sin www al inicio?</h4>
      </div>
      <div class="modal-body">
        <p>Debes unificar el sitio con www. o sin www. en un sitio mismo sitio Web para asegurarte que los usuarios
        accedan de cualquier manera a tu Web. Ésto también es necesario para que tu Sitio Web pueda aparecer
        correctamente indexado en el motor de búsqueda y evitar penalizaciones (por considerar que tienes páginas
        duplicadas ya que toma como dos páginas diferentes las dos direcciones).</p>
        <p>
        Además, si utilizamos ambas, perjudicamos a nuestro sitio, ya que estaríamos dividiendo el valor de dichos
        enlaces y tu reputación en la Web se vería afectada o lo que es lo mismo, el valor que Google le da a tu Sitio se
        encontraría dividido entre esas dos URLS.
        </p>
        <p>
        Para solucionar éste problema debe indicarse al motor de búsqueda cuál va a ser tu dominio preferido.
        Posteriormente se debe proceder a la creación de una configuración llamada redireccionamiento 301, ésto hace
        que cuando alguien intente acceder a tu Sitio utilizando el nombre de dominio que has descartado,
        automáticamente sea redirigido a la URL correcta.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2-4" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-4">Uso de flash en la actualidad</h4>
      </div>
      <div class="modal-body">
        <p>Para que tus usuarios puedan ver contenido flash deben instalar un pluggin. La tecnología Flash ha entrado en
        desuso desde que Google lo condenó y no lo recomienda, es más, lo penaliza dentro de su sistema de indexación
        en el buscador.</p>
        <p>
        Los plugins pueden resultar molestos para algunos usuarios, además hay que estar actualizándolos
        constantemente. Trata de evitar los contenidos flash de tu sitio.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2-5" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-5">Uso de tablas y frames</h4>
      </div>
      <div class="modal-body">
        <p>Algunos navegadores no soportan los frames. Esto no es muy habitual, pero si estamos haciendo una página que
         queramos que sea totalmente accesible deberíamos considerarlo importante.</p>
        <p>
        Los frames quitan espacio en la pantalla. El espacio ocupado por los frames fijos se pierde a la hora de hacer
        páginas nuevas, porque ya está utilizado. En definiciones de dispositivos móviles, éste problema se hace más
        patente.
        </p>
         <p>
       Las tablas pueden causar problemas a tu Web porque los motores de búsqueda no rastrean ni indexan sus
       contenidos. Evita las tablas siempre que puedas.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2-6" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-6">Mi Sitio Web en dispositivos móviles/tablets</h4>
      </div>
      <div class="modal-body">
        <p>Responsive Web Design es la técnica que nos permite crear sitios adaptables a las condiciones del ordenador,
        tablet o dispositivo desde donde se van a acceder, sobre todo en lo que tiene relación con la pantalla del sistema
        donde se están visualizando. Aunque el término es suficientemente general como para poder referirse a una
        adaptabilidad en torno a cualquier condición.</p>
        <p>
        El uso de los dispositivos móviles para navegar por Internet se encuentra en constante aumento, es importante
        que tu diseño responsive siempre esté disponible para tus usuarios.
        </p>
         <p>
       Las tablas pueden causar problemas a tu Web porque los motores de búsqueda no rastrean ni indexan sus
       contenidos. Evita las tablas siempre que puedas.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2-7" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal2-7">Errores de código</h4>
      </div>
      <div class="modal-body">
          
          <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
         
        <p>Cumplir con la validación de la World Wide Web Consortium es una buena práctica que no sólo provee la
        satisfacción de saber que tu sitio Web cumple con esos estándares, es decir, está bien hecha, sino que también
        nos permite proyectar profesionalismo hacia afuera, ya sean nuestros usuarios, clientes o competidores.</p>
        <p>
        Un código limpio, prolijo y claro, producto del cumplimiento de estándares, permite mejorar el mantenimiento,
        reutilización y actualización a futuro, por el mismo o nuevos desarrolladores.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3-1" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3-1">Listas negras de correo</h4>
      </div>
      <div class="modal-body">
        <p>Es posible que el servidor de tu empresa puede estar vinculado a una lista negra de correos sin que tú lo sepas. La lista
negra de correos pone en riesgo los correos salientes de tu empresa al hacer llegar tus correos como correo
basura.</p>
        <p>
      ¿Cómo ocurre ésto?
        </p>
        <p>
        La lista negra de correos es gestionada por algunos servidores de correo que hacen evaluaciones periódicas, y en
        caso de encontrar algunos factores que consideran no propios, automáticamente quedan atrapados en listas de
        correos etiquetadas como spam o correo no deseado, son las listas negras.   
        </p>
        <p>
         Afortunadamente es posible revertir ésta acción si se cumple con una corrección a tiempo y que ubique a tus
         emails fuera de riesgo.  
        </p>
        <p>
        Detectar y realizar a tiempo una revisión periódica de tus correos electrónicos, evita que tu trabajo se pueda
        perder y afecte tu reputación Web.    
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3-2" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3-2">Los peligros de los puertos de conexión abiertos</h4>
      </div>
      <div class="modal-body">
        <p>Los puertos son entradas a tu Sitio Web. Éstos puntos pueden tener vulnerabilidades que pueden ser
aprovechadas por otros usuarios o programas maliciosos. Sin saberlo, una persona puede estar tratando de
acceder a información confidencial de tu organización, también pueden entrar virus maliciosos que vagan por la
red causando serios problemas.</p>
        <p>
      ¿Cómo ocurre ésto?
        </p>
        <p>
       Para prevenir un eventual ataque, una de las medidas que se aplican es permitir el acceso sólo a los servicios que
       sean necesarios, dado que cualquier servicio expuesto en la Internet es un punto de acceso potencial para
       intrusos. Otro mecanismo de prevención es bloquear aquellos puertos que no se estén utilizando para no dar
       facilidades a los hackers quienes hacen escaneos aleatorios de puertos por Internet, intentando identificar las
       características de los sistemas conectados y siempre preparados para intervenir.  
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3-4" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3-4">¿Por qué es importante contar con un certificado de seguridad SSL?</h4>
      </div>
      <div class="modal-body">
        <p>Muchos sitios de e-Commerce manejan datos sensibles de la empresa y es necesario evitar que lleguen a caer en
manos equivocadas. Por ejemplo, para los sitios Web, como tiendas en línea que recopilan números de tarjeta de
crédito, direcciones, correos electrónicos, números telefónicos y nombres, SSL es una necesidad obligatoria.</p>
        <p>
      Los sitios que deben considerar adquirir SSL:
        </p>
         <ul style="list-style-type:disc;">
         <li>Sitios que manejen información personal o privada.</li>
         <li>Sitios que necesiten login de usuarios.</li>
         <li>Sitios que acepten pagos con tarjeta de crédito u otros métodos electrónicos.</li>
         <li>Intranets que necesiten protección en el tráfico y en el acceso a bases de datos.</li>
         </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3-5" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3-5">¿Mis clientes están accediendo a mi Sitio Web?</h4>
      </div>
      <div class="modal-body">
        <p>Sin saberlo, tus clientes pueden estar tratando de acceder a tu página pero con dificultades o sencillamente no
pueden acceder; una de las razones es que pueden existir conflictos en la red que impiden comunicar tu Sitio Web
con las personas que están solicitando entrar.</p>
        <p>
     Cuando el cliente quiere entrar a tu Sitio Web, internamente realiza un proceso de saltos (nodos) para poder llegar
hasta tu servidor. Es necesario saber cómo tu sitio “se mueve” por la Web además de cuanto tiempo se tarda en
responderle a un cliente. Para evitar inconvenientes de conflictos en la red necesita realizarse una serie de
pruebas de conexión de manera periódica, y así evitar sorpresas. Existe una medición del tiempo de respuesta
preciso que debe estar dentro de los estándares de la Web que indica el reporte. Tu sitio Web debe cumplir con
éste estándar.
        </p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3-6" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3-6">¿Mis clientes están accediendo a mi Sitio Web?</h4>
      </div>
      <div class="modal-body">
          
           <strong><p>Tomar en cuenta:</p></strong>
        <p>La principal tarea de un servidor de DNS es traducir tu nombre de dominio, ejemplo: misitio.com en una dirección
IP. El servicio de DNS permite, una vez configurado, que tu web y tu correo electrónico sean localizados desde
cualquier lugar del mundo mediante tu nombre de dominio.</p>
        <p>
    Un DNS mal configurado, es una mala señal: sin darte cuenta, tu Sitio Web podría estar vagando en la red como
un fantasma y nadie podría acceder a él, tanto es el daño que las visitas a tu página se podrían reducir hasta cero,
entre otros inconvenientes. Es de vital importancia monitorizar constantemente la configuración DNS de tu Sitio
Web.
        </p>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3-7" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal3-7">Autenticación de emails</h4>
      </div>
      <div class="modal-body">
            <strong><p>Observaciones / Localización del incidente:</p></strong>
         
         <p>Registro DMARC no configurado.</p>
         
          <p><strong>¿A cuáles riesgos estoy expuesto?</strong></p>
         
          <p>La ausencia de registros DMARC en tu servidor de correos representa un alto riesgo de uso de suplantación de tus emails para prácticas de phishing (métodos para obtener información bancaria y ejecutar estafas).</p>
          
            <p><strong>Recomendación:</strong></p>
             <p>Contactar a tu proveedor de hosting y solicitar la configuración DMARC del servicio de email correspondiente a tu dominio.</p>
          
         <div class="col-lg-12">
    <!-- Yellow Alert -->
    <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte completo sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>

                    </div>
         
          <strong><p>Tomar en cuenta:</p></strong>
        <p>Es de vital importancia contar con un servidor eficiente de correos con parámetros de excelencia en el
        rendimiento, así como conocer su funcionamiento correcto. Ésto es precisamente lo que observamos y
        evaluamos en las pruebas hechas en el reporte.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1-33" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-33">Detalle del incidente</h4>
      </div>
<div class="modal-body">
<strong>Observaciones:</strong>
<br>
   <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte detallado sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1-81" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-81">Detalle del incidente</h4>
      </div>
<div class="modal-body">
<strong>Observaciones:</strong>
<br>
   <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte completo sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal1-82" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModal1-82">Detalle del incidente</h4>
      </div>
<div class="modal-body">
<strong>Observaciones:</strong>
<br>

   <div class="alert alert-dismissible fade show g-bg-yellow rounded-0" role="alert">
      <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>

      <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">

          <i class="icon-info g-font-size-25"></i>

        </span>
        <span class="media-body align-self-center">

          <strong>Importante!</strong> reporte completo sólo disponible para usuarios con plan negocios.
          <a href="https://qualitasplaza.com/cotizacion-negocios.html" class="btn btn-sm u-btn-indigo g-mr-10 g-mb-15 g-mt-10">
                    <i class="fa fa-check-circle g-mr-3"></i>
Upgrade
                  </a>
        </span>
      </div>
    </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

<br>
<br>

<!-- Boton Instrucciones-->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
  Launch demo modal
</button> -->

<!-- Modal Instrucciones-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Título prueba</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="myModal1-50" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
<div class="modal-body">
<!-- <link href="https://d1gwclp1pmzk26.cloudfront.net/agile/forms/v1/agile-form.min.css" rel="stylesheet"> -->

<link href="https://doxhze3l6s7v9.cloudfront.net/app/static/agile/forms/agile-form.min.css" rel="stylesheet">
<form class="form-view theme3" id="agile-form" action="https://qualitasplaza.agilecrm.com/formsubmit" style="max-width:450px;" method="GET">
<fieldset>

<!-- Form Name -->
<legend>Suscripción a boletín</legend>
<p class="agile-form-description">Déjanos tus datos para suscribirte a nuestro boletín. Mantente al día con información relevante!</p>
<div style="display: none; height: 0px; width: 0px;">
<input type="hidden" id="_agile_form_name" name="_agile_form_name" value="Suscripción a boletín">
<input type="hidden" id="_agile_domain" name="_agile_domain" value="qualitasplaza">
<input type="hidden" id="_agile_api" name="_agile_api" value="4cfvjhag0ln8k6pkbrh4im157l">
<input type="hidden" id="_agile_redirect_url" name="_agile_redirect_url" value="https://qualitasplaza.com/gracias-suscripcion.html">
<input type="hidden" id="_agile_document_url" name="_agile_document_url" value="">
<input type="hidden" id="_agile_confirmation_msg" name="_agile_confirmation_msg" value="">
<input type="hidden" id="_agile_form_id_tags" name="tags" value="suscriptor-boletin">

<input type="hidden" id="_agile_form_id" name="_agile_form_id" value="6719115545673728">
</div>
<!-- Text input-->
<div class="agile-group required-control">
  <label class="agile-label" for="agilefield-1">Nombre<span class="agile-span-asterisk"> *</span></label>
  <div class="agile-field-xlarge agile-field">
  <input maxlength="250" id="agilefield-1" name="first_name" type="text" placeholder="Nombre" class="agile-height-default" required="">
  </div>
  <div class="agile-custom-clear"></div>
</div>
<!-- Text input-->
<div class="agile-group required-control">
  <label class="agile-label" for="agilefield-2">Email<span class="agile-span-asterisk"> *</span></label>
  <div class="agile-field-xlarge agile-field">
  <input maxlength="250" id="agilefield-2" name="email" type="email" placeholder="Email" class="agile-height-default" required="">
  </div>
  <div class="agile-custom-clear"></div>
</div>
 <!--recaptcha aglignment--><div class="agile-group"><label class="agile-label"></label><div class="agile-field-xlarge agile-field"><div class='g-recaptcha' style="transform:scale(0.91);-webkit-transform:scale(0.91);transform-origin:0 0;-webkit-transform-origin:0 0; width='304px';" data-sitekey='6Levg2cUAAAAAAydMF-IpJ57h5la9pxH8ZLJBMsH' data-callback='agileGCaptchaOnSuccess'></div></div></div>
<!-- Button -->
<div class="agile-group">
  <label class="agile-label">&nbsp;</label>
  <div class="agile-field agile-button-field">
    <button type="submit" class="agile-button">Enviar</button>
    <br><span id="agile-error-msg"></span>
  </div>
</div>

</fieldset>
</form><script id="gRecaptchaSrc" src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
(function(a){var b=a.onload,p=false;isCaptcha=true;if(p){a.onload="function"!=typeof b?function(){try{_agile_load_form_fields()}catch(a){}}:function(){b();try{_agile_load_form_fields()}catch(a){}}};var formLen=document.forms.length;for(i=0;i<formLen;i++){if(document.forms.item(i).getAttribute("id")== "agile-form"){a.document.forms.item(i).onsubmit=function(a){a.preventDefault();try{_agile_synch_form_v5(this)}catch(b){this.submit()}}}}})(window);
</script>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>

    <!-- End Team Blocks -->
          <div class="shortcode-html">
            <!-- Footer -->
            <?php
              include_once 'includes/footer.php'
            ?>
            <!-- End Footer -->
          </div>

    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>

  <!-- JS Dark Skin -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/change-theme.js"></script>

  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="../../assets/vendor/cookiejs/jquery.cookie.js"></script>
  
    <!-- jQuery UI Core -->
  <script src="../../assets/vendor/jquery-ui/ui/widget.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/version.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/keycode.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/position.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/unique-id.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/safe-active-element.js"></script>
   <!-- jQuery UI Helpers -->
  <script src="../../assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>
  
   <!-- jQuery UI Widgets -->
  <script src="../../assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/vendor/typedjs/typed.min.js"></script>
  <script  src="../../assets/vendor/appear.js"></script>
    <script src="../assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="../assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
     <script src="../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
 <script src="../assets/vendor/chartist-js/chartist.min.js"></script>
 <script src="../assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.carousel.js"></script>
   <script src="../assets/js/components/hs.side-nav.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.popup.js"></script>
  <script src="assets/js/components/text-animation/hs.text-slideshow.js"></script>
  <script src="assets/js/components/hs.go-to.js"></script>
<script src="../assets/js/components/hs.range-datepicker.js"></script>
    <script src="../../assets/js/components/hs.datepicker.js"></script>
     <script src="../../assets/js/components/hs.dropdown.js"></script>
     <script src="../../assets/js/components/hs.scrollbar.js"></script>
     <script src="../assets/js/components/hs.area-chart.js"></script>
     <script src="../assets/js/components/hs.donut-chart.js"></script>
     <script src="../assets/js/components/hs.bar-chart.js"></script>
       <script src="../../assets/js/helpers/hs.focus-state.js"></script>
       <script src="../assets/js/components/hs.popup.js"></script>


  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script  src="../../assets/js/components/hs.progress-bar.js"></script>
    <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();

      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of charts
      $.HSCore.components.HSAreaChart.init('.js-area-chart');
      $.HSCore.components.HSDonutChart.init('.js-donut-chart');
      $.HSCore.components.HSBarChart.init('.js-bar-chart');

      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav', {
        afterOpen: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        },
        afterClose: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        }
      });

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

      // initialization of datepicker
      $.HSCore.components.HSDatepicker.init('#datepicker', {
        dayNamesMin: [
          'SU',
          'MO',
          'TU',
          'WE',
          'TH',
          'FR',
          'SA'
        ]
      });

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
    });
  </script>
  
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "an awesome template",
            "perfect template",
            "just like a boss"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>
  <script>
  $(document).on('ready', function () {
    // initialization of horizontal progress bars
    var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
      direction: 'horizontal',
      indicatorSelector: '.js-hr-progress-bar-indicator'
    });
  });
</script>
  

</body>

</html>