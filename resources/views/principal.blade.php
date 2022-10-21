<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> 
<html class="no-js" lang="es">

<!-- Mirrored from www.nubefact.com/cotizar by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 17:44:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="shortcut icon" type="image/x-icon" href="assets/favicon-db15f11a314835725301c0fd6d51dbc285746c6985dc4985ad9482a196f83d39.png" />
    <title>Cotizar en línea | Factura Electrónica Perú Sunat - NubeFacT</title>
<meta name="description" content="Cotizar en línea NUBEFACT un Operador de Servicios Electrónicos (OSE) y Proveedor de Servicios Electrónicos (PSE) autorizado por la SUNAT en el PERU" />
<meta name="keywords" content="Factura, Electrónica, Perú, Sunat, Operador, de, Servicios, Electrónicos, (OSE), y, Proveedor, (PSE), PERU, Boleta, Venta, Nota, Crédito, Débito, Comprobante, Retención, Percepción, Guía, Remisión" />
  <link rel="stylesheet" media="screen" href="css/estilos.css" data-turbolinks-track="reload" />
  <script src="js/javas.js" data-turbolinks-track="reload"></script>

  <script src='../www.google.com/recaptcha/api.js' defer></script>
    <script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-58881609-1', 'auto');
    ga('send', 'pageview');
</script>
  <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="wPQVcx++HLQt9hvohTyRlNyE3Pt8DxFAIYNu0vcihL/ZQlIdBJywbncsaZsBxPbrd2rEDxYH8Veye+JNky9lrQ==" />
</head>

<body class="public_pages logged_out" data-turbolinks=false>

<div class="loading-page hide">
  <div class="loading-page-text">
    <div><i class="fa fa-refresh fa-spin"></i> Cargando...</div>
    <div class="loading-page-text-custom"></div>
  </div>
</div>

<div id="eventos_programados"></div>




    <header class="sticky-shrinknav-header">
  <div class="menu-top show-for-large">
    <div class="row">
      <div class="float-left">
        <span class="nuevo-public-body">
          <a href="#" data-open="verificado-por-sunat">
          Ya somos un Operador de Servicios Electrónicos - <b>OSE</b>
          </a>
        </span>

      </div>
      <div class="float-right">
        <ul class="menu">
          <li>
  <a href="https://www.youtube.com/c/Nubefact" target="_blank">
    <i class="fa fa-youtube-play"></i>
  </a>
</li>
<li>
  <a href="https://www.facebook.com/nubefact" target="_blank">
    <i class="fa fa-facebook-square"></i>
  </a>
</li>
<li>
  <a href="https://www.linkedin.com/company/nubefact" target="_blank">
    <i class="fa fa-linkedin-square"></i>
  </a>
</li>

<li class="">
  <a data-toggle="menu-dropdown-cotizar" class="button" href="{{route('home')}}">
    <b class=""><i class="fa fa-magic"></i> COTIZAR AHORA MISMO</b>
</a>  <div class="dropdown-pane small has-position-bottom has-alignment-center arrow_box" data-position="bottom" data-alignment="center" id="menu-dropdown-cotizar" data-auto-focus="true" data-close-on-click="true" data-dropdown>
    <p class="text-center">COTIZAR <b>EN LÍNEA</b></p>
<p class="text-center">Envíanos tus datos y te enviaremos una cotización automáticamente.</p>
<p class="text-center lead">ACTIVACIÓN AUTOMÁTICA (en minutos).</p>
<p class="text-center">
  <a class="button large" data-no-turbolink="true" href="cotizar.html">Cotizar aquí</a>
</p>
  </div>
</li>

<li class="">
  <a data-toggle="menu-dropdown-ventas" href="#">
    <b class=""><i class="fa fa-heart"></i> VENTAS</b>
</a>  <div class="dropdown-pane small has-position-bottom has-alignment-center arrow_box" data-position="bottom" data-alignment="center" id="menu-dropdown-ventas" data-auto-focus="true" data-close-on-click="true" data-dropdown>
    <p class="text-center">CONTACTAR CON <b>VENTAS</b></p>
<p class="text-center"><b>Estos canales son exclusivamente para VENTAS</b></p>
<ul class="menu vertical">
  <li>
    <a><i class="fa fa-phone"></i> 01 468 3535</a>
  </li>
  <li>
    <a data-open="modal-whatsapp" class="whatsapp-button" href="#">
      <b class=""><i class="fa fa-whatsapp"></i> WhatsApp Ventas</b>
</a>  </li>
  <li>
    <a href="mailto:&#118;&#101;&#110;&#116;&#097;&#115;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;">
      <i class="fa fa-envelope-o"></i> &#118;&#101;&#110;&#116;&#097;&#115;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;
    </a>
  </li>
  <li class="">
    <a href="cotizar.html">
      <i class="fa fa-magic"></i> Solicitar cotización
