<?php
// Configuration
define('DOMAIN', 'marchesson.com');
define('PROTOCOL', 'https');

// HTTPS redirect and www removal
if ($_SERVER['SERVER_NAME'] !== 'localhost') {
	try {
		$isHttps = isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
				   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https';
		$hasWww = strpos($_SERVER['HTTP_HOST'], 'www.') === 0;

		if (!$isHttps || $hasWww) {
			$redirect = PROTOCOL . '://' . DOMAIN . $_SERVER['REQUEST_URI'];
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: ' . $redirect);
			exit();
		}
	} catch (Exception $e) {
		// Log error in production, continue loading page
		error_log('Redirect error: ' . $e->getMessage());
	}
}

// Cache headers for performance
header('Cache-Control: public, max-age=3600');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
?><!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta name="description" content="20 ans d'expérience dans le développement web, en tant que salarié et indépendant. Gestion de projets, architecture, direction technique, référencement, formation." />
  <meta property="og:title" content="David Marchesson All Links" />
  <link rel="canonical" href="https://marchesson.com" />
  <meta property="og:url" content="https://marchesson.com" />
  <meta property="og:description" content="20 ans d'expérience dans le développement web, en tant que salarié et indépendant. Gestion de projets, architecture, direction technique, référencement, formation." />
  <meta property="og:image:secure_url" content="https://marchesson.com/img/profile.webp" />
  <meta property="og:image" content="https://marchesson.com/img/profile.webp" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="David Marchesson" />
  <meta name="twitter:image" content="https://marchesson.com/img/profile.webp" />
  <meta name="twitter:url" content="https://marchesson.com" />
  <title>David Marchesson - Développeur Full Stack & Formateur numérique</title>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="me" href="https://mamot.fr/@dmarchesson">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i|Montserrat:400,700&display=swap" rel="stylesheet">
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="min-h-full flex-h-center" id="background_div">
    <img class="page-image" data-src="img/bg/bg.webp" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="background" />
    <canvas id="bg-canvas" class="background-overlay"></canvas>
    <div class="mt-48 page-full-wrap relative ">
      <img class="display-image m-auto loading" data-src="img/profile.webp" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="David Marchesson" />
      <h2 class="page-text-color page-title-font mt-16 text-center">
        David Marchesson
      </h2>
      <div class="page-bioline text-fs-16 page-text-color page-title-font mt-12 ln-h-22 text-center">Développeur Full Stack & Formateur numérique</div>
      <div class="flex-both-center flex-wrap mt-24">
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="Youtube" data-id="youtube" data-type="social_link" target="_blank" href="https://www.youtube.com/@karillon"></a>
          <svg class="social-icon-fill" height="30" width="30" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 50 50" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M39.256,6.5H9.744C4.371,6.5,0,10.885,0,16.274v16.451c0,5.39,4.371,9.774,9.744,9.774h29.512 c5.373,0,9.744-4.385,9.744-9.774V16.274C49,10.885,44.629,6.5,39.256,6.5z M47,32.726c0,4.287-3.474,7.774-7.744,7.774H9.744 C5.474,40.5,2,37.012,2,32.726V16.274C2,11.988,5.474,8.5,9.744,8.5h29.512c4.27,0,7.744,3.488,7.744,7.774V32.726z"></path> <path d="M33.36,24.138l-13.855-8.115c-0.308-0.18-0.691-0.183-1.002-0.005S18,16.527,18,16.886v16.229 c0,0.358,0.192,0.69,0.502,0.868c0.154,0.088,0.326,0.132,0.498,0.132c0.175,0,0.349-0.046,0.505-0.137l13.855-8.113 c0.306-0.179,0.495-0.508,0.495-0.863S33.667,24.317,33.36,24.138z M20,31.37V18.63l10.876,6.371L20,31.37z"></path> </g> </g> </g></svg>
        </div>
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="Linkedin" data-id="linkedin" data-type="social_link" target="_blank" href="https://www.linkedin.com/in/marchesson/"></a>
          <svg class="social-icon-fill" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 3C0.25 1.48122 1.48122 0.25 3 0.25H27C28.5188 0.25 29.75 1.48122 29.75 3V27C29.75 28.5188 28.5188 29.75 27 29.75H3C1.48122 29.75 0.25 28.5188 0.25 27V3ZM3 1.75C2.30964 1.75 1.75 2.30964 1.75 3V27C1.75 27.6904 2.30964 28.25 3 28.25H27C27.6904 28.25 28.25 27.6904 28.25 27V3C28.25 2.30964 27.6904 1.75 27 1.75H3ZM10 9.75H8V8.25H10V9.75ZM8.25 22V12H9.75V22H8.25ZM12.25 12H13.75V13.5359C14.5997 12.7384 15.7428 12.25 17 12.25C19.6234 12.25 21.75 14.3766 21.75 17V22H20.25V17C20.25 15.2051 18.7949 13.75 17 13.75C15.2051 13.75 13.75 15.2051 13.75 17V22H12.25V12Z" fill="white" />
          </svg>
        </div>
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="Github" data-id="github" data-type="social_link" target="_blank" href="https://github.com/flashxman"></a>
          <svg class="social-icon-fill" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path d="M19.7998 28.2998C19.3998 28.2998 18.9998 27.9998 18.9998 27.4998V20.1998C18.9998 18.9998 18.9998 18.4998 18.4998 17.9998C18.2998 17.7998 18.1998 17.4998 18.2998 17.1998C18.3998 16.8998 18.5998 16.6998 18.8998 16.6998C22.4998 16.2998 24.6998 15.0998 24.6998 9.99982C24.6998 8.69982 24.1998 7.39982 23.2998 6.49982C23.0998 6.29982 22.9998 5.99982 23.0998 5.69982C23.2998 5.09982 23.3998 4.59982 23.3998 3.99982C23.3998 3.59982 23.2998 3.09982 23.1998 2.69982C22.6998 2.79982 21.5998 2.99982 19.7998 4.19982C19.5998 4.29982 19.3998 4.29982 19.1998 4.29982C16.7998 3.69982 14.1998 3.69982 11.7998 4.29982C11.5998 4.39982 11.3998 4.29982 11.1998 4.19982C9.3998 3.09982 8.2998 2.79982 7.7998 2.79982C7.6998 3.19982 7.5998 3.59982 7.5998 4.09982C7.5998 4.69982 7.6998 5.29982 7.8998 5.79982C7.9998 6.09982 7.8998 6.39982 7.6998 6.59982C7.1998 7.09982 6.8998 7.59982 6.5998 8.19982C6.3998 8.79982 6.1998 9.39982 6.1998 10.0998C6.1998 15.0998 8.3998 16.3998 11.9998 16.7998C12.2998 16.7998 12.4998 16.9998 12.5998 17.2998C12.6998 17.5998 12.5998 17.8998 12.3998 18.0998C11.9998 18.4998 11.7998 19.2998 11.8998 20.4998V22.4998V22.5998V27.5998C11.8998 27.9998 11.5998 28.3998 11.0998 28.3998C10.5998 28.3998 10.2998 28.0998 10.2998 27.5998V23.5998C6.9998 24.1998 5.6998 22.1998 4.8998 20.7998C4.4998 20.0998 4.0998 19.4998 3.6998 19.3998C3.2998 19.2998 3.0998 18.8998 3.1998 18.4998C3.2998 18.0998 3.6998 17.8998 4.0998 17.9998C5.0998 18.2998 5.6998 19.1998 6.1998 20.0998C7.0998 21.4998 7.7998 22.7998 10.3998 22.1998V20.7998C10.2998 19.7998 10.3998 18.9998 10.5998 18.3998C7.4998 17.7998 4.5998 16.1998 4.5998 10.3998C4.5998 9.49982 4.7998 8.69982 5.0998 7.89982C5.4998 6.99982 5.8998 6.39982 6.2998 5.89982C6.1998 5.29982 6.0998 4.69982 6.0998 3.99982C6.0998 3.19982 6.2998 2.39982 6.5998 1.69982C6.6998 1.49982 6.8998 1.29982 7.0998 1.29982C7.3998 1.19982 8.7998 0.999818 11.7998 2.79982C14.2998 2.19982 16.8998 2.19982 19.2998 2.79982C22.2998 0.999818 23.6998 1.19982 23.9998 1.29982C24.1998 1.39982 24.3998 1.49982 24.4998 1.69982C24.7998 2.39982 24.9998 3.19982 24.9998 3.99982C24.9998 4.59982 24.8998 5.29982 24.7998 5.89982C25.7998 7.09982 26.3998 8.49982 26.3998 10.0998C26.3998 15.8998 23.5998 17.5998 20.4998 18.0998C20.6998 18.7998 20.6998 19.4998 20.6998 20.1998V27.4998C20.5998 27.9998 20.1998 28.2998 19.7998 28.2998Z" fill="white" />
          </svg>
        </div>
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="Instagram" data-id="instagram" data-type="social_link" target="_blank" href="https://instagram.com/davidmarchesson"></a>
          <svg class="social-icon-fill" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 9C0.25 4.16751 4.16751 0.25 9 0.25H21C25.8325 0.25 29.75 4.16751 29.75 9V21C29.75 25.8325 25.8325 29.75 21 29.75H9C4.16751 29.75 0.25 25.8325 0.25 21V9ZM9 1.75C4.99594 1.75 1.75 4.99594 1.75 9V21C1.75 25.0041 4.99594 28.25 9 28.25H21C25.0041 28.25 28.25 25.0041 28.25 21V9C28.25 4.99594 25.0041 1.75 21 1.75H9ZM24 7.75H22V6.25H24V7.75ZM8.25 15C8.25 11.2721 11.2721 8.25 15 8.25C18.7279 8.25 21.75 11.2721 21.75 15C21.75 18.7279 18.7279 21.75 15 21.75C11.2721 21.75 8.25 18.7279 8.25 15ZM15 9.75C12.1005 9.75 9.75 12.1005 9.75 15C9.75 17.8995 12.1005 20.25 15 20.25C17.8995 20.25 20.25 17.8995 20.25 15C20.25 12.1005 17.8995 9.75 15 9.75Z" fill="white" />
          </svg>
        </div>
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="Facebook" data-id="facebook" data-type="social_link" target="_blank" href="https://www.facebook.com/marchesson"></a>
          <svg class="social-icon-fill" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.25 15C0.25 6.8538 6.8538 0.25 15 0.25C23.1462 0.25 29.75 6.8538 29.75 15C29.75 23.1462 23.1462 29.75 15 29.75C6.8538 29.75 0.25 23.1462 0.25 15ZM15 1.75C7.68223 1.75 1.75 7.68223 1.75 15C1.75 22.0661 7.28116 27.8403 14.25 28.2291V17.75H10V16.25H14.25V13C14.25 10.3766 16.3766 8.25 19 8.25H20V9.75H19C17.2051 9.75 15.75 11.2051 15.75 13V16.25H20V17.75H15.75V28.2291C22.7188 27.8403 28.25 22.0661 28.25 15C28.25 7.68223 22.3178 1.75 15 1.75Z" fill="white" />
          </svg>
        </div>
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="X (twitter)" data-id="twitter" data-type="social_link" target="_blank" href="https://x.com/flashxman"></a>
          <svg class="social-icon-fill" width="48" height="48" viewBox="0 0 48 48" xmlns="https://www.w3.org/2000/svg">
            <title>Twitter</title>
            <g transform="translate(0.000000,48.000000) scale(0.002100,-0.002368)">
              <path d="M0 17283 l0 -58 3570 -4674 c1964 -2571 3570 -4677 3570 -4680 0 -3 -1537 -1772 -3415 -3930 -1878 -2158 -3412 -3928 -3409 -3933 3 -4 670 -8 1482 -8 l1477 0 2645 3020 c1454 1661 2647 3020 2650 3020 3 -1 1044 -1360 2314 -3020 l2309 -3020 2968 0 c1637 0 2970 4 2973 9 3 4 -1691 2250 -3764 4991 l-3770 4982 104 116 c771 869 6344 7227 6340 7233 -3 5 -624 9 -1482 9 l-1477 0 -2445 -2761 c-2187 -2469 -2446 -2758 -2457 -2742 -7 10 -946 1251 -2086 2758 l-2074 2740 -3011 3 -3012 2 0 -57z m5144 -1618 c4 -12 10083 -13331 10444 -13803 l93 -122 -802 2 -802 3 -5334 6965 c-2933 3830 -5333 6966 -5333 6967 0 2 389 3 864 3 767 0 865 -2 870 -15z" />
            </g>
          </svg>
        </div>
        <div class="page-social relative">
          <a class="social-icon-anchor" aria-label="pinterest" data-id="pinterest" data-type="social_link" target="_blank" href="https://pinterest.fr/flashxman"></a>
          <svg class="social-icon-fill" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="https://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0.25C6.8538 0.25 0.25 6.8538 0.25 15C0.25 23.1462 6.8538 29.75 15 29.75C23.1462 29.75 29.75 23.1462 29.75 15C29.75 6.8538 23.1462 0.25 15 0.25ZM1.75 15C1.75 7.68223 7.68223 1.75 15 1.75C22.3178 1.75 28.25 7.68223 28.25 15C28.25 22.3178 22.3178 28.25 15 28.25C12.8029 28.25 10.7307 27.7152 8.90648 26.7688L13.0553 18.5542C14.9571 20.27 17.8623 20.5629 20.0887 19.102C23.2759 17.0106 24.1112 12.7636 21.9534 9.621C19.3235 5.79083 14.0487 4.7534 10.1642 7.30234C5.38364 10.4393 4.13047 16.811 7.367 21.5247L8.60358 20.6756C5.84293 16.655 6.90949 11.2321 10.9872 8.55645C14.1893 6.45527 18.5489 7.31272 20.7168 10.47C22.3987 12.9196 21.75 16.2177 19.2657 17.8479C17.5017 19.0055 15.1513 18.6702 13.7659 17.1471L15.6695 13.3781L14.3305 12.7019L7.61344 26.0017C4.07676 23.6225 1.75 19.583 1.75 15Z" fill="white" />
          </svg>
        </div>
      <div class="mt-24">
        <div class="page-item-wrap relative">
          <h3 class="page-title color-dark mt-32" style="text-align:center;">PROJETS ACTUELS</h3>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://vigifrance.fr" data-type="page_item">
            <img class="link-each-image loading" data-src="img/icos/vigifrance.png" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Vigifrance service d'information sur les risques" />
            <span class="item-title text-center">VigiFrance.fr <strong>L'info sur les risques accessible à tous !</strong></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://karillon.fr" data-type="page_item">
            <img class="link-each-image loading" data-src="img/icos/karillon.png" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Outils pour une meilleure communication parent-enfant" />
            <span class=" item-title text-center">Karillon.fr <strong>Outils pour améliorer la communication parent-enfant</strong></span>
          </a>
        </div>
      </div>
      <div class="mt-24">
        <div class="page-item-wrap relative">
          <h3 class="page-title color-dark mt-32" style="text-align:center;">PROFILS</h3>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://freelance.marchesson.com" data-type="page_item">
            <img style="background-color: #c50000" class="link-each-image" data-src="img/icos/freelance.png" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Développer Freelance - David Marchesson" />
            <span class=" item-title text-center">Freelance <strong>Formateur et Développeur créatif senior</strong> <!-- : des compétences à votre service--></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://www.malt.fr/profile/davidmarchesson" data-type="page_item">
            <img class="link-each-image loading" data-src="img/icos/malt.png" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Profil Malt de David Marchesson" />
            <span class=" item-title text-center">Malt <strong> Rencontres d'experts freelances et d'entreprises</strong></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://eclaireur.net" data-type="page_item">
            <img style="background-color: #93b148;transform:rotate(270deg)" class="link-each-image" data-src="img/icos/freelance.png" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Blog personnel de David Marchesson" />
            <span class=" item-title text-center">Eclaireur.net <strong>Blog personnel qui n'engage que moi</strong></span>
          </a>
        </div>

        <div class="page-item-wrap relative">
          <h3 class="page-title color-dark mt-32" style="text-align:center;">PARCOURS</h3>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://idtonic.com" data-type="page_item">
            <img class="link-each-image loading" data-src="img/icos/idtonic.jpg" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Idtonic développement web et mobile sur Bordeaux" />
            <span class="item-title text-center">Idtonic <strong>Gérant et responsable du développement</strong></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://millesima.com" data-type="page_item">
            <img class="link-each-image loading" data-src="img/icos/millesima.jpg" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Millesima" />
            <span class="item-title text-center">Millesima <strong>Responsable eCommerce et du développement</strong></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://systonic.fr" data-type="page_item">
            <img class="link-each-image loading" data-src="img/icos/systonic.jpg" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Systonic" />
            <span class="item-title text-center">Systonic <strong>Lead développeur et développeur créatif</strong></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <h3 class="page-title color-dark mt-32" style="text-align:center;">EN SAVOIR PLUS</h3>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://www.linkedin.com/in/marchesson/" data-id="261652" data-type="page_item" aria-label="Linkedin">
            <img class="link-each-image loading" data-src="img/icos/linkedin.png" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="LinkedIn de David Marchesson" />
            <span class=" item-title text-center">LinkedIn <strong>Profil de David Marchesson</strong></span>
          </a>
        </div>
        <div class="page-item-wrap relative">
          <div class="page-item flex-both-center absolute"></div>
          <a target="_blank" class="page-item-each py-10 flex-both-center" href="https://freelance.marchesson.com/#contact" data-type="page_item" aria-label="Email">
            <img class="link-each-image loading" data-src="img/icos/email.svg" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Contact David Marchesson" />
            <span class=" item-title text-center">Me contacter <strong>Une idée de projet, un besoin en formation ?</strong></span>
          </a>
        </div>
      </div>
      <div class="mt-24">
        <div id="wcb" class="carbonbadge"><style>#wcb.carbonbadge{--b1:#0e11a8;--b2:#00ffbc;font-size:15px;text-align:center;color:var(--b1);line-height:1.15}#wcb.carbonbadge sub{vertical-align:middle;position:relative;top:.3em;font-size:.7em}#wcb #wcb_2,#wcb #wcb_a,#wcb #wcb_g{display:inline-flex;justify-content:center;align-items:center;text-align:center;font-size:1em;line-height:1.15;font-family:-apple-system,BlinkMacSystemFont,sans-serif;text-decoration:none;margin:.2em 0}#wcb #wcb_a,#wcb #wcb_g{padding:.3em .5em;border:.13em solid var(--b2)}#wcb #wcb_g{border-radius:.3em 0 0 .3em;background:#fff;border-right:0;min-width:8.2em}#wcb #wcb_a{border-radius:0 .3em .3em 0;border-left:0;background:var(--b1);color:#fff;font-weight:700;border-color:var(--b1)}#wcb.wcb-d #wcb_a{color:var(--b1);background:var(--b2);border-color:var(--b2)}#wcb.wcb-d #wcb_2{color:#fff}</style><div id="wcb_p"><span id="wcb_g">0.03g of CO<sub>2</sub>/view</span><a id="wcb_a" target="_blank" rel="noopener" href="https://www.websitecarbon.com/website/marchesson-com/">Website Carbon</a></div><span id="wcb_2">&nbsp;Cleaner than 97% of pages tested</span></div>
      </div>
      </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const lazyImages = document.querySelectorAll('img[loading="lazy"]');
        const observer = new IntersectionObserver((lazyImages, observer) => {
          lazyImages.forEach((image) => {
            if (image.isIntersecting) {
              const lazyImage = image.target;
              lazyImage.src = lazyImage.dataset.src;
              lazyImage.classList.remove('loading');
              observer.unobserve(lazyImage);
            }
          });
        });
        lazyImages.forEach((lazyImage) => {
          observer.observe(lazyImage);
        });
      });
    </script>
  </div>
</body>
</html>