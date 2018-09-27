
<?php if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php echo $title; ?></title>

	<meta name="description" content="Aprende Inglés y lleva todo tu talento al mundo."> 
	<meta name="keywords" content="icpna, inglés">

	<meta property="og:type" content="website">
	<meta property="og:image" content="http://www.madeinicpna.pe/share-icpna.png">
	<meta property="og:url" content="http://www.madeinicpna.pe/" />
	<meta property="og:title" content="ICPNA - MADE IN ICPNA" />
	<meta property="og:description" content="Aprende Inglés y lleva todo tu talento al mundo." />

	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@icpnaoficial">
    <meta name="twitter:creator" content="@icpnaoficial">
    <meta name="twitter:title" content="ICPNA - MADE IN ICPNA">
    <meta name="twitter:description" content="Aprende Inglés y lleva todo tu talento al mundo.">
    <meta name="twitter:image" content="https://www.madeinicpna.pe/share-icpna.png">

	<link rel="icon" href="images/faviconicpna.png" type="image/png">
	<link rel="shortcut icon" href="images/faviconicpna.png" />



	<link rel="stylesheet" href="css/general.css?v=4">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="/css/home.css" media="screen" title="estilo">
	
 	<link rel="stylesheet" href="/css/<?php echo $estilo; ?>.css">

    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KRPRZ43');</script>
<!-- End Google Tag Manager-->
<body id="page">
<!-- Google Tag Manager (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRPRZ43"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->