</a>  </li>
</ul>
  </div>
</li>

<li class="">
  <a data-toggle="menu-dropdown-soporte" href="#">
    <b class=""><i class="fa fa-question-circle-o"></i> SOPORTE</b>
</a>  <div class="dropdown-pane small has-position-bottom has-alignment-center arrow_box" data-position="bottom" data-alignment="center" id="menu-dropdown-soporte" data-auto-focus="true" data-close-on-click="true" data-dropdown>
    <div class="text-center">CONTACTAR CON <b>SOPORTE</b></div>
<p class="text-center">Para una comunicación más efectiva hemos puesto a tu disposición un sistema de TICKETS.
  ¡Pruébalo ahora!.
</p>
<ul class="menu vertical">
  <li>
    <p class="text-center">
        <a class="button expanded" target="_blank" href="https://ayuda.nubefact.com/ticket">
          Tickets de soporte
</a>    </p>
  </li>
  <li>
    <a class="" target="_blank" href="https://ayuda.nubefact.com/estado">
      <i class="fa fa-thermometer-full"></i> Estado del sistema
</a>  </li>
  <li>
    <a class="" target="_blank" href="https://ayuda.nubefact.com/preguntas">
      <i class="fa fa-question-circle"></i>  Preguntas Frecuentes
</a>  </li>
  <li>
    <a url="see_gdocs/MANUAL%20ALTA%20COMO%20PSE%20EN%20LA%20SUNAT11d3.pdf?pdf_id=1qI0G6-TeHvlaN6av598usxDZJqRZKHXn" class="see-ajax" href="#">
      <i class="fa fa-bolt"></i> Manual Alta PROVEEDOR (PSE) SUNAT
</a>  </li>
  <li>
    <a url="see_gdocs/MANUAL%20ALTA%20COMO%20OSE%20EN%20LA%20SUNAT7ba5.pdf?pdf_id=1rzr3yb7OWshnrIUfnoYRD0rJyM51N6p6" class="see-ajax" href="#">
      <i class="fa fa-bolt"></i> Manual Alta OPERADOR (OSE) SUNAT
</a>  </li>
  <li>
    <a href="mailto:&#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;">
      <i class="fa fa-envelope-o"></i> &#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;</a>
  </li>
  <li>
    <a target="_blank" href="https://get.teamviewer.com/nubefact">
      <i class="fa fa-download"></i> Descargar TeamViewer (Escritorio remoto)
</a>  </li>
</ul>
  </div>
</li>

<li class="">
  <a data-toggle="menu-dropdown-pagos" href="#">
    <b class=""><i class="fa fa-credit-card"></i> PAGOS</b>
</a>
  <div class="dropdown-pane small has-position-bottom has-alignment-center arrow_box" data-position="bottom" data-alignment="center" id="menu-dropdown-pagos" data-auto-focus="true" data-close-on-click="true" data-dropdown>
    <p class="text-center">CONTACTAR CON <b>PAGOS</b></p>
<p class="text-center"><b>Estos canales son exclusivamente para PAGOS</b></p>
<ul class="menu vertical">
  <li>
    <a class="whatsapp-button" target="_blank" href="https://api.whatsapp.com/send?phone=51972116982">
      <i class="fa fa-whatsapp"></i> +51 972 116982
</a>    <a class="whatsapp-button" target="_blank" href="https://api.whatsapp.com/send?phone=51960247869">
      <i class="fa fa-whatsapp"></i> +51 960 247869
</a>  </li>
  <li>
    <a> <i class="fa fa-envelope-o"></i> &#112;&#97;&#103;&#111;&#115;&#64;&#110;&#117;&#98;&#101;&#102;&#97;&#99;&#116;&#46;&#99;&#111;&#109;</a>
  </li>
</ul>
  </div>
</li>

  <li>
    <a href="login.html">
      <i class="fa fa-sign-in"></i> INGRESAR
</a>  </li>
  <li>
    <a data-no-turbolink="true" class="hollow button secondary" target="_blank" href="buscar.html">
      <i class="fa fa-search"></i> BUSCA TU COMPROBANTE
</a>  </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="menu-public">
    <div class="row">
      <div class="float-left">
        <ul class="menu">
          <li class="menu-logo-public">
            <a href="index.html"><img alt="NubeFacT" tittle="NubeFacT" src="assets/logo-bc8f654e9ae4218bdd3903296e9ac9867add036a8437c32ed1c181b491b4f2b9.png" /></a>
          </li>
          <li class="menu-logo-public">
            <a href="#" data-open="verificado-por-sunat">
              <img alt="OSE NubeFacT" tittle="OSE NubeFacT" src="assets/verificado-por-sunat-81d5942d2e3278840ad9cbcd7eece4fd7637706ba17b93ec5ef018873ec5542c.png" />
            </a>
          </li>
        </ul>
      </div>
      <div class="float-right">
        <ul class="menu">
          <li class="menu-item show-for-large">
  <a data-toggle="menu-public-facturacion-electronica" href="#">
    <span class="menu-item-text">FACTURACIÓN ELECTRÓNICA</span>
