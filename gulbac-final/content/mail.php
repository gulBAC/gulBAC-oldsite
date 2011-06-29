<!doctype html> 
<html lang="en" class="no-js"> 
<head> 
  <meta charset="utf-8"> 
  <!--[if IE]><![endif]--> 
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="description" content=""> 
  <meta name="author" content=""> 
  <!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">--> 
  
  <link rel="shortcut icon" href="/media/favicon.ico"> 
  <link rel="apple-touch-icon" href="/apple-touch-icon.png"> 
  <link rel="stylesheet" href="/media/css/style.css?v=1"> 
  <link rel="stylesheet" media="handheld" href="/media/css/handheld.css?v=1"> 
  
  <script type="text/javascript" src="/media/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="/media/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="/media/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
  
  
  
  
  <script src="/media/js/modernizr-1.5.min.js"></script>
  <title>gulBAC | Ooops</title> <!-- gulBAC -->
  <link href="/noticias/atom.xml" rel="alternate" title="gulBAC" type="application/atom+xml"/> 
  
  	<script type="text/javascript">
		$(document).ready(function() {

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("#gal-content.a").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

		});
	</script>
  
  
</head> 
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]--> 
<!--[if IE 7 ]>    <body class="ie7"> <![endif]--> 
<!--[if IE 8 ]>    <body class="ie8"> <![endif]--> 
<!--[if IE 9 ]>    <body class="ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]--> 
 
  <div id="container"> 
    <header> 
        <a href="http://gulbac.org.ar"><img id="logo" src="/media/img/logo.png" alt="" /></a>
        <div id="arriba"> 
            <ul> 
              <li><a href="/"><img src="/media/img/inicio.png" alt="" /> Inicio</a></li> 
              <li><a href="/preguntas"><img src="/media/img/ayuda.png" alt="" /> gulBAC Responde</a></li>
              <li><a href="http://noticias.gulbac.org.ar/"><img src="/media/img/diario.png" alt="" /> Noticias</a></li> 
              <li><a href="http://wiki.gulbac.org.ar/"><img src="/media/img/wiki.png" alt="" /> Wiki</a></li> 
              <li><a href="http://wiki.gulbac.org.ar/index.php/Nodos"><img src="/media/img/nodos.png" alt="" /> Nodos</a></li> 
              <li><a href="http://wiki.gulbac.org.ar/index.php/Gu%C3%ADas"><img src="/media/img/guias.png" alt="" /> Guias</a></li> 
              <li><a href="/galeria"><img src="/media/img/galeria.png" alt="" /> Galería</a></li> 
              <li><a href="/videos/"><img src="/media/img/videos.png" alt="" /> Videos</a></li> 
            </ul> 
        </div> 
        <div id="abajo"> 
            <span id="slogan">Grupo de Usuarios de GNU+Linux y Software Libre de Buenos Aires Central</span> 
            <span id="buscar"><form name="searchform" action="http://wiki.gulbac.org.ar/index.php/Especial:Search" id="searchform">Buscar <input type="text" name="search" accesskey="f" value="" /></form></span> 
        </div> 
    </header> 
    <div id="main">
	<div id="banners" align="center">
		<a href="/software-libre/">
			<img src="/media/img/banner1.png" alt="¿Qu&eacute; es el software libre?" />
		</a>
		<a href="/soporte/">
			<img src="/media/img/banner2.png" alt="Te ayudamos a instalar software libre" />
		</a>
		<a href="http://wiki.gulbac.org.ar/index.php/Informaci%C3%B3n/ComoAyudar">
			<img src="/media/img/banner3.png" alt="Participa en gulBAC" />
		</a>
	</div>
	<div id="cont"> 
            
<div id="content-header">
    <h1>Formulario de contacto</h1>
</div>

<div id="post-content">
<?php
$numero2 = count($_POST);
$tags2 = array_keys($_POST); // obtiene los nombres de las varibles
$valores2 = array_values($_POST);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero2;$i++){ 
    $$tags2[$i]=$valores2[$i]; 
}

