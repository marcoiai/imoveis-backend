<?php

namespace App\Crawlers;

Class ChavesNaMao {
    private $url = 'https://www.chavesnamao.com.br/apartamentos-a-venda/sc-itajai/centro/1-quarto/#+&local%5B24%5D%5B8507%5D%5B13972%5D=sc-itajai%2Fcentro';

    public function __construct() {
    }

    public function get() {
        // create curl resource 
        $ch = \curl_init(); 

        // set url 
        \curl_setopt($ch, CURLOPT_URL, $this->url); 

        $options = array(
            CURLOPT_URL            => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT        => 120,
            CURLOPT_MAXREDIRS      => 10,
            //CURLOPT_USERAGENT      => 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) CriOS/56.0.2924.75 Mobile/14E5239e Safari/602.1'
            CURLOPT_USERAGENT      => 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36'
        );

        \curl_setopt_array( $ch, $options );

        // $output contains the output string 
        //$output = \curl_exec($ch);
        //echo "<pre>";
        //print $output;die;

        $o = <<<OUTPUT
        <html lang="pt-BR" data-useragent="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36 OPR/60.0.3255.95"><head>
<script src="https://cdn.ampproject.org/rtv/022002251816300/amp4ads-host-v0.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_rendering_2020030501.js"></script><script src="//bat.bing.com/bat.js" async=""></script><script src="https://connect.facebook.net/signals/config/693250940795029?v=2.9.15&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-KHTJDTG"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">
		var wwwroot = "https://www.chavesnamao.com.br/"; 
		var wwwrootSSL = "https://www.chavesnamao.com.br/"; 
		var haveGa = false;
		var haveRemarketing = false;
		var dynx_itemid = "";
		var dynx_itemid2 = "";
		var dynx_pagetype = "other";
		var dynx_totalvalue = "";
		var dataLayer = [];
	</script>
<script>
		var doc = document.documentElement;
		doc.setAttribute('data-useragent', navigator.userAgent);
	</script>
<link rel="dns-prefetch" href="https://www.chavesnamao.com.br/">
<link rel="dns-prefetch" href="https://connect.facebook.net">
<link rel="dns-prefetch" href="https://static.hotjar.com">
<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link rel="dns-prefetch" href="//www.googletagservices.com">
<link rel="dns-prefetch" href="//www.googleadservices.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">
<link rel="dns-prefetch" href="https://googleads.g.doubleclick.net">
<link rel="dns-prefetch" href="//static.criteo.net">
<link rel="dns-prefetch" href="//widget.criteo.com">
<link rel="dns-prefetch" href="//dis.us.criteo.com">
<link rel="dns-prefetch" href="//script.crazyegg.com">
<link rel="dns-prefetch" href="https://analytics.twitter.com">
<link rel="dns-prefetch" href="//platform.twitter.com">
<link rel="dns-prefetch" href="//img.youtube.com">
<link rel="dns-prefetch" href="//maps.google.com">

<script>!function(e,a,t,n,g,c,o){e.GoogleAnalyticsObject=g,e.ga=e.ga||function(){(e.ga.q=e.ga.q||[]).push(arguments)},e.ga.l=1*new Date,c=a.createElement(t),o=a.getElementsByTagName(t)[0],c.async=1,c.src="https://www.google-analytics.com/analytics.js",o.parentNode.insertBefore(c,o)}(window,document,"script",0,"ga"),ga("create","UA-100404714-1","auto"),ga("send","pageview");</script>

<title>Apartamentos com 1 quarto à venda no Centro em Itajaí - SC | Chaves na Mão</title>
<meta name="google-signin-client_id" content="937138557840-rdcuolld1a9id58hgs49hggvtkagr5q1.apps.googleusercontent.com">
<meta charset="UTF-8">
<meta http-equiv="content-language" content="pt-br">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="Chaves Na Mão">
<meta name="apple-mobile-web-app-title" content="Chaves Na Mão">
<meta name="theme-color" content="#005aa6">
<meta name="msapplication-navbutton-color" content="#005aa6">
<meta name="msapplication-starturl" content="https://www.chavesnamao.com.br/">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="image/png" sizes="48x48" href="https://www.chavesnamao.com.br/public/images/cnm48x48.png">
<link rel="apple-touch-icon" type="image/png" sizes="48x48" href="https://www.chavesnamao.com.br/public/images/cnm48x48.png">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-status-bar-style" content="#005aa6">

<meta name="HandheldFriendly" content="true">
<meta name="twitter:card" content="website">
<meta property="og:url" content="https://www.chavesnamao.com.br/imoveis-a-venda/sc-itajai/centro/">
<meta property="og:type" content="article"> <meta property="og:image" content="https://www.chavesnamao.com.br/public/site-novo/images/logo_cnm_share.png">
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="350">
<meta property="og:title" content="Imóveis à venda no Centro em Itajaí - SC | Chaves na Mão">
<meta property="og:description" content="425 Imóveis à venda no Centro em Itajaí. Acesse o Chaves na Mão e confira as ofertas de imóveis para comprar no Centro.">
<meta name="description" content="425 Imóveis à venda no Centro em Itajaí. Acesse o Chaves na Mão e confira as ofertas de imóveis para comprar no Centro."><link rel="canonical" href="https://www.chavesnamao.com.br/imoveis-a-venda/sc-itajai/centro/"> <script>usuarioGTM = {'debugMode': false};dataLayer = [usuarioGTM];</script>
<script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-KHTJDTG",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer");</script>
 <!--[if lt IE 9]>
	<script src="public/site-novo/assets/js/html5.js"></script>
	<![endif]-->
<!--[if lt IE 9]>
	<script src="public/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="public/selectivizr-1.0.2/selectivizr.js"></script>
	<noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
	<![endif]-->
<style>header{position:relative;width:100%;background:#fff;font-family:Lato,sans-serif;border-top:solid 1px #e8e8e8;border-bottom:solid 1px #e8e8e8;transition:all .3s ease-in;padding:0!important;z-index:99;height:58px;box-shadow:0 2px 19px -10px rgba(0,0,0,.59);transition:all .2s linear}header nav.main-nav ul>li .btn-trg,header nav.main-nav ul>li a{text-transform:uppercase;text-decoration:none;z-index:9;font-weight:400;font-family:Lato;line-height:1.2;-webkit-font-smoothing:antialiased!important}@media screen and (min-width:320px) and (max-width:1023px){header{position:relative;height:48px!important;width:100%;display:block}}header>.wrapper{max-width:75em}header>.wrapper.large-content{width:100%;max-width:75em}@media (min-width:1460px){header>.wrapper.large-content{width:1440px}}@media screen and (min-width:320px) and (max-width:1023px){header>.container.large-content,header>.wrapper.large-content{padding:0;width:100%}}header span.logo{display:block;float:left;width:auto;padding-top:5px;height:58px}@media screen and (min-width:1360px){header span.logo{margin-right:5%}}@media screen and (min-width:960px) and (max-width:1440px){header span.logo{padding-left:1em;margin-right:4%}}header .menu-open{display:none}header nav.main-nav{display:block;width:100%;height:58px;float:left}@media screen and (min-width:960px){header nav.main-nav span.bt-header-m{display:none}header nav.main-nav span.bt-header-m.bt-entrar{display:block;float:right;width:100%;max-width:110px;text-align:center;position:relative;cursor:pointer}header nav.main-nav span.bt-header-m.bt-entrar:hover a i{color:#ff7800}header nav.main-nav span.bt-header-m.bt-entrar:hover ul.level-2{display:block;width:auto;background:#fff;position:absolute;top:96%;width:100%;border:solid 1px #ddd;float:left;height:auto;right:0}header nav.main-nav span.bt-header-m.bt-entrar>a{display:block;float:left;width:100%;border-left:solid 1px #ddd;background:#fff;max-width:110px;border-right:solid 1px #ddd;height:56px;font-size:25px;padding:5px 4px}header nav.main-nav span.bt-header-m.bt-entrar ul.level-2{display:none}header nav.main-nav span.bt-header-m.bt-entrar ul.level-2 li{display:block;float:left;width:100%;padding:1em 0;margin:0;border:none;height:auto}header nav.main-nav span.bt-header-m.bt-entrar ul.level-2 li a{padding:0;text-align:left;width:100%;display:block;float:left;font-size:12px;padding-left:1em}header nav.main-nav span.bt-header-m.bt-entrar i.icon-menunew{font-weight:500;margin-bottom:4px;display:block;float:left;width:100%;text-align:center;font-size:21px}header nav.main-nav span.bt-header-m.bt-entrar i.icon-user2{font-weight:500;margin-bottom:6px;display:block;float:left;width:100%;text-align:center;font-size:23px;color:#353535}header nav.main-nav span.bt-header-m.bt-entrar small{font-size:12px;font-weight:800;text-transform:uppercase;width:100%;float:left;color:#717171;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;letter-spacing:.1px}}header nav.main-nav.ativo{position:fixed;height:100%;display:block;background:#fff;width:75%;left:0;top:0;max-width:475px;transform:translatex(0);overflow:auto;padding-bottom:75px;transition:transform .3s ease-in;padding:2em;overscroll-behavior:contain}header nav.main-nav.ativo span.logo{width:40%}header nav.main-nav.ativo span.bt-header-m.bt-entrar>a{border:solid 1px #ddd}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav.ativo span.bt-header-m.bt-entrar>a{border:none}}header nav.main-nav.ativo ul{float:left;width:100%;text-align:left;height:auto;display:block}header nav.main-nav.ativo ul>li{display:block;float:left;width:100%;margin-left:0;border-top:solid 1px #f1eded;border-left:none;height:48px;border-bottom:none}header nav.main-nav.ativo ul>li:hover{border-bottom:none}header nav.main-nav.ativo ul>li:nth-child(4) a{border-right:none}header nav.main-nav.ativo ul>li.bt-fav{display:none}header nav.main-nav.ativo ul>li a{padding:13px 20px;top:0;position:relative;float:left;text-align:left;font-size:14px;font-weight:600;color:#717171;line-height:22px;width:100%}header nav.main-nav.ativo ul>li:last-child a i{display:none}header nav.main-nav.ativo ul>li:last-child:hover ul.level-2{display:none}header nav.main-nav.ativo ul>li.bt-call{padding:0}header nav.main-nav.ativo ul>li.bt-call .btn-anuncie{padding-top:1em}header nav.main-nav.ativo ul>li.bt-call .btn-anuncie .btn-cta{display:none}header nav.main-nav.ativo ul>li.bt-call .btn-anuncie ul.level-2{display:block;top:0;position:relative;border:solid 1px #ddd;box-shadow:none}header nav.main-nav.ativo ul>li.bt-call .btn-anuncie ul.level-2 li{border-bottom:none}header nav.main-nav.ativo ul>li.bt-call .btn-anuncie ul.level-2 li:nth-child(2){border-top:none}header nav.main-nav.ativo ul.drop-down-account{display:none}header nav.main-nav ul{margin:0;display:block;float:left;width:auto;position:relative;list-style:none;text-align:right;height:58px}header nav.main-nav ul:last-child{float:right}header nav.main-nav ul>li{display:block;float:left;width:auto;position:relative;border-bottom:solid 3px rgba(255,255,255,0);cursor:pointer;margin-left:-1px;border-left:solid 1px #f1eded;height:58px;letter-spacing:0}header nav.main-nav ul>li.bt-fav a{padding:10px;font-weight:600}header nav.main-nav ul>li.bt-fav a i{display:block;font-size:18px;width:22px;font-weight:600;position:relative;margin:auto}header nav.main-nav ul>li.bt-fav a i small.count-fav-all{transform:scale(1);background:#ff7427;color:#fff;text-align:center;width:20px;display:none;height:20px;border-radius:60px;font-size:12px;padding-top:6px;position:absolute;left:-19px;line-height:7px;font-weight:600;top:-8px;transition:transform .2 ease-in;font-family:lato;border:none}header nav.main-nav ul>li.bt-fav a i small.count-fav-all.anm{animation-name:fav-m;animation-duration:.3s;animation-timing-function:linear}@keyframes fav-m{0%{transform:scale(1)}50%{transform:scale(.8)}100%{transform:scale(1)}}header nav.main-nav ul>li.bt-fav a span{display:block;width:100%}header nav.main-nav ul>li.entrar{border-right:solid 1px #ddd}header nav.main-nav ul>li.entrar a{padding:10px;font-weight:600}header nav.main-nav ul>li.entrar a i{display:block;font-size:18px;float:left;width:100%}header nav.main-nav ul>li.mobile{display:none}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li.mobile{display:block;width:100%;float:left;position:relative;border-bottom:solid 1px #ddd;cursor:pointer;height:auto;margin-left:0}header nav.main-nav ul>li.mobile a i{font-size:10px;position:absolute;right:12px;top:14px}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li{display:block;width:100%;float:left;position:relative;border-top:solid 1px rgba(0,0,0,.08);cursor:pointer;margin-left:0;border-bottom:none;height:auto}header nav.main-nav ul>li:nth-child(4) a i{font-size:10px;position:absolute;right:17px;top:16px;display:none}header nav.main-nav ul>li:nth-child(5){border-bottom:none}header nav.main-nav ul>li:nth-child(5) a i{font-size:10px;position:absolute;top:16px}}header nav.main-nav ul>li .btn-trg{cursor:pointer;padding:22.5px 25px 19.5px 20px;top:0;position:relative;float:left;text-align:center;font-size:13px;font-weight:600;color:#717171;border-right:solid 1px #f1eded}header nav.main-nav ul>li .btn-trg:hover{color:#ff7800}header nav.main-nav ul>li .btn-trg i{font-size:7px;position:absolute;right:8px;top:27px}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .btn-trg{display:block;width:100%;text-align:left;padding:12px 20px}header nav.main-nav ul>li .btn-trg i{font-size:10px;position:absolute;right:12px;top:14px}}header nav.main-nav ul>li .btn-trg i:before{left:-7px;position:absolute;transform:rotate(0);transition:transform .2s ease-in}header nav.main-nav ul>li a{padding:19px 20px;top:0;position:relative;float:left;text-align:center;font-size:13px;font-weight:600;color:#717171;line-height:22px}@media screen and (max-width:1360px) and (min-width:1023px){header nav.main-nav ul>li a{padding:19px 14px}}header nav.main-nav ul>li a:hover{color:#ff7800}header nav.main-nav ul>li .btn-anuncie{display:block;width:100%;height:58px;position:relative}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li a{display:block;width:100%;text-align:left;padding:12px 20px}header nav.main-nav ul>li .btn-anuncie{height:auto}}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li:hover{border-bottom:solid 3px #ff7800}header nav.main-nav ul>li .btn-anuncie:hover{color:#fff;height:132px;transition:all .2s ease-in}header nav.main-nav ul>li .btn-anuncie:hover ul.level-2{display:block}header nav.main-nav ul>li .btn-anuncie:hover span.btn-cta{background:#005aa6;color:#fff;transition:all .2s ease-in}header nav.main-nav ul>li .btn-anuncie:hover span.btn-cta:after{transition:1.2s;transform:translate(581px,136px)}}header nav.main-nav ul>li .btn-anuncie span.btn-cta{border:1px solid #005aa6;padding:10px 39px;position:relative;top:11px;line-height:16px;font-size:14px;width:100%;color:#005aa6;text-transform:none;cursor:pointer;overflow:hidden;display:block;float:left;transition:all .2s ease-in}header nav.main-nav ul>li .btn-anuncie span.btn-cta i{display:none}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .btn-anuncie span.btn-cta i{position:absolute;font-size:23px;left:0;display:block;margin-right:10px;float:left;width:43px;height:100%;border-right:solid 1px #ddd;top:0;padding:10px;-webkit-font-smoothing:inherit!important}header nav.main-nav ul>li .btn-anuncie span.btn-cta i:before{left:10px;top:6px}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .btn-anuncie span.btn-cta{background:#fff;padding:10px 25px 10px 57px;position:relative;display:block;float:left;top:0;line-height:16px;margin:0;color:#ff7800;font-size:14px;border:none;text-transform:uppercase}}header nav.main-nav ul>li .btn-anuncie span.btn-cta:after{content:'';width:200px;height:200px;position:absolute;top:-130px;left:-130px;background-image:linear-gradient(-45deg,rgba(255,255,255,0) 0,rgba(255,255,255,0) 35%,rgba(255,255,255,.3) 50%,rgba(255,255,255,0) 65%,rgba(255,255,255,0) 100%)}header nav.main-nav ul>li .btn-anuncie ul.level-2{top:49px;left:0;background:#fff;width:100%;padding:0}@media screen and (min-width:960px) and (max-width:1980px){header nav.main-nav ul>li .btn-anuncie ul.level-2{box-shadow:0 2px 10px -4px rgba(0,0,0,.59)}}header nav.main-nav ul>li .btn-anuncie ul.level-2 li{border:none}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li .btn-anuncie ul.level-2 li{border-right:solid 1px #ddd;width:50%;border-bottom:solid 3px #fff}header nav.main-nav ul>li .btn-anuncie ul.level-2 li:hover{background:#fff;border-bottom:solid 3px #ff7800}header nav.main-nav ul>li .btn-anuncie ul.level-2 li:nth-child(2){border-right:none}}header nav.main-nav ul>li .btn-anuncie ul.level-2 li:hover a,header nav.main-nav ul>li .btn-anuncie ul.level-2 li:hover i{color:#ff7800}header nav.main-nav ul>li .btn-anuncie ul.level-2 li:nth-child(2){border:none;border-top:solid 1px #ddd}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .btn-anuncie ul.level-2{top:0;background:#fff}header nav.main-nav ul>li .btn-anuncie ul.level-2 li:nth-child(2){border:none}}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li .btn-anuncie ul.level-2 li:nth-child(2):hover{background:#fff;border-bottom:solid 3px #ff7800}}header nav.main-nav ul>li .btn-anuncie ul.level-2 li a{padding:12px;color:#717171;font-size:14px;border:none;text-align:center}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .btn-anuncie ul.level-2 li a{border-top:solid 1px rgba(0,0,0,.09);text-align:left;padding-left:55px}header nav.main-nav ul>li .btn-anuncie ul.level-2 li a i{height:42px}}header nav.main-nav ul>li .btn-anuncie ul.level-2 li a i{display:block;position:absolute;left:0;top:0;padding:8.5px;font-size:25px;-webkit-font-smoothing:inherit!important;border-right:solid 1px rgba(0,0,0,.14);color:#717171;line-height:17px}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li .btn-anuncie ul.level-2 li a i{display:block;position:relative;padding-bottom:7.5px;font-size:32px;-webkit-font-smoothing:inherit!important;border-right:none;color:#717171;line-height:28px}header nav.main-nav ul>li:nth-child(3):hover ul.level-2,header nav.main-nav ul>li:nth-child(4):hover ul.level-2{display:block}}header nav.main-nav ul>li:nth-child(3) ul.level-2{width:214px;box-shadow:0 6px 15px -12px;border:1px solid #eaeaea}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li:nth-child(3) ul.level-2{box-shadow:none;border:none;width:100%}header nav.main-nav ul>li:nth-child(3) ul.level-2 a{color:#717171}}header nav.main-nav ul>li:nth-child(4) a{padding-right:25px;border-right:solid 1px #f1eded}header nav.main-nav ul>li:nth-child(4) a i{font-size:7px;position:absolute;right:8px;top:41%}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li:nth-child(4) a{border-right:none}header nav.main-nav ul>li:nth-child(4) a i{font-size:10px;position:absolute;right:12px;top:14px}}header nav.main-nav ul>li:nth-child(4) a i:before{left:-7px;position:absolute;transform:rotate(0);transition:transform .2s ease-in}header nav.main-nav ul>li:nth-child(4):hover a i:before{transform:rotate(90deg);position:absolute;left:-7px;transition:transform .2s ease-in}header nav.main-nav ul>li.bt-call{border:none;height:58px;top:0;padding:0 30px;border-bottom:none}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li.bt-call{height:auto;top:0;padding:0;border-top:solid 1px #ddd}}header nav.main-nav ul>li.bt-call a:before{content:'';border-left:none}header nav.main-nav ul>li.bt-call a i.icon-megaphone{position:absolute;font-size:22px;top:12px;left:34px;-webkit-font-smoothing:inherit!important;display:none}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li.bt-call a{padding:12px 20px 12px 4em;background:0 0;border:none}header nav.main-nav ul>li.bt-call a i.icon-megaphone{position:absolute;font-size:23px;left:-1px;display:block;margin-right:10px;float:left;width:auto;height:100%;border-right:solid 1px rgba(0,0,0,.1);top:0;padding:10px}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li.entrar ul.level-2 li a{padding-left:55px}}header nav.main-nav ul>li:last-child:hover a{color:#ff7800}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li:last-child:hover ul.level-2{display:block;right:0;height:auto;top:57px;left:inherit;min-width:130px;width:auto;max-width:180px}header nav.main-nav ul>li:last-child:hover ul.level-2 li{color:#717171}header nav.main-nav ul>li:last-child:hover ul.level-2 li:hover{background:#fff}header nav.main-nav ul>li:last-child:hover ul.level-2 li:hover a,header nav.main-nav ul>li:last-child:hover ul.level-2 li:hover a i{color:#ff7800}header nav.main-nav ul>li:last-child:hover ul.level-2 li a{color:#717171;border:none}header nav.main-nav ul>li:last-child:hover ul.level-2 li a i{display:block;float:left;position:absolute;left:0;padding:13px;top:0;font-size:22px;color:#717171}header nav.main-nav ul>li:last-child:hover ul.level-2 li a i.icon-next{font-size:16px;padding:15px}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li:last-child a i{position:absolute;left:0;width:43px;border-right:solid 1px rgba(0,0,0,.14);padding:16px;top:0!important}header nav.main-nav ul>li:last-child a i.icon-facebook-logo-button,header nav.main-nav ul>li:last-child a i.icon-user{font-size:22px;padding:11px}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li:last-child .btn-cta{border-right:none;padding:12px 20px 12px 4em;background:0 0;color:#005aa6;border-top:solid 1px #ddd;border-bottom:solid 1px #ddd}header nav.main-nav ul>li:last-child .btn-cta i.icon-user2{position:absolute;font-size:23px;left:-1px;display:block;margin-right:10px;float:left;width:43.5px;height:100%;border-right:solid 1px rgba(0,0,0,.1);top:0;padding:10px}header nav.main-nav ul>li:last-child .btn-cta i.icon-user2:before{left:9px;top:7px}}header nav.main-nav ul>li.logo{display:block;float:left}header nav.main-nav ul>li.logo a{padding:10px 0;position:relative;border:none}header nav.main-nav ul>li.logo img{width:100%;max-width:200px}header nav.main-nav ul>li .level-2{display:none;position:absolute;background:#fff;left:-1px;width:123px;height:auto;top:61px;padding:0;box-shadow:0 2px 15px -6px;z-index:9999}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2.ativo{display:block;background:#f7f7f7;border-bottom:none;float:left}header nav.main-nav.ativo ul>span.removeDrop{height:auto}header nav.main-nav.ativo ul>span.removeDrop .mobh{display:none}}span.removeDrop{display:block;float:left;width:auto;position:relative;border-bottom:solid 3px rgba(255,255,255,0);cursor:pointer;margin-left:-1px;border-left:solid 1px #f1eded;height:58px;letter-spacing:0}@media screen and (min-width:1024px){span.removeDrop ul.level-2{display:none;position:absolute;width:170px;bottom:-61px;background:#fff;flex-flow:row wrap}span.removeDrop ul.level-2 li{background:#fff;width:170px;border:solid 1px #f3f3f3}span.removeDrop:hover ul.level-2{display:flex}}span.removeDrop .mobh{text-align:center;font-size:13px;padding:19px 20px;top:0;position:relative;float:left;font-weight:500;color:#717171;line-height:22px;text-transform:uppercase;-webkit-text-stroke:.5px}span.removeDrop .mobh i{font-size:7px;left:5px;position:relative;top:-1px}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2{display:none;position:relative;top:0;background:#f3f3f3;left:0;width:100%;padding:0;float:left;box-shadow:none}}header nav.main-nav ul>li .level-2>li{display:block;float:left;width:100%;border:none;border-bottom:solid 1px #ddd;margin-left:0;height:auto}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2>li{border-top:solid 1px rgba(0,0,0,.05);border-bottom:none}}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li .level-2>li .btn-trg{width:100%;padding:15px;text-align:left;text-transform:none}header nav.main-nav ul>li .level-2>li .btn-trg i{top:19px}header nav.main-nav ul>li .level-2>li:hover ul.level-3{display:block}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2>li .btn-trg{border:none;color:#717171;text-transform:none}header nav.main-nav ul>li .level-2>li:last-child a{background:0 0;color:#717171}}header nav.main-nav ul>li .level-2>li:nth-child(2) ul.level-3{left:122px;top:0;border:1px solid #eaeaea}header nav.main-nav ul>li .level-2>li a{padding:15px;width:100%;text-align:left;text-transform:none}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2>li:nth-child(2) ul.level-3{left:0;top:0}header nav.main-nav ul>li .level-2>li a{padding-left:2em;color:#717171}}header nav.main-nav ul>li .level-2>li a i{top:22px}header nav.main-nav ul>li .level-2>li a i:before{transform:rotate(0)!important}header nav.main-nav ul>li .level-2 .level-3{display:none;position:absolute;left:122px;background:#fff;width:196px;height:auto;top:0;padding-left:0;border-left:solid 1px #ddd;box-shadow:5px 4px 6px -8px;z-index:0}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2 .level-3.ativo{display:none}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2 .level-3{display:none;position:relative;left:0;background:#efefef;width:100%;top:0;border-left:none}}header nav.main-nav ul>li .level-2 .level-3 li{display:block;float:left;width:100%;height:auto;border-bottom:solid 1px #ddd;margin-left:0}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2 .level-3 li{border:none;border-top:solid 1px rgba(0,0,0,.05)}}@media screen and (min-width:960px) and (max-width:2400px){header nav.main-nav ul>li .level-2 .level-3 li:hover{background:#fff}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2 .level-3 li:last-child a{color:#717171;border:none}}header nav.main-nav ul>li .level-2 .level-3 li a{display:block;font-size:14px;text-transform:none;color:#717171}header nav.main-nav ul>li .level-2 .level-3 li a:hover{color:#ff7800}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav ul>li .level-2 .level-3 li a{color:#717171;border:none}}@media only screen and (min-width:768px){.site-header{z-index:999999}}.site-header{z-index:999999}@media screen and (max-width:960px) and (min-width:320px){header nav.main-nav ul>li.entrar{position:relative}header nav.main-nav ul>li .level-2{display:block;border:none;width:100%;left:0}header nav.main-nav ul>li .level-2.drop-down-account>li{width:33%;float:left;background:#07508e;text-align:center;padding:10px!important}header nav.main-nav ul>li .drop-down-account>li a{padding:0!important;text-align:center;font-weight:600;font-size:13px}header nav.main-nav ul>li .drop-down-account>li:nth-child(2n+1){padding:8px;background:#005aa6}header nav.main-nav ul>li .drop-down-account>li:last-child{padding:17.5px!important;background:#ff7800}header nav.main-nav ul>li .drop-down-account>li:last-child a{color:#fff}}html[data-useragent*='MSIE 10.0'] img{outline:0;border:none}@media screen and (min-width:320px) and (max-width:1023px){header span.logo{height:48px;width:60%;padding-left:1em;padding-top:6px}header span.logo a{display:block;float:left;width:100%}header span.logo img{width:130px}header .menu-open{display:block;float:right;width:20%;height:48px;font-size:25px;padding:5px 4px;text-align:center;border-left:solid 1px #ddd}.bt-header-m{display:block;float:right;width:20%;height:48px;font-size:25px;padding:5px 4px;text-align:center;border-left:solid 1px #ddd;color:#ff7800;background:#fff}.bt-header-m i.icon-menunew{font-weight:500;margin-bottom:1px;display:block;float:left;width:100%;text-align:center}.bt-header-m i.icon-user2{font-weight:500;margin-bottom:4px;display:block;float:left;width:100%;text-align:center;font-size:23px;color:#353535}.bt-header-m small{font-size:.4em;font-weight:800;text-transform:uppercase;width:100%;float:left;color:#717171;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;letter-spacing:.1px}}@media screen and (min-width:320px) and (max-width:1023px){header nav.main-nav{display:block;float:left;width:100%;top:0;transform:none;height:auto;position:fixed;height:48px;background:#fff;box-shadow:0 10px 10px -13px rgba(0,0,0,.45098);transition:transform .2s linear;transform:translateY(0)}header nav.main-nav.nav-up{transform:translateY(-48px);transition:transform .2s linear}header nav.main-nav.ativo{width:80%;overflow:inherit;padding:0}header nav.main-nav.ativo span.logo{display:block;width:auto}header nav.main-nav.ativo span.bt-header-m{width:25%;position:absolute;right:0;display:block}header nav.main-nav.ativo span.bt-header-m.menu-open{position:absolute;right:-25%}header nav.main-nav span.logo{display:block}header nav.main-nav span.bt-header-m{display:block}header nav.main-nav ul{display:none}.mobile-infinite-page{display:none}.mobile-infinite-page.ativo{display:block;float:left;width:60%;height:48px;background:#fff;position:absolute;top:0;left:0}.mobile-infinite-page .desc-page{width:100%;padding-top:11px;padding-left:12px;padding-bottom:7px;font-size:12px;display:block;float:left;color:#353535;font-weight:600;text-transform:uppercase;text-align:left;position:relative;line-height:15px}.mobile-infinite-page .desc-page.active i.icon-next{transform:rotate(90deg);transition:transform .1s linear}.mobile-infinite-page .desc-page small{font-size:12px;display:block;float:left;color:#717171;width:100%;text-transform:none;font-weight:500;-webkit-text-stroke:.2px}.mobile-infinite-page .desc-page i.icon-next{position:absolute;right:7%;top:33%;font-weight:600;color:#ff7800;transform:rotate(0);transition:transform .1s linear}.mobile-infinite-page ul.drop{width:100%;display:none;border:solid 1px #ddd;background:#fff;float:left;height:200px;overscroll-behavior:contain;overflow:scroll}.mobile-infinite-page ul.drop.active{display:block}.mobile-infinite-page ul.drop.active li{display:block;float:left}.mobile-infinite-page ul.drop.active li a{text-decoration:none;border-bottom:solid 1px #ddd}}.mobile-infinite-page{display:none}section.login-m{position:absolute;width:25%;background:#fff;z-index:99999;height:100%;box-shadow:0 10px 10px -4px;transform:translateX(-100%);transition:transform .2s ease-out}section.login-m.active{transform:translateX(0);transition:transform .2s ease-in}.back-f-desk{display:none}.modal-login-geral{position:fixed;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;display:none;z-index:99999999999;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);width:100%;height:100%;top:0;left:0}@media screen and (max-width:1023px) and (min-width:320px){.modal-login-geral{padding:1em}}.modal-login-geral .overlay-login{position:fixed;width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,.8)}.modal-login-geral form{position:relative;width:100%;z-index:9;max-width:900px}.modal-login-geral form .bt-close-login{position:absolute;top:-13px;left:-15px;z-index:999999;background:#fff;padding:1em;box-shadow:0 7px 20px -11px #000;border-radius:60px;color:#f44336;transform:rotate(45deg);border:solid 1px #f3f3f3;cursor:pointer}.msg-sucess-login{position:relative;z-index:9;background:#fff;padding:1em;width:100%;height:100%;margin:auto;max-width:360px;max-height:360px;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;text-align:center}.msg-sucess-login i.icon-bookmark{display:block;width:90px;text-align:center;font-size:60px;position:relative;margin-bottom:.5em}.msg-sucess-login i.icon-bookmark i.icon-checked{position:absolute;font-size:16px;color:#fff;background:#ff7427;padding:10px;border-radius:60px;z-index:9;left:-7px;top:-10px}.msg-sucess-login h3{display:block;float:left;width:100%;font-size:21px;text-transform:uppercase;font-weight:600;margin-bottom:5px}.msg-sucess-login p{display:block;float:left;width:100%;color:#717171}.msg-sucess-login .bt-fechar{position:absolute;top:-13px;left:-15px;z-index:999;background:#fff;padding:1em;box-shadow:0 7px 20px -11px #000;border-radius:60px;color:#f44336;transform:rotate(45deg);cursor:pointer}.msg-sucess-login .bt-close{display:block;float:left;width:100%;text-align:center;padding:1em;margin-top:2em;text-transform:uppercase;font-weight:600;color:#fff;background:#ff7427;cursor:pointer}.site-header *{-webkit-transition:none!important;-moz-transition:none!important;-o-transition:none!important;transition:none!important}header nav.main-nav.ativo ul span.removeDrop{width:100%;height:auto;border:none}header nav.main-nav.ativo ul span.removeDrop>span.drop{display:none}header nav.main-nav.ativo ul span.removeDrop ul.level-2.ativo{bottom:0;position:relative}header nav.main-nav.ativo ul span.removeDrop ul.level-2.ativo li{border-left:none;border-right:none}@font-face{font-family:'Lato';font-style:normal;font-weight:300;src:local('Lato Light'),local('Lato-Light'),url(/public/fonts/Lato-Light.ttf) format('truetype')}@font-face{font-family:'Lato';font-style:normal;font-weight:400;src:local('Lato Regular'),local('Lato-Regular'),url(/public/fonts/Lato-Regular.ttf) format('truetype')}@font-face{font-family:'Lato';font-style:normal;font-weight:700;src:local('Lato Bold'),local('Lato-Bold'),url(/public/fonts/Lato-Bold.ttf) format('truetype')}@font-face{font-family:'icomoon';src:url(https://www.chavesnamao.com.br/public/site-novo/fonts/icomoon/icomoon.eot?4v27t3);src:url('https://www.chavesnamao.com.br/public/site-novo/fonts/icomoon/icomoon.eot?4v27t3#iefix') format('embedded-opentype'),url(https://www.chavesnamao.com.br/public/site-novo/fonts/icomoon/icomoon.ttf?4v27t3) format('truetype'),url(https://www.chavesnamao.com.br/public/site-novo/fonts/icomoon/icomoon.woff?4v27t3) format('woff'),url('https://www.chavesnamao.com.br/public/site-novo/fonts/icomoon/icomoon.svg?4v27t3#icomoon') format('svg');font-weight:400;font-style:normal}[class^="icon-"],[class*=" icon-"]{font-family:'icomoon'!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-transportation:before{content:"\e956"}.icon-printer:before{content:"\e95a"}.icon-galeria-qtd:before{content:"\e957"}.icon-ensino:before{content:"\e94f"}.icon-gym:before{content:"\e950"}.icon-mall:before{content:"\e951"}.icon-supermarket:before{content:"\e952"}.icon-fries-and-soft-drink:before{content:"\e958"}.icon-bakery:before{content:"\e953"}.icon-pharmacy:before{content:"\e954"}.icon-hospital:before{content:"\e955"}.icon-share-new:before{content:"\e959"}.icon-star-order:before{content:"\e94b"}.icon-arrow-up:before{content:"\e94c"}.icon-valor:before{content:"\e94d"}.icon-expand:before{content:"\e94e"}.icon-speech-bubble:before{content:"\e949"}.icon-link:before{content:"\e94a"}.icon-menunew:before{content:"\e946"}.icon-bookmark:before{content:"\e948"}.icon-office:before{content:"\e943"}.icon-happy:before{content:"\e941"}.icon-error:before{content:"\e945"}.icon-sucess:before{content:"\e944"}.icon-conversation:before{content:"\e940"}.icon-messenger:before{content:"\e93f"}.icon-whatsapp-anuncio:before{content:"\e933"}.icon-email-circular:before{content:"\e93c"}.icon-google-share:before{content:"\e93d"}.icon-twitter-circular-button:before{content:"\e93e"}.icon-fav:before{content:"\e930"}.icon-icon:before{content:"\e931"}.icon-right-arrow:before{content:"\e932"}.icon-facebook-logo-in-circular-button-outlined-social-symbol:before{content:"\e934"}.icon-share:before{content:"\e935"}.icon-chat:before{content:"\e936"}.icon-mail:before{content:"\e937"}.icon-home-private:before{content:"\e938"}.icon-denunciar:before{content:"\e95b"}.icon-house-sketch:before{content:"\e939"}.icon-garden:before{content:"\e93a"}.icon-checked:before{content:"\e93b"}.icon-android-logo:before{content:"\e900"}.icon-icone:before{content:"\e901"}.icon-entrar:before{content:"\e902"}.icon-building:before{content:"\e903"}.icon-apartamento:before{content:"\e904"}.icon-city:before{content:"\e905"}.icon-cityscape:before{content:"\e906"}.icon-facebook-logo-button:before{content:"\e907"}.icon-ver-avaliacoes:before{content:"\e908"}.icon-fireplace:before{content:"\e909"}.icon-google-plus-logo-button:before{content:"\e90a"}.icon-central-de-ajuda:before{content:"\e90b"}.icon-hotel:before{content:"\e90c"}.icon-casa:before{content:"\e90d"}.icon-houses:before{content:"\e90e"}.icon-loupe:before{content:"\e90f"}.icon-megaphone:before{content:"\e910"}.icon-devices:before{content:"\e911"}.icon-next:before{content:"\e912"}.icon-location:before{content:"\e913"}.icon-school:before{content:"\e914"}.icon-comercial:before{content:"\e915"}.icon-twitter-logo-button:before{content:"\e916"}.icon-user:before{content:"\e917"}.icon-youtube-logotype:before{content:"\e918"}.icon-menu:before{content:"\e919"}.icon-user2:before{content:"\e91a"}.icon-street-v:before{content:"\e95c"}.icon-carro:before{content:"\e91b"}.icon-moto:before{content:"\e91c"}.icon-bgcity:before{content:"\e91d"}.icon-home-busca:before{content:"\e91e"}.icon-carro-busca:before{content:"\e91f"}.icon-avaliar-veiculo:before{content:"\e920"}.icon-plus:before{content:"\e921"}.icon-bath:before{content:"\e922"}.icon-bed:before{content:"\e923"}.icon-filter:before{content:"\e924"}.icon-order:before{content:"\e925"}.icon-obras:before{content:"\e926"}.icon-video:before{content:"\e927"}.icon-email:before{content:"\e928"}.icon-whatsapp:before{content:"\e929"}.icon-map:before{content:"\e92a"}.icon-left-arrow:before{content:"\e92b"}.icon-feature:before{content:"\e92c"}.icon-favorite:before{content:"\e92d"}.icon-beds:before{content:"\e92e"}.icon-blueprint:before{content:"\e92f"}.icon-phone:before{content:"\e942"}.icon-location2:before{content:"\e947"}.icon-eye:before{content:"\e9ce"}.breadcrumb span{float:left;margin:0 5px;color:rgba(255,120,0,1)!important;display:block;font-size:12px;position:relative;top:3px;line-height:6px}.breadcrumb{background:none;padding:15px;padding-bottom:10px}.breadcrumb li{float:left}.bar-breadcrumb .breadcrumb li a{color:#717171!important;font:12px 'Titillium Web',sans-serif!important;font-weight:600;font-style:italic;white-space:normal!important}.bar-breadcrumb .breadcrumb li a i{margin-right:5px}.bar-breadcrumb .breadcrumb li a:hover{color:rgba(255,120,0,1)!important}.bar-breadcrumb .breadcrumb li.active{color:#717171!important}.bar-breadcrumb{background:#eee!important;text-align:left!important;width:100%!important;display:block!important;float:left!important;top:0px!important;margin-top:0px!important;margin-bottom:0px!important;padding-top:0px!important;padding-bottom:0;height:40px!important}.bar-breadcrumb .interna{background:#FFF!important;text-align:left!important;width:100%!important;display:block!important;float:left!important;top:0px!important;margin-top:0px!important;margin-bottom:0px!important;padding-top:0px!important;padding-bottom:0;height:40px!important}.bar-breadcrumb .breadcrumb{margin-top:10px}@media (max-width:768px){.bar-breadcrumb .breadcrumb{padding-left:0!important}}.overlay-menu{position:fixed;top:0;opacity:0;left:0;width:0;height:0;background:rgba(0,0,0,.9);z-index:99;opacity:1;transition:opacity 0.2s ease-in}.overlay-menu.ativo{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5);z-index:9999;opacity:1;transition:opacity 0.2s ease-in}div.tipValidation.error{display:block;width:100%;text-align:center;float:left;color:#fff;font-size:13px;margin-top:0!important;margin-bottom:0em;display:inline-block;margin:auto;background:rgb(193,22,22);width:100%;padding:9px;margin-left:0;color:#fff;position:relative;top:-1px;border-top:solid 2px rgb(255,3,3);font-weight:600;box-shadow:none!important;border-radius:0px!important}.bg-lock{overflow:hidden;position:fixed;height:100%}div.tipValidation.error.msg-ok{background:#198647 none repeat scroll 0 0;border-top:solid 2px #198647}div.tipValidation.error.msg-ok .topArrow{background:none}.title-pgs .pelicula-blue{height:378px!important}.title-pgs .pelicula-orange{height:378px!important}.title-pgs .infos{top:3em}.bar-breadcrumb.veiculo{margin-top:0px!important;padding-top:2px!important}@media screen and (max-width:1200px) and (min-width:960px){.large-content{width:100%}}.bar-breadcrumb .icones-btn{padding-top:4px!important}.pagina-guia{margin-top:0px!important;padding-top:10px!important}.breadBar .breadcrumb a{color:#717171!important;font:12px 'Titillium Web',sans-serif!important;font-weight:600;font-style:italic;white-space:normal!important}.detalheImovel .breadBar{background:none}.breadBar{background:none;margin-bottom:0}.breadcrumb span.divider2{margin:0 5px;color:rgba(255,120,0,1)!important;display:block;font-size:12px;position:relative;top:0}.breadBar .breadcrumb a{float:left!important}.colResult .baseLista .item a.linkFull{width:100%;height:100%;position:absolute;top:0;left:0;z-index:999;text-indent:-5000em}.vitrine-busca .slideTest{position:relative;z-index:30;width:100%;float:left}@media screen and (min-width:320px) and (max-width:640px){html body .site-header{height:58px}}@media screen and (min-width:640px) and (max-width:1100px){html body .site-header{height:58px}}.container.large-content{width:94%!important;max-width:1440px!important;display:block!important;position:relative!important;margin:auto!important}@media (min-width:1460px){.container.large-content{width:1440px;display:block;position:relative;margin:auto}}@media screen and (min-width:320px) and (max-width:640px){.container.large-content{padding:0;width:100%!important}}@media screen and (min-width:640px) and (max-width:1100px){.container.large-content{padding:0;width:100%!important}}@media screen and (min-width:320px) and (max-width:640px){p{font-size:14px;color:#525252;line-height:18px}}.colResult .baseLista .item .descricao header{z-index:inherit;height:auto}.colResult .baseLista .item .descricao header p span{font-size:12px}.colResult .baseLista .item .descricao .lkEndereco{z-index:99999;position:relative}.colResult .baseLista .item .descricao div.botoes{z-index:99999;position:relative}.colResult .baseLista .item .descricao a.btFavorito.default{z-index:99999;position:relative;font-size:12px}.detalheImovel .resumo ul.listaCaracteristcias li h2{padding:0}.boxAnuncio .row .resumo p{font-size:12px}.colResult .baseLista .item.list-group-item .baseGaleria{z-index:99999}div.bannerHome h2{padding:0;text-align:left;color:#fff}div.bannerHome p{text-align:left;color:#fff}div.bannerHome div.overlayApp{padding:5% 2%}.colResult .baseLista .item .descricao h2{text-align:left;padding-left:0}descricaoBusca p b{color:#777;font-weight:700}.img__text h2{color:#fff;text-align:left;padding:0}.img__text p{color:#fff;text-align:left}.form h2{padding:0;padding-bottom:.5em;float:none}.tipoForm{background-size:cover}.sprite-troca{height:16px}.sprite-labelObras{height:16px}.lightboxActive .galeriaLightbox a.closeLightbox{z-index:9999999;top:104px;right:48px}.bar-breadcrumb .resultados{background:#f2f4f7!important}.colResult .baseLista .item.list-group-item .baseGaleria{min-height:330px}@-ms-viewport{width:device-width}.esconde{display:none!important}@media screen and (min-width:641px) and (max-width:959px){html body.menu-ativo .site-header{z-index:9999999!important}}.wrapper::after{clear:both;content:"";display:table}@media screen and (min-width:641px) and (max-width:959px){.wrapper{max-width:38em;width:100%}}@media screen and (min-width:320px) and (max-width:640px){.wrapper{max-width:25em;width:100%}}@media screen and (min-width:1600px){.wrapper.large-content{max-width:86%!important;width:100%!important;max-width:1440px!important}}@media screen and (min-width:1330px) and (max-width:1600px){.wrapper.large-content{max-width:96%!important;width:100%!important}}@media screen and (min-width:1250px) and (max-width:1330px){.wrapper.large-content{max-width:99%!important;width:100%!important}}@media screen and (min-width:959px) and (max-width:1250px){.wrapper.large-content{max-width:99%!important;width:100%!important}}.breadcrumb li a i{margin-right:7px}section.breadcrumb.anuncio .wrapper .left{display:block;position:relative;width:100%;margin-right:1%;float:left}section.breadcrumb.anuncio .wrapper .left .btVoltar{display:block;float:left;width:auto;padding:10px 10px;color:#717171;border-right:solid 1px #DDd}section.breadcrumb.anuncio .wrapper .left .btVoltar:hover{background:#f5f5f5;color:#005aa6;transition:all 0.2s ease-in}section.breadcrumb.anuncio .wrapper .left .btVoltar:hover span{color:#005aa6!important;transition:all 0.2s ease-in}section.breadcrumb.anuncio .wrapper .left .btVoltar i{display:block;float:left;margin-right:0;font-size:14px}section.breadcrumb.anuncio .wrapper .left .btVoltar span{margin:0;top:0;color:#717171!important;text-transform:uppercase;font-weight:600;font-size:10px;line-height:16px;margin-left:10px;width:170px;transition:all 0.2s cubic-bezier(.55,.09,.68,.53);white-space:nowrap;text-overflow:clip;overflow:hidden}section.breadcrumb.anuncio .wrapper .left .bread{display:block;float:left;padding:10px 16px}@media screen and (min-width:320px) and (max-width:960px){section.breadcrumb.anuncio .wrapper .left .bread{display:none}}section.breadcrumb.anuncio .wrapper .left .bread ul{display:inline-block;float:left;padding-left:0;margin:0;width:100%}section.breadcrumb.anuncio .wrapper .left .bread ul li{display:block;float:left;line-height:14px}section.breadcrumb.anuncio .wrapper .left .bread ul li:first-child a i{margin-right:6px;font-size:14px;line-height:13px;top:1px;position:relative}section.breadcrumb.anuncio .wrapper .left .bread ul li:last-child:after{display:none}section.breadcrumb.anuncio .wrapper .left .bread ul li:after{content:'\e912';margin:0 5px;font-family:'Icomoon';position:relative;font-size:10px;color:#ff7800;font-weight:600}section.breadcrumb.anuncio .wrapper .left .bread ul li a{color:#717171;text-transform:uppercase;font-size:11px}section.breadcrumb.anuncio .wrapper .left .bread ul li a:hover{color:#005aa6;text-decoration:underline}section.breadcrumb.anuncio .wrapper.btShare-active .left .btVoltar span{white-space:nowrap;width:0;margin-left:0;overflow:hidden;text-overflow:clip;transition:all 0.2s cubic-bezier(.55,.09,.68,.53)}.modal-dialog{top:50px!important}div.modalEncaminhar,div.modalErro,div.modalSalvar,div.modalSolicitar{top:10%!important}@media screen and (min-width:320px) and (max-width:960px){.publicidade-banner{display:none}}.frmErro{border:1px solid red !important;}</style><style>@charset "UTF-8";html{box-sizing:border-box;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased;font-family:lato!important;font-weight:400;font-style:normal;overflow-x:hidden;width:100%;display:block;float:left;overflow-y:scroll;-webkit-overflow-scrolling:touch}body{display:block;width:100%;margin:auto;background:#eaebef}div.publicidade{display:block;width:100%;position:relative;background:#fff;padding:10px;margin-bottom:7px;display:block;float:left;min-height:110px}div.publicidade span{font-size:10px;text-transform:uppercase;font-weight:600;color:#717171;margin-bottom:5px;display:block;position:absolute;width:auto;top:.5em;left:0;padding:9px;letter-spacing:.2px}div.publicidade div.publicidade-banner{margin:auto;display:block;float:none;text-align:center;overflow:hidden}div.publicidade div.publicidade-banner img{width:100%}div.publicidade div.publicidade-banner div{height:90px;width:100%}div.publicidade.fim-pg{min-height:109px;margin-bottom:5px;margin-top:4em;background:#dddfe6;border:none}ul.card__list div.publicidade{margin-bottom:7px;margin-top:10px;min-height:110px}.filters-form form a.apply-filter{width:100%;background:#ff7427;border:none;color:#fff;border-radius:0;text-align:center;position:fixed;bottom:0;text-transform:uppercase;font-weight:600;font-size:16px;height:auto;left:0;padding:1em;z-index:99;text-decoration:none}@media screen and (min-width:1024px) and (max-width:4920px){.wrapper{max-width:64em;margin-left:auto;margin-right:auto;max-width:96%}.wrapper.large-content{max-width:96%!important;width:100%!important}.wrapper::after{clear:both;content:"";display:table}section.breadcrumb{display:block;float:right;width:99%;padding-left:0}section.breadcrumb ul{list-style:none}section.breadcrumb ul li{font-size:14px;color:#353535;display:block;width:auto;margin:0 10px;position:relative}section.breadcrumb ul li:first-child{margin-left:0}section.breadcrumb ul li:after{content:'\e912';color:#ff7427;font-family:Icomoon;font-size:10px;position:absolute;right:-15px;line-height:14px;top:0}section.breadcrumb ul li a{text-decoration:none;color:#949494;font-weight:400}section.breadcrumb ul li:nth-last-child(2):after{display:none;content:''}section.resultados-de-busca{width:100%;padding-left:.5%;display:block;float:right;position:relative;-webkit-overflow-scrolling:touch}section.resultados-de-busca .links{display:block;width:66%;margin-top:.2em;float:left;margin-bottom:.2em}section.resultados-de-busca .links ul{display:block;width:69%;float:left}section.resultados-de-busca .links ul li{width:33%;float:left;min-width:120px;background:#fff;margin-left:-1px}section.resultados-de-busca .links ul li:first-child{margin-left:0}section.resultados-de-busca .links ul li a{text-transform:uppercase;text-decoration:none;padding:22px 0;text-align:center;width:auto;min-width:130px;display:block;color:#717171;font-size:13px;font-weight:600;line-height:16px;letter-spacing:.4px}section.resultados-de-busca .links fieldset.order{width:31%;border:none;display:block;float:right;text-align:right;border-bottom:none;border-right:none;max-width:390px;padding:0}section.resultados-de-busca .links fieldset.order label{display:block;float:left;width:36%;margin:0;padding:14px 7px;text-transform:uppercase;color:#717171;font-size:12px;font-weight:600;text-align:center}section.resultados-de-busca .links fieldset.order label small{display:none}section.resultados-de-busca .links fieldset.order .select-block{background-color:#fff;width:100%;height:60px;border:solid 1px #f2f4f7;float:right;position:relative}section.resultados-de-busca .links fieldset.order .select-block .active-list:before{content:'';width:1px;height:100%;position:absolute;right:23%}section.resultados-de-busca .links fieldset.order .select-block .active-list:after{content:"\e925";font-family:Icomoon;position:absolute;right:0;top:0;width:20%;padding-left:0;text-align:center;height:60px;line-height:60px;color:#939393;font-size:18px;margin-top:0;color:#303f9f}section.resultados-de-busca .links fieldset.order .select-block .custom-select{display:inline-block;position:relative;padding:0;width:100%;line-height:52px}section.resultados-de-busca .links fieldset.order .select-block .custom-select:before{content:'';position:absolute;left:50%;width:0%;bottom:0;height:2px;background-color:#ff7427}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list{width:100%;height:auto;max-height:450px;overflow-x:auto;z-index:9999;padding:0;margin:0;position:absolute;top:100%;left:0;background-color:#fff;border:solid 1px #ddd;display:none;box-shadow:rgba(0,0,0,.36) 0 6px 12px -13px,rgba(0,0,0,.15) 0 1px 4px}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list li{padding:12px 1em;text-align:left;border:none;border-bottom:solid 1px #ddd;line-height:normal;background-color:#f7f7f7;color:#353535;font-weight:600;letter-spacing:.4px;padding-left:2em;font-size:13px;width:100%}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list li.all{background:#fff}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list label{display:block;float:left;text-align:left;padding-left:1em;position:relative;background:#353535;color:#fff;top:0;z-index:99;line-height:2px;font-size:12px;width:100%;font-weight:600;left:0}section.resultados-de-busca .links fieldset.order .select-block .custom-select .list-field{width:100%;height:54px;padding:0 15px;position:absolute;top:0;left:0;display:none}section.resultados-de-busca .links fieldset.order .select-block .custom-select .active-list{width:100%;height:58px;color:#353535;position:relative;z-index:2;white-space:nowrap;overflow:hidden;box-sizing:border-box;text-align:left;padding-left:1.5em;text-transform:none;font-size:14px;line-height:60px;color:#353535;font-weight:600;letter-spacing:.4px}section.resultados-de-busca .links fieldset.order .select-block .custom-select .active-list:before{content:'';width:2px;height:100%;position:absolute;background:#f2f4f7;right:20%}section.resultados-de-busca .links fieldset.order .select-block .custom-select label{position:absolute;left:0;top:32px;height:20px;width:100%;margin:0;font-weight:500;z-index:1;color:#939393;font-size:12px;line-height:10px;white-space:nowrap;overflow:hidden}section.resultados-de-busca .top-content{display:block;width:100%;position:relative}section.resultados-de-busca .top-content .box-snippet-ct{float:right;width:33.5%;display:block;top:0;overflow-y:scroll;height:calc(100% + 64px);background:#fff;border:solid 1px #ddd;margin-left:.3%;position:absolute;right:0;overflow-x:hidden}section.resultados-de-busca .top-content .box-snippet-ct h2{font-weight:400;color:#252525;line-height:15px;width:100%;float:left;display:block;margin:0;font-size:14px;position:relative;padding:1em;text-align:center;text-rendering:optimizeLegibility}section.resultados-de-busca .top-content .box-snippet-ct table.box-snippet{display:block;float:left;width:100%}section.resultados-de-busca .top-content .box-snippet-ct tbody{display:block;float:left;width:100%}section.resultados-de-busca .top-content .box-snippet-ct tbody tr{display:block;width:100%;float:left;border-bottom:solid 1px rgba(0,0,0,.07)}section.resultados-de-busca .top-content .box-snippet-ct tbody tr.ttl{background:#efefef;display:block;width:100%;border-bottom:none;border-right:solid 1px #ddd}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th{display:block;float:left;padding:10px 10px;text-transform:uppercase;font-size:12px;font-weight:600;letter-spacing:.4px;color:#025aa6}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th:first-child{width:42%;text-align:left}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th:nth-child(2){width:29%;text-align:left;background:rgba(0,0,0,.03)}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th:last-child{width:29%;text-align:right}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td{display:block;float:left;padding:10px 10px;font-size:12px;color:#505050;text-rendering:optimizeLegibility;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;border-right:solid 1px rgba(221,221,221,.3)}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td:first-child{width:42%;text-align:left}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td:nth-child(2){width:29%;text-align:left}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td:last-child{width:29%;text-align:right;border-right:none}section.resultados-de-busca .top-content .main-text{order:1;position:relative;width:66%;padding:1em 2em;background:#fff;display:inline-block;padding-bottom:63px;background:#fff}section.resultados-de-busca .top-content .main-text>span{font-size:36px;font-weight:600;margin-bottom:0;margin-right:12px;float:left;text-align:center}section.resultados-de-busca .top-content .main-text p{color:#565656;font-size:14px;font-weight:400;line-height:18px;padding:1em 0;text-overflow:ellipsis;overflow:hidden;-webkit-line-clamp:3;display:block}section.resultados-de-busca .top-content .main-text p a{display:inline-block;color:#303f9f;text-decoration:underline}section.resultados-de-busca .top-content .main-text h1{padding-bottom:.6em;width:auto;display:block;margin-right:3%}div.bookmark:hover{border:solid 1px #303f9f;color:#303f9f}div.bookmark i{margin-right:5px;font-weight:600}section.resultados-de-busca .top-content .main-text h1 #h1_tit_pag{font-size:31px;font-weight:400;line-height:36px;text-align:left}section.resultados-de-busca .lista_bairros_cidades{display:block;float:left;width:77%;margin-top:0}section.resultados-de-busca .lista_bairros_cidades.customer{display:none}section.resultados-de-busca .view{position:relative;height:auto;z-index:999;width:100%;margin-bottom:1em;display:block;float:left}section.resultados-de-busca .card__list>li{display:block;float:left;width:100%;position:relative;background:#fff;margin-top:.5em;overflow:hidden;margin-bottom:1em;min-height:250px;position:relative;border-radius:4px;margin-bottom:5px;border:solid 1px #ddd}section.resultados-de-busca .card__list>li.imob{background:0 0;border:none;min-height:auto;position:relative;margin:1rem 0;display:flex;flex-flow:row wrap;width:100%}section.resultados-de-busca .card__list>li.imob h2{z-index:9999;padding-bottom:9px;font-size:16px;color:#353535;display:block;width:100%;font-weight:600;overflow:hidden;float:left;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility;line-height:23px;margin-top:1rem;border-bottom:solid 1px #ddd;margin-bottom:12px}section.resultados-de-busca .card__list>li.imob span.imob{display:flex;flex-flow:row wrap;width:100%;margin-bottom:1rem;position:relative;padding:0 72px;padding-left:0}section.resultados-de-busca .card__list>li.imob span.imob #loadImobnext{position:absolute;width:42px;right:0;display:flex;align-items:center;justify-content:center;height:42px;z-index:99999;top:-59px;background:#fff;border-radius:6px}section.resultados-de-busca .card__list>li.imob span.imob #loadImobnext i{font-weight:600}section.resultados-de-busca .card__list>li.imob span.imob #loadImobprev{position:absolute;width:42px;right:48px;display:flex;align-items:center;justify-content:center;height:42px;z-index:99999;top:-59px;background:#fff;border-radius:6px;transform:rotate(180deg);display:none}section.resultados-de-busca .card__list>li.imob span.imob #loadImobprev i{font-weight:600}section.resultados-de-busca .card__list>li.imob span.imob ul{display:flex;flex-flow:row;padding-bottom:1rem;transform:translateX(0)}section.resultados-de-busca .card__list>li.imob span.imob ul li{width:70px;display:flex;align-items:center;justify-content:center;height:70px;border-radius:100%;overflow:hidden;box-sizing:border-box;margin-right:.55vw;min-width:70px;background:#fff;box-shadow:0 3px 10px #ddd}section.resultados-de-busca .card__list>li.imob span.imob ul li a{width:100%;box-sizing:border-box;height:100%;display:flex;align-items:center;justify-content:center;padding:7px}section.resultados-de-busca .card__list>li.imob span.imob ul li a img{width:100%;height:100%;object-fit:contain}section.resultados-de-busca .card__list>li.sc{padding:1em;border:none;min-height:inherit;background:0 0;padding:0;margin:15px 0;margin:15px 0}section.resultados-de-busca .card__list>li.sc>h2{font-size:16px;font-weight:400;color:#717171;display:none;float:left;width:100%;letter-spacing:.2px}section.resultados-de-busca .card__list>li.sc .lv-2{display:-webkit-inline-box;display:-webkit-box;float:left;width:100%;margin-top:1em;flex-flow:row;min-height:180px;height:155px}section.resultados-de-busca .card__list>li.sc .lv-2.slick-slider{min-height:180px;height:180px}section.resultados-de-busca .card__list>li.sc .lv-2 ._item{display:block;float:left;height:170px;width:200px;max-width:360px;background:#fff;padding:0;margin-right:10px;position:relative;overflow:hidden;border-radius:6px;border:solid 1px #ddd;box-shadow:0 5px 11px -10px #3f51b5}section.resultados-de-busca .card__list>li.sc .lv-2 ._item:hover a span:before{opacity:.8}section.resultados-de-busca .card__list>li.sc .lv-2 ._item.slick-slide{height:170px}section.resultados-de-busca .card__list>li.sc .lv-2 ._item.slick-slide:focus{outline:0}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a{display:block;float:left;z-index:9;position:relative;text-decoration:none;width:100%;height:155px}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a:focus{outline:0}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a span.img{display:block;float:left;width:100%;position:relative;left:0;height:100px;top:0;background:#000}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a span.img img{position:absolute;top:0;width:100%;height:100%;background-blend-mode:multiply;object-fit:cover;left:0;opacity:1}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a h3{font-size:17px;font-weight:600;color:#353536;display:block;float:right;min-height:64px;width:100%;line-height:16px;-webkit-perspective:1000;z-index:9;position:relative;text-align:left;padding:0 15px;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a h3 b{text-transform:uppercase;display:block;width:100%;font-size:13px;letter-spacing:.2px;font-weight:600}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a h3 small{font-size:13px;font-weight:600;width:100%;display:block;color:#717171}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a p{display:block;float:right;width:65%;font-size:14px;line-height:17px;color:#717171;padding:0 4px;padding-bottom:10px}section.resultados-de-busca .card__list>li.sc .lv-2 button{position:absolute;display:block;z-index:9;height:150px;border:none;background:0 0;color:#fff;outline:0;cursor:pointer;width:49px}section.resultados-de-busca .card__list>li.sc .lv-2 button:focus{outline:0}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-prev{left:-2%;top:0;transform:rotate(180deg)}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-prev.slick-disabled:before{display:none}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-prev:before{content:'\e912';font-family:icomoon;font-size:12px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-next{right:-16px;top:0}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-next.slick-disabled:before{display:none}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-next:before{content:'\e912';font-family:Icomoon;font-size:12px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}section.resultados-de-busca .card__list>li.sc.full{border:none;min-height:inherit;padding:0;margin:15px 0;background:#fff;overflow:hidden;border-radius:6px}section.resultados-de-busca .card__list>li.sc.full .in a img.right{position:absolute;top:0;right:0;width:50%;height:100%;object-fit:cover;object-position:50% 50%}section.resultados-de-busca .card__list>li.sc.full .in a span.box{display:block;position:absolute;bottom:8px;z-index:9;width:49%;right:10px;background:#fff;padding:2em;border-radius:6px}section.resultados-de-busca .card__list>li.sc.full .in a span.box.left{right:inherit;left:10px}section.resultados-de-busca .card__list>li.sc.full .in a span.box h2{display:block;float:left;font-size:19px;font-weight:600;color:#353535}section.resultados-de-busca .card__list>li.sc.full .in a span.box p{display:block;font-size:14px;color:#717171;margin-top:7px;margin-bottom:1em;float:left;line-height:17px}section.resultados-de-busca .card__list>li.sc.full .in a span.box .cta{background:#ff7427;color:#fff;padding:12px;width:50%;text-align:center;border-radius:5px;box-shadow:0 2px #de5f19;float:right;font-size:14px;font-weight:600}section.resultados-de-busca .card__list>li span.gal-icon{position:absolute;z-index:9;right:10px;top:9px;padding:1px 4px;border-radius:4px;background:rgba(255,255,255,.9);text-align:center}}@media screen and (min-width:1024px) and (max-width:4920px) and (max-width:1160px) and (min-width:1023px){section.resultados-de-busca .card__list>li span.gal-icon{right:10px;width:50px}}@media screen and (min-width:1024px) and (max-width:4920px){section.resultados-de-busca .card__list>li span.gal-icon i{display:block;font-size:18px;color:#717171;float:left}section.resultados-de-busca .card__list>li span.gal-icon small{font-size:12px;position:relative;padding:4px;font-family:lato;float:left;color:#717171;display:block;font-weight:600}section.resultados-de-busca .card__list>li .labelSobreImagem .visto{display:none}section.resultados-de-busca .card__list>li.seen{box-shadow:8px 10px 9px -13px #000}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto{display:block;position:absolute;width:auto;height:23px;background:rgba(0,0,0,.74);z-index:999;bottom:8px;text-transform:uppercase;font-weight:600;font-size:10px;color:#fff;line-height:20px;padding:1px 11px;padding-left:2px;left:8px;letter-spacing:.3px;text-align:center;border-radius:6px}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto.w-label{left:8px}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto.w-label-g{left:8px}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto i{display:block;position:relative;color:#fff;font-size:12px;border-radius:23px;padding:5px;float:left;line-height:12px;margin-right:3px}section.resultados-de-busca .card__list>li.seen .baseGaleria .galeria-n .overlay-g{opacity:.8;height:100%;display:block;background:rgba(117,117,117,.72);border-radius:0}section.resultados-de-busca .card__list>li.seen a h2 span.endereco{color:#8e8e8e}section.resultados-de-busca .card__list>li.seen a h2 span.ttl{color:#717171}section.resultados-de-busca .card__list>li:hover a h2 span.ttl{color:#ff7427}section.resultados-de-busca .card__list>li:hover a h2 span.endereco{color:#353535}section.resultados-de-busca .card__list>li:hover .card__info a.details{background:#303f9f;border:solid 1px #303f9f;color:#fff;box-shadow:0 2px #262f5f}section.resultados-de-busca .card__list>li:hover .modal-msg-bt{background:#ff7427;border:solid 1px #ff7427;color:#fff;box-shadow:0 2px #da5f1c}section.resultados-de-busca .card__list>li:first-child{margin-top:0}section.resultados-de-busca .card__list>li .baseGaleria{display:block;float:left;width:360px;cursor:pointer;position:absolute;height:250px;transform:translateX(0);-ms-transform:translateX(0);-webkit-transform:translateX(0)}section.resultados-de-busca .card__list>li .baseGaleria span.lancamento{display:block;position:absolute;width:auto;z-index:2;background:#5116c5;border:solid 2px #5116c5;border-radius:29px;top:3%;left:2%;text-transform:uppercase;font-size:11px;font-weight:600;line-height:10px;color:#fff;padding:4px 15px;overflow:hidden;box-shadow:0 10px 10px -10px rgba(0,0,0,.29)}section.resultados-de-busca .card__list>li .baseGaleria span.lancamento:after{content:'Lançamento'}section.resultados-de-busca .card__list>li .baseGaleria{cursor:pointer}section.resultados-de-busca .card__list>li .baseGaleria span.destaque{display:block;position:absolute;width:auto;z-index:2;background:#c72b2b;border:solid 2px rgba(206,51,51,.64);border-radius:29px;top:3%;left:2%;text-transform:uppercase;font-size:11px;font-weight:600;line-height:10px;color:#fff;padding:4px 15px;overflow:hidden;box-shadow:0 10px 10px -10px rgba(0,0,0,.29)}section.resultados-de-busca .card__list>li .baseGaleria span.destaque:after{content:'Destaque'}section.resultados-de-busca .card__list>li .baseGaleria span.destaque:before{content:'\e92c';font-family:Icomoon;margin-right:6px;opacity:.6}section.resultados-de-busca .card__list>li .baseGaleria span.direto{display:block;position:absolute;width:auto;z-index:2;background:#2e7d32;border:solid 2px #2e7d32;border-radius:29px;text-transform:uppercase;font-size:11px;font-weight:600;line-height:10px;color:#fff;padding:4px 15px;overflow:hidden;left:6px;top:inherit;bottom:10px}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n{overflow:hidden;width:360px;display:block;float:left;height:250px;position:relative}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n .overlay-g{border-radius:8px 8px 0 0;background:rgba(255,255,255,0);background:-moz-linear-gradient(top,rgba(255,255,255,0) 0,rgba(0,0,0,.7) 100%);background:-webkit-linear-gradient(top,rgba(255,255,255,0) 0,rgba(0,0,0,.7) 100%);background:linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(0,0,0,.7) 100%);width:100%;position:absolute;z-index:1;height:100%;top:0;opacity:1;display:none}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a{position:relative;height:250px;width:360px}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a source{object-position:50% 50%}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a img.image.image--center{object-position:50% 50%;width:100%}section.resultados-de-busca .card__list>li:first-child{margin-top:0}section.resultados-de-busca .card__list>li .modalSolicitar{width:0%;padding:1em;top:0!important;float:left;height:0%;visibility:hidden;opacity:0;position:absolute;background:#efefef;transform:scale(0)}section.resultados-de-busca .card__item{width:calc(100% - 370px);float:right;display:block;position:relative;transform:translateX(0);-ms-transform:translateX(0);-webkit-transform:translateX(0)}section.resultados-de-busca .card__item>a{display:block;width:100%;padding:1em;min-height:180px;padding-bottom:0;text-decoration:none;padding-top:15px}section.resultados-de-busca .card__item>a ul.list-info{display:flex;float:left;width:100%}section.resultados-de-busca .card__item>a ul.list-info li{width:14%;padding:10px 5px;border:solid 1px rgba(221,221,221,.42);border-right:none;height:54px;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}section.resultados-de-busca .card__item>a ul.list-info li:first-child{width:auto;border:none;min-width:195px;padding:0;height:auto;min-height:61px}section.resultados-de-busca .card__item>a ul.list-info li:last-child{border-right:solid 1px rgba(221,221,221,.42)}section.resultados-de-busca .card__item>a ul.list-info li.area{width:18%}section.resultados-de-busca .card__item>a ul.list-info li.suite{width:11%}section.resultados-de-busca .card__item>a ul.list-info li span.condominio{font-weight:400;color:#717171;font-size:13px;line-height:16px;margin-left:1px;width:100%;display:block;margin-top:2px;text-align:left;padding-right:0}section.resultados-de-busca .card__item>a ul.list-info li span.condominio b{font-weight:800}section.resultados-de-busca .card__item>a ul.list-info li span.value{font-weight:400;color:#303f9f;font-size:20px;line-height:22px;text-align:left;width:100%;display:block}section.resultados-de-busca .card__item>a ul.list-info li span.value small{display:block;font-size:14px;color:#353535;opacity:.7;text-align:left}section.resultados-de-busca .card__item>a ul.list-info li span.value b{font-weight:800}section.resultados-de-busca .card__item>a ul.list-info li span.type{display:block;width:100%;text-align:center;text-transform:uppercase;font-size:10px;font-weight:600;color:#717171;overflow:hidden;float:left;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility}section.resultados-de-busca .card__item>a ul.list-info li span.val{display:block;width:100%;text-align:center;font-size:13px;font-weight:600;line-height:18px;color:#333;margin-top:5px;overflow:hidden;float:left;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility}section.resultados-de-busca .card__item>a h2{display:block;width:100%;float:left;margin:1.5em 0;margin-top:.6em;margin-bottom:.5em}section.resultados-de-busca .card__item>a h2 span.ttl{font-size:16px;color:#353535;display:block;width:100%;font-weight:600;overflow:hidden;float:left;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility;line-height:23px}section.resultados-de-busca .card__item>a h2 span.ttl span.tag.lancamento{top:-3px;border:solid 1px #5021c5;font-size:11px;text-transform:uppercase;padding:3px 11px;border-radius:21px;color:#5021c5;position:relative;margin-left:7px}section.resultados-de-busca .card__item>a h2 span.ttl i{display:none}section.resultados-de-busca .card__item>a h2 span.endereco{display:block;float:left;width:100%;line-height:18px;color:#717171;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility}section.resultados-de-busca .card__item>a h2 span.endereco i{color:#ff7427;margin-right:11px}section.resultados-de-busca .card__item>a h2 span.endereco .item-title{text-transform:capitalize;font-size:15px;font-weight:400;border-right:solid .5px #ddd;margin-right:1em;padding-right:1em}section.resultados-de-busca .card__item>a p{line-height:19px;padding:0 1.5em;height:41px;overflow:hidden;text-overflow:ellipsis;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;color:#757575;font-size:14px;width:98%;margin-left:0;padding-left:0;-webkit-touch-callout:none;-webkit-text-size-adjust:100%;-webkit-font-smoothing:antialiased}section.resultados-de-busca .card__info{display:block;float:left;width:100%;padding-bottom:0;padding-right:1.2em;padding-top:14px}section.resultados-de-busca .card__info span.logo-owner{width:15%;margin-right:2%;display:block;margin-left:2%;position:relative;top:3px;left:0;text-align:center}section.resultados-de-busca .card__info span.logo-owner img{top:2px;position:relative}section.resultados-de-busca .card__info span.logo-owner img.lazyload{opacity:0;transition:opacity .2s ease-in}section.resultados-de-busca .card__info span.logo-owner img.fade{opacity:1;transition:opacity .2s ease-in}section.resultados-de-busca .card__info span.logo-owner span.proprietario{background:#f3f3f3;width:100%;display:block;float:left;padding:16px 0;color:#717171;font-size:11px;font-weight:600;max-width:85%;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}section.resultados-de-busca .card__info span.logo-owner span.proprietario i{color:#a2a1a1;margin-right:5px}section.resultados-de-busca .card__info span.logo-owner img{display:block;float:left;height:auto;font-size:10px}section.resultados-de-busca .card__info span.logo-owner img.lazyload{opacity:0;transition:opacity .2s ease-in}section.resultados-de-busca .card__info span.logo-owner img.fade{opacity:1;transition:opacity .2s ease-in}section.resultados-de-busca .card__info a.details{display:block;float:right;padding:1em 1.5em;border:solid 1px #ddd;border-radius:6px;text-transform:uppercase;text-decoration:none;color:#303f9f;line-height:14px;font-size:12px;font-weight:600;border:solid 1px}}@media screen and (min-width:1024px) and (max-width:4920px) and (min-width:1024px) and (max-width:1440px){section.resultados-de-busca .card__info a.details{padding:1em .5em}}@media screen and (min-width:1024px) and (max-width:4920px) and (min-width:1024px){section.resultados-de-busca .card__info a.details:hover{background:#ff7427;border:solid 1px #ff7427;color:#fff;box-shadow:0 2px #da5f1c}}@media screen and (min-width:1024px) and (max-width:4920px){section.resultados-de-busca .card__info a.details i{margin-right:5px}section.resultados-de-busca .card__info a.call-now{display:none}section.resultados-de-busca .card__info a.cta{display:block;float:right;padding:1em 2em;border-radius:6px;text-transform:uppercase;text-decoration:none;color:#303f9f;font-size:13px;font-weight:600;margin-right:1em}section.resultados-de-busca .filters-out{display:block;float:left;width:100%;position:relative;padding-top:.5em;padding-bottom:1em;overflow:hidden}section.resultados-de-busca .filters-out:after{font-family:Icomoon;font-size:2.4em;color:rgba(8,8,8,.16);position:absolute;bottom:0;left:0}section.resultados-de-busca .filters-out p{color:#353535;font-weight:600;text-transform:uppercase;font-size:12px;margin-bottom:1em;padding-left:1em;display:block;width:auto;float:left;margin-right:1em}section.resultados-de-busca .filters-out span{background:#303f9f;padding:5px 15px;padding-right:25px;color:#fff;font-size:12px;position:relative;z-index:9;font-weight:600;border-radius:23px;margin-top:-5px;display:flex;margin-bottom:6px;float:left;cursor:pointer;margin-left:2px}section.resultados-de-busca .filters-out span:hover{background:#ff7427}section.resultados-de-busca .filters-out span:after{content:"\e921";color:rgba(255,255,255,.37);font-family:Icomoon;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;right:10px;top:6px;font-size:10px;font-weight:100}.forms-anuncio{display:block;width:60%;position:absolute;top:0;transform:translateX(-120%);-ms-transform:translateX(-120%);-webkit-transform:translateX(-120%)}.forms-anuncio .modal{width:100%;text-align:center;top:0!important;z-index:-1;height:300px;min-height:0;position:absolute;display:block;background:#fff}.forms-anuncio .modal .spinner{width:70px;text-align:center;position:absolute;top:44%;left:39%}.spinner{width:70px;text-align:center;position:fixed;top:47%;left:50%}.spinner>div{width:18px;height:18px;background-color:#303f9f;border-radius:100%;display:inline-block;-webkit-animation:sk-bouncedelay 1.4s infinite ease-in-out both;animation:sk-bouncedelay 1.4s infinite ease-in-out both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@keyframes sk-bouncedelay{0%,100%,80%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}aside{display:block;float:left;width:25.5%;position:relative}aside .filter-mobile{display:none}.modal{width:100%;text-align:center;top:0!important;display:none;z-index:9999;height:100%;left:0;position:fixed;background:rgba(255,255,255,.85)}.modal>span{width:100%;height:100%;padding-top:8px;left:0;top:0;opacity:1;transition:opacity .2s ease-in;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.modal>span i{font-size:40px;color:#303f9f;position:absolute;-webkit-text-stroke:.1px}.modal>span #load{width:80px;animation:loading 1s linear infinite}.modal>span #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:10;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#717171;fill:transparent}@keyframes loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes loading-circle{0%{stroke-dashoffset:0}100%{stroke-dashoffset:-600}}#modalRetornoOperacoes{display:none}#modal-ver-telefone{display:none}section.resultados-de-busca .card__item>a ul.list-info li span.a-troca{padding-left:1.7em;text-align:left;padding-right:0}section.resultados-de-busca.sem-snippet .links ul{width:45%}}@media screen and (min-width:1024px) and (max-width:4920px) and (max-width:1360px) and (min-width:1024px){section.resultados-de-busca.sem-snippet .links ul{width:60%}}@media screen and (min-width:1024px) and (max-width:4920px){.descricaoBusca{display:block;width:100%;float:left;padding-top:.6em;height:74px;padding-bottom:1em;overflow:hidden;font-size:14px;position:relative;line-height:18px;color:#717171;position:relative;text-overflow:ellipsis;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}.descricaoBusca .youtube{display:none}.descricaoBusca .btns-text{display:block;position:absolute;bottom:-2px;width:auto;right:0;padding-left:2em}.descricaoBusca .btns-text .read-more{font-size:12px;bottom:0;right:0;position:relative;padding:0 0;background:#fff;font-weight:500;color:#303f9f;border:none;text-decoration:underline;cursor:pointer;letter-spacing:0;font-family:Lato;outline:0;-webkit-text-stroke:.2px}.descricaoBusca .btns-text .read-more:hover{border:solid 1px #303f9f;color:#303f9f}.descricaoBusca .btns-text .read-more:focus{outline:0}.descricaoBusca .btns-text .btn-snippet{font-size:12px;top:-7px;position:relative;padding:9px 23px;background:#fff;font-weight:500;border:solid 1px #ddd;color:#717171;cursor:pointer;letter-spacing:0;font-family:Lato;outline:0}.descricaoBusca h2{font-size:16px;font-weight:600;clear:both;color:#353535}.descricaoBusca h3{font-weight:600;color:#353535}.descricaoBusca img{display:none}}@media screen and (min-width:1024px) and (max-width:1329px){section.resultados-de-busca .card__item>a ul.list-info li:first-child{min-width:186px}}@media screen and (min-width:1101px) and (max-width:1439px){section.resultados-de-busca .card__item>a ul.list-info li span.condominio{font-size:12px;padding-right:1.1em}}@media screen and (min-width:1024px) and (max-width:1439px){section.resultados-de-busca .card__item>a ul.list-info li span.value{font-size:16px;padding-right:.7em}}@media screen and (min-width:1023px) and (max-width:1439px){section.resultados-de-busca .card__item>a ul.list-info li span.type{font-size:10px}section.resultados-de-busca .card__item>a ul.list-info li span.val{font-size:12px}section.resultados-de-busca .card__item>a h2 span.endereco .item-title{font-size:14px}section.resultados-de-busca .card__item>a h2 span.endereco .cidade{font-size:14px}section.resultados-de-busca .links fieldset.order .select-block .custom-select .active-list{padding-left:1em;font-size:12px}section.resultados-de-busca .links ul li a{font-size:12px}.filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile-label{font-size:14px}section.resultados-de-busca .card__list>li .baseGaleria{width:360px}.filters-form form fieldset.radio-buttons .radio-tile-group .input-container{height:45px;width:45px}}section.resultados-de-busca .card__item>a ul.list-info li span.a-troca{font-weight:400;color:#989898;font-size:13px;border-left:solid 2px #ddd;padding-left:1.7em;line-height:16px;margin-left:1px;width:100%;display:block;margin-top:2px;text-align:left}@media screen and (min-width:1023px) and (max-width:1260px){section.resultados-de-busca .card__list>li .baseGaleria{width:260px}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n{width:100%}aside .filter-anchor-deskt{width:26.4%}section.resultados-de-busca .card__item>a{padding:1em}section.resultados-de-busca .card__item>a ul.list-info li:first-child{min-width:145px}section.resultados-de-busca .card__item>a ul.list-info li span.value{font-size:16px}section.resultados-de-busca .card__item>a ul.list-info li span.condominio{font-size:12px}section.resultados-de-busca .card__item{width:calc(100% - 260px)}.filters-form form fieldset.radio-buttons .radio-tile-group i{display:none}section.resultados-de-busca .card__info{padding-top:0}.filters-form form fieldset.range-selector .range-slider .label-results span small{top:56%;font-size:14px}.ofertas{display:none}section.resultados-de-busca .top-content .main-text{width:100%}section.resultados-de-busca .top-content .box-snippet-ct{position:relative;width:100%;margin-top:5px;height:129px}section.resultados-de-busca .links{display:block;width:100%;margin-top:.2em;float:left;margin-bottom:15px}}html[data-useragent*='MSIE 10.0'] img{outline:0;border:none}html[data-useragent*='MSIE 10.0'] section.resultados-de-busca .card__item>a ul.list-info{display:block;float:left;width:100%}html[data-useragent*='MSIE 10.0'] section.resultados-de-busca .card__item>a ul.list-info li{display:block;float:left;width:13%}html[data-useragent*='MSIE 10.0'] section.resultados-de-busca .filters-out:after{display:none}html[data-useragent*='MSIE 10.0'] .filters-form form fieldset.radio-buttons .radio-tile-group{display:block;float:left;width:100%}html[data-useragent*='MSIE 10.0'] .filters-form form fieldset.radio-buttons .radio-tile-group .input-container{display:block;float:left;height:45px;width:45px}html[data-useragent*='MSIE 10.0'] .filters-form form fieldset.select .select-block .active-list:after{top:0}a,aside,b,body,div,fieldset,form,h1,h2,h3,header,html,i,iframe,img,label,li,nav,p,section,small,span,strong,table,tbody,td,th,tr,ul{margin:0;padding:0;border:0;font-size:100%;font:unset;vertical-align:baseline}aside,header,nav,section{display:block}body{line-height:1}ul{list-style:none}table{border-collapse:collapse;border-spacing:0}*,::after,::before{box-sizing:inherit}@media screen and (min-width:319px) and (max-width:1023px){.mobtop{display:block}.publicidade{display:none!important}.publicidade{display:none}.wrapper{max-width:64em;margin-left:auto;margin-right:auto;max-width:96%}.descricaoBusca .btns-text{padding-left:1em!important}.descricaoBusca .btns-text .read-more{top:0!important}.descricaoBusca p{color:#565656;font-size:14px;font-weight:400;line-height:18px;padding-top:1em;display:inline-block}.descricaoBusca.open p:first-child{color:#565656;font-size:14px;font-weight:400;line-height:18px;padding-top:1em;text-overflow:inherit;overflow:inherit;display:inline-block;-webkit-line-clamp:inherit;-webkit-box-orient:initial}.wrapper.large-content{max-width:100%!important;width:100%!important}.wrapper::after{clear:both;content:"";display:table}section.breadcrumb{display:none}section.resultados-de-busca{width:100%;display:block;float:left;position:relative;margin-top:5px;overflow-y:scroll;-webkit-overflow-scrolling:touch}section.resultados-de-busca .links{display:block;width:100%;margin-top:5px;float:left}section.resultados-de-busca .links ul.veiculos li{border-top:solid 1px #ddd;border-right:solid .5px #ddd;width:50%;border:none}section.resultados-de-busca .links ul.veiculos li a{padding:16px 0!important}section.resultados-de-busca .links fieldset.order{width:31%;border:none;display:none;float:right;text-align:right;border-bottom:none;border-right:none;max-width:390px;padding:0}section.resultados-de-busca .links fieldset.order label{display:block;float:left;width:36%;margin:0;padding:14px 7px;text-transform:uppercase;color:#717171;font-size:12px;font-weight:600;text-align:center}section.resultados-de-busca .links fieldset.order .select-block{background-color:#fff;width:100%;height:60px;border:solid 1px #f2f4f7;float:right;position:relative}section.resultados-de-busca .links fieldset.order .select-block .active-list:before{content:'';width:1px;height:100%;position:absolute;right:23%}section.resultados-de-busca .links fieldset.order .select-block .active-list:after{content:"\e925";font-family:Icomoon;position:absolute;right:0;top:0;width:20%;padding-left:0;text-align:center;height:60px;line-height:60px;color:#939393;font-size:18px;margin-top:0;color:#303f9f}section.resultados-de-busca .links fieldset.order .select-block .custom-select{display:inline-block;position:relative;padding:0;width:100%;line-height:52px}section.resultados-de-busca .links fieldset.order .select-block .custom-select:before{content:'';position:absolute;left:50%;width:0;bottom:0;height:2px;background-color:#ff7427}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list{width:100%;height:auto;max-height:450px;overflow-x:auto;z-index:9999;padding:0;margin:0;position:absolute;top:100%;left:0;background-color:#fff;border:solid 1px #ddd;display:none;box-shadow:rgba(0,0,0,.36) 0 6px 12px -13px,rgba(0,0,0,.15) 0 1px 4px}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list li{padding:12px 1em;text-align:left;border:none;border-bottom:solid 1px #ddd;line-height:normal;background-color:#f7f7f7;color:#353535;font-weight:600;letter-spacing:.4px;padding-left:2em;font-size:13px;width:100%}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list li.all{background:#fff}section.resultados-de-busca .links fieldset.order .select-block .custom-select .drop-down-list label{display:block;float:left;text-align:left;padding-left:1em;position:relative;background:#353535;color:#fff;top:0;z-index:99;line-height:2px;font-size:12px;width:100%;font-weight:600;left:0}section.resultados-de-busca .links fieldset.order .select-block .custom-select .list-field{width:100%;height:54px;padding:0 15px;position:absolute;top:0;left:0;display:none}section.resultados-de-busca .links fieldset.order .select-block .custom-select .active-list{width:100%;height:58px;color:#353535;position:relative;z-index:2;white-space:nowrap;overflow:hidden;box-sizing:border-box;text-align:left;padding-left:1.5em;text-transform:none;font-size:14px;line-height:60px;color:#353535;font-weight:600;letter-spacing:.4px}section.resultados-de-busca .links fieldset.order .select-block .custom-select .active-list:before{content:'';width:1px;height:100%;position:absolute;background:#ddd;right:20%}section.resultados-de-busca .links fieldset.order .select-block .custom-select label{position:absolute;left:0;top:32px;height:20px;width:100%;margin:0;font-weight:500;z-index:1;color:#939393;font-size:12px;line-height:10px;white-space:nowrap;overflow:hidden}section.resultados-de-busca .top-content{display:block;width:100%;position:relative;padding:0 .5em}section.resultados-de-busca .top-content .box-snippet-ct{display:none}section.resultados-de-busca .top-content .box-snippet-ct h2{font-weight:400;color:#252525;line-height:15px;width:100%;float:left;display:block;margin:0;font-size:14px;position:relative;padding:1em;text-align:center;text-rendering:optimizeLegibility}section.resultados-de-busca .top-content .box-snippet-ct table.box-snippet{display:block;float:left;width:100%}section.resultados-de-busca .top-content .box-snippet-ct tbody{display:block;float:left;width:100%}section.resultados-de-busca .top-content .box-snippet-ct tbody tr{display:block;width:100%;float:left;border-bottom:solid 1px rgba(0,0,0,.07)}section.resultados-de-busca .top-content .box-snippet-ct tbody tr.ttl{background:#efefef;display:block;width:100%;border-bottom:none;border-right:solid 1px #ddd}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th{display:block;float:left;padding:10px 10px;text-transform:uppercase;font-size:12px;font-weight:600;letter-spacing:.4px;color:#025aa6}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th:first-child{width:42%;text-align:left}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th:nth-child(2){width:29%;text-align:left;background:rgba(0,0,0,.03)}section.resultados-de-busca .top-content .box-snippet-ct tbody tr th:last-child{width:29%;text-align:right}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td{display:block;float:left;padding:10px 10px;font-size:12px;color:#505050;text-rendering:optimizeLegibility;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;border-right:solid 1px rgba(221,221,221,.3)}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td:first-child{width:42%;text-align:left}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td:nth-child(2){width:29%;text-align:left}section.resultados-de-busca .top-content .box-snippet-ct tbody tr td:last-child{width:29%;text-align:right;border-right:none}section.resultados-de-busca .top-content .main-text{width:100%;padding:1em 1em;background:#fff;border-top:solid .5px #ddd;border-bottom:solid .5px #ddd;display:inline-block;padding-bottom:60px}section.resultados-de-busca .top-content .main-text>span{font-size:19px;font-weight:800;margin-bottom:0;margin-right:5px;float:left;text-align:center;line-height:23px}section.resultados-de-busca .top-content .main-text>p{color:#565656;font-size:14px;font-weight:400;line-height:18px;padding-top:1em;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis;max-height:71px}section.resultados-de-busca .top-content .main-text p a.read-more{font-size:11px;color:#303f9f;display:block;position:absolute;left:1.6em;bottom:1em;cursor:pointer}section.resultados-de-busca .top-content .main-text h1 #h1_tit_pag{font-size:19px;font-weight:400;line-height:23px;text-align:left;float:none}section.resultados-de-busca .lista_bairros_cidades{display:block;float:left;width:100%;margin-top:.2em}section.resultados-de-busca .lista_bairros_cidades.customer{display:none}section.resultados-de-busca .filters-out{display:block;float:left;width:100%;position:relative;padding:.5em;overflow:hidden}section.resultados-de-busca .filters-out:after{font-family:Icomoon;font-size:2.4em;color:rgba(8,8,8,.16);position:absolute;bottom:0;left:0;overflow:hidden}section.resultados-de-busca .filters-out p{color:#303f9f;font-weight:600;text-transform:uppercase;font-size:12px;margin-bottom:1em;padding-left:1em;display:block;width:100%;float:left;margin-right:1em}section.resultados-de-busca .filters-out span{background:#303f9f;padding:5px 15px;padding-right:25px;color:#fff;font-size:12px;position:relative;z-index:9;font-weight:600;border-radius:23px;margin-top:-5px;display:flex;margin-bottom:7px;float:left;margin-left:5px}section.resultados-de-busca .filters-out span:after{content:"\e921";color:rgba(255,255,255,.37);font-family:Icomoon;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;right:10px;top:6px;font-size:10px;font-weight:100}section.resultados-de-busca .view{position:relative;height:auto;z-index:999;width:100%;margin-bottom:1em}section.resultados-de-busca .card__list{padding:.75rem;padding:.1rem;width:100%;margin:auto;display:block;float:left;position:relative}section.resultados-de-busca .card__list>li{display:block;width:100%;position:relative;background:#fff;box-sizing:border-box;border-radius:6px;box-shadow:0 2px 22px -2px rgba(0,0,0,.31);margin-top:.5em;overflow:hidden;margin-bottom:1em;transform:scale(1);min-height:250px;margin:auto;max-width:345px;margin-bottom:1em;border:solid 1px rgba(0,0,0,.18)}section.resultados-de-busca .card__list>li.imob{background:0 0;border:none;min-height:auto;position:relative;display:flex;flex-flow:row wrap;width:100%;margin:0;max-width:100%;padding:1rem;box-shadow:none}section.resultados-de-busca .card__list>li.imob h2{z-index:9999;padding-bottom:9px;color:#353535;display:block;width:100%;text-align:center;font-weight:600;overflow:hidden;float:left;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility;line-height:23px;margin-top:1rem;border-bottom:solid 1px #ddd;margin-bottom:12px;padding-left:52px;font-size:13px;max-width:100%;padding-right:52px}section.resultados-de-busca .card__list>li.imob span.imob{display:flex;flex-flow:row wrap;width:100%;margin-bottom:1rem;position:relative;padding:0 72px;padding-left:0}section.resultados-de-busca .card__list>li.imob span.imob #loadImobnext{position:absolute;width:42px;right:0;display:flex;align-items:center;justify-content:center;height:38px;z-index:9;top:-56px;background:#fff;z-index:9999;border-radius:4px}section.resultados-de-busca .card__list>li.imob span.imob #loadImobnext i{font-weight:600}section.resultados-de-busca .card__list>li.imob span.imob #loadImobprev{position:absolute;width:42px;left:0;display:flex;align-items:center;justify-content:center;height:38px;z-index:9;top:-56px;background:#fff;z-index:9999;border-radius:4px;transform:rotate(180deg)}section.resultados-de-busca .card__list>li.imob span.imob #loadImobprev i{font-weight:600}section.resultados-de-busca .card__list>li.imob span.imob ul{display:flex;flex-flow:row;padding-bottom:1rem;transform:translateX(0)}section.resultados-de-busca .card__list>li.imob span.imob ul li{width:60px;display:flex;align-items:center;justify-content:center;height:60px;border-radius:100%;overflow:hidden;box-sizing:border-box;margin-right:9px;min-width:60px;background:#fff;box-shadow:0 3px 10px #ddd}section.resultados-de-busca .card__list>li.imob span.imob ul li a{width:100%;box-sizing:border-box;height:100%;display:flex;align-items:center;justify-content:center;padding:7px}section.resultados-de-busca .card__list>li.imob span.imob ul li a img{width:100%;height:100%;object-fit:contain}section.resultados-de-busca .card__list>li.sc{padding:1em;border:none;min-height:inherit;margin-top:0;background:0 0;padding:0;box-shadow:none;overflow-x:scroll}section.resultados-de-busca .card__list>li.sc>h2{font-size:16px;font-weight:400;color:#717171;display:none;float:left;width:100%;letter-spacing:.2px}section.resultados-de-busca .card__list>li.sc .lv-2{display:-webkit-inline-box;display:-webkit-box;float:left;width:auto;margin-top:1em;flex-flow:row;min-height:180px;height:155px;overflow-x:scroll}section.resultados-de-busca .card__list>li.sc .lv-2.slick-slider{min-height:180px;height:180px}section.resultados-de-busca .card__list>li.sc .lv-2 ._item{display:block;float:left;height:170px;width:200px;max-width:360px;background:#fff;padding:0;margin-right:10px;position:relative;overflow:hidden;border-radius:6px;border:solid 1px #ddd;box-shadow:0 5px 11px -10px #3f51b5}section.resultados-de-busca .card__list>li.sc .lv-2 ._item:hover a span:before{opacity:.8}section.resultados-de-busca .card__list>li.sc .lv-2 ._item.slick-slide{height:170px}section.resultados-de-busca .card__list>li.sc .lv-2 ._item.slick-slide:focus{outline:0}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a{display:block;float:left;z-index:9;position:relative;text-decoration:none;width:100%;height:155px}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a:focus{outline:0}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a span.img{display:block;float:left;width:100%;position:relative;left:0;height:100px;top:0;background:#000}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a span.img img{position:absolute;top:0;width:100%;height:100%;background-blend-mode:multiply;object-fit:cover;left:0;opacity:1}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a h3{font-size:17px;font-weight:600;color:#353536;display:block;float:right;min-height:64px;width:100%;line-height:16px;-webkit-perspective:1000;z-index:9;position:relative;text-align:left;padding:0 15px;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a h3 b{text-transform:uppercase;display:block;width:100%;font-size:13px;letter-spacing:.2px;font-weight:600}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a h3 small{font-size:13px;font-weight:600;width:100%;display:block;color:#717171}section.resultados-de-busca .card__list>li.sc .lv-2 ._item a p{display:block;float:right;width:65%;font-size:14px;line-height:17px;color:#717171;padding:0 4px;padding-bottom:10px}section.resultados-de-busca .card__list>li.sc .lv-2 button{position:absolute;display:block;z-index:9;height:150px;border:none;background:0 0;color:#fff;outline:0;cursor:pointer;width:49px}section.resultados-de-busca .card__list>li.sc .lv-2 button:focus{outline:0}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-prev{left:-2%;top:0;transform:rotate(180deg)}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-prev.slick-disabled:before{display:none}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-prev:before{content:'\e912';font-family:icomoon;font-size:12px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-next{right:-16px;top:0}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-next.slick-disabled:before{display:none}section.resultados-de-busca .card__list>li.sc .lv-2 button.slick-next:before{content:'\e912';font-family:Icomoon;font-size:12px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}section.resultados-de-busca .card__list>li span.gal-icon{position:absolute;z-index:9;left:10px;top:7px;padding:1px 9px;border-radius:4px;background:rgba(255,255,255,.9);text-align:center}section.resultados-de-busca .card__list>li span.gal-icon i{display:block;font-size:18px;color:#353535;float:left}section.resultados-de-busca .card__list>li span.gal-icon small{font-size:12px;position:relative;padding:4px;font-family:lato;float:left;color:#717171;display:block;font-weight:600}section.resultados-de-busca .card__list>li:hover{transition:box-shadow .1s ease-in}section.resultados-de-busca .card__list>li:hover .card__info a.details{transition:all .2s ease-in}section.resultados-de-busca .card__list>li .labelSobreImagem .visto{display:none}section.resultados-de-busca .card__list>li.seen{box-shadow:8px 10px 9px -13px #000}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto{display:block;position:absolute;width:auto;height:19px;background:rgba(0,0,0,.74);z-index:999;bottom:52px;text-transform:uppercase;font-weight:600;font-size:10px;color:#fff;line-height:18px;padding:0 11px;padding-left:2px;left:15px;letter-spacing:.3px;text-align:center;border-radius:60px}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto.w-label{left:118px}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto.w-label-g{left:200px}section.resultados-de-busca .card__list>li.seen .labelSobreImagem .visto i{display:block;position:relative;color:#fff;font-size:10px;border-radius:23px;padding:4px;float:left;line-height:12px;margin-right:3px}section.resultados-de-busca .card__list>li.seen .baseGaleria .galeria-n .overlay-g{opacity:.8;height:100%;background:#6f6f6f}section.resultados-de-busca .card__list>li .baseGaleria{display:block;float:left;width:100%;position:relative;cursor:pointer;height:250px;overflow:hidden;object-fit:none;z-index:0;transform:translateX(0);-ms-transform:translateX(0);-webkit-transform:translateX(0);transform:translateY(0);-ms-transform:translateY(0);-webkit-transform:translateY(0)}section.resultados-de-busca .card__list>li .baseGaleria span.lancamento{display:block;position:absolute;width:auto;background:#6725e8;border-radius:29px;bottom:53px;left:14px;text-transform:uppercase;font-size:10px;font-weight:800;letter-spacing:.2px;line-height:10px;color:#fff;padding:4px 15px;overflow:hidden;z-index:9999999999}section.resultados-de-busca .card__list>li .baseGaleria span.lancamento:after{content:'Lançamento'}section.resultados-de-busca .card__list>li .baseGaleria span.destaque{display:block;position:absolute;width:auto;z-index:999999999;background:#c72b2b;border-radius:29px;bottom:53px;left:14px;text-transform:uppercase;font-size:10px;font-weight:600;line-height:10px;color:#fff;padding:4px 15px;overflow:hidden;box-shadow:0 10px 10px -10px rgba(0,0,0,.29)}section.resultados-de-busca .card__list>li .baseGaleria span.destaque:after{content:'Destaque'}section.resultados-de-busca .card__list>li .baseGaleria span.destaque:before{content:'\e92c';font-family:Icomoon;margin-right:6px;opacity:.6}section.resultados-de-busca .card__list>li .baseGaleria span.direto{display:block;position:absolute;width:auto;z-index:2;background:#2e7d32;border:solid 1px #2e7d32;border-radius:29px;bottom:51px;left:4%;text-transform:uppercase;font-size:11px;font-weight:600;line-height:10px;color:#fff;padding:4px 15px;overflow:hidden}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n{overflow:hidden;width:100%;display:block;float:left;height:250px;position:relative}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n .overlay-g{border-radius:8px 8px 0 0;background:rgba(255,255,255,0);background:-moz-linear-gradient(top,rgba(255,255,255,0) 0,rgba(0,0,0,.7) 100%);background:-webkit-linear-gradient(top,rgba(255,255,255,0) 0,rgba(0,0,0,.7) 100%);background:linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(0,0,0,.7) 100%);width:100%;position:absolute;z-index:1;height:100%;bottom:0;opacity:.9}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a{position:absolute;width:100%;height:250px}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a source{object-position:50% 50%}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a img.image{width:100%;height:auto;object-fit:none}section.resultados-de-busca .card__list>li .baseGaleria .galeria-n a img.image.image--center{object-position:50% 50%}section.resultados-de-busca .card__list>li .modalSolicitar{width:0;padding:1em;top:0!important;float:left;height:0%;visibility:hidden;opacity:0;position:absolute;background:#efefef;transform:scale(0)}section.resultados-de-busca .card__list>li .description{position:relative;float:left;width:100%;z-index:9;outline:0;background:#fff}section.resultados-de-busca .card__list>li .description ul.list-info{display:block;float:left;width:100%;padding:1em;position:relative;margin-top:1em;padding-bottom:0}section.resultados-de-busca .card__list>li .description ul.list-info li{display:block;float:left;width:26%;position:relative;font-size:15px;color:#353535;text-align:center;padding:1em 0}section.resultados-de-busca .card__list>li .description ul.list-info li:first-child{width:100%;padding:0;padding-right:35%;min-height:51px;display:block;float:left;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;margin-top:-.5em}section.resultados-de-busca .card__list>li .description ul.list-info li.area{width:auto;display:block;float:right;border:solid 1px rgba(0,0,0,.07);padding:.5em;position:absolute;right:1.5em;top:1em}section.resultados-de-busca .card__list>li .description ul.list-info li.area .type{display:inherit;width:auto;text-align:center;text-transform:uppercase;font-size:12px;font-weight:600;color:#717171;overflow:hidden;float:left;margin-right:2px;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility}section.resultados-de-busca .card__list>li .description ul.list-info li.area .val{width:100%;text-align:center;font-size:13px;font-weight:600;line-height:19px;color:#333;margin-top:2px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility}section.resultados-de-busca .card__list>li .description ul.list-info li.bed{width:24%}section.resultados-de-busca .card__list>li .description ul.list-info li.bath{width:30%}section.resultados-de-busca .card__list>li .description ul.list-info li.suite{width:21%;text-align:center}section.resultados-de-busca .card__list>li .description ul.list-info li.garage{width:25%;text-align:right}section.resultados-de-busca .card__list>li .description ul.list-info li span.condominio{font-weight:400;color:#717171;font-size:13px;line-height:16px;margin-left:1px;width:100%;display:block;margin-top:2px;text-align:left;padding-right:1em;padding-left:8px}section.resultados-de-busca .card__list>li .description ul.list-info li span.condominio b{font-weight:800}section.resultados-de-busca .card__list>li .description ul.list-info li span.value{font-weight:400;letter-spacing:.2px;color:#303f9f;font-size:18px;line-height:22px;text-align:left;width:100%;display:block;padding-right:1em;padding-left:9px}section.resultados-de-busca .card__list>li .description ul.list-info li span.value small{display:block;float:left;width:100%;font-size:12px;color:#717171}section.resultados-de-busca .card__list>li .description ul.list-info li span.value b{font-weight:800}section.resultados-de-busca .card__list>li .description ul.list-info li span.type{font-size:13px;color:#717171;line-height:22px}section.resultados-de-busca .card__list>li .description ul.list-info li span.type:after{content:':';display:inline-block}section.resultados-de-busca .card__list>li .description ul.list-info li span.val{font-size:13px;font-weight:600;color:#353535;margin-left:2px;line-height:22px}section.resultados-de-busca .card__list>li .description h2{margin:0;padding:0 1.2em;padding-bottom:0}section.resultados-de-busca .card__list>li .description h2 .ttl{position:absolute;top:-3em;color:#f3f3f3;line-height:21px;font-size:16px;font-weight:600;text-rendering:optimizeLegibility;max-width:100%;left:1em;width:92%;max-width:100%;white-space:normal;text-overflow:ellipsis;padding-bottom:6px;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;height:41px}}@media screen and (min-width:319px) and (max-width:1023px) and (min-width:320px) and (max-width:359px){section.resultados-de-busca .card__list>li .description h2 .ttl{top:-3em;color:#f3f3f3;line-height:20px;font-size:16px}}@media screen and (min-width:319px) and (max-width:1023px){section.resultados-de-busca .card__list>li .description h2 .ttl i.icon-next{font-size:10px;font-weight:600;margin-left:1em;line-height:18px;color:#bbb}section.resultados-de-busca .card__list>li .description h2 span.endereco{margin-top:0;font-size:14px;width:auto;max-width:100%;display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;float:left;padding-left:0;color:#353535;font-size:14px;font-weight:600;margin-bottom:.7em;line-height:18px;font-size:13px;width:100%;padding-left:5px}section.resultados-de-busca .card__list>li .description h2 span.endereco i{display:block;float:left;width:8%;height:41px;color:#ff7427;position:relative;text-align:center}section.resultados-de-busca .card__list>li .description h2 span.endereco i:before{position:absolute;top:20%;left:0}section.resultados-de-busca .card__list>li .description h2 span.endereco span{display:inline-block;width:auto;font-weight:400;display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}section.resultados-de-busca .card__list>li .description h2 span.endereco span.item-title{text-transform:capitalize;color:#717171}section.resultados-de-busca .card__list>li .description h2 span.endereco span.cidade{font-weight:600}section.resultados-de-busca .card__list>li .description p{display:none;font-size:16px;line-height:19px;color:#525252;text-transform:lowercase}section.resultados-de-busca .card__list>li .description p:first-letter{text-transform:uppercase}section.resultados-de-busca .card__item{position:relative;display:block;float:left;width:100%;transform:translateX(0);-ms-transform:translateX(0);-webkit-transform:translateX(0)}section.resultados-de-busca .card__info{display:flex;flex-flow:row nowrap;width:100%;text-align:center;align-items:center;align-content:center;padding:3% 2%}section.resultados-de-busca .card__info span.details{display:block;float:left;min-width:70px;text-align:center;padding:6px 0;text-transform:uppercase;text-decoration:none;font-weight:600;color:#7cb342;font-size:26px;border:solid 1px;border-radius:4px;pointer-events:all;cursor:pointer;z-index:999}section.resultados-de-busca .card__info span.logo-owner{display:none;max-height:50px}section.resultados-de-busca .card__info span.logo-owner img{display:block;float:left;height:auto;font-size:10px}section.resultados-de-busca .card__info span.logo-owner img.lazyload{opacity:0;transition:opacity .2s ease-in}section.resultados-de-busca .card__info span.logo-owner img.fade{opacity:1;transition:opacity .2s ease-in}section.resultados-de-busca .card__info a{margin-top:5px;margin-bottom:10px}section.resultados-de-busca .card__info a.details{display:none;width:49%;float:right;padding:8px;text-transform:uppercase;text-decoration:none;font-size:12px;line-height:29px;text-align:center;font-weight:600;color:#303f9f;margin-left:1.5%;background:#fff;border:solid 1px #f3f3f3;border-radius:4px;margin-right:1.5%}section.resultados-de-busca .card__info a.details i{margin-right:5px}section.resultados-de-busca .card__info a.call-now{display:block;float:left;width:100%;text-align:center;padding:9px 0;text-transform:uppercase;text-decoration:none;font-weight:600;color:#7cb342;border-right:0;font-size:20px;border:solid 1px;border-radius:4px;margin:0 2%}section.resultados-de-busca .card__info a.call-now p{font-size:12px;line-height:21px;color:#3e6b0f}section.resultados-de-busca .card__info a.call-now p i{line-height:13px;color:#7cb342;font-size:19px;margin-right:8px;position:relative;top:4px}section.resultados-de-busca .card__info a.cta{display:block;float:right;width:50%;text-align:center;padding:1.5em;text-transform:uppercase;text-decoration:none;color:#303f9f;font-size:13px;font-weight:600}section.resultados-de-busca .forms-anuncio{display:block;width:60%;position:absolute;top:0;transform:translateX(-120%);-ms-transform:translateX(-120%);-webkit-transform:translateX(-120%);width:100%;transform:translateY(140%);-ms-transform:translateY(140%);-webkit-transform:translateY(140%);opacity:0;background:0 0;z-index:-1}section.resultados-de-busca .forms-anuncio .modal{width:100%;text-align:center;top:0!important;z-index:-1;height:500px;min-height:0;position:absolute;display:block;background:#fff}section.resultados-de-busca .forms-anuncio .modal .spinner{width:70px;text-align:center;position:absolute;top:44%;left:39%}aside .filters{display:block;width:100%;float:left;border:solid .5px #ddd;background:#fff;background:#fff;position:fixed;top:0;width:100%;height:100%;z-index:999999;max-width:420px;left:0;overflow:auto;transform:translateX(-110%);-ms-transform:translateX(-110%);-webkit-transform:translateX(-110%)}aside .filters .top{display:block;float:left;background:#000;width:100%;overflow:hidden;position:fixed;padding:2%;top:0;z-index:9;height:52px}aside .filters .top p{display:block;margin:0;float:left;width:65%;text-align:right;padding:0 1em;position:relative;z-index:69;color:#fff;line-height:39px;font-weight:600}aside .filters .top p i{color:#ff7427;margin-right:10px}aside .filters .top .close-filter-mobile{display:block;float:left;width:35%;background:rgba(78,78,78,.89);text-align:center;color:#fff;padding:12px 0;text-transform:uppercase;font-size:12px;z-index:9;font-weight:600;position:relative}aside .filters .top .close-filter-mobile .icon-plus{position:relative;width:0;height:15px;float:left;margin-left:18px}aside .filters .top .close-filter-mobile .icon-plus:before{content:"\e921";color:#fff;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;left:0;top:2px}aside .filters .top span.close-filter-mobile{display:block}aside .filter-mobile{text-align:center;display:block;width:100%;border:none;left:0;top:70px;position:absolute;z-index:999;float:left}aside .filter-mobile span.btn-filter-trigger{display:inline-block;width:40%;margin:0 auto;float:none;padding:15px 0;color:#fff;text-align:center;font-weight:600;font-size:12px;text-transform:uppercase;background:rgba(21,21,21,.97);box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23);margin-left:-1px}aside .filter-mobile span.btn-filter-trigger i{color:#ff7427;margin-right:5px}aside .filter-mobile .order{display:block;float:right;width:60%;border-left:solid .5px rgba(221,221,221,.16);position:relative;background:#353535;margin-left:-1px;box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23);padding-left:0}aside .filter-mobile .order select.btn-order-trigger{display:inline-block;width:100%;margin:0 auto;float:none;padding:14px 0;padding-left:12%;color:#fff;text-align:center;font-weight:600;font-size:12px;text-transform:uppercase;margin-left:0;background:0 0;border:none;padding-left:24%;-webkit-appearance:none;-moz-appearance:none;height:43px;outline:0}aside .filter-mobile .order select.btn-order-trigger option{color:#000}aside .filter-mobile .order i.icon-order{position:absolute;left:1em;top:13px;z-index:0}aside .filter-mobile .order label{position:relative;color:#298bde;z-index:9;width:100%;outline:0;margin:0;float:left;text-align:center;padding-top:0}.spinner{width:70px;text-align:center;position:fixed;top:47%;left:39%}.spinner>div{width:18px;height:18px;background-color:#303f9f;border-radius:100%;display:inline-block;-webkit-animation:sk-bouncedelay 1.4s infinite ease-in-out both;animation:sk-bouncedelay 1.4s infinite ease-in-out both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@keyframes sk-bouncedelay{0%,100%,80%{-webkit-transform:scale(0);transform:scale(0)}40%{-webkit-transform:scale(1);transform:scale(1)}}.filters-form form a.apply-filter{width:100%;background:#ff7427;border:none;color:#fff;border-radius:0;text-align:center;position:fixed;bottom:0;text-transform:uppercase;font-weight:600;font-size:16px;height:auto;left:0;padding:1em;z-index:99}.filters-form form #lista_bairros_cidades_lateral{display:block;float:left;width:100%;margin-bottom:10px;margin-top:-5px}.filter-anchor-deskt{display:none}.modal{width:100%;text-align:center;top:0!important;display:none;z-index:99999;height:100%;left:0;position:fixed;background:rgba(255,255,255,.85)}.modal>span{width:100%;height:100%;padding-top:8px;left:0;top:0;opacity:1;transition:opacity .2s ease-in;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.modal>span i{font-size:40px;color:#303f9f;position:absolute;-webkit-text-stroke:.1px}.modal>span #load{width:80px;animation:loading 3s linear infinite}.modal>span #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:10;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#717171;fill:transparent}@keyframes loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes loading-circle{0%{stroke-dashoffset:0}100%{stroke-dashoffset:-600}}#modalRetornoOperacoes{display:none}#modal-ver-telefone{display:none}article img{display:block;width:100%;float:left}article img{width:100%}section.resultados-de-busca .card__list>li .description ul.list-info{display:block;float:left;width:100%;padding:1em;position:relative;margin-top:0;padding-bottom:0}section.resultados-de-busca .card__list>li .description ul.list-info li{display:block;float:left;width:26%;position:relative;font-size:15px;color:#353535;text-align:center;padding:1em 0;padding-bottom:5px}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li.modelo{width:calc(35% - 1.5em);display:block;float:right;border:solid 1px rgba(0,0,0,.07);padding:.5em 0;position:absolute;right:1.5em;top:0}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li.cor .val{overflow:hidden;text-transform:lowercase;margin-left:0;text-align:center;white-space:nowrap;text-overflow:ellipsis;text-rendering:optimizeLegibility}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li.cor{width:24%}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li span.val{display:block;text-align:center;margin-left:0;line-height:17px;font-size:12px}section.resultados-de-busca .card__list>li .baseGaleria.veiculos{height:250px;width:100%}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li.fuel{width:29%}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li.cambio{width:27%}section.resultados-de-busca .card__list>li .description ul.list-info.veiculos li.km{width:20%}section.resultados-de-busca .card__list>li .description ul.list-info li span.type{font-size:13px;color:#717171;line-height:22px}.descricaoBusca{display:block;width:100%;float:left;padding-top:.6em;height:92px;padding-bottom:1em;overflow:hidden;font-size:14px;line-height:18px;color:#717171;text-overflow:ellipsis;position:relative;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}.descricaoBusca .youtube{display:none}.descricaoBusca .btns-text{display:block;position:absolute;bottom:7px;width:100%;left:0;padding-left:2em}.descricaoBusca .btns-text .read-more{font-size:12px;top:-7px;position:relative;padding:9px 6px;background:#fff;font-weight:500;border:solid 1px #ddd;color:#717171;cursor:pointer;letter-spacing:0;font-family:Lato;outline:0;-webkit-text-stroke:.2px}.descricaoBusca .btns-text .read-more:hover{border:solid 1px #303f9f;color:#303f9f}.descricaoBusca .btns-text .read-more:focus{outline:0}.descricaoBusca .btns-text .btn-snippet{display:none}.descricaoBusca h2{font-size:17px;font-weight:600;clear:both;color:#353535}.descricaoBusca h3{font-weight:600;color:#353535}.descricaoBusca img{display:none}}@media screen and (min-width:319px) and (max-width:1023px){section.resultados-de-busca .card__list>li .baseGaleria .galeria-n::after{background:-moz-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.65) 100%);background:-webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.65) 100%);background:linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.65) 100%);display:block;width:100%;height:143px;z-index:999999999;position:absolute;bottom:0}}.wrapper.large-content{max-width:910px!important;width:70%!important;margin-left:28.5%}@media screen and (max-width:1160px) and (min-width:1023px){.wrapper.large-content{width:67%!important;margin-left:31%}}@media screen and (max-width:1023px) and (min-width:320px){.wrapper.large-content{width:100%!important;margin-left:0}}@media screen and (min-width:1447px){.wrapper.large-content{max-width:960px!important;width:70%!important;margin-left:25.5%}}#paginacao_resultados{display:block;float:left;width:100%}.ofertas{display:none}.widgetFiltro .boxMarcaModelo{display:block;float:left;width:100%;padding:10px;border:solid 1px rgba(22,126,214,.25);margin-bottom:1em;position:relative}.widgetFiltro .boxMarcaModelo .busca-modelo{background:rgba(3,84,152,.08);padding:10px;color:#303f9f;text-transform:uppercase;font-size:12px;font-weight:800}.widgetFiltro .boxMarcaModelo label{margin-bottom:3px}.widgetFiltro .boxMarcaModelo label.select{height:43px;position:relative}.widgetFiltro .boxMarcaModelo label.select:after{content:"\e912";font-family:IcoMoon;position:absolute;top:0;right:0;bottom:0;font-size:100%;line-height:47px;padding:0 6.5%;border-left:solid 1px #ddd;color:#303f9f;pointer-events:none}.filters-form form fieldset a.btAdd{display:block;float:left;width:100%;text-align:center;padding:12px 0;background:#efefef;color:#303f9f;text-transform:uppercase;font-size:13px;font-weight:600;margin-top:1em;display:block;outline:0}.doubleField{display:block;border:solid 1px #f1f1f1;float:left;padding:10px;margin-top:9px;width:100%}.doubleField .fieldAnoBox{display:block;float:left;width:48%;position:relative}.doubleField .fieldAnoBox:first-child:before{content:'';width:5%;height:0;border-bottom:solid 2px #ff7427;display:block;position:absolute;right:-5%;top:53%}.doubleField .fieldAnoBox:nth-child(2){margin-left:2%}.doubleField .fieldAnoBox .fieldLabel{display:block;float:left;position:absolute;background:rgba(0,90,166,0);padding:13px;bottom:0;text-transform:uppercase;font-size:14px;font-weight:600;color:#525252}.doubleField .fieldAnoBox input{padding-left:35%;padding-top:5px;width:100%}.ValueField{display:block;float:left;width:48%;position:relative}.ValueField:nth-child(2){margin-left:2%}.ValueField span.fieldValMaxMin{display:block;float:left;position:absolute;background:rgba(0,90,166,.16);padding:11px;bottom:0}.ValueField span.fieldValMax{display:block;float:left;position:absolute;background:rgba(0,90,166,.16);padding:11px;bottom:0}.ValueField input{padding-left:31%}.filters-form form fieldset.range-selector select{display:block;float:left;width:100%;border:solid .5px #ddd;font-size:16px;text-transform:uppercase;-webkit-appearance:none;-moz-appearance:none;padding:12px;border-radius:0;padding-left:15px;margin-top:5px;background:0 0;position:relative;z-index:9}.filters-form form fieldset.range-selector label.select span{position:absolute;right:0;width:15%;border-left:solid 1px #ddd;height:45px;font-size:20px;bottom:0;padding:13px;text-align:center}@font-face{font-family:social-share-kit;src:url(https://www.chavesnamao.com.br/public/site-novo/fonts/social-share-kit.eot);src:url(https://www.chavesnamao.com.br/public/site-novo/fonts/social-share-kit.eot?#iefix) format("embedded-opentype"),url(https://www.chavesnamao.com.br/public/site-novo/fonts/social-share-kit.woff) format("woff"),url(https://www.chavesnamao.com.br/public/site-novo/fonts/social-share-kit.ttf) format("truetype"),url(https://www.chavesnamao.com.br/public/site-novo/fonts/social-share-kit.svg#social-share-kit) format("svg");font-weight:400;font-style:normal}.ssk-facebook:before{content:"a";text-indent:4px;margin-right:0;margin-left:-3px}.ssk-twitter:before{content:"b"}.ssk-google-plus:before{content:"v"}.ssk-google-plus-old:before{content:"c"}.ssk-email:before{content:"d";top:-1px;position:relative}.ssk-linkedin:before{content:"g"}.ssk-whatsapp:before{content:"m"}.ssk-link:before{content:"w"}.ssk{background-color:#757575;color:#fff;width:26px;height:26px;border-radius:3px;padding:4px;display:inline-block;font-size:17px;line-height:1px;margin-right:4px;margin-bottom:2px;text-align:center;text-decoration:none;transition:background-color .1s;-webkit-transition:background-color .1s;-moz-transition:background-color .1s;-ms-transition:background-color .1s;-o-transition:background-color .1s}.ssk .fa,.ssk .glyphicon,.ssk:before{position:relative;font-size:15px;top:2px;vertical-align:middle}.ssk:last-child{margin-right:0}.ssk:hover{background-color:#424242}.ssk:focus,.ssk:hover{color:#fff;text-decoration:none}.ssk-round .ssk,.ssk.ssk-round{border-radius:50%}.ssk-round .ssk:before,.ssk.ssk-round:before{text-indent:0;margin-right:0}.ssk-rounded .ssk,.ssk.ssk-rounded{border-radius:15%}.ssk.ssk-icon{color:#757575;padding:2px;font-size:24px}.ssk.ssk-icon,.ssk.ssk-icon:hover{background-color:transparent}.ssk.ssk-icon:hover{color:#424242}.ssk-xs>.ssk.ssk-icon,.ssk.ssk-icon.ssk-xs{font-size:16px}.ssk-sm>.ssk.ssk-icon,.ssk.ssk-icon.ssk-sm{font-size:20px}.ssk-lg>.ssk.ssk-icon,.ssk.ssk-icon.ssk-lg{font-size:28px}.ssk-group,.ssk-sticky{font-size:0}.ssk-count{display:block;padding-top:0;right:0;top:inherit;position:absolute;float:right;width:24%;text-align:center;bottom:4px;height:28px}@media screen and (max-width:1023px) and (min-width:320px){.ssk-count{width:55%;margin:0;right:0;top:17px;margin-top:10px;margin-bottom:10px;float:right;text-align:right;position:relative}}.ssk-group span.sh{display:inline-block;width:auto;font-size:18px;text-transform:uppercase;font-weight:400;color:#adadad;margin-right:12px;line-height:37px}.ssk-count .ssk{position:relative}.ssk-count .ssk-num{border-radius:4px;color:#8f8f8f;background-color:rgba(50,50,50,.03);display:block;font-size:12px;left:0;line-height:20px;position:absolute;right:0;text-align:center;top:-20px}.ssk-facebook{background-color:#3b5998}.ssk-grayscale>.ssk-facebook{background-color:#757575}.ssk-facebook:hover{background-color:#2d4373}.ssk-facebook:hover{background-color:#2d4373}.ssk-grayscale>.ssk-facebook:hover{background-color:#3b5998}.ssk-facebook.ssk-icon{color:#3b5998}.ssk-facebook.ssk-icon:hover{color:#2d4373}.ssk-facebook.ssk-icon:before{text-indent:0;margin-right:0}.ssk-twitter{background-color:#1da1f2}.ssk-grayscale>.ssk-twitter{background-color:#757575}.ssk-twitter:hover{background-color:#0c85d0}.ssk-twitter:hover{background-color:#0c85d0}.ssk-grayscale>.ssk-twitter:hover{background-color:#1da1f2}.ssk-twitter.ssk-icon{color:#1da1f2}.ssk-twitter.ssk-icon:hover{color:#0c85d0}.ssk-google-plus{background-color:#ea4335}.ssk-grayscale>.ssk-google-plus{background-color:#757575}.ssk-google-plus:hover{background-color:#d62516}.ssk-google-plus:hover{background-color:#d62516}.ssk-grayscale>.ssk-google-plus:hover{background-color:#ea4335}.ssk-google-plus.ssk-icon{color:#ea4335}.ssk-google-plus.ssk-icon:hover{color:#d62516}.ssk-email{background-color:#757575}.ssk-grayscale>.ssk-email{background-color:#757575}.ssk-email:hover{background-color:#5b5b5b}.ssk-email:hover{background-color:#5b5b5b}.ssk-grayscale>.ssk-email:hover{background-color:#757575}.ssk-grayscale>.ssk-email:hover{background-color:#5b5b5b}.ssk-email.ssk-icon{color:#757575}.ssk-email.ssk-icon:hover{color:#5b5b5b}.ssk-linkedin{background-color:#1c87bd}@media screen and (max-width:1023px) and (min-width:320px){.ssk-linkedin{display:none}}.ssk-grayscale>.ssk-linkedin{background-color:#757575}.ssk-linkedin:hover{background-color:#156791}.ssk-linkedin:hover{background-color:#156791}.ssk-grayscale>.ssk-linkedin:hover{background-color:#1c87bd}.ssk-linkedin.ssk-icon{color:#1c87bd}.ssk-linkedin.ssk-icon:hover{color:#156791}.ssk-whatsapp{background-color:#34af23}.ssk-grayscale>.ssk-whatsapp{background-color:#757575}.ssk-whatsapp:hover{background-color:#27851a}.ssk-whatsapp:hover{background-color:#27851a}.ssk-grayscale>.ssk-whatsapp:hover{background-color:#34af23}.ssk-whatsapp.ssk-icon{color:#34af23}.ssk-whatsapp.ssk-icon:hover{color:#27851a}.ssk:before{display:inline-block!important;font-family:social-share-kit!important;font-style:normal!important;font-weight:400!important;font-variant:normal!important;text-transform:none!important;speak:none!important;line-height:1!important;-webkit-font-smoothing:antialiased!important;-moz-osx-font-smoothing:grayscale!important}.sem-snippet .top-content .main-text{width:100%;padding-bottom:1em}.sem-snippet .top-content .box-snippet-ct{display:none}.sem-snippet .links{width:100%}.sem-snippet .links ul{width:45%}section.resultados-de-busca .links ul li a.selected{background:#3f51b5;color:#fff}section.resultados-de-busca.sem-snippet .top-content .box-snippet-ct{display:none}section.resultados-de-busca.sem-snippet .top-content .main-text{width:100%;padding-bottom:1.5em;margin-bottom:5px;border:solid 1px #ddd}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca.sem-snippet .top-content .main-text{padding-bottom:1em;border-radius:4px}}section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo{display:block;width:73%;float:left;position:relative;margin-right:3%}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo{width:100%}}section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo.open{width:100%}section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo.open button.read-more{display:block;float:left;width:100%;text-align:left;padding-top:1.5em;padding-left:1.5em;background:#fff}section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo.open button.read-more i{position:absolute;transform:rotate(45deg);left:0;top:19px}section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo button.read-more{-webkit-appearance:none;-moz-appearance:none;float:right;position:absolute;bottom:0;right:0;border:none;text-decoration:underline;color:#3f51b5;font-weight:600;cursor:pointer;background:#fff}section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo button.read-more:focus{outline:0}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca.sem-snippet .top-content .main-text #texto_seo_baixo button.read-more{width:47%;display:block;float:left;position:absolute;bottom:-54px;text-transform:none;border:solid 1px #ddd;background:0 0;padding:8px;font-weight:600;color:#909090;font-size:12px;letter-spacing:0;right:inherit;left:0}}section.resultados-de-busca.sem-snippet .links{width:100%!important}section.resultados-de-busca.sem-texto .links{width:100%}section.resultados-de-busca.sem-texto .top-content .box-snippet-ct{display:none}section.resultados-de-busca.sem-texto .top-content .main-text{width:100%;padding-bottom:1em}section.resultados-de-busca.sem-texto .top-content .main-text .btns-text{display:none}section.resultados-de-busca.sem-texto .top-content .main-text .ssk-count{display:none}section.resultados-de-busca.sem-texto .links{width:100%}@media screen and (max-width:1023px) and (min-width:642px){.wrapper.large-content{max-width:640px!important;width:100%!important}}.descricaoBusca .btns-text .read-more i.icon-plus{position:relative;width:15px;display:block;float:left;height:15px}.descricaoBusca .btns-text .read-more i.icon-plus:before{content:"\e921";transform:rotate(45deg);position:absolute;left:0;line-height:16px;font-size:9px;color:#f14141}.descricaoBusca .btns-text .btn-snippet{font-size:12px;top:-7px;position:relative;padding:9px 23px;background:#fff;font-weight:500;border:solid 1px #ddd;color:#717171;cursor:pointer;letter-spacing:0;font-family:Lato;outline:0}.descricaoBusca.open{display:block;height:auto;max-height:634px;overflow-y:scroll}@media screen and (max-width:1023px) and (min-width:320px){.descricaoBusca.open{max-height:234px}}.descricaoBusca.open .btns-text .read-more{color:#303f9f!important;border:solid 1px #303f9f}.descricaoBusca.open .btns-text .read-more:hover{background:#303f9f!important;color:#fff!important}.descricaoBusca.open .btns-text .read-more:hover i.icon-plus:before{color:#ff6c6c}.descricaoBusca.open .youtube{background-color:#000;position:relative;overflow:hidden;cursor:pointer;display:inline-block!important;height:200px;width:46%;float:left;margin-right:3%;margin-bottom:11px}@media screen and (max-width:1023px) and (min-width:320px){.descricaoBusca.open .youtube{width:100%}}.descricaoBusca.open .youtube img{width:100%;opacity:.7;height:100%;padding:0;left:0}.descricaoBusca.open .youtube .play-button{width:90px;height:60px;background-color:#ff7427;box-shadow:0 0 30px rgba(0,0,0,.6);z-index:1;opacity:1;border-radius:6px}.descricaoBusca.open .youtube .play-button:before{content:"";border-style:solid;border-width:15px 0 15px 26px;border-color:transparent transparent transparent #fff}.descricaoBusca.open .youtube iframe{height:100%;width:100%;top:0;left:0;padding:0}.descricaoBusca.open img{display:inline-block!important}.descricaoBusca img{float:left;width:50%;padding-right:20px;padding-bottom:10px}.descricaoBusca p{font-size:14px;line-height:18px}.descricaoBusca p b,.descricaoBusca p strong{font-weight:600}.descricaoBusca a{color:#303f9f;text-decoration:underline}.descricaoBusca a:hover{color:#ff7427;text-decoration:underline}.descricaoBusca .youtube .play-button,.descricaoBusca .youtube img{cursor:pointer}.descricaoBusca .youtube .play-button,.descricaoBusca .youtube .play-button:before,.descricaoBusca .youtube iframe,.descricaoBusca .youtube img{position:absolute}.descricaoBusca .youtube .play-button,.descricaoBusca .youtube .play-button:before{top:50%;left:50%;transform:translate3d(-50%,-50%,0)}.descricaoBusca .ssk:before{color:#fff}section.resultados-de-busca .card__info>.favorite-bt{position:relative;width:41px;height:40px;border:1px solid #f3f3ef;color:#525252;border-radius:6px;background:0 0;transition:all ease-in-out .3s;transition-delay:.1s;cursor:pointer;display:block;float:right;margin-right:1em;box-shadow:0 2px #e8e9e8}@media screen and (min-width:320px) and (max-width:1024px){section.resultados-de-busca .card__info>.favorite-bt{width:40px;position:absolute;top:-244px;right:-5px;background:#fff;border:solid 1px #fff;border-radius:4px}}section.resultados-de-busca .card__info>.favorite-bt:focus{outline:0}section.resultados-de-busca .card__info>.favorite-bt:before{content:'\e930';font-family:Icomoon;font-size:18px;position:absolute;top:11px;left:11px}@media screen and (min-width:319px) and (max-width:1023px){section.resultados-de-busca .card__info>.favorite-bt:before{content:'\e92d';font-family:Icomoon;font-size:18px;position:absolute;top:10px;left:10px}}section.resultados-de-busca .card__info>.favorite-bt:hover{transition:all ease-in-out .3s}section.resultados-de-busca .card__info>.favorite-bt.favorited{box-shadow:0 2px #ddd;border:1px solid #f3f3f3}section.resultados-de-busca .card__info>.favorite-bt.favorited:before{content:'\e92d';color:red;animation-name:fav-s;animation-duration:.5s;animation-timing-function:ease-in-out}@keyframes fav-s{0%{transform:scale(1)}50%{transform:scale(1.5)}100%{transform:scale(1)}}.info-s-top{display:none}.info-s-top.mobile{display:block;float:left;width:100%;position:fixed;top:0;z-index:99999;height:48px;box-shadow:0 10px 10px -10px rgba(0,0,0,.32);background:#fff}.info-s-top.mobile span{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.info-s-top.mobile span.bt-top{width:20%;float:left;text-align:center;height:48px;font-size:.65em;font-weight:600;letter-spacing:.2px;cursor:pointer;text-transform:uppercase;color:#717171;border-left:solid 1px #ddd}.info-s-top.mobile span.bt-top i{display:block;font-size:19px;width:100%;margin-bottom:6px;color:#ff7427}.info-s-top.mobile span.bt-top i.icon-menunew{font-size:23px;line-height:19px;font-weight:600}.info-s-top.mobile span.bt-nav{width:15%;float:left;height:48px;cursor:pointer;text-align:center}.info-s-top.mobile span.bt-nav.top{border-right:solid 1px #ddd}.info-s-top.mobile span.bt-nav.top i{transform:rotate(270deg)}.info-s-top.mobile span.bt-nav.bottom{border-left:solid 1px #ddd}.info-s-top.mobile span.bt-nav.bottom i{transform:rotate(90deg)}.info-s-top.mobile .desc-page{width:100%;padding-top:11px;padding-left:12px;padding-bottom:10px;font-size:12px;display:block;float:left;color:#353535;font-weight:600;text-transform:uppercase;text-align:left;position:relative}.info-s-top.mobile .desc-page.active i.icon-next{transform:rotate(90deg);transition:transform .1s linear}.info-s-top.mobile .desc-page small{font-size:12px;display:block;float:left;margin-top:3px;color:#717171;width:100%;text-transform:none;font-weight:500;-webkit-text-stroke:.2px}.info-s-top.mobile .desc-page i.icon-next{position:absolute;right:7%;top:33%;font-weight:600;color:#ff7427;transform:rotate(0);transition:transform .1s linear}.ink{display:block;position:absolute;background:rgba(255,119,0,.12);border-radius:100%;transform:scale(0)}.ink.animate{animation:ripple .45s linear}@keyframes ripple{100%{opacity:0;transform:scale(2.5)}}.paginacao-titulo{display:block;float:left;padding:2em;border-bottom:solid 1px #ddd;width:100%;padding-bottom:1em}.paginacao-titulo .showing{display:block;float:left;font-size:16px;text-transform:uppercase;font-weight:600;color:#303f9f;margin-bottom:4px;width:100%}.paginacao-titulo span._qtd{font-size:28px;font-weight:600;line-height:36px;text-align:left}.paginacao-titulo span#h1_tit_pag{font-size:31px;font-weight:400;line-height:36px;text-align:left;margin-left:8px}@media screen and (max-width:1023px) and (min-width:319px){.paginacao-titulo{padding:1em}}.esconde{display:none}.infinite-pages{display:block;float:left;width:100%;padding-top:1em;margin-bottom:3em}.infinite-pages ul.paginacao-scroll{display:inline-block;float:left;width:auto;border-top:solid 1px #f3f3f3;padding-bottom:0;margin-right:2em}@media screen and (max-width:1023px) and (min-width:319px){.infinite-pages ul.paginacao-scroll{display:inline-block;width:100%;border-top:solid 1px #f3f3f3;padding-bottom:0;margin-right:0;margin:auto;text-align:center;float:none}}.infinite-pages ul.paginacao-scroll li{width:auto;display:inline-block;float:left;margin-left:6px;min-width:48px;text-align:center;text-decoration:none;color:#303f9f;padding:12px;font-size:14px;font-weight:600;letter-spacing:.2px;border-radius:4px;border:solid 1px #303f9f;cursor:pointer}@media screen and (max-width:1023px) and (min-width:319px){.infinite-pages ul.paginacao-scroll li{width:auto;display:inline-block;float:left;margin-left:5px;margin:auto;float:none;margin-bottom:5px}}.infinite-pages ul.paginacao-scroll li:first-child{margin-left:0}.infinite-pages ul.paginacao-scroll li:hover{background:#303f9f;border:solid 1px #303f9f;color:#fff}.infinite-pages ul.paginacao-scroll li.current{color:#fff;border:solid 1px #303f9f;background:#303f9f}.infinite-pages span.btn-salvar{text-decoration:none;color:#717171;padding:12px;font-size:14px;font-weight:600;letter-spacing:.2px;border-radius:4px;border:solid 1px #ddd;display:block;float:left}@media screen and (max-width:1023px) and (min-width:319px){.infinite-pages span.btn-salvar{width:90%;text-align:center;margin:auto;float:none;margin-top:1em;text-transform:uppercase;color:#303f9f;border:solid 1px #303f9f}}.back-pg{display:block;color:#fff;width:100%;float:right;padding:1.2em;text-transform:uppercase;font-size:12px;font-weight:600;cursor:pointer;letter-spacing:.2px;background:#585858;text-align:center;position:relative;top:0;line-height:21px;margin-bottom:1em}@media screen and (max-width:1023px) and (min-width:319px){.back-pg{width:100%;text-align:center;border:solid 5px #eaebef}}.menu_navegacao{display:block;float:left;width:100%}.menu_navegacao h3{font-size:16px;letter-spacing:.1px;color:#353535}.menu_navegacao h3 b{font-weight:600}.menu_navegacao span._qtd{font-weight:600}.container-ttl{display:block;width:100%;margin-bottom:7px;float:left;position:relative}@media screen and (max-width:1023px) and (min-width:319px){.container-ttl{border:solid 6px #eaebef;display:block;width:100%;margin-bottom:7px;float:left;position:relative;margin-top:0;padding:0 5px}}.container-ttl .ttl-pag{display:block;float:left;width:100%;background:#fff;padding:10px;max-width:1095px;box-shadow:0 10px 10px -10px rgba(0,0,0,.14)}@media screen and (max-width:1023px) and (min-width:319px){.container-ttl .ttl-pag{width:100%;top:0;left:0;margin:0;border:solid 0;transition:all .1s ease-in;padding-top:10px;padding-bottom:10px;border-radius:4px}.container-ttl .ttl-pag div.bookmark{width:19%;position:absolute;right:8px;top:-11px;border:solid 1px rgba(0,0,0,.05);text-align:center;box-shadow:0 8px 30px -10px}.container-ttl .ttl-pag div.bookmark>span{display:none}.container-ttl .ttl-pag div.bookmark i{margin-right:0;font-weight:400;font-size:22px;color:#303f9f}}.container-ttl .ttl-pag div.bookmark{position:relative}@media screen and (max-width:1023px) and (min-width:319px){.container-ttl .ttl-pag div.bookmark{position:absolute;top:0}}.container-ttl .ttl-pag .numero-pagina{display:block;float:left;padding:1em;width:auto;border-radius:3px;text-align:center;color:#353535;font-weight:600;text-transform:uppercase;font-size:14px;background:#fff;box-shadow:0 2px 10px -2px rgba(0,0,0,.36);border:solid 1px rgba(0,0,0,.05)}@media screen and (max-width:1023px) and (min-width:319px){.container-ttl .ttl-pag .numero-pagina{display:block;float:left;width:71%;border:none;border-radius:100px;margin-top:0;text-align:left;color:#303f9f;font-weight:600;text-transform:uppercase;font-size:12px;padding:0 10px;box-shadow:none}}.container-ttl .ttl-pag .menu_navegacao{width:auto;margin-left:2%;max-width:67%;margin-right:2%;line-height:18px;min-height:42px;align-items:center;display:grid}@media screen and (max-width:1023px) and (min-width:319px){.container-ttl .ttl-pag .menu_navegacao{padding-bottom:0;width:74%;margin-left:3%;margin-top:4px;border:none}.container-ttl .ttl-pag .menu_navegacao h3{font-size:14px;letter-spacing:.1px;color:#353535;line-height:19px}}section.resultados-de-busca .card__item>a h2 small{display:none}section.resultados-de-busca .card__item>a h2 span.endereco small{display:none}section.resultados-de-busca .card__list>li{width:100%}section.resultados-de-busca .card__list>li:empty:after{content:"";display:block;width:100%;height:100%;border-radius:4px;background:#dcdee0;z-index:9;min-height:249px;position:absolute}.alertFav3{display:none;position:fixed;height:100%;width:100%;left:0;top:0;background:rgba(0,0,0,.78);z-index:99999999999;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);padding:6em 2em;text-align:center}@media screen and (min-width:320px) and (max-width:359px){.alertFav3{padding:2em 1em}}.alertFav3 span.msg{display:block;position:relative;background:#fff;width:100%;height:100%;padding:0 1em;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;max-width:410px;margin:auto;max-height:420px;border-radius:4px}.alertFav3 span.msg i.icon-error{display:block;float:left;width:100%;font-size:70px;text-align:center;color:#ff7427;position:relative}.alertFav3 span.msg p{display:block;float:left;width:100%;text-align:center;font-size:16px;padding:1em;line-height:19px;color:#717171}.alertFav3 span.msg a.logar-bt{display:block;color:#fff;font-weight:600;font-size:14px;overflow:hidden;padding:0;text-decoration:none;background:#ff7427;text-transform:uppercase;border:none;width:100%;text-align:center;cursor:pointer;line-height:48px}.alertFav3 span.msg a.ghost{display:block;width:100%;float:left;text-align:center;border:solid 2px #ddd;padding:1em;cursor:pointer;text-transform:uppercase;font-weight:600;color:#717171;text-decoration:none;font-size:14px;margin-top:7px}.alertFav3 span.msg span.qtd{transform:scale(1);background:#ff7427;color:#fff;text-align:center;width:24px;display:block;height:24px;border-radius:60px;font-size:13px;padding-top:6px;position:relative;right:0;top:0;float:right;margin-left:10px}@media screen and (min-width:320px) and (max-width:1024px){.alertFav3 span.msg span.qtd{display:none}}.alertFav3 span.msg span.ttl{font-size:20px;text-transform:uppercase;font-weight:600;color:#ff7427;display:block;float:left;margin-top:1em}.alertFav3 span.msg span.bt-fechar-alerta{display:block;float:left;width:100%;cursor:pointer;text-align:center;padding:1em;border:solid 2px #ddd;font-weight:600;text-transform:uppercase;color:#717171;margin-top:.5em;font-size:14px}.alertFav3 span.msg span.bt-fechar-alerta.topo{position:absolute;left:-12px;top:-28px;font-size:16px;width:52px;height:52px;border-radius:60px;background:#fff;border:none;box-shadow:0 0 10px rgba(0,0,0,.23)}.alertFav3 span.msg span.bt-fechar-alerta.topo i{position:absolute;transform:rotate(45deg);color:#f15f5e;left:35%;top:35%}.ExcluirAlert{display:none;position:fixed;height:100%;width:100%;left:0;top:0;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);background:rgba(0,0,0,.78);z-index:999999;padding:6em 2em}@media screen and (min-width:320px) and (max-width:359px){.ExcluirAlert{padding:2em 1em}}.ExcluirAlert span.msg{display:block;position:relative;background:#fff;width:100%;height:100%;padding:0 1em;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;max-width:410px;margin:auto;max-height:420px;border-radius:4px}.ExcluirAlert span.msg i.icon-central-de-ajuda{display:block;float:left;width:100%;font-size:70px;text-align:center;color:#de2e2e}.ExcluirAlert span.msg p{display:block;float:left;width:100%;text-align:center;font-size:16px;padding:2em 0;line-height:23px}.ExcluirAlert span.msg span.btExcluir{display:block;color:#fff;cursor:pointer;font-weight:600;font-size:14px;overflow:hidden;padding:0;margin-top:18px;text-decoration:none;background:#da2c2c;text-transform:uppercase;border:none;width:100%;text-align:center;line-height:48px}.ExcluirAlert span.msg span.excluir-favorito{display:block;color:#fff;font-weight:600;font-size:14px;overflow:hidden;padding:0;cursor:pointer;margin-top:18px;text-decoration:none;background:#da2c2c;text-transform:uppercase;border:none;width:100%;text-align:center;line-height:48px}.ExcluirAlert span.msg span.bt-fechar-alerta{display:block;float:left;width:100%;text-align:center;padding:1em;border:solid 2px #ddd;font-weight:600;text-transform:uppercase;color:#717171;margin-top:.5em;cursor:pointer;font-size:14px}.ExcluirAlert span.msg span.bt-fechar-alerta.topo{position:absolute;left:-12px;top:-28px;font-size:16px;width:52px;height:52px;border-radius:60px;background:#fff;border:none;box-shadow:0 0 10px rgba(0,0,0,.23)}.ExcluirAlert span.msg span.bt-fechar-alerta.topo i{position:absolute;transform:rotate(45deg);color:#f15f5e;left:35%;top:35%}section.resultados-de-busca .card__list{display:block;float:left;width:100%}.followMeBar{position:relative;z-index:1}.followMeBar.fixed{position:fixed;top:0;width:69.5%;z-index:999;max-width:954px}@media screen and (max-width:1440px) and (min-width:1160px){.followMeBar.fixed{max-width:904px}}@media screen and (max-width:1160px) and (min-width:1023px){.followMeBar.fixed{max-width:67%}}@media screen and (max-width:1023px) and (min-width:320px){.followMeBar.fixed{position:fixed;width:100%;top:0;left:0;margin:0;border:solid 0;padding-top:10px;padding-bottom:10px}.followMeBar.fixed .numero-pagina{display:block;float:left;width:71%;border:none;border-radius:100px;margin-top:0;text-align:left;color:#303f9f;font-weight:600;text-transform:uppercase;font-size:12px;padding:0 10px}.followMeBar.fixed .menu_navegacao{margin-top:4px}.followMeBar.fixed div.bookmark{width:19%;position:absolute;right:8px;top:-11px;border:solid 1px #303f9f;text-align:center}.followMeBar.fixed div.bookmark>span{display:none}.followMeBar.fixed div.bookmark i{margin-right:0;font-weight:400;font-size:22px;color:#303f9f}}.followMeBar.fixed.absolute{position:absolute}div.bookmark{display:block;font-size:12px;border:solid 1px #303f9f;padding:14px 0;text-transform:uppercase;color:#303f9f;font-weight:600;cursor:pointer;max-width:100%;width:18%;text-align:center;float:right;border-radius:4px;background:#fff}@media screen and (max-width:1023px) and (min-width:320px){div.bookmark{width:100%;margin:0;margin-top:10px;text-align:center;border:solid 1px #303f9f;color:#303f9f}}div.bookmark:hover{border:solid 1px #303f9f;color:#303f9f}div.bookmark i{margin-right:5px;font-weight:600}.btns-text{display:block;width:45%;float:left;padding:10px 0}.btns-text button{-webkit-appearance:none;-moz-appearance:none;border:solid 1px #ddd;background:#fff;text-transform:uppercase;font-weight:600;color:#717171;font-size:11px;position:relative;top:11px;padding:10px}#load{width:130px;animation:loading 3s linear infinite}#load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:10;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#ddd;fill:transparent}@keyframes loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes loading-circle{0%{stroke-dashoffset:0}100%{stroke-dashoffset:-600}}.modal-n.salvar-busca{z-index:99999999;position:fixed;width:100%;height:100%;top:0;left:0;display:none}.modal-n.salvar-busca.active{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.modal-n.salvar-busca span.overlay-sb{position:fixed;width:100%;height:100%;background:rgba(0,0,0,.75);top:0;left:0;display:block}.modal-n.salvar-busca .msg-login-sb{background:#fff;z-index:9;margin:1em;padding:1.5em;text-align:center;position:relative;max-width:390px;border-radius:4px}.modal-n.salvar-busca .msg-login-sb .msg{display:block;float:left;width:100%}.modal-n.salvar-busca .msg-login-sb .msg i{font-size:75px;color:#ff7427;display:block}.modal-n.salvar-busca .msg-login-sb .msg h3{font-size:18px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;color:#353535;padding-top:1em}.modal-n.salvar-busca .msg-login-sb .msg p{display:block;float:left;font-size:16px;padding:0 1em;line-height:21px;margin-top:1em;color:#717171}.modal-n.salvar-busca .msg-login-sb span.ghost{position:absolute;top:-18px;left:-12px;background:#fff;padding:15px;transform:rotate(45deg);cursor:pointer;border-radius:60px;color:#ec5050;box-shadow:2px 0 11px -5px #000}.modal-n.salvar-busca .msg-login-sb span.cancel-bt{display:block;float:left;width:48%;margin-top:2em;font-size:14px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;border:solid 2px #ddd;padding:12px 0;text-decoration:none;cursor:pointer;color:#909090;position:relative;margin-right:2%}.modal-n.salvar-busca .msg-login-sb a{cursor:pointer}.modal-n.salvar-busca .msg-login-sb a.cta2{display:block;float:left;width:49%;margin-top:2em;font-size:14px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;border:solid 2px #ddd;padding:12px 0;text-decoration:none;cursor:pointer;color:#717171;position:relative}.modal-n.salvar-busca .msg-login-sb a.cta2 small{background:#f70;color:#fff;padding-top:9px;border-radius:60px;font-size:12px;font-weight:600;position:absolute;top:-12px;width:30px;height:30px;left:-10px;display:none}.modal-n.salvar-busca .msg-login-sb a.ghost{display:block;margin-top:.5em;padding:1em;cursor:pointer;float:left;text-align:center;width:100%;font-size:14px;border:solid 2px #ddd;text-transform:uppercase;font-weight:600;letter-spacing:.2px;color:#717171}.modal-n.salvar-busca .msg-login-sb a.link{display:block;float:left;text-align:center;width:100%;padding:12px;color:#717171;border:solid 2px #ddd;margin-top:6px;text-transform:uppercase;font-weight:600;text-decoration:none;font-size:14px}.modal-n.salvar-busca .msg-login-sb.not-logged a.cta2{width:100%;border:solid 2px #303f9f;color:#303f9f}section.resultados-de-busca .btns-right{display:block;float:right;width:20%}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca .btns-right{display:none;float:left;width:100%;padding:0 .5em}}section.resultados-de-busca .btns-right label.order{display:block;position:relative;width:auto;text-align:center;border:solid 1px #ddd;border-radius:6px;float:right;background:#fff}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca .btns-right label.order{display:block;float:left;width:100%}}section.resultados-de-busca .btns-right label.order:after{content:'';position:absolute;right:7%;top:42%;display:block;width:0;height:0;border-style:solid;border-width:6.7px 5px 0 5px;border-color:#ff7427 transparent transparent transparent}section.resultados-de-busca .btns-right label.order p{font-size:12px;text-transform:uppercase;font-weight:600;color:#353535;margin-bottom:.5em}section.resultados-de-busca .btns-right label.order span{position:absolute;right:1em;top:23px;text-transform:uppercase;font-size:12px;font-weight:600;color:#717171;z-index:-1}section.resultados-de-busca .btns-right label.order select.btn-order-trigger{display:block;position:relative;width:200px;text-align:center;float:right;border:none;border-radius:4px;-webkit-appearance:none;-moz-appearance:none;z-index:9;background:0 0;padding:8px;padding-left:40px;font-size:14px}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca .btns-right label.order select.btn-order-trigger{display:block;float:left;width:100%;padding:13px;padding-left:13px;font-size:12px;text-transform:uppercase;font-weight:600;font-family:lato}}section.resultados-de-busca .btns-right label.order select.btn-order-trigger:focus{outline:0}section.resultados-de-busca .btns-right label.order select.btn-order-trigger option{color:#000;padding-left:0}section.resultados-de-busca .btns-right label.order i.icon-order{position:absolute;left:8px;top:30%;z-index:-1}section.resultados-de-busca .btns-right label.order i.icon-next{position:absolute;top:0;right:1em}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c{display:block;position:absolute;z-index:999;top:9px;left:7px}}@media screen and (max-width:1023px) and (min-width:320px){section.resultados-de-busca .btns-right label.order #icon-order-c{display:none}}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span{position:absolute;right:0;top:0;text-transform:uppercase;font-size:15px;font-weight:600;color:#ff7427;z-index:-1}}section.resultados-de-busca .btns-right label.order #icon-order-c span.down{display:block;width:100%;height:23px;position:relative;text-align:center}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span.down{display:block;width:25px;height:23px;text-align:center;position:absolute;left:10px}}section.resultados-de-busca .btns-right label.order #icon-order-c span.down .icon-valor{left:3px;position:absolute;top:0}section.resultados-de-busca .btns-right label.order #icon-order-c span.down .icon-valor .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff;transform:rotate(180deg)}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span.down .icon-valor .icon-arrow-up{right:13px}}section.resultados-de-busca .btns-right label.order #icon-order-c span.down small{left:3px;position:absolute;top:0;font-size:18px;width:100%;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span.down small{left:-2px;position:absolute;top:0;font-size:18px;width:23px;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase;line-height:16px}}section.resultados-de-busca .btns-right label.order #icon-order-c span.down small .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff;transform:rotate(180deg)}section.resultados-de-busca .btns-right label.order #icon-order-c span.up{display:block;width:100%;height:23px;position:relative;text-align:center}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span.up{display:block;width:25px;height:23px;text-align:center;position:absolute;left:20px}}section.resultados-de-busca .btns-right label.order #icon-order-c span.up .icon-valor{left:3px;position:absolute;top:0}section.resultados-de-busca .btns-right label.order #icon-order-c span.up .icon-valor .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff}section.resultados-de-busca .btns-right label.order #icon-order-c span.up small{left:3px;position:absolute;top:0;font-size:18px;width:100%;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span.up small{left:-2px;position:absolute;top:0;font-size:18px;width:23px;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase;line-height:16px}}section.resultados-de-busca .btns-right label.order #icon-order-c span.up small .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff}@media screen and (min-width:1024px){section.resultados-de-busca .btns-right label.order #icon-order-c span.up small .icon-arrow-up{right:13px}}section.resultados-de-busca .btns-right label.order label{position:relative;color:#353535;z-index:9;width:100%;outline:0;margin:0;float:left;text-align:center;padding-top:0}section.resultados-de-busca .btns-right label.order label small{display:block;position:absolute;width:100%;text-align:center;line-height:40px;z-index:-1;left:.5em;font-size:13px}.tooltipster-base{display:flex;position:absolute;z-index:99999999}.tooltipster-content{box-sizing:border-box;max-height:100%;max-width:100%;overflow:hidden}.tooltipster-content strong{display:block;font-weight:600;text-transform:uppercase;-webkit-text-stroke:.2px}.tooltipster-ruler{bottom:0;left:0;overflow:hidden;position:fixed;right:0;top:0;visibility:hidden}.tooltipster-fade{opacity:0;-webkit-transition-property:opacity;-moz-transition-property:opacity;-o-transition-property:opacity;-ms-transition-property:opacity;transition-property:opacity}.tooltipster-fade.tooltipster-show{opacity:1}.tooltipster-grow{-webkit-transform:scale(0,0);-moz-transform:scale(0,0);-o-transform:scale(0,0);-ms-transform:scale(0,0);transform:scale(0,0);-webkit-transition-property:-webkit-transform;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform;-webkit-backface-visibility:hidden}.tooltipster-grow.tooltipster-show{-webkit-transform:scale(1,1);-moz-transform:scale(1,1);-o-transform:scale(1,1);-ms-transform:scale(1,1);transform:scale(1,1);-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1);-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-moz-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-ms-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-o-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-swing{opacity:0;-webkit-transform:rotateZ(4deg);-moz-transform:rotateZ(4deg);-o-transform:rotateZ(4deg);-ms-transform:rotateZ(4deg);transform:rotateZ(4deg);-webkit-transition-property:-webkit-transform,opacity;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform}.tooltipster-swing.tooltipster-show{opacity:1;-webkit-transform:rotateZ(0);-moz-transform:rotateZ(0);-o-transform:rotateZ(0);-ms-transform:rotateZ(0);transform:rotateZ(0);-webkit-transition-timing-function:cubic-bezier(.23,.635,.495,1);-webkit-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);-moz-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);-ms-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);-o-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);transition-timing-function:cubic-bezier(.23,.635,.495,2.4)}.tooltipster-fall{-webkit-transition-property:top;-moz-transition-property:top;-o-transition-property:top;-ms-transition-property:top;transition-property:top;-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1);-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-moz-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-ms-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-o-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-fall.tooltipster-initial{top:0!important}.tooltipster-fall.tooltipster-dying{-webkit-transition-property:all;-moz-transition-property:all;-o-transition-property:all;-ms-transition-property:all;transition-property:all;top:0!important;opacity:0}.tooltipster-slide{-webkit-transition-property:left;-moz-transition-property:left;-o-transition-property:left;-ms-transition-property:left;transition-property:left;-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1);-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-moz-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-ms-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-o-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-slide.tooltipster-initial{left:-40px!important}.tooltipster-slide.tooltipster-dying{-webkit-transition-property:all;-moz-transition-property:all;-o-transition-property:all;-ms-transition-property:all;transition-property:all;left:0!important;opacity:0}@keyframes tooltipster-fading{0%{opacity:0}100%{opacity:1}}.tooltipster-update-fade{animation:tooltipster-fading .4s}@keyframes tooltipster-rotating{25%{transform:rotate(-2deg)}75%{transform:rotate(2deg)}100%{transform:rotate(0)}}.tooltipster-update-rotate{animation:tooltipster-rotating .6s}@keyframes tooltipster-scaling{50%{transform:scale(1.1)}100%{transform:scale(1)}}.tooltipster-update-scale{animation:tooltipster-scaling .6s}.tooltipster-sidetip .tooltipster-box{background:#0070ce;border:2px solid #0070ce;border-radius:4px;font-size:12px;max-width:250px;margin:auto;z-index:99999999;font-weight:600;font-family:lato}.tooltipster-sidetip.tooltipster-bottom .tooltipster-box{margin-top:8px}.tooltipster-sidetip.tooltipster-left .tooltipster-box{margin-right:8px}.tooltipster-sidetip.tooltipster-right .tooltipster-box{margin-left:8px}.tooltipster-sidetip.tooltipster-top .tooltipster-box{margin-bottom:8px}.tooltipster-sidetip .tooltipster-content{color:#fff;line-height:18px;padding:6px 14px;padding-right:2em;position:relative}.tooltipster-sidetip .tooltipster-content:after{content:'\e921';font-family:icomoon;position:absolute;right:4px;top:3px;opacity:.6;transform:rotate(45deg)}.tooltipster-sidetip .tooltipster-arrow{overflow:hidden;position:absolute}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow{height:10px;margin-left:-10px;top:0;width:20px}.tooltipster-sidetip.tooltipster-left .tooltipster-arrow{height:20px;margin-top:-10px;right:0;top:0;width:10px}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow{height:20px;margin-top:-10px;left:0;top:0;width:10px}.tooltipster-sidetip.tooltipster-top .tooltipster-arrow{bottom:0;height:10px;margin-left:-10px;width:20px}.tooltipster-sidetip .tooltipster-arrow-background,.tooltipster-sidetip .tooltipster-arrow-border{height:0;position:absolute;width:0}.tooltipster-sidetip .tooltipster-arrow-background{border:10px solid transparent}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background{border-bottom-color:#0070ce;left:0;top:3px}.tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background{border-left-color:#0070ce;left:-3px;top:0}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background{border-right-color:#0070ce;left:3px;top:0}.tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background{border-top-color:#0070ce;left:0;top:-3px}.tooltipster-sidetip .tooltipster-arrow-border{border:10px solid transparent;left:0;top:0}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border{border-bottom-color:#0070ce}.tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border{border-left-color:#0070ce}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border{border-right-color:#0070ce}.tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border{border-top-color:#0070ce}.tooltipster-sidetip .tooltipster-arrow-uncropped{position:relative}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-uncropped{top:-10px}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-uncropped{left:-10px}.tooltip_templates{display:none}@media screen and (min-width:1024px){.mobile-only{display:none!important}}@media screen and (max-width:1600px) and (min-width:1023px){.large-only{display:none!important}}.loading-bloco-p{position:relative;display:block;float:left;width:100%;text-align:center}@media screen and (max-width:1023px) and (min-width:320px){.loading-bloco-p{padding:1em;background:#eaebef;margin-top:1em;margin-bottom:2em}}.loading-bloco-p small{display:block;width:100%;font-weight:600;text-transform:uppercase;color:#717171;position:relative;z-index:99999;margin-bottom:6px;font-size:13px;letter-spacing:.2px}.loading-bloco-p #load{width:25px;position:relative;top:6px;margin-right:11px}.loading-bloco-p #load #loading-inner{stroke-width:15px;stroke:#b9b9b9}@media screen and (min-width:1023px){header nav.main-nav.ativo{position:fixed;height:calc(100% - 47px);display:block;background:#fff;width:27%;left:0;top:47px;max-width:449px;transform:translatex(0);overflow:auto;padding-bottom:75px;transition:transform .3s ease-in;padding:0 2em;overscroll-behavior:contain}header nav.main-nav.ativo span.bt-header-m.bt-entrar{display:none}header nav.main-nav.ativo span.logo{display:none}header nav.main-nav.ativo .back-f-desk{display:block;float:left;background:#ffdb88;padding:1em;text-transform:uppercase;cursor:pointer;font-size:12px;font-weight:600;letter-spacing:.2px;color:#353535;border-radius:3px;margin:1em 0;cursor:pointer}header nav.main-nav.ativo .back-f-desk i{width:12px;height:12px;display:block;float:left;margin-right:5px;position:relative}header nav.main-nav.ativo .back-f-desk i:before{position:absolute;transform:rotate(180deg);font-size:10px;-webkit-text-stroke:.5px}.overlay-menu.ativo{display:none!important}}.login-modal-n{position:fixed;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;display:none;z-index:99999999999;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);width:100%;height:100%;top:0;left:0}@media screen and (max-width:1023px) and (min-width:320px){.login-modal-n{padding:1em}}.login-modal-n .overlay-login{position:fixed;width:100%;height:100%;left:0;top:0;background:rgba(0,0,0,.8)}.login-modal-n form{position:relative;width:100%;z-index:9;max-width:900px}.login-modal-n form .bt-close-login{position:absolute;top:-13px;left:-15px;z-index:999999;background:#fff;padding:1em;box-shadow:0 7px 20px -11px #000;border-radius:60px;color:#f44336;transform:rotate(45deg);border:solid 1px #f3f3f3;cursor:pointer}.msg-sucess-login{position:relative;z-index:9;background:#fff;padding:1em;width:100%;height:100%;margin:auto;max-width:360px;max-height:360px;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;text-align:center}.msg-sucess-login i.icon-bookmark{display:block;width:90px;text-align:center;font-size:60px;position:relative;margin-bottom:.5em}.msg-sucess-login i.icon-bookmark i.icon-checked{position:absolute;font-size:16px;color:#fff;background:#ff7427;padding:10px;border-radius:60px;z-index:9;left:-7px;top:-10px}.msg-sucess-login h3{display:block;float:left;width:100%;font-size:21px;text-transform:uppercase;font-weight:600;margin-bottom:5px}.msg-sucess-login p{display:block;float:left;width:100%;color:#717171}.msg-sucess-login .bt-fechar{position:absolute;top:-13px;left:-15px;z-index:999;background:#fff;padding:1em;box-shadow:0 7px 20px -11px #000;border-radius:60px;color:#f44336;transform:rotate(45deg);cursor:pointer}.msg-sucess-login .bt-close{display:block;float:left;width:100%;text-align:center;padding:1em;margin-top:2em;text-transform:uppercase;font-weight:600;color:#fff;background:#ff7427;cursor:pointer}.criteo_header{display:none}@media screen and (max-width:1160px) and (min-width:1023px){span.gal-icon{right:10px;width:50px}}.btSolicitarImagem{width:100%;display:block;text-align:center;position:absolute;height:100%;padding-top:22%;background:#353535}.resultados-de-busca .empty-results{display:block;float:left;width:100%;text-align:center;padding:1em}.resultados-de-busca .empty-results .empty{text-align:center;display:block;float:left;width:100%}.resultados-de-busca .empty-results .empty p{font-size:21px;font-weight:400;color:#717171}.resultados-de-busca .empty-results .empty p span{color:#035498;font-weight:600;text-transform:uppercase;font-size:16px;border-bottom:solid 1px #035498}.resultados-de-busca .empty-results .empty p span i{margin-right:5px}.resultados-de-busca .empty-results .empty p b{display:block;color:#c33636;font-size:30px;margin-bottom:6px}.nuvem-tags{background:#eaebef!important}.footer-visual .large-content{max-width:960px!important;margin-left:26%!important}@media screen and (max-width:1445px) and (min-width:1023px){.footer-visual .large-content{max-width:70%!important;margin-left:28%!important}}@media screen and (max-width:1023px) and (min-width:320px){.footer-visual .large-content{max-width:100%!important;margin-left:inherit!important}}.modal-form-msg{position:fixed;z-index:9999999;width:100%;height:100%;left:0;top:0;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;display:none}.modal-form-msg .ofm{position:fixed;z-index:9999999;background:rgba(0,0,0,.65);width:100%;height:100%;left:0;top:0}.modal-form-msg .content-form{background:#eaebef;border-radius:6px;position:relative;z-index:9999999;max-width:360px}@media screen and (max-width:1023px) and (min-width:320px){.modal-form-msg .content-form{max-width:90%}}.modal-form-msg .content-form>.close-form-msg{display:block;position:absolute;background:#fff;cursor:pointer;padding:1em;border-radius:60px;left:-1em;top:-1em;box-shadow:0 3px 10px -3px #000;transform:rotate(45deg);color:#f44336}@media screen and (max-width:1023px) and (min-width:320px){.modal-form-msg .content-form>.close-form-msg{left:-5%}}.modal-form-msg .content-form .dadosAnuncio{float:left;width:100%;text-align:center;padding:1em;margin-bottom:10px;border-radius:6px 6px 0 0;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;background:#fff}.modal-form-msg .content-form .dadosAnuncio .ttl-anuncio{font-size:16px;display:block;float:left;color:#353535;line-height:20px;width:100%;padding:0 1em;text-transform:lowercase}.modal-form-msg .content-form .dadosAnuncio .ttl-anuncio:first-letter{text-transform:uppercase}@media screen and (max-width:1023px) and (min-width:320px){.modal-form-msg .content-form .dadosAnuncio .ttl-anuncio{padding:0}}.modal-form-msg .content-form .dadosAnuncio .img-anuncio{display:block;float:left;width:100%;text-align:center;margin-bottom:5px}.modal-form-msg .content-form .dadosAnuncio .img-anuncio span.proprietario{background:0 0;width:100%;display:block;float:none;padding:16px 0;color:#717171;font-size:11px;font-weight:600;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;max-width:80%;margin:auto}.modal-form-msg .content-form .dadosAnuncio .img-anuncio span.proprietario i{color:#a2a1a1;margin-right:5px}.modal-form-msg .content-form>form{display:block;float:left;width:100%;padding:1em 1.5em;position:relative;overflow:hidden;border-radius:0 0 6px 6px}@media screen and (max-width:1023px) and (min-width:320px){.modal-form-msg .content-form>form{padding:1em}}.modal-form-msg .content-form>form #frm-contato-retorno{position:absolute;background:#eaebef;left:0;bottom:0;height:100%;z-index:9;width:100%;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.modal-form-msg .content-form>form #frm-contato-retorno .sucess{display:block;max-width:87%;margin:auto;font-size:18px;line-height:25px;color:#353535;font-weight:600;text-align:center;width:100%}.modal-form-msg .content-form>form #frm-contato-retorno .sucess small{display:block;font-size:16px;font-weight:400;line-height:18px;color:#353535}.modal-form-msg .content-form>form #frm-contato-retorno .sucess .close-msg{display:block;width:100%;-webkit-appearance:none;-moz-appearance:none;border:none;background:#ff7427;cursor:pointer;padding:10px 0;font-size:16px;font-weight:600;color:#fff;border-radius:6px;margin-top:4em;box-shadow:0 4px 0 0 #ec651c}.modal-form-msg .content-form>form>fieldset{width:100%;float:left;display:block;margin-bottom:8px;border-radius:6px;position:relative;background:#fff}.modal-form-msg .content-form>form>fieldset .mgserro{display:none;background:#f44336;float:left;width:100%;color:#fff;padding:6px;margin-top:-4px;border-radius:0 0 4px 4px;z-index:-3;font-size:12px;font-weight:600;text-align:left}.modal-form-msg .content-form>form>fieldset .mgserro.active{display:block}.modal-form-msg .content-form>form>fieldset:focus{outline:0}.modal-form-msg .content-form>form>fieldset.btns-field{background:0 0;margin-top:1em}.modal-form-msg .content-form>form>fieldset>label{font-size:19px;text-transform:uppercase;font-weight:600;width:35px;display:block;float:left;color:#717171;position:absolute;left:0;height:100%;text-align:center;padding-top:10px}.modal-form-msg .content-form>form>fieldset>label:focus{outline:0}.modal-form-msg .content-form>form>fieldset input{width:100%;z-index:9;padding-left:40px;display:block;float:left;border-radius:4px;-webkit-appearance:none;-moz-appearance:none;border:none;height:38px;border:solid 1px rgba(0,0,0,.26);line-height:28px;color:#353535;font-size:16px;background:0 0;box-shadow:0 3px 11px -3px rgba(0,0,0,.25);border-radius:6px}.modal-form-msg .content-form>form>fieldset input.error{border:solid 1px #f44336}.modal-form-msg .content-form>form>fieldset input.error+label i{color:#f44336}.modal-form-msg .content-form>form>fieldset input:focus{outline:0;border:solid 1px #c9d1ff}.modal-form-msg .content-form>form>fieldset input:focus+label i{color:#303f9f}.modal-form-msg .content-form>form>fieldset button{display:block;width:100%;-webkit-appearance:none;-moz-appearance:none;border:none;background:#ff7427;text-transform:uppercase;font-size:14px;font-weight:600;color:#fff;padding:14px 0;border-radius:6px;cursor:pointer;transition:box-shadow .2s ease-in;box-shadow:0 4px 0 0 #ec651c;overflow:hidden;position:relative}.modal-form-msg .content-form>form>fieldset button:focus{outline:0}.modal-form-msg .content-form>form>fieldset button.loading span.loader{display:block;position:absolute;width:100%;height:100%;background:#ff7427;top:0;left:0;padding-top:10px}.modal-form-msg .content-form>form>fieldset button.loading span.loader #load{width:30px}.modal-form-msg .content-form>form>fieldset button.loading span.loader #load #loading-inner{stroke-width:20;stroke:#fff}.modal-form-msg .content-form>form>fieldset button span.loader{display:none}.modal-form-msg .content-form>form>fieldset button span.ink{background:rgba(255,255,255,.12)!important}.modal-form-msg .content-form>form>fieldset p{display:block;float:left;width:100%;margin-top:1em;font-size:12px;color:#353535;line-height:15px;text-align:center}.modal-form-msg .content-form>form>fieldset p a{color:#303f9f}.modal-msg-bt{display:block;float:right;border:1px solid #ddd;color:#ff5722;padding:13px 15px;border-radius:6px;margin-right:8px;text-transform:uppercase;cursor:pointer;font-size:12px;font-weight:600;text-decoration:none;border:solid 1px}.modal-msg-bt:hover{background:#ff7427;border:solid 1px #ff7427;color:#fff;box-shadow:0 2px #da5f1c}.modal-msg-bt i{display:none}@media screen and (min-width:1024px) and (max-width:1440px){.modal-msg-bt{padding:13px 10px}}@media screen and (max-width:1023px) and (min-width:320px){.modal-msg-bt{display:block;float:left;color:#303f9f;padding:9px 0;text-transform:uppercase;cursor:pointer;font-size:12px;font-weight:600;text-decoration:none;line-height:21px;border-radius:4px;width:100%;min-width:120px}.modal-msg-bt i{display:inline-block;font-size:22px;line-height:11px;position:relative;top:5px;margin-right:6px}}#seo-text-full p{padding-bottom:3em}@media screen and (min-width:1023px){.deskt-hidden{display:none}}a.phoneTrack{font-size:16px;color:#ff5722;text-decoration:none;font-weight:600;height:41px;display:flex;flex-flow:row wrap;align-items:center;justify-content:center;float:left;margin-left:10px}@media screen and (min-width:320px) and (max-width:1023px){a.phoneTrack{display:none}}a.phoneTrack small{font-weight:400;margin-right:5px;font-size:14px}a.phoneTrack small .icon-phone{top:0;margin-right:5px;color:#ef630a;float:left;text-decoration:none}.ulLinks{background:#fff;margin:7px 0;margin-bottom:3px;display:flex;flex-flow:row wrap;box-sizing:border-box;float:left;position:relative;min-height:250px;width:100%}.ulLinks *{box-sizing:border-box}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks{flex-flow:row nowrap;overflow-y:hidden;overflow-x:scroll;height:250px;margin-bottom:1rem}}.ulLinks li{width:25%}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks li{width:auto}}.ulLinks li.active h4{background:#fff;color:#f44336;border:none}.ulLinks li.active p{height:calc(100% - 52px);z-index:9}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks li.active p{height:200px;flex-flow:row nowrap;width:-webkit-fill-available}.ulLinks li.active p span{width:72%}}.ulLinks li:last-child h4{border-right:none}.ulLinks li h4{cursor:pointer;margin:0;height:58px;display:flex;flex-flow:row wrap;align-items:center;justify-content:center;font-size:12.6px;background:#f3f3f3;padding:12px;color:#353535;border:solid 1px #ddd;border-top:none;border-bottom:none;margin-left:-.5px;line-height:1.2}.ulLinks li h4:hover{background:#fbfbfb}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks li h4{min-width:200px}}.ulLinks li p{position:absolute;left:0;top:58px;width:100%;height:100%;background:#fff;padding:1rem;height:auto;display:flex;height:0;flex-flow:row wrap;z-index:0;overflow-x:scroll}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks li p{width:-webkit-fill-available}}.ulLinks li p span{width:min-content;display:flex;flex-flow:row wrap;align-content:center;margin-right:1rem;min-width:22%}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks li p span{width:100%;max-width:min-content;min-width:min-content}}.ulLinks li p a{width:100%;margin:6px;font-size:12.6px;color:#3f51b5;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block;float:left;line-height:16px}@media screen and (min-width:320px) and (max-width:1023px){.ulLinks li p a{padding:10px 0;margin:0}}</style><style>@charset "UTF-8";@media (min-width:1023px){aside{display:block;float:left;width:25%;z-index:9999;position:fixed;max-width:450px;left:0;top:15px;background:#fff;height:100%;border-right:solid 1px rgba(0,0,0,.16);box-shadow:0 0 10px rgba(0,0,0,.07)}}@media screen and (min-width:1023px) and (max-width:1447px) and (min-width:1100px){aside{width:27.5%}}@media screen and (min-width:1023px) and (max-width:1160px) and (min-width:1023px){aside{width:30%}aside nav.footer{width:100%}aside .box-footer{width:100%}aside a.logo{width:46%}}@media (min-width:1023px){aside.top_z{top:0}aside .lista_bairros_cidades{display:block;float:left;width:100%;padding-bottom:0;z-index:9;position:relative}aside .lista_bairros_cidades span.btRemove{background:rgba(8,8,8,.73);padding:6px 15px;padding-right:30px;color:#fff;font-size:11px;position:relative;z-index:9;font-weight:600;border-radius:4px;display:flex;float:left;cursor:pointer;margin-left:2px;margin-top:5px}aside .lista_bairros_cidades span.btRemove i{font-style:normal}aside .lista_bairros_cidades span.btRemove:hover{background:#3f51b5}aside .lista_bairros_cidades span.btRemove:hover:after{color:#fff}aside .lista_bairros_cidades span.btRemove:after{content:"\e921";color:rgba(255,255,255,.37);font-family:Icomoon;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;right:10px;top:8px;font-size:10px;font-weight:100}aside .lista_bairros_cidades p{width:100%;text-transform:uppercase;font-size:12px;color:#3f51b5;font-weight:600;margin-bottom:5px;display:block}aside .lista_bairros_cidades p i{color:#3f51b5}aside .lista_bairros_cidades .msg{display:none}aside .m-container{position:relative;width:100%;display:block;float:left;border-right:solid 2px #fff}}@media screen and (min-width:1023px) and (max-width:1600px) and (min-width:1023px){aside .m-container{padding:0}}@media (min-width:1023px){aside .m-container.fixed{width:100%}aside .m-container.fixed .box-container.navigation-f{display:block}aside .m-container .box-container{position:relative;display:block;float:left;width:100%}aside .m-container .box-container .bt_paginacao{display:none}aside .m-container .box-container .menu_paginacao{display:block;float:left;width:100%;padding:8px 2em;position:relative;transition:transform .2s ease-in}aside .m-container .box-container .menu_paginacao label{text-transform:uppercase;font-size:12px;color:#717171;font-weight:600;display:block;width:100%;text-align:right;float:right;position:relative}}@media screen and (min-width:1023px) and (min-width:320px) and (max-width:1023px){aside .m-container .box-container .menu_paginacao label{display:block;float:left;width:100%;padding:8px;font-size:12px}}@media (min-width:1023px){aside .m-container .box-container .menu_paginacao label span.drop-down{color:#3f51b5;cursor:pointer}aside .m-container .box-container .menu_paginacao label span.drop-down:after{content:'\e912';font-family:icomoon;position:absolute;right:-13px;top:1px;display:block;font-size:7px;font-weight:800;-webkit-text-stroke:.8px;transform:rotate(90deg);color:#3f51b5;transition:transform .2s ease-in}aside .m-container .box-container .menu_paginacao.open label ul.paginacao-scroll{position:absolute;right:-18px;background:#fff;width:auto;display:flex;padding:1em;top:-17px;border-radius:6px}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll{display:none;float:right;width:auto;margin-top:7px}}@media screen and (min-width:1023px) and (min-width:320px) and (max-width:1023px){aside .m-container .box-container .menu_paginacao ul.paginacao-scroll{display:flex}}@media (min-width:1023px){aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li{padding:6px 15px;background:#f3f3f3;cursor:pointer;margin-left:2px;text-transform:uppercase;font-size:13px;font-weight:600;cursor:pointer}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li:first-child{margin-left:0}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li.bt-close{position:absolute;left:-15%;border-radius:60px;cursor:pointer;top:11px;background:#4a4a4a;font-size:13px;padding:12px}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li.bt-close:hover{background:#4a4a4a}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li.bt-close i{position:absolute;transform:rotate(45deg);color:#ddd;top:6px;left:6px}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li.current{background:#3f51b5;color:#ffff}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li.current:hover{background:#3f51b5}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li:hover{background:#eaeaea}aside .m-container .box-container .menu_paginacao ul.paginacao-scroll li span{font-size:12px}aside .m-container .box-container .menu_paginacao.active{padding:15px 2.2em}aside .m-container .box-container .menu_paginacao.active label span.drop-down{color:#3f51b5}aside .m-container .box-container .menu_paginacao.active label span.drop-down:after{content:''}aside .m-container .box-container .menu_paginacao.active label ul.paginacao-scroll{float:right;display:flex;width:auto;margin-top:7px;position:relative;top:0;box-shadow:none;right:0;padding:0;border-radius:0;min-width:100%;justify-content:flex-end}aside .m-container .box-container .menu_paginacao.active label ul.paginacao-scroll li.bt-close{display:none}aside .m-container .box-container .menu_paginacao.active:hover label span.drop-down:after{content:'';transform:rotate(270deg);transition:transform .2s ease-in}aside .m-container .box-container.filtros-top{padding:1em 1.5em;padding-bottom:5px;max-height:90vh;overflow-y:auto}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container.filtros-top{padding:0 2em;padding-bottom:5px}}@media screen and (min-width:1023px) and (max-width:1160px) and (min-width:1023px){aside .m-container .box-container.filtros-top{padding:.5em}}@media screen and (min-width:1023px) and (max-width:1023px){aside .m-container .box-container.filtros-top{max-height:100vh}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros{display:block;float:left;width:100%;background:#fff;position:relative}aside .m-container .box-container.filtros-top .filtros .top-mobile{display:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form{padding-bottom:2em;border-top:none}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form{padding:12px;padding-bottom:2em}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form{-webkit-appearance:none;-moz-appearance:none;overflow:auto;padding-bottom:1em;overflow:auto;overscroll-behavior:contain;-webkit-overflow-scrolling:touch;padding-top:0}}@media (min-width:1023px) and (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form::-webkit-scrollbar{display:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form::-webkit-scrollbar-track{-webkit-border-radius:10px;border-radius:10px;border:solid 1px #ddd}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form::-webkit-scrollbar-thumb{-webkit-border-radius:10px;border-radius:10px;background:rgba(12,12,12,.55)}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form::-webkit-scrollbar-thumb:window-inactive{background:rgba(12,12,12,.2)}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links{display:block;width:100%;margin-bottom:5px;float:left;padding:0 0}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links{display:block;width:100%;float:left}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul.imoveis{display:block;width:100%;float:left;background:#fff}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul li{width:32.333%;float:left;height:46px;margin-left:1.33%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul li:first-child{margin-left:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul li:last-child{border-right:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul li:last-child a{padding:9px 20px;line-height:14px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul li a{text-transform:uppercase;text-decoration:none;padding:12px 0;text-align:center;width:100%;height:46px;display:block;color:#353535;background:#ffda8d;font-size:12px;font-weight:600;line-height:21px;letter-spacing:.4px;box-shadow:0 2px #e6c580;border-radius:6px;border:solid 1px #f1cb7b}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul li a.selected{color:#fff;box-shadow:0 2px #263380;border-radius:7px;border:solid 1px #3f51b5;background:#3f51b5}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul.veiculos{border-top:none;border-right:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul.veiculos li{border-top:solid 1px #ddd;border-right:solid .5px #ddd;width:50%;border:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form .links ul.veiculos li a{padding:16px 0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset{display:block;float:left;width:100%;position:relative;padding:10px 0;padding-bottom:5px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.cidades-c{padding-bottom:0}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset{display:block;float:left;width:100%;position:relative;padding:10px 0;padding-bottom:10px}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset .filtro-a-aplicar span{background:#3f51b5;padding:6px 6px;padding-right:23px;color:#fff;font-size:12px;position:relative;z-index:9;font-weight:600;border-radius:4px;display:flex;float:left;cursor:pointer;margin-left:2px;margin-bottom:5px;margin-top:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset label{display:block;width:100%;margin-bottom:5px;text-align:left;font-size:13px;letter-spacing:.19px;color:#353535;font-weight:600;position:relative}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset label.cidade{margin-bottom:5px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input{height:46px;color:#353535;padding-left:1em;font-size:14px;font-weight:600}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input:focus{outline:0;box-shadow:0 4px 17px -10px #ddd}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input.fieldBusca{width:100%;margin-top:6px;border:solid 1px #ddd;border-radius:6px;box-shadow:0 4px 10px -8px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input.fieldBusca::-webkit-input-placeholder{color:#717171;font-weight:400}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input.fieldBusca::-moz-placeholder{color:#717171;font-weight:400}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input.fieldBusca:-ms-input-placeholder{color:#717171;font-weight:400}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input.fieldBusca:-moz-placeholder{color:#717171;font-weight:400}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset input.erroBuscaAno{background:#f16464;border:0;color:#fff;transition:all .2s ease-in;width:100%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a{text-decoration:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.fieldBuscaBtn{display:block;position:absolute;width:15%;border-left:solid 1px #ddd;text-align:center;height:46px;padding-top:11px;bottom:0;right:0;line-height:26px;color:#353535}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btRemover{background:#f5d2d2;text-align:center;width:100%;display:block;float:left;margin-top:10px;padding:10px;text-transform:uppercase;font-size:12px;font-weight:600;color:#bb4545}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btRemover i{margin-left:10px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btRemover i:before{position:absolute;transform:rotate(45deg);color:#ce7070}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btAdd{display:block;float:left;width:100%;text-align:center;padding:12px 0;background:#efefef;color:#3f51b5;text-transform:uppercase;font-size:13px;font-weight:600;margin-top:1em;display:block;outline:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btAdd:focus{outline:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btAdd:hover{background:#f3f3f3}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset a.btAdd i{margin-left:10px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select{z-index:999}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .term-list{width:100%;height:auto;max-height:250px;overflow-x:auto;z-index:99;padding:0;margin:0;position:absolute;top:100%;left:0;background-color:#fff;box-shadow:rgba(0,0,0,.36) 0 6px 12px -13px,rgba(0,0,0,.15) 0 1px 4px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .term-list li{padding:15px 1em;cursor:pointer;text-align:left;border-bottom:solid 1px #ddd;line-height:normal;background-color:#fafafa;background-color:#fff;font-size:15px;text-transform:uppercase;color:#353535;font-weight:400;letter-spacing:.4px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .term-list li.not-up{text-transform:none!important;letter-spacing:0!important}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .term-list li.not-up strong{text-transform:uppercase!important}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .term-list strong{font-weight:700}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .hidden{display:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block{background-color:#fff;width:100%;position:relative;transition:.3s ease-out}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.raio{border-left:solid 1px #ddd;min-width:105px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.raio .active-list:after{font-size:10px;width:auto;right:7px;height:auto;background:0 0!important}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.raio .active-list:hover:after{background:0 0!important;top:54%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.raio .drop-down-list li.option{text-transform:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block label{position:absolute;left:0;top:32px;height:20px;width:100%;transition:all .3s ease-out;margin:0;font-weight:500;z-index:1;color:#939393;font-size:12px;line-height:10px;white-space:nowrap;overflow:hidden}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .active-list{width:100%;height:46px;line-height:45px;padding:0;position:relative;z-index:2;cursor:pointer;white-space:nowrap;overflow:hidden;padding-right:30px;box-sizing:border-box;text-align:left;padding-left:1.5em;font-size:13px;text-transform:uppercase;color:#353535;font-weight:600;letter-spacing:.4px;border:solid 1px #ddd;border-radius:6px;box-shadow:0 4px 10px -8px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .active-list:before{content:'';width:1px;height:100%;position:absolute;background:#ddd;right:14.5%;top:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .active-list:after{content:"\e912";font-family:Icomoon;position:absolute;right:5%;background-color:#fff;top:31%;width:16px;height:16px;line-height:initial;padding-left:0;text-align:left;font-size:14px;margin-top:0;transition:transform .2s ease;color:#353535}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.added label{top:0;font-size:13px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.added .active-list{color:#353535;font-size:13px;text-transform:uppercase}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.added.focus label{top:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.focus label{top:0;font-size:13px;color:#ff7427}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.focus .active-list{font-size:13px;text-transform:uppercase;background:#fff}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.focus .active-list:after{background:#fff}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.focus .custom-select{border-color:#fff}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.focus .active-list:after{content:"\e912";color:#3c3c3c;font-family:Icomoon;transform:rotate(90deg);-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg);transition:transform .2s ease;color:#ff7427}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block.focus .custom-select::before{left:0;width:100%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select{display:inline-block;height:40px;position:relative;padding:0;width:100%;line-height:40px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select::before{content:'';position:absolute;left:50%;width:0;bottom:0;height:2px;transition:all .3s ease-out;background-color:#ff7427}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .list-field{width:100%;height:40px;padding:0 15px;position:absolute;top:0;left:0;display:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list{width:100%;height:auto;max-height:247px;overflow-x:auto;z-index:99;padding:0;margin:0;position:absolute;top:109%;left:0;display:none;background-color:#fff;border:solid 1px #ddd}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li{padding:12px 1em;cursor:pointer;text-align:left;border-bottom:solid 1px #ddd;line-height:normal;background-color:#fff;text-transform:uppercase;color:#353535;font-weight:600;letter-spacing:.4px;padding-left:2em;font-size:13px;transition:all .3s ease-out}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.all{background:#fff}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.all.high{font-style:italic;font-size:16px;font-weight:400;color:#888;background:#f3f3f3;text-transform:none;padding:7px 16px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.residencial.high{font-style:italic;font-size:17px;color:#ff7427;background:#fff;text-transform:none;padding:7px 16px;font-weight:600;letter-spacing:0;border-top:solid 1px #ff7427}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.comercial.high{font-style:italic;font-size:16px;font-weight:400;color:#888;background:#f3f3f3;text-transform:none;padding:7px 16px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li i{font-size:26px;margin-right:15px;line-height:7px;top:5px;position:relative}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li input[type=checkbox]{margin:0;margin-right:8px;position:relative;top:1px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li label{font-weight:400;cursor:pointer;display:block}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li:hover{color:#ff7427;background:rgba(255,120,0,.08)}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list .add-new{border-top:solid 1px #c8c8c8;padding:15px;color:#3c3c3c}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list .add-new i{font-size:16px;margin-top:3px;color:#939393}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select select{display:block;float:left;width:100%;border:solid .5px #ddd;font-size:16px;text-transform:uppercase;position:relative;background:#fff;-webkit-appearance:none;-moz-appearance:none;padding:12px;border-radius:0;padding-left:15px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select select:focus{outline:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select label.select span{position:absolute;right:0;width:15%;border-left:solid 1px #ddd;height:45px;right:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.select label.select span.right{right:3%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector{z-index:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area{margin-bottom:1em;padding:1em}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area.acc{padding:0;margin-bottom:0;padding-top:14px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc{width:100%;text-align:left;position:relative;cursor:pointer;padding:12px 20px;border-top:solid 1px rgba(255,255,255,.23);margin-bottom:0;border-bottom:solid 1px rgba(0,0,0,.01)}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc{padding:10px 0}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc.active:after{transform:rotate(90deg)}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc:after{content:"\e912";font-family:Icomoon;float:right;color:#636363;width:20px;font-size:10px;height:20px;font-weight:600;-webkit-text-stroke:.3px;line-height:20px;text-align:center;transition:transform .11s ease-in}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector.area label{width:38%;float:left;text-align:center;padding-top:1.3em;margin-right:5%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector label{margin-bottom:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input.fieldArea{padding-left:20%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input{outline:0;height:40px;font-weight:600;font-size:16px!important;color:#3f51b5}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input.formata-valor{padding-left:30%;padding-top:3px;position:relative;width:100%;margin-top:5px;border:none;overflow:hidden;color:#3f51b5;font-weight:600;letter-spacing:-.4px;border:solid 1px #f3f3f3;border-radius:6px;box-shadow:0 4px 10px -8px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input[type=number]{border:1px solid #ddd;text-align:left;font-size:16px;font-weight:600;padding-left:45px;color:#3f51b5;padding-bottom:0;-moz-appearance:textfield}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input[type=number]::-webkit-inner-spin-button,aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;-moz-appearance:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input[type=number]:invalid,aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector input[type=number]:out-of-range{border:2px solid tomato}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .doubleField{display:block;border:solid 1px #f1f1f1;float:left;padding:10px;margin-top:9px;width:100%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox{display:block;float:left;width:48%;position:relative}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox:first-child:before{content:'';width:5%;height:0;border-bottom:solid 2px #ff7427;display:block;position:absolute;right:-5%;top:53%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox:nth-child(2){margin-left:2%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox .fieldLabel{display:block;float:left;position:absolute;background:rgba(0,90,166,0);padding:13px;bottom:0;text-transform:uppercase;font-size:14px;font-weight:600;color:#525252}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox input{padding-left:34%;padding-top:5px;width:100%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .ValueField{display:block;float:left;width:48%;position:relative}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .ValueField:nth-child(2){margin-left:2%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .ValueField span.fieldValMaxMin{display:block;float:left;position:absolute;background:rgba(0,90,166,.16);padding:11px;bottom:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .ValueField span.fieldValMax{display:block;float:left;position:absolute;background:rgba(0,90,166,.16);padding:11px;bottom:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .ValueField input{padding-left:31%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector select{display:block;float:left;width:100%;border:solid .5px #ddd;font-size:16px;text-transform:uppercase;-webkit-appearance:none;-moz-appearance:none;padding:12px;border-radius:0;padding-left:15px;margin-top:5px;background:0 0;position:relative;z-index:9}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector select:focus{outline:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector label.select span{position:absolute;right:0;width:15%;border-left:solid 1px #ddd;height:42px;font-size:20px;bottom:0;top:5px;text-align:center;padding:12px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector span.icon_area{position:absolute;right:0;bottom:0;padding:8px 12px;background:rgba(0,90,166,.11);font-size:22px;color:#3f51b5}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector span.metrics{position:absolute;left:0;bottom:0;padding:8px;background:rgba(75,75,76,.11);font-size:22px;color:#292929}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider{margin:auto;text-align:center;position:relative;height:auto;width:100%;display:block;float:left}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider.area{padding:0;float:right;width:49%;border:none;margin:0;margin-bottom:1em}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results{padding-left:1em}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results span{width:100%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results span small{top:26%;font-size:14px;right:16px;color:#3f51b5;left:inherit}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results span .metric-range{padding-left:1em;color:#3f51b5;font-weight:600;letter-spacing:-.4px;width:100%;border:solid 1px #f3f3f3;border-radius:6px;box-shadow:0 4px 10px -8px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results{display:block;width:100%;float:left}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span{color:#353535;font-weight:600;margin-right:7px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span:last-child{margin-right:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span small{font-weight:600;color:#525252}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span:first-child:before{content:'';width:5%;height:0;border-bottom:solid 2px #ff7427;display:block;position:absolute;right:-5%;top:65%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results span{font-size:13px;color:#3f51b5;font-weight:600;display:block;float:left;width:48%;position:relative;text-align:left}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results span small{position:absolute;top:50%;font-size:14px;line-height:21px;left:14px;color:#3f51b5;z-index:9;text-transform:none}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons{border:solid 1px #f3f3f3;padding:0;border-radius:6px;overflow:hidden;margin-top:10px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group{display:flex;flex-wrap:wrap;margin-bottom:.5em;flex-direction:row;justify-content:left;margin-bottom:10px;padding:0 1em}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group i{font-size:31px;display:block;float:left;position:relative;width:15%;color:#353535;text-align:left;line-height:36px;margin-right:4%}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group i.icon-bed{font-size:28px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container{position:relative;height:37px;width:18%;margin:auto}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container:first-child{margin-left:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-button{opacity:0;position:absolute;top:0;left:0;height:100%;width:100%;margin:0;cursor:pointer}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile{display:flex;flex-direction:column;align-items:center;justify-content:center;width:100%;height:100%;cursor:pointer;background:#fff;border:solid 1px #f3f3f3;box-shadow:0 4px 10px -8px;border-radius:4px;transition:transform .3s ease}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile-label{text-align:center;font-size:14px;font-weight:600;text-transform:uppercase;letter-spacing:1px;color:#353535;display:block;float:left;width:100%;cursor:pointer;margin:0;position:absolute;height:100%;top:26%;left:0}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile-label small{font-size:16px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-button:checked+.radio-tile{background-color:#3f51b5;border:2px solid #3f51b5;cursor:pointer;transform:scale(1.1,1.1);-ms-transform:scale(1.1,1.1);-webkit-transform:scale(1.1,1.1)}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-button:checked+.radio-tile .radio-tile-label{color:#fff;cursor:pointer}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .bt-acc-container{display:none;width:100%;float:left}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons .bt-acc-container.active{display:block}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc{width:33.3%;float:left;display:block;padding:13px 0;text-align:center;background:#f3f3f3;color:#353535;border:solid 1px #fff;cursor:pointer}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc:hover{background:#eaeaea}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc.active{background:#fff;color:#3f51b5}aside .m-container .box-container.filtros-top .filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc small{padding:4px;font-size:12px;font-weight:800;color:#3f51b5;letter-spacing:.3px}aside .m-container .box-container.filtros-top .filtros .filters .filters-form .apply-filter{display:block}aside .m-container .box-container.filtros-top .filtros .filters .filters-form .lista_bairros_cidades{display:block}aside .m-container .box-container.filtros-top .filtros .filters .filters-form .links{display:block}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter{width:100%;background:#b5b5b5;color:#fff;border-radius:6px;text-align:center;position:absolute;bottom:0;text-transform:uppercase;font-weight:600;font-size:16px;height:auto;left:0;padding:1em;border-top:0;float:left;text-decoration:none;box-shadow:0 3px #a7a6a6}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter.active{background:#ff7427;box-shadow:0 4px 0 0 #ec651c}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter{padding:1em}}@media (min-width:1023px){aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter.focus{outline:0}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter.loading span{opacity:1;transition:opacity .2s ease-in}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter.loading span #load{display:inline-block}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter span{display:block;position:absolute;width:100%;height:100%;padding-top:8px;border-radius:6px;left:0;text-align:center!important;top:0;background:#ff7427;opacity:0;transition:opacity .2s ease-in;box-shadow:0 4px 0 0 #ec651c}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter #load{width:30px;display:none;animation:loading 3s linear infinite}aside .m-container .box-container.filtros-top .filtros .filters a.apply-filter #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:20;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#fff;fill:transparent}@keyframes loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes loading-circle{0%{stroke-dashoffset:0}100%{stroke-dashoffset:-600}}aside .m-container .box-container.navigation-f{display:block;float:left;width:100%;background:#fff;position:relative;border-bottom:solid 1px #f3f3f3;padding:0}aside .m-container .box-container.navigation-f span.logo{display:block;float:left;width:35%;text-align:left;padding-left:1em}aside .m-container .box-container.navigation-f span.logo a{display:block;float:left;width:100%;text-align:center;height:40px}aside .m-container .box-container.navigation-f span.logo a img{width:100px;margin-top:8px}aside .m-container .box-container.navigation-f .bt-header-m{display:block;float:left;width:14%;cursor:pointer;text-align:center;height:46px;line-height:53px;overflow:hidden;position:relative}aside .m-container .box-container.navigation-f .bt-header-m.logged a i{color:#3f51b5}aside .m-container .box-container.navigation-f .bt-header-m:hover .count-fav{transform:scale(1);transition:transform .2 ease-in}aside .m-container .box-container.navigation-f .bt-header-m a{text-decoration:none}aside .m-container .box-container.navigation-f .bt-header-m i{font-size:23px;color:#565656;font-weight:500;margin-bottom:7px;margin-top:7px}aside .m-container .box-container.navigation-f .bt-header-m small{display:none;text-transform:uppercase;font-size:12px;font-weight:600;color:#565656}aside .m-container .box-container.navigation-f .bt-header-m .count-fav{transform:scale(.9);background:#ff7427;color:#fff;text-align:center;width:20px;display:none;height:20px;border-radius:60px;font-size:12px;padding-top:6px;position:absolute;left:0;line-height:7px;font-weight:600;top:3px;transition:transform .2 ease-in}aside .m-container .box-container.navigation-f .bt-header-m .count-fav.anm{animation-name:fav-m;animation-duration:.3s;animation-timing-function:linear}@keyframes fav-m{0%{transform:scale(1)}50%{transform:scale(1)}100%{transform:scale(1)}}aside .m-container .box-container .filter-btn{width:50%;text-align:center}aside .m-container .box-container .fav-btn{background-color:#fff;padding:11px 1em;cursor:pointer;margin:0;text-transform:uppercase;font-weight:600;color:#353535;letter-spacing:.2px;font-size:14px;position:relative;width:100%;display:none;float:left;height:46px;overflow:hidden}aside .m-container .box-container .fav-btn i{font-weight:600;margin-right:10px;color:#b9b9b9}aside .m-container .box-container .fav-btn i.icon-next{color:#b9b9b9}aside .m-container .box-container .fav-btn .count-fav{transform:scale(1);background:#ff7427;color:#fff;text-align:center;width:24px;display:none;height:24px;border-radius:60px;font-size:13px;padding-top:6px;position:absolute;left:135px;top:7px}aside .m-container .box-container .fav-btn .count-fav.anm{animation-name:fav-m;animation-duration:.3s;animation-timing-function:ease-in-out}@keyframes fav-m{0%{transform:scale(1)}50%{transform:scale(1.5)}100%{transform:scale(1)}}aside .m-container .box-container .fav-btn:after{content:"\e912";font-family:Icomoon;float:right;font-size:1em;color:#717171;width:20px;height:20px;line-height:20px;text-align:center;transition:transform .11s ease-in}aside .m-container .box-container .fav-btn.is-opened:after{transform:rotate(90deg);transition:transform .11s ease-in}aside .m-container .box-container .save-btn{background-color:#fff;padding:18px 2em;cursor:pointer;margin:0;text-transform:uppercase;font-weight:600;color:#353535;letter-spacing:.2px;font-size:14px;position:relative;width:100%;display:none;float:left;overflow:hidden;border-top:solid 1px rgba(0,0,0,.07)}aside .m-container .box-container .save-btn i{font-weight:600;margin-right:10px;color:#b9b9b9}aside .m-container .box-container .save-btn i.icon-next{float:right;margin-right:0;color:#b9b9b9}aside .m-container .box-container .save-btn.is-opened:after{transform:rotate(90deg);transition:transform .11s ease-in}aside .m-container .box-container .save-btn:after{content:"\e912";font-family:Icomoon;float:right;font-size:1em;color:#717171;width:20px;height:20px;line-height:20px;text-align:center;transition:transform .11s ease-in}aside .m-container .box-container .filter-btn{background-color:#fff;padding:12px 1em;line-height:20px;cursor:pointer;margin:0;text-transform:uppercase;font-weight:600;color:#404040;letter-spacing:.2px;font-size:13px;position:relative;width:60%;height:46px;display:block;text-align:left;overflow:hidden;width:15%;font-size:19px;border:solid 1px #5454541c;padding:0;text-align:center;padding-top:14px;float:right;border-right:0}aside .m-container .box-container .filter-btn.bt-ativo{border-bottom:none}aside .m-container .box-container .filter-btn i{font-weight:600;margin-right:10px;color:#ff7427}aside .m-container .box-container .filter-btn i.icon-next{float:right;margin-right:0;color:#353535;display:none}aside .m-container .box-container .filter-btn.is-opened:after{transform:rotate(90deg);transition:transform .11s ease-in}aside .m-container .box-container .order-btn{display:block;float:right;width:23%;text-align:center;height:46px;text-transform:uppercase;font-weight:600;font-size:14px;color:#353535;cursor:pointer;position:relative;-webkit-appearance:none;-moz-appearance:none;right:0;overflow:hidden;border-left:solid 1px #f3f3f3}aside .m-container .box-container .order-btn:after{content:'';position:absolute;right:7%;top:42%;display:block;width:0;height:0;border-style:solid;border-width:6.7px 5px 0 5px;border-color:#ff7427 transparent transparent transparent}aside .m-container .box-container .order-btn p{font-size:12px;text-transform:uppercase;font-weight:600;color:#353535;margin-bottom:.5em}aside .m-container .box-container .order-btn span{position:absolute;right:1em;top:23px;text-transform:uppercase;font-size:12px;font-weight:600;color:#717171;z-index:-1}aside .m-container .box-container .order-btn select.btn-order-trigger{display:block;width:100%;float:left;color:#717171;font-weight:600;font-size:10px;text-transform:uppercase;background:0 0;-webkit-appearance:none;-moz-appearance:none;height:46px;outline:0;text-align:left;padding:10px;border:none;white-space:normal;align-items:center}aside .m-container .box-container .order-btn select.btn-order-trigger:focus{outline:0}aside .m-container .box-container .order-btn select.btn-order-trigger option{color:#000;padding-left:0}aside .m-container .box-container .order-btn i.icon-order{position:absolute;left:19px;top:30%;z-index:-1}aside .m-container .box-container .order-btn i.icon-next{position:absolute;top:0;right:1em}aside .m-container .box-container .order-btn label{position:relative;color:#353535;z-index:9;width:100%;outline:0;margin:0;float:left;text-align:center;padding-top:0}aside .m-container .box-container .order-btn label small{display:block;position:absolute;width:100%;text-align:center;line-height:40px;z-index:-1;left:.5em;font-size:13px}aside .m-container .box-container .btn-mobile.bt-ativo{color:#353535!important}aside .m-container .box-container .btn-mobile.bt-ativo i{color:#ff7427!important}aside .m-container .box-container .btn-mobile.bt-ativo:after{transform:rotate(90deg)!important;color:#ff7427!important}aside .m-container .box-container .m-content{display:none;float:left}aside .m-container .box-container .m-content.save-content-c{display:none}aside .m-container .box-container .m-content .top-mobile{display:none}aside .m-container .box-container .m-content.save-content-c .save-content{padding:1em;padding-top:1em;display:block;float:left}aside .m-container .box-container .m-content.save-content-c .save-content h3{display:block;float:left;width:100%;font-size:18px;line-height:24px;color:#717171;padding-bottom:1em}aside .m-container .box-container .m-content.save-content-c .save-content h3 b{font-weight:600;color:#3f51b5}aside .m-container .box-container .m-content.save-content-c .save-content h3 span._qtd{font-weight:600}aside .m-container .box-container .m-content.save-content-c .save-content .menu_paginacao{border-top:solid 1px #f3f3f3;display:block;float:left;width:100%;padding-top:1em}aside .m-container .box-container .m-content.save-content-c .save-content .menu_paginacao label{font-size:12px;text-transform:uppercase;font-weight:600;color:#3f51b5;margin-bottom:.5em;text-align:left}aside .m-container .box-container .m-content.save-content-c .save-content ul.paginacao-scroll{display:inline-block;float:left;width:100%;padding-top:.5em;padding-bottom:0;text-align:left;margin:auto}aside .m-container .box-container .m-content.save-content-c .save-content ul.paginacao-scroll li{width:15%;text-align:center;display:inline-block;margin-left:1%;margin:auto;cursor:pointer;text-decoration:none;color:#3f51b5;padding:12px;font-size:14px;font-weight:600;letter-spacing:.2px;border-radius:4px;border:solid 1px #3f51b5}aside .m-container .box-container .m-content.save-content-c .save-content ul.paginacao-scroll li:first-child{margin-left:0}aside .m-container .box-container .m-content.save-content-c .save-content ul.paginacao-scroll li:hover{color:#fff;background:#3f51b5}aside .m-container .box-container .m-content.save-content-c .save-content ul.paginacao-scroll li.current{color:#fff;background:#3f51b5;min-width:82px}aside .m-container .box-container .m-content.save-content-c .save-content ul.paginacao-scroll li.bt-close{display:none}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades{display:none;float:left;width:100%;padding:1em 0;background:#fff;border:solid 1px rgba(220,220,220,.57);border-left:none;border-right:none}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades p{font-size:12px;text-transform:uppercase;font-weight:600;color:#3f51b5;margin-bottom:.5em}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades p i{display:none}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove{background:#3f51b5;padding:5px 15px;padding-right:30px;color:#fff;font-size:12px;position:relative;z-index:9;font-weight:600;border-radius:23px;display:flex;float:left;cursor:pointer;margin-left:5px;margin-bottom:4px}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove i{font-style:normal}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove:hover{background:#ff7427}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove:hover:after{color:#fff}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove:after{content:"\e921";color:rgba(255,255,255,.37);font-family:Icomoon;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;right:10px;top:8px;font-size:10px;font-weight:100}aside .m-container .box-container .m-content.save-content-c .save-content .lista_bairros_cidades .msg{display:none}aside .m-container .box-container .m-content.save-content-c .save-content span.order{display:block;float:right;width:100%;text-align:center;background:#fff;text-transform:uppercase;font-weight:600;font-size:14px;cursor:pointer;position:relative;overflow:hidden;padding-top:1em;border-top:solid 1px #f3f3f3}aside .m-container .box-container .m-content.save-content-c .save-content span.order p{font-size:12px;text-transform:uppercase;font-weight:600;color:#3f51b5;margin-bottom:.5em;text-align:left}aside .m-container .box-container .m-content.save-content-c .save-content span.order span{position:absolute;right:0;top:12px;text-transform:uppercase;font-size:12px;font-weight:600;color:#b1aeac;z-index:-1;border:solid 1px #ddd;padding:5px}aside .m-container .box-container .m-content.save-content-c .save-content span.order select.btn-order-trigger{display:inline-block;width:100%;margin:0 auto;float:none;padding:12px 0;color:#3f51b5;text-align:center;font-weight:600;font-size:12px;text-transform:uppercase;margin-left:0;background:0 0;padding-left:3em;-webkit-appearance:none;-moz-appearance:none;height:48px;outline:0;border:none;border-radius:0}aside .m-container .box-container .m-content.save-content-c .save-content span.order select.btn-order-trigger:focus{outline:0}aside .m-container .box-container .m-content.save-content-c .save-content span.order select.btn-order-trigger option{color:#000;padding-left:0}aside .m-container .box-container .m-content.save-content-c .save-content span.order i.icon-order{position:absolute;left:1em;top:36%;z-index:-1;color:#3f51b5}aside .m-container .box-container .m-content.save-content-c .save-content span.order i.icon-next{position:absolute;top:0;right:1em}aside .m-container .box-container .m-content.save-content-c .save-content span.order label{position:relative;color:#353535;z-index:9;width:100%;outline:0;margin:0;float:left;text-align:center;padding-top:0}aside .m-container .box-container .m-content.save-content-c .save-content span.order label small{display:none}aside .m-container .box-container .m-content.save-content-c .save-content .save-search-bt{display:block;float:left;cursor:pointer;width:100%;padding:18px 0;border:solid 1px #fff;text-align:center;text-transform:uppercase;font-size:14px;font-weight:600;color:#fff;-webkit-appearance:none;-moz-appearance:none;font-family:lato;margin-bottom:2%;margin-top:2%;background:#ff7427}aside .m-container .box-container .m-content.save-content-c .save-content .btn-50{display:block;float:left;width:100%;text-align:center;padding:16px 13px;text-transform:uppercase;font-size:13px;font-weight:600;letter-spacing:.2px;color:#717171;border:solid 2px #ddd;position:relative}aside .m-container .box-container .m-content.save-content-c .save-content .btn-50.bt-salvar-mg{margin-right:0}aside .m-container .box-container .m-content.save-content-c .save-content .btn-50 small{position:absolute;background:#ff7427;color:#fff;width:22px;font-size:11px;border-radius:60px;height:22px;line-height:22px;right:-11px;top:-4px}aside .m-container .box-container .m-content.save-content-c .save-content .label-box{font-size:12px;text-transform:uppercase;font-weight:600;margin-bottom:5px;display:block;float:left;color:#3f51b5}aside .m-container .box-container .m-content.save-content-c .save-content .minha-busca{display:block;float:left;width:100%;border:solid 1px #ddd;padding:1em;box-shadow:0 0 10px -11px #000}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg{position:absolute;z-index:9999;width:100%;background:#fff;height:100%;left:0;top:0;display:none}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg.ativo{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb{padding:1.5em;text-align:center;display:block}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg{display:block;float:left;width:100%}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg i{font-size:75px;color:#ff7427;display:block}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg h3{font-size:18px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;color:#353535;padding-top:1em}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg p{display:block;float:left;font-size:16px;padding:0 1em;line-height:18px}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.cta2{display:block;float:left;width:100%;margin-top:2em;font-size:16px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;border:solid 2px;padding:1em;text-decoration:none;color:#3f51b5;position:relative}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.cta2 small{background:#f70;color:#fff;padding-top:9px;border-radius:60px;font-size:12px;font-weight:600;position:absolute;top:-12px;width:30px;height:30px;left:-10px}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.ghost{display:block;margin-top:.5em;padding:1em;cursor:pointer;float:left;text-align:center;width:100%;font-size:14px;border:solid 2px #ddd;text-transform:uppercase;font-weight:600;letter-spacing:.2px;color:#717171}aside .m-container .box-container .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.link{display:block;float:left;text-align:center;width:100%;padding:1em;color:#3f51b5;text-decoration:underline;margin-top:1em}aside .m-container .box-container .m-content.favoritos-aside{width:100%;float:left;height:100%;position:relative;top:0;left:0}aside .m-container .box-container .m-content.favoritos-aside .top-mobile{display:block;position:relative;float:left;width:100%;margin-bottom:10px}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.close{display:none}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.back-f-desk{display:block;float:left;background:#ffdb88;padding:1em;border-radius:3px;text-transform:uppercase;cursor:pointer;font-size:12px;font-weight:600;letter-spacing:.2px;color:#353535}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.back-f-desk:hover{background:#ffdf95}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.back-f-desk i{width:12px;height:12px;display:block;float:left;margin-right:5px;position:relative}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.back-f-desk i:before{position:absolute;transform:rotate(180deg);font-size:10px;-webkit-text-stroke:.5px}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.ttl-mobile{display:block;float:right;text-transform:uppercase;font-weight:600;font-size:12px;letter-spacing:.2px;color:#353535;line-height:36px}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.ttl-mobile i{font-weight:600;margin-right:5px}aside .m-container .box-container .m-content.favoritos-aside .top-mobile span.ttl-mobile b.count-fav{margin-left:2px;font-size:14px;color:#ff7427}aside .m-container .box-container .m-content.favoritos-aside .empty{display:block;float:left;width:100%;text-align:center;padding:3em 0}aside .m-container .box-container .m-content.favoritos-aside .empty i{font-size:100px;color:#ff7427;margin-bottom:18px;display:block}aside .m-container .box-container .m-content.favoritos-aside .empty>p{font-size:16px;color:#353535;padding:0 22px;line-height:17px;font-weight:500;margin:0;text-align:center;padding:1em}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up{display:block;padding:1em 1em;padding-top:0;float:left;width:100%;overflow:hidden;position:relative;left:0}}@media screen and (min-width:1023px) and (min-width:1600px){aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up{padding:1em 2em}}@media (min-width:1023px){aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up .anuncios-fav{overflow:auto;display:block;float:left;width:100%;padding-bottom:4em;scroll-behavior:smooth;overscroll-behavior:contain}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul{display:block;float:left;width:100%;padding:0;overflow:auto;position:relative;height:100%;left:0;scroll-behavior:smooth;overscroll-behavior:contain;top:0;padding-bottom:3em}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li{display:block;float:left;background:#fff;margin-bottom:5px;width:100%;cursor:pointer;overflow:hidden;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);position:relative;box-shadow:0 5px 22px -10px rgba(0,0,0,.45);border:solid 1px #ddd}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir{display:block;width:48px;right:0;left:inherit;margin:0;border:none;position:absolute;padding:1em 2em;bottom:0;top:inherit;border-radius:60px 0 0;height:48px;text-align:center;text-transform:uppercase;font-size:13px;cursor:pointer;font-weight:600;color:#da2c2c;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);z-index:9;background:#fff7e6}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir i{position:relative;width:100%;height:100%;margin-right:0;font-size:16px;top:0;display:block;line-height:34px}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir i:before{content:"\e921";position:absolute;transform:rotate(45deg);left:0}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir small{display:none}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a{display:block;float:left;width:100%;position:relative;cursor:pointer;min-height:130px;border:solid 5px #fff}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a:hover .infos h3{color:#3f51b5;text-decoration:underline}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a span.img{max-width:40%;height:100%;display:block;position:absolute;background-position:center center;background-repeat:no-repeat;-webkit-background-size:contain;background-size:contain}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a span.img img{display:block;margin:0 auto;height:100%;width:100%;object-fit:cover}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a span.infos{display:block;float:right;width:60%;padding:5px;min-height:120px;position:relative;padding-left:10px}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a span.infos h3{font-size:14px;line-height:19px;display:block;margin-top:1em;color:#717171}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up ul li a span.infos p{position:absolute;bottom:1em;color:#3f51b5;font-size:14px;font-weight:600}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up .btns-favs{display:block;float:left;width:100%;left:0;z-index:999;padding:0 2em;overflow:auto;position:absolute;scroll-behavior:smooth;overscroll-behavior:contain;bottom:0}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up .btns-favs>a{display:block;float:left;width:100%;text-align:center;text-decoration:none;padding:14px;text-transform:uppercase;font-weight:600;position:relative;overflow:hidden}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up .btns-favs>a.cta2{border:solid 2px #ff7427;background:#ff7427;color:#fff;border-radius:6px}aside .m-container .box-container .m-content.favoritos-aside .anuncios-fav-up .btns-favs>a.ghost{color:#a2a2a2;margin-right:2%;border:solid 2px #ddd}}.ui-front{z-index:100}.ui-autocomplete{position:absolute;top:0;left:0;cursor:default}.ui-menu{list-style:none;padding:0;margin:0;display:block;outline:0}.ui-menu .ui-menu{position:absolute}.ui-menu .ui-menu-item{margin:0;cursor:pointer;list-style-image:url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)}.ui-menu .ui-menu-item-wrapper{position:relative;padding:3px 1em 3px .4em}.ui-menu .ui-menu-divider{margin:5px 0;height:0;font-size:0;line-height:0;border-width:1px 0 0 0}.ui-menu .ui-state-active,.ui-menu .ui-state-focus{margin:0}button.ui-button::-moz-focus-inner,input.ui-button::-moz-focus-inner{border:0;padding:0}.ui-widget{font-family:Arial,Helvetica,sans-serif;font-size:1em}.ui-widget .ui-widget{font-size:1em}.ui-widget button,.ui-widget input,.ui-widget select,.ui-widget textarea{font-family:Arial,Helvetica,sans-serif;font-size:1em}.ui-widget.ui-widget-content{border:1px solid #c5c5c5}.ui-widget-content{border:1px solid #ddd;background:#fff;color:#333}.ui-widget-content a{color:#333}.ui-button:focus,.ui-button:hover,.ui-state-focus,.ui-state-hover,.ui-widget-content .ui-state-focus,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-focus,.ui-widget-header .ui-state-hover{background:rgba(255,120,0,.12)!important;color:#ea7003}.ui-widget-overlay{background:#aaa;opacity:.3;filter:Alpha(Opacity=30)}.ui-widget-shadow{-webkit-box-shadow:0 0 5px #666;box-shadow:0 0 5px #666}.ui-widget.ui-widget-content{border:.5px solid #ddd;z-index:999999;background:#f3f3f3;border-top:none;font-family:Lato}@media screen and (min-width:320px) and (max-width:1023px){.ui-widget.ui-widget-content{overflow:auto;height:260px}}.ui-autocomplete-category{background:rgba(216,216,216,.6);padding:1em .5em;color:#717171;font-weight:600;text-transform:uppercase;font-family:Lato;font-size:13px;background:#f3f3f3}.ui-menu .ui-menu-item{width:100%;padding:.5em .5em;border-top:solid .5px #ddd;padding-left:1em;background:#fff;list-style-image:none}.ui-menu-item .ui-state-focus{background:rgba(255,120,0,.12);color:#ea7003}.widgetFiltro .boxMarcaModelo{display:block;float:left;width:100%;padding:10px;border:solid 1px rgba(22,126,214,.25);margin-bottom:1em;position:relative}.widgetFiltro .boxMarcaModelo .busca-modelo{background:rgba(3,84,152,.08);padding:10px;color:#3f51b5;text-transform:uppercase;font-size:12px;font-weight:800}.widgetFiltro .boxMarcaModelo label{margin-bottom:3px}.widgetFiltro .boxMarcaModelo label.select{height:43px;position:relative}.widgetFiltro .boxMarcaModelo label.select:after{content:"\e912";font-family:IcoMoon;position:absolute;top:0;right:0;bottom:0;font-size:100%;line-height:47px;padding:0 6.5%;border-left:solid 1px #ddd;color:#3f51b5;pointer-events:none}@media (min-width:320px) and (max-width:1023px){aside{display:block;position:fixed;z-index:999999;width:100%;bottom:0;left:0}aside .filter-anchor-deskt.ativo .box-container.navigation-f{display:none}aside .m-container .box-container .bt_paginacao{display:block;float:left;width:25%;text-align:center;height:48px;z-index:999999999999;bottom:0;background:#fff;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;border-right:none;position:absolute;font-size:.65em;font-weight:600;letter-spacing:.2px;text-transform:uppercase;color:#717171;border-top:solid 1px rgba(0,0,0,.09);left:75%;overflow:hidden;transform:translateY(0);transition:transform .1s ease-in}aside .m-container .box-container .bt_paginacao i{display:block;font-size:19px;width:100%;margin-bottom:6px;color:#ff7427}aside .m-container .box-container .bt_paginacao.mobile-kb{transform:translateY(100%);transition:transform .1s ease-in}aside .m-container .box-container .bt_paginacao label{display:none}aside .m-container .box-container .bt_paginacao ul li{display:none}aside .m-container .box-container .bt_paginacao ul li.current{display:block;border:solid 1px #ff7427;padding:14px;color:#ff7427}aside .m-container .box-container>.menu_paginacao{display:none}aside .m-container .box-container>.menu_paginacao.active{display:block}aside .m-container .box-container>.menu_paginacao label{display:none}.overlay-infinite{position:fixed;background:#000;width:0;height:0;top:0;z-index:99999;opacity:0;transition:opacity .2s ease-in}.overlay-infinite.active{position:fixed;background:#000;width:100%;height:100%;top:0;opacity:.8;transition:opacity .2s ease-in}.filter-anchor-deskt{display:block;position:fixed;z-index:999999;width:100%;background:#eaebef;bottom:0;transform:translateY(calc(100% + 100px));transition:transform .2s ease-in}.filter-anchor-deskt.ativo{transform:translateY(0);transition:transform .2s ease-in}.filter-anchor-deskt.full{height:100%}.filter-anchor-deskt.full #icon-order-c span.down small{color:#ddd!important}.filter-anchor-deskt.full span.order-btn small{color:#717171!important}.filter-anchor-deskt.full span.order-btn i{color:#ddd}.filter-anchor-deskt.full span.order-btn small{color:#ddd}.filter-anchor-deskt.full span.btn-mobile i{color:#ddd}.filter-anchor-deskt.full span.btn-mobile.filter-btn{background:#fff}.filter-anchor-deskt.full span.bt-ativo{background:#fff}.filter-anchor-deskt.full span.bt-ativo i{color:#ff7427}.filter-anchor-deskt .save-search .save-content{display:none}.filter-anchor-deskt span.order-btn{display:block;float:left;width:25%;text-align:center;height:48px;z-index:999999999999;bottom:0;background:#fff;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;border-right:none;position:absolute;font-size:.65em;font-weight:600;letter-spacing:.2px;text-transform:uppercase;color:#989898;border-top:solid 1px rgba(0,0,0,.09);left:25%;overflow:hidden;transform:translateY(0);transition:transform .1s ease-in}.filter-anchor-deskt span.order-btn.mobile-kb{transform:translateY(100%);transition:transform .1s ease-in}.filter-anchor-deskt span.order-btn i{display:block;font-size:19px;width:100%;margin-bottom:6px;color:#ff7427}.filter-anchor-deskt span.order-btn label small{font-weight:600;letter-spacing:.2px;text-transform:uppercase;color:#989898}.filter-anchor-deskt span.order-btn label select.btn-order-trigger{display:block;float:left;width:100%;text-align:center;text-transform:uppercase;font-size:16px;-webkit-appearance:none;-moz-appearance:none;height:46px;position:absolute;bottom:0;left:0;border:none;background:0 0;border-radius:0;outline:0;color:rgba(255,255,255,0)}.filter-anchor-deskt span.order-btn label select.btn-order-trigger option{color:#000;padding-left:0}.filter-anchor-deskt span.btn-mobile{display:block;float:left;width:25%;text-align:center;height:48px;z-index:999999999999;bottom:0;background:#fff;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;border-right:none;position:absolute;font-size:.65em;font-weight:600;letter-spacing:.2px;text-transform:uppercase;color:#989898;overflow:hidden;border-top:solid 1px rgba(0,0,0,.09);transform:translateY(0);transition:transform .1s ease-in;cursor:pointer}.filter-anchor-deskt span.btn-mobile.Customer-pg{color:#ddd}.filter-anchor-deskt span.btn-mobile.Customer-pg i{color:#ddd}.filter-anchor-deskt span.btn-mobile.mobile-kb{transform:translateY(100%);transition:transform .1s ease-in}.filter-anchor-deskt span.btn-mobile i{display:block;font-size:19px;width:100%;margin-bottom:6px;color:#ff7427}.filter-anchor-deskt span.btn-mobile i.icon-user2{font-size:22px;line-height:19px}.filter-anchor-deskt span.btn-mobile i.icon-fav{font-weight:600}.filter-anchor-deskt span.btn-mobile.fav-active .count-fav{background:#ff7427;color:#fff;text-align:center;width:20px;display:none;height:20px;border-radius:60px;font-size:10px;font-weight:600;padding-top:4px;position:absolute;left:12px;top:1px;line-height:12px}.filter-anchor-deskt span.btn-mobile.btn-filter-trigger{border-left:none;left:0}.filter-anchor-deskt span.btn-mobile.order-btn{left:25%}.filter-anchor-deskt span.btn-mobile.fav-btn{left:50%}.filter-anchor-deskt span.btn-mobile.fav-btn .count-fav{background:#ff7427;color:#fff;text-align:center;width:20px;display:none;height:20px;border-radius:60px;font-size:10px;font-weight:600;padding-top:4px;position:absolute;left:12px;top:1px;line-height:12px}.filter-anchor-deskt span.btn-mobile.save-btn{right:0}.filter-anchor-deskt span.btn-mobile.save-btn i.icon-next{display:none}.filter-anchor-deskt span.btn-mobile.entrar-btn{left:75%}.filter-anchor-deskt span.btn-mobile.filter-btn{color:#353535}.filter-anchor-deskt .m-content{min-height:500px;display:none;padding-bottom:3em;z-index:0;position:relative}.filter-anchor-deskt .m-content .top-mobile{display:block;float:left;width:100%;position:relative;top:0;left:0;z-index:9999999;padding-right:14px;margin-bottom:10px;background:#eaebef}.filter-anchor-deskt .m-content .top-mobile span.qtd-fav{text-transform:uppercase;font-size:14px;font-weight:600;letter-spacing:.2px;color:#a9a9a9;position:relative;float:right;padding:1.5em}.filter-anchor-deskt .m-content .top-mobile span.qtd-fav b{color:#ff7427;margin-left:5px;font-size:16px}.filter-anchor-deskt .m-content .top-mobile span.ttl-mobile{display:block;float:right;width:67%;padding:15px 2em;padding-right:10px;text-align:right;font-weight:600;color:#353535;font-size:12px;text-transform:uppercase}.filter-anchor-deskt .m-content .top-mobile span.ttl-mobile i{margin-right:10px;color:#353535}.filter-anchor-deskt .m-content .top-mobile span.ttl-mobile b.count-fav{margin-left:5px;color:#ff7801}.filter-anchor-deskt .m-content .top-mobile span.back-f-desk{display:none}.filter-anchor-deskt .m-content .top-mobile span.close{display:block;float:left;width:30%;text-align:center;padding:12px 0;text-transform:uppercase;font-size:12px;font-weight:600;color:rgba(53,53,53,.89);padding-left:17px;position:relative;margin:0;background:#d7d9de;border-radius:6px;box-shadow:0 2px #ccc}.filter-anchor-deskt .m-content .top-mobile span.close:before{content:'\e921';font-family:icomoon;position:absolute;transform:rotate(45deg);left:16px;font-size:9px}.filter-anchor-deskt .m-content .top-mobile span.logado{width:75%;background:#fff;text-align:right;padding:1em 2em;display:block;float:left;color:#525252;font-size:16px;font-weight:400}.filter-anchor-deskt .m-content .top-mobile span.logado:after{content:'\e912';font-family:icomoon;color:#ababab;margin-left:5px;font-weight:800;font-size:9px;transform:rotate(90deg);position:absolute;line-height:16px}.filter-anchor-deskt .m-content .top-mobile span.clear-f{display:block;float:right;padding:17px 15px;text-transform:uppercase;font-size:12px;font-weight:600;color:#3f51b5;cursor:pointer}.filter-anchor-deskt .m-content.favoritos-aside{overscroll-behavior:contain}.filter-anchor-deskt .m-content.favoritos-aside .empty{display:block;float:left;width:100%;text-align:center;padding:3em 0}.filter-anchor-deskt .m-content.favoritos-aside .empty i{font-size:100px;color:#ff7427;margin-bottom:18px;display:block}.filter-anchor-deskt .m-content.favoritos-aside .empty>p{font-size:16px;color:#353535;padding:0 22px;line-height:17px;font-weight:500;margin:0;text-align:center;padding:0}.filter-anchor-deskt .m-content.favoritos-aside p{text-align:left;display:block;float:left;font-size:14px;line-height:17px;margin-bottom:1em;color:#717171}.filter-anchor-deskt .m-content.favoritos-aside p a{color:#015aa9}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up{display:block;padding:1em;float:left;width:100%;overflow:auto;position:absolute;background:#eaebef;height:100%;overflow-y:scroll;-webkit-overflow-scrolling:touch}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul{display:block;float:left;width:100%;padding:0;padding-bottom:4em;overscroll-behavior:contain}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li{display:block;float:left;background:#fff;margin-bottom:5px;width:100%;overflow:hidden;cursor:pointer;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);position:relative;box-shadow:0 5px 22px -10px rgba(0,0,0,.45);border:solid 1px #ddd}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li.inativo{border:solid 1px #da2c2c}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li.inativo:before{content:'';background:#fff;width:100%;height:100%;left:0;top:0;position:absolute;z-index:6;opacity:.8}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li.inativo:after{content:'Anúncio Removido';border:solid 1px rgba(214,6,6,.27);background:#ffe;position:absolute;top:36%;z-index:9999999999;left:30%;padding:10px;color:#da2c2c}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir{display:block;width:48px;right:0;left:inherit;margin:0;border:none;position:absolute;padding:1em 2em;bottom:0;top:inherit;border-radius:60px 0 0;height:48px;text-align:center;text-transform:uppercase;font-size:13px;font-weight:600;color:#da2c2c;z-index:9;cursor:pointer;-webkit-transform:translate3d(0,0,1px);transform:translate3d(0,0,1px);background:#fff7e6}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir i{position:relative;width:100%;height:100%;margin-right:0;font-size:16px;top:0;display:block;line-height:34px}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir i:before{content:"\e921";position:absolute;transform:rotate(45deg);left:0}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li .btExcluir small{display:none}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a{display:block;float:left;width:100%;position:relative;cursor:pointer;min-height:130px;border:solid 5px #fff}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a:hover .infos h3{color:#3f51b5;text-decoration:underline}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a span.img{max-width:40%;height:100%;display:block;position:absolute;background-position:center center;background-repeat:no-repeat;-webkit-background-size:contain;background-size:contain}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a span.img img{display:block;margin:0 auto;height:100%;width:100%;object-fit:cover}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a span.infos{display:block;float:right;width:60%;padding:5px;min-height:120px;position:relative;padding-left:10px}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a span.infos h3{font-size:14px;line-height:19px;display:block;margin-top:1em;color:#717171}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up ul li a span.infos p{position:absolute;bottom:1em;color:#3f51b5;font-size:14px;font-weight:600}.filter-anchor-deskt .m-content.favoritos-aside .anuncios-fav-up>p{font-size:14px;line-height:18px;color:#949494;margin:0;padding:0}.filter-anchor-deskt .m-content.favoritos-aside .btns-favs{display:block;float:left;width:100%;margin-top:1em;position:fixed;bottom:48px;left:0;z-index:999;border:solid 1em #eaebef}.filter-anchor-deskt .m-content.favoritos-aside .btns-favs>a{display:block;float:left;width:100%;text-align:center;text-decoration:none;padding:14px;text-transform:uppercase;font-weight:600;position:relative;overflow:hidden}.filter-anchor-deskt .m-content.favoritos-aside .btns-favs>a.cta2{border:solid 2px #ff7427;background:#ff7427;color:#fff}.filter-anchor-deskt .m-content.favoritos-aside .btns-favs>a.ghost{color:#a2a2a2;margin-right:2%;border:solid 2px #ddd}.filter-anchor-deskt .m-content.filtros .filters{position:absolute;transform:none;border:none;display:block;width:100%;float:left;background:#eaebef;height:100%;z-index:9;overflow:hidden;overflow-y:scroll;-webkit-overflow-scrolling:touch}.filter-anchor-deskt .m-content.filtros .filters .filters-form{display:block;float:left;width:100%;height:100%;position:relative;padding-top:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter{width:94%;background:#b5b5b5;color:#fff;text-align:center;position:fixed;bottom:59px;text-transform:uppercase;font-weight:600;font-size:16px;height:auto;left:3%;padding:1em;border-radius:6px;z-index:99999;text-decoration:none;transform:translateY(0);transition:transform .1s ease-in;box-shadow:0 3px #a7a6a6}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter.active{background:#ff7427;box-shadow:0 4px 0 0 #ec651c}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter.focus{outline:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter.mobile-kb{transform:translateY(200%);transition:transform .1s ease-in}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter.loading span{opacity:1;transition:opacity .2s ease-in}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter.loading span #load{display:inline-block}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter span{display:block;position:absolute;width:100%;height:100%;padding-top:8px;left:0;top:0;text-align:center!important;background:#ff7427;opacity:0;border-radius:6px;transition:opacity .2s ease-in;box-shadow:0 4px 0 0 #ec651c}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter #load{width:30px;animation:loading 3s linear infinite}.filter-anchor-deskt .m-content.filtros .filters .filters-form a.apply-filter #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:20;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#fff;fill:transparent}@keyframes loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes loading-circle{0%{stroke-dashoffset:0}100%{stroke-dashoffset:-600}}.filter-anchor-deskt .m-content.filtros .filters .filters-form form{-webkit-appearance:none;-moz-appearance:none;height:100%;padding:1em;padding-bottom:6.5em;overflow-y:scroll;overscroll-behavior:contain;-webkit-overflow-scrolling:touch}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links{display:block;width:100%;margin-bottom:5px;float:left;padding:0 0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul.imoveis{display:block;width:100%;float:left}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul li{width:32.333%;float:left;height:46px;margin-left:1.33%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul li:first-child{margin-left:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul li:last-child a{padding:9px 20px;line-height:14px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul li a{text-transform:uppercase;text-decoration:none;padding:12px 0;text-align:center;width:100%;height:46px;display:block;color:#353535;background:#ffda8d;font-size:12px;font-weight:600;line-height:21px;letter-spacing:.4px;box-shadow:0 2px #e6c580;border-radius:6px;border:solid 1px #f1cb7b}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul li a:hover{border:solid 1px #3f51b5;color:#fff;background:#3f51b5;box-shadow:0 2px #2e3d90}.filter-anchor-deskt .m-content.filtros .filters .filters-form form .links ul li a.selected{border:solid 1px #3f51b5;color:#fff;background:#3f51b5;box-shadow:0 2px #2e3d90}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset{display:block;float:left;width:100%;position:relative;padding:8px 0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.cidades-c{padding-bottom:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset .filtro-a-aplicar span{background:#3f51b5;padding:6px 6px;padding-right:23px;color:#fff;font-size:12px;position:relative;z-index:9;font-weight:600;border-radius:4px;display:flex;float:left;cursor:pointer;margin-left:2px;margin-top:5px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset .filtro-a-aplicar span:after{content:"\e921";color:rgba(255,255,255,.37);font-family:Icomoon;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;right:10px;top:8px;font-size:10px;font-weight:100}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset label{display:block;width:100%;margin-bottom:5px;text-align:left;font-size:13px;letter-spacing:.19px;color:#353535;font-weight:600;position:relative}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset label.cidade{margin-bottom:5px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input{height:46px;color:#353535;padding-left:1em;font-size:16px;font-weight:600}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input:focus{outline:0;box-shadow:0 4px 17px -10px #ddd}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input.fieldBusca{width:100%;margin-top:6px;border:solid 1px #e1e4e8;border-radius:6px;box-shadow:0 4px 10px -8px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input.fieldBusca::-webkit-input-placeholder{color:#717171;font-weight:400}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input.fieldBusca::-moz-placeholder{color:#717171;font-weight:400}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input.fieldBusca:-ms-input-placeholder{color:#717171;font-weight:400}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input.fieldBusca:-moz-placeholder{color:#717171;font-weight:400}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset input.erroBuscaAno{background:#f16464;border:0;color:#fff;transition:all .2s ease-in;width:100%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a{text-decoration:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.fieldBuscaBtn{display:block;position:absolute;width:15%;border-left:solid 1px #e1e4e8;text-align:center;height:46px;padding-top:11px;bottom:0;right:0;line-height:26px;color:#353535}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btRemover{background:#f5d2d2;text-align:center;width:100%;display:block;float:left;margin-top:10px;padding:10px;text-transform:uppercase;font-size:12px;font-weight:600;color:#bb4545}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btRemover i{margin-left:10px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btRemover i:before{position:absolute;transform:rotate(45deg);color:#ce7070}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btAdd{display:block;float:left;width:100%;text-align:center;padding:12px 0;background:#efefef;color:#3f51b5;text-transform:uppercase;font-size:13px;font-weight:600;margin-top:1em;display:block;outline:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btAdd:focus{outline:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btAdd:hover{background:#f3f3f3}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset a.btAdd i{margin-left:10px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select{z-index:999}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .term-list{width:100%;height:auto;max-height:250px;overflow-x:auto;z-index:99;padding:0;margin:0;position:absolute;top:100%;left:0;background-color:#fff;box-shadow:rgba(0,0,0,.36) 0 6px 12px -13px,rgba(0,0,0,.15) 0 1px 4px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .term-list li{padding:15px 1em;cursor:pointer;text-align:left;border-bottom:solid 1px #ddd;line-height:normal;background-color:#fafafa;background-color:#fff;font-size:15px;text-transform:uppercase;color:#353535;font-weight:400;letter-spacing:.4px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .term-list li.not-up{text-transform:none!important;letter-spacing:0!important}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .term-list li.not-up strong{text-transform:uppercase!important}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .term-list strong{font-weight:700}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .hidden{display:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block{width:100%;position:relative;transition:.3s ease-out}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.raio{border-left:solid 1px #ddd;min-width:105px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.raio .active-list:after{font-size:10px;width:auto;right:7px;height:auto;background:0 0!important}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.raio .active-list:hover:after{background:0 0!important;top:54%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.raio .drop-down-list li.option{text-transform:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block label{position:absolute;left:0;top:32px;height:20px;width:100%;transition:all .3s ease-out;margin:0;font-weight:500;z-index:1;color:#939393;font-size:12px;line-height:10px;white-space:nowrap;overflow:hidden}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .active-list{width:100%;padding:0;position:relative;z-index:2;cursor:pointer;white-space:nowrap;overflow:hidden;padding-right:30px;box-sizing:border-box;text-align:left;padding-left:1.5em;font-size:13px;height:46px;line-height:45px;text-transform:uppercase;color:#353535;font-weight:600;letter-spacing:.4px;border:solid 1px #e1e4e8;background:#fff;border-radius:6px;box-shadow:0 4px 10px -8px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .active-list:before{content:'';width:1px;height:100%;position:absolute;background:#ddd;right:14.5%;top:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .active-list:after{content:"\e912";font-family:Icomoon;position:absolute;right:5%;background-color:#fff;top:31%;width:16px;height:16px;line-height:initial;padding-left:0;text-align:left;font-size:14px;margin-top:0;transition:transform .2s ease;color:#353535}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.added label{top:0;font-size:13px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.added .active-list{color:#353535;font-size:13px;text-transform:uppercase}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.added.focus label{top:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.focus label{top:0;font-size:13px;color:#ff7427}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.focus .active-list{font-size:13px;text-transform:uppercase;background:#fff}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.focus .active-list:after{background:#fff}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.focus .custom-select{border-color:#fff}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.focus .active-list:after{content:"\e912";color:#3c3c3c;font-family:Icomoon;transform:rotate(90deg);-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg);transition:transform .2s ease;color:#ff7427}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block.focus .custom-select::before{left:0;width:100%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select{display:inline-block;height:40px;position:relative;padding:0;width:100%;line-height:40px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select::before{content:'';position:absolute;left:50%;width:0;bottom:0;height:2px;transition:all .3s ease-out;background-color:#ff7427}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .list-field{width:100%;height:40px;padding:0 15px;position:absolute;top:0;left:0;display:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list{width:100%;height:auto;max-height:247px;overflow-x:auto;z-index:99;padding:0;margin:0;position:absolute;top:109%;left:0;display:none;background-color:#fff;border:solid 1px #ddd}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li{padding:12px 1em;cursor:pointer;text-align:left;border-bottom:solid 1px #ddd;line-height:normal;background-color:#fff;text-transform:uppercase;color:#353535;font-weight:600;letter-spacing:.4px;padding-left:2em;font-size:13px;transition:all .3s ease-out}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.all{background:#fff}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.all.high{font-style:italic;font-size:16px;font-weight:400;color:#888;background:#f3f3f3;text-transform:none;padding:7px 16px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.residencial.high{font-style:italic;font-size:17px;color:#ff7427;background:#fff;text-transform:none;padding:7px 16px;font-weight:600;letter-spacing:0;border-top:solid 1px #ff7427}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li.comercial.high{font-style:italic;font-size:16px;font-weight:400;color:#888;background:#f3f3f3;text-transform:none;padding:7px 16px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li i{font-size:26px;margin-right:15px;line-height:7px;top:5px;position:relative}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li input[type=checkbox]{margin:0;margin-right:8px;position:relative;top:1px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li label{font-weight:400;cursor:pointer;display:block}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list li:hover{color:#ff7427;background:rgba(255,120,0,.08)}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list .add-new{border-top:solid 1px #c8c8c8;padding:15px;color:#3c3c3c}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select .select-block .custom-select .drop-down-list .add-new i{font-size:16px;margin-top:3px;color:#939393}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select select{display:block;float:left;width:100%;border:solid .5px #ddd;font-size:16px;text-transform:uppercase;position:relative;background:#fff;-webkit-appearance:none;-moz-appearance:none;padding:12px;border-radius:0;padding-left:15px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select select:focus{outline:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select label.select span{position:absolute;right:0;width:15%;border-left:solid 1px #ddd;height:45px;right:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.select label.select span.right{right:3%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector{z-index:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area{margin-bottom:1em;padding:1em}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area.acc{padding:0;margin-bottom:0;padding-top:14px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc{width:100%;text-align:left;position:relative;cursor:pointer;padding:12px 20px;border-top:solid 1px rgba(255,255,255,.23);margin-bottom:0;border-bottom:solid 1px rgba(0,0,0,.01)}}@media screen and (min-width:320px) and (max-width:1023px) and (min-width:1600px){.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc{padding:10px 0}}@media (min-width:320px) and (max-width:1023px){.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc.active:after{transform:rotate(90deg)}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area.acc .bt-acc:after{content:"\e912";font-family:Icomoon;float:right;color:#636363;width:20px;font-size:10px;height:20px;font-weight:600;-webkit-text-stroke:.3px;line-height:20px;text-align:center;transition:transform .11s ease-in}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector.area label{width:38%;float:left;text-align:center;padding-top:1.3em;margin-right:5%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector label{margin-bottom:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input.fieldArea{padding-left:20%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input{outline:0;height:40px;font-weight:600;font-size:16px!important;color:#3f51b5}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input.formata-valor{padding-left:30%;padding-top:3px;position:relative;width:100%;margin-top:5px;border:none;overflow:hidden;color:#3f51b5;font-weight:600;letter-spacing:-.4px;border:solid 1px #f3f3f3;border-radius:6px;box-shadow:0 4px 10px -8px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input[type=number]{border:1px solid #ddd;text-align:left;font-size:16px;font-weight:600;padding-left:45px;color:#3f51b5;padding-bottom:0;-moz-appearance:textfield}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input[type=number]::-webkit-inner-spin-button,.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;-moz-appearance:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input[type=number]:invalid,.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector input[type=number]:out-of-range{border:2px solid tomato}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .doubleField{display:block;border:solid 1px #f1f1f1;float:left;padding:10px;margin-top:9px;width:100%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox{display:block;float:left;width:48%;position:relative}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox:first-child:before{content:'';width:5%;height:0;border-bottom:solid 2px #ff7427;display:block;position:absolute;right:-5%;top:53%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox:nth-child(2){margin-left:2%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox .fieldLabel{display:block;float:left;position:absolute;background:rgba(0,90,166,0);padding:13px;bottom:0;text-transform:uppercase;font-size:14px;font-weight:600;color:#525252}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .doubleField .fieldAnoBox input{padding-left:34%;padding-top:5px;width:100%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .ValueField{display:block;float:left;width:48%;position:relative}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .ValueField:nth-child(2){margin-left:2%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .ValueField span.fieldValMaxMin{display:block;float:left;position:absolute;background:rgba(0,90,166,.16);padding:11px;bottom:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .ValueField span.fieldValMax{display:block;float:left;position:absolute;background:rgba(0,90,166,.16);padding:11px;bottom:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .ValueField input{padding-left:31%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector select{display:block;float:left;width:100%;border:solid .5px #ddd;font-size:16px;text-transform:uppercase;-webkit-appearance:none;-moz-appearance:none;padding:12px;border-radius:0;padding-left:15px;margin-top:5px;background:0 0;position:relative;z-index:9}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector select:focus{outline:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector label.select span{position:absolute;right:0;width:15%;border-left:solid 1px #ddd;height:42px;font-size:20px;bottom:0;top:5px;text-align:center;padding:12px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector span.icon_area{position:absolute;right:0;bottom:0;padding:8px 12px;background:rgba(0,90,166,.11);font-size:22px;color:#3f51b5}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector span.metrics{position:absolute;left:0;bottom:0;padding:8px;background:rgba(75,75,76,.11);font-size:22px;color:#292929}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider{margin:auto;text-align:center;position:relative;height:auto;width:100%;display:block;float:left}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider.area{padding:0;float:right;width:49%;border:none;margin:0;margin-bottom:1em}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results{padding-left:1em}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results span{width:100%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results span small{top:26%;font-size:14px;right:16px;color:#3f51b5;left:inherit}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider.area .label-results span .metric-range{padding-left:1em;color:#3f51b5;font-weight:600;letter-spacing:-.4px;width:100%;border:solid 1px #f3f3f3;border-radius:6px;box-shadow:0 4px 10px -8px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results{display:block;width:100%;float:left}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span{color:#353535;font-weight:600;margin-right:7px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span:last-child{margin-right:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span small{font-weight:600;color:#525252}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results.double span:first-child:before{content:'';width:5%;height:0;border-bottom:solid 2px #ff7427;display:block;position:absolute;right:-5%;top:65%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results span{font-size:13px;color:#3f51b5;font-weight:600;display:block;float:left;width:48%;position:relative;text-align:left}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.range-selector .range-slider .label-results span small{position:absolute;top:50%;font-size:14px;line-height:21px;left:14px;color:#3f51b5;z-index:9;text-transform:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons{border:solid 1px #f3f3f3;padding:0;border-radius:6px;overflow:hidden;margin-top:10px;background:#fff}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group{display:flex;flex-wrap:wrap;margin-bottom:.5em;flex-direction:row;justify-content:left;margin-bottom:10px;padding:0 1em}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group i{font-size:31px;display:block;float:left;position:relative;width:15%;color:#353535;text-align:left;line-height:36px;margin-right:4%}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group i.icon-bed{font-size:28px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container{position:relative;height:37px;width:18%;margin:auto}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container:first-child{margin-left:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-button{opacity:0;position:absolute;top:0;left:0;height:100%;width:100%;margin:0;cursor:pointer}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile{display:flex;flex-direction:column;align-items:center;justify-content:center;width:100%;height:100%;cursor:pointer;background:#fff;border:solid 1px #ddd;box-shadow:0 4px 10px -8px;border-radius:4px;transition:transform .3s ease}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile-label{text-align:center;font-size:14px;font-weight:600;text-transform:uppercase;letter-spacing:1px;color:#353535;display:block;float:left;width:100%;cursor:pointer;margin:0;position:absolute;height:100%;top:26%;left:0}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-tile-label small{font-size:16px}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-button:checked+.radio-tile{background-color:#3f51b5;border:2px solid #3f51b5;cursor:pointer;transform:scale(1.1,1.1);-ms-transform:scale(1.1,1.1);-webkit-transform:scale(1.1,1.1)}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .radio-tile-group .input-container .radio-button:checked+.radio-tile .radio-tile-label{color:#fff;cursor:pointer}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .bt-acc-container{display:none;width:100%;float:left}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons .bt-acc-container.active{display:block}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc{width:33.3%;float:left;display:block;padding:13px 0;text-align:center;background:#f2f4f7;color:#353535;cursor:pointer;border-left:solid 1px #d8dfe8;cursor:pointer}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc:hover{background:#eaeaea}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc.active{background:#fff;color:#3f51b5}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc:first-child{border-left:none}.filter-anchor-deskt .m-content.filtros .filters .filters-form form fieldset.radio-buttons label.bt-acc small{padding:4px;font-size:12px;font-weight:800;color:#3f51b5;letter-spacing:.3px}.filter-anchor-deskt .m-content.filtros .filters .filters-form span.close-filter-mobile{width:33%;background:#f7f7f7;color:#989898;border-radius:0;text-align:center;position:absolute;bottom:0;text-transform:uppercase;font-weight:600;font-size:13px;line-height:22px;height:auto;left:0;padding:1em;border:solid 5px #fff;z-index:99;text-decoration:none;-webkit-transform:translate3d(0,0,0)!important}.filter-anchor-deskt .m-content.save-content-c{background:#eaebef}.filter-anchor-deskt .m-content.save-content-c .save-content{display:block;float:left}.filter-anchor-deskt .m-content.save-content-c .save-content h3{display:block;float:left;width:100%;font-size:18px;line-height:24px;color:#717171;padding-bottom:1em}.filter-anchor-deskt .m-content.save-content-c .save-content h3 b{font-weight:600;color:#3f51b5}.filter-anchor-deskt .m-content.save-content-c .save-content h3 span._qtd{font-weight:600}.filter-anchor-deskt .m-content.save-content-c .save-content .menu_paginacao{border-top:solid 1px #f3f3f3;display:block;float:left;width:100%;padding-top:1em}.filter-anchor-deskt .m-content.save-content-c .save-content .menu_paginacao label{font-size:12px;text-transform:uppercase;font-weight:600;color:#3f51b5;margin-bottom:.5em;text-align:left}.filter-anchor-deskt .m-content.save-content-c .save-content ul.paginacao-scroll{display:inline-block;float:left;width:100%;padding-top:.5em;padding-bottom:0;text-align:left;margin:auto}.filter-anchor-deskt .m-content.save-content-c .save-content ul.paginacao-scroll li{width:15%;text-align:center;display:inline-block;margin-left:1%;margin:auto;text-decoration:none;color:#3f51b5;padding:12px;font-size:12px;font-weight:600;letter-spacing:.2px;border-radius:4px;border:solid 1px #3f51b5}.filter-anchor-deskt .m-content.save-content-c .save-content ul.paginacao-scroll li:first-child{margin-left:0}.filter-anchor-deskt .m-content.save-content-c .save-content ul.paginacao-scroll li:hover{color:#fff;background:#3f51b5}.filter-anchor-deskt .m-content.save-content-c .save-content ul.paginacao-scroll li.current{color:#fff;background:#3f51b5;min-width:82px}.filter-anchor-deskt .m-content.save-content-c .save-content ul.paginacao-scroll li.bt-close{display:none}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades{display:none;float:left;width:100%;padding:1em 0;background:#fff;border:solid 1px rgba(220,220,220,.57);border-left:none;border-right:none}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades p{font-size:12px;text-transform:uppercase;font-weight:600;color:#3f51b5;margin-bottom:.5em}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades p i{display:none}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove{background:#3f51b5;padding:5px 15px;padding-right:30px;color:#fff;font-size:12px;position:relative;z-index:9;font-weight:600;border-radius:23px;display:flex;float:left;cursor:pointer;margin-left:5px;margin-bottom:4px}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove i{font-style:normal}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove:hover{background:#ff7427}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove:hover:after{color:#fff}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades span.btRemove:after{content:"\e921";color:rgba(255,255,255,.37);font-family:Icomoon;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg);position:absolute;right:10px;top:8px;font-size:10px;font-weight:100}.filter-anchor-deskt .m-content.save-content-c .save-content .lista_bairros_cidades .msg{display:none}.filter-anchor-deskt .m-content.save-content-c .save-content span.order{display:block;float:right;width:100%;text-align:center;background:#fff;text-transform:uppercase;font-weight:600;font-size:14px;cursor:pointer;position:relative;overflow:hidden;padding-top:1em;border-top:solid 1px #f3f3f3}.filter-anchor-deskt .m-content.save-content-c .save-content span.order p{font-size:12px;text-transform:uppercase;font-weight:600;color:#3f51b5;margin-bottom:.5em;text-align:left}.filter-anchor-deskt .m-content.save-content-c .save-content span.order span{position:absolute;right:0;top:12px;text-transform:uppercase;font-size:12px;font-weight:600;color:#b1aeac;z-index:-1;border:solid 1px #ddd;padding:5px}.filter-anchor-deskt .m-content.save-content-c .save-content span.order select.btn-order-trigger{display:inline-block;width:100%;margin:0 auto;float:none;padding:12px 0;color:#3f51b5;text-align:center;font-weight:600;font-size:12px;text-transform:uppercase;margin-left:0;background:0 0;padding-left:3em;-webkit-appearance:none;-moz-appearance:none;height:48px;outline:0;border:none;border-radius:0}.filter-anchor-deskt .m-content.save-content-c .save-content span.order select.btn-order-trigger:focus{outline:0}.filter-anchor-deskt .m-content.save-content-c .save-content span.order select.btn-order-trigger option{color:#000;padding-left:0}.filter-anchor-deskt .m-content.save-content-c .save-content span.order i.icon-order{position:absolute;left:1em;top:36%;z-index:-1;color:#3f51b5}.filter-anchor-deskt .m-content.save-content-c .save-content span.order i.icon-next{position:absolute;top:0;right:1em}.filter-anchor-deskt .m-content.save-content-c .save-content span.order label{position:relative;color:#353535;z-index:9;width:100%;outline:0;margin:0;float:left;text-align:center;padding-top:0}.filter-anchor-deskt .m-content.save-content-c .save-content span.order label small{display:none}.filter-anchor-deskt .m-content.save-content-c .save-content .save-search-bt{display:block;float:left;cursor:pointer;width:100%;padding:18px 0;text-align:center;text-transform:uppercase;font-size:14px;font-weight:600;color:#fff;-webkit-appearance:none;-moz-appearance:none;font-family:lato;position:relative;bottom:0;background:#ff7427;margin-top:1em}.filter-anchor-deskt .m-content.save-content-c .save-content a .bt-salvar-mg{position:fixed;width:100%;background:#fff;border:solid 10px #eaebef;left:0;bottom:46px;color:#3f51b5}.filter-anchor-deskt .m-content.save-content-c .save-content .btn-50{display:block;float:left;width:100%;text-align:center;padding:16px 13px;text-transform:uppercase;font-size:13px;font-weight:600;letter-spacing:.2px;color:#717171;border:solid 2px #ddd;position:relative}.filter-anchor-deskt .m-content.save-content-c .save-content .btn-50.bt-salvar-mg{margin-right:0}.filter-anchor-deskt .m-content.save-content-c .save-content .btn-50 small{position:absolute;background:#ff7427;color:#fff;width:22px;font-size:11px;border-radius:60px;height:22px;line-height:22px;right:-11px;top:-4px}.filter-anchor-deskt .m-content.save-content-c .save-content .label-box{font-size:12px;text-transform:uppercase;font-weight:600;margin-bottom:5px;display:block;float:left;color:#3f51b5}.filter-anchor-deskt .m-content.save-content-c .save-content .minha-busca{display:block;float:left;width:100%;border:solid 10px #eaebef;padding:0;position:absolute}.filter-anchor-deskt .m-content.save-content-c .save-content .minha-busca .contents-busca{padding:2em;display:block;float:left;width:100%;margin-top:1em;background:#fff}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg{position:absolute;z-index:9999;width:100%;background:#fff;height:100%;left:0;top:0;display:none}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg.ativo{display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb{padding:1.5em;text-align:center;display:block}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg{display:block;float:left;width:100%}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg i{font-size:75px;color:#ff7427;display:block}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg h3{font-size:18px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;color:#353535;padding-top:1em}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb .msg p{display:block;float:left;font-size:16px;padding:0 1em;line-height:18px}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.cta2{display:block;float:left;width:100%;margin-top:2em;font-size:16px;text-transform:uppercase;font-weight:600;letter-spacing:.2px;border:solid 2px;padding:1em;text-decoration:none;color:#3f51b5;position:relative}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.cta2 small{background:#f70;color:#fff;padding-top:9px;border-radius:60px;font-size:12px;font-weight:600;position:absolute;top:-12px;width:30px;height:30px;left:-10px}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.ghost{display:block;margin-top:.5em;padding:1em;cursor:pointer;float:left;text-align:center;width:100%;font-size:14px;border:solid 2px #ddd;text-transform:uppercase;font-weight:600;letter-spacing:.2px;color:#717171}.filter-anchor-deskt .m-content.save-content-c .save-content .overlay-msg .msg-login-sb a.link{display:block;float:left;text-align:center;width:100%;padding:1em;color:#3f51b5;text-decoration:underline;margin-top:1em}}span.bt-acc-container{display:none;padding:10px;padding-bottom:0}span.bt-acc-container.active{display:block}@media screen and (min-width:1024px){#icon-order-c{display:block;position:absolute;top:11px;left:0}}@media screen and (min-width:1024px){#icon-order-c span{position:absolute;right:0;top:0;text-transform:uppercase;font-size:15px;font-weight:600;color:#ff7427;z-index:-1}}#icon-order-c span.down{display:block;width:100%;height:23px;position:relative;text-align:center}@media screen and (min-width:1024px){#icon-order-c span.down{display:block;width:25px;height:23px;text-align:center;position:absolute;left:20px}}#icon-order-c span.down .icon-valor{left:3px;position:absolute;top:0}#icon-order-c span.down .icon-valor .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff;transform:rotate(180deg)}@media screen and (min-width:1024px){#icon-order-c span.down .icon-valor .icon-arrow-up{right:13px}}#icon-order-c span.down small{left:3px;position:absolute;top:0;font-size:18px;width:100%;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase}@media screen and (min-width:1024px){#icon-order-c span.down small{left:-2px;position:absolute;top:0;font-size:18px;width:23px;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase;line-height:16px}}#icon-order-c span.down small .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff;transform:rotate(180deg)}#icon-order-c span.up{display:block;width:100%;height:23px;position:relative;text-align:center}@media screen and (min-width:1024px){#icon-order-c span.up{display:block;width:25px;height:23px;text-align:center;position:absolute;left:20px}}#icon-order-c span.up .icon-valor{left:3px;position:absolute;top:0}#icon-order-c span.up .icon-valor .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff}#icon-order-c span.up small{left:3px;position:absolute;top:0;font-size:18px;width:100%;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase}@media screen and (min-width:1024px){#icon-order-c span.up small{left:-2px;position:absolute;top:0;font-size:18px;width:23px;font-weight:600;margin-bottom:6px;color:#ff7427;text-transform:lowercase;line-height:16px}}#icon-order-c span.up small .icon-arrow-up{position:absolute;top:-4px;right:19px;font-size:14px;-webkit-text-stroke:1.2px #fff}@media screen and (min-width:1024px){#icon-order-c span.up small .icon-arrow-up{right:13px}}.box-container .entrar-logado{width:100%;float:left;margin-top:-1em;padding:1em 2em;padding-bottom:0}@media screen and (min-width:1023px) and (max-width:1600px){.box-container .entrar-logado{padding:0 1em}}@media screen and (min-width:320px) and (max-width:1023px){.box-container .entrar-logado{display:none!important}}.box-container .entrar-logado>.back-f-desk{display:block;float:left;background:#ffdb88;padding:1em;text-transform:uppercase;cursor:pointer;font-size:12px;font-weight:600;letter-spacing:.2px;color:#353535;border-radius:3px;margin:1em 0;cursor:pointer}.box-container .entrar-logado>.back-f-desk i{position:relative;width:20px;float:left;display:block;height:10px}.box-container .entrar-logado>.back-f-desk i:before{transform:rotate(180deg);position:absolute}.box-container .entrar-logado .loading-entrar-aside{position:absolute;z-index:99999;width:100%;text-align:center;background:#fff;height:100%;min-height:550px;left:0;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.box-container .entrar-logado .loading-entrar-aside #load{width:60px}.box-container .entrar-logado .entrar-login{margin:auto;width:100%;text-align:center}.box-container .entrar-logado .entrar-login form{margin:auto;display:block}.box-container .entrar-logado .navConta .user-dados{display:block;float:left;width:100%;padding:2em;padding-top:1em;text-align:center;font-size:18px}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta .user-dados{padding:0;margin-bottom:5px}}.box-container .entrar-logado .navConta .user-dados i{display:block;text-align:center;font-size:77px;margin-bottom:20px}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta .user-dados i{display:none}}.box-container .entrar-logado .navConta .user-dados p{font-size:1em;color:#717171;margin-bottom:1em}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta .user-dados p{display:none}}.box-container .entrar-logado .navConta .user-dados p b{font-weight:600;text-transform:capitalize}.box-container .entrar-logado .navConta .user-dados p b:first-letter{text-transform:uppercase}.box-container .entrar-logado .navConta .user-dados a.logout-nm{display:block;float:right;padding:16px;background:#3f51b5;text-transform:uppercase;text-decoration:none;font-weight:600;color:#fff;font-size:14px;border-radius:1px;width:100%;text-align:center}.box-container .entrar-logado .navConta .user-dados a.logout-nm:hover{background:#3f51b5}.box-container .entrar-logado .navConta a.btMenu{display:none}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta ul{display:flex;width:100%;flex-flow:row;overflow-x:scroll}.box-container .entrar-logado .navConta ul::-webkit-scrollbar{display:none}.box-container .entrar-logado .navConta ul::-webkit-scrollbar-thumb{display:none}}.box-container .entrar-logado .navConta ul li{display:block;float:left;width:100%}.box-container .entrar-logado .navConta ul li a{border-top:solid 1px rgba(221,221,221,.44);text-transform:uppercase;text-decoration:none;font-weight:600;color:#353535;position:relative;display:block;float:left;font-size:14px;padding-left:2em;width:100%;line-height:48px}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta ul li a{min-width:140px;display:block;text-align:center;margin:auto;padding-left:0;border:solid 3px #f2f4f7;background:#fff;font-size:13px;color:#717171}}.box-container .entrar-logado .navConta ul li a:hover{background:rgba(255,120,0,.07);border-top:solid 1px rgba(255,120,0,.07);color:#ff7427}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta ul li a:hover{background:#fff;border:solid 3px #f2f4f7}}.box-container .entrar-logado .navConta ul li a span._qtd_total{background:#ff7427;border-radius:100px;font-size:13px;color:#fff;margin-left:1em;line-height:30px;position:relative;top:9px;width:30px;height:30px;float:right;right:3em;text-align:center;display:none}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta ul li a span._qtd_total{background:#ff7427;border-radius:100px;font-size:12px;color:#fff;margin-left:1em;line-height:23px;top:9px;width:22px;height:22px;float:right;right:3em;text-align:center;margin-left:0;position:absolute;top:-3px;left:-5px}}.box-container .entrar-logado .navConta ul li a.active{color:#ff7427}.box-container .entrar-logado .navConta ul li a.active:before{content:'';width:4px;height:100%;background:#ff7427;position:absolute;left:0}@media (min-width:320px) and (max-width:1023px){.box-container .entrar-logado .navConta ul li a.active:before{display:none}}.infoCliente{display:block;float:left;width:100%;text-align:center;border:solid 1px #ddd;padding:2em;margin-top:1em}.infoCliente p{font-size:18px;line-height:21px;color:#353535;margin-top:2em}.infoCliente p b{font-weight:600;display:block}span.tooltipFiltros{position:absolute;z-index:9;background:#2196f3;bottom:68px;left:2rem;color:#fff;padding:14px 20px;border-radius:6px;display:none;width:250px;font-weight:600;font-size:13px;line-height:17px;cursor:pointer;padding-bottom:5px;border:solid 1px rgba(0,0,0,.1)}@media (min-width:320px) and (max-width:1023px){span.tooltipFiltros{bottom:54px;right:inherit;left:1%}}span.tooltipFiltros:before{content:'';position:absolute;left:-10px;top:37%;width:0;height:0;border-style:solid;border-width:10px 15px 10px 0;border-color:transparent #2196f3 transparent transparent;border-width:10px 10px 0 10px;border-color:#2196f3 transparent transparent transparent;top:inherit;bottom:-7px;left:10px}@media (min-width:320px) and (max-width:1023px){span.tooltipFiltros:before{border-width:10px 10px 0 10px;border-color:#2196f3 transparent transparent transparent;top:inherit;bottom:-7px;left:10px}}span.tooltipFiltros:after{content:'\e921';font-family:IcoMoon;position:absolute;transform:rotate(45deg);top:4px;right:7px;font-size:11px;opacity:.4}span.tooltipFiltros:after:hover{opacity:1}span.tooltipFiltros b{font-weight:900;display:block;float:right;width:100%;text-align:right;position:relative;top:-4px}span.tooltipFiltros b:hover{text-decoration:underline}</style><style>@charset "UTF-8";.overlay-modal-anuncio{background:rgba(0,0,0,.65);width:100%;position:fixed;height:100%;left:0;top:0;z-index:9999999}@media (min-width:320px) and (max-width:1023px){.overlay-modal-anuncio{background:rgba(0,0,0,.75)}}.bt-m-close{width:45px;height:45px;display:block;background:#fff;border-radius:60px;text-align:center;line-height:47px;position:fixed;cursor:pointer;top:45%;right:81%;transform:rotate(45deg);color:#f44336}@media (min-width:320px) and (max-width:1023px){.bt-m-close{display:none}}@media screen and (min-width:1600px){.bt-m-close{right:1150px}}@media screen and (max-width:1345px) and (min-width:1023px){.bt-m-close{right:94%}}.bt-m-close:after{width:0;height:0;border-style:solid;border-width:15px 0 15px 15px;border-color:transparent transparent transparent #fff;position:absolute;right:-2px;transform:rotate(-45deg);top:-9px}.modal-anuncio{display:block;position:fixed;right:0;width:80%;height:100%;background:#eaebef;top:0;z-index:99999999;max-width:1100px;animation:DesktopR .6s cubic-bezier(0,.86,.25,1)}@media (min-width:320px) and (max-width:1023px){.modal-anuncio{width:100%;animation:phoneScale .6s cubic-bezier(0,.86,.25,1);animation-fill-mode:both;animation-delay:230ms;background:0 0;padding:0;top:10px}}@media screen and (max-width:1345px) and (min-width:1023px){.modal-anuncio{width:92%}}@keyframes phoneScale{0%{transform:translateZ(0) translateY(1000px);opacity:0}70%{opacity:1}100%{transform:translateZ(0) translateY(0)}}@keyframes DesktopR{0%{transform:translateZ(0) translateY(0) translateX(1000);opacity:0}70%{opacity:1}100%{transform:translateZ(0) translateY(0) translateX(0)}}.modal-anuncio .wrapper.large-content{max-width:100%!important;width:100%!important;margin-left:0}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .wrapper.large-content{max-width:100%!important;width:100%!important;background:#eaebef;border-radius:4px 4px 0 0;padding:0;margin:0}}.modal-anuncio .anuncio-loaded{display:block;float:left;width:100%;height:100%;padding:0;overflow:auto;overscroll-behavior:contain;overflow-y:scroll;-webkit-overflow-scrolling:touch}@media (min-width:1023px){.modal-anuncio .anuncio-loaded::-webkit-scrollbar{width:6px}.modal-anuncio .anuncio-loaded::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3)}.modal-anuncio .anuncio-loaded::-webkit-scrollbar-thumb{-webkit-border-radius:10px;border-radius:10px;background:rgba(12,12,12,.55)}.modal-anuncio .anuncio-loaded::-webkit-scrollbar-thumb:window-inactive{background:rgba(12,12,12,.2)}}.modal-anuncio section.galeria{display:block;float:left;width:100%;position:relative;min-height:440px;padding:10px;background:#fff}@media (min-width:320px) and (max-width:1023px){.modal-anuncio section.galeria{display:block;float:left;width:100%;position:relative;min-height:275px;padding:0}}.modal-anuncio section.galeria .slick-slide.video{background:#000;transition:background .2s ease-in}.modal-anuncio section.galeria .galeriaImage,.modal-anuncio section.galeria a.slick-slide{background:#000;color:#f3f3f3;align-items:center;align-content:center;text-align:center;display:block}.modal-anuncio section.galeria .galeriaImage img,.modal-anuncio section.galeria a.slick-slide img{cursor:pointer}.modal-anuncio section.galeria .slick-slide a iframe{width:100%;height:100%;border:none}.modal-anuncio section.galeria .slick-current img{opacity:1;transition:opacity .2s ease-in}.modal-anuncio section.galeria .slick-active img{opacity:1;transition:opacity .2s ease-in}.modal-anuncio section.galeria .slick-center img{opacity:1;transition:opacity .2s ease-in}.modal-anuncio section.galeria .slick-slide.video{background:#000;transition:background .2s ease-in}.modal-anuncio section.galeria .slick-slide img.opacity-s{opacity:.3;transition:opacity .2s ease-in}.modal-anuncio section.galeria .galeria-v-width button{position:absolute;display:block;z-index:9;height:100%;border:none;background:0 0;color:#fff;outline:0;min-width:45px}.modal-anuncio section.galeria .galeria-v-width button:focus{outline:0}.modal-anuncio section.galeria .galeria-v-width button.slick-prev{left:0;top:0;transform:rotate(180deg)}.modal-anuncio section.galeria .galeria-v-width button.slick-prev.slick-disabled:before{content:'';display:none}.modal-anuncio section.galeria .galeria-v-width button.slick-prev:before{content:'\e912';font-family:icomoon;font-size:16px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px #000}.modal-anuncio section.galeria .galeria-v-width button.slick-next{right:0;top:0}.modal-anuncio section.galeria .galeria-v-width button.slick-next.slick-disabled:before{content:'';display:none}.modal-anuncio section.galeria .galeria-v-width button.slick-next:before{content:'\e912';font-family:icomoon;font-size:16px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px #000}.modal-anuncio section.galeria .loading-galeria{background:#fff;display:block;float:left;width:100%;height:440px;position:relative;top:0;left:0}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio section.galeria .loading-galeria{padding:10px 0;min-height:275px;max-height:275px;height:275px}}.modal-anuncio section.galeria .loading-galeria>span{width:100%;height:100%;background:#f3f3f3;padding-top:8px;left:0;top:0;opacity:1;transition:opacity .2s ease-in;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;min-height:440px;max-height:440px;height:440px}.modal-anuncio section.galeria .loading-galeria>span i{font-size:40px;color:#303f9f;position:absolute;-webkit-text-stroke:.1px}@media (min-width:1023px){.modal-anuncio section.galeria .loading-galeria>span .mobile{display:none}}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio section.galeria .loading-galeria>span{min-height:275px;max-height:275px;height:275px}.modal-anuncio section.galeria .loading-galeria>span .desktop{display:none}}.modal-anuncio section.galeria .loading-galeria>span .mobile{object-fit:cover;width:100%;min-height:275px;max-height:275px;height:275px;top:0;left:0;position:absolute}.modal-anuncio section.galeria .loading-galeria>span .desktop{object-fit:cover;width:100%;min-height:440px;max-height:440px;height:440px;top:0;left:0;position:absolute;background:#fff}@media (min-width:320px) and (max-width:1023px){.modal-anuncio section.galeria .loading-galeria>span .desktop{padding:0}}.modal-anuncio section.galeria .loading-galeria>span #load{width:130px;animation:loading 3s linear infinite}.modal-anuncio section.galeria .loading-galeria>span #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:10;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#ddd;fill:transparent}.modal-anuncio .ctn{display:block;top:4px;left:0;width:100%;height:46px;float:left;position:relative;z-index:9999;margin-bottom:10px}@media (min-width:1023px){.modal-anuncio .ctn{top:0;left:0;width:65%;padding:10px;padding-top:0;margin-bottom:0;background:#fff}}.modal-anuncio .ctn .share{width:80%;position:relative;display:block;height:40px;top:8px;float:left}.modal-anuncio .ctn .share .ssk-group{display:none;position:absolute;top:46px;width:auto;right:0;border-radius:6px;padding:6px 10px;background:#fff;box-shadow:0 1px 8px -1px rgba(0,0,0,.65)}.modal-anuncio .ctn .share .ssk-group:before{content:'';position:absolute;top:-5px;right:11px;width:0;height:0;border-style:solid;border-width:0 10px 10px 10px;border-color:transparent transparent #fff transparent}.modal-anuncio .ctn .share .ssk-group.active{display:block}.modal-anuncio .ctn .share .ssk-group span.bt-fechar-share{display:block;background:#353535;color:#fff;width:40px;border-radius:63px;text-align:center;transform:rotate(45deg);position:absolute;left:-36px;top:3px;line-height:33px;border:solid 4px #fff}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share{width:70%;position:relative;display:block;height:40px;top:8px;right:5px;z-index:99;float:right}.modal-anuncio .ctn .share .ssk-group{display:none;position:absolute;top:46px;width:auto;right:0;border-radius:6px;padding:6px 10px}.modal-anuncio .ctn .share .ssk-group span{display:none}}.modal-anuncio .ctn .share .alert-bt{position:relative;width:43px;height:40px;border:1px solid #ddd;color:#525252;border-radius:6px;background:0 0;background:#fff;transition:all ease-in-out .3s;transition-delay:.1s;cursor:pointer;display:block;float:right;margin-left:.5em;line-height:17px;box-shadow:0 2px #ddd}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .alert-bt{border:1px solid #fff}}.modal-anuncio .ctn .share .alert-bt:before{content:'\e95b';font-family:Icomoon;font-size:18px;position:absolute;top:11px;left:28%}.modal-anuncio .ctn .share .alert-bt:focus{outline:0}.modal-anuncio .ctn .share .alert-bt.active{border:1px solid #303f9f;color:#303f9f}.modal-anuncio .ctn .share .print-bt{position:relative;width:43px;height:40px;border:1px solid #ddd;box-shadow:0 2px #ddd;color:#525252;border-radius:6px;background:0 0;background:#fff;transition:all ease-in-out .3s;transition-delay:.1s;cursor:pointer;display:block;float:right;margin-left:.5em}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .print-bt{display:none;border:1px solid #fff;box-shadow:0 2px #d6d6d6}}.modal-anuncio .ctn .share .print-bt:before{content:'\e95a';font-family:Icomoon;font-size:18px;position:absolute;top:11px;left:28%}.modal-anuncio .ctn .share .print-bt:focus{outline:0}.modal-anuncio .ctn .share .print-bt.active{border:1px solid #303f9f;color:#303f9f}.modal-anuncio .ctn .share .share-bt{position:relative;width:43px;height:40px;border:1px solid #ddd;box-shadow:0 2px #ddd;color:#525252;border-radius:6px;background:0 0;background:#fff;transition:all ease-in-out .3s;transition-delay:.1s;cursor:pointer;display:block;float:right;margin-left:.5em}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .share-bt{border:1px solid #fff}}.modal-anuncio .ctn .share .share-bt:before{content:'\e959';font-family:Icomoon;font-size:18px;position:absolute;top:11px;left:28%}.modal-anuncio .ctn .share .share-bt:focus{outline:0}.modal-anuncio .ctn .share .share-bt.active{border:1px solid #303f9f;color:#303f9f}.modal-anuncio .ctn .share span.tipFav{position:absolute;background:#008eff;padding:15px;width:250px;border-radius:6px;display:none;left:0;color:#fff;z-index:999;bottom:-98px;box-shadow:0 2px #1871bb;animation:tooltip .6s cubic-bezier(.87,-.41,.19,1.44) 3}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share span.tipFav{right:-2px;left:inherit}}@keyframes tooltip{0%{transform:translateY(0)}70%{transform:translateY(3px)}100%{transform:translateY(0)}}.modal-anuncio .ctn .share span.tipFav:before{content:'';width:0;height:0;border-style:solid;border-width:0 15px 15px 15px;border-color:transparent transparent #008eff transparent;position:absolute;top:-12px;left:10%}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share span.tipFav:before{top:-12px;right:45%;left:inherit}}.modal-anuncio .ctn .share span.tipFav:after{content:'\e921';font-family:icomoon;top:8px;right:7px;position:absolute;font-size:12px;transform:rotate(45deg);opacity:.4}.modal-anuncio .ctn .share span.tipFav .tip{display:block;text-align:left;float:left;position:relative;margin-top:-2px;margin-bottom:5px}.modal-anuncio .ctn .share span.tipFav .tip b{display:block;font-weight:600;font-size:16px;margin-bottom:5px}.modal-anuncio .ctn .share span.tipFav .tip small{display:block;float:right;font-weight:600;font-size:13px;position:absolute;bottom:-12px;right:0;opacity:.8;cursor:pointer}.modal-anuncio .ctn .share span.tipFav .tip small:hover{opacity:1;text-decoration:underline}.modal-anuncio .ctn .share span.tipFav .tip p{color:#fff}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share span.tipFav .tip p{color:#fff}}.modal-anuncio .ctn .share span.tipFav .tip p i{font-size:11px}.modal-anuncio .ctn .share .favorite-bt-interna{position:relative;width:194px;height:40px;border:1px solid #ddd;box-shadow:0 2px #ddd;color:#525252;border-radius:6px;background:0 0;background:#fff;transition:all ease-in-out .3s;transition-delay:.1s;cursor:pointer;display:block;float:left}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .favorite-bt-interna{float:right;width:43px;border:1px solid #fff}.modal-anuncio .ctn .share .favorite-bt-interna:after{display:none}}.modal-anuncio .ctn .share .favorite-bt-interna:focus{outline:0}.modal-anuncio .ctn .share .favorite-bt-interna:before{content:'\e930';font-family:Icomoon;font-size:18px;position:absolute;top:11px;left:11px}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .favorite-bt-interna:before{content:'\e92d';font-family:Icomoon;font-size:18px;position:absolute;top:10px;left:11px}}.modal-anuncio .ctn .share .favorite-bt-interna:after{content:"Salve para ver depois!";opacity:1;font-family:Lato;position:absolute;top:11px;right:7%;font-size:12px;text-transform:uppercase;font-weight:600;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;width:93%;text-align:right}.modal-anuncio .ctn .share .favorite-bt-interna:hover{transition:all ease-in-out .3s}.modal-anuncio .ctn .share .favorite-bt-interna.favorited{border:1px solid #ff1300;color:#ff1300}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .favorite-bt-interna.favorited:after{display:none}}.modal-anuncio .ctn .share .favorite-bt-interna.favorited:before{content:'\e92d';color:red;animation-name:fav-s;animation-duration:.5s;animation-timing-function:ease-in-out}@keyframes fav-s{0%{transform:scale(1)}50%{transform:scale(1.5)}100%{transform:scale(1)}}.modal-anuncio .ctn .share .favorite-bt-interna.favorited:after{content:"Salvo em Favoritos!"}.modal-anuncio .ctn .share .favorite-bt-interna.favorited:hover:after{content:"Salvo em Favoritos!"}.modal-anuncio .ctn .share .btShare{display:block;position:relative;width:40px;height:40px;border:1px solid rgba(0,0,0,.18);color:#525252;border-radius:4px;background:0 0;transition:all ease-in-out .3s;transition-delay:.1s;cursor:pointer;float:right;margin-right:10px;line-height:40px;font-weight:600;text-align:center}.modal-anuncio .ctn .share .btShare span{display:none}.modal-anuncio .deskt-height{display:block;width:100%;float:left;padding-bottom:1em;position:relative}.modal-anuncio .deskt-height .content{width:65%;display:block}@media screen and (max-width:1100px) and (min-width:1023px){.modal-anuncio .deskt-height .content{width:62%}}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .deskt-height{width:100%;padding-bottom:0}.modal-anuncio .deskt-height .content{width:100%}}.modal-anuncio .tabs-gal{display:block;float:left;width:100%;background:#fff;overflow:hidden;height:36px;margin-top:-10px;z-index:9;position:relative;padding:0 10px;border-left:solid 1px #ddd;border-right:solid 1px #ddd}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal{background:#fff;border-radius:0;height:40px;padding:0;border:none}}.modal-anuncio .tabs-gal ul{display:block;float:left;width:100%;padding:0;border-radius:0 0 6px 6px;overflow:hidden}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul{border:0}}.modal-anuncio .tabs-gal ul li{display:block;float:left;width:auto;padding:8px 1em;padding-left:1em;cursor:pointer;background:#fff;border-right:solid 1px #fff2d6;border-bottom:solid 1px #fff2d6}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li{border-right:solid 1px #fff2d6;padding:10px 2.83%}}.modal-anuncio .tabs-gal ul li:hover{background:#ffedc8}.modal-anuncio .tabs-gal ul li:last-child{border-radius:0 0 6px 0}.modal-anuncio .tabs-gal ul li.active{background:#ffda8d}.modal-anuncio .tabs-gal ul li.active span{color:#353535}.modal-anuncio .tabs-gal ul li.active span i{color:#353535}.modal-anuncio .tabs-gal ul li.active a{color:#353535}.modal-anuncio .tabs-gal ul li span{text-transform:uppercase;font-size:12px;font-weight:600;line-height:15px;color:rgba(4,4,4,.61)}.modal-anuncio .tabs-gal ul li span p{display:inline-block;line-height:14px;position:relative}.modal-anuncio .tabs-gal ul li span i{font-size:16px;color:rgba(4,4,4,.61);position:relative;margin-right:5px;top:2px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li span i{display:none}}.modal-anuncio .tabs-gal ul li span i.icon-street-v{font-size:19px;line-height:13px;top:5px}.modal-anuncio .tabs-gal ul li span small{padding:0 5px;border-radius:3px;position:relative;margin-left:5px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li span small{margin-left:5px;padding:2px 5px;top:0;border:none}}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li span small span{font-size:13px}}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li#tabGaleria span p{display:none}}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li#tabGaleria span i{display:inline-block}}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li#tabStreet span p{display:inline-block}}.modal-anuncio .tabs-gal ul li#tabStreet span i{margin-right:5px}.modal-anuncio .tabs-gal ul li a{text-transform:uppercase;font-size:12px;font-weight:600;color:rgba(4,4,4,.61);text-decoration:none}.modal-anuncio .tabs-gal ul li a i{font-size:16px;color:rgba(4,4,4,.61);position:relative;margin-right:5px;top:2px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li a i{font-size:18px;margin-right:0;display:none}}.modal-anuncio .tabs-gal ul li a p{display:inline-block;line-height:14px;position:relative;top:-1px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .tabs-gal ul li a p{top:0}}.modal-anuncio section.video{display:none;float:left;width:100%;position:relative;min-height:440px;background:#fff;padding:10px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio section.video{min-height:275px;padding:0}}.modal-anuncio section.street-v{display:none;float:left;width:100%;position:relative;min-height:440px;padding:10px;overflow:hidden;border:solid 10px #fff}@media (min-width:320px) and (max-width:1023px){.modal-anuncio section.street-v{min-height:275px;padding:0;border:none}}.modal-anuncio section.street-v .msg-ind{position:absolute;width:100%;height:100%;text-align:center;background:#444;left:0;top:0;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}.modal-anuncio section.street-v .msg-ind span{color:#fff;border:solid 1px #ddd;padding:1em}.modal-anuncio article.main-content{float:left;display:block;position:relative;width:100%;padding:0 1.5em;padding-top:1em;background:#fff;min-height:360px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content{float:left;display:block;position:relative;width:100%;padding:0 1em;min-height:400px}}.modal-anuncio article.main-content h1{display:block;float:left;width:100%;margin-top:1em;margin-bottom:6px;font-size:20px;line-height:25px;letter-spacing:.16px;color:#353535;font-weight:600;text-decoration:none}@media screen and (max-width:1024px){.modal-anuncio article.main-content h1{font-size:16px;line-height:24px}}.modal-anuncio article.main-content h1 i{margin-left:10px;font-size:16px;color:#0024b5}.modal-anuncio article.main-content h1 span.tag.lancamento{top:-3px;border:solid 1px #5021c5;font-size:11px;text-transform:uppercase;padding:3px 11px;border-radius:21px;color:#5021c5;position:relative}.modal-anuncio article.main-content h1 span.direto{font-size:12px;font-weight:600;border:solid 1px #327d32;padding:0 10px;border-radius:60px;color:#327d32;letter-spacing:0;margin-left:1em;position:relative;top:-2px;display:inline-block}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content h1 span.direto{font-size:10px;font-weight:600;border:solid 1px #327d32;padding:0 10px;border-radius:60px;color:#327d32;line-height:19px;letter-spacing:0;margin-left:0;position:relative;top:0;display:inline-block;text-transform:uppercase}}.modal-anuncio article.main-content h1 span.endereco a{float:left;display:block;width:100%;font-size:14px;letter-spacing:.12px;line-height:18px;margin-top:5px;text-decoration:none;text-transform:capitalize;color:#717171;font-weight:400}.modal-anuncio article.main-content>h2{display:flex;width:100%;margin-bottom:2rem;text-transform:capitalize;font-weight:600}.modal-anuncio article.main-content>h2>a{text-decoration:none;color:#717171;font-weight:500}@media screen and (max-width:1024px){.modal-anuncio article.main-content>h2>a{line-height:20px}}.modal-anuncio article.main-content ul.list-ch{display:flex;float:left;width:100%;flex-wrap:wrap}.modal-anuncio article.main-content ul.list-ch li{padding-top:15px;padding-bottom:15px}.modal-anuncio article.main-content ul.list-ch li.quartos{width:25%;border:solid 1px #f3f3f3;text-align:center;margin-top:-1px}@media screen and (max-width:359px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li.quartos{width:70px}}.modal-anuncio article.main-content ul.list-ch li.salas{width:25%;border:solid 1px #f3f3f3;text-align:center;margin-top:-1px}@media screen and (max-width:359px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li.salas{width:70px}}.modal-anuncio article.main-content ul.list-ch li.suites{width:20%;border:solid 1px #f3f3f3;border-left:0;text-align:center;margin-top:-1px}@media screen and (max-width:359px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li.suites{width:50px}}.modal-anuncio article.main-content ul.list-ch li.vagas{width:25%;border:solid 1px #f3f3f3;border-left:0;text-align:center;margin-top:-1px;margin-left:-1px}@media screen and (max-width:359px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li.vagas{width:70px}}.modal-anuncio article.main-content ul.list-ch li.banheiros{width:30%;border:solid 1px #f3f3f3;text-align:center;margin-top:-1px;margin-left:-1px}@media screen and (max-width:359px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li.banheiros{max-width:78px}}.modal-anuncio article.main-content ul.list-ch li:first-child{margin-left:0}.modal-anuncio article.main-content ul.list-ch li.valor-m2{display:block;width:25%;margin:0;border:solid 1px #f3f3f3;text-align:center;margin-left:-1px}.modal-anuncio article.main-content ul.list-ch li.valor-m2 span.ttl{display:block;width:100%}.modal-anuncio article.main-content ul.list-ch li.valor-m2 span{display:block;width:100%}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content ul.list-ch li.valor-m2{width:100%;border:solid 1px #f3f3f3;padding-left:1em;margin-left:0}.modal-anuncio article.main-content ul.list-ch li.valor-m2 span.ttl{width:auto;margin:0}.modal-anuncio article.main-content ul.list-ch li.valor-m2 span{width:auto;margin:0;margin-left:7px}}.modal-anuncio article.main-content ul.list-ch li.valor{display:block;margin:0;width:50%;max-width:45%;padding-left:1em;border:solid 1px #f3f3f3;text-align:left}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content ul.list-ch li.valor{width:65%;max-width:65%}}.modal-anuncio article.main-content ul.list-ch li.valor span{font-size:18px;color:#303f9f}.modal-anuncio article.main-content ul.list-ch li.valor span.menorValor{font-size:18px;color:#303f9f;margin-top:0}.modal-anuncio article.main-content ul.list-ch li.valor span.maiorValor{font-size:14px}.modal-anuncio article.main-content ul.list-ch li.valor span.maiorValor span{font-size:14px}.modal-anuncio article.main-content ul.list-ch li.valor span.taxas{font-weight:400;font-size:14px;color:#717171;text-transform:none;margin-top:5px;display:block}.modal-anuncio article.main-content ul.list-ch li.area{display:block;margin-left:0;display:block;margin-left:0;width:30%;margin-right:0;border:solid 1px #f3f3f3;text-align:center;margin-left:-1px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content ul.list-ch li.area{width:35%;border:solid 1px #f3f3f3;margin-right:0;border-bottom:0}}.modal-anuncio article.main-content ul.list-ch li.area span.ttl{display:block;width:100%}.modal-anuncio article.main-content ul.list-ch li.area span{display:block;width:100%}.modal-anuncio article.main-content ul.list-ch li>span.ttl{font-size:11px;margin-top:0;text-transform:uppercase;color:#717171;font-weight:600}@media screen and (max-width:1023px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li>span.ttl{display:block;float:left;font-size:11px;margin-top:0;text-transform:uppercase;color:#717171;font-weight:600}}.modal-anuncio article.main-content ul.list-ch li>span{font-size:14px;color:#353535;font-weight:600;width:100%;margin-top:8px;letter-spacing:.12px}@media screen and (max-width:1023px) and (min-width:320px){.modal-anuncio article.main-content ul.list-ch li>span{display:block;float:left;font-size:14px;color:#353535;font-weight:600;width:100%;margin-top:8px;letter-spacing:.12px}}.modal-anuncio article.main-content .text-description{position:relative;display:flex;flex-flow:row wrap;width:100%}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content .text-description{padding-bottom:1em}}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content .text-description.short-d{max-height:250px;overflow:hidden;margin-bottom:1em}}.modal-anuncio article.main-content .text-description span.referencia{margin-top:9px;position:absolute;top:0;right:0;padding:10px;font-weight:400;text-transform:uppercase;font-size:12px;color:#303f9f;max-width:70%}.modal-anuncio article.main-content .text-description .button-read-more{display:none}@media (min-width:320px) and (max-width:1023px){.modal-anuncio article.main-content .text-description .button-read-more{display:block;width:100%;float:left;background:rgba(255,255,255,.97);position:absolute;bottom:0;text-align:center;text-transform:uppercase;font-size:12px;font-weight:600;color:#717171;padding:15px;border:solid 1px #ddd;cursor:pointer}}.modal-anuncio article.main-content .text-description p{display:block;float:left;font-size:14px;line-height:19px;width:100%;color:#717171;word-break:break-word}.modal-anuncio article.main-content .text-description p a{font-size:14px;text-decoration:underline;font-weight:400;color:#303f9f;text-transform:lowercase}.modal-anuncio article.main-content .text-description h2{font-size:14px;font-weight:600;display:flex;flex-flow:row wrap;margin-bottom:12px;margin-top:3rem;color:#353535;line-height:20px}.modal-anuncio article.main-content h3{display:block;width:100%;float:left;text-transform:uppercase;font-size:12px;font-weight:600;color:#353535;padding:20px 0}.modal-anuncio article.main-content .areaspc{display:block;float:left;margin-top:20px;width:100%;border-top:solid 1px #f3f3f3;position:relative}.modal-anuncio article.main-content .areaspc h3{padding-bottom:0}.modal-anuncio article.main-content .areaspc .box-50{display:block;float:left;padding:1em 0;width:100%}.modal-anuncio article.main-content .areaspc h4.privativa{color:#4d96d4;text-transform:uppercase;font-size:12px;font-weight:600}.modal-anuncio article.main-content .areaspc h4.privativa i{background:#4d96d4;margin-right:10px}.modal-anuncio article.main-content .areaspc h4.comum{color:#3fc598;text-transform:uppercase;font-size:12px;font-weight:600}.modal-anuncio article.main-content .areaspc h4.comum i{background:#3fc598;margin-right:10px}.modal-anuncio article.main-content .areaspc ul{display:flex;flex-wrap:wrap;width:100%;float:left}.modal-anuncio article.main-content .areaspc ul.comum li{background:#3fc598}.modal-anuncio article.main-content .areaspc ul.privativa li{background:#4d96d4}.modal-anuncio article.main-content .areaspc ul li{font-size:13px;padding:10px 15px;margin-top:5px;margin-right:5px;color:#fff}.modal-anuncio .fixed-btn{position:fixed;bottom:10px;left:0;text-decoration:none;width:100%;z-index:9999;background:#fff;display:flex;flex-flow:row nowrap;align-items:center;align-content:center;transform:translate3d(0,0,0)}@media screen and (min-width:1024px){.modal-anuncio .fixed-btn{display:none}}.modal-anuncio .fixed-btn span.tipWhats{display:none}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .fixed-btn span.tipWhats{position:fixed;background:#008eff;padding:15px;width:90%;border-radius:6px;display:none;color:#fff;font-size:14px;bottom:80px;left:3%;max-width:300px;box-shadow:0 2px #1871bb;animation:tooltip .6s cubic-bezier(.87,-.41,.19,1.44) 3;text-transform:none}}@keyframes tooltip{0%{transform:translateY(0)}70%{transform:translateY(3px)}100%{transform:translateY(0)}}.modal-anuncio .fixed-btn span.tipWhats:before{content:'';width:0;height:0;border-style:solid;border-width:0 15px 15px 15px;border-color:transparent transparent #008eff transparent;position:absolute;bottom:-15px;left:7%;transform:rotate(180deg)}.modal-anuncio .fixed-btn span.tipWhats:after{content:'\e921';font-family:icomoon;top:8px;right:7px;position:absolute;font-size:12px;transform:rotate(45deg);opacity:.4}.modal-anuncio .fixed-btn span.tipWhats .tip{display:block;text-align:left;float:left;position:relative;margin-top:-2px;margin-bottom:5px}.modal-anuncio .fixed-btn span.tipWhats .tip b{display:block;font-weight:600;font-size:16px;margin-bottom:5px}.modal-anuncio .fixed-btn span.tipWhats .tip small{display:block;float:right;font-weight:600;font-size:13px;position:absolute;bottom:-12px;right:0;opacity:.8;cursor:pointer}.modal-anuncio .fixed-btn span.tipWhats .tip small:hover{opacity:1;text-decoration:underline}.modal-anuncio .fixed-btn span.tipWhats .tip p{text-transform:none;letter-spacing:-.2px;text-align:left;font-size:16px;font-family:lato;-webkit-text-stroke:.2px;line-height:18px}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .fixed-btn span.tipWhats .tip p{color:#fff}}.modal-anuncio .fixed-btn span.tipWhats .tip p i{font-size:11px}.modal-anuncio .fixed-btn .btn-whatsapp{display:block;float:left;min-width:70px;text-align:center;padding:5px 0;text-transform:uppercase;text-decoration:none;font-weight:600;color:#7cb342;background:#fff;border-right:0;font-size:26px;border:solid 1px #f3f3f3;border-radius:4px;pointer-events:all;cursor:pointer;z-index:999}.modal-anuncio .fixed-btn a{width:100%;display:flex;align-items:center;align-content:center;justify-content:center;background:#3f51b5;height:42px;border-radius:4px;color:#fff;text-decoration:none;font-weight:600;text-transform:uppercase;font-size:13Px;margin:1%;margin-right:0}.modal-anuncio .fixed-btn a.forms-cta{background:#ff5722;margin-right:1%}.modal-anuncio .btns{float:left;display:block;width:auto;z-index:99;position:absolute;right:1em;top:1em}.modal-anuncio .btns span.galeria_btn{float:left;width:auto;display:block;padding:0;background:#3f51b5;border-radius:4px;text-transform:uppercase;font-size:12px;font-weight:600;color:#fff;line-height:22px;transition:background .2s ease-in;position:relative;overflow:hidden}.modal-anuncio .btns span.galeria_btn b{display:none}.modal-anuncio .btns span.galeria_btn>span{display:block;float:left;background:#2f2f2f;padding:5px 10px}.modal-anuncio .btns span.galeria_btn:hover{background:#525252;transition:background .2s ease-in}.modal-anuncio .btns span.video{float:left;width:auto;display:block;padding:10px;background:#e4e4e4;border-radius:0 6px 6px 0;text-transform:uppercase;font-size:12px;font-weight:600;color:#353535}.modal-anuncio .btns span.video b{display:none}.modal-anuncio .btns span i{margin-right:9px;font-size:25px;margin-left:9px;line-height:40px;top:0;position:relative;padding:0}.modal-anuncio .modal-loading{display:block;position:absolute;width:100%;height:100%;left:0;top:0}.modal-anuncio .modal-loading>span{width:100%;height:100%;padding-top:8px;left:0;top:0;background:#fff;opacity:1;transition:opacity .2s ease-in;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .modal-loading>span{padding-top:0}}.modal-anuncio .modal-loading>span i{font-size:40px;color:#303f9f;position:absolute;-webkit-text-stroke:.1px}.modal-anuncio .modal-loading>span #load{width:130px;animation:loading 3s linear infinite}.modal-anuncio .modal-loading>span #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:10;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#ddd;fill:transparent}.modal-anuncio .btn-fechar{position:relative;margin-left:0;background:#fff;padding:1em;float:left;width:117px;height:40px;top:8px;cursor:pointer;color:#353535;text-transform:uppercase;font-size:12px;font-weight:600;line-height:16px;text-align:center;padding-left:1.4em;display:block;margin-right:1em;border:1px solid #ddd;box-shadow:0 2px #ddd;border-radius:6px}@media screen and (max-width:1345px) and (min-width:1023px){.modal-anuncio .btn-fechar{width:13%}.modal-anuncio .btn-fechar i{display:none}}.modal-anuncio .btn-fechar i{position:absolute;left:21px;top:14px;transform:rotate(180deg);font-weight:600;font-size:11px}@media (min-width:320px) and (max-width:1023px){.modal-anuncio .btn-fechar{position:relative;margin-left:0;width:25%;float:left;height:40px;font-size:12px;font-weight:600;line-height:40px;padding:0;background:#fff;border:solid 1px #fff;box-shadow:0 2px #ddd;top:8px;left:4px;color:#636363;text-align:center;padding-left:13px}.modal-anuncio .btn-fechar i{position:absolute;left:8px;top:14px;transform:rotate(180deg);font-weight:600;font-size:9px;-webkit-text-stroke:.3px}}.modal-anuncio .btn-fechar:hover{background:#ffecec}.slick-slider{position:relative;display:block;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent;min-height:300px}@media (min-width:320px) and (max-width:1023px){.slick-slider{min-height:275px}}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:440px;min-height:1px;position:relative}@media screen and (min-width:320px) and (max-width:640px){.slick-slide{height:275px}}.slick-slide,.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-transform:translateZ(0);-moz-transform:translateZ(0);-ms-transform:translateZ(0);-o-transform:translateZ(0);transform:translateZ(0);-webkit-perspective:1000;-moz-perspective:1000;-ms-perspective:1000;perspective:1000;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;backface-visibility:hidden}[dir=rtl] .slick-slide{float:right}.slick-slide img.img-ver{display:block;margin:0 3px;min-height:440px;max-height:440px;height:440px;width:auto;position:relative;object-fit:contain;background:#000;margin:auto;opacity:1;object-fit:cover}@media screen and (min-width:320px) and (max-width:640px){.slick-slide img.img-ver{min-height:275px;max-height:275px;height:275px}}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.slick-lightbox{position:fixed;top:0;left:0;z-index:999999999;width:100%;height:100%;background:#000;-webkit-transition:opacity .5s ease;transition:opacity .5s ease}.slick-lightbox .slick-loading .slick-list{background-color:transparent}.slick-lightbox .slick-prev{left:0;bottom:0;transform:rotate(180deg);height:62px;position:absolute;z-index:9999;background:#4c4c4c;width:50%;-webkit-appearance:none;-moz-appearance:none;border:none;font-size:0}@media screen and (min-width:1024px){.slick-lightbox .slick-prev{bottom:48%;width:69px}}.slick-lightbox .slick-prev:focus{outline:0}.slick-lightbox .slick-prev:before{content:'\e912';font-family:icomoon;font-size:23px;text-shadow:0 1px 7px rgba(0,0,0,.55);-webkit-text-stroke:2.2px;color:#fff}.slick-lightbox .slick-next{right:0;bottom:0;height:62px;position:absolute;z-index:9999;background:#545454;width:50%;-webkit-appearance:none;-moz-appearance:none;border:none;font-size:0}@media screen and (min-width:1024px){.slick-lightbox .slick-next{bottom:48%;width:69px}}.slick-lightbox .slick-next:focus{outline:0}.slick-lightbox .slick-next:before{content:'\e912';font-family:icomoon;font-size:23px;text-shadow:0 1px 7px rgba(0,0,0,.55);-webkit-text-stroke:2.2px;color:#fff}.slick-lightbox-hide{opacity:0}.slick-lightbox-hide-init{position:absolute;top:-9999px;opacity:0}.slick-lightbox-inner{position:fixed;top:0;left:0;width:100%;height:100%}.slick-lightbox-slick-item{text-align:center;overflow:hidden}.slick-lightbox-slick-item:before{content:'';display:inline-block;height:100%;vertical-align:middle;margin-right:-.25em}.slick-caption-bottom .slick-lightbox-slick-item .slick-lightbox-slick-item .slick-lightbox-slick-caption{position:absolute;bottom:0;left:0;text-align:center;width:100%;margin-bottom:20px}.slick-caption-dynamic .slick-lightbox-slick-item .slick-lightbox-slick-item .slick-lightbox-slick-caption{display:block;text-align:center}.slick-lightbox-slick-item-inner{display:inline-block;vertical-align:middle;max-width:90%;max-height:90%}.slick-lightbox-slick-img{margin:0 auto;display:block;max-width:90%;max-height:90%}.slick-lightbox-slick-caption{margin:10px 0 0;color:#fff}.slick-lightbox-close{position:absolute;top:15px;right:15px;display:block;height:20px;width:20px;line-height:0;font-size:0;cursor:pointer;background:0 0;color:transparent;padding:0;border:none}.slick-lightbox-close:focus{outline:0}.slick-lightbox-close:before{font-family:slick;font-size:31px;line-height:1;color:#fff;opacity:.85;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:'×'}@keyframes loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes loading-circle{0%{stroke-dashoffset:0}100%{stroke-dashoffset:-600}}.side-form{display:block;float:right;width:22em;position:fixed;right:1.58%!important;top:0;max-width:22em;z-index:999999}@media screen and (min-width:1023px) and (max-width:1345px){.side-form{width:330px!important;z-index:9999}}.side-form.static{position:relative;transform:translateY(75px)}.side-form.fixed_header{position:fixed;max-width:22em;top:0;transform:translateY(0)}@media (min-width:320px) and (max-width:1023px){.side-form{display:block;float:right;width:100%;position:relative;right:inherit!important;top:0;max-width:100%;margin-top:1em;background:#eaebef}}.side-form .tips{display:none}.side-form .form-contato p.top-call{float:left;width:100%;background:#fff;font-size:14px;font-weight:600;color:#353535;text-transform:uppercase;letter-spacing:.18px;padding:18px 0;padding-top:14px;position:relative;transition:margin .2s linear;line-height:30px;border-radius:6px;text-align:left}.side-form .form-contato p.top-call.deactive{margin-top:-60px;transition:margin .2s linear}.side-form .form-contato p.top-call i{font-size:30px;position:relative;left:0;top:9px;margin-right:10px}.side-form .form-contato p.top-call i.icon-phone{top:0;color:#ef630a;float:initial}.side-form .form-contato p.top-call .phoneTrack{display:block;float:right}.side-form .form-contato p.top-call .phoneTrack a{font-size:28px;color:#2b2b2b;text-decoration:none}.side-form .form-contato p.top-call .phoneTrack a small{font-weight:400;margin-right:5px;font-size:80%}.side-form .form-contato p.top-call .phoneTrack a small .icon-phone{color:#ef630a;float:left;text-decoration:none;font-size:23px;top:4px}.side-form .form-contato p.top-call img{display:block;float:left;position:relative;left:0;top:0;line-height:40px;margin-right:2em;max-height:30px;width:auto}.side-form .whatsnamao{background:#4caf50;padding:8px 9px;color:#fff;border-radius:4px;font-weight:600;text-decoration:none}.side-form .whatsnamao i{font-size:20px;color:#fff;position:relative;top:3px;margin-right:10px}.side-form .sucessfull-send{text-align:center;position:relative;left:0;width:100%;display:none;height:100%;max-height:69%;padding:20% 0}.side-form .sucessfull-send img{margin:auto}.side-form .sucessfull-send p{display:block;text-align:center;font-size:16px;color:#717171;font-weight:400}.side-form .sucessfull-send p span{font-size:21px;display:block;width:100%;font-weight:600;color:#303f9f;margin-bottom:5px}.side-form .sucessfull-send span.close-trigger-forms{display:block;background:#ff7427;width:100%;max-width:308px;margin:auto;margin-top:10px;border-radius:60px;padding:10px 0;color:#fff;text-transform:uppercase;font-weight:600;text-align:center;position:relative}.side-form .sucessfull-send span.close-trigger-forms>i.icon-left-arrow{margin-right:10px}.side-form .sucessfull-send span.close-trigger-forms>i.icon-plus{margin-right:21px;position:relative}.side-form .sucessfull-send span.close-trigger-forms>i.icon-plus:before{color:rgba(0,0,0,.27);position:absolute;transform:rotate(45deg);top:1px}.side-form .sucessfull-send .btBack{display:block;background:#303f9f;width:100%;max-width:300px;text-align:center;margin:auto;margin-top:10px;border-radius:60px;padding:10px 0;color:#fff;text-transform:uppercase;font-weight:600;position:relative}.side-form .sucessfull-send .btBack i{margin-right:10px}.side-form .sucessfull-send .btCancel{display:block;background:#303f9f;width:100%;max-width:300px;text-align:center;margin:auto;margin-top:10px;border-radius:60px;padding:10px 0;color:#fff;text-transform:uppercase;font-weight:600;position:relative}.side-form .sucessfull-send .btCancel i{margin-right:10px}@media screen and (min-width:319px) and (max-width:1023px){.modal-anuncio .ctn .share .ssk-group{display:none}}.anuncio-loaded .ssk-group{display:none}@media screen and (min-width:319px) and (max-width:1023px){.anuncio-loaded .ssk-group{display:block;float:left;margin:auto;text-align:center;background:rgba(189,189,189,.18);width:100%;padding:13px;background:#fff;z-index:99;position:relative}}.anuncio-loaded .ssk-group>span{display:none;float:left;font-size:12px;text-transform:uppercase;font-weight:600;color:#ababab;line-height:32px;margin-right:11px}@media screen and (min-width:319px) and (max-width:1023px){.anuncio-loaded .ssk-group>span{display:block;color:#717171}}.anuncio-loaded .ssk-group>a.ssk{width:33px;float:right;height:33px;border-radius:3px;padding:4px;display:inline-block;line-height:17px}.anuncio-loaded .ssk-group>a.ssk:last-child{margin-right:4px}div.side-form .tabs{display:table;table-layout:fixed;width:100%;margin:0;margin-top:8px;margin-bottom:8px}div.side-form .tabs>li{display:block;list-style:none;text-align:center;padding:9px 10px;position:relative;overflow:hidden;color:#717171;line-height:14px;text-transform:uppercase;font-size:11px;font-weight:600;border-left:none;cursor:pointer;border-radius:6px;width:32.8%;float:left;margin-left:.5%;background:#edeef3;box-shadow:0 3px #ced1d6;border:solid 1px #ddd}@media screen and (min-width:320px) and (max-width:640px){div.side-form .tabs>li{font-size:11px}}div.side-form .tabs>li.active{background:#fdd685;box-shadow:0 3px #f3c25c;border:solid 1px #f3c25c;color:#353535}div.side-form .tabs>li:first-child:nth-last-child(2),div.side-form .tabs>li:first-child:nth-last-child(2)~li{width:49%}div.side-form .tabs>li.active:before{background-color:#fff;-webkit-transform:translateY(0);transform:translateY(0)}div.side-form .tab__content{position:relative;width:100%;margin:0;margin-bottom:0;float:left;display:block}div.side-form .tab__content>li{width:100%;position:absolute;top:0;left:0;display:none;list-style:none}div.side-form .tab__content>li .content__wrapper{text-align:center;border-radius:0;width:100%;padding:1em;background-color:#fff;display:block;float:left;margin-top:-1px;padding-top:10px;box-shadow:0 9px 7px -7px rgba(0,0,0,.15);border-radius:6px}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper{padding:.5em;border:solid 1px #ddd;border-top:none}}div.side-form .content__wrapper form{display:block;width:100%;position:relative;float:left}div.side-form .content__wrapper form span.loading{display:none}div.side-form .content__wrapper form.enviando span.loading{position:absolute;width:100%;height:100%;padding-top:8px;left:0;top:0;opacity:1;transition:opacity .2s ease-in;z-index:999;background:rgba(255,255,255,.8)}div.side-form .content__wrapper form.enviando span.loading i{font-size:40px;color:#303f9f;position:absolute;-webkit-text-stroke:.1px}div.side-form .content__wrapper form.enviando span.loading #load{width:60px;top:38%;position:relative;animation:loading 3s linear infinite}div.side-form .content__wrapper form.enviando span.loading #load #loading-inner{stroke-dashoffset:0;stroke-dasharray:300;stroke-width:15;stroke-miterlimit:15;stroke-linecap:round;animation:loading-circle 2s linear infinite;stroke:#ff7427;fill:transparent}div.side-form .content__wrapper form.enviando fieldset{opacity:.5}div.side-form .content__wrapper form.enviando .loading{display:block}div.side-form .content__wrapper form span.span-alert{position:absolute;left:0;width:100%;height:100%;background:rgba(255,255,255,.9);z-index:999;padding-top:17%;display:none}div.side-form .content__wrapper form span.span-alert p{padding:2em;font-size:16px;display:block;font-weight:600;color:#353535;float:left;width:100%;margin-bottom:5%}div.side-form .content__wrapper form span.span-alert p small{display:block;font-size:14px;font-weight:400;margin-top:5px}div.side-form .content__wrapper form span.span-alert p i{display:block;width:100%;float:left;font-size:47px;margin-bottom:15px;color:#388e3c}div.side-form .content__wrapper form span.span-alert span.bt-alert{-webkit-appearance:none;-moz-appearance:none;width:100%;padding:1em;text-transform:uppercase;border:none;background:#ff7427;color:#fff;font-weight:600;font-size:16px;border-radius:6px;cursor:pointer}div.side-form .content__wrapper form span.span-alert span.bt-alert:focus{outline:0}div.side-form .content__wrapper form.formFinanciamento{padding:15px 0}div.side-form .content__wrapper form.formFinanciamento fieldset{margin-bottom:15px}@media screen and (min-width:320px) and (max-width:1023px){div.side-form .content__wrapper form.formFinanciamento fieldset{margin-bottom:8px}}div.side-form .content__wrapper form.formFinanciamento fieldset.select-v{margin-bottom:15px}@media screen and (min-width:320px) and (max-width:1023px){div.side-form .content__wrapper form.formFinanciamento fieldset.select-v{margin-bottom:8px}}div.side-form .content__wrapper form.formVisita{padding:15px 0}div.side-form .content__wrapper form.formVisita fieldset{margin-bottom:15px}@media screen and (min-width:320px) and (max-width:1023px){div.side-form .content__wrapper form.formVisita fieldset{margin-bottom:8px}}div.side-form .content__wrapper form.formVisita fieldset.select-v{margin-bottom:15px}@media screen and (min-width:320px) and (max-width:1023px){div.side-form .content__wrapper form.formVisita fieldset.select-v{margin-bottom:8px}}div.side-form .content__wrapper form fieldset{display:block;width:100%;position:relative;float:left;outline:0;margin-bottom:8px;border:none;z-index:1;background:#fff;border-radius:6px}@media screen and (min-width:320px) and (max-width:1024px){div.side-form .content__wrapper form fieldset{margin-bottom:8px}}div.side-form .content__wrapper form fieldset.sf{background:0}div.side-form .content__wrapper form fieldset>label{display:block;float:left;font-weight:600;color:#717170;margin-top:0;margin-bottom:4px;width:35px;position:absolute;height:100%;text-align:center;font-size:18px;padding-top:10px}div.side-form .content__wrapper form fieldset>label.adicionar-comentario{width:100%;font-size:12px;text-align:left;padding-left:10px;top:0}div.side-form .content__wrapper form fieldset>label.full{width:100%;text-align:left;font-size:12px;position:relative}div.side-form .content__wrapper form fieldset textarea{display:block;width:100%;padding:10px 10px;float:left;outline:0;border:none;font-size:12px;color:#717171;-webkit-appearance:none;-moz-appearance:none;font-family:lato;height:58px;z-index:9;position:relative;margin-top:14px;background:0 0}div.side-form .content__wrapper form fieldset input{width:100%;z-index:9;padding-left:40px;display:block;float:left;-webkit-appearance:none;-moz-appearance:none;-moz-appearance:none;border:none;height:38px;border:solid 1px rgba(0,0,0,.18);line-height:28px;color:#353535;font-size:16px;background:0 0;box-shadow:0 2px 6px -1px rgba(0,0,0,.25);border-radius:6px}div.side-form .content__wrapper form fieldset input.error{border:solid 1px #f44336}div.side-form .content__wrapper form fieldset input.error+label i{color:#f44336}div.side-form .content__wrapper form fieldset input:focus{outline:0;border:solid 1px #c9d1ff}div.side-form .content__wrapper form fieldset input:focus+label i{color:#303f9f}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset.button{margin-top:10px}}div.side-form .content__wrapper form fieldset._w70{width:55%;float:left;margin-right:2%}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset._w70{width:100%}}div.side-form .content__wrapper form fieldset.left{margin-left:1%}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset.left{margin:0}}div.side-form .content__wrapper form fieldset._w30{width:42.5%;float:left;padding-right:0;margin-right:0}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset._w30{width:48%}}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset.exp-mail{width:50%}}div.side-form .content__wrapper form fieldset.select-v{margin-bottom:7px}@media screen and (min-width:641px) and (max-width:959px){div.side-form .content__wrapper form fieldset.select-v{margin-bottom:0}}div.side-form .content__wrapper form fieldset.select-v .switch-field{display:block;float:left;width:98%;margin-left:2%}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset.select-v .switch-field{width:100%;margin-left:0}}@media screen and (min-width:641px) and (max-width:959px){div.side-form .content__wrapper form fieldset.select-v .switch-field{display:block;float:left;width:100%;margin-left:0}}div.side-form .content__wrapper form fieldset.select-v .switch-field.large label{width:83px}div.side-form .content__wrapper form fieldset.select-v .switch-field input{position:absolute!important;clip:rect(0,0,0,0);height:1px;width:1px;border:0;overflow:hidden}div.side-form .content__wrapper form fieldset.select-v .switch-field label{float:left}div.side-form .content__wrapper form fieldset.select-v .switch-field label{display:inline-block;width:16.6%;background-color:#e4e4e4;color:#364250;font-size:12px;font-weight:600;text-align:center;text-shadow:none;padding:6px 0;border-left:solid .5px rgba(111,111,111,.18)}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset.select-v .switch-field label{width:16.6%}}div.side-form .content__wrapper form fieldset.select-v .switch-field input:checked+label{background-color:#093358;-webkit-box-shadow:none;box-shadow:none;color:#fff}div.side-form .content__wrapper form fieldset.select-v .switch-field label:first-of-type{border-radius:4px 0 0 4px}div.side-form .content__wrapper form fieldset.select-v .switch-field label:last-of-type{border-radius:0 4px 4px 0}div.side-form .content__wrapper form fieldset .cta-go{width:100%;background:#ff7427;height:48px;text-transform:uppercase;font-size:16px;color:#fff;border-radius:5px;box-shadow:0 4px 0 0 #ec6d29;border:none;font-weight:600}div.side-form .content__wrapper form fieldset .cta-go:focus{outline:0}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset .cta-go{height:52px}}div.side-form .content__wrapper form fieldset .styled-checkbox{position:absolute;opacity:0}div.side-form .content__wrapper form fieldset .styled-checkbox+label{position:relative;padding:0;margin-top:5px;letter-spacing:.14px;line-height:16px;color:#353535;width:100%;font-size:12px;font-weight:400;text-align:left}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form fieldset .styled-checkbox+label{margin-top:6px;margin-bottom:0}}div.side-form .content__wrapper form fieldset .styled-checkbox+label:before{content:'';margin-right:10px;display:inline-block;float:left;vertical-align:text-top;width:20px;height:20px;background:#717171}div.side-form .content__wrapper form fieldset .styled-checkbox:checked+label:before{background:#fff;border:solid 1px #ddd}div.side-form .content__wrapper form fieldset .styled-checkbox:checked+label:after{content:'';position:absolute;left:5px;top:9px;background:#ff7427;width:2px;height:2px;box-shadow:2px 0 0 #ff7427,4px 0 0 #ff7427,4px -2px 0 #ff7427,4px -4px 0 #ff7427,4px -6px 0 #ff7427,4px -8px 0 #ff7427;transform:rotate(45deg);-ms-transform:rotate(45deg);-webkit-transform:rotate(45deg)}@media screen and (min-width:641px) and (max-width:959px){div.side-form .content__wrapper form fieldset input{margin-top:0}}div.side-form .content__wrapper form p.warning{display:block;width:100%;font-size:12px;color:#353535;text-align:center;float:left;font-weight:400;line-height:17px;margin:0;position:relative;left:0;bottom:0}@media screen and (min-width:320px) and (max-width:640px){div.side-form .content__wrapper form p.warning{top:0;display:block;float:left;position:relative;width:100%;padding-bottom:0;padding-top:0;z-index:0;margin:0}}@media screen and (min-width:641px) and (max-width:959px){div.side-form .content__wrapper form p.warning{bottom:8px;margin:0;position:relative}}div.side-form .content__wrapper form p.warning a{text-decoration:underline;color:#353535}div.side-form .telefone-chat{display:block;float:left;width:100%;padding:1em;text-align:center;padding-top:1em;background:#eaebef;display:flex;flex-flow:row;width:100%;align-items:center;justify-content:space-between}@media screen and (min-width:320px) and (max-width:640px){div.side-form .telefone-chat{padding:1em .5em}}@media screen and (min-width:1330px) and (max-width:1600px){div.side-form .telefone-chat{padding-top:5px;padding:.5em}}@media screen and (min-width:1250px) and (max-width:1330px){div.side-form .telefone-chat{padding-top:5px;padding:.5em}}@media screen and (min-width:641px) and (max-width:959px){div.side-form .telefone-chat{margin:1em auto}}div.side-form .telefone-chat.chat-disabled .btChat{display:none}div.side-form .telefone-chat a{font-size:14px}@media screen and (min-width:1330px) and (max-width:1600px){div.side-form .telefone-chat a{font-size:15px}}div.side-form .telefone-chat a.tel{color:#303f9f;padding:8px 15px;border-radius:6px;text-transform:uppercase;font-size:12px;font-weight:600;text-decoration:none;cursor:pointer;display:inline-block;transition:all .2s ease-in;box-shadow:0 10px 10px -12px #303f9f;width:100%;background:#303f9f;color:#fff;border:solid 1px #303f9f;height:42px;display:flex;align-items:center;justify-content:center}div.side-form .telefone-chat a.tel.active{background:#303f9f;color:#fff;transition:all .2s ease-in}div.side-form .telefone-chat a.tel:hover{background:#303f9f;color:#fff;transition:all .2s ease-in}div.side-form .telefone-chat a.tel i{font-size:14px;margin-right:6px}div.side-form .telefone-chat .telefones{display:none}div.side-form .telefone-chat .telefones.active{display:block;float:left}div.side-form .telefone-chat .telefones p{font-size:12px;color:#717171;padding:0 10px;margin-bottom:5px;display:block;float:left;width:100%;margin-top:8px}div.side-form .telefone-chat .telefones p b{font-weight:600;color:#353535}div.side-form .telefone-chat .telefones a{display:block;float:left;width:49%;margin-left:1%;padding:10px;margin-top:3px;color:#303f9f;text-decoration:underline;border-radius:6px;background:#fff;box-shadow:0 6px 10px -10px #000;border:solid 1px #ddd}@media screen and (min-width:320px) and (max-width:640px){div.side-form .telefone-chat .telefones a{font-size:14px;font-weight:600}}@media screen and (min-width:959px) and (max-width:1250px){div.side-form .telefone-chat .telefones a{font-size:13px;font-weight:600}}@media screen and (min-width:1023px) and (max-width:1600px){div.side-form .telefone-chat .telefones a{margin-top:2px}}div.side-form .telefone-chat .telefones a:before{content:'\e942';display:block;float:left;margin-right:5px;font-family:Icomoon}@media screen and (min-width:1330px) and (max-width:1600px){div.side-form .telefone-chat .telefones a:before{margin-right:2px}}div.side-form .telefone-chat .telefones a.whatsapp{color:#388e3c}div.side-form .telefone-chat .telefones a.whatsapp:before{content:""}div.side-form .telefone-chat .btChat{display:inline-block;width:100%;margin-left:6px;display:flex;align-items:center;justify-content:center}div.side-form .telefone-chat .btChat.disabled .chat{color:#a9a9a9;border:solid 1px #d4d4d4}div.side-form .telefone-chat .btChat .chat{color:#388e3c;background:#fff;padding:8px 15px;border-radius:6px;text-transform:uppercase;font-size:12px;font-weight:600;width:auto;text-decoration:none;border:solid 1px #ddd;box-shadow:0 10px 10px -12px;width:100%;margin-left:6px;display:flex;align-items:center;justify-content:center}div.side-form .telefone-chat .btChat .chat i{font-size:23px;margin-right:6px;position:relative;top:0}.Maps{display:block;float:left;width:100%;position:relative;border:solid 1px #ddd;padding:0 1rem;margin-top:0;background:#fff;z-index:9;padding-bottom:2em;border-top:0;border-radius:0 0 6px 6px;margin-bottom:1em}@media (min-width:320px) and (max-width:1023px){.Maps{padding:0;margin-top:0}}.Maps h3{display:block;float:left;width:100%;padding-left:1em}@media (min-width:320px) and (max-width:1023px){.Maps h3{padding:1em}}.Maps h3 span.ttl{display:block;width:100%;float:left;text-transform:uppercase;font-size:12px;font-weight:600;color:#353535;padding:10px 0}.Maps h3 span.endereco{width:100%;display:block;font-size:16px;color:#717171;padding-bottom:10px}@media (min-width:320px) and (max-width:1023px){.Maps h3 span.endereco{font-size:14px;line-height:20px}}.Maps h3 span.endereco b{font-weight:600}.Maps h2{padding:0;font-size:16px;font-weight:600;color:#353535;padding-bottom:12px;padding-top:0;padding-left:0}@media screen and (max-width:1024px){.Maps h2{padding-left:1rem}}.Maps .abrirMapa{display:block;float:left;width:100%;min-height:500px;position:relative;text-align:center;padding:1em;overflow:hidden;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;background:rgba(243,243,243,.18);border:solid 1px #ddd}.Maps .abrirMapa:before{content:'';background:url(/public/images/maps.svg) center top;display:block;width:100%;position:absolute;height:100%;top:0;left:0;z-index:-1;float:left;background-size:595px;opacity:.15}.Maps .abrirMapa button{width:100%;-webkit-appearance:none;-moz-appearance:none;background:0 0;border:none;height:auto;padding:0;outline:0;cursor:pointer}.Maps .abrirMapa button:focus{outline:0}.Maps .abrirMapa button img{width:100%}.Maps .abrirMapa button.btn-map{display:block;width:100%;max-width:300px;background:#fff;padding:20px 0;text-transform:uppercase;color:#303f9f;font-size:14px;border-radius:6px;margin:auto;font-weight:600;border:solid 1px #303f9f;transition:all .2s ease-in}.Maps .abrirMapa button.btn-map:hover{background:#303f9f;color:#fff;transition:all .2s ease-in}.Maps .abrirMapa button.btn-map i{font-size:28px;margin:auto;display:inline-block;margin-right:10px;position:relative;line-height:5px;top:6px}.Maps .mapaImovel{display:none;float:left;width:100%;background:#f3f3f3;border:solid 1px #ddd}.Maps .mapaImovel.mapaAberto{display:block;position:relative;float:left}.Maps .mapaImovel.mapaAberto .tipos-google-maps{width:100%;max-width:100%;background:#fff;flex-flow:row;text-align:center;flex-wrap:wrap;position:relative;z-index:9999;top:0;padding:6px;border-radius:6px 6px 0 0;overflow:hidden;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;flex-flow:row}@media (min-width:320px) and (max-width:1023px){.Maps .mapaImovel.mapaAberto .tipos-google-maps{float:left;display:flex;width:46px;background:#f7f7f7;padding:0 0;flex-flow:column;text-align:center;flex-wrap:wrap;padding:2px;position:absolute;z-index:9999;bottom:34%;padding:6px;border:solid 1px rgba(0,0,0,.1);right:0;left:inherit;height:254px;top:12px!important}}.Maps .mapaImovel.mapaAberto .tipos-google-maps h3{text-align:left;font-size:12px;font-weight:600;text-transform:uppercase;margin-bottom:5px;color:#303f9f;padding-left:0;display:none}@media (min-width:320px) and (max-width:1023px){.Maps .mapaImovel.mapaAberto .tipos-google-maps h3{display:none}}.Maps .mapaImovel.mapaAberto .tipos-google-maps label{padding:8px 10px;color:#353535;text-transform:uppercase;font-weight:600;font-size:10px;line-height:22px;letter-spacing:.2px;margin-right:2px;margin-bottom:4px;border:solid 1px rgba(0,0,0,.078);cursor:pointer;transition:all .2s ease-in;border-radius:4px;background:#fff;box-shadow:0 5px 5px -7px;margin-left:4px}@media (min-width:320px) and (max-width:1023px){.Maps .mapaImovel.mapaAberto .tipos-google-maps label{width:100%;line-height:44px;margin-top:4px;font-size:11px;text-overflow:ellipsis;float:left;display:block;margin:1px 0;padding:0 0;border-radius:4px;text-align:center}.Maps .mapaImovel.mapaAberto .tipos-google-maps label span{display:none}.Maps .mapaImovel.mapaAberto .tipos-google-maps label i{font-size:20px;margin-right:0;line-height:15px;position:relative;top:1px;padding:5px}}.Maps .mapaImovel.mapaAberto .tipos-google-maps label i{font-size:20px;margin-right:4px;line-height:15px;position:relative;top:5px}.Maps .mapaImovel.mapaAberto .tipos-google-maps label input{border:none;background:#fff;-webkit-appearance:none;-moz-appearance:none;width:0;height:0;line-height:14px;float:left;display:none}.Maps .mapaImovel.mapaAberto .tipos-google-maps label input:focus{outline:0}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.pharmacy.ativo{background:#3eb5ec;color:#fff}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.hospital.ativo{background:#ff6a6a;color:#fff;border:solid 1px #ff6a6a;transition:all .2s ease-in}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.hospital.ativo input{background:#ff0e09;color:#fff}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.bakery.ativo{background:#e7b958;color:#fff}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.restaurant.ativo{background:#ff8a04;color:#fff}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.bus_station.ativo{background:#565656;color:#fff}.Maps .mapaImovel.mapaAberto .tipos-google-maps label.supermarket.ativo{background:#4caf50;color:#fff}.Maps .mapaImovel.mapaAberto .msg-erro-maps{float:left;display:block;width:100%;padding:2em;font-size:18px;font-weight:600;color:#f44336;background:#ffecec}.Maps .mapaImovel.mapaAberto .msg-erro-maps span{display:block;font-size:14px;color:#717171;margin-top:1em;font-weight:400;line-height:17px}.Maps .mapaImovel .mapa{height:600px;width:100%;display:block;float:left;z-index:999;position:relative}@media screen and (min-width:320px) and (max-width:640px){.Maps .mapaImovel .mapa{height:400px}}@media screen and (min-width:641px) and (max-width:959px){.Maps .mapaImovel .mapa{height:450px}}.Maps .mapaImovel .infoEndereco{display:block;float:left;width:100%}.Maps .mapaImovel .infoEndereco div{font-size:16px;font-weight:300;float:left;margin-right:1em}.Maps .mapaImovel .infoEndereco div span{font-weight:600;color:#015da8}.Maps h2 i{margin-right:10px;font-size:22px;line-height:11px;top:2px;position:relative}.Maps h2 span.endereco{font-size:12px;color:#364250;position:relative;top:0;display:block;text-transform:none}@media screen and (min-width:320px) and (max-width:640px){.Maps h2 span.endereco{line-height:16px;margin-top:12px}}.Maps h2 span.endereco b{font-weight:600}.youtube{background-color:#000;position:relative;overflow:hidden;cursor:pointer;display:block;width:100%;height:440px}@media screen and (min-width:320px) and (max-width:640px){.youtube{width:100%;height:275px}}.youtube img{opacity:.7!important;width:100%;object-fit:cover;height:100%}.youtube .play-button{width:120px;height:120px;background-color:#ff7427;box-shadow:0 0 30px rgba(0,0,0,.6);z-index:1;opacity:.9;border-radius:70px;border:solid 1px rgba(255,255,255,.29);transition:transform .1s cubic-bezier(.55,.09,.68,.53)}.youtube .play-button:before{content:"";border-style:solid;border-width:30px 0 30px 46px;border-color:transparent transparent transparent #fff;margin-left:6%}.youtube .play-button,.youtube img{cursor:pointer}.youtube .play-button,.youtube .play-button:before,.youtube iframe,.youtube img{position:absolute}.youtube .play-button,.youtube .play-button:before{top:50%;left:50%;transform:translate3d(-50%,-50%,0) scale3d(1,1,1);transition:transform .1s cubic-bezier(.55,.09,.68,.53)}.youtube .play-button:hover{opacity:1;transform:translate3d(-50%,-50%,0) scale3d(1.1,1.1,1.1);transition:transform .1s cubic-bezier(.55,.09,.68,.53)}.youtube iframe{height:100%;width:100%;top:0;left:0}.similares{display:block;float:left;width:100%;padding-left:1em;z-index:99999;position:relative;background:#eaebef}@media (min-width:320px) and (max-width:1023px){.similares{padding:1em 0;padding-left:5px;padding-bottom:0}}.similares h3{display:block;width:100%;float:left;text-transform:uppercase;font-size:12px;font-weight:600;color:#353535;padding:10px 0}.similares ul.sim-anuncio{display:flex;width:100%;float:left;overflow:auto;-webkit-overflow-scrolling:touch;padding:1em 2em;padding-left:0;padding-top:0}.similares ul.sim-anuncio.slick-slider{overflow:inherit!important}@media (min-width:1023px){.similares ul.sim-anuncio{min-height:190px}.similares ul.sim-anuncio::-webkit-scrollbar{width:12px;height:6px}.similares ul.sim-anuncio::-webkit-scrollbar-track{-webkit-border-radius:10px;border-radius:10px;border:solid 1px #ddd}.similares ul.sim-anuncio::-webkit-scrollbar-thumb{-webkit-border-radius:10px;border-radius:10px;background:rgba(12,12,12,.55)}.similares ul.sim-anuncio::-webkit-scrollbar-thumb:window-inactive{background:rgba(12,12,12,.2)}}@media (min-width:320px) and (max-width:1023px){.similares ul.sim-anuncio{padding:0;padding-bottom:2em;overflow-x:scroll;overscroll-behavior:contain;-webkit-overflow-scrolling:touch}}.similares ul.sim-anuncio li.item-gl{width:32%;margin-right:10px;background:#fff;box-shadow:0 7px 20px -6px rgba(60,60,60,.77);border:solid 1px rgba(222,222,222,.65);border-radius:6px;height:auto;max-height:134px}@media (min-width:320px) and (max-width:1023px){.similares ul.sim-anuncio li.item-gl{margin-right:1%;min-width:90%;height:auto;border:solid 1px #dedede}}.similares ul.sim-anuncio li.item-gl:last-child{margin-right:0}.similares ul.sim-anuncio li.item-gl a{display:block;float:left;width:100%;min-height:125px;overflow:hidden;position:relative;border:solid 4px #fff;border-radius:6px}.similares ul.sim-anuncio li.item-gl a span.img-anuncio{width:50%;display:block;float:left;position:relative;background:#f3f3f3;height:125px}@media (min-width:320px) and (max-width:1023px){.similares ul.sim-anuncio li.item-gl a span.img-anuncio{width:40%;height:115px}}.similares ul.sim-anuncio li.item-gl a span.img-anuncio img{display:block;width:100%;position:absolute;object-fit:cover;top:0;left:0;background:#f3f3f3;height:100%}.similares ul.sim-anuncio li.item-gl a .info{width:50%;float:right;display:block;padding:5px;position:relative;min-height:125px}@media (min-width:320px) and (max-width:1023px){.similares ul.sim-anuncio li.item-gl a .info{width:60%;min-height:115px}}.similares ul.sim-anuncio li.item-gl a .info h2{width:100%;float:left;font-size:14px;color:#3f51b5;line-height:17px;padding:0 5px;margin-bottom:1em;font-weight:400;text-transform:capitalize;-webkit-text-stroke:.2px;overflow:hidden;display:box;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;max-height:51px}@media (min-width:320px) and (max-width:1023px){.similares ul.sim-anuncio li.item-gl a .info h2{font-size:13px;line-height:18px}}.similares ul.sim-anuncio li.item-gl a .info ul.list-ch-similar{display:block;float:left;width:100%;padding:0 5px;position:absolute;bottom:10px}.similares ul.sim-anuncio li.item-gl a .info ul.list-ch-similar li{font-weight:600;width:50%;float:left;font-size:12px;margin-top:10px;color:#909090}.similares ul.sim-anuncio li.item-gl a .info ul.list-ch-similar li.valor{width:60%;font-size:13px;margin-top:0;color:#353535}.similares ul.sim-anuncio li.item-gl a .info ul.list-ch-similar li.area{width:40%;font-size:13px;margin-top:0}.similares ul.sim-anuncio button{position:absolute;display:block;z-index:9;height:138px;border:none;background:0 0;color:#fff;outline:0;cursor:pointer;width:49px}.similares ul.sim-anuncio button:focus{outline:0}.similares ul.sim-anuncio button.slick-prev{left:-2%;top:0;transform:rotate(180deg)}.similares ul.sim-anuncio button.slick-prev.slick-disabled:before{display:none}.similares ul.sim-anuncio button.slick-prev:before{content:'\e912';font-family:icomoon;font-size:16px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}.similares ul.sim-anuncio button.slick-next{right:0;top:0}.similares ul.sim-anuncio button.slick-next.slick-disabled:before{display:none}.similares ul.sim-anuncio button.slick-next:before{content:'\e912';font-family:Icomoon;font-size:16px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}.modal-retorno{display:none}.slick-slider{position:relative;display:block;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent;min-height:300px}@media (min-width:320px) and (max-width:1023px){.slick-slider{min-height:275px}}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:440px;min-height:1px;position:relative}@media screen and (min-width:320px) and (max-width:640px){.slick-slide{height:275px}}[dir=rtl] .slick-slide{float:right}.slick-slide img.img-ver{display:block;margin:0 3px;min-height:440px;max-height:440px;height:440px;width:auto;position:relative;object-fit:contain;background:#353535;margin:auto}@media screen and (min-width:320px) and (max-width:640px){.slick-slide img.img-ver{min-height:275px;max-height:275px;height:275px}}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}.modalReport{top:0;position:fixed;z-index:99999;width:100%;left:0;height:100%;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;display:none}.modalReport .modalOverlay{top:0;position:fixed;height:100%;z-index:9;width:100%;left:0;background:rgba(0,0,0,.74)}.modalReport .report-modal{width:100%;max-width:375px;z-index:999;background:#fff;padding:2em;position:relative;border-radius:4px}@media screen and (min-width:320px) and (max-width:1023px){.modalReport .report-modal{max-width:85%;padding:1em}}.modalReport .report-modal>span.ttl{padding-top:1em;display:block;float:left;width:100%;font-size:14px;text-transform:uppercase;font-weight:600;margin-bottom:2em}.modalReport .report-modal>span.ttl i{margin-right:10px;font-size:22px}.modalReport .report-modal>span.bt-fechar-erro{width:45px;height:45px;line-height:45px;background:#fff;position:absolute;left:-23px;top:-17px;text-align:center;border-radius:60px;transform:rotate(45deg);box-shadow:1px 1px 10px -2px #000;color:#ff5722}.modalReport .report-modal>span.bt-fechar-erro i{margin:0;font-size:19px;line-height:45px}.modalReport .report-modal form{display:block;float:left;width:100%}.modalReport .report-modal form label{font-size:13px;text-transform:uppercase;color:#717171;margin-bottom:5px;font-weight:600;width:100%;float:left}.modalReport .report-modal form input{font-size:16px;padding:5px;margin-bottom:1em;border:solid 1px #ddd;-webkit-appearance:none;-moz-appearance:none;width:100%;float:left}.modalReport .report-modal form input.btEncaminhar{display:block;float:right;width:49%;background:#f57c00;border:none;text-transform:uppercase;font-size:12px;font-weight:600;color:#fff;padding:1em;margin-left:1%}.modalReport .report-modal form a.btCancel{display:block;float:left;width:49%;margin-right:1%;background:#fff;text-transform:uppercase;font-size:12px;font-weight:600;color:#717171;padding:1em;text-align:center;border:solid 2px #ddd;text-decoration:none}.modalReport .report-modal form textarea{font-size:16px;padding:5px;margin-bottom:1em;border:solid 1px #ddd;-webkit-appearance:none;-moz-appearance:none;height:36px;width:100%;float:left}.modalReport .report-modal form select{font-size:16px;padding:5px;margin-bottom:1em;border:solid 1px #ddd;height:36px;width:100%;float:left}.modalTelefones{top:0;position:fixed;z-index:99999;width:100%;left:0;height:100%;display:-webkit-box;display:-moz-box;display:box;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-moz-box-align:center;box-align:center;-webkit-align-items:center;-moz-align-items:center;-ms-align-items:center;-o-align-items:center;align-items:center;-ms-flex-align:center;-webkit-box-pack:center;-moz-box-pack:center;box-pack:center;-webkit-justify-content:center;-moz-justify-content:center;-ms-justify-content:center;-o-justify-content:center;justify-content:center;-ms-flex-pack:center;-webkit-box-orient:vertical;-moz-box-orient:vertical;box-orient:vertical;-webkit-box-direction:normal;-moz-box-direction:normal;box-direction:normal;-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;-ms-flex-direction:column;display:none}.modalTelefones .modalOverlayT{top:0;position:fixed;height:100%;z-index:9;width:100%;left:0;background:rgba(0,0,0,.74)}.modalTelefones .telefones{display:block;position:relative;z-index:9;background:#fff;width:100%;max-width:720px;border-radius:4px;padding:1em}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .telefones{padding:5px;max-width:94%}}.modalTelefones .telefones .botoes-tel{display:flow-root;width:100%;padding:1em;margin:auto;max-width:60%}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .telefones .botoes-tel{max-width:100%;padding:5px 1em}}.modalTelefones .telefones .botoes-tel>span.bt-fechar-erro-t{width:45px;height:45px;line-height:45px;background:#fff;position:absolute;cursor:pointer;left:-23px;top:-16px;text-align:center;border-radius:60px;transform:rotate(45deg);box-shadow:1px 1px 10px -2px #000;color:#ff5722}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .telefones .botoes-tel>span.bt-fechar-erro-t{left:-8px;top:-16px}}.modalTelefones .telefones .botoes-tel>span.bt-fechar-erro-t i{margin:0;font-size:19px;line-height:45px}.modalTelefones .telefones .botoes-tel>p{font-size:14px;color:#717171;padding:0 10px;margin-bottom:5px;display:block;float:left;width:100%;margin-top:8px;line-height:18px}.modalTelefones .telefones .botoes-tel>p b{font-weight:600;color:#353535}.modalTelefones .telefones .botoes-tel>a{display:block;float:left;width:49%;margin-left:1%;padding:10px;margin-top:3px;color:#303f9f;text-decoration:underline;border-radius:6px;background:#fff;box-shadow:0 6px 10px -10px #000;border:solid 1px;font-weight:600;font-size:15px;text-align:center}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .telefones .botoes-tel>a{width:100%;margin-left:0}}.modalTelefones .telefones .botoes-tel>a.acaoConstrutora{box-shadow:none;width:100%;text-align:center;border:none;cursor:default}.modalTelefones .telefones .botoes-tel>a.acaoConstrutora:before{display:none}.modalTelefones .telefones .botoes-tel>a.acaoConstrutora img{max-width:150px;max-height:75px}@media screen and (min-width:320px) and (max-width:640px){.modalTelefones .telefones .botoes-tel>a{font-size:14px;font-weight:600}}@media screen and (min-width:959px) and (max-width:1250px){.modalTelefones .telefones .botoes-tel>a{font-size:13px;font-weight:600}}@media screen and (min-width:1023px) and (max-width:1600px){.modalTelefones .telefones .botoes-tel>a{margin-top:2px}}.modalTelefones .telefones .botoes-tel>a:before{content:'\e942';display:block;float:left;margin-right:5px;font-family:Icomoon}@media screen and (min-width:1330px) and (max-width:1600px){.modalTelefones .telefones .botoes-tel>a:before{margin-right:2px}}.modalTelefones .telefones .botoes-tel>a.whatsapp{color:#388e3c}.modalTelefones .telefones .botoes-tel>a.whatsapp:before{content:""}.modalTelefones span.ttl{font-size:18px;color:#353535;padding:1em 2px;margin-top:2em;display:block;border-top:solid 1px #f3f3f3}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones span.ttl{padding:1em 10px;font-size:14px;margin-top:15px}}.modalTelefones .box-similares-modal{float:left;display:block;width:100%;position:relative}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .box-similares-modal{padding-bottom:16px}}.modalTelefones .box-similares-modal h3{display:none;float:left;width:100%;padding:1em;text-transform:uppercase;font-weight:600;font-size:12px;color:#353535;padding-left:0;margin-top:1em;border-top:solid 1px #f3f3f3}.modalTelefones .box-similares-modal ul.sim-anuncio{width:100%;display:block;float:left;min-height:auto}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .box-similares-modal ul.sim-anuncio{display:flex;overflow-x:scroll}}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dotted.slick-slider{margin-bottom:30px}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots{position:absolute;bottom:-1em;display:block;width:100%;padding:0;margin:0;list-style:none;text-align:center}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li{position:relative;display:inline-block;width:20px;height:20px;margin:0;padding:0;cursor:pointer}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li button{font-size:0;line-height:0;display:block;width:20px;height:20px;padding:0;cursor:pointer;color:transparent;border:0;outline:0;background:0 0}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li button:focus,.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li button:hover{outline:0}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li button:focus:before,.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li button:hover:before{opacity:1}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li button:before{font-family:slick;font-size:41px;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;content:'•';text-align:center;opacity:.25;color:#000;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.modalTelefones .box-similares-modal ul.sim-anuncio .slick-dots li.slick-active button:before{opacity:.75;color:#ff7427}.modalTelefones .box-similares-modal ul.sim-anuncio button{position:absolute;display:block;z-index:9;height:138px;border:none;background:0 0;color:#fff;outline:0;cursor:pointer;width:49px}.modalTelefones .box-similares-modal ul.sim-anuncio button:focus{outline:0}.modalTelefones .box-similares-modal ul.sim-anuncio button.slick-prev{left:-2%;top:0;transform:rotate(180deg)}.modalTelefones .box-similares-modal ul.sim-anuncio button.slick-prev.slick-disabled:before{display:none}.modalTelefones .box-similares-modal ul.sim-anuncio button.slick-prev:before{content:'\e912';font-family:icomoon;font-size:16px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}.modalTelefones .box-similares-modal ul.sim-anuncio button.slick-next{right:0;top:0}.modalTelefones .box-similares-modal ul.sim-anuncio button.slick-next.slick-disabled:before{display:none}.modalTelefones .box-similares-modal ul.sim-anuncio button.slick-next:before{content:'\e912';font-family:Icomoon;font-size:16px;-webkit-text-stroke:2.2px;background:#fff;padding:12px;border-radius:60px;color:#353535;box-shadow:0 10px 10px -9px;border:solid 1px #ddd}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl{width:100%;display:block;float:left;max-width:96%;height:auto;min-height:auto;border:solid 1px #ddd;border-radius:6px;margin-right:1%;margin-bottom:1em}@media screen and (min-width:320px) and (max-width:1023px){.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl{min-width:283px}}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a{display:block;float:left;width:100%;min-height:125px;overflow:hidden;position:relative;border:solid 4px #fff;border-radius:6px}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a span.img-anuncio{width:50%;display:block;float:left;position:relative;background:#f3f3f3;height:125px}@media (min-width:320px) and (max-width:1023px){.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a span.img-anuncio{width:40%;height:115px}}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a span.img-anuncio img{display:block;width:100%;position:absolute;object-fit:cover;top:0;left:0;background:#f3f3f3;height:100%}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info{width:50%;float:right;display:block;padding:5px;position:relative;min-height:125px}@media (min-width:320px) and (max-width:1023px){.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info{width:60%;min-height:115px}}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info h2{width:100%;float:left;font-size:14px;color:#353535;line-height:17px;padding:0 5px;margin-bottom:1em;font-weight:400;text-transform:capitalize;-webkit-text-stroke:.2px;overflow:hidden;display:box;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;max-height:51px}@media (min-width:320px) and (max-width:1023px){.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info h2{font-size:13px;line-height:18px}}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info ul.list-ch-similar{display:block;float:left;width:100%;padding:0 5px;position:absolute;bottom:10px}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info ul.list-ch-similar li{font-weight:600;width:50%;float:left;font-size:12px;margin-top:10px;color:#909090}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info ul.list-ch-similar li.valor{width:60%;font-size:13px;margin-top:0;color:#353535}.modalTelefones .box-similares-modal ul.sim-anuncio li.item-gl a .info ul.list-ch-similar li.area{width:40%;font-size:13px;margin-top:0}</style><style>﻿.slick-lightbox{position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background:black;-webkit-transition:opacity 0.5s ease;transition:opacity 0.5s ease}.slick-lightbox .slick-loading .slick-list{background-color:transparent}.slick-lightbox .slick-prev{left:15px}.slick-lightbox .slick-next{right:15px}.slick-lightbox-hide{opacity:0}.slick-lightbox-hide.slick-lightbox-ie{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0)}.slick-lightbox-hide-init{position:absolute;top:-9999px;opacity:0}.slick-lightbox-hide-init.slick-lightbox-ie{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0)}.slick-lightbox-inner{position:fixed;top:0;left:0;width:100%;height:100%}.slick-lightbox-slick-item{text-align:center;overflow:hidden}.slick-lightbox-slick-item:before{content:'';display:inline-block;height:100%;vertical-align:middle;margin-right:-0.25em}.slick-caption-bottom .slick-lightbox-slick-item .slick-lightbox-slick-item .slick-lightbox-slick-caption{position:absolute;bottom:0;left:0;text-align:center;width:100%;margin-bottom:20px}.slick-caption-dynamic .slick-lightbox-slick-item .slick-lightbox-slick-item .slick-lightbox-slick-caption{display:block;text-align:center}.slick-lightbox-slick-item-inner{display:inline-block;vertical-align:middle;max-width:90%;max-height:90%}.slick-lightbox-slick-img{margin:0 auto;display:block;max-width:90%;max-height:90%}.slick-lightbox-slick-caption{margin:10px 0 0;color:white}.slick-lightbox-close{position:absolute;top:15px;right:15px;display:block;height:20px;width:20px;line-height:0;font-size:0;cursor:pointer;background:transparent;color:transparent;padding:0;border:none}.slick-lightbox-close:focus{outline:none}.slick-lightbox-close:before{font-family:"slick";font-size:20px;line-height:1;color:white;opacity:0.85;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;content:'×'}
</style> <link href="https://www.chavesnamao.com.br/public/site-novo/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<script type="application/ld+json">
		{
		"@context": "https://schema.org",
		"@type": "Organization",
		"name": "Chaves na Mão",
		"description": "No Chaves na Mão você encontra imóveis, casas para alugar, apartamentos à venda, terrenos, kitnet, carros usados e seminovos, motos, tabela fipe e muito mais.",

		"address": {
			"@type": "PostalAddress",
			"addressCountry": {
				"@type": "Country",
				"name": "BR" 
			}, 
			"addressLocality": "Curitiba",
			"addressRegion": "PR",
			"postalCode": "80020-100",
			"streetAddress": "Praça Tiradentes, 320, 4º andar - Centro, Curitiba - PR"
		},

		"brand": {
			"@type": "Brand",
			"logo": "https://www.chavesnamao.com.br/public/site-novo/images/chaves-na-mao.png" 
		},

		"founder": {
			"@type": "Person",
			"givenName": "Flávio", 
			"familyName": "Bittencourt",
			"jobTitle": "CEO"
		},

		"telephone": "+55 41 3092-1001",
		"URL": "https://www.chavesnamao.com.br/"
		}
	</script>
<script async="async" src="https://www.googletagservices.com/tag/js/gpt.js"></script>
<script>var googletag=googletag||{};googletag.cmd=googletag.cmd||[];</script><script>googletag.cmd.push(function(){googletag.defineSlot("/70722433/002",[728,90],"div-gpt-ad-1516734341626-0").addService(googletag.pubads()),googletag.defineSlot("/70722433/003",[728,90],"div-gpt-ad-1516734341626-1").addService(googletag.pubads()),googletag.defineSlot("/70722433/004",[728,90],"div-gpt-ad-1473094394858-2").addService(googletag.pubads()),googletag.defineSlot("/70722433/010",[728,90],"div-gpt-ad-1473094830668-0").addService(googletag.pubads()),googletag.defineSlot("/70722433/011",[728,90],"div-gpt-ad-1473094830668-1").addService(googletag.pubads()),googletag.defineSlot("/70722433/014",[728,90],"div-gpt-ad-1473177545479-0").addService(googletag.pubads()),googletag.defineSlot("/70722433/015",[728,90],"div-gpt-ad-1473177545479-1").addService(googletag.pubads()),googletag.pubads().setCentering(!0),googletag.pubads().enableSingleRequest(),googletag.enableServices()});</script><script type="text/javascript"></script><link rel="manifest" href="/manifest.json">
<link rel="stylesheet" type="text/css" href="/css/0367.2020.338/public/site-novo/css/footer.min.css"><link rel="preload" href="https://adservice.google.com.br/adsid/integrator.js?domain=www.chavesnamao.com.br" as="script"><script type="text/javascript" src="https://adservice.google.com.br/adsid/integrator.js?domain=www.chavesnamao.com.br"></script><link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.chavesnamao.com.br" as="script"><script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.chavesnamao.com.br"></script><script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2020030501.js" async=""></script><link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-37/html/container.html"><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/722400392/?random=1584152545386&amp;cv=9&amp;fst=1584152545386&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635471&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/722394546/?random=1584152545393&amp;cv=9&amp;fst=1584152545393&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/736057490/?random=1584152545396&amp;cv=9&amp;fst=1584152545396&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/722393898/?random=1584152545398&amp;cv=9&amp;fst=1584152545398&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635471&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/810213187/?random=1584152545400&amp;cv=9&amp;fst=1584152545400&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/722379914/?random=1584152545403&amp;cv=9&amp;fst=1584152545403&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/788565434/?random=1584152545406&amp;cv=9&amp;fst=1584152545406&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635470&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/788562824/?random=1584152545408&amp;cv=9&amp;fst=1584152545408&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/810213211/?random=1584152545411&amp;cv=9&amp;fst=1584152545411&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=743&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=6&amp;gtm=2wg340&amp;sendb=1&amp;ig=1&amp;data=dynx_pagetype%3Dother&amp;frm=0&amp;url=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script></head>
<body id="body-geral" class="width-md">
<div class="modal-login-geral"></div>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHTJDTG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <div class="overlay-menu menu-open"></div>
<div class="overlay" id="overlay_div" style="display: none; opacity: 0.6;"></div>
<div id="modal_loading" class=" modal" style="display: none;">
<span>
<svg id="load" x="0px" y="0px" viewBox="0 0 150 150"><circle id="loading-inner" cx="75" cy="75" r="60"></circle></svg>
</span>
</div>
<script>if(document.location.hash){document.getElementById("overlay_div").style.display="block",document.getElementById("modal_loading").style.display="block";var modalAtual="modal_loading"}var w=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,h=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;body=document.getElementsByTagName("body")[0];var tamanho=document.createElement("input");tamanho.setAttribute("type","hidden"),tamanho.setAttribute("name","tamanho"),tamanho.setAttribute("id","tamanho"),tamanho.setAttribute("value",w),body.appendChild(tamanho);</script><input type="hidden" name="tamanho" id="tamanho" value="1326"><form id="frmFipe" name="frmFipe" action="https://www.chavesnamao.com.br/tabela-fipe-usados-novos-seminovos/" method="post">
<input type="hidden" id="tipoFipe" name="tipoFipe" value="">
<input type="hidden" id="url-busca" name="url-busca" value="">
<input type="hidden" id="titulo-busca" name="titulo-busca" value="">
</form>
<header class="site-header container-fluid">
<div class="container large-content">
<nav class="main-nav nav-down">
<span class="logo">
<a href="/" rel="home" title="Chaves na Mão - Imóveis à venda e para alugar, carros usados e motos">
<img src="https://www.chavesnamao.com.br/public/site-novo/images/chaves-na-mao.png" width="" height="" alt="Chaves na Mão - Imóveis à venda e para alugar, carros usados e motos">
</a>
</span>
<span class="back-f-desk"><i class="icon-next"></i>Voltar para os filtros</span>
<span class="bt-header-m menu-open"><i class="icon-menunew"></i><small>Menu</small></span>

<span class="bt-header-m bt-entrar entrar entrar-login-geral"><a class="btn-cta" rel="nofollow" href="javascript:void(0);"><i class="icon-user2"></i><small>Entrar</small></a></span> <ul>
<li><a href="https://www.chavesnamao.com.br/imoveis/brasil/" title="Imóveis">Imóveis</a></li>
<li><a href="https://www.chavesnamao.com.br/carros/usados/brasil/" title="Veículos">Veículos</a></li>
<li><a href="https://www.chavesnamao.com.br/tabela-fipe-usados-novos-seminovos/" title="Tabela Fipe">Tabela FIPE</a>
</li>
<span class="removeDrop">
<span class="drop mobh">Blog <i class="icon-next"></i></span>
<ul class="level-2 ativo">
<li><a href="https://www.chavesnamao.com.br/blog-imobiliario/" class="lvl2_open">Blog Imobiliário</a>
</li>
<li><a href="https://www.chavesnamao.com.br/blog-veiculos/" class="lvl2_open">Blog de Veículos</a>
</li>
</ul>
</span>
</ul>
<ul>
<li class="bt-call">
<div class="btn-anuncie "><span class="btn-cta btn-trg"><i class="icon-megaphone"></i> Anunciar agora! </span>
<ul class="level-2">
<li><a href="https://www.chavesnamao.com.br/anunciar-gratis-imoveis-casas-apartamentos/" title="Anuncie grátis casas e aparamentos"><i class="icon-casa"></i>Anunciar imóveis</a></li>
<li><a href="https://www.chavesnamao.com.br/anunciar-gratis-carros-e-motos/" title="Anuncie Grátis carros e motos"><i class="icon-carro"></i> Anunciar veículos</a></li>
</ul>
</div>
</li>
<li class="bt-fav">
<a href="/favoritos/" rel="nofollow">
<i class="icon-fav"><small class="count-fav-all" style="display: none;">0</small></i>
<span>Favoritos</span>
</a>
</li>
</ul>
</nav>
</div>
</header>
<script type="text/javascript">
    var dynx_pagetype = "searchresults";
</script>
<div class="wrapper large-content">
<section class="breadcrumb container-fluid" id="bread"><ul><li><a href="https://www.chavesnamao.com.br/" title="Página Inicial">Página Inicial</a></li><li><a href="https://www.chavesnamao.com.br/apartamentos-a-venda/brasil/" title="Venda">Venda</a></li><li><a href="https://www.chavesnamao.com.br/apartamentos-a-venda/sc/" title="SC">SC</a></li><li><a href="https://www.chavesnamao.com.br/apartamentos-a-venda/sc-itajai/" title="Apartamentos à venda em Itajaí">Apartamentos à venda em Itajaí</a></li><li>Centro</li><script type="application/ld+json">{
				"@context": "https://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement": [
					{
					"@type": "ListItem",
					"position": "1",
					"item": {
						"@id": "/",
						"name": "Chaves Na Mão"
					}
					},{
						"@type": "ListItem",
						"position": "2",
						"item": {
							"@id": "/",
							"name": "Página Inicial"
						}
						},{
						"@type": "ListItem",
						"position": "3",
						"item": {
							"@id": "/apartamentos-a-venda/brasil/",
							"name": "Venda"
						}
						},{
						"@type": "ListItem",
						"position": "4",
						"item": {
							"@id": "/apartamentos-a-venda/sc/",
							"name": "SC"
						}
						},{
						"@type": "ListItem",
						"position": "5",
						"item": {
							"@id": "/apartamentos-a-venda/sc-itajai/",
							"name": "Apartamentos à venda em Itajaí"
						}
						},{
						"@type": "ListItem",
						"position": "6",
						"item": {
							"@id": "/apartamentos-a-venda/sc-itajai/centro/",
							"name": "Centro"
						}
						} ]}</script></ul></section> 
<aside class="resultado top_z">

<div id="overlay-b-n" class="overlay-infinite"></div>
<div id="abasM" class="m-container filter-anchor-deskt ativo">

<div class="box-container navigation-f">
<span class="logo">
<a href="/" rel="home" title="Chaves na Mão - Imóveis à venda e para alugar, carros usados e motos">
<img src="https://www.chavesnamao.com.br/public/site-novo/images/chaves-na-mao.png" width="" height="" alt="Chaves na Mão - Imóveis à venda e para alugar, carros usados e motos">
</a>
</span>
<span class="bt-header-m menu-open tc-material"><i class="icon-menunew"></i><small>Menu</small></span>

<span class="bt-header-m  tc-material entrar login-modal-entrar"><a class="btn-cta" href="javascript:void(0)"><i class="icon-user2"></i><small>Entrar</small></a></span>
<span class="bt-header-m tc-material fav-btn-n">
<span id="#anm" class="count-fav" style="display: none;">0</span><i class="icon-fav"></i><small>Favoritos</small></span>

<span class="tc-material order-btn order">
<label> 
<select name="ordem" id="ordenacao" class="ordenacao btn-order-trigger">
<option value="">Ordenar</option>
<option value="mep">Menor Valor</option>
<option value="map"> Maior Valor</option>
<option value="mea"> Menor Área m²</option>
<option value="maa">Maior Área m²</option>
</select>
</label>
</span>
</div>

<div class="box-container filtros-top">
<span class="tc-material order-btn order mobile-only">
<label> <div id="icon-order-c"><span><i class="icon-order"></i></span></div><small>ordernar</small>
<select name="ordem" id="ordenacao" class="ordenacao btn-order-trigger">
<option value="">Ordenar</option>
<option value="mep">Menor Valor</option>
<option value="map"> Maior Valor</option>
<option value="mea"> Menor Área m²</option>
<option value="maa">Maior Área m²</option>
</select>
</label>
</span>
<span class="tooltipFiltros" style="display: none;">Aplique os filtros para obter seus resultados<b>Ok, Entendi!</b></span>
<span class="filtro-lateral-marcacao tc-material btn-mobile filter-btn mobile-only "><i class="icon-filter"></i> FILTRAR </span>
<div class="m-content filtros">

<div class="filters">
<div class="filters-form">
<form name="formFiltro" method="post" id="frm_busca" class="form-style">

<div class="top-mobile">
<span class="close">Fechar</span>


<span class="ttl-mobile"> <i class="icon-filter"></i>Filtrar</span>
</div>

<div class="links">
<ul class="imoveis">
<li><a href="https://www.chavesnamao.com.br/imoveis-a-venda/brasil/" class="lnk-direto-comprar selected" title="Comprar">Comprar</a></li>
<li><a href="https://www.chavesnamao.com.br/imoveis-para-alugar/brasil/" class="lnk-direto-alugar " title="Alugar">Alugar</a></li>
<li><a href="https://www.chavesnamao.com.br/lancamentos-imoveis/brasil/" class="lnk-direto-lancamentos ">Imóveis Novos</a></li>
</ul>
</div>
<select id="finalidade" name="finalidade" rel="finalidade" class="esconde">
<option value="todos">Todos</option>
<option value="V" selected="selected">Comprar</option>
<option value="L" class="opt_alugar">Alugar</option>
<option value="LA">Imóveis Novos</option>
</select>
<input type="hidden" id="url_busca" name="url_busca" value="">
<input type="hidden" id="or" name="or" value=" ">
<fieldset class="cidades-c">
<label class="cidade" for="fieldBairro">Adicionar um bairro ou cidade
<input type="text" id="cidade_bairro_filtro" class="fieldBusca campoBairro ui-autocomplete-input" placeholder="Digite um bairro ou cidade" autocomplete="off">
<a href="javascript:;" class="fieldBuscaBtn"><i class="icon-plus" alt="Adicionar Bairro"></i></a>
</label>
<div id="lista_bairros_cidades_lateral" class="filtro-a-aplicar lista_bairros_cidades"><span class="btRemoverBairroCidade btRemove" ref="local-24-8507-13972" rel="itajai#sc#centro">Centro/Itajaí</span></div>
</fieldset>


<fieldset class="select mg-left">
<label for="fieldTipo">Tipo de imóvel:</label>
<div class="select-block">
<select name="tipo" id="tipo" rel="tipo" class="esconde">
<option value="todos-imoveis">Ver Todos os Imóveis</option>
<option value="lancamentos-residencial" class="tipos-lancamentos">Residencial </option>
<option value="lancamentos-comercial" class="tipos-lancamentos">Comercial</option>
<optgroup class="tipos-normais" label="Residencial"><option value="apartamentos-residencial" class="" indice_url="apartamentos-residencial">Apartamento</option><option value="casas-sobrados-residencial" class="" indice_url="casas-residencial">Casa/Sobrado</option><option value="casas-sobrados-em-condominio-residencial" class="" indice_url="casas-em-condominio-residencial">Casa em condomínio</option><option value="terrenos-residencial" class="tipo-terreno-residencial" indice_url="terrenos-residencial">Terreno/Lote</option><option value="terrenos-em-condominio-residencial" class="tipo-terreno-residencial" indice_url="terrenos-em-condominio-residencial">Terreno em condomínio</option><option value="coberturas-residencial" class="" indice_url="coberturas-residencial">Cobertura</option><option value="kitnets-studios-residencial" class="" indice_url="kitnet-residencial">Kitnet/Stúdio</option><option value="lofts-residencial" class="" indice_url="loft-residencial">Loft</option><option value="flats-residencial" class="" indice_url="flat-residencial">Flat</option></optgroup><optgroup class="tipos-normais" label="Comercial"><option value="conjunto-comercial-salas-comercial" class="" indice_url="sala-comercial-comercial">Sala comercial</option><option value="casas-sobrados-comercial-comercial" class="" indice_url="casa-comercial-comercial">Casa comercial</option><option value="lojas-comercios-comercial" class="" indice_url="ponto-comercial-comercial">Ponto comercial</option><option value="barracao-galpao-comercial" class="" indice_url="galpao-comercial">Galpão/Depósito/Barracão</option><option value="consultorio-comercial" class="" indice_url="consultorio-comercial">Consultório</option><option value="terreno-comercial-comercial" class="" indice_url="terreno-comercial-comercial">Terreno comercial</option><option value="edificios-comercial" class="" indice_url="predio-comercial">Prédio</option><option value="garagem-comercial" class="" indice_url="garagem-comercial">Garagem</option></optgroup><optgroup class="tipos-normais" label="Rural"><option value="chacaras-rural" class="" indice_url="chacaras-rural">Chácara/Sítio</option><option value="fazendas-rural" class="" indice_url="fazendas-rural">Fazenda</option></optgroup> </select>
<div class="custom-select">
<div class="active-list tipo-decricao">Apartamento</div>
<input type="text" class="list-field tipo-decricao" value="VER TODOS OS IMÓVEIS">
<ul class="drop-down-list" id="tipo-lista" style="display: none;">
<li values="todos-imoveis" id="todos-imoveis" class="option all">Ver Todos os Imóveis</li>
<li values="lancamentos-residencial" style="display:none;" class="option tipos-lancamentos">Residencial </li>
<li values="lancamentos-comercial" style="display:none;" class="option tipos-lancamentos">Comercial</li>
<li id="optgroup" class="high residencial tipos-normais">Residencial</li><li values="apartamentos-residencial" class=" tipos-normais" indice_url="apartamentos-residencial">Apartamento</li><li values="casas-sobrados-residencial" class=" tipos-normais" indice_url="casas-residencial">Casa/Sobrado</li><li values="casas-sobrados-em-condominio-residencial" class=" tipos-normais" indice_url="casas-em-condominio-residencial">Casa em condomínio</li><li values="terrenos-residencial" class="tipo-terreno-residencial tipos-normais" indice_url="terrenos-residencial">Terreno/Lote</li><li values="terrenos-em-condominio-residencial" class="tipo-terreno-residencial tipos-normais" indice_url="terrenos-em-condominio-residencial">Terreno em condomínio</li><li values="coberturas-residencial" class=" tipos-normais" indice_url="coberturas-residencial">Cobertura</li><li values="kitnets-studios-residencial" class=" tipos-normais" indice_url="kitnet-residencial">Kitnet/Stúdio</li><li values="lofts-residencial" class=" tipos-normais" indice_url="loft-residencial">Loft</li><li values="flats-residencial" class=" tipos-normais" indice_url="flat-residencial">Flat</li><li id="optgroup" class="high residencial tipos-normais">Comercial</li><li values="conjunto-comercial-salas-comercial" class=" tipos-normais" indice_url="sala-comercial-comercial">Sala comercial</li><li values="casas-sobrados-comercial-comercial" class=" tipos-normais" indice_url="casa-comercial-comercial">Casa comercial</li><li values="lojas-comercios-comercial" class=" tipos-normais" indice_url="ponto-comercial-comercial">Ponto comercial</li><li values="barracao-galpao-comercial" class=" tipos-normais" indice_url="galpao-comercial">Galpão/Depósito/Barracão</li><li values="consultorio-comercial" class=" tipos-normais" indice_url="consultorio-comercial">Consultório</li><li values="terreno-comercial-comercial" class=" tipos-normais" indice_url="terreno-comercial-comercial">Terreno comercial</li><li values="edificios-comercial" class=" tipos-normais" indice_url="predio-comercial">Prédio</li><li values="garagem-comercial" class=" tipos-normais" indice_url="garagem-comercial">Garagem</li><li id="optgroup" class="high residencial tipos-normais">Rural</li><li values="chacaras-rural" class=" tipos-normais" indice_url="chacaras-rural">Chácara/Sítio</li><li values="fazendas-rural" class=" tipos-normais" indice_url="fazendas-rural">Fazenda</li> </ul>
</div>
</div>
</fieldset>
<fieldset class="range-selector">

<div class="range-slider ">
<div class="label-results double">
<span>Valor <b>Mínimo</b>: <small>R$</small>
<input id="valor_minimo_busca" type="tel" value="" placeholder="0,00" class="formata-valor" autocomplete="off">
</span>
<span>Valor <b>Máximo</b>: <small>R$</small>
<input id="valor_maximo_busca" type="tel" value="" placeholder="0,00" class="formata-valor" autocomplete="off">
</span>

</div>
</div>
</fieldset>
<fieldset class="radio-buttons">
<label id="quartos-b" class="bt-acc active">
<span class="label_quartos_salas">Quartos</span>
<small id="quartos">01+</small>
</label>
<label id="garagem-b" class="bt-acc" for="fieldGar">
Garagem
<small id="garagens"></small>
</label>
<label id="banheiros-b" class="bt-acc" for="fieldBan">
Banheiros
<small id="banheiros"></small>
</label>

<span class="bt-acc-container active" id="quartos-c">
<div class="radio-tile-group">
<i class="icon-bed"></i>
<div class="input-container">
<input id="bed-01" name="qtd_quartos" class="radio-button qtd_quartos" type="radio" value="1">
<div class="radio-tile"><label for="bed-01" class="radio-tile-label">01 <small>+</small></label></div>
 </div>
<div class="input-container">
<input id="bed-02" name="qtd_quartos" class="radio-button qtd_quartos" type="radio" value="2">
<div class="radio-tile"><label for="bed-02" class="radio-tile-label">02 <small>+</small></label></div>
</div>
<div class="input-container">
<input id="bed-03" name="qtd_quartos" class="radio-button qtd_quartos" type="radio" value="3">
<div class="radio-tile"><label for="bed-03" class="radio-tile-label">03 <small>+</small></label></div>
</div>
<div class="input-container">
<input id="bed-04" name="qtd_quartos" class="radio-button qtd_quartos" type="radio" value="4">
<div class="radio-tile"><label for="bed-04" class="radio-tile-label">04 <small>+</small></label></div>
</div>
</div>
</span>

<span class="bt-acc-container" id="garagem-c">
<div class="radio-tile-group">
<i class="icon-carro"></i>
<div class="input-container">
<input id="garage-01" name="qtd_vagas_garagem" class="radio-button qtd_vagas_garagem" type="radio" value="1">
<div class="radio-tile">
<label for="garage-01" class="radio-tile-label">01 <small>+</small></label>
</div>
</div>
<div class="input-container">
<input id="garage-02" name="qtd_vagas_garagem" class="radio-button qtd_vagas_garagem" type="radio" value="2">
<div class="radio-tile">
<label for="garage-02" class="radio-tile-label">02 <small>+</small></label>
</div>
</div>
<div class="input-container">
<input id="garage-03" name="qtd_vagas_garagem" class="radio-button qtd_vagas_garagem" type="radio" value="3">
<div class="radio-tile">
<label for="garage-03" class="radio-tile-label">03 <small>+</small></label>
</div>
</div>
<div class="input-container">
<input id="garage-04" name="qtd_vagas_garagem" class="radio-button qtd_vagas_garagem" type="radio" value="4">
 <div class="radio-tile">
<label for="garage-04" class="radio-tile-label">04 <small>+</small></label>
</div>
</div>
</div>
</span>

<span class="bt-acc-container" id="banheiros-c">
<div class="radio-tile-group">
<i class="icon-bath"></i>
<div class="input-container">
<input id="bat-01" name="qtd_banheiros" class="radio-button qtd_banheiros" type="radio" value="1">
<div class="radio-tile"><label for="bat-01" class="radio-tile-label">01 <small>+</small></label></div>
</div>
<div class="input-container">
<input id="bat-02" name="qtd_banheiros" class="radio-button qtd_banheiros" type="radio" value="2">
<div class="radio-tile"><label for="bat-02" class="radio-tile-label">02 <small>+</small></label></div>
</div>
<div class="input-container">
<input id="bat-03" name="qtd_banheiros" class="radio-button qtd_banheiros" type="radio" value="3">
<div class="radio-tile"><label for="bat-03" class="radio-tile-label">03 <small>+</small></label></div>
</div>
<div class="input-container">
<input id="bat-04" name="qtd_banheiros" class="radio-button qtd_banheiros" type="radio" value="4">
<div class="radio-tile"><label for="bat-04" class="radio-tile-label">04 <small>+</small></label></div>
</div>
</div>
</span>
</fieldset>
<div id="filtros-quartos-banheiros-vagas">
</div>
<fieldset class="range-selector area acc">
<label for="fieldArea">Área Mínima:</label>
<div class="range-slider area">

<div class="label-results">
<span><small>m²</small>
<input type="number" class="metric-range" autocomplete="off" name="area_minima" id="area_minima_busca" value="0" min="0" max="100000">
</span>
</div>
</div>
</fieldset>
</form>
<a href="javascript:;" id="bt_aplicar_filtros" title="aplicarFiltros" class="close-filter-mobile apply-filter">
<span><svg id="load" x="0px" y="0px" viewBox="0 0 150 150"><circle id="loading-inner" cx="75" cy="75" r="60"></circle></svg></span>Aplicar Filtros
</a>
</div>
</div>
</div>
</div>

<div class="box-container">
<span class="tc-material btn-mobile save-btn"><i class="icon-bookmark"></i><span class="pagina-mobile">Página 1</span></span>
<div class="m-content save-content-c">
<div class="save-content">

<div class="minha-busca" id="fix-height">

<div class="top-mobile">
<span class="close">Fechar</span>
<span class="ttl-mobile"><i class="icon-bookmark"></i> SUA BUSCA </span>
</div>
<div class="contents-busca">

<span><h3>
<b>
Mostrando
<span class="reg-ini">1</span> - <span class="reg-fim">20</span>
</b>
de
<span class="_qtd quantidade-total">338</span>
<span>
<strong class="titulo-busca">Apartamentos com 1 quarto à venda no Centro em Itajaí - SC</strong>
</span>
</h3></span> <span id="lista_bairros_cidades_lateral" class="lista_bairros_cidades "></span>
<span class="menu_paginacao"><label>Você está na página <span class="drop-down"><span class="pagina-nav">1</span> de 17</span>	
<ul class="paginacao-scroll menu-paginacao-lista"><li class="bt-close"><i class="icon-plus"></i></li>  <li class="pgaux pg1 current go-to-pg"><span>Página </span>1</li>   <li class="pgaux pg2 go-to-pg">2</li>   <li class="pgaux pg3 go-to-pg">3</li>   <li class="pgaux pg4 go-to-pg">4</li>   <li class="pgaux pg5 go-to-pg">5</li>   </ul>
</label></span>



<span class="save-search-bt">Salvar esta Busca</span>
</div>
</div>
</div>
</div>
</div>

<div class="box-container">
<span class="tc-material btn-mobile fav-btn" id="fav-hide"><span id="#anm" class="count-fav" style="display: none;">0</span><i class="icon-fav"></i>Favoritos</span>
<div class="m-content favoritos-aside">
<div class="anuncios-fav-up" style="max-height: 563px;">

<div class="top-mobile">
 <span class="close">Fechar</span>
<span class="back-f-desk"><i class="icon-next"></i>Voltar para os filtros</span>
<span class="ttl-mobile"><i class="icon-fav"></i>Favoritados:<b class="count-fav" style="display: none;">0</b></span>
</div>
<div class="anuncios-fav ativo" id="fix-height" style="height: 563px;">
<div class="empty">
<i class="icon-error"></i>
<p>Parece que ainda não há nenhum anúncio salvo na sua lista.</p>
</div> <div class="btns-favs">
</div>
</div>
</div>
</div>
</div>

<div class="box-container">
<div class="m-content entrar-logado">
<span class="loading-entrar-aside">
<svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
<circle id="loading-inner" cx="75" cy="75" r="60"></circle>
</svg>
</span>
<span class="back-f-desk"><i class="icon-next"></i>Voltar para os filtros</span>
<div class="login entrar-login"></div>
</div>
</div>

</div>
</aside>
<section class="resultados-de-busca sem-snippet  sem-snippet sem-texto">

<input type="hidden" name="titulo_pagina" class="titulo_pagina" value="Apartamentos com 1 quarto à venda no Centro em Itajaí - SC">
<div class="top-content ">
<div class="main-text">
<span class="_qtd quantidade-total" id="total-imoveis">338</span>
<h1>
<span id="h1_tit_pag">Apartamentos com 1 quarto à venda no Centro em Itajaí - SC</span>
</h1>
<div class="ssk-group ssk-count" id="social-share">
<a href="" title="Compartilhar no Facebook" class="ssk ssk-facebook" data-ssk-ready="true"><div class="ssk-num">0</div></a>


<a href="" title="Compartilhar no Twitter" class="ssk ssk-twitter" data-ssk-ready="true"></a>
<a href="" title="Compartilhar no WhatsApp" class="ssk ssk-whatsapp" data-ssk-ready="true"></a>
<a href="" title="Enviar por Email" class="ssk ssk-email" data-ssk-ready="true"></a>
</div>
</div>
</div>
<div class="btns-right">
<label class="order"><div id="icon-order-c"><span><i class="icon-order"></i></span></div>
<select name="ordem" id="ordenacao" class="ordenacao btn-order-trigger">
<option value="">Ordenar</option>
<option value="mep">Menor Valor</option>
<option value="map"> Maior Valor</option>
<option value="mea"> Menor Área m²</option>
<option value="maa">Maior Área m²</option>
</select>
</label>
</div>
<span id="lista_bairros_cidades" class="lista_bairros_cidades "><div class="filters-out "><div id="lista-bairros-cidades-principal"><span class="btRemoverBairroCidade btRemove" ref="local-24-8507-13972" rel="itajai#sc#centro">Centro/Itajaí</span></div><span class="btRemove btRemoveTipoImovel">Apartamento</span><span class="btRemove btRemoveQuartos"><i class="label_quartos_salas">Quartos</i>&nbsp;(1)</span>		<input type="hidden" id="cidade_busca" name="cidade_busca" value="itajai"> 
		<input type="hidden" id="estado_busca" name="estado_busca" value="sc">
		<input type="hidden" id="bairros_filtros_busca" name="bairros" value="centro">

<div class="filtros-localidade"><input type="hidden" name="local[24][8507][13972]" class="local local_bairro local-24-8507-13972" value="sc-itajai/centro" rel="itajai#sc#centro"></div></div></span>
<div class="view" id="bloco-listagem-geral"><!--<center style="width: 100%; color:red; font-size: 15px"> PAGINA 1</center>-->
<!--style="border:5px solid blue; list-style: none; display: block; float: left;"-->
<ul class="card__list row list-group bloco-1" attr-bloco="1" attr-title="Apartamentos com 1 quarto à venda no Centro em Itajaí - SC | Chaves na Mão">

 
		
			<li class="item list-group-item item2469445 old">

			<div class="baseGaleria" data-id="2469445">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 18 </small></span>

					<div class="galeria-n" data-id="2469445"><div class="overlay-g" data-id="2469445"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img2469445" data-id="2469445" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/18848/2469445/apartamento-a-venda-no-centro-em-itajai-sc-5e50a5e0-7-010-e766ea24.jpg" alt="Centro, Apartamento com 1 quarto à venda, 52 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card2469445">
							<a id="tituloUrl-2469445" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-RS320000/id-2469445/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-RS320000/id-2469445/" title="Apartamento na Avenida Almirante Barroso, 35, Centro, Itajaí por R$320.000,00" class="description link-open-modal" target="_blank" id-imovel="2469445">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor2469445">
									R$<b> 320.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area2469445">52 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos2469445">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites2469445">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros2469445">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem2469445">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 52 m2</span><small> - </small>
								<span class="endereco end2469445"><span class="item-title">Avenida Almirante Barroso, 35<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-2469445" attr-id="2469445" attr-name="Centro, Apartamento com 1 quarto à venda, 52 m2" attr-type="Apartamento" attr-price="320000" attr-endereco="Avenida Almirante Barroso, 35 Centro, Itajaí">
							<span class="desc2469445"><p>Características do imóvel: apartamento de&nbsp;01 suíte no&nbsp;centro de&nbsp;itajaí/sc


	novo;
	ensolarado e arejado;
	finamente mobiliado;
	linda vista;
	01 suíte;
	lavabo;
	sala de estar e jantar;
	cozinha integrada;
	área de serviço;
	área privativa de 40,25m²;
	01 vaga privativa.

características do edifício: área de lazer


	decck;
	piscina com borda infinita;
	prainha;
	ofurô;
	02 salões de festas (integrados);
	espaço gourmet com mesa&nbsp;de snooker e poker;
	espaço kids;
	academia.

: excelente apartamento&nbsp;com área privativa de 40,25m²,&nbsp;finamente&nbsp;mobiliado, 01 suíte, lavabo, sala de estar e jantar, cozinha integrada, área de serviço e 01 vaga de garagem privativa.&nbsp;linda vista, ensolarado e bem arejado. ótima localização e de fácil acesso, com boa mobilidade, grande circulação de ônibus. próximo a havan, bistek, univali, escolas, restaurantes, farmácias, bancos, prestadores de serviços e comércios em geral.</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner2469445">
								
								<img class="lazyload fade" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18848.png" alt="MUNDIAL ASSESSORIA IMOBILIÁRIA" src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18848.png">
								
						</span> 

													<span class="details deskt-hidden idWhats2469445"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="2469445" attr-lnk="https://api.whatsapp.com/send?phone=5547988020537&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-RS320000/id-2469445/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora2469445" attr-id_cliente="" attr-id_imovel="2469445" href="tel:047988020537"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-2469445" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-RS320000/id-2469445/" id-imovel="2469445" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="2469445"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-2469445   " id="favorite-bt" attr-id="2469445" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados2469445" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 320000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "MUNDIAL ASSESSORIA IMOBILIÁRIA",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/mundial-assessoria-imobiliaria-18848",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18848.png",						"image": "https://www.chavesnamao.com.br/imoveis/18848/2469445/apartamento-a-venda-no-centro-em-itajai-sc-5e50a5e0-7.jpg",						"address": "Avenida Brasil, 3358, Centro, Balneário Camboriú - SC",
						
						"priceRange": "320000",
						"telephone": "(47) 3263-0023"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "52",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88302-203",
						"streetAddress": "Avenida Almirante Barroso, 35 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-22.9068467",
						"longitude": "-43.1728965"
						},
												
						"name": "Apartamento na Avenida Almirante Barroso, 35, Centro, Itajaí por R$320.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-RS320000/id-2469445/",

						"description": "Características do imóvel: apartamento de 01 suíte no centro de itajaíscnovo;ensolarado e arejado;finamente mobiliado;linda vista;01 suíte;lavabo;sala de estar e jantar;cozinha integrada;área de serviço;área privativa de 40,25m²;01 vaga privativa.características do edifício: área de lazerdecck;piscina com borda infinita;prainha;ofurô;02 salões de festas (integrados);espaço gourmet com mesa de snooker e poker;espaço kids;academia.: excelente apartamento com área privativa de 40,25m², finamente mobiliado, 01 suíte, lavabo, sala de estar e jantar, cozinha integrada, área de serviço e 01 vaga de garagem privativa. linda vista, ensolarado e bem arejado. ótima localização e de fácil acesso, com boa mobilidade, grande circulação de ônibus. próximo a havan, bistek, univali, escolas, restaurantes, farmácias, bancos, prestadores de serviços e comércios em geral."
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1158632 old">

			<div class="baseGaleria" data-id="1158632">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 4 </small></span>

					<div class="galeria-n" data-id="1158632"><div class="overlay-g" data-id="1158632"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1158632" data-id="1158632" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/20993/1158632/apartamento-a-venda-no-centro-em-itajai-sc-5c95d2a7-1-010-82bf28e9.jpg" alt="Centro, Apartamento com 1 quarto à venda, 119 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1158632">
							<a id="tituloUrl-1158632" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-72m2-RS352000/id-1158632/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-72m2-RS352000/id-1158632/" title="Apartamento na Rua Juvenal Garcia, 125, Centro, Itajaí por R$352.000,00" class="description link-open-modal" target="_blank" id-imovel="1158632">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1158632">
									R$<b> 352.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1158632">119 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1158632">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites1158632">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1158632">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1158632">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 119 m2</span><small> - </small>
								<span class="endereco end1158632"><span class="item-title">Rua Juvenal Garcia, 125<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1158632" attr-id="1158632" attr-name="Centro, Apartamento com 1 quarto à venda, 119 m2" attr-type="Apartamento" attr-price="352000" attr-endereco="Rua Juvenal Garcia, 125 Centro, Itajaí">
							<span class="desc1158632"><p>Leandro zim apresenta:

apartamentos no residencial vêneto, com ótima localização no centro de itajaí.
apartamento 01 com:
01 suíte + 01 dormitório 
0 1 vaga de garagem 
sala
cozinha 
bwc social 
lavanderia 
sacada 
01 vaga de garagem 
área privativa: 68m² e 70m²
área total: 119m²

acabamentos : 
teto todo rebaixado em gesso 
piso porcelanato 
tubulação para água quente 
medidores de água e gás individuais 

prédio :
02 elevadores 
área de lazer:
salão de festa com vista panorâmica.
brinquedoteca.
academia
r$: á partir de 352.000,00

apartamento 02 com:
01 dormitório 
01 vaga de garagem 
sala
cozinha 
bwc social 
lavanderia 
sacada
área privativa: 41m²
área total: 71m²

acabamentos :
teto todo rebaixado em gesso 
piso porcelanato 
tubulação para água quente 
medidores de água e gás individuais 

prédio : 
02 elevadores 
área de lazer
salão de festa com vista panorâmica.
brinquedoteca.
academia

*aceita imóvel ou veículo como forma de pagamento
r$: á partir de 215.00,00



informações e visitas:
eduardo schalfer creci 20351 f

matriz 
rua saul dalago 481, sala 01, lídia duarte , camboriú -sc
fone: 4 7 3 3 6 5 -2 5 1 1 / 4 

filial
rua juvenal garcia n 64, sala 101 e 102, centro, itajaí - sc
fone: 4 7 / 47 </p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1158632">
								
								<img class="lazyload fade" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/209931573076342.jpeg" alt="EDUARDO SCHALFER CORRETOR DE IMÓVEIS" src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/209931573076342.jpeg">
								
						</span> 

													<span class="details deskt-hidden idWhats1158632"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1158632" attr-lnk="https://api.whatsapp.com/send?phone=5547992287951&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-72m2-RS352000/id-1158632/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1158632" attr-id_cliente="" attr-id_imovel="1158632" href="tel:04733652511"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1158632" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-72m2-RS352000/id-1158632/" id-imovel="1158632" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1158632"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1158632   " id="favorite-bt" attr-id="1158632" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1158632" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 352000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "EDUARDO SCHALFER CORRETOR DE IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/eduardo-schalfer-corretor-de-imoveis-20993",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/209931573076342.jpeg",						"image": "https://www.chavesnamao.com.br/imoveis/20993/1158632/apartamento-a-venda-no-centro-em-itajai-sc-5c95d2a7-1.jpg",						"address": "RUA SAUL DALAGO, 481, Lidia Duarte, Camboriú - SC",
						
						"priceRange": "352000",
						"telephone": "(47) 99228-7951"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "119",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88302-040",
						"streetAddress": "Rua Juvenal Garcia, 125 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9129093",
						"longitude": "-48.66295600000001"
						},
												
						"name": "Apartamento na Rua Juvenal Garcia, 125, Centro, Itajaí por R$352.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-72m2-RS352000/id-1158632/",

						"description": "Leandro zim apresenta:apartamentos no residencial vêneto, com ótima localização no centro de itajaí.apartamento 01 com:01 suíte + 01 dormitório 0 1 vaga de garagem salacozinha bwc social lavanderia sacada 01 vaga de garagem área privativa: 68m² e 70m²área total: 119m²acabamentos : teto todo rebaixado em gesso piso porcelanato tubulação para água quente medidores de água e gás individuais prédio :02 elevadores área de lazer:salão de festa com vista panorâmica.brinquedoteca.academiar$: á partir de 352.000,00apartamento 02 com:01 dormitório 01 vaga de garagem salacozinha bwc social lavanderia sacadaárea privativa: 41m²área total: 71m²acabamentos :teto todo rebaixado em gesso piso porcelanato tubulação para água quente medidores de água e gás individuais prédio : 02 elevadores área de lazersalão de festa com vista panorâmica.brinquedoteca.academia*aceita imóvel ou veículo como forma de pagamentor$: á partir de 215.00,00informações e visitas:eduardo schalfer creci 20351 fmatriz rua saul dalago 481, sala 01, lídia duarte , camboriú -scfone: 4 7 3 3 6 5 -2 5 1 1  4 ver telefonefilialrua juvenal garcia n 64, sala 101 e 102, centro, itajaí - scfone: 4 7 ver telefone 47 ver telefone"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item2087000 old">

			<div class="baseGaleria" data-id="2087000">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 10 </small></span>

					<div class="galeria-n" data-id="2087000"><div class="overlay-g" data-id="2087000"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img2087000" data-id="2087000" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/18207/2087000/apartamento-a-venda-no-centro-em-itajai-sc-5dcf735c-1-010-c5275cd1.jpg" alt="Centro, Apartamento com 1 quarto à venda, 61 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card2087000">
							<a id="tituloUrl-2087000" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-89m2-RS319000/id-2087000/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-89m2-RS319000/id-2087000/" title="Apartamento na Rua Vereador João Angelino Lopes Júnior, Centro, Itajaí por R$319.000,00" class="description link-open-modal" target="_blank" id-imovel="2087000">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor2087000">
									R$<b> 319.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area2087000">61 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos2087000">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites2087000">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros2087000">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem2087000">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 61 m2</span><small> - </small>
								<span class="endereco end2087000"><span class="item-title">Rua Vereador João Angelino Lopes Júnior<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-2087000" attr-id="2087000" attr-name="Centro, Apartamento com 1 quarto à venda, 61 m2" attr-type="Apartamento" attr-price="319000" attr-endereco="Rua Vereador João Angelino Lopes Júnior Centro, Itajaí">
							<span class="desc2087000"><p>Residencial ravenna -&nbsp; localizado no centro de itajaí, garantindo praticidade ao seu dia a dia. 
próximo a supermercados, bancos, farmácias, comércio, colégios, à univali e ao hospital marieta. o ravenna residence valoriza a intimidade e o conforto de cada ambiente. são apartamentos com três tipos de plantas, para você escolher a melhor opção. 
características 
 
? arquitetura neoclássica - ? hall de entrada mobiliado e decorado - piso em porcelanato e laminado na área interna - ? 2 elevadores - 
? central de segurança com monitoramento digital 24 horas nos principais acessos do condomínio (cftv) 
? estacionamento com controle de entrada e saída de veículos 
? controle de acesso de pedestres 
? sacada com churrasqueira 
? sala de estar e jantar integradas 
? cozinha, área de serviço&nbsp; 
? piso com isolamento acústico 
? infraestrutura para split em quarto e sala 
? lavabo em todas as unidades 
? quartos com suítes 
 
&nbsp; 
entrega 2019 (até a entrega todos os valores já estão pagos) 
código do anúncio: </p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner2087000">
								
								<img class="lazyload fade" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18207.png" alt="DESC IMÓVEIS" src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18207.png">
								
						</span> 

													<span class="details deskt-hidden idWhats2087000"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="2087000" attr-lnk="https://api.whatsapp.com/send?phone=5547999696161&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-89m2-RS319000/id-2087000/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora2087000" attr-id_cliente="" attr-id_imovel="2087000" href="tel:047999696161"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-2087000" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-89m2-RS319000/id-2087000/" id-imovel="2087000" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="2087000"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-2087000   " id="favorite-bt" attr-id="2087000" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados2087000" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 319000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "DESC IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/desc-imoveis-18207",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18207.png",						"image": "https://www.chavesnamao.com.br/imoveis/18207/2087000/apartamento-a-venda-no-centro-em-itajai-sc-5dcf735c-1.jpg",						"address": "Rua 3700, 141, Centro, Balneário Camboriú - SC",
						
						"priceRange": "319000",
						"telephone": "(47) 3361-1414"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "61",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-230",
						"streetAddress": "Rua Vereador João Angelino Lopes Júnior Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.910678824992",
						"longitude": "-48.658879309325"
						},
												
						"name": "Apartamento na Rua Vereador João Angelino Lopes Júnior, Centro, Itajaí por R$319.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-89m2-RS319000/id-2087000/",

						"description": "Residencial ravenna -  localizado no centro de itajaí, garantindo praticidade ao seu dia a dia. próximo a supermercados, bancos, farmácias, comércio, colégios, à univali e ao hospital marieta. o ravenna residence valoriza a intimidade e o conforto de cada ambiente. são apartamentos com três tipos de plantas, para você escolher a melhor opção. características  ? arquitetura neoclássica - ? hall de entrada mobiliado e decorado - piso em porcelanato e laminado na área interna - ? 2 elevadores - ? central de segurança com monitoramento digital 24 horas nos principais acessos do condomínio (cftv) ? estacionamento com controle de entrada e saída de veículos ? controle de acesso de pedestres ? sacada com churrasqueira ? sala de estar e jantar integradas ? cozinha, área de serviço  ? piso com isolamento acústico ? infraestrutura para split em quarto e sala ? lavabo em todas as unidades ? quartos com suítes    entrega 2019 (até a entrega todos os valores já estão pagos) código do anúncio: ver telefone"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1893123 old">

			<div class="baseGaleria" data-id="1893123">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 24 </small></span>

					<div class="galeria-n" data-id="1893123"><div class="overlay-g" data-id="1893123"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1893123" data-id="1893123" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/16429/1893123/apartamento-a-venda-no-centro-em-itajai-sc-5d9dce29-1-010-7bfafcf9.jpg" alt="Centro, Apartamento com 1 quarto à venda, 63 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1893123">
							<a id="tituloUrl-1893123" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS579000/id-1893123/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS579000/id-1893123/" title="Apartamento na Rua José Brandão, 577, Centro, Itajaí por R$579.000,00" class="description link-open-modal" target="_blank" id-imovel="1893123">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1893123">
									R$<b> 579.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1893123">63 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1893123">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites1893123">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1893123">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1893123">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 63 m2</span><small> - </small>
								<span class="endereco end1893123"><span class="item-title">Rua José Brandão, 577<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1893123" attr-id="1893123" attr-name="Centro, Apartamento com 1 quarto à venda, 63 m2" attr-type="Apartamento" attr-price="579000" attr-endereco="Rua José Brandão, 577 Centro, Itajaí">
							<span class="desc1893123"><p>Descrição: apartamento com excelente localizaçao, 01 suite, sala, 01 vaga de garagem privativa, entrada + financiamento.
01 suite, sala, cozinha, area de serviço, piso porcelanato, acabamento em gesso, tub. para split, medidores individuais de agua, luz e gas, 01 vaga de garagem privativa, 63m² de area privativa.
edifício torre única, 11 pavimentos, 03 pavimentos de garagem, 32 aptos sendo 05 por andar, hall de entrada decorado, 02 elevadores (social e de serviço, com capacidade para 06 pessoas cada), portão eletrônico, portaria 24hrs, interfone.
area de lazer com piscina adulto, academia. incorporação 30.815</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1893123">
								
								<img class="lazyload fade" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png" alt="ALCEU MARCOM CORRETOR DE IMÓVEIS" src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png">
								
						</span> 

													<span class="details deskt-hidden idWhats1893123"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1893123" attr-lnk="https://api.whatsapp.com/send?phone=5547999157574&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS579000/id-1893123/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1893123" attr-id_cliente="" attr-id_imovel="1893123" href="tel:047999157574"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1893123" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS579000/id-1893123/" id-imovel="1893123" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1893123"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1893123   " id="favorite-bt" attr-id="1893123" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1893123" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 579000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "ALCEU MARCOM CORRETOR DE IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/alceu-marcom-corretor-de-imoveis-16429",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png",						"image": "https://www.chavesnamao.com.br/imoveis/16429/1893123/apartamento-a-venda-no-centro-em-itajai-sc-5d9dce29-1.jpg",						"address": "Rua 904, 180, Centro, Balneário Camboriú - SC",
						
						"priceRange": "579000",
						"telephone": "(47) 3056-3026"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "63",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "",
						"streetAddress": "Rua José Brandão, 577 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.91161",
						"longitude": "-48.65727"
						},
												
						"name": "Apartamento na Rua José Brandão, 577, Centro, Itajaí por R$579.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS579000/id-1893123/",

						"description": "Descrição: apartamento com excelente localizaçao, 01 suite, sala, 01 vaga de garagem privativa, entrada + financiamento.01 suite, sala, cozinha, area de serviço, piso porcelanato, acabamento em gesso, tub. para split, medidores individuais de agua, luz e gas, 01 vaga de garagem privativa, 63m² de area privativa.edifício torre única, 11 pavimentos, 03 pavimentos de garagem, 32 aptos sendo 05 por andar, hall de entrada decorado, 02 elevadores (social e de serviço, com capacidade para 06 pessoas cada), portão eletrônico, portaria 24hrs, interfone.area de lazer com piscina adulto, academia. incorporação 30.815"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1138046 old">

			<div class="baseGaleria" data-id="1138046">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 14 </small></span>

					<div class="galeria-n" data-id="1138046"><div class="overlay-g" data-id="1138046"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1138046" data-id="1138046" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/33636/1138046/apartamento-a-venda-no-centro-em-itajai-sc-5c6d1ee8-1-010-8af25000.jpg" alt="Centro, Apartamento com 1 quarto à venda, 40 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1138046">
							<a id="tituloUrl-1138046" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-80m2-RS649000/id-1138046/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-80m2-RS649000/id-1138046/" title="Apartamento na Rua Tijucas, 335, Centro, Itajaí por R$649.000,00" class="description link-open-modal" target="_blank" id-imovel="1138046">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1138046">
									R$<b> 649.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1138046">40 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1138046">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1138046">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1138046">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 40 m2</span><small> - </small>
								<span class="endereco end1138046"><span class="item-title">Rua Tijucas, 335<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1138046" attr-id="1138046" attr-name="Centro, Apartamento com 1 quarto à venda, 40 m2" attr-type="Apartamento" attr-price="649000" attr-endereco="Rua Tijucas, 335 Centro, Itajaí">
							<span class="desc1138046"><p>Residencial jardim das águas.
este foi o desafio dos arquitetos da zermiani arquitetura e mendes sibara, proporcionar sensações em seus ambientes, para isso incorporaram em seu projeto, um dos quatro elementos da natureza, a água.
buscou-se a musicalidade das quedas d água e riachos naturais, aplicando-as nos diferentes espaços projetados, onde espelhos d água, marcam os acessos ao empreendimento, piscinas e quedas d água entoam o som das cascatas, proporcionando diversas sensações, seja de liberdade, relaxamento ou tranquilidade, ou seja, compondo um jardim das águas para toda a família.com uma imponente fachada, o jardim das águas é um empreendimento único, com um charme especial que contempla beleza, sofisticação e lazer, tudo isso aliado a qualidade de vida. a portaria no segundo andar com acesso exclusivo, permite melhor monitoramento em toda área do empreendimento, garantindo assim a sua segurança e de toda a sua família.no jardim das águas você viverá a vida que sempre sonhou. lazer, diversão e tranquilidade com segurança. foram criados seus espaços exclusivos para que você e sua família sintam-se de férias o ano todo. com duas torres, niágara e iguaçú, o jardim das águas é emoldurado pela maior área de lazer de itajaí, com espaços encantadores e privilegiados para os momentos de tranquilidade e diversão.

ultimas unidades disponíveis 
601 2 suítes, 1 vaga de garagem, área privativa 72,5m², área total 107,98m², r$ 649.000,00.

801 2 suítes, 1 vaga de garagem, área privativa 72,2m², área total 107,98m², r$ 670.000,00 r$ 167.500,00.

 2 suítes, 2 vagas de garagem, 110,28m² 121,7m², r$ 1.100.000,00.

101 1 suíte + 2 dormitórios, 2 vagas de garagem, área privativa 87,03m², área total 129,2271, r$ 760.000,00 

201 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,04m², área total 129,23m², r$ 830.000,00 .

702 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,03m², área total 129,22m², r$ 860.000,00. 

1102 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,04m², área total 129,23m², r$ 885.000,00.
1702 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,04m², área total 129,23m², r$ 920.000,00.
1504 loft, 1 vaga de garagem, área construída 40,86m², área total 60,77m², r$ 350.000,00.



**ref. alternativa 0905

atualizado em setembro/2019. valores sujeitos a alterações.</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1138046">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/336361550592432.jpg" alt="MP IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1138046"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1138046" attr-lnk="https://api.whatsapp.com/send?phone=5547999459530&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-80m2-RS649000/id-1138046/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1138046" attr-id_cliente="" attr-id_imovel="1138046" href="tel:047999459530"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1138046" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-80m2-RS649000/id-1138046/" id-imovel="1138046" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1138046"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1138046   " id="favorite-bt" attr-id="1138046" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1138046" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 649000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "MP IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/mp-imoveis-33636",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/336361550592432.jpg",						"image": "https://www.chavesnamao.com.br/imoveis/33636/1138046/apartamento-a-venda-no-centro-em-itajai-sc-5c6d1ee8-1.jpg",						"address": "Avenida Nereu Ramos, 946, Centro, Penha - SC",
						
						"priceRange": "649000",
						"telephone": "(47) 3347-1447"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "40",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-360",
						"streetAddress": "Rua Tijucas, 335 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9048061370849600000000000",
						"longitude": "-48.6642723083496100000000000"
						},
												
						"name": "Apartamento na Rua Tijucas, 335, Centro, Itajaí por R$649.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-80m2-RS649000/id-1138046/",

						"description": "Residencial jardim das águas.este foi o desafio dos arquitetos da zermiani arquitetura e mendes sibara, proporcionar sensações em seus ambientes, para isso incorporaram em seu projeto, um dos quatro elementos da natureza, a água.buscou-se a musicalidade das quedas d água e riachos naturais, aplicando-as nos diferentes espaços projetados, onde espelhos d água, marcam os acessos ao empreendimento, piscinas e quedas d água entoam o som das cascatas, proporcionando diversas sensações, seja de liberdade, relaxamento ou tranquilidade, ou seja, compondo um jardim das águas para toda a família.com uma imponente fachada, o jardim das águas é um empreendimento único, com um charme especial que contempla beleza, sofisticação e lazer, tudo isso aliado a qualidade de vida. a portaria no segundo andar com acesso exclusivo, permite melhor monitoramento em toda área do empreendimento, garantindo assim a sua segurança e de toda a sua família.no jardim das águas você viverá a vida que sempre sonhou. lazer, diversão e tranquilidade com segurança. foram criados seus espaços exclusivos para que você e sua família sintam-se de férias o ano todo. com duas torres, niágara e iguaçú, o jardim das águas é emoldurado pela maior área de lazer de itajaí, com espaços encantadores e privilegiados para os momentos de tranquilidade e diversão.ultimas unidades disponíveis 601 2 suítes, 1 vaga de garagem, área privativa 72,5m², área total 107,98m², r$ 649.000,00.801 2 suítes, 1 vaga de garagem, área privativa 72,2m², área total 107,98m², r$ 670.000,00 r$ 167.500,00.ver telefone 2 suítes, 2 vagas de garagem, 110,28m² 121,7m², r$ 1.100.000,00.101 1 suíte + 2 dormitórios, 2 vagas de garagem, área privativa 87,03m², área total 129,2271, r$ 760.000,00 201 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,04m², área total 129,23m², r$ 830.000,00 .702 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,03m², área total 129,22m², r$ 860.000,00. 1102 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,04m², área total 129,23m², r$ 885.000,00.1702 1 suíte + 2 dormitórios, 2 vagas de garagem, área construída 87,04m², área total 129,23m², r$ 920.000,00.1504 loft, 1 vaga de garagem, área construída 40,86m², área total 60,77m², r$ 350.000,00.**ref. alternativa 0905atualizado em setembro2019. valores sujeitos a alterações."
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item884599 old">

			<div class="baseGaleria" data-id="884599">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 21 </small></span>

					<div class="galeria-n" data-id="884599"><div class="overlay-g" data-id="884599"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img884599" data-id="884599" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/18212/884599/apartamento-a-venda-no-centro-em-itajai-sc-5c65092c-1-010-2c919212.jpg" alt="Centro, Apartamento com 1 quarto à venda, 62 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card884599">
							<a id="tituloUrl-884599" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS530000/id-884599/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS530000/id-884599/" title="Apartamento no Centro, Itajaí por R$530.000,00" class="description link-open-modal" target="_blank" id-imovel="884599">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor884599">
									R$<b> 530.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area884599">62 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos884599">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites884599">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros884599">2</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem884599">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 62 m2</span><small> - </small>
								<span class="endereco end884599"><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-884599" attr-id="884599" attr-name="Centro, Apartamento com 1 quarto à venda, 62 m2" attr-type="Apartamento" attr-price="530000" attr-endereco="">
							<span class="desc884599"><p>Lindíssimo loft! único em itajaí. alto padrão no centro.
&nbsp; 
 
• &nbsp;apto loft duplex 
• &nbsp;suíte no mezanino 
• &nbsp;sala e cozinha 
• &nbsp;sacada 
• &nbsp;área de serviço 
• &nbsp;lavabo 
• &nbsp;01 vaga de garagem 
• &nbsp;área de lazer com salão de festas, sala de ginástica e piscina com raia 

 características: 

• &nbsp;aquecimento de água 
• &nbsp;área de serviço 
• &nbsp;automação predial 
• &nbsp;bicicletário 
• &nbsp;cozinha americana 
• &nbsp;espaço fitness 
• &nbsp;espaço gourmet 
• &nbsp;gás central 
• &nbsp;living 
• &nbsp;piscina 
• &nbsp;piso cerâmico 
• &nbsp;portão eletrônico 
• &nbsp;sacada 
• &nbsp;salão de festas</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner884599">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18212.jpg" alt="RICARDO IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats884599"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="884599" attr-lnk="https://api.whatsapp.com/send?phone=5547999839527&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS530000/id-884599/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora884599" attr-id_cliente="" attr-id_imovel="884599" href="tel:04733679533"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-884599" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS530000/id-884599/" id-imovel="884599" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="884599"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-884599   " id="favorite-bt" attr-id="884599" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados884599" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 530000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "RICARDO IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/ricardo-imoveis-18212",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18212.jpg",						"image": "https://www.chavesnamao.com.br/imoveis/18212/884599/apartamento-a-venda-no-centro-em-itajai-sc-5c65092c-1.jpg",						"address": "Avenida Atlântica, 3890, Centro, Balneário Camboriú - SC",
						
						"priceRange": "530000",
						"telephone": "(47) 3361-0643"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "62",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-590",
						"streetAddress": ",Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9068419",
						"longitude": "-48.6615982"
						},
												
						"name": "Apartamento no Centro, Itajaí por R$530.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS530000/id-884599/",

						"description": "Lind&iacute;ssimo loft! &uacute;nico em itaja&iacute;. alto padr&atilde;o no centro.&nbsp;  • &nbsp;apto loft duplex • &nbsp;suíte no mezanino • &nbsp;sala e cozinha • &nbsp;sacada • &nbsp;área de serviço • &nbsp;lavabo • &nbsp;01 vaga de garagem • &nbsp;área de lazer com salão de festas, sala de ginástica e piscina com raia  características: • &nbsp;aquecimento de água • &nbsp;área de serviço • &nbsp;automação predial • &nbsp;bicicletário • &nbsp;cozinha americana • &nbsp;espaço fitness • &nbsp;espaço gourmet • &nbsp;gás central • &nbsp;living • &nbsp;piscina • &nbsp;piso cerâmico • &nbsp;portão eletrônico • &nbsp;sacada • &nbsp;salão de festas"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1443182 old">

			<div class="baseGaleria" data-id="1443182">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 17 </small></span>

					<div class="galeria-n" data-id="1443182"><div class="overlay-g" data-id="1443182"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1443182" data-id="1443182" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/39450/1443182/apartamento-a-venda-no-centro-em-itajai-sc-5d165afc-1-010-f0e96d1b.jpg" alt="Centro, Apartamento com 1 quarto à venda, 103 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1443182">
							<a id="tituloUrl-1443182" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-143m2-RS750000/id-1443182/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-143m2-RS750000/id-1443182/" title="Apartamento na Rua Lauro Muller, 256, Centro, Itajaí por R$750.000,00" class="description link-open-modal" target="_blank" id-imovel="1443182">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1443182">
									R$<b> 750.000,00</b>									</span>
									<span class="condominio condominio1443182">Condomínio: R$ <b>600,00</b></span>								</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1443182">103 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1443182">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites1443182">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1443182">2</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1443182">2</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 103 m2</span><small> - </small>
								<span class="endereco end1443182"><span class="item-title">Rua Lauro Muller, 256<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1443182" attr-id="1443182" attr-name="Centro, Apartamento com 1 quarto à venda, 103 m2" attr-type="Apartamento" attr-price="750000" attr-endereco="Rua Lauro Muller, 256 Centro, Itajaí">
							<span class="desc1443182"><p>O apartamento : primme imóveis vende excelente&nbsp;apartamento com 01 suíte. ( loft)&nbsp;

apartamento novo, 103m² de área útil,&nbsp;com ampla&nbsp;suíte, sacada integrada ao living&nbsp;para 02 ambientes, cozinha, área de serviço e 02 vagas de garagem privativa. ótimo acabamento, piso porcelanato, gesso,&nbsp;granito e móveis sob medida. excelente localização, com vista panorâmica da marina de itajaí&nbsp;e a orla de navegantes.&nbsp;

condomínio com salão de festas, piscina, academia, playground, sauna e piscina.

&nbsp;

gostou desta opção?

&nbsp;

entre em contato conosco pelos fones 0, 0, 0 ou&nbsp; 0. 

conheça nossa equipe de corretores, somos especialistas no mercado de balneário camboriú-sc&nbsp; e região, e buscamos sempre e melhor negociação para a aquisição ou locação do seu imóvel.

&nbsp;

trabalhamos com todas as construtoras da nossa região.

&nbsp;

ao optar por nossa empresa, você terá&nbsp; as melhores condições de compra do mercado.

visite nosso&nbsp;facebook&nbsp;e curta nossa&nbsp;fanpage:&nbsp;www.facebook.com/primmeimoveisbalneario

&nbsp;

visite outras opções em nosso site:&nbsp;www.primmeimoveis.com

&nbsp;</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1443182">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/394501560543189.png" alt="PRIMME IMÓVEIS IMOBILIÁRIA BALNEÁRIO CAMBORIÚ">
								
						</span> 

													<span class="details deskt-hidden idWhats1443182"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1443182" attr-lnk="https://api.whatsapp.com/send?phone=5547996740007&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-143m2-RS750000/id-1443182/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1443182" attr-id_cliente="" attr-id_imovel="1443182" href="tel:047996740007"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1443182" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-143m2-RS750000/id-1443182/" id-imovel="1443182" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1443182"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1443182   " id="favorite-bt" attr-id="1443182" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1443182" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 750000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "PRIMME IMÓVEIS IMOBILIÁRIA BALNEÁRIO CAMBORIÚ",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/primme-imoveis-imobiliaria-balneario-camboriu-39450",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/394501560543189.png",						"image": "https://www.chavesnamao.com.br/imoveis/39450/1443182/apartamento-a-venda-no-centro-em-itajai-sc-5d165afc-1.jpg",						"address": "Avenida Brasil, 2520, Centro, Balneário Camboriú - SC",
						
						"priceRange": "750000",
						"telephone": "(47) 3367-6770"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "103",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88310-000",
						"streetAddress": "Rua Lauro Muller, 256 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9074364",
						"longitude": "-48.65537599999999"
						},
												
						"name": "Apartamento na Rua Lauro Muller, 256, Centro, Itajaí por R$750.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-143m2-RS750000/id-1443182/",

						"description": "O apartamento : primme imóveis vende excelente apartamento com 01 suíte. ( loft) apartamento novo, 103m² de área útil, com ampla suíte, sacada integrada ao living para 02 ambientes, cozinha, área de serviço e 02 vagas de garagem privativa. ótimo acabamento, piso porcelanato, gesso, granito e móveis sob medida. excelente localização, com vista panorâmica da marina de itajaí e a orla de navegantes. condomínio com salão de festas, piscina, academia, playground, sauna e piscina. gostou desta opção? entre em contato conosco pelos fones 0ver telefone, 0ver telefone, 0ver telefone ou  0ver telefone. conheça nossa equipe de corretores, somos especialistas no mercado de balneário camboriú-sc  e região, e buscamos sempre e melhor negociação para a aquisição ou locação do seu imóvel. trabalhamos com todas as construtoras da nossa região. ao optar por nossa empresa, você terá  as melhores condições de compra do mercado.visite nosso facebook e curta nossa fanpage: www.facebook.comprimmeimoveisbalneario visite outras opções em nosso site: www.primmeimoveis.com "
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1789413 old">

			<div class="baseGaleria" data-id="1789413">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 14 </small></span>

					<div class="galeria-n" data-id="1789413"><div class="overlay-g" data-id="1789413"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1789413" data-id="1789413" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/28450/1789413/apartamento-a-venda-no-centro-em-itajai-sc-5d845365-2-010-eb56eab5.jpg" alt="Centro, Apartamento com 1 quarto à venda, 30 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1789413">
							<a id="tituloUrl-1789413" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-50m2-RS199000/id-1789413/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-50m2-RS199000/id-1789413/" title="Apartamento na Rua Izidoro Raimundo De Oliveira, 33, Centro, Itajaí por R$199.000,00" class="description link-open-modal" target="_blank" id-imovel="1789413">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1789413">
									R$<b> 199.000,00</b>									</span>
									<span class="condominio condominio1789413">Condomínio: R$ <b>284,00</b></span>								</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1789413">30 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1789413">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1789413">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1789413">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 30 m2</span><small> - </small>
								<span class="endereco end1789413"><span class="item-title">Rua Izidoro Raimundo De Oliveira, 33<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1789413" attr-id="1789413" attr-name="Centro, Apartamento com 1 quarto à venda, 30 m2" attr-type="Apartamento" attr-price="199000" attr-endereco="Rua Izidoro Raimundo De Oliveira, 33 Centro, Itajaí">
							<span class="desc1789413"><p>Edifício number one localizado em itajaí de fácil acesso a rua brusque, conta com loft de 01 dormitório e garagem privativa. 
 apartamento number one: 

• &nbsp;mobiliado 
• &nbsp;01 dormitório 
• &nbsp;banheiro social 
• &nbsp;01 vaga de garagem privativa 

 características: 

• &nbsp;área de serviço 
• &nbsp;cozinha 
• &nbsp;sala</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1789413">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/284501541774092.png" alt="MINHA BC IMOVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1789413"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1789413" attr-lnk="https://api.whatsapp.com/send?phone=554735141911&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-50m2-RS199000/id-1789413/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1789413" attr-id_cliente="28450" attr-id_imovel="1789413" href="tel:04735141911"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1789413" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-50m2-RS199000/id-1789413/" id-imovel="1789413" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1789413"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1789413   " id="favorite-bt" attr-id="1789413" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1789413" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 199000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "MINHA BC IMOVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/minha-bc-imoveis-28450",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/284501541774092.png",						"image": "https://www.chavesnamao.com.br/imoveis/28450/1789413/apartamento-a-venda-no-centro-em-itajai-sc-5d845365-2.jpg",						"address": "Avenida Brasil, 1091, Centro, Balneário Camboriú - SC",
						
						"priceRange": "199000",
						"telephone": "(47) 3514-1911"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "30",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88302-070",
						"streetAddress": "Rua Izidoro Raimundo De Oliveira, 33 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9157",
						"longitude": "-48.6688"
						},
												
						"name": "Apartamento na Rua Izidoro Raimundo De Oliveira, 33, Centro, Itajaí por R$199.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-50m2-RS199000/id-1789413/",

						"description": "Edif&iacute;cio number one localizado em itaja&iacute; de f&aacute;cil acesso a rua brusque, conta com loft de 01 dormit&oacute;rio e garagem privativa.  apartamento number one: • &nbsp;mobiliado • &nbsp;01 dormitório • &nbsp;banheiro social • &nbsp;01 vaga de garagem privativa  características: • &nbsp;área de serviço • &nbsp;cozinha • &nbsp;sala"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1893268 old">

			<div class="baseGaleria" data-id="1893268">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 13 </small></span>

					<div class="galeria-n" data-id="1893268"><div class="overlay-g" data-id="1893268"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1893268" data-id="1893268" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/16429/1893268/apartamento-a-venda-no-centro-em-itajai-sc-5d9d915c-1-010-75e5d6d7.jpg" alt="Centro, Apartamento com 1 quarto à venda, 55 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1893268">
							<a id="tituloUrl-1893268" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-104m2-RS401000/id-1893268/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-104m2-RS401000/id-1893268/" title="Apartamento na Rua Alfredo Trompowski, 244, Centro, Itajaí por R$401.000,00" class="description link-open-modal" target="_blank" id-imovel="1893268">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1893268">
									R$<b> 401.000,00</b>									</span>
									<span class="condominio condominio1893268">Condomínio: R$ <b>250,00</b></span>								</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1893268">55 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1893268">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1893268">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1893268">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 55 m2</span><small> - </small>
								<span class="endereco end1893268"><span class="item-title">Rua Alfredo Trompowski, 244<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1893268" attr-id="1893268" attr-name="Centro, Apartamento com 1 quarto à venda, 55 m2" attr-type="Apartamento" attr-price="401000" attr-endereco="Rua Alfredo Trompowski, 244 Centro, Itajaí">
							<span class="desc1893268"><p>Descrição: apto com 01 dormitório, ampla sala, 01 vaga de garagem, edifício com área de lazer,
01 dormitório, ampla sala, cozinha, área de serviço, sacada com churrasqueira, banheiro social, acabamento em gesso, piso em porcelanato, tub. para split, medidores individuais, aquecimento a gás, 01 vaga de garagem privativa, hall de entrada decorado, elevador, piscina, playground, salão de festas, academia, portão eletrônico.

incorporação nº r-2-34952- itajaí sc

30% de entrada, 04 reforços anuais, saldo em 60x direto com a construtora, após&nbsp;entrega das chaves + 10%.</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1893268">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png" alt="ALCEU MARCOM CORRETOR DE IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1893268"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1893268" attr-lnk="https://api.whatsapp.com/send?phone=5547999157574&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-104m2-RS401000/id-1893268/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1893268" attr-id_cliente="" attr-id_imovel="1893268" href="tel:047999157574"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1893268" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-104m2-RS401000/id-1893268/" id-imovel="1893268" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1893268"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1893268   " id="favorite-bt" attr-id="1893268" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1893268" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 401000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "ALCEU MARCOM CORRETOR DE IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/alceu-marcom-corretor-de-imoveis-16429",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png",						"image": "https://www.chavesnamao.com.br/imoveis/16429/1893268/apartamento-a-venda-no-centro-em-itajai-sc-5d9d915c-1.jpg",						"address": "Rua 904, 180, Centro, Balneário Camboriú - SC",
						
						"priceRange": "401000",
						"telephone": "(47) 3056-3026"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "55",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "00000-000",
						"streetAddress": "Rua Alfredo Trompowski, 244 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9071092",
						"longitude": "-48.67157099999997"
						},
												
						"name": "Apartamento na Rua Alfredo Trompowski, 244, Centro, Itajaí por R$401.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-104m2-RS401000/id-1893268/",

						"description": "Descrição: apto com 01 dormitório, ampla sala, 01 vaga de garagem, edifício com área de lazer,01 dormitório, ampla sala, cozinha, área de serviço, sacada com churrasqueira, banheiro social, acabamento em gesso, piso em porcelanato, tub. para split, medidores individuais, aquecimento a gás, 01 vaga de garagem privativa, hall de entrada decorado, elevador, piscina, playground, salão de festas, academia, portão eletrônico.incorporação nº r-2-34952- itajaí sc30% de entrada, 04 reforços anuais, saldo em 60x direto com a construtora, após entrega das chaves + 10%."
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item2413838 elementoCarrega old">

			<div class="baseGaleria" data-id="2413838">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 9 </small></span>

					<div class="galeria-n" data-id="2413838"><div class="overlay-g" data-id="2413838"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img2413838" data-id="2413838" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/49460/2413838/apartamento-a-venda-no-centro-em-itajai-sc-5e3a5486-1-010-a17f8ff2.jpg" alt="Centro, Apartamento com 1 quarto à venda, 40,75 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card2413838">
							<a id="tituloUrl-2413838" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-83m2-RS350000/id-2413838/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-83m2-RS350000/id-2413838/" title="Apartamento no Centro, Itajaí por R$350.000,00" class="description link-open-modal" target="_blank" id-imovel="2413838">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor2413838">
									R$<b> 350.000,00</b>									</span>
									<span class="condominio condominio2413838">Condomínio: R$ <b>350,00</b></span>								</li>
																									<li class="area"><span class="type">Área</span> <span class="val area2413838">40 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos2413838">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites2413838">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros2413838">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem2413838">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 40,75 m2</span><small> - </small>
								<span class="endereco end2413838"><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-2413838" attr-id="2413838" attr-name="Centro, Apartamento com 1 quarto à venda, 40,75 m2" attr-type="Apartamento" attr-price="350000" attr-endereco="">
							<span class="desc2413838"><p>Loft lindamente mobiliado - pronto para morar no centro de itajaí

impecável, ótimo tamanho e planta.

localização privilegiada, bem no coração da cidade de itajaí-sc, perto de tudo!

anualmente com inquilino, rendendo aluguel de r$ 1.500,00 + despesas</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner2413838">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/494601574776851.png" alt="FALK IMOVEIS">
								
						</span> 

												<a class="call-now" id="idLigueAgora2413838" attr-id_cliente="" attr-id_imovel="2413838" href="tel:047991470404"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-2413838" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-83m2-RS350000/id-2413838/" id-imovel="2413838" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="2413838"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-2413838   " id="favorite-bt" attr-id="2413838" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados2413838" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 350000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "FALK IMOVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/falk-imoveis-49460",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/494601574776851.png",						"image": "https://www.chavesnamao.com.br/imoveis/49460/2413838/apartamento-a-venda-no-centro-em-itajai-sc-5e3a5486-1.jpg",						"address": "Rua Onze de Junho, 189, Fazenda, Itajaí - SC",
						
						"priceRange": "350000",
						"telephone": "(47) 3311-4881"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "40.75",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-360",
						"streetAddress": ",Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.90834",
						"longitude": "-48.66261"
						},
												
						"name": "Apartamento no Centro, Itajaí por R$350.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-83m2-RS350000/id-2413838/",

						"description": "Loft lindamente mobiliado - pronto para morar no centro de itajaíimpecável, ótimo tamanho e planta.localização privilegiada, bem no coração da cidade de itajaí-sc, perto de tudo!anualmente com inquilino, rendendo aluguel de r$ 1.500,00 + despesas"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item2132685 old">

			<div class="baseGaleria" data-id="2132685">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 11 </small></span>

					<div class="galeria-n" data-id="2132685"><div class="overlay-g" data-id="2132685"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img2132685" data-id="2132685" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/49460/2132685/apartamento-a-venda-no-centro-em-itajai-sc-5def3159-1-010-e2b3b645.jpg" alt="Centro, Apartamento com 1 quarto à venda, 49 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card2132685">
							<a id="tituloUrl-2132685" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-99m2-RS269341/id-2132685/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-99m2-RS269341/id-2132685/" title="Apartamento no Centro, Itajaí por R$269.341,09" class="description link-open-modal" target="_blank" id-imovel="2132685">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor2132685">
									R$<b> 269.341,09</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area2132685">49 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos2132685">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites2132685">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros2132685">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem2132685">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 49 m2</span><small> - </small>
								<span class="endereco end2132685"><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-2132685" attr-id="2132685" attr-name="Centro, Apartamento com 1 quarto à venda, 49 m2" attr-type="Apartamento" attr-price="269341.09" attr-endereco="">
							<span class="desc2132685"><p>Oportunidade - o melhor preço do centro de itajaí - 1 suíte + sacada co churrasqueira e 1 vaga de garagem!

condições especiais de lançamento:
- 15% de entrada
- parcelamento direto com a construtora em até 46x durante a obra
- saldo a financiar com banco
- use seu fgts

área de lazer:
salão de festa, espaço gourmet, academia, 02 playgrounds e amplo terraço. uma das características deste tipo de lazer, é seu baixo custo de manutenção, ou seja menor valor de incidência no condomínio.

segurança e tranquilidade do seu investimento
construtora de itajaí, com varias obras entregues, todas dentro do prazo legal, credibilidade, qualidade e segurança atestada por seus clientes. empreendimento devidamente incorporado e registrado.</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner2132685">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/494601574776851.png" alt="FALK IMOVEIS">
								
						</span> 

												<a class="call-now" id="idLigueAgora2132685" attr-id_cliente="" attr-id_imovel="2132685" href="tel:047991470404"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-2132685" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-99m2-RS269341/id-2132685/" id-imovel="2132685" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="2132685"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-2132685   " id="favorite-bt" attr-id="2132685" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados2132685" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 269341.09",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "FALK IMOVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/falk-imoveis-49460",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/494601574776851.png",						"image": "https://www.chavesnamao.com.br/imoveis/49460/2132685/apartamento-a-venda-no-centro-em-itajai-sc-5def3159-1.jpg",						"address": "Rua Onze de Junho, 189, Fazenda, Itajaí - SC",
						
						"priceRange": "269341.09",
						"telephone": "(47) 3311-4881"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "49",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88303-050",
						"streetAddress": ",Centro"
						},
						
												
						"name": "Apartamento no Centro, Itajaí por R$269.341,09",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-99m2-RS269341/id-2132685/",

						"description": "Oportunidade - o melhor preço do centro de itajaí - 1 suíte + sacada co churrasqueira e 1 vaga de garagem!condições especiais de lançamento:- 15% de entrada- parcelamento direto com a construtora em até 46x durante a obra- saldo a financiar com banco- use seu fgtsárea de lazer:salão de festa, espaço gourmet, academia, 02 playgrounds e amplo terraço. uma das características deste tipo de lazer, é seu baixo custo de manutenção, ou seja menor valor de incidência no condomínio.segurança e tranquilidade do seu investimentoconstrutora de itajaí, com varias obras entregues, todas dentro do prazo legal, credibilidade, qualidade e segurança atestada por seus clientes. empreendimento devidamente incorporado e registrado."
						
					}
				}</script>
			</li>
			

			
				
							<div class="publicidade">
								<span>Publicidade</span>
								<div class="publicidade-banner">
							<!-- /70722433/002 -->
									<div id="div-gpt-ad-1516734341626-07" class="banner" campo="/70722433/002" altura="90" largura="728" data-google-query-id="CKKe37b6mOgCFVQB1AodiU4OSg">
										
									<div id="google_ads_iframe_/70722433/002_5__container__" style="border: 0pt none; margin: auto; text-align: center; width: 728px; height: 90px;"><iframe frameborder="0" src="https://tpc.googlesyndication.com/safeframe/1-0-37/html/container.html" id="google_ads_iframe_/70722433/002_5" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="728" height="90" data-is-safeframe="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="q" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
								</div>
							</div> 
		
			<li class="item list-group-item item1147757 old">

			<div class="baseGaleria" data-id="1147757">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 8 </small></span>

					<div class="galeria-n" data-id="1147757"><div class="overlay-g" data-id="1147757"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1147757" data-id="1147757" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/18346/1147757/apartamento-a-venda-no-centro-em-itajai-sc-5c7f6670-1-010-62e34d78.jpg" alt="Centro, Apartamento com 1 quarto à venda, 30 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1147757">
							<a id="tituloUrl-1147757" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS179000/id-1147757/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS179000/id-1147757/" title="Apartamento no Centro, Itajaí por R$179.000,00" class="description link-open-modal" target="_blank" id-imovel="1147757">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1147757">
									R$<b> 179.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1147757">30 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1147757">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1147757">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1147757">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 30 m2</span><small> - </small>
								<span class="endereco end1147757"><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1147757" attr-id="1147757" attr-name="Centro, Apartamento com 1 quarto à venda, 30 m2" attr-type="Apartamento" attr-price="179000" attr-endereco="">
							<span class="desc1147757"><p>Lindo loft com garagem privativa próximo a rua brusque quase em frente a faculdade univale de itajaí pra quem buscar investir o imóvel se encontra locado, semi mobiliado com móveis fixo prédio recém restaurado a 8 meses. estuda propostas. itajaí localiza-se no litoral norte do estado de santa catarina, junto à foz do rio itajaí-açu. a cidade encontra-se em uma região estratégica do território catarinense, localizando-se na margem direita do maior rio do estado, integrando um eixo de ligação com as principais rodovias e aeroportos do brasil. o município tem o segundo maior pib do estado, decorrente dos setores econômicos mais importantes como a logística, construção civil, atividades industriais e portuárias, destacando-se o seu complexo portuário como o maior porto pesqueiro do país e o segundo maior em movimentação de contêineres. o município está em constante crescimento, principalmente com novos mercados em expansão como a indústria naval e o armazenamento e distribuição de combustíveis. com uma população de mais de 180 mil habitantes, a cidade apresenta um considerável patrimônio histórico-cultural. durante o ano a cidade mantém a tradição de festas típicas, que oferecem gastronomia, cultura e entretenimento aos...
link do imóvel no site da imobiliária: http://www.imobiliariareggiori.com.br/imovel/1243264-loft+em+itajai+proximo+a+univale?origem=i</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1147757">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18346.jpg" alt="REGGIORI IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1147757"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1147757" attr-lnk="https://api.whatsapp.com/send?phone=5547999428859&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS179000/id-1147757/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1147757" attr-id_cliente="" attr-id_imovel="1147757" href="tel:047999428859"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1147757" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS179000/id-1147757/" id-imovel="1147757" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1147757"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1147757   " id="favorite-bt" attr-id="1147757" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1147757" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 179000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "REGGIORI IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/reggiori-imoveis-18346",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18346.jpg",						"image": "https://www.chavesnamao.com.br/imoveis/18346/1147757/apartamento-a-venda-no-centro-em-itajai-sc-5c7f6670-1.jpg",						"address": "Avenida Brasil, 2525, Centro, Balneário Camboriú - SC",
						
						"priceRange": "179000",
						"telephone": "(47) 3268-5040"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "30",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "",
						"streetAddress": ",Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9068419",
						"longitude": "-48.6615982"
						},
												
						"name": "Apartamento no Centro, Itajaí por R$179.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS179000/id-1147757/",

						"description": "Lindo loft com garagem privativa próximo a rua brusque quase em frente a faculdade univale de itajaí pra quem buscar investir o imóvel se encontra locado, semi mobiliado com móveis fixo prédio recém restaurado a 8 meses. estuda propostas. itajaí localiza-se no litoral norte do estado de santa catarina, junto à foz do rio itajaí-açu. a cidade encontra-se em uma região estratégica do território catarinense, localizando-se na margem direita do maior rio do estado, integrando um eixo de ligação com as principais rodovias e aeroportos do brasil. o município tem o segundo maior pib do estado, decorrente dos setores econômicos mais importantes como a logística, construção civil, atividades industriais e portuárias, destacando-se o seu complexo portuário como o maior porto pesqueiro do país e o segundo maior em movimentação de contêineres. o município está em constante crescimento, principalmente com novos mercados em expansão como a indústria naval e o armazenamento e distribuição de combustíveis. com uma população de mais de 180 mil habitantes, a cidade apresenta um considerável patrimônio histórico-cultural. durante o ano a cidade mantém a tradição de festas típicas, que oferecem gastronomia, cultura e entretenimento aos...link do imóvel no site da imobiliária: http:www.imobiliariareggiori.com.brimovel1243264-loft+em+itajai+proximo+a+univale?origem=i"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1893124 old">

			<div class="baseGaleria" data-id="1893124">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 24 </small></span>

					<div class="galeria-n" data-id="1893124"><div class="overlay-g" data-id="1893124"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1893124" data-id="1893124" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/16429/1893124/apartamento-a-venda-no-centro-em-itajai-sc-5d9dce2b-1-010-6da89f29.jpg" alt="Centro, Apartamento com 1 quarto à venda, 39 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1893124">
							<a id="tituloUrl-1893124" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-43m2-RS550000/id-1893124/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-43m2-RS550000/id-1893124/" title="Apartamento na Rua José Brandão, 577, Centro, Itajaí por R$550.000,00" class="description link-open-modal" target="_blank" id-imovel="1893124">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1893124">
									R$<b> 550.000,00</b>									</span>
									<span class="condominio condominio1893124">Condomínio: R$ <b>10,00</b></span>								</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1893124">39 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1893124">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1893124">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1893124">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 39 m2</span><small> - </small>
								<span class="endereco end1893124"><span class="item-title">Rua José Brandão, 577<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1893124" attr-id="1893124" attr-name="Centro, Apartamento com 1 quarto à venda, 39 m2" attr-type="Apartamento" attr-price="550000" attr-endereco="Rua José Brandão, 577 Centro, Itajaí">
							<span class="desc1893124"><p>Descrição: apartamento com 01 dormitório, sala, cozinha, área de serviço, banheiro social, piso porcelanato, acabamento em gesso, tub. para split, medidores individuais de água, luz e gás, 01 vaga de garagem privativa, 39,20m² de área privativa.
edifício torre única, 11 pavimentos, 03 pavimentos de garagem, 32 aptos sendo 05 por andar, hall de entrada decorado, 02 elevadores (social e de serviço, com capacidade para 06 pessoas cada), portão eletrônico, portaria 24hrs, interfone, área de lazer com piscina adulto, academia. incorporação 30.815</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1893124">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png" alt="ALCEU MARCOM CORRETOR DE IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1893124"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1893124" attr-lnk="https://api.whatsapp.com/send?phone=5547999157574&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-43m2-RS550000/id-1893124/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1893124" attr-id_cliente="" attr-id_imovel="1893124" href="tel:047999157574"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1893124" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-43m2-RS550000/id-1893124/" id-imovel="1893124" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1893124"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1893124   " id="favorite-bt" attr-id="1893124" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1893124" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 550000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "ALCEU MARCOM CORRETOR DE IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/alceu-marcom-corretor-de-imoveis-16429",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png",						"image": "https://www.chavesnamao.com.br/imoveis/16429/1893124/apartamento-a-venda-no-centro-em-itajai-sc-5d9dce2b-1.jpg",						"address": "Rua 904, 180, Centro, Balneário Camboriú - SC",
						
						"priceRange": "550000",
						"telephone": "(47) 3056-3026"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "39",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "",
						"streetAddress": "Rua José Brandão, 577 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.91161",
						"longitude": "-48.65727"
						},
												
						"name": "Apartamento na Rua José Brandão, 577, Centro, Itajaí por R$550.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-43m2-RS550000/id-1893124/",

						"description": "Descrição: apartamento com 01 dormitório, sala, cozinha, área de serviço, banheiro social, piso porcelanato, acabamento em gesso, tub. para split, medidores individuais de água, luz e gás, 01 vaga de garagem privativa, 39,20m² de área privativa.edifício torre única, 11 pavimentos, 03 pavimentos de garagem, 32 aptos sendo 05 por andar, hall de entrada decorado, 02 elevadores (social e de serviço, com capacidade para 06 pessoas cada), portão eletrônico, portaria 24hrs, interfone, área de lazer com piscina adulto, academia. incorporação 30.815"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1679554 old">

			<div class="baseGaleria" data-id="1679554">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 1 </small></span>

					<div class="galeria-n" data-id="1679554"><div class="overlay-g" data-id="1679554"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1679554" data-id="1679554" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/42503/1679554/apartamento-a-venda-no-centro-em-itajai-sc-5d50fe09-1-010-11010bed.jpg" alt="Centro, Apartamento com 1 quarto à venda, 40 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1679554">
							<a id="tituloUrl-1679554" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-59m2-RS350000/id-1679554/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-59m2-RS350000/id-1679554/" title="Apartamento na Rua Tijucas, 335, Centro, Itajaí por R$350.000,00" class="description link-open-modal" target="_blank" id-imovel="1679554">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1679554">
									R$<b> 350.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1679554">40 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1679554">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1679554">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1679554">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 40 m2</span><small> - </small>
								<span class="endereco end1679554"><span class="item-title">Rua Tijucas, 335<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1679554" attr-id="1679554" attr-name="Centro, Apartamento com 1 quarto à venda, 40 m2" attr-type="Apartamento" attr-price="350000" attr-endereco="Rua Tijucas, 335 Centro, Itajaí">
							<span class="desc1679554"><p>O empreendimento
jardim das águas - torre i niágora- centro - itajaí

gerador de energia próprio;
bicicletário;
captação de água pluvial;
03 elevadores por torre;
depósitos individuais nas garagens;
medidor de água, luz e gás;
lavanderia equipada;
lavação para carros.

segurança

portaria;
porteiro eletrônico;
halls independentes;
recepção aos visitantes sem acesso.

acabamento

piso em porcelanato;
gesso rebaixado na cozinhas e banheiro;
sanca de gesso nas salas e quarto;
ponto para ar-condicionado do tipo split;
ponto de tv a cabo e internet.</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1679554">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/425031565284185.jpg" alt="MANICA MARIN IMOVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1679554"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1679554" attr-lnk="https://api.whatsapp.com/send?phone=5547984355444&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-59m2-RS350000/id-1679554/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1679554" attr-id_cliente="" attr-id_imovel="1679554" href="tel:047984355444"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1679554" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-59m2-RS350000/id-1679554/" id-imovel="1679554" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1679554"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1679554   " id="favorite-bt" attr-id="1679554" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1679554" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 350000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "MANICA MARIN IMOVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/manica-marin-imoveis-42503",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/425031565284185.jpg",						"image": "https://www.chavesnamao.com.br/imoveis/42503/1679554/apartamento-a-venda-no-centro-em-itajai-sc-5d50fe09-1.jpg",						"address": "Avenida Prefeito José Juvenal Mafra, 6969, Gravata, Navegantes - SC",
						
						"priceRange": "350000",
						"telephone": "(47) 3349-0211"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "40",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-000",
						"streetAddress": "Rua Tijucas, 335 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.906634",
						"longitude": "-48.662706"
						},
												
						"name": "Apartamento na Rua Tijucas, 335, Centro, Itajaí por R$350.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-59m2-RS350000/id-1679554/",

						"description": "O empreendimentojardim das águas - torre i niágora- centro - itajaígerador de energia próprio;bicicletário;captação de água pluvial;03 elevadores por torre;depósitos individuais nas garagens;medidor de água, luz e gás;lavanderia equipada;lavação para carros.segurançaportaria;porteiro eletrônico;halls independentes;recepção aos visitantes sem acesso.acabamentopiso em porcelanato;gesso rebaixado na cozinhas e banheiro;sanca de gesso nas salas e quarto;ponto para ar-condicionado do tipo split;ponto de tv a cabo e internet."
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item2482560 old">

			<div class="baseGaleria" data-id="2482560">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 3 </small></span>

					<div class="galeria-n" data-id="2482560"><div class="overlay-g" data-id="2482560"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img2482560" data-id="2482560" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/32173/2482560/apartamento-a-venda-no-centro-em-itajai-sc-5e59e350-1-010-6749d190.jpg" alt="Centro, Apartamento com 1 quarto à venda, 98,39 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card2482560">
							<a id="tituloUrl-2482560" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS282000/id-2482560/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS282000/id-2482560/" title="Apartamento na Rua Umbelino Damásio De Brito, Centro, Itajaí por R$282.000,00" class="description link-open-modal" target="_blank" id-imovel="2482560">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor2482560">
									R$<b> 282.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area2482560">98 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos2482560">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites2482560">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros2482560">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem2482560">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 98,39 m2</span><small> - </small>
								<span class="endereco end2482560"><span class="item-title">Rua Umbelino Damásio De Brito<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-2482560" attr-id="2482560" attr-name="Centro, Apartamento com 1 quarto à venda, 98,39 m2" attr-type="Apartamento" attr-price="282000" attr-endereco="Rua Umbelino Damásio De Brito Centro, Itajaí">
							<span class="desc2482560"><p>Previsão de entrega da obra: julho 2023</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner2482560">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/321731548249103.png" alt="JF IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats2482560"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="2482560" attr-lnk="https://api.whatsapp.com/send?phone=5547999765132&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS282000/id-2482560/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora2482560" attr-id_cliente="" attr-id_imovel="2482560" href="tel:04733606601"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-2482560" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS282000/id-2482560/" id-imovel="2482560" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="2482560"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-2482560   " id="favorite-bt" attr-id="2482560" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados2482560" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 282000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "JF IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/jf-imoveis-32173",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/321731548249103.png",						"image": "https://www.chavesnamao.com.br/imoveis/32173/2482560/apartamento-a-venda-no-centro-em-itajai-sc-5e59e350-1.jpg",						"address": "Avenida Brasil, 2707, Centro, Balneário Camboriú - SC",
						
						"priceRange": "282000",
						"telephone": "(47) 99976-5132"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "98.389999389648",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88303-050",
						"streetAddress": "Rua Umbelino Damásio De Brito Centro, Itajaí,Centro"
						},
						
												
						"name": "Apartamento na Rua Umbelino Damásio De Brito, Centro, Itajaí por R$282.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-98m2-RS282000/id-2482560/",

						"description": "Previsão de entrega da obra: julho 2023"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1147755 old">

			<div class="baseGaleria" data-id="1147755">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 19 </small></span>

					<div class="galeria-n" data-id="1147755"><div class="overlay-g" data-id="1147755"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1147755" data-id="1147755" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/18346/1147755/apartamento-a-venda-no-centro-em-itajai-sc-5c7f665d-1-010-25c2082a.jpg" alt="Centro, Apartamento com 1 quarto à venda, 30 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1147755">
							<a id="tituloUrl-1147755" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS199000/id-1147755/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS199000/id-1147755/" title="Apartamento no Centro, Itajaí por R$199.000,00" class="description link-open-modal" target="_blank" id-imovel="1147755">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1147755">
									R$<b> 199.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1147755">30 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1147755">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1147755">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1147755">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 30 m2</span><small> - </small>
								<span class="endereco end1147755"><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1147755" attr-id="1147755" attr-name="Centro, Apartamento com 1 quarto à venda, 30 m2" attr-type="Apartamento" attr-price="199000" attr-endereco="">
							<span class="desc1147755"><p>Lindo loft com garagem privativa próximo a rua brusque quase em frente a faculdade univale de itajaí pra quem buscar investir o imóvel se encontra locado, semi mobiliado com móveis fixo prédio recém restaurado a 8 meses. estuda propostas. itajaí localiza-se no litoral norte do estado de santa catarina, junto à foz do rio itajaí-açu. a cidade encontra-se em uma região estratégica do território catarinense, localizando-se na margem direita do maior rio do estado, integrando um eixo de ligação com as principais rodovias e aeroportos do brasil. o município tem o segundo maior pib do estado, decorrente dos setores econômicos mais importantes como a logística, construção civil, atividades industriais e portuárias, destacando-se o seu complexo portuário como o maior porto pesqueiro do país e o segundo maior em movimentação de contêineres. o município está em constante crescimento, principalmente com novos mercados em expansão como a indústria naval e o armazenamento e distribuição de combustíveis. com uma população de mais de 180 mil habitantes, a cidade apresenta um considerável patrimônio histórico-cultural. durante o ano a cidade mantém a tradição de festas típicas, que oferecem gastronomia, cultura e entretenimento aos...
link do imóvel no site da imobiliária: http://www.imobiliariareggiori.com.br/imovel/1243263-loft+em+itajai+proximo+a+univale?origem=i</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1147755">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18346.jpg" alt="REGGIORI IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1147755"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1147755" attr-lnk="https://api.whatsapp.com/send?phone=5547999428859&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS199000/id-1147755/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1147755" attr-id_cliente="" attr-id_imovel="1147755" href="tel:047999428859"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1147755" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS199000/id-1147755/" id-imovel="1147755" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1147755"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1147755   " id="favorite-bt" attr-id="1147755" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1147755" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 199000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "REGGIORI IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/reggiori-imoveis-18346",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/18346.jpg",						"image": "https://www.chavesnamao.com.br/imoveis/18346/1147755/apartamento-a-venda-no-centro-em-itajai-sc-5c7f665d-1.jpg",						"address": "Avenida Brasil, 2525, Centro, Balneário Camboriú - SC",
						
						"priceRange": "199000",
						"telephone": "(47) 3268-5040"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "30",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "",
						"streetAddress": ",Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.90834",
						"longitude": "-48.66261"
						},
												
						"name": "Apartamento no Centro, Itajaí por R$199.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-45m2-RS199000/id-1147755/",

						"description": "Lindo loft com garagem privativa próximo a rua brusque quase em frente a faculdade univale de itajaí pra quem buscar investir o imóvel se encontra locado, semi mobiliado com móveis fixo prédio recém restaurado a 8 meses. estuda propostas. itajaí localiza-se no litoral norte do estado de santa catarina, junto à foz do rio itajaí-açu. a cidade encontra-se em uma região estratégica do território catarinense, localizando-se na margem direita do maior rio do estado, integrando um eixo de ligação com as principais rodovias e aeroportos do brasil. o município tem o segundo maior pib do estado, decorrente dos setores econômicos mais importantes como a logística, construção civil, atividades industriais e portuárias, destacando-se o seu complexo portuário como o maior porto pesqueiro do país e o segundo maior em movimentação de contêineres. o município está em constante crescimento, principalmente com novos mercados em expansão como a indústria naval e o armazenamento e distribuição de combustíveis. com uma população de mais de 180 mil habitantes, a cidade apresenta um considerável patrimônio histórico-cultural. durante o ano a cidade mantém a tradição de festas típicas, que oferecem gastronomia, cultura e entretenimento aos...link do imóvel no site da imobiliária: http:www.imobiliariareggiori.com.brimovel1243263-loft+em+itajai+proximo+a+univale?origem=i"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1157803 old">

			<div class="baseGaleria" data-id="1157803">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 4 </small></span>

					<div class="galeria-n" data-id="1157803"><div class="overlay-g" data-id="1157803"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1157803" data-id="1157803" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/20993/1157803/apartamento-a-venda-no-centro-em-itajai-sc-5c9480ec-1-010-f4e43897.jpg" alt="Centro, Apartamento com 1 quarto à venda, 69 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1157803">
							<a id="tituloUrl-1157803" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-41m2-RS235000/id-1157803/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-41m2-RS235000/id-1157803/" title="Apartamento na Rua Herculano Corrêa, Centro, Itajaí por R$235.000,00" class="description link-open-modal" target="_blank" id-imovel="1157803">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1157803">
									R$<b> 235.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1157803">69 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1157803">1</span></li>
																																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1157803">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 69 m2</span><small> - </small>
								<span class="endereco end1157803"><span class="item-title">Rua Herculano Corrêa<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1157803" attr-id="1157803" attr-name="Centro, Apartamento com 1 quarto à venda, 69 m2" attr-type="Apartamento" attr-price="235000" attr-endereco="Rua Herculano Corrêa Centro, Itajaí">
							<span class="desc1157803"><p>Eduardo schalfer e zim apresenta:

apartamento no residencial valle piemonte, localizado no centro de itajaí.
composto por:
01 dormitório
ampla sala para 02 ambientes
cozinha
área de serviço 
banheiro social
sacada com churrasqueira á carvão
piso porcelanato
imóvel de frente 
tub. para split
medidores individuais de água, luz e gás
área privativa: 41m² 
área total: 69m²

*este apartamento já esta disponível a venda e visita agendada
*o apartamento encontra-se alugado, com renda de r$1200,00. caso o novo proprietário desejar continuar com a locação, caso decida sem inquilino, não terá problema

edifício torre única: 
03 apartamentos por andar
hall de entrada decorado
rampa para cadeirante
01 elevador 
portão eletrônico
bicicletário
interfone
posição solar face leste
gás central
área de lazer com sala de jogos

*sem móveis

informações e visitas:
eduardo schalfer creci 20351 f

matriz 
rua saul dalago 481, sala 01, lídia duarte , camboriú -sc
fone: 4 7 3 3 6 5 -2 5 1 1 / 4 

filial
rua juvenal garcia n 64, sala 101 e 102, centro, itajaí - sc
fone:  / </p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1157803">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/209931573076342.jpeg" alt="EDUARDO SCHALFER CORRETOR DE IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1157803"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1157803" attr-lnk="https://api.whatsapp.com/send?phone=5547992287951&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-41m2-RS235000/id-1157803/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1157803" attr-id_cliente="" attr-id_imovel="1157803" href="tel:04733652511"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1157803" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-41m2-RS235000/id-1157803/" id-imovel="1157803" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1157803"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1157803   " id="favorite-bt" attr-id="1157803" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1157803" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 235000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "EDUARDO SCHALFER CORRETOR DE IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/eduardo-schalfer-corretor-de-imoveis-20993",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/209931573076342.jpeg",						"image": "https://www.chavesnamao.com.br/imoveis/20993/1157803/apartamento-a-venda-no-centro-em-itajai-sc-5c9480ec-1.jpg",						"address": "RUA SAUL DALAGO, 481, Lidia Duarte, Camboriú - SC",
						
						"priceRange": "235000",
						"telephone": "(47) 99228-7951"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "69",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-580",
						"streetAddress": "Rua Herculano Corrêa Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.9114348",
						"longitude": "-48.66138910000001"
						},
												
						"name": "Apartamento na Rua Herculano Corrêa, Centro, Itajaí por R$235.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-41m2-RS235000/id-1157803/",

						"description": "Eduardo schalfer e zim apresenta:apartamento no residencial valle piemonte, localizado no centro de itajaí.composto por:01 dormitórioampla sala para 02 ambientescozinhaárea de serviço banheiro socialsacada com churrasqueira á carvãopiso porcelanatoimóvel de frente tub. para splitmedidores individuais de água, luz e gásárea privativa: 41m² área total: 69m²*este apartamento já esta disponível a venda e visita agendada*o apartamento encontra-se alugado, com renda de r$1200,00. caso o novo proprietário desejar continuar com a locação, caso decida sem inquilino, não terá problemaedifício torre única: 03 apartamentos por andarhall de entrada decoradorampa para cadeirante01 elevador portão eletrônicobicicletáriointerfoneposição solar face lestegás centralárea de lazer com sala de jogos*sem móveisinformações e visitas:eduardo schalfer creci 20351 fmatriz rua saul dalago 481, sala 01, lídia duarte , camboriú -scfone: 4 7 3 3 6 5 -2 5 1 1  4 ver telefonefilialrua juvenal garcia n 64, sala 101 e 102, centro, itajaí - scfone: ver telefone  ver telefone"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1488513 old">

			<div class="baseGaleria" data-id="1488513">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 11 </small></span>

					<div class="galeria-n" data-id="1488513"><div class="overlay-g" data-id="1488513"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1488513" data-id="1488513" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/39808/1488513/apartamento-a-venda-no-centro-em-itajai-sc-5d14d284-1-010-f3f810c4.jpg" alt="Centro, Apartamento com 1 quarto à venda, 40,75 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1488513">
							<a id="tituloUrl-1488513" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-52m2-RS265000/id-1488513/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-52m2-RS265000/id-1488513/" title="Apartamento no Centro, Itajaí por R$265.000,00" class="description link-open-modal" target="_blank" id-imovel="1488513">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1488513">
									R$<b> 265.000,00</b>									</span>
									<span class="condominio condominio1488513">Condomínio: R$ <b>250,00</b></span>								</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1488513">40 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1488513">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1488513">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1488513">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 40,75 m2</span><small> - </small>
								<span class="endereco end1488513"><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1488513" attr-id="1488513" attr-name="Centro, Apartamento com 1 quarto à venda, 40,75 m2" attr-type="Apartamento" attr-price="265000" attr-endereco="">
							<span class="desc1488513"><p>Loft com 40 metros de área privativa em localização privilegiada no centro de itajaí. 
no jardim das águas você viverá a vida que sempre sonhou. lazer, diversão e tranquilidade com segurança. foram criados seus espaços exclusivos para que você e sua família sintam-se de férias o ano todo.
quintal mágico 
um lugar onde a fantasia e a imaginação se encontram.
salão de festas infantil sala de jogos infantil playground externo casa de bonecas play dog
fonte de tranquilidade
um espaço aconchegante reservado para o bem estar.
ofurôs sauna seca sauna úmida sala de massagem salão de beleza
canto dos pássaros
aqui a diversão é garantida.
pub sala de jogos adulto salão de festas deck do salão de festas boate
vale das águas
piscina adulto piscina infantil cascatas chafariz espelho dágua bar da piscina
vale da brisa encantada 
quadra poliesportiva cancha de bocha pista de cooper canto da pizza churrasqueira boteco espaço lual academia
ninho dos pássaros
salão de festas éden salão de festas waikiki salão de festas adulto pub</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1488513">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/398081560955645.PNG" alt="DMD NEGOCIOS IMOBILIARIOS">
								
						</span> 

													<span class="details deskt-hidden idWhats1488513"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1488513" attr-lnk="https://api.whatsapp.com/send?phone=5547991018976&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-52m2-RS265000/id-1488513/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1488513" attr-id_cliente="" attr-id_imovel="1488513" href="tel:047991018976"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1488513" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-52m2-RS265000/id-1488513/" id-imovel="1488513" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1488513"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1488513   " id="favorite-bt" attr-id="1488513" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1488513" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 265000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "DMD NEGOCIOS IMOBILIARIOS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/dmd-negocios-imobiliarios-39808",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/398081560955645.PNG",						"image": "https://www.chavesnamao.com.br/imoveis/39808/1488513/apartamento-a-venda-no-centro-em-itajai-sc-5d14d284-1.jpg",						"address": "Rodovia Osvaldo Reis - até 1099 - lado ímpar, 3281, Praia Brava, Itajaí - SC",
						
						"priceRange": "265000",
						"telephone": "(47) 99647-8845"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "40.75",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-360",
						"streetAddress": ",Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.90834",
						"longitude": "-48.66261"
						},
												
						"name": "Apartamento no Centro, Itajaí por R$265.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-52m2-RS265000/id-1488513/",

						"description": "Loft com 40 metros de área privativa em localização privilegiada no centro de itajaí. no jardim das águas você viverá a vida que sempre sonhou. lazer, diversão e tranquilidade com segurança. foram criados seus espaços exclusivos para que você e sua família sintam-se de férias o ano todo.quintal mágico um lugar onde a fantasia e a imaginação se encontram.salão de festas infantil sala de jogos infantil playground externo casa de bonecas play dogfonte de tranquilidadeum espaço aconchegante reservado para o bem estar.ofurôs sauna seca sauna úmida sala de massagem salão de belezacanto dos pássarosaqui a diversão é garantida.pub sala de jogos adulto salão de festas deck do salão de festas boatevale das águaspiscina adulto piscina infantil cascatas chafariz espelho dágua bar da piscinavale da brisa encantada quadra poliesportiva cancha de bocha pista de cooper canto da pizza churrasqueira boteco espaço lual academianinho dos pássarossalão de festas éden salão de festas waikiki salão de festas adulto pub"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item2135568 old">

			<div class="baseGaleria" data-id="2135568">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 15 </small></span>

					<div class="galeria-n" data-id="2135568"><div class="overlay-g" data-id="2135568"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img2135568" data-id="2135568" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/49286/2135568/apartamento-a-venda-no-centro-em-itajai-sc-5e29315b-1-010-fc055325.jpg" alt="Centro, Apartamento com 1 quarto à venda, 48 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card2135568">
							<a id="tituloUrl-2135568" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-48m2-RS310000/id-2135568/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-48m2-RS310000/id-2135568/" title="Apartamento na Rua Vereador João Angelino Lopes Júnior, Centro, Itajaí por R$310.000,00" class="description link-open-modal" target="_blank" id-imovel="2135568">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor2135568">
									R$<b> 310.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area2135568">48 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos2135568">1</span></li>
																									<li class="suite"><span class="type">Suítes</span> <span class="val suites2135568">1</span></li>
																									<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros2135568">2</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem2135568">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 48 m2</span><small> - </small>
								<span class="endereco end2135568"><span class="item-title">Rua Vereador João Angelino Lopes Júnior<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-2135568" attr-id="2135568" attr-name="Centro, Apartamento com 1 quarto à venda, 48 m2" attr-type="Apartamento" attr-price="310000" attr-endereco="Rua Vereador João Angelino Lopes Júnior Centro, Itajaí">
							<span class="desc2135568"><p>Apartamento de 1 dormitório com suíte + lavabo - centro de itajaí. 
próximo ao supermercado comper, aos bancos, farmácias, comércio, colégios, à univali e ao hospital marieta. 
&nbsp; 
características empreendimento de estilo neoclássico 
? hall de entrada mobiliado e decorado 
? piso em porcelanato e laminado na área interna 
? 2 elevadores 
? 1 garagem 
? central de segurança com monitoramento digital 24 horas nos principais acessos do condomínio (cftv) 
? estacionamento com controle de entrada e saída de veículos 
? controle de acesso de pedestres 
? sacada com churrasqueira 
? sala de estar e jantar integradas 
? cozinha, área de serviço&nbsp; 
? piso com isolamento acústico 
? infraestrutura para split em quarto e sala 
? lavabo em todas as unidades 
? 1 suíte + lavabo 
&nbsp; 
 
*está em fase de construção&nbsp; 
entrega para final desse ano..dezembro de 2019 
áreas comuns serão entregues decoradas e mobiliados 
último andar (10° frente)&nbsp; r$ 310.000,00 
&nbsp; 
informações com thayse  
 
código do anúncio: 5029_141</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner2135568">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/492861574798011.png" alt="IMOBILIÁRIA TERRA">
								
						</span> 

													<span class="details deskt-hidden idWhats2135568"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="2135568" attr-lnk="https://api.whatsapp.com/send?phone=5547999667674&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-48m2-RS310000/id-2135568/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora2135568" attr-id_cliente="" attr-id_imovel="2135568" href="tel:047999667674"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-2135568" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-48m2-RS310000/id-2135568/" id-imovel="2135568" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="2135568"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-2135568   " id="favorite-bt" attr-id="2135568" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados2135568" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 310000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "IMOBILIÁRIA TERRA",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/imobiliaria-terra-49286",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/492861574798011.png",						"image": "https://www.chavesnamao.com.br/imoveis/49286/2135568/apartamento-a-venda-no-centro-em-itajai-sc-5e29315b-1.jpg",						"address": "Avenida Carlos Drumond de Andrade, 631, Praia dos Amores, Balneário Camboriú - SC",
						
						"priceRange": "310000",
						"telephone": "(47) 99926-3949"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "48",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "88301-230",
						"streetAddress": "Rua Vereador João Angelino Lopes Júnior Centro, Itajaí,Centro"
						},
						
												
						"name": "Apartamento na Rua Vereador João Angelino Lopes Júnior, Centro, Itajaí por R$310.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-48m2-RS310000/id-2135568/",

						"description": "Apartamento de 1 dormitório com suíte + lavabo - centro de itajaí. próximo ao supermercado comper, aos bancos, farmácias, comércio, colégios, à univali e ao hospital marieta.   características empreendimento de estilo neoclássico ? hall de entrada mobiliado e decorado ? piso em porcelanato e laminado na área interna ? 2 elevadores ? 1 garagem ? central de segurança com monitoramento digital 24 horas nos principais acessos do condomínio (cftv) ? estacionamento com controle de entrada e saída de veículos ? controle de acesso de pedestres ? sacada com churrasqueira ? sala de estar e jantar integradas ? cozinha, área de serviço  ? piso com isolamento acústico ? infraestrutura para split em quarto e sala ? lavabo em todas as unidades ? 1 suíte + lavabo    *está em fase de construção  entrega para final desse ano..dezembro de 2019 áreas comuns serão entregues decoradas e mobiliados último andar (10° frente)  r$ 310.000,00   informações com thayse ver telefone  código do anúncio: 5029_141"
						
					}
				}</script>
			</li>
			

			
			 
		
			<li class="item list-group-item item1893135 old">

			<div class="baseGaleria" data-id="1893135">
				<span class="gal-icon"><i class="icon-galeria-qtd"></i><small> 16 </small></span>

					<div class="galeria-n" data-id="1893135"><div class="overlay-g" data-id="1893135"></div>	<img loading="lazy" importance="low" width="360" height="250" class="load img1893135" data-id="1893135" src="https://www.chavesnamao.com.br/imn/0360x0250/N/imoveis/16429/1893135/apartamento-a-venda-no-centro-em-itajai-sc-5d9d8471-1-010-bbc6654d.jpg" alt="Centro, Apartamento com 1 quarto à venda, 40 m2"></div>						
							
				<div class="labelSobreImagem">
							
												

														
															<span class="visto"><i class="icon-checked"></i>visto</span>
														

						
				</div>
						</div>
					<!-- Informações & Trigger p/ Forms -->
					<div class="box-info card__item card1893135">
							<a id="tituloUrl-1893135" href="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-60m2-RS347000/id-1893135/" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-60m2-RS347000/id-1893135/" title="Apartamento na Rua Tijucas, 4664, Centro, Itajaí por R$347.000,00" class="description link-open-modal" target="_blank" id-imovel="1893135">

							<ul class="list-info">
								<!--VALOR/PREÇO-->
								<li>
									<span class="value valor1893135">
									R$<b> 347.000,00</b>									</span>
																	</li>
																									<li class="area"><span class="type">Área</span> <span class="val area1893135">40 m²</span></li>
																									<li class="bed"><span class="type">Quartos</span><span class="val quartos1893135">1</span></li>
																																	<li class="bath"><span class="type">Banheiros</span> <span class="val banheiros1893135">1</span></li>
																									<li class="garage"><span class="type">Garagem</span><span class="val garagem1893135">1</span></li>
																<!--<li class="btn"><span><i class="icon-plus"></i>detalhes</span></li>-->
							</ul>

							<h2>
								<span class="ttl">Centro, Apartamento com 1 quarto à venda, 40 m2</span><small> - </small>
								<span class="endereco end1893135"><span class="item-title">Rua Tijucas, 4664<small>,</small></span><span class="cidade"> Centro, Itajaí</span> </span>
							</h2>
							
							<input type="hidden" class="gtm-item-1 gtm-dados-1893135" attr-id="1893135" attr-name="Centro, Apartamento com 1 quarto à venda, 40 m2" attr-type="Apartamento" attr-price="347000" attr-endereco="Rua Tijucas, 4664 Centro, Itajaí">
							<span class="desc1893135"><p>Descrição: excelente apartamento com 01 dormitório, sala, cozinha, área de serviço, banheiro social, sacada fechada com churrasqueira a carvão, piso porcelanato e laminado, imóvel de fundos, acabamento em gesso, tub. para split, tub. para água quente, medidores individuais de água, luz e gás, 01 vaga de garagem privativa, 40m² de área privativa e 60m² de área total.
edifício com 02 elevadores (social e de serviço, com capacidade para 06 pessoas cada), portaria 24hrs, sistema de captação da água da chuva.
área de lazer com piscina adulto e infantil, piscina aquecida, academia, sala de jogos, salão de festas, quadra esportiva, deck para banho de sol, sala de descanso, espaço zen, bar molhado, sala de massagem, bar, espaço gourmet, playground, brinquedoteca, cancha de bocha, boate, lan house, quiosque com churrasqueira.
incorporação 2.34995 roi itajaí</p></span>						</a>
									<div class="card__info ">
						<!-- if != phonetrack -->
						 <span class="logo-owner" id="logo-owner1893135">
								
								<img class="lazyload" importance="low" data-src="https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png" alt="ALCEU MARCOM CORRETOR DE IMÓVEIS">
								
						</span> 

													<span class="details deskt-hidden idWhats1893135"><i class="icon-whatsapp btn-whatsapp" attr-tipo="imoveis" attr-id="1893135" attr-lnk="https://api.whatsapp.com/send?phone=5547999157574&amp;text=Olá, tenho interesse neste imóvel que vi no Chaves na Mão: https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-60m2-RS347000/id-1893135/                        Chaves na Mão"></i></span>
												<a class="call-now" id="idLigueAgora1893135" attr-id_cliente="" attr-id_imovel="1893135" href="tel:047999157574"><p> Ligar Agora</p></a>						<a class="details only-deskt link-open-modal lnk-1893135" href="javascript:void(0);" endereco="https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-60m2-RS347000/id-1893135/" id-imovel="1893135" title="+ Informações" target="_blank"><span><i class="icon-plus"></i>detalhes</span></a>
						<span class="modal-msg-bt" id_imovel="1893135"><!-- <i class="icon-speech-bubble"></i> --> Tenho Interesse</span>
						<button class="favorite-bt fv-1893135   " id="favorite-bt" attr-id="1893135" attr-tipo="I" aria-label="Clique para favoritar"></button>						<!-- phone track - retirar -->
						
					</div>
			</div>


				<script id="dados1893135" type="application/ld+json">{
					"@context": "https://schema.org",
					"@type": "BuyAction",

					"priceSpecification": {
						"@type": "PriceSpecification",
						"price": "R$ 347000",
						"priceCurrency": "BRL"
					},

					"seller": {
						"@type": "RealEstateAgent",
						"name": "ALCEU MARCOM CORRETOR DE IMÓVEIS",
						"url": "https://www.chavesnamao.com.br/imoveiscliente/alceu-marcom-corretor-de-imoveis-16429",						"logo": "https://www.chavesnamao.com.br/img/0070x0040/D/public/uploads/clients/164291572884888.png",						"image": "https://www.chavesnamao.com.br/imoveis/16429/1893135/apartamento-a-venda-no-centro-em-itajai-sc-5d9d8471-1.jpg",						"address": "Rua 904, 180, Centro, Balneário Camboriú - SC",
						
						"priceRange": "347000",
						"telephone": "(47) 3056-3026"
					},

					"object": {

						"@type": "SingleFamilyResidence",
						
						"numberOfRooms" : "1",						
												"floorSize": {
							"@type": "QuantitativeValue",
							"unitText": "40",
							"unitCode": "MTK"
						},
						
						"address": {
						"@type": "PostalAddress",

						"addressCountry": {
							"@type": "Country",
							"name": "BR"
						},

						"addressLocality": "Itajaí",
						"addressRegion": "SC",
						"postalCode": "",
						"streetAddress": "Rua Tijucas, 4664 Centro, Itajaí,Centro"
						},
						
												"geo": {
						"@type": "GeoCoordinates",
						"latitude": "-26.90663",
						"longitude": "-48.66271"
						},
												
						"name": "Apartamento na Rua Tijucas, 4664, Centro, Itajaí por R$347.000,00",
						"url": "https://www.chavesnamao.com.br/imovel/apartamento-a-venda-1-quarto-com-garagem-sc-itajai-centro-60m2-RS347000/id-1893135/",

						"description": "Descrição: excelente apartamento com 01 dormitório, sala, cozinha, área de serviço, banheiro social, sacada fechada com churrasqueira a carvão, piso porcelanato e laminado, imóvel de fundos, acabamento em gesso, tub. para split, tub. para água quente, medidores individuais de água, luz e gás, 01 vaga de garagem privativa, 40m² de área privativa e 60m² de área total.edifício com 02 elevadores (social e de serviço, com capacidade para 06 pessoas cada), portaria 24hrs, sistema de captação da água da chuva.área de lazer com piscina adulto e infantil, piscina aquecida, academia, sala de jogos, salão de festas, quadra esportiva, deck para banho de sol, sala de descanso, espaço zen, bar molhado, sala de massagem, bar, espaço gourmet, playground, brinquedoteca, cancha de bocha, boate, lan house, quiosque com churrasqueira.incorporação 2.34995 roi itajaí"
						
					}
				}</script>
			</li>
			

			
										
		<!-- <div id="paginacao_resultados">
		</div> -->
		<div class="nuvem-tags sem-resultado" id="nuvem_noticias_s" style="display: none;">
		</div>
		</ul>	
 <input type="hidden" name="imoveisIds" class="imoveisIds-1" value="2469445-1158632-2087000-1893123-1138046-884599-1443182-1789413-1893268-2413838-2132685-1147757-1893124-1679554-2482560-1147755-1157803-1488513-2135568-1893135">  <input type="hidden" class="dadosExtra" name="categoria" id="categoria" value="apartamentos-a-venda">
		<input type="hidden" class="dadosExtra modulo" name="modulo" id="modulo" value="imoveis">
		<input type="hidden" class="dadosExtra" name="formPlacement" id="formPlacement" value="listing">  <input type="hidden" class="gtm-bloco-1" attr-categoria="venda">
  <div class="infinite-pages">
			<ul class="paginacao-scroll">  <li class="current go-to-pg"><span>Página </span>1</li>   <li class="go-to-pg">2</li>   <li class="go-to-pg">3</li>   <li class="go-to-pg">4</li>   <li class="go-to-pg">5</li>   	</ul>
		</div>	<div class="publicidade">
			<span>Publicidade</span>
			<div class="publicidade-banner">
				<!-- /70722433/003 -->
				<div id="div-gpt-ad-1516734341626-17" class="banner" campo="/70722433/003" altura="90" largura="728" style="height:90px; width:100%;" data-google-query-id="CL2c8Lb6mOgCFeEFuQYdY7AKzQ">
					
				<div id="google_ads_iframe_/70722433/003_5__container__" style="border: 0pt none; margin: auto; text-align: center; width: 728px; height: 90px;"><iframe frameborder="0" src="https://tpc.googlesyndication.com/safeframe/1-0-37/html/container.html" id="google_ads_iframe_/70722433/003_5" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="728" height="90" data-is-safeframe="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="r" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
			</div>
		</div>	<div class="marcacao-paginador marcacao-pagina-2" style="float:left; width:100%; height:1px;"></div></div>
<span class="loading-bloco-p">
<small>
<svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
<circle id="loading-inner" cx="75" cy="75" r="60"></circle>
</svg> Carregando página <b class="cont-load">02</b></small>
</span>
</section>

<div class="container">
<div class="row">
<div class="filtro-responsive">&nbsp;</div>
<a href="javascript:;" title="Filtrar resultados" class="btFiltro fixed" style="display:none;">Filtrar resultados</a>
</div>
</div>

<div class="ExcluirAlert">
<span class="msg">
<span class="bt-fechar-alerta topo"><i class="icon-plus"></i></span>
<i class="icon-central-de-ajuda"></i>
<p>Tem certeza que deseja remover este anúncio dos favoritos?</p>
<span class="excluir-favorito excluir-alerta">Remover</span>
<span class="bt-fechar-alerta">cancelar</span>
</span>
</div>

<span class="modal-n salvar-busca">
<span class="overlay-sb bt-back-sv"></span>
<div class="msg-login-sb not-logged">
<div class="msg">
<i class="icon-bookmark"></i>
<h3>Salve sua busca</h3>
<p>Ta sem tempo e quer continar vendo depois de onde parou? Entre na sua conta e salve sua busca</p>
</div>
<a class="cta2 entrar-salvar-busca" href="javascript:void(0);">ENTRAR NA CONTA</a>
<span class="ghost bt-back-sv"><i class="icon-plus"></i></span>
<a class="link nao-tem-conta" href="javascript:void(0);">Não tem conta?</a>
</div> </span>


<div id="modal_solicitar_foto" class="modalSolicitar" style="display:none;">
<a href="javascript:" title="Fechar" class="btFechar"><span class="sprite sprite-btFechar" alt="Fechar"></span>Fechar</a>
<p>Solicitar foto</p>
<form name="formSolicitar" id="formSolicitar" method="post" action="#">
 <input type="hidden" name="a" value="" id="id_solicitar_foto">
<label for="fieldNomeSolicitar">Nome:</label>
<input type="text" name="nome" id="fieldNomeSolicitar" class="fieldTXT txt_solicitarFoto">
<label for="fieldEmailSolicitar">E-mail:</label>
<input type="text" name="email" id="fieldEmailSolicitar" class="fieldTXT txt_solicitarFoto">
<label for="fieldTelSolicitar">Telefone:</label>
<input type="text" name="telefone" id="fieldTelSolicitar" class="fieldTXT fieldTel telefone txt_solicitarFoto" maxlength="15">
<input type="submit" name="btnSolicitar" id="btnSolicitar" value="Solicitar" class="btEncaminhar">
<a href="javascript:" id="btnCancelarSolicitarFoto" title="Cancelar" class="btCancel">Cancelar</a>
<img src="https://www.chavesnamao.com.br/public/site-novo/images/ajax-loader-verde.gif" alt="Ajax Loader Verde" id="loader_solicitar_foto" style="float: right;display:none;">
</form>
</div>

<div class="modal-form-msg">
<div class="ofm close-form-msg"></div>
<div class="content-form">
<span class="close-form-msg"><i class="icon-plus"></i></span>
<span class="dadosAnuncio"><span class="img-anuncio"></span>
<span class="ttl-anuncio"></span>
</span>
<form id="frm-contato" class="frm-contato">
<span id="frm-contato-retorno"></span>
<input type="hidden" name="im" id="frm_id_imovel">
<input type="hidden" name="origem" value="1">
<input type="hidden" value="" name="utm_source">
<input type="hidden" value="" name="utm_medium">
<input type="hidden" value="" name="utm_campaign">
<fieldset>
<input type="text" name="nome" id="nome_interesse" placeholder="Seu nome" class="nome_form1" value="">
<label for="nome_interesse"><i class="icon-user"></i></label>
<span class="mgserro"> Preencha seu nome </span>
</fieldset>
<fieldset>
<input type="mail" name="email" id="email_interesse" placeholder="ex: email@email.com.br" class="email_form1" value="">
<label for="emai_interessel"><i class="icon-email"></i></label>
<span class="mgserro"> Email inválido </span>
</fieldset>
<fieldset>
<input type="tel" name="telefone" id="telefone_interesse" placeholder="(xx) xxxxx-xxxx" class="telefone telefone_form1" value="" maxlength="15">
<label for="telefone_interesse"><i class="icon-phone"></i></label>
<span class="mgserro"> Telefone inválido </span>
</fieldset>
<fieldset class="btns-field">
<button class="submit-form-msg tc-material"><span class="loader"><svg id="load" x="0px" y="0px" viewBox="0 0 150 150"><circle id="loading-inner" cx="75" cy="75" r="60"></circle></svg></span>Tenho interesse!</button>
<p class="warning">Ao enviar, você concorda com o <a target="_blank" rel="nofollow" href="https://www.chavesnamao.com.br/termos-de-uso/">Termos de Uso</a> e <a target="_blank" rel="nofollow" href="https://www.chavesnamao.com.br/politicas-de-privacidade/">Política de Privacidade</a>.</p>
</fieldset>
</form>
</div>
</div>
</div>


<script>

					const targets = document.querySelectorAll('img.lazyload');

					const lazyLoad = target => {
					const io = new IntersectionObserver((entries, observer) => {
						//console.log(entries)
						entries.forEach(entry => {
						//console.log('😍4');

						if (entry.isIntersecting) {
							const img = entry.target;
							const src = img.getAttribute('data-src');

							img.setAttribute('src', src);
							img.classList.add('fade');
							
							observer.disconnect();
						}
						});
					});

					io.observe(target)
					};

					targets.forEach(lazyLoad);
					

				// if ('loading' in HTMLImageElement.prototype) {
				
				// 	const images = document.querySelectorAll('img.lazyload');
				// 	images.forEach(img => {
				// 		img.style.opacity = '1';
				// 		img.src = img.dataset.src;
				// 	});
				

				// } else {
				// 	// Dynamically import the LazySizes library
				// 	let script = document.createElement('script');
				// 	script.async = true;
				// 	script.src =
				// 	'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js';
				// 	document.body.appendChild(script);

				// }

				var dispositivo = '';
				if (parseInt(w)<=640){
					dispositivo = 'mobile';
					var caminhoCSS1 = '/css/0367.2020.338/public/css/paginas/resultados/mobile/resultado-de-busca-v.min.css';
					var caminhoCSS2 = '/css/0367.2020.338/public/css/paginas/anuncio/mobile/anuncio-imovel-v.min.css';
				}else if (parseInt(w)>=1024){
					dispositivo = 'desktop';
					var caminhoCSS1 = '/css/0367.2020.338/public/css/paginas/resultados/desktop/resultado-de-busca-v.min.css';
					var caminhoCSS2 = '/css/0367.2020.338/public/css/paginas/anuncio/desktop/anuncio-imovel-v.min.css';
				}else{
					dispositivo = 'tablet';
					var caminhoCSS1 = '/css/0367.2020.338/public/css/paginas/resultados/tablet/resultado-de-busca-v.min.css';
					var caminhoCSS2 = '/css/0367.2020.338/public/css/paginas/anuncio/tablet/anuncio-imovel-v.min.css';
				}
				header = document.getElementsByTagName('head')[0];		
				var linkCSS2 = document.createElement('LINK'); 
				linkCSS2.setAttribute('rel','stylesheet');
				linkCSS2.setAttribute('type', 'text/css');
				linkCSS2.setAttribute('href', '/css/0367.2020.338/public/site-novo/css/footer.min.css');
				header.appendChild(linkCSS2);</script><div id="modalRetornoOperacoes" class="modal fade in" role="dialog" tabindex="-1" style="display: none;">
<div class="modal-dialog modal-chaves modal-sm">
<div class="modal-content">
<div class="modal-body padding-lg">
<a href="javascript:;" data-dismiss="modal" aria-label="Fechar" class="btFechar"><span class="sprite sprite-btFechar" alt="Fechar"></span></a>
<div style="clear:both;text-align:center; width: 100%;">
<img id="img-modal-retorno-sucesso" alt="Sucesso!" src="https://www.chavesnamao.com.br/public/site-novo/images/icon-form-success.png" style="width: 48px;display:none;">
<span class="sprite sprite-icon-form-erro" id="img-modal-retorno-erro" alt="Erro!" style="display:none;"></span>
<div id="msg-modal-retorno" style="font-size: 14px;padding: 15px; font-weight:bold;">Mensagem enviada com sucesso!</div>
</div>
</div>
</div>
</div>
</div>
<div id="modalPadrao" class="modal fade in" role="dialog" tabindex="-1" style="display:none;">
<div class="modal-dialog modal-chaves modal-sm" style="width: 540px;">
<div class="modal-content">
<div class="modal-body padding-lg">
<a href="javascript:;" data-dismiss="modal" aria-label="Fechar" class="btFechar"><span class="sprite sprite-btFechar" alt="Fechar"></span></a>
<div id="conteudoModalPadrao" style="clear:both;text-align:center; width: 100%;font-size: 12px;color:#0077a4;font-weight:bold;">
</div>
</div>
</div>
</div>
</div>
<div class="nuvem-tags footer-visual esconde" id="nuvem_tags" style="display: block;">
<div class="container">
<nav class="tags">
<ul>
</ul>
</nav>
</div>
</div>

<div class="alertFav3">
<span class="msg">
<span class="bt-fechar-alerta topo"><i class="icon-plus"></i></span>
<i class="icon-error"></i>
<span class="ttl">Quantidade max. atingida!<span class="qtd">03</span></span>
<p>Favorite mais anúncio e salve para ver quando quiser entrando em sua conta!</p>
<a href="javascript:void(0);" class="logar-bt">Entrar na conta</a>
<a href="javascript:void(0);" class="logar-bt-cadastrar ghost">Cadastrar</a>
</span>
</div>

<span class="login-modal-n"></span>
<footer class="footer-visual esconde">
<div class="container large-content">
<nav class="footer">
<ul>
<li class="ttl">Institucional</li>
<li><a href="https://www.chavesnamao.com.br/quem-somos/" title="Quem somos">Quem somos</a></li>
<li><a rel="nofollow" href="https://www.chavesnamao.com.br/fale-conosco/" title="Fale conosco">Fale conosco</a></li>
<li><a rel="nofollow" href="https://www.chavesnamao.com.br/empresas-parceiras/" title="Empresas parceiras">Empresas parceiras</a></li>
<li><a href="https://www.chavesnamao.com.br/trabalhe-conosco/" title="Trabalhe conosco">Trabalhe conosco</a></li>
<li><a rel="nofollow" href="http://www.planalto.gov.br/ccivil_03/leis/L8078.htm" title="Cod. defesa do consumidor" target="_blank">Cod. defesa do consumidor</a></li>
</ul>
<ul>
<li class="ttl">Imóveis</li>
<li><a href="https://www.chavesnamao.com.br/lancamentos-imoveis/brasil/" title="Imóveis novos">Imóveis novos</a></li>
<li><a href="https://www.chavesnamao.com.br/imoveis-a-venda/brasil/" title="Comprar imóveis">Comprar imóveis</a></li>
<li><a href="https://www.chavesnamao.com.br/imoveis-para-alugar/brasil/" title="Alugar imóveis">Alugar imóveis</a></li>
<li><a href="https://www.chavesnamao.com.br/anunciar-gratis-imoveis-casas-apartamentos/" title="Anunciar imóvel">Anunciar imóvel</a></li>
</ul>
<ul>
<li class="ttl">Veículos</li>
<li><a href="https://www.chavesnamao.com.br/carros/usados/brasil/" title="Comprar carros">Comprar carros</a></li>
<li><a href="https://www.chavesnamao.com.br/motos/usadas/brasil/" title="Comprar motos">Comprar motos</a></li>
<li><a href="https://www.chavesnamao.com.br/anunciar-gratis-carros-e-motos/" title="Anunciar veículos">Anunciar veículos</a></li>
<li><a href="https://www.chavesnamao.com.br/tabela-fipe-usados-novos-seminovos/" title="Tabela Fipe">Tabela FIPE</a></li>
</ul>
<ul>
<li class="ttl">Blog de Imóveis</li>
<li><a href="https://www.chavesnamao.com.br/decoracao/" title="Decoração">Decoração</a></li>
<li><a href="https://www.chavesnamao.com.br/dicas-e-reformas/" title="Dicas e Reformas">Dicas e Reformas</a></li>
<li><a href="https://www.chavesnamao.com.br/guias/" title="Guias">Guias</a></li>
<li><a href="https://www.chavesnamao.com.br/melhores-bairros/" title="Melhores Bairros">Melhores Bairros</a></li>
<li><a href="https://www.chavesnamao.com.br/mercado-imobiliario/" title="Mercado Imobiliário">Mercado Imobiliário</a></li>
</ul>
<ul>
<li class="ttl">Blog de Veículos</li>
<li><a href="https://www.chavesnamao.com.br/guia-compra-carros/" title="Guia de Carros">Guia de Carros</a></li>
<li><a href="https://www.chavesnamao.com.br/guia-compra-motos/" title="Guia de Motos">Guia de Motos</a></li>
<li><a href="https://www.chavesnamao.com.br/avaliacao/" title="Avaliações">Avaliações</a></li>
<li><a href="https://www.chavesnamao.com.br/noticias-automotivas/" title="Notícias">Notícias</a></li>
</ul>
<ul>
<li class="ttl">Precisa de ajuda?</li>
<li><a title="Central de ajuda" class="btn-cta" rel="nofollow" href="https://www.chavesnamao.com.br/central-de-ajuda/"><i class="icon-central-de-ajuda" title="Dúvidas"></i>Central de ajuda</a></li>
</ul>
</nav>
<div class="box-footer">
<ul>
<li><a href="http://www.facebook.com/ChavesNaMao" title="Facebook" rel="nofollow" target="_blank"><i class="icon-facebook-logo-button"></i></a></li>
<li><a href="http://www.youtube.com/ChavesNaMao" title="Youtube" rel="nofollow" target="_blank"><i class="icon-youtube-logotype"></i></a></li>
<li><a href="https://twitter.com/chavesnamao" title="Twitter" rel="nofollow" target="_blank"><i class="icon-twitter-logo-button"></i></a></li>
<li><a href="https://plus.google.com/u/0/+ChavesnamaoBrOficial" rel="nofollow" title="Google Plus" target="_blank"><i class="icon-google-plus-logo-button"></i></a></li>
</ul>
<div>
<p class="ttl"><b>Bem Vindo(a) ao Chaves na Mão.</b></p>
<p> Encontre no Chaves na Mão classificados de imóveis e veículos, tudo de forma prática e rápida você tem acesso a milhares de ofertas de imóveis à venda e para alugar, carros usados, seminovos e novos, motos usadas, apartamentos à venda, apartamentos para alugar, apartamentos na planta, casas à venda e para alugar, coberturas, terrenos à venda, chácaras à venda, kitnets, salas comerciais, galpões, pontos comerciais e muito mais!</p>
<p> Importante: Os anúncios aqui publicados são enviados pelas imobiliárias, corretores, construtoras, incorporadoras, revendas de veículos, lojas de motos, concessionárias e proprietários. Por isso, o Chaves na Mão não se responsabiliza pelos dados apresentados nas ofertas.</p>
</div>
</div>
<a class="logo" title="Chaves na Mão - Imóveis à venda e para alugar, carros usados e motos" href="/"><img src="https://www.chavesnamao.com.br/public/site-novo/images/chaves-na-mao-w.png" width="145" height="39" alt="Chaves na Mão - Imóveis à venda e para alugar, carros usados e motos"></a>
<p class="footer">© 2013 - 2017 Chaves na Mão. Todos os direitos reservados. <span><a rel="nofollow" href="https://www.chavesnamao.com.br/termos-de-uso/">Termos de uso</a> | <a rel="nofollow" href="https://www.chavesnamao.com.br/politicas-de-privacidade/">Políticas de privacidade</a></span></p>
</div>
</footer><script src="https://www.chavesnamao.com.br/js/0367.2020.338/cm.lVHLboMwEPwlsOHAOSq0yFgKKNhwqWxz4GFTJxgC_vpCD61URal7mMtqZnZ2VryWHU9kjyDWTXIxXEWAb9FVHKClFONgsiJYd1ikfM278Cru78JBxokchYq9uvBW1L_NWREaRoKZjZmTviHDvHvMSGn7TKAaEvYclI75fujEl3y8OO0w1Rfpkf9SAdnyk29ZEm914d8YPR-V3VH_4iGQawHPy37zIkDUMxJPiOKPiqYSEaObk1Mn9piz7V_97XfF1lFjGc0lgqkUsJyaJB44SH0BcIsIXjgtzV_9PDGQhsNaMpr9DjExgm-IrLoGrVepKNgf0gqYS9FFA6PYe8j5_sEn.js"></script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","693250940795029");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=693250940795029&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">(function(b,c,e,f,d){b[d]=b[d]||[];var g=function(){var a={ti:"26011271"};a.q=b[d];b[d]=new UET(a);b[d].push("pageLoad")};var a=c.createElement(e);a.src=f;a.async=1;a.onload=a.onreadystatechange=function(){var b=this.readyState;b&&"loaded"!==b&&"complete"!==b||(g(),a.onload=a.onreadystatechange=null)};c=c.getElementsByTagName(e)[0];c.parentNode.insertBefore(a,c)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>

<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span><div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.4272171043497728"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.31765951399800385" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=26011271&amp;Ver=2&amp;mid=0ef99d9b-0c5d-3ed6-7acc-74bda31f1ffd&amp;pi=2018216309&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Im%C3%B3veis%20%C3%A0%20venda%20no%20Centro%20em%20Itaja%C3%AD%20-%20SC%20%7C%20Chaves%20na%20M%C3%A3o&amp;p=https%3A%2F%2Fwww.chavesnamao.com.br%2Fimoveis-a-venda%2Fsc-itajai%2Fcentro%2F%23%2B%26local%255B24%255D%255B8507%255D%255B13972%255D%3Dsc-itajai%252Fcentro&amp;r=https%3A%2F%2Fwww.google.com%2F&amp;lt=5273&amp;evt=pageLoad&amp;msclkid=N&amp;rn=156605"></div><iframe id="google_osd_static_frame_3301668521636" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe><iframe src="https://bid.g.doubleclick.net/xbbe/pixel?d=KAE" style="display: none;"></iframe><iframe src="https://bid.g.doubleclick.net/xbbe/pixel?d=KAE" style="display: none;"></iframe></body></html>
OUTPUT;

        $dom = new \DomDocument();
        @$dom->loadHTML($o); // @TODO: temporario, verificar maneira melhor pois se tirar o @ dá erro.

        $finder    = new \DomXPath($dom);

        $nodes_price    = $finder->query("//ul[contains(@class, 'list-group')]//ul[contains(@class, 'list-info')]//span[contains(@class, 'value')]");

        $values = [];

        foreach ($nodes_price as $i => $node) {
			// echo $node->textContent, "<br>";
			$a_value = substr($node->textContent, 0, strpos($node->textContent, ','));

            $value = \preg_replace('/\D/', '', $a_value);

            if (\is_numeric($value)) {
                $values[] = $value;
            }
        }

		$count = \count($values);
        $product = \array_sum($values) / $count;

		/*
        echo "<pre>";
		var_dump($values);

		echo \array_sum($values);
		echo "<br>";
		*/

        return [
			'source'  => 'chavesnamao.com.br',
			'average' => \number_format($product, 2, ',', '.'), 
			'count'   => $count
		];
    }

}