</a>
  <div class="dropdown-pane small arrow_box" id="menu-public-facturacion-electronica" data-dropdown data-hover="true" data-hover-pane="true" data-position="bottom" data-alignment="center">
    <a class="menu-public-dropdown" href="nubefact-online.html">
  <div class="text-center lead"><b>NUBEFACT ONLINE</b></div>
  <div class="text-center subtittle">Generación en LÍNEA de comprobantes PDF-XML</div>
</a><hr>
<a class="menu-public-dropdown" href="integracion.html">
  <div class="text-center lead"><b>INTEGRACIÓN VÍA TXT-JSON</b></div>
  <div class="text-center subtittle">Envíanos un JSON o TXT y nosotros generamos el XML</div>
</a><hr>
<a class="menu-public-dropdown" href="revendedor.html">
  <div class="text-center lead"><b>REVENDEDOR - RESELLER</b></div>
  <div class="text-center subtittle">Haz negocio con tu propia marca</div>
</a>
  </div>
</li>

<li class="menu-item show-for-large">
  <a data-toggle="menu-public-soluciones" href="#">
    <span class="menu-item-text">VALIDACIÓN OSE</span>
</a>
  <div class="dropdown-pane small arrow_box" id="menu-public-soluciones" data-dropdown data-hover="true" data-hover-pane="true" data-position="bottom" data-alignment="center">
    <a class="menu-public-dropdown" href="ose-validacion-xml.html">
  <div class="text-center lead"><b>OSE VALIDACIÓN DE XML</b></div>
  <div class="text-center subtittle">Validación en LINEA de XML con WebService</div>
</a><hr>
<a class="menu-public-dropdown" href="ose-para-proveedores.html">
  <div class="text-center lead"><b>OSE PARA PROVEEDORES</b></div>
  <div class="text-center subtittle">Ofrece el servicio OSE a tus clientes</div>
</a>
  </div>
</li>

<li class="menu-item show-for-large">
  <a data-toggle="menu-public-amaquella" href="#">
    <span class="menu-item-text">BOLETAS DE PAGO <span class="label info">NUEVO</span></span>
</a>  <div class="dropdown-pane small arrow_box" id="menu-public-amaquella" data-dropdown data-hover="true" data-hover-pane="true" data-position="bottom" data-alignment="center">
    <h3 class="text-center">
  Boletas de Pago
</h3>
<p class="text-center">
  <a class="" target="_blank" href="https://amaquella.pe/">
    <img alt="Boletas de Pago Digitales" tittle="Boletas de Pago Digitales" style="width: 150px" src="assets/logo-amaquella-04f0c09f0478d2189a11127e4c4facfc752e53b1d628c805bc43c7c92ea24574.png" />
</a></p>
<p class="text-center">
  Generar <b>Boleta de Pago con firma digital</b>, incluye App para trabajadores.
</p>
<p class="text-center">
  <a class="button large" target="_blank" href="https://amaquella.pe/">
    www.amaquella.pe <i class="fa fa-external-link"></i>
</a></p>
  </div>
</li>

<li class="menu-item show-for-large">
  <a href="precios.html">
    <span class="menu-item-text">PRECIOS</span>
</a></li>
<li class="menu-item show-for-large">
  <a href="beneficios.html">
    <span class="menu-item-text">BENEFICIOS</span>
</a></li>
<li class="menu-button show-for-large">
  <a data-no-turbolink="true" class="button" href="registro.html">
    <i class="fa fa-lock"></i> <b>REGISTRO</b>
</a></li>
          <li class="menu-button hide-for-large">
  <a data-open="menu-public-modal" class="hollow button"><i class="fa fa-bars"></i> MENU</a>

  <div class="reveal small" id="menu-public-modal" data-reveal>

    <ul class="menu vertical menu-mobile">
      <li class="menu-text">
        MENU
      </li>
      <li>
        <a data-open="modal-small-cotizar" class="">
          <b class=""><i class="fa fa-magic"></i> COTIZAR AHORA MISMO</b>
        </a>
        <div class="reveal small" id="modal-small-cotizar" data-reveal>
          <p class="text-center">COTIZAR <b>EN LÍNEA</b></p>
<p class="text-center">Envíanos tus datos y te enviaremos una cotización automáticamente.</p>
<p class="text-center lead">ACTIVACIÓN AUTOMÁTICA (en minutos).</p>
<p class="text-center">
  <a class="button large" data-no-turbolink="true" href="cotizar.html">Cotizar aquí</a>