if ($captcha == '' and $nombre != '' and $apellido != '' and $mailto != '' and $mensaje != '') 
{
    //define the receiver of the email
    $to = 'admins@gulbac.org.ar';
    //define the subject of the email
    $subject = 'Nuevo mensaje desde gulbac.org.ar';
    //define the message to be sent. Each line should be separated with \n
    $message = "$nombre $apellido escribio el siguiente mensaje:\n\n$mensaje";
    //define the headers we want passed. Note that they are separated with \r\n
    $headers = "From: $nombre $apellido <$mailto>\r\nReply-To: $mailto";
    //send the email
    $mail_sent = @mail( $to, $subject, $message, $headers );
    //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
    echo $mail_sent ? "<h2>Mail enviado satisfactoriamente.</h2>" : "<h2>Error: Mail no enviado.</h2>";
}
else
{
echo "<h2>Error: Mail no enviado.</h2><p>Asegurese que todos los campos est&eacute;n completados.</p>";
}
?>
<p><a href="http://www.gulbac.org.ar/contacto">Volver al formulario</a></p>
</div>

        </div> 
        <div id="barra"> 
            <ul> 
                <li><a href="/">Inicio</a></li> 
                <li><a href="http://www.gulbac.org.ar/blog/">Noticias</a></li> 
                <li><a href="/software-libre">Software Libre</a></li> 
                <li><a href="/mision-vision-valores">Misi&oacute;n, visi&oacute;n y valores</a></li> 
                <li><a href="/faq">Preguntas Frecuentes</a></li> 
                <li><a href="/gnu">Movimiento GNU y FSF</a></li> 
                <li><a href="http://wiki.gulbac.org.ar/index.php/Informaci%C3%B3n/Licencia">Licencias</a></li> 

                <li><a href="http://wiki.gulbac.org.ar/index.php/Especial:Recentchanges">Cambios Recientes</a></li>
                <li><a href="/contacto">Contactanos!</a></li> 
            </ul> 
            
            <h2>Soporte y ayuda</h2>
            <ul>
                <li><a href="/soporte">Soporte</a></li>
                <li><a href="/preguntas">gulBAC Responde</a></li>
                <li><a href="/chat">Chat via Web</a></li>
            </ul>
            
            <h2>Lista de correo</h2> 
            <ul> 
                <li><a href="https://listas.linux.org.ar/cgi-bin/mailman/listinfo/gulbac">¡Suscribite YA!</a></li> 
                <li><a href="http://linux.org.ar/pipermail/gulbac/">Historial de mensajes</a></li> 
            </ul> 
            
            <h2>Recientemente agregado</h2> 
           	
            <ul> 
                
                <li><a href='/noticias/2011/nuevo-sitio-noticias'>Nuevo sitio! Noticias gulBAC</a></li> 
                
                <li><a href='/noticias/2011/eventos-mariano-moreno-2011'>Nos mudamos! Ahora &quot;atendemos&quot; en el Colegio Mariano Moreno</a></li> 
                
                <li><a href='/noticias/2011/eventos-juventud-2011'>Eventos de Instalación en juventud MdP</a></li> 
                
                <li><a href='/noticias/2011/sistema-qa-2011'>Inauguramos sistema de preguntas y respuestas!</a></li> 
                
                <li><a href='/noticias/2011/flisol-2011'>FLISoL 2011 Mar del Plata</a></li> 
                
            </ul> 
            
            <h2>Feeds RSS</h2> 
            <ul> 
                <li><a href="http://www.gulbac.org.ar/blog/atom/1">Noticias</a></li>
                <li><a href="http://www.gulbac.org.ar/preguntas/feed/qa.rss">Preguntas y Respuestas</a></li> 
                <li><a href="http://wiki.gulbac.org.ar/index.php?title=Especial:Recentchanges&feed=rss">Cambios recientes</a></li> 
            </ul> 
        </div> 
    </div> 
    <div class="clear"></div> 
    <footer> 
        <p>Copyright gulBAC&copy; 2003-2010  -  <a href="http://creativecommons.org/licenses/by-sa/2.5/ar/">Algunos derechos reservados</a></p> 
    </footer> 
  </div> <!-- end of #container --> 
 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
  <script>!window.jQuery && document.write('<script src="/media/js/jquery-1.4.2.min.js"><\/script>')</script> 
  <script src="/media/js/plugins.js?v=1"></script> 
  <script src="/media/js/script.js?v=1"></script> 
 
  <!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js?v=1"></script>
  <![endif]--> 
 
<!--
  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']]; 
   (function(d, t) {
    var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
    g.async = true; g.src = '//www.google-analytics.com/ga.js'; s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
--> 
</body> 
</html> 

