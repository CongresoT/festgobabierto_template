<?php

defined('_JEXEC') or die;
$this->setMetaData('generator','');

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Output as HTML5
$doc->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');


$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', 'text/javascript');
$doc->addScript('templates/' . $this->template . '/js/main.js');

?>
<!DOCTYPE html>
<html>
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Oswald|Roboto" rel="stylesheet"> 
</head>
  <body>
		<div class="container-fluid pageHead">
            <div class="row" id="contdown">
                <div class="col-xs-12">
                    <jdoc:include type="modules" name="countdown" style="xhtml" />
                </div>
            </div>
			<div class="row">
				<div class="page-header">
					<div class="row row-head">
						<div class="col-xs-4 col-md-5"></div>
						<div class="col-xs-4 col-md-2">
							<div class="row">
								<?php
									if ($this->params->get('logoFile')) {
										$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
									}
									else {
										$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
									}
								?>
								<a id="siteLogo" class="col-xs-12 col-sm-12" href="<?php echo $this->baseurl; ?>/"><?php echo $logo; ?></a>
							</div>
						</div>
						<div class="col-xs-4 col-md-5"></div>
					</div>
				</div>
			</div>
            <div class="row">
                <nav class="navbar col-xs-12">
                    <div class="row">
                        <div class="navbar-header col-xs-1 hidden-sm hidden-md hidden-lg">
                            <button type="button" class="navbar-toggle navbar-inverse collapsed pull-left" data-toggle="collapse" data-target="#festival-navbar-menu" aria-expanded="false">
                              <span class="sr-only">Cambiar modo de navegación</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse col-xs-12" id="festival-navbar-menu">
                            <jdoc:include type="modules" name="pageMenubar" style="xhtml" />
                        </div>
                    </div>
                </nav>
            </div>

		</div>
		<jdoc:include type="modules" name="debug" style="xhtml" />
		<div class="container pageBody">
			<div class="row pageMain">
			    <div class="hidden-xs col col-sm-1"></div>
				<div class="col-xs-12 col-sm-10">
                    <jdoc:include type="message" />
					<?php
					$menu = JFactory::getApplication()->getMenu();
					if ($menu->getActive() != $menu->getDefault()): ?>
							  <jdoc:include type="component" />
					<?php 
                    else: 
                    ?>
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div style="display:table; table-layout:fixed;">
                                <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo JUri::root() ?>images/banners/fechas.jpg" alt="1er Festival de Gobierno Abierto 7 y 8 de Noviembre en la Universidad Rafael Landivar"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="embed-responsive embed-responsive-4by3">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W0njU7rFgTM"></iframe>
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div class="home-text">
                                <h2>Por una Guatemala con ideas innovadoras</h2>
                                <p>
                                El primer festival de Gobierno abierto es un espacio en Guatemala para compartir experiencias, ideas e iniciativas sobre gobierno abierto y acceso a la información pública. Buscamos la participación de todos los sectores para juntos construir una Guatemala con ideas innovadoras.
                                </p>
                                <p>
                                Tendremos conferencias, talleres, foros, desconferencias, pechakuchas y una visualizatón.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="home-text">
                                <jdoc:include type="modules" name="pageNewsflash" style="xhtml" />
                            </div>
                        </div>
                    </div>
                    <jdoc:include type="modules" name="pageContent" style="xhtml" />
                    <?php
                    endif;
                    ?>
                              <!--br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                              <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/-->

				</div>
				<div class="hidden-xs col col-sm-1"></div>
			</div>
		</div>
        <?php if ($menu->getActive() == $menu->getDefault()): ?>
            <div class="container-fluid pageBottom">
                <h4>Organizan</h4>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/organizadores/coop_alemana.jpg" alt="Cooperación Alemana - Deutsche Welle Akademie"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/organizadores/dw.gif" alt="Cooperación Alemana - Deutsche Welle Akademie"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/organizadores/logo_guatecambia.png" alt="Guatecambia"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/organizadores/logo-ct.png" alt="Congreso Transparente"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/organizadores/logo_munisabiertas.png" alt="Munis Abiertas"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/organizadores/url.jpg" alt="Universidad Rafael Landivar"/>
                        </a>
                    </div>
                </div>
                <h4>Apoyan</h4>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="https://www.opengovpartnership.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/ogp.png" alt="Open Government Partnership"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="http://www.oas.org/es/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/oea.gif" alt="Organización de los Estados Americanos"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/red_gobierno_abierto.png" alt="Red de Gobierno Abierto para Gobiernos Locales"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/red_academia.png" alt="Red Académica de Gobierno Abierto"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/carter_center.jpg" alt="The Carter Center"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="https://es.schoolofdata.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/escuela_de_datos.png" alt="Escuela de Datos"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="http://www.gigapp.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/gigapp.jpg" alt="Grupo de Investigación en Gobierno, Administración y Políticas Públicas"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/gigapaloza.png" alt="Gigappaloza"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="http://cceguatemala.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/cce.png" alt="Centro Cultural España - Cooperación Española"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="http://cceguatemala.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/cooperacion_espaniola.png" alt="Centro Cultural España - Cooperación Española"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="https://www.eventmobi.com/es/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/eventmobi.png" alt="Eventmobi"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="http://sonica.gt/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/apoyan/sonica.png" alt="Sonica 106.9"/>
                        </a>
                    </div>
                </div>
                <h4>Patrocinan</h4>
                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/patrocinan/coop_alemana.jpg" alt="Cooperación Alemana - Deutsche Welle Akademie"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/patrocinan/dw.gif" alt="Cooperación Alemana - Deutsche Welle Akademie"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="https://www.ndi.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/patrocinan/ndi.png" alt="National Democratic Institute"/>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <a target="_blank"  href="http://www.iri.org/">
                            <img style="width:100%; display:table-cell; vertical-align:middle;" src="<?php echo $this->baseurl; ?>/templates/festgobabierto/images/logos/patrocinan/iri.png" alt="International Republican Institute"/>
                        </a>
                    </div>
                </div>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <?php endif; ?>
		<div class="pageFooter">
            <jdoc:include type="modules" name="pageFooter" style="xhtml" />
		</div>
	</body>
</html>