</p>
          <button class="close-button large" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </li>
      <li>
        <a data-open="modal-small-ventas" class="">
          <b class=""><i class="fa fa-heart"></i> VENTAS</b>
        </a>
        <div class="reveal small" id="modal-small-ventas" data-reveal>
          <p class="text-center">CONTACTAR CON <b>VENTAS</b></p>
<p class="text-center"><b>Estos canales son exclusivamente para VENTAS</b></p>
<ul class="menu vertical">
  <li>
    <a><i class="fa fa-phone"></i> 01 468 3535</a>
  </li>
  <li>
    <a data-open="modal-whatsapp" class="whatsapp-button" href="#">
      <b class=""><i class="fa fa-whatsapp"></i> WhatsApp Ventas</b>
</a>  </li>
  <li>
    <a href="mailto:&#118;&#101;&#110;&#116;&#097;&#115;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;">
      <i class="fa fa-envelope-o"></i> &#118;&#101;&#110;&#116;&#097;&#115;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;
    </a>
  </li>
  <li class="">
    <a href="cotizar.html">
      <i class="fa fa-magic"></i> Solicitar cotización
</a>  </li>
</ul>
          <button class="close-button large" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </li>
      <li>
        <a data-open="modal-small-soporte" class="">
          <b class=""><i class="fa fa-question-circle-o"></i> SOPORTE</b>
        </a>
        <div class="reveal small" id="modal-small-soporte" data-reveal>
          <div class="text-center">CONTACTAR CON <b>SOPORTE</b></div>
<p class="text-center">Para una comunicación más efectiva hemos puesto a tu disposición un sistema de TICKETS.
  ¡Pruébalo ahora!.
</p>
<ul class="menu vertical">
  <li>
    <p class="text-center">
        <a class="button expanded" target="_blank" href="https://ayuda.nubefact.com/ticket">
          Tickets de soporte
</a>    </p>
  </li>
  <li>
    <a class="" target="_blank" href="https://ayuda.nubefact.com/estado">
      <i class="fa fa-thermometer-full"></i> Estado del sistema
</a>  </li>
  <li>
    <a class="" target="_blank" href="https://ayuda.nubefact.com/preguntas">
      <i class="fa fa-question-circle"></i>  Preguntas Frecuentes
</a>  </li>
  <li>
    <a url="see_gdocs/MANUAL%20ALTA%20COMO%20PSE%20EN%20LA%20SUNAT11d3.pdf?pdf_id=1qI0G6-TeHvlaN6av598usxDZJqRZKHXn" class="see-ajax" href="#">
      <i class="fa fa-bolt"></i> Manual Alta PROVEEDOR (PSE) SUNAT
</a>  </li>
  <li>
    <a url="see_gdocs/MANUAL%20ALTA%20COMO%20OSE%20EN%20LA%20SUNAT7ba5.pdf?pdf_id=1rzr3yb7OWshnrIUfnoYRD0rJyM51N6p6" class="see-ajax" href="#">
      <i class="fa fa-bolt"></i> Manual Alta OPERADOR (OSE) SUNAT
</a>  </li>
  <li>
    <a href="mailto:&#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;">
      <i class="fa fa-envelope-o"></i> &#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;</a>
  </li>
  <li>
    <a target="_blank" href="https://get.teamviewer.com/nubefact">
      <i class="fa fa-download"></i> Descargar TeamViewer (Escritorio remoto)
</a>  </li>
</ul>
          <button class="close-button large" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </li>
        <li>
          <a data-no-turbolink="true" class="green" href="registro.html">
            <i class="fa fa-lock"></i> <b>REGISTRO GRATIS</b>
</a>        </li>
        <li>
          <a href="login.html">
            <i class="fa fa-sign-in"></i> INGRESAR
</a>        </li>
      <li>
        <a data-open="modal-small-facturacion-electronica" class="lead">
          <b class="">FACTURACIÓN ELECTRÓNICA</b>
        </a>
        <div class="reveal small" id="modal-small-facturacion-electronica" data-reveal>
          <p class="text-center">FACTURACIÓN ELECTRÓNICA</p>
          <a class="menu-public-dropdown" href="nubefact-online.html">
  <div class="text-center lead"><b>NUBEFACT ONLINE</b></div>
  <div class="text-center subtittle">Generación en LÍNEA de comprobantes PDF-XML</div>
</a><hr>
<a class="menu-public-dropdown" href="integracion.html">
  <div class="text-center lead"><b>INTEGRACIÓN VÍA TXT-JSON</b></div>
  <div class="text-center subtittle">Envíanos un JSON o TXT y nosotros generamos el XML</div>
</a><hr>
<a class="menu-public-dropdown" href="revendedor.html">
  <div class="text-center lead"><b>REVENDEDOR - RESELLER</b></div>
  <div class="text-center subtittle">Haz negocio con tu propia marca</div>
</a>
          <button class="close-button large" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </li>
      <li>
        <a data-open="modal-small-validacion-ose" class="lead">
          <b class="">VALIDACIÓN OSE</b>
        </a>
        <div class="reveal small" id="modal-small-validacion-ose" data-reveal>
          <p class="text-center">VALIDACIÓN OSE</p>
          <a class="menu-public-dropdown" href="ose-validacion-xml.html">
  <div class="text-center lead"><b>OSE VALIDACIÓN DE XML</b></div>
  <div class="text-center subtittle">Validación en LINEA de XML con WebService</div>
</a><hr>
<a class="menu-public-dropdown" href="ose-para-proveedores.html">
  <div class="text-center lead"><b>OSE PARA PROVEEDORES</b></div>
  <div class="text-center subtittle">Ofrece el servicio OSE a tus clientes</div>
</a>
          <button class="close-button large" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </li>
      <li>
        <a data-open="modal-small-amaquella" class="lead">
          <b class="">BOLETAS DE PAGO</b> <span class="label info">NUEVO</span>
        </a>
        <div class="reveal small" id="modal-small-amaquella" data-reveal>
          <h3 class="text-center">
  Boletas de Pago
</h3>
<p class="text-center">
  <a class="" target="_blank" href="https://amaquella.pe/">
    <img alt="Boletas de Pago Digitales" tittle="Boletas de Pago Digitales" style="width: 150px" src="assets/logo-amaquella-04f0c09f0478d2189a11127e4c4facfc752e53b1d628c805bc43c7c92ea24574.png" />
</a></p>
<p class="text-center">
  Generar <b>Boleta de Pago con firma digital</b>, incluye App para trabajadores.
</p>
<p class="text-center">
  <a class="button large" target="_blank" href="https://amaquella.pe/">
    www.amaquella.pe <i class="fa fa-external-link"></i>
</a></p>
          <button class="close-button large" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </li>
      <li>
        <a class="lead" href="precios.html">
          <b>PRECIOS</b>
</a>      </li>
      <li>
        <a class="lead" href="beneficios.html">
          <b>BENEFICIOS</b>
</a>      </li>
      <li>
        <a class="lead" href="soporte.html">
          <b>SOPORTE</b>
</a>      </li>
      <li>
        <a data-no-turbolink="true" class="" target="_blank" href="buscar.html">
          <i class="fa fa-search"></i> BUSCAR COMPROBANTE
</a>      </li>
    </ul>
    <button class="close-button large" data-close aria-label="Close reveal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</li>
        </ul>
      </div>
    </div>
  </div>
</header>



<div class="row">
  
</div>
<div class="containerone">
    <h1 class="text-center">
        Cotizar en línea
    </h1>
    <div class="wrapper">
        <div class="large columns row">
            <p class="text-center">
                Envíanos tus datos y te enviaremos una cotización <b>automáticamente</b>.
            </p>
            <p class="text-center lead">ACTIVACIÓN AUTOMÁTICA (en minutos).</p>
        </div>
        <form action="{{ route('cotizarv') }}" class="form-control" method="POST">
            @csrf
            <label class="" for="ruc">RUC(que exista en Sunat)</label>
            <input type="text" name="ruc" id="ruc" placeholder="RUC" class="form-control"
                value="{{ old('ruc') }}">
            {!! $errors->first('ruc', '<small>:message</small><br>') !!}
            <div class="col-md-12 text-center">
                <button type="submit" class="button large expanded recaptcha_button g-recaptcha verify_this_ruc_button" data-disable-with="Enviando..." data-sitekey="6LdSvTUUAAAAAKaa-iiXLc9U28iBYn5FIhv2p-KC" data-theme="light" data-callback="onSubmitCotizar">ACEPTAR</button>
            </div>
        </form>
    </div>
</div>
{{-- <div id="wrapper">
  <h1 class="text-center">Cotizar en línea</h1>
<p class="text-center"></p>
<div class="row">
    <div class="large-4 large-centered columns">
      <div class="large columns">
  <p class="text-center">
    Envíanos tus datos y te enviaremos una cotización <b>automáticamente</b>.
  </p>
  <p class="text-center lead">ACTIVACIÓN AUTOMÁTICA (en minutos).</p>
</div>
<form id="cotizar_ahora" data-abide="" novalidate="novalidate" action="https://www.nubefact.com/cotizar" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Rxbyx8Ry/6JxWL00kPqh5gK3euf3yFvlzBHTiLbuv8BKmCm2kzLrtJGU/Rr4teXB1xA3l++CCKx+woCy4onzpw==" />
  <input type="hidden" name="tipo_de_cotizacion_value" id="tipo_de_cotizacion_value" />
  <div class="large-12 columns">
    <div style="position: relative">
      <label for="this_ruc">Ingresar número de RUC</label>
      <div class="ruc_error">RUC INVÁLIDO</div>
      <div class="ruc_correct">RUC CORRECTO</div>
    </div>
      <input type="text" name="this_ruc" id="this_ruc" class="verify_this_ruc only_numbers" placeholder="Ingresar RUC" />
  </div>
  <div class="large-12 columns">
    <input type="submit" name="commit" value="ACEPTAR" class="button large expanded recaptcha_button g-recaptcha verify_this_ruc_button" data-disable-with="Enviando..." data-sitekey="6LdSvTUUAAAAAKaa-iiXLc9U28iBYn5FIhv2p-KC" data-theme="light" data-callback="onSubmitCotizar" />
  </div>
  <script>
      function onSubmitCotizar(token) {
          submit = $("#cotizar_ahora .recaptcha_button");
          submit.prop("disabled", "disabled");
          submit.prop("value", "Enviando...");
          document.getElementById("cotizar_ahora").submit();
      }
  </script>
</form>
    </div>
</div>
</div> --}}

<div class="row">
  <hr class="divider">
</div>


      <div class="row">
        <h2 class="text-center">Algunas empresas que confían en nosotros</h2>
        <h3 class="text-center subheader">Empresas a nivel nacional de todos los rubros</h3>

        <div class="custom-customers">
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-2.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-7.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-8.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-6.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-9.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-1.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-10.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-11.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-3.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-5.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-12.jpg" />
            </div>
            <div class="large-2 medium-2 small-4 columns thumbnail">
              <img src="images/customers/factura-electronica-cliente-4.jpg" />
            </div>
        </div>
      </div>

      <div class="row">
        <hr class="divider">
      </div>

    <div class="row">
      <div class="footer-text">
        <h2 class="text-center">Autorizado por la SUNAT</h2>

        <p class="text-center">Estamos autorizados como <b>OSE </b>así como <b>PSE</b></p>

        <p class="text-center">
          <a href="#" class="show-ajax" url="ose-resolucion-intendencia-sunat.html">
            <i class="fa fa-star"></i>
            VER RESOLUCIÓN DE <b>OSE</b>
            <i class="fa fa-star"></i>
          </a>
        </p>

        <p class="text-center">
          <a href="#" class="show-ajax" url="pse-resolucion-intendencia-sunat.html">
            <i class="fa fa-star"></i>
            VER RESOLUCIÓN DE <b>PSE</b>
            <i class="fa fa-star"></i>
          </a>
        </p>
      </div>
      <div class="footer-text">
        <a target="_blank" href="http://orientacion.sunat.gob.pe/index.php/empresas-menu/comprobantes-de-pago-empresas/comprobantes-de-pago-electronicos-empresas/see-desde-los-sistemas-del-contribuyente/2-comprobantes-que-se-pueden-emitir-desde-see-sistemas-del-contribuyente/factura-electronica-desde-see-del-contribuyente/3550-padron-de-proveedores-de-servicios-electronicos-pse">
          <img width="250" src="assets/sunat-01e98233125af4fba9441ae3d6eefa5bd90c962acb6d7a9699b51c3b5347e3e1.png" />
        </a>
      </div>
    </div>
    <div class="row">
      <hr class="divider">
    </div>
    <div id="footer">
      <div class="row">
  <div class="large-3 columns">
    <ul class="menu vertical">
      <h5>Recursos</h5>
      <li><a data-no-turbolink="true" href="buscar.html">Busca tu comprobante</a></li>
      <li><a href="ose-sunat.html">OSE Sunat</a></li>
      <li><a href="soporte.html">Soporte</a></li>
      <li><a href="precios.html">Precios</a></li>
      <li><a href="soluciones.html">Soluciones</a></li>
      <li><a href="beneficios.html">Beneficios</a></li>
      <li><a href="integracion.html">Integración</a></li>
      <li><a href="revendedor.html">Revendedor</a></li>
      <li><a data-no-turbolink="true" href="lista-contribuyentes-obligados-factura-electronica-sunat.html">Lista de contribuyentes obligados</a></li>
      <li><a href="cotizar.html">Solicitar Cotización</a></li>
      <li>
        <a href="alta-proveedor-pse-sunat-clave-sol.html">
          Manual alta proveedor (<b>PSE</b>) en la SUNAT
</a>      </li>
      <li>
        <a href="alta-operador-ose-sunat-clave-sol.html">
          Manual alta operador (<b>OSE</b>) en la SUNAT
</a>      </li>
      <li><a href="manual-usuario-version-online.html">Manual de usuario</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="https://ayuda.nubefact.com/reclamos/generar">Libro de reclamaciones</a></li>
    </ul>
  </div>
  <div class="large-3 columns">
    <ul class="menu vertical">
      <h5>Últimas publicaciones</h5>
          <li><a href="blog/nubefact/tipos-de-comprobantes-de-pago-electronico-en-peru.html">Tipos de comprobantes de pago electrónico en Perú</a></li>
          <li><a href="blog/nubefact/beneficios-de-ose-nubefact.html">Beneficios de OSE NubeFacT</a></li>
          <li><a href="blog/actualizaciones-sunat/mypes-del-sector-turismo-pagaran-solo-10-de-igv-hasta-el-2024.html">Mypes del sector turismo pagarán solo 10% de IGV hasta el 2024</a></li>
          <li><a href="blog/nubefact/maqui-app-facturacion-electronica-desde-el-celular.html">MaQui app: Facturación electrónica desde el celular</a></li>
          <li><a href="blog/actualizaciones-sunat/como-saber-si-eres-prico-y-esta-obligado-a-contratar-a-un-ose.html">¿Cómo saber si eres PRICO y está obligado a contratar a un OSE?</a></li>
          <li><a href="blog/actualizaciones-sunat/nuevo-rus-obligados-a-facturar-de-manera-electronica.html">Nuevo RUS: ¿Obligados a facturar de manera electrónica?</a></li>
          <li><a href="blog/actualizaciones-sunat/comprobantes-electronicos-reemplazaran-a-facturas-y-boletas-fisicas.html">Comprobantes electrónicos reemplazarán a facturas y boletas físicas</a></li>
          <li><a href="blog/temporal/la-facturacion-electronica-es-costosa.html">¿La facturación electrónica es costosa?</a></li>
    </ul>
  </div>
  <div class="large-3 columns">
    <ul class="menu vertical">
      <h5>Integración fácil</h5>
        <li>
          <a href="facturacion-electronica-php.html">
            Factura Electrónica usando <b>PHP</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-csharp.html">
            Factura Electrónica usando <b>CSHARP</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-c%23.html">
            Factura Electrónica usando <b>C#</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-java.html">
            Factura Electrónica usando <b>JAVA</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-vbnet.html">
            Factura Electrónica usando <b>VBNET</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-visual-basic.html">
            Factura Electrónica usando <b>VISUAL-BASIC</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-visual-basic-net.html">
            Factura Electrónica usando <b>VISUAL-BASIC-NET</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-vb6.html">
            Factura Electrónica usando <b>VB6</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-visual-basic-6.html">
            Factura Electrónica usando <b>VISUAL-BASIC-6</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-visual-fox.html">
            Factura Electrónica usando <b>VISUAL-FOX</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-visual-fox-pro.html">
            Factura Electrónica usando <b>VISUAL-FOX-PRO</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-vfpro.html">
            Factura Electrónica usando <b>VFPRO</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-power-builder.html">
            Factura Electrónica usando <b>POWER-BUILDER</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-python.html">
            Factura Electrónica usando <b>PYTHON</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-perl.html">
            Factura Electrónica usando <b>PERL</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-objective-C.html">
            Factura Electrónica usando <b>OBJECTIVE-C</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-swift.html">
            Factura Electrónica usando <b>SWIFT</b>
</a>        </li>
        <li>
          <a href="facturacion-electronica-ruby.html">
            Factura Electrónica usando <b>RUBY</b>
</a>        </li>
    </ul>
  </div>
  <div class="large-3 columns">
    <ul class="menu vertical">
      <h5>Formas de pago</h5>
      <img width="200" src="assets/aceptamos-tarjetas-a79a2a574b8039fe2206cac34390b36b5721d362504f71af13374b84a481148a.png" />
      <h5>Accessos</h5>
      <li><a data-no-turbolink="true" href="registro.html">Registro gratis</a></li>
      <li><a href="login.html">Ingresar a mi cuenta</a></li>
      <h5>Certificaciones y acreditaciones</h5>
      <li>
        <a href="https://repositorio.nubefact.com/"><img alt="NubeFacT ISO27001" tittle="NubeFacT ISO27001" style="max-height: 50px" src="assets/ISO27001-2415cb6912c2e5e20c1f6200a5944c894d6bad84c67cb902c31aefd99b79ea9d.png" /></a>
      </li>
      <li>
        <a target="_blank" href="https://repositorio.nubefact.com/">
          <b>Repositorio</b>
</a>      <li>
        <a target="_blank" href="files/SUNAT-OSE-RI-034-005-0011863-NUBEFACT-SA.pdf">
          <b>OSE</b> autorizado por la SUNAT
</a>      </li>
      <li>
        <a target="_blank" href="files/SUNAT-PSE-RI-034-005-0006315-NUBEFACT-SA.pdf">
          <b>PSE</b> autorizado por la SUNAT
</a>      </li>
      <li>
        <a href="#" class="show-ajax" url="privacy.html">
          Política de Privacidad
        </a>
      </li>
      <li>
        <a href="#" class="show-ajax" url="security-safeguards.html">
          Garantía de Seguridad
        </a>
      </li>
      <li>
        <a href="#" class="show-ajax" url="terms.html">
          Términos de Servicio y Condiciones de Uso
        </a>
      </li>
    </ul>
  </div>
</div>


    </div>

<div id="footer-branding">
  <div class="footer-text">
    <a href="#" class="show-ajax" url="privacy.html">
      Política de Privacidad
    </a>
    |
    <a href="#" class="show-ajax" url="security-safeguards.html">
      Garantía de Seguridad
    </a>
    |
    <a href="#" class="show-ajax" url="terms.html">
      Términos de Servicio y Condiciones de Uso
    </a>
  </div>
  <br>

  <div class="footer-text">
    <a href="index.html"><img alt="NubeFacT" tittle="NubeFacT" style="width: 100px" src="assets/logo-bc8f654e9ae4218bdd3903296e9ac9867add036a8437c32ed1c181b491b4f2b9.png" /></a>
  </div>

  <div class="footer-text">
    <img alt="OSE NubeFacT" tittle="OSE NubeFacT" width="100" src="assets/verificado-por-sunat-81d5942d2e3278840ad9cbcd7eece4fd7637706ba17b93ec5ef018873ec5542c.png" />
  </div>
  <p class="footer-text">
    Estamos autorizados como
    <b>
      <a href="#" class="show-ajax" url="ose-resolucion-intendencia-sunat.html">
        OSE
      </a>
    </b>
    así como
    <b>
      <a href="#" class="show-ajax" url="pse-resolucion-intendencia-sunat.html">
        PSE
      </a>
    </b>
  </p>

  <div class="footer-text">Calle Libertad 176 Oficina 211 Miraflores - Lima</div>
  <div class="footer-text">Soporte: Lunes a viernes de 9:00 am - 6:00 pm -
    <a href="mailto:&#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;">&#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#110;&#117;&#098;&#101;&#102;&#097;&#099;&#116;&#046;&#099;&#111;&#109;</a>
  </div>
  <div class="footer-text">NUBEFACT S.A. RUC 20600695771</div>
  <div class="footer-text">2022</div>
  <br>
  <div class="text-center">
    <img style="height: 30px" class="" src="data:image/png;base64,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">
    <br>
    <small class="">La <b>seguridad</b> de tu información ante todo.<br> Esta aplicación cuenta con certificación
      ISO27001.</small>
  </div>

</div>


<div class="reveal" id="verificado-por-sunat" data-reveal>
  <h2 class="text-center">Verificado por SUNAT</h2>
  <p class="text-center lead">Estamos autorizados como <b>OSE </b>así como <b>PSE</b></p>

  <p class="text-center">
    <a href="#"><img alt="OSE NubeFacT" tittle="OSE NubeFacT" style="height: 80px" src="assets/verificado-por-sunat-81d5942d2e3278840ad9cbcd7eece4fd7637706ba17b93ec5ef018873ec5542c.png" /></a>
  </p>
  <p class="text-center lead">
    <a href="#" class="show-ajax" url="ose-resolucion-intendencia-sunat.html">
      <i class="fa fa-star"></i>
      VER RESOLUCIÓN DE <b>OSE</b>
      <i class="fa fa-star"></i>
    </a>
  </p>

  <p class="text-center lead">
    <a href="#" class="show-ajax" url="pse-resolucion-intendencia-sunat.html">
      <i class="fa fa-star"></i>
      VER RESOLUCIÓN DE <b>PSE</b>
      <i class="fa fa-star"></i>
    </a>
  </p>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="show" class="reveal small" data-reveal>
</div>
<div id="see-ajax" class="reveal small" data-reveal>
</div>
<div id="summary_document_detalle_verificador" class="reveal large" data-reveal>
</div>
<div id="new_ajax" class="reveal small" data-reveal>
</div>


<div class="reveal" id="ajax-reveal-iframe" data-reveal data-close-on-click="false" data-close-on-esc="false">
  <h2 id="ajax-reveal-iframe-title" class="text-center"></h2>

  <div id='ajax-reveal-iframe-loader' class="text-center" style='display: none;'>
    Procesando... <i class="fa fa-refresh fa-spin"></i>
  </div>

  <iframe id="ajax-reveal-iframe-content" src="#" height="" loading="lazy" frameborder="0">


  </iframe>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="reveal tiny" id="modal-whatsapp" data-reveal>
  <h2 class="text-center">WhatsApp</h2>
  <p class="text-center">Estamos listos para Ayudarte.</p>
  <h4 class="text-center">
    <a class="whatsapp-button" target="_blank" href="https://api.whatsapp.com/send?phone=51014683535">
      <i class="fa fa-whatsapp"></i> +51 014683535
</a>  </h4>
  <div class="large-6 large-centered column">
    <p class="text-center">
      <img class="thumbnail" alt="Certificado Digital" src="assets/whatsapp-nubefact-fabbe0cf64640ebe24c84693fdedfc7328a331223d77528b0f06475ea5a2495e.svg" />
    </p>
  </div>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



</body>

<!-- Mirrored from www.nubefact.com/cotizar by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 17:44:51 GMT -->
</html>
