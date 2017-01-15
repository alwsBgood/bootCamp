<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
<script>
 dataLayer = [];
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHTZRB');</script>
<!-- End Google Tag Manager -->
	<meta charset="utf-8">

	<title>BOOTCAMP</title>

	<meta name="description" content="ПЕРВЫЙ В УКРАИНЕ BOOTCAMP ДЛЯ СОБСТВЕННИКОВ БИЗНЕСА. Месяц работы над вашим бизнесом в режиме “садись и делай” ">
	<meta name="keywords" content="">

	<meta property="og:description" content="Месяц работы над вашим бизнесом в режиме “садись и делай” " />

	<meta property="og:image" content="http://allinsol.com/bootcamp/img/og.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="400" />

	<meta property="og:site_name" content=""/>
	<meta property="og:title" content="ПЕРВЫЙ В УКРАИНЕ BOOTCAMP ДЛЯ СОБСТВЕННИКОВ БИЗНЕСА" />
	<meta property="og:url" content=""/>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">



	<!-- RESET -->
	<style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{height:100%;margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}</style>

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

	<!-- FONTS+HEADER -->
	<style>@font-face{font-family:"BebasNeueBold";font-style:normal;font-weight:400;src:url(fonts/BebasNeueBold.woff2) format("woff2"),url(fonts/BebasNeueBold.woff) format("woff")}@font-face{font-family:"Roboto Condensed-Bold";font-style:normal;font-weight:400;src:url("fonts/Roboto Condensed-Bold.woff2") format("woff2"),url("fonts/Roboto Condensed-Bold.woff") format("woff")}@font-face{font-family:"Roboto Condensed-Light";font-style:normal;font-weight:400;src:url("fonts/Roboto Condensed-Light.woff2") format("woff2"),url("fonts/Roboto Condensed-Light.woff") format("woff")}@font-face{font-family:"Roboto Condensed-Regular";font-style:normal;font-weight:400;src:url("fonts/Roboto Condensed-Regular.woff2") format("woff2"),url("fonts/Roboto Condensed-Regular.woff") format("woff")}.bar-long{ height: 5px; width: 0px; z-index: 1000; position: fixed; top: 0px; left: 0;}
body{position:relative;overflow-x:hidden;min-width:320px;font:19px "Roboto Condensed-Regular",sans-serif;color:#061928;background-color:#fff}a,button,input,textarea{text-decoration:none;outline:0;border:0;-webkit-transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease;transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease}a:focus,button:focus,input:focus,textarea:focus{outline:0}input,textarea{-webkit-box-sizing:border-box;box-sizing:border-box}textarea{resize:none}button:hover{cursor:pointer}.hidden{width:0;height:0}h2,h3{font:50px/54px BebasNeueBold,sans-serif;letter-spacing:.02em;text-transform:uppercase}.h2_desc{font:21px "Roboto Condensed-Light",sans-serif}.title{font:21px "Roboto Condensed-Bold",sans-serif}.btn{position:relative;z-index:1;display:block;width:381px;height:86px;background:url(img/btn-bg.png) center no-repeat;color:#fff;font:18px BebasNeueBold,sans-serif;text-align:center;letter-spacing:.16em;-webkit-transition:0;transition:0}.btn span{position:relative;z-index:3}a.btn{padding-top:28px}a.btn:hover{padding-top:31px;background:url(img/btn-hover.png) center no-repeat}button:hover{background:url(img/btn-hover.png) center no-repeat}button:hover span{margin-bottom:1px}button span{display:inline-block;margin-bottom:4px}header{background:url(img/header-bg.png) top center no-repeat;padding:24px 0 15px;width:100%;height:137px;z-index:10;-webkit-transition:all .6s;transition:all .6s;position:fixed;opacity:1;top:0;left:0;right:0}header .logo{float:left;margin-right:35px}header .phones{position:relative;float:right;line-height:36px}header .phones .phone{display:inline-block;width:25px;height:32px;-webkit-transition:.5s;transition:.5s}header .phones .phone img{margin-bottom:-3px}header .phones .phone:hover{-webkit-transform:scale(1.2);-ms-transform:scale(1.2);transform:scale(1.2)}header a{color:#061928;font-size:18px}header a:hover{color:#db1426}header .nav{float:left}header .nav li{display:inline-block;margin:5px}header .nav li + li{margin-left:20px}header.scrolled{padding:10px 0 15px;height:65px;background-size:100% 100%}#sec_01{padding:80px 0 110px;margin-top:79px;background:url(img/sec_01-bg.jpg) top center no-repeat;color:#fff}#sec_01 h1{margin-top:-40px;padding:162px 0 5px;font:58px/61px BebasNeueBold,sans-serif;text-transform:uppercase;letter-spacing:.02em;background:url(img/h1-bg.png) top center no-repeat}#sec_01 h1 span{color:#061928}#sec_01 .afterheader{font:24px/32px BebasNeueBold,sans-serif;margin-top:20px;letter-spacing: 0.05em;}#sec_01 .btn{position:relative;margin:40px auto 0}#sec_01 .btn:before{position:absolute;content:'';width:90px;height:45px;left:-110px;top:20px;background:url(img/hand.png) center no-repeat}#sec_02{padding:25px 0 105px;text-align:center}#sec_02 .block_text{display:inline-block;text-align:left;vertical-align:top}#sec_02 .block_text .title{margin-bottom:20px}#sec_02 .first_row .block_text{margin-top:45px}#sec_02 .first_row img{margin-right:80px}#sec_02 .second_row{padding-top:55px}#sec_02 .second_row .block_text{margin-top:75px;padding-left:65px}#sec_02 .second_row img{margin-left:80px}#sec_02 .third_row{margin-top:25px}#sec_02 .third_row .block_text{margin-top:75px}#sec_02 .third_row img{margin-right:80px}

@media only screen and (max-width: 490px){body{font-size:17px}section{padding:60px 0!important}.h2_desc{font-size:18px}.title{font-size:19px}header.scrolled{height:53px;padding-top:4px}header{text-align:center}header .nav{display:none}header .logo{display:inline-block;float:none}#sec_01 h1{margin-top:0;font-size:28px;line-height:34px}#sec_01 .afterheader{font:20px "Roboto Condensed-Regular",sans-serif}#sec_01 .afterheader br{display:none}.btn{background:#db1426;max-width:300px;font-size:14px;width:100%;height:60px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:0 10px!important;border:3px solid #fdeebd;-webkit-border-radius:10px;border-radius:10px}.btn span{margin:0!important}#sec_02 .third_row img{display:none}}

</style>

	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

<!-- 	<link rel="stylesheet" href="css/fonts.css"> -->
	<!-- <link rel="stylesheet" href="css/header.css"> -->
	<!-- Load CSS Start -->
	<!-- <script>loadCSS( "css/fonts.css?ver=1.0.0", false, "all" );</script> -->
	<!-- <script>loadCSS( "css/header.css?ver=1.0.0", false, "all" );</script> -->
	<script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
	<!-- Load CSS End -->

	<!-- Load CSS Compiled without JS -->
	<noscript>
		<link rel="stylesheet" href="css/main.css">
	</noscript>

</head>

<body data-img="img/land.jpg">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHTZRB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41024484 = new Ya.Metrika({ id:41024484, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41024484" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<div class="bar-long"></div>

<!--============================SECTION================================-->

<header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="img/logo.png" alt="Logo" class="logo">
        <ul class="nav">
          <li><a class="scroll" href="#sec_04">Что такое BootCamp</a></li>
          <li><a class="scroll" href="#sec_08">Как попасть</a></li>
          <li><a class="scroll" href="#experts">Эксперты</a></li>
          <li><a class="scroll" href="#sec_11">Программа</a></li>
        </ul>
        <div class="phones">
          <a id="btnCallBack" data-modal="modal_callback_call" class="md-trigger phone">
           <img src="img/phone.png" alt=""></a>
          <a href="tel:+380933432126">+38 (093) 343-21-26</a>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
</header>

<!--============================SECTION================================-->

<section id="sec_01">
  <div class="container">
    <div class="row">
      <div class="col-12 tc">
        <h1><span>Первый в Украине BootCamp</span> <br /> для собственников бизнеса</h1>
        <p class="afterheader">5 недель сверхинтенсивной работы над систематизацией <br /> и настройкой основных процессов в Вашем бизнесе</p>
        <a id="btnFirstSection" class="md-trigger btn" data-modal="modal_callback"><span>ЗАПИСАТЬСЯ НА консультацию</span></a>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_02">
  <div class="container">
    <div class="row first_row">
      <div class="col-12">
        <img src="img/sec_02-img-1.png" alt="Work">
        <div class="block_text">
          <p class="title">Ваши сотрудники вздыхают <br /> и поглядывают на часы</p>
          <p class="text">Им не нравится офис. Работа скучная,  <br /> а дома ждет семья. Они устают, долго  <br /> выполняют задачи и не горят идеей. <br /> Вы не знаете, как их мотивировать.</p>
        </div>
      </div>
    </div>
    <div class="row second_row">
      <div class="col-12">
        <div class="block_text">
          <p class="title">Весь бизнес держится <br />только на вас</p>
          <p class="text">Но чем конкретно вы заняты?! <br /> Звонки, собрания, отчеты, срочно, <br /> горим… А результата — НЕТ. <br /> Вы погрязли в рутине.</p>
        </div>
        <img src="img/sec_02-img-2.png" alt="Work">
      </div>
    </div>
    <div class="row third_row">
      <div class="col-12">
        <img src="img/sec_02-img-3.png" alt="Work">
        <div class="block_text">
          <p class="title">Вы тратите деньги на <br /> мастер-классы и тренинги, <br /> но все без толку</p>
          <p class="text">У вас нет времени на семью и личную жизнь. <br /> Вы знаете, что у вас проблемы — но никак  <br /> не начнете их решать.Так может, пора начать? </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_03">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="h2_wrapper tc">
          <h2>BootCamp — сверхинтенсивный <br /> лагерь для собственников бизнеса</h2>
          <p class="h2_desc">32 дня работы над вашим бизнесом в режиме “садись и делай”</p>
        </div>
        <div class="icongraphic">
          <div class="item-1">
            <img src="img/sec_03-icon-1.png" alt="Icon">
            <p>25 собственников  <br /> бизнеса</p>
          </div>
          <div class="item-2">
            <img src="img/sec_03-icon-2.png" alt="Icon">
            <p>Только практические  <br /> задания без сухой теории</p>
          </div>
          <div class="item-3">
            <img src="img/sec_03-icon-3.png" alt="Icon">
            <p>Живое присутствие  <br /> на протяжении месяца</p>
          </div>
          <div class="item-4">
            <img src="img/sec_03-icon-4.png" alt="Icon">
            <p>Четыре выездных дня  <br /> с полной сменой локации</p>
          </div>
          <div class="item-5">
            <img src="img/sec_03-img-1.png" alt="Icon">
            <p>Самое главное — ни одной  <br /> возможности сдаться </p>
          </div>
          <div class="item-6">
            <img src="img/sec_03-icon-7.png" alt="Icon">
            <p>Общение 1 на 1 <br /> с каждым экспертом</p>
          </div>
          <div class="item-7">
            <img src="img/sec_03-icon-6.png" alt="Icon">
            <p>Участие всех ключевых <br /> сотрудников вашего бизнеса</p>
          </div>
          <div class="item-8">
            <img src="img/sec_03-icon-5.png" alt="Icon">
            <p>Локация <br /> в центре Киева</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->




<section id="sec_04">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="h2_wrapper">
          <h2>Что такое BootCamp?</h2>
          <p class="h2_desc">“Boot Сamp” — формат обучения, который использовали <br />для лагерей по подготовке солдат.</p>
        </div>
        <div class="item first_item">
          <div class="block_text">
            <p class="title">Обычно новичок становится <br /> полноценным бойцом за 3 года </p>
            <p class="text">Благодаря большой нагрузке <br /> в BootCamp этого результата <br /> добивались за 3 месяца. <br /><br /> Сейчас такой формат обучения <br /> активно используют в Гарварде <br /> и в западных программах <br /> бизнес-образования.</p>
          </div>
          <img src="img/sec_04-img.png" alt="Image">
        </div><br />

        <div class="item second_item">
        <img src="img/sec_04-img-2.png" alt="Image">
         <div class="block_text">
            <p class="title">Мы создали первый в Украине <br /> BootCamp для собственников <br /> бизнеса.</p>
           <p class="text">Эта программа — жесткие, <br />сверхинтенсивные нагрузки. <br /> <br />Здесь нет волшебства. Это усилия, <br />стресс для мозга и организма, <br />тот самый пинок под зад. <br /> <br /> Но именно в таких условиях <br />вы добьетесь результата. </p>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_05">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>За месяц BootCamp вы:</h2>
        <ul class="item-1">
          <li>Полностью настроите <br /> работу отделов </li>
          <li>Пропишете четкую <br /> стратегию развития <br /> на 3-5 лет</li>
          <li>Разберетесь <br /> с трафиком, воронками, <br /> снизите цену лида</li>
          <li>Доработаете или <br /> построите с нуля <br /> модель продаж</li>
          <li>Начнете формировать <br /> команду игроков <br /> А-класса в своем <br /> бизнесе </li>
        </ul>
        <ul class="item-2">
          <li>Составите четкий <br /> план продвижения</li>
          <li>Настроите систему <br /> рекрутинга и найма <br /> в своей компании</li>
          <li>Построите новые <br /> показатели для бизнеса, <br /> выстроите аналитику</li>
          <li>Пропишете или <br /> улучшите структуру <br /> отдела продаж</li>
          <li>Сформулируете <br /> систему найма, <br /> обучения <br /> и мотивации</li>
        </ul>
        <ul class="item-3">
          <li>Настроите <br /> воронку продаж</li>
          <li>Займете лидирующие <br /> позиции в своем или <br /> новом сегменте рынка</li>
          <li>Получите KPI, с помощью <br /> которых сможете отследить <br /> ошибки и недочеты;</li>
          <li>Выявите УТП, повысите <br /> конверсию, настроите <br /> воронку продаж</li>
          <li>Упакуете свое <br /> предложение</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_06">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>У BOOTCAMP МОЖЕТ <br /> БЫТЬ ДВА ИСХОДА:</h2>
        <div class="item">
          <img src="img/sec_06-img-1.png" alt="Image">
          <p><span>Вы сдадитесь</span> <br /> и не получите результат</p>
        </div>
        <img src="img/sec_06-img-sep.png" alt="Separator">
        <div class="item">
          <img src="img/sec_06-img-2.png" alt="Image">
          <p style="margin-left: 20px"><span>Вы поднимете свой бизнес</span> <br /> на качественно другой уровень</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="wood">
        <h3>Уверены, что готовы к вызову?</h3>
        <a id="btnSixthSection" class="md-trigger btn" data-modal="modal_callback"><span>ЗАПИСАТЬСЯ НА консультацию</span></a>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_07">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="h2_wrapper">
          <h2>Как думаете, что такое инфобизнес? </h2>
          <p class="h2_desc">Это возможность заработать денег на том, что люди хотят заработать денег</p>
        </div>
        <div class="item">
          <p class="title">На тренинги и мастер-классы <br />приходят все — от собственников <br />бизнеса до студентов</p>
          <p class="text">Но отбить стоимость мероприятия <br /> сможет лишь 10% участников. А добиться <br /> успеха — всего 2%. Так быть не должно.</p>
        </div>
        <div class="item">
          <p class="title">BootCamp — не типичный <br /> уютный тренинг, где можно <br /> поиграть в телефон и выпить кофе</p>
          <p class="text">Это сверхинтенсив,который поможет <br /> взять себя в руки и сделать.Соскочить, <br /> передумать, лениться, ныть — не получится.</p>
        </div>
        <p class="center_block">
          Эксперты BootCamp лично отвечают <br /> за результат каждого участника</p>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_08">
  <div class="container">
    <div class="row .first_row">
      <div class="col-12">
        <div class="h2_wrapper">
          <h2>Берем не всех</h2>
          <p class="h2_desc">BootCamp — это 25 собственников бизнеса </p>
        </div>
        <img src="img/sec_08-img-1.png" alt="Stop">
        <div class="text_block">
          <p class="title">Желающих много. Но не стоит забывать, <br /> что это жесткая и сложная программа</p>
          <p class="text">Если вы новичок, этот воркшоп не для вас. <br /> Если у вас нет полноценной команды, которой <br /> можно делегировать задания — вы не выдержите <br /> и недели в таком ритме.</p><br /><br />
          <p class="title">BootCamp — это уровень тех, кто <br /> уже построил полноценный бизнес</p>
          <p class="text">Тех, у кого есть команда и определенная <br /> стратегия. Это “скорая помощь” в решении <br /> всех проблем собственника.</p>
        </div>
      </div>
    </div>
    <div class="rwo second_row">
      <h3>Как попасть на BootCamp? </h3>
      <p class="h2_desc">Участников мы отберем по результатам анкетирования <br /> и собеседования с экспертом. Сюда попадут только те, кто действительно <br /> стремится к результату и готов изменить подход к бизнесу.</p>
      <form  method="POST" class="form-inline db-form" action="javascript:void(null);">
          <!-- Hidden Required Fields -->
          <input type="hidden" name="project_name" value="BootCamp">
          <input type="hidden" name="admin_email" value="manager.meetup@gmail.com">
          <input type="hidden" name="form_subject" value="Заказ консультации">
          <input type="hidden" name="form_type" value="firstForm ">
          <input type="hidden" name="send_adress" value="https://docs.google.com/forms/d/e/1FAIpQLSdjn8yx8knHktYViGWSsRRjKUZoXBFVA_3Ik_VmFvDfGxpPPg/formResponse">
          <input type="hidden" name="goal" value="zayavka">

          <input type="hidden" id="registrationType" name="registrationType" value="default_registration">
          <input type="hidden" id="orderType" name="orderType" value="order-no">
          <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
          <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
          <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
          <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
          <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
          <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
          <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
          <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
          <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
          <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
          <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
          <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
          <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
          <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
          <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
          <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">
          <input type="hidden" name="product_id" value="2167809000000656177">
          <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;">
          <!-- END Hidden Required Fields -->

          <span class="field">
            <input type="text" class="form-control" name="entry.648859501" required=""  placeholder="Ваше имя " />
          </span>


          <span class="field">
            <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1805884529" required="">
          <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
          </span>

          <span class="field">
              <input type="email" class="form-control" name="entry.1502780938" required=""  placeholder="Введите ваш email" />
          </span>


          <button type="submit" class="btn" name="send"><span>Записаться на консультацию</span></button>

          <!-- Просто любое дополнительное поле -->
          <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
          <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
          <input type="hidden" class="pacet" name="form_pacet" value="">
          <!-- GET RESPONCE INPUTS -->
          <input type="hidden" name="start_day" value="0"/>
          <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
          <input type="hidden" name="campaign_token" value=""/>
          <!-- GET RESPONCE INPUTS -->
          <div class="clear"></div>


      </form>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_09">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 id="experts">Эксперты BootCamp</h2>
        <div class="item md-trigger" data-modal="modal_expert-1">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-1.png" alt="Photo">
            <p class="name">Андрей Пивоваров</p>
            <p class="text">CEO & co-founder GoIT</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-2">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-2.png" alt="Photo">
            <p class="name">Евгений Шевченко</p>
            <p class="text">CEO & co-founder «UAMaster» </p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-3">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-3.png" alt="Photo">
            <p class="name">Наталья Емченко</p>
            <p class="text">Директор по связям <br /> с общественностью <br /> в SCM</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-4">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-4.png" alt="Photo">
            <p class="name">Николай Такзей</p>
            <p class="text">Philip Morris <br /> (Marketing <br /> Director)</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-5">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-5.png" alt="Photo">
            <p class="name">Илья Рейниш</p>
            <p class="text">Руководитель <br /> Отдела Продаж <br /> в  LABA</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-6">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-6.png" alt="Photo">
            <p class="name">Алексей Кушнир</p>
            <p class="text">CEO проекта <br /> #СОЛЬ</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-7">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-7.png" alt="Photo">
            <p class="name">Юнона Лотоцкая</p>
            <p class="text">Эксперт по Эмоциональному Интеллекту</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-8">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-8.png" alt="Photo">
            <p class="name">Богдан Куринной</p>
            <p class="text">Руководитель Отдела Продаж</p>
          </div></div>
        <div class="item md-trigger" data-modal="modal_expert-9">
        <div class="bg"></div>
        <div class="wrap">
            <img src="img/expert-9.png" alt="Photo">
            <p class="name">Евгений Шевченко</p>
            <p class="text">Консультант по <br /> маркетингу и продажам</p>
          </div></div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_10">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Почему вам нужен именно BootCamp?</h2>
        <div class="item">
          <p class="title">Высокая интенсивность работы</p>
          <p class="text">За месяц в BootCamp мы сделаем то, <br /> на что 98% собственников тратят годы.</p>
        </div>
        <div class="item">
          <p class="title">Концентрация на внедрении</p>
          <p class="text">Никакой воды и сухой теории: только <br /> практика, только “садись и делай”.</p>
        </div>
        <div class="item">
          <p class="title">Личное общение с экспертами</p>
          <p class="text">Это не далекий и возвышенный эксперт <br /> на сцене — каждый наш коуч общается <br /> с вами один на один.</p>
        </div>
        <div class="item">
          <p class="title">Нет возможности сдаться</p>
          <p class="text">Мы будем поддерживать, пушить, <br /> заставлять, вынуждать — но не дадим <br /> вам остановиться.</p>
        </div>
        <div class="item item-big">
          <p class="title">Бесплатный годовой доступ к сообществу</p>
          <p class="text">Каждый выпускник BootCamp попадает в закрытое сообщество, где в течение года работает вместе с экспертами и другими участниками программы над внедрением всего объема знаний, материалов и планов, которые были пройдены за время BootCamp.</p>
        </div>
      </div>
    </div>
    <div class="row wood">
      <h3>BootCamp — это не о красивой обертке, <br /> улыбках или устрицах на кофе-брейк </h3>
      <p class="h2_desc">Нам интересно то же, что и вам — результат, рост и прибыль. <br /> Хотите узнать, каким будет ваш бизнес после?</p>
      <a id="btnTenthSection" class="md-trigger btn" data-modal="modal_callback"><span>НАЧать ДЕйствовать</span></a>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_11">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Программа BootCamp</h2>
        <ul class="tabs__caption">
            <li class="active">МОДУЛЬ 1</li>
            <li>МОДУЛЬ 2</li>
            <li>МОДУЛЬ 3</li>
            <li>МОДУЛЬ 4</li>
        </ul>
        <div class="content">
          <div class="tabs__content active">
            <p class="theme"><span>Тема: </span>EQ, стратегия, <br /> внедрение и личная эффективность </p>
            <p class="experts"><span>Эксперты: </span> Юнона Лотоцкая, Андрей <br /> Пивоваров, Наталья Емченко</p>
            <img src="img/underline.png" alt="Separator">
            <ul>
              <li>Введение в bootcamp</li>
              <li>Принятие правил</li>
              <li>Постановка целей на период обучения</li>
              <li>Работа с Эмоциональным Интеллектом</li>
              <li>Как распознавать и контролировать эмоции в бизнесе</li>
              <li>Расширение рамки восприятия</li>
              <li>Личная эффективность собственника</li>
              <li>GTD (Get Things Done)</li>
              <li>Как правильно распределять ежедневные задачи</li>
              <li>Как правильно собирать и хранить информацию</li>
              <li>Как эффективно вести несколько проектов</li>
              <li>Модель естественного планирования</li>
              <li>Технология правильного обучения</li>
              <li>Инструменты эффективной работы с почтой</li>
              <li>Выявление миссии компании</li>
              <li>Создание видения компании</li>
            </ul>
            <ul>
              <li>Разработка карты ценностей компании</li>
              <li>Примеры успешных кейсов Миссий, Видения и Ценностей компаний</li>
              <li>Разработка личного плана внедрения Миссии, Видения и Ценностей</li>
              <li>Создание 7 уровней стратегии развития компании</li>
              <li>Разработка одностраничного плана развития компании</li>
              <li>Дисциплина внедрения</li>
              <li>Концепция BHAG компании</li>
              <li>Постановка WIG компании на периоды</li>
              <li>Выявление Lead & Lag показателей</li>
              <li>Создание dashboard отделов</li>
              <li>Правила планирования на месяц, 3 месяца и год</li>
              <li>Методология управления бизнеса с помощью опережающих показателей</li>
              <li>Отделение важного от текучки</li>
              <li>Разработка Business Model Canvas</li>
              <li>Инструменты создания и тестирования гипотез</li>
            </ul>
          </div>
          <div class="tabs__content">
            <p class="theme" style="padding: 20px 0 20px 50px "><span>Тема: </span> Финансы и Команда</p>
            <p class="experts"><span>Эксперты: </span> Андрей Пивоваров, <br />  Ростислав Тучак</p>
            <img src="img/underline.png" alt="Separator">
            <ul class="long-last">
              <li>Основы финансового планирования</li>
              <li>Правильное распределение бюджета</li>
              <li>Создание документов контроля денежных потоков</li>
              <li>Формирование финансовой отчетности</li>
              <li>Концепция A-Players</li>
              <li>Методология привлечения A-Players</li>
              <li>Отличия A-Players от В- и С-Players</li>
              <li>Оценка текущей командыпо матрице A-players</li>
              <li>Рекрутинг</li>
              <li>Воронка рекрутинга</li>
              <li>Формирование профилей должностейпо ключевым позициям</li>
            </ul>
            <ul>
              <li>Описание вакансий</li>
              <li>Найм сотрудников</li>
              <li>Структурированное интервью</li>
              <li>Практика по проведению собеседований</li>
              <li>Оценка кандидатов на соответствие профилю должности</li>
              <li>Формирование бренда работодателя</li>
              <li>Организационная структура компании</li>
              <li>Построение внутри компании минимальных HR-функций</li>
              <li>Лидерство и менеджмент</li>
              <li>Multiplayers & deminishersв Вашем бизнесе</li>
              <li>Разработка KPI ключевых сотрудников</li>
            </ul>
          </div>
          <div class="tabs__content">
            <p class="theme" style="padding: 20px 0 20px 50px "><span>Тема: </span> Маркетинг и Аналитика</p>
            <p class="experts"><span>Эксперты: </span>Николай Такзей, Евгений <br /> Шевченко, Евгений Шевченко</p>
            <img src="img/underline.png" alt="Separator">
            <ul class="long-last">
              <li>Комплексная работа над маркетинговой стратегией</li>
              <li>Анализ рынка и ЦА</li>
              <li>Составление детального портрета ЦА</li>
              <li>Сегментация ЦА</li>
              <li>Проработка стратегии маркетинга в компании</li>
              <li>Внедрение стратегического планирования в маркетинге</li>
              <li>Создание Brand Framework</li>
              <li>Работа над позиционированием</li>
              <li>Проработка Value Proposition Design</li>
              <li>Выявление и усиление УТП</li>
              <li>Работа над привлечением потенциальных клиентов</li>
            </ul>
            <ul>
              <li>Поиск и контроль подрядчиков</li>
              <li>Выбор каналов привлечения клиентов</li>
              <li>Разработка медиа-плана продвижения</li>
              <li>Работа с рациональным распределением бюджета</li>
              <li>Увеличение конверсии</li>
              <li>Создание схемы и внедрение воронки продаж</li>
              <li>Внедрение инструментов “утепления” клиентов</li>
              <li>Разработка посадочных и продающих страниц</li>
              <li>Настройка аналитики и метрики</li>
              <li>Выявление и отслеживание основных KPI</li>
              <li>Внедрение системы контроляв отдел маркетинга</li>
            </ul>
          </div>
          <div class="tabs__content">
            <p class="theme" style="padding: 20px 0 20px 50px "><span>Тема: </span>  Отдел продаж</p>
            <p class="experts"><span>Эксперты: </span>Алексей Кушнир, Богдан <br /> Куринной, Илья Рейниш</p>
            <img src="img/underline.png" alt="Separator">
            <ul>
              <li>Разработка стратегии ОП</li>
              <li>Создание эффективной структуры ОП</li>
              <li>Внедрение инструментов увеличения оборота ОП</li>
              <li>Разработка системы поиска и найма сотрудников</li>
              <li>Методы привлечения “звезд” в ОП</li>
              <li>Разбор технологии увольнения сотрудников</li>
              <li>Система адаптации сотрудников</li>
              <li>Система обучения сотрудников</li>
              <li>Система обучения Руководителя Отдела Продаж</li>
              <li>Технология эффективного аудита сотрудников</li>
              <li>Внедрение пошаговой формулы продаж</li>
            </ul>
            <ul>

              <li>Разработка скриптов продаж и их внедрение</li>
              <li>Внедрение чек-листов продаж</li>
              <li>Разработка и внедрение KPI в отделе продаж</li>
              <li>KPI для РОП и сотрудников</li>
              <li>Анализ KPI</li>
              <li>Внедрение точек контроля</li>
              <li>Создание dashboard и отслеживание результатов</li>
              <li>Внедрение менеджмента в ОП</li>
              <li>Финансовое планирование</li>
              <li>Автоматизация рабочих процессов в ОП</li>
              <li>Внедрение инструментов автоматизации ОП</li>
            </ul>
            <p class="tc title">Подведение итогов, выпускной + вступление в сообщество СОЛЬ </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_12">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h2>BootCamp  — это:</h2>
        <div class="item first_row">
          <img src="img/sec_12-icon-1.png" alt="Icon">
          <p class="title">Правильное окружение </p>
          <p class="text">Только сильные собственники бизнеса <br /> и лучшие эксперты, которые помогут <br /> добиться результата.</p>
        </div>
        <div class="item first_row">
          <img src="img/sec_12-icon-2.png" alt="Icon">
          <p class="title">Работа с ключевыми сотрудниками.</p>
          <p class="text">Каждый ключевой сотрудник Вашей компании сможет присутствовать в BootCamp и получит конкретные задачи.</p>
        </div>
        <div class="item first_row">
          <img src="img/sec_12-icon-3.png" alt="Icon">
          <p class="title">Принцип “бери и делай”</p>
          <p class="text">Минимум скучной теории и воды: <br /> только практика и постоянное <br /> внедрение.</p>
        </div>
        <div class="item">
          <img src="img/sec_12-icon-4.png" alt="Icon">
          <p class="title">Личное общение</p>
          <p class="text">Наши эксперты и менторы не остаются <br /> на сцене. Каждый коуч лично <br /> работает с вами и  принимает <br /> участие в решении ваших проблем.</p>
        </div>
        <div class="item">
          <img src="img/sec_12-icon-5.png" alt="Icon">
          <p class="title">Разностороннее обучение </p>
          <p class="text">У вас не будет скучных лекций  — <br /> только групповые занятия и субботние <br /> активности, практика и совместная <br /> работа над проблемами.</p>
        </div>
        <div class="item">
          <img src="img/sec_12-icon-6.png" alt="Icon">
          <p class="title">Работа на результат</p>
          <p class="text">Мы не дадим вам бросить все <br /> через три дня. Смысл нашего <br /> воркшопа — не просто дать <br /> информацию. Мы работаем, чтобы <br /> вы добились результата.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<section id="sec_13">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="h2_wrapper">
          <h2>Мы не говорим, что это будет легко</h2>
          <p class="h2_desc">У нас нет волшебной вакцины, которая “Увеличит Вашу Прибыль На 20% За 2 Дня”</p>
        </div>
        <div class="block_text">
          <p><span>BootCamp — это тяжелая и сложная <br /> работа.Мы честны с вами: порой <br /> это будет невыносимо.</span> <br /> <br /> Но любой бизнес — результат действий <br /> и решений собственника. <br /> <br /> <span>Может, пора начать?</span> </p>
        </div>
        <div class="block_form">
          <form  method="POST" class="db-form white_form form-inline" action="javascript:void(null);">
              <!-- Hidden Required Fields -->
              <input type="hidden" name="project_name" value="BootCamp">
              <input type="hidden" name="admin_email" value="manager.meetup@gmail.com">
              <input type="hidden" name="form_subject" value="Заказ консультации">
              <input type="hidden" name="form_type" value="secondForm ">
              <input type="hidden" name="send_adress" value="https://docs.google.com/forms/d/e/1FAIpQLSdjn8yx8knHktYViGWSsRRjKUZoXBFVA_3Ik_VmFvDfGxpPPg/formResponse">
              <input type="hidden" name="goal" value="zayavka">

              <input type="hidden" id="registrationType" name="registrationType" value="default_registration">
              <input type="hidden" id="orderType" name="orderType" value="order-no">
              <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
              <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
              <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
              <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
              <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
              <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
              <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
              <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
              <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
              <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
              <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
              <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
              <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
              <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
              <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
              <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">
              <input type="hidden" name="product_id" value="2167809000000656177">
              <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;">
              <!-- END Hidden Required Fields -->

              <span class="field">
                <input type="text" class="form-control" name="entry.648859501" required=""  placeholder="Ваше имя " />
              </span>


              <span class="field">
                <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1805884529" required="">
              <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
              </span>

              <span class="field">
                  <input type="email" class="form-control" name="entry.1502780938" required=""  placeholder="Введите ваш email" />
              </span>


              <button type="submit" class="btn" name="send"><span>НАЧать ДЕйствовать</span></button>

              <!-- Просто любое дополнительное поле -->
              <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
              <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
              <input type="hidden" class="pacet" name="form_pacet" value="">
              <!-- GET RESPONCE INPUTS -->
              <input type="hidden" name="start_day" value="0"/>
              <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
              <input type="hidden" name="campaign_token" value=""/>
              <!-- GET RESPONCE INPUTS -->
              <div class="clear"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--============================SECTION================================-->

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
        <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
        <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
        <a class="md-trigger" data-modal="modal_politics_five">Офферта</a>
      </div>
    </div>
  </div>
</footer>

<div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>


	 <div class="hidden">
  <div class="md-modal md-effect-1" id="modal_callback_call">
      <div class="md-content">
          <span class="btn_close_modal">
              <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
          </span>
          <div class="titlebox">
              <h2 style="margin-bottom: 30px;">Заказ обратного звонка</h2>
          </div>
          <div>
              <form  method="POST" class="db-form form-inline" action="javascript:void(null);">
                  <!-- Hidden Required Fields -->
                  <input type="hidden" name="project_name" value="BootCamp">
                  <input type="hidden" name="admin_email" value="manager.meetup@gmail.com">
                  <input type="hidden" name="form_subject" value="Заказ обратного звонка">
                  <input type="hidden" name="form_type" value="callbackForm ">
                  <input type="hidden" name="send_adress" value="https://docs.google.com/forms/d/e/1FAIpQLScCH3asVB3qfblYRS9IfoVGqZKJh74a8AohUwYlj6oAmlrXrQ/formResponse">
                  <input type="hidden" name="goal" value="zvonok">

                  <input type="hidden" id="registrationType" name="registrationType" value="default_registration">
                  <input type="hidden" id="orderType" name="orderType" value="order-no">
                  <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                  <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                  <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                  <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                  <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                  <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                  <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                  <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                  <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                  <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
                  <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                  <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                  <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                  <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                  <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                  <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">
                  <input type="hidden" name="product_id" value="2167809000000656177">
                  <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;">
                  <!-- END Hidden Required Fields -->

                  <span class="field">
                    <input type="text" class="form-control" name="entry.843517337" required=""  placeholder="Ваше имя" />
                  </span>


                  <span class="field">
                    <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1442957012" required="">
                  <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
                  </span>


                  <button type="submit" class="btn" name="send"><span>Начать действовать</span></button>

                  <!-- Просто любое дополнительное поле -->
                  <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                  <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                  <input type="hidden" class="pacet" name="form_pacet" value="">
                  <!-- GET RESPONCE INPUTS -->
                  <input type="hidden" name="start_day" value="0"/>
                  <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                  <input type="hidden" name="campaign_token" value=""/>
                  <!-- GET RESPONCE INPUTS -->
                  <div class="clear"></div>


              </form>

              <div class="md_bottom">
                  <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
              </div>
          </div>
      </div>
  </div>
    <div class="md-modal md-effect-1" id="modal_callback">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="colored">ЗАполните форму</h2>
                <p class="h2_desc tc">и запишитесь на консультацию</p>
            </div>
            <div>
                <form  method="POST" class="db-form form-inline" action="javascript:void(null);">
                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="BootCamp">
                    <input type="hidden" name="admin_email" value="manager.meetup@gmail.com">
                    <input type="hidden" name="form_subject" value="Заказ консультации">
                    <input type="hidden" name="form_type" value="modalForm ">
                    <input type="hidden" name="send_adress" value="https://docs.google.com/forms/d/e/1FAIpQLSdjn8yx8knHktYViGWSsRRjKUZoXBFVA_3Ik_VmFvDfGxpPPg/formResponse">
                    <input type="hidden" name="goal" value="zayavkaModal">
                    <input type="hidden" id="registrationType" name="registrationType" value="default_registration">
                    <input type="hidden" id="orderType" name="orderType" value="order-no">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="<?php echo $data['city']; ?>">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">
                    <input type="hidden" name="product_id" value="2167809000000656177">
                    <input type="hidden" name="product_name" value="&laquo;BootCamp 2&raquo;">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                      <input type="text" class="form-control" name="entry.648859501" required=""  placeholder="Ваше имя " />
                    </span>


                    <span class="field">
                      <input placeholder="Ваш телефон" type="tel" class="form-control" name="entry.1805884529" required="">
                    <!-- Если отправляем и на Гет РЕспонс тоже - меняем название поля name на то которое создали в компании ГетРЕспонса -->
                    </span>

                    <span class="field">
                        <input type="email" class="form-control" name="entry.1502780938" required=""  placeholder="Введите ваш email" />
                    </span>


                    <button type="submit" class="btn" name="send"><span>Начать действовать</span></button>

                    <!-- Просто любое дополнительное поле -->
                    <!-- <input type="hidden" name="other_data" value="Любое значение" /> -->
                    <!-- Динамическое дополнительное поле для передачи данных с кнопок по всему сайту -->
                    <input type="hidden" class="pacet" name="form_pacet" value="">
                    <!-- GET RESPONCE INPUTS -->
                    <input type="hidden" name="start_day" value="0"/>
                    <!-- Если нужно отправлять и на почту и на GetResponse - указываем campaign_token -->
                    <input type="hidden" name="campaign_token" value=""/>
                    <!-- GET RESPONCE INPUTS -->
                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-13" id="modal_expert-1">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-1.png" alt="Photo">
            <p class="name">Андрей Пивоваров</p>
            <p class="position">CEO & co-founder GoIT</p>
            <p class="text">Свой первый бизнес создал в 17 лет — <br /> открыл веб-студию. В 25 основал <br /> образовательную компанию GoIT. <br /><br /> с помощью стартовых инвестиции  в 10 000 грн создал компанию, <br />которая через два года вышла на миллион долларов оборота. <br /> <br />GoIT была признана самым успешным и быстроразвивающимся <br /> образовательным стартапом по версии IT Educational Awards 2015. <br /><br /> Призер Ukrainian IT Awards 2016 в номинации IT Education за наибольший <br />вклад в рост количества и качества IT-специалистов в Украине</p>
        </div>
    </div>

    <div class="md-modal md-effect-13" id="modal_expert-2">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-2.png" alt="Photo">
            <p class="name">Евгений Шевченко</p>
            <p class="position">CEO & co-founder «UAMaster» </p>
            <p class="text">В 2004 году Евгений основал компанию «UaMaster», которая на сегодняшний день занимает лидирующие позиции среди успешных агентств по интернет-маркетингу, и занимает первое место в Украине по оборотам и уровню удовлетворенности клиентов. В портфолио агентства более 5000 рекламных кампаний для 550 клиентов из 15 стран мира, среди которых много известных украинских и международных брендов. <br /><br /> Уже 10 лет сотрудники «UaMaster» занимаются развитием рынка интернет-рекламы. Агентство является организатором тематической конференции «Интернет-маркетинг в Украине», соорганизатором крупнейшего отраслевого мероприятия iForum, регулярно проводит тематические семинары и тренинги. <br /><br /> Евгений читает лекции на курсе интернет-рекламы в Киевском Национальном Торгово-Экономическом Университете и в Нидерландском институте маркетинга (NIMA). Является автором тематических статей, которые посвящены интернет-рекламе.</p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-3">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-3.png" alt="Photo">
            <p class="name">Наталья Емченко</p>
            <p class="position">Директор по связям с общественностью в SCM</p>
            <p class="text">Занимала должность CEO в Keramet-Invest. <br><br> В течение 13 лет работает в System Capital Management (SCM).<br> Начинала свою карьеру с должности Industrial Manager. <br> В 2005 году заняла должность PR Manager.<br> С 2006 года и по сегодняшний день (10 лет) занимает должность Chief Reputation Officer. <br><br> Член Наблюдательного Совета Медиа Группа "Украина" <br> Член попечительного совета Благотворительного Фонда "Развитие Украины" <br><br> Выпускник ACCA и INSEAD, Executive MBA.</p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-4">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-4.png" alt="Photo">
            <p class="name">Николай Такзей</p>
            <p class="position">Philip Morris <br /> (Marketing Director)</p>
            <p class="text"> Николай обладает 14-летним опытом в маркетинге. Прошел путь от Специалиста по Торговым Маркам до Маркетинг Директора в Украине, Грузии, Армении и Молдове одной из крупнейших корпораций – Philip Morris International с прибылью по результатам 2015 года на уровне 6.8 млрд. долларов. <br><br> Имеет практический опыт создания и реализации маркетинговых стратегий, управления портфелем торговых марок, а также построением процессов и команды отдела маркетинга как в Philip Morris International, так и во время работы руководителем отдела маркетинга агрохолдинга «Авангард». <br><br> Николай преподает авторские курсы по маркетингу, интегрированным маркетинговым коммуникациям и бизнес стратегиям в Международном Институте Бизнеса (программа General MBA), Charted Institute of Marketing, а также выступает с докладами на конференциях и образовательных мероприятиях.</p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-5">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-5.png" alt="Photo">
            <p class="name">Илья Рейниш</p>
            <p class="position">Руководитель Отдела Продаж в LABA</p>
            <p class="text">Начал заниматься продажами с 18 лет, установив рекорд компании на второй месяц работы. Реорганизовал далее работу отдела продаж в IPS. Работал в Амазон. Личный оборот 62000$ при продаже дешёвого товара. <br> Обучал такие компании как forex club, издательство основы, ЭКО лавка, luxoft, страховая довира полис. <br><br> За два месяца в LABA увеличил оборот в 2.5 раз. <br> Автор уникальной программы "Время продавать" <br><br> Эксперт по заключению договоров в b2b сегменте, продажам дорогих товаров и автоматизации отделов продаж. <br><br> Проходил обучение в программах у Белфорта, Адизеса, Трейси, Чалдини, Пинтосевич, Гандапас, Киосаки, Феррацци</p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-6">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-6.png" alt="Photo">
            <p class="name">Алексей Кушнир</p>
            <p class="position">CEO проекта #СОЛЬ</p>
            <p class="text">В 19 лет пришел работать в компанию GeniusMarketing на должность менеджера по продажам. <br><br> Через год занял должность Руководителя Отдела Продаж. В пиковый период в отделе работало около 84 человека, которые делали продаж свыше 3.000.000$ в год. <br><br> Эксперт в построении и автоматизации отделов продаж.</p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-7">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-7.png" alt="Photo">
            <p class="name">Юнона Лотоцкая</p>
            <p class="position">Эксперт по Эмоциональному Интеллекту</p>
            <p class="text">Бизнес-консультант, более 20 лет опыта работы в корпоративном сегменте. <br /> Работала с топ-менеджерами Киевстар, Metlife, Mondelez International, УкрАгроКом. <br /><br /> Автор трансформационного курса “Психология успеха”, член украинского сообщества психотерапевтов Европейской организации психотерапии. <br /><br /> Автор и тренер программы EQ BootCamp в проекте «СОЛЬ»   </p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-8">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-8.png" alt="Photo">
            <p class="name">Богдан Куринной</p>
            <p class="position">Руководитель Отдела Продаж и Сертифицированный Коуч в GoldCoach  </p>
            <p class="text">2006 - торговый представитель (холодные продажи "в поле") <br><br> 2007-2008 - Руководитель Отдела Продаж и Коммерческий Директор "Аква-Сервис". Разработал инновационную систему работы торговых представителей, что увеличило показатели на одного сотрудника в 4,1 раза выше, чем у лидеров рынка <br><br> 2009-2013 - Генеральный Директор "Аква-Сервис". Вывел компанию в лидеры продаж региона, при цене на 33% выше средней по рынку <br><br> 2013-настоящее время - Сертифицированный Коуч в GoldCoach </p>
        </div>
    </div>


    <div class="md-modal md-effect-13" id="modal_expert-9">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <img src="img/expert-9.png" alt="Photo">
            <p class="name">Евгений Шевченко</p>
            <p class="position">Консультант по маркетингу и продажам</p>
            <p class="text">2012-2015 — маркетолог в «E-com» (Лидирующая платформа по электронному документообороту для ритейл-сетей СНГ) <br><br> 2015 — директор по маркетингу в «Бизнес-Конструктор» <br><br> 2016 — руководитель консалтингового бюро WillCatchFire</p>
        </div>
    </div>


    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content tl">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в &laquo;Согласии с рассылкой&raquo;</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content tl">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с &laquo;Отказом от ответственности&raquo; и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content tl">
                <p>Заполняя форму на нашем сайте &mdash; вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
        <div class="md-modal md-effect-8 md_large" id="modal_politics_four">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
                </span>
                <div class="titlebox">
                    <h2 class="title tc">Гарантия возврата</h2>
                </div>
                <div class="md_content tl">
                    <p>Компания гарантирует полный возврат средств за приобретенный продукт и/или услугу по первому требованию клиента.</p>
                    <p>Срок гарантийного периода определяется для конкретных товаров или услуг индивидуально, и составляет 10 дней или более с момента оплаты для онлайн тренингов, и 1 день или более для оффлайн тренингов.</p>
                    <p>Для того, что бы запросить возврат денежных средств за определенный тренинг/продукт или услугу, обратитесь на наш E-Mail технической поддержки: manager.meetup@gmail.com Все заявки рассматриваются в течении 24 часов.</p>
                    <p>Возврат денежных средств осуществляется путём перевода необходимой суммы на электронные кошельки (WebMoney, Яндекс.Деньги, QIWI), либо на карту VISA/MASTERCARD. Длительность транзакции – от 1 до 3-х банковских дней.</p>
                </div>
            </div>
        </div>

        <div class="md-modal md-effect-8 md_large" id="modal_politics_five">
            <div class="md-content">
                <span class="btn_close_modal">
                    <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
                </span>
                <div class="titlebox">
                    <h2 class="title tc">Оферта</h2>
                </div>
                <div class="md_content tl">
                <p><strong>ПУБЛИЧНЫЙ ДОГОВОР (ОФЕРТА) НА ОКАЗАНИЕ ИНФОРМАЦИОННЫХ УСЛУГ</strong></p>
                  <p>1.1. Публикация (размещение) текста настоящего Публичного договора на сайте Исполнителя по адресу: http://allinsol.com/, является публичным предложением Исполнителя заключить настоящий Публичный договор.</p>
                  <p>1.2. Настоящий Публичный договор (далее – Оферта, договор) представляет собой официальное предложение «Исполнителя» по оказанию информационных услуг юридическим и/или дееспособным физическим лицам (далее – Заказчик), путем передачи информации на тренингах, требующих личного присутствия Заказчика и указанных на сайте Исполнителя http://allinsol.com/ (MeetUp, bootcamp и т.п.) (далее Информационные услуги), направленном на приобретение Заказчиком дополнительной информации, умений и навыков по развитию бизнеса, на перечисленных ниже условиях и за установленную плату.</p>
                  <p>1.3. Принятие (акцепт) данной Оферты означает полное и безоговорочное принятие Заказчиком всех условий без каких-либо исключений и/или ограничений и приравнивается в соответствии с ч. 2 ст. 642 Гражданского кодекса Украины (далее ГК Украины) к заключению сторонами двухстороннего письменного договора на условиях, которые изложены ниже в этой Оферте.</p>
                  <p>1.4. Данный Публичный договор на оказание Информационных услуг (Оферта) считается заключенным (акцептированным) с момента заполнения Заказчиком учетной записи на Сайте Исполнителя и поступления денежных средств Заказчика на расчетный счет Исполнителя.</p>
                  <p>1.5. Исполнитель и Заказчик предоставляют взаимные гарантии своей право- и дееспособности необходимые для заключения и исполнения настоящего Договора на оказание Информационных услуг.</p>
                  <p><strong>2. ПРЕДМЕТ ОФЕРТЫ</strong></p>
                  <p>2.1. Предметом настоящей Оферты является возмездное оказание Заказчику Информационных услуг силами Исполнителя и\или привлеченных им третьих лиц в соответствии с условиями настоящей Оферты путем организации и проведения тренингов за вознаграждение, выплачиваемое Заказчиком Исполнителю.</p>
                  <p>2.2. Стоимость, время и место предоставления Информационной услуги устанавливается на Сайте Исполнителя http://allinsol.com/ (далее – Сайт).</p>
                  <p><strong>3. УСЛОВИЯ ОКАЗАНИЯ ИНФОРМАЦИОННОЙ УСЛУГИ</strong></p>
                  <p>3.1. Исполнитель предоставляет доступ Заказчику к Информационной услуге, размещенной на Сайте при условии 100 % предоплаты Заказчиком этой услуги.</p>
                  <p>3.2. Виды и способы оплаты Информационной услуги указываются на Сайте. Платежи по настоящему договору осуществляются одним из способов предлагаемых Заказчику, в том числе при нажатии кнопки «Оплатить», которые включают в себя:</p>
                  <p>- оплата электронными денежными средствами;</p>
                  <p>- оплата через платежные терминалы либо интернет-банкинг;</p>
                  <p>- оплата на расчетный счет Исполнителя через банк;</p>
                  <p>- иными способами по предварительному согласованию с Исполнителем.</p>
                  <p>3.3. Участие в тренинге подтверждается заполнением соответствующей заявки на участие и внесением оплаты одним из способов, указанных на Сайте. Подтверждение участия Заказчика в тренинге предоставляются Заказчику путем их направления на адрес электронной почты Заказчика, указанной им при заполнении заявки на участие в тренинге.</p>
                  <p>3.5. В случае, если в течение 3-х рабочих дней Заказчик по той или иной причине не получил уведомления о подтверждении участия в тренинге и доступе к Информационной услуге на свою электронную почту, ему необходимо обратиться в службу поддержки Исполнителя по адресу электронной почты: manager.meetup@gmail.com</p>
                  <p>3.6. Исполнитель обязуется предоставить Заказчику Информационную услугу путем организации и проведения тренинга в срок, указанный на Сайте.</p>
                  <p>3.7. Настоящий договор имеет силу акта об оказании услуг. Приемка производится без подписания соответствующего акта.</p>
                  <p>3.8. Исполнитель оставляет за собой право аннулировать участие Заказчика в тренинге без возвращения внесенной платы в случае нарушения им правил поведения на тренинге. Указанными нарушениями являются: разжигание межнациональных конфликтов, оскорбление участников тренинга, ведущего, отклонение от темы тренинга, реклама, нецензурные высказывания, причинение вреда имуществу Исполнителя и\или других участников тренинга, нарушения правил техники безопасности, санитарно-гигиенических норм, правил пожарной безопасности и защиты окружающей среды.</p>
                  <p>3.9. Исполнитель оставляет за собой право аннулировать участие Заказчика в тренинге в случае установления факта распространения Заказчиком информации и материалов, полученных им в связи с участием в тренинге, третьим лицам за плату. Использование информации и материалов допускается только в личных целях и для личного использования Заказчика.</p>
                  <p><strong>4. РЕГИСТРАЦИЯ ЗАКАЗЧИКА НА САЙТЕ</strong></p>
                  <p>4.1. Предоставление Заказчику Информационной услуги возможно при условии создания им на Сайте соответствующей учетной записи. Учетная запись должна содержать фамилию и/или имя Заказчика, адрес его электронной почты, телефон.</p>
                  <p>4.2. Заказчик несет ответственность за конфиденциальность пароля. При установлении Заказчиком фактов несанкционированного доступа к своей учетной записи, он обязуется в кратчайшие сроки уведомить об этом обстоятельстве службу поддержки Исполнителя по электронной почте: manager.meetup@gmail.com.</p>
                  <p><strong>5. ПРАВА И ОБЯЗАННОСТИ ИСПОЛНИТЕЛЯ</strong></p>
                  <p>5.1. Исполнитель имеет право на хранение и обработку персональных данных Заказчика.</p>
                  <p>5.2. Исполнитель гарантирует предоставление Заказчику полной и достоверной информации об оказываемой услуге по его требованию.</p>
                  <p>5.3. Исполнитель оставляет за собой право в любой момент изменять дату проведения тренинга, предварительно уведомив Заказчика не позднее трех рабочих дней с момента принятия такого решения. Длительность тренинга и программа его проведения может меняться до 5% в одностороннем порядке.</p>
                  <p>5.4. Исполнитель вправе изменять длительность тренинга и условия настоящей Оферты в одностороннем порядке без предварительного уведомления Заказчика, путем публикации указанных изменений на Сайте, не позднее 5 календарных дней со дня их внесения (принятия).</p>
                  <p>5.5. Исполнитель вправе изменить сроки проведения тренинга, уведомив об этом Заказчика не позднее трех рабочих дней с момента принятия такого решения, на срок, не превышающий 30 календарных дней.</p>
                  <p>5.6. Исполнитель вправе запретить присутствие Заказчика в месте проведения тренинга в случае нарушения им правил тренинга, указанных в п. 3.8. данной Оферты, без возвращения внесенной платы.</p>
                  <p><strong>6. ПРАВА И ОБЯЗАННОСТИ ЗАКАЗЧИКА</strong></p>
                  <p>6.1. Заказчик обязан предоставлять достоверную информацию о себе в процессе создания учетной записи (регистрации) на Сайте, а также своевременно проверять корреспонденцию, поступающую на адрес электронной почты, который Заказчик указал в учетной записи при подаче заявки.</p>
                  <p>6.2. Заказчик обязуется не воспроизводить, не повторять, не копировать, не продавать, а также не использовать в каких бы то ни было целях информацию и материалы, ставшие ему доступными в связи с оказанием Информационной услуги, за исключением их личного использования.</p>
                  <p>6.3. Заказчик обязан самостоятельно обеспечить свое присутствие в сроки и место проведения тренинга, указанные на Сайте, для получения Информационных услуг.</p>
                  <p>6.4. Заказчик пользуется всеми правами потребителя в соответствии с действующим законодательством Украины, регулирующим отношения по возмездному оказанию услуг.</p>
                  <p>6.5. Заказчик в случае оказания ему услуги ненадлежащего качества вправе воспользоваться правами, предусмотренными ст. 8 Закона Украины «О защите прав потребителей», исключительно в случаях, когда нарушение его прав произошло по вине Исполнителя и при доказанности указанного обстоятельства.</p>
                  <p>6.6. Все претензии по качеству оказываемой Информационной услуги должны направляться Заказчиком в адрес Исполнителя посредством подачи заявки на электронную почту: manager.meetup@gmail.com и/или в письменном виде в месте проведения тренинга.</p>
                  <p>6.7. В случае принятия решения Исполнителем о возврате денежных средств, Денежные средства возвращаются Заказчику путем их: зачисления на счет Заказчика в платежных системах Яндекс-Деньги, WebMoney, QIWI, кредитную карту, личный счет, или другие реквизиты согласованные сторонами. Все возвраты денежных средств осуществляются при условии направления Заказчиком в адрес Исполнителя заявления по форме, которое будет выслано Заказчику письмом по электронной почте. Сторонами безоговорочно принимается, что окончательное решение о способе возврата денежных средств остается в каждом конкретном случае на усмотрение Исполнителя. В случае возврата денежных средств на счет Заказчика в банке или на счет Заказчика в платежной системе, заполненное заявление на возврат денежных средств, с подписью Заказчика по форме в сканированном электронном виде высылается по электронной почте Исполнителю (допускаются следующие форматы файла: gif, jpeg, pdf). Заявление на возврат Денежных средств должно содержать в обязательном порядке сведения о счете Заказчика, коммерческой организации (банке), где хранится счет, ее адресе. В случае отсутствия в заявлении необходимых сведений, требуемых для осуществления возврата денежных средств, Исполнитель не гарантирует сроков, указанных в п. 6.7., денежные средства зачисляются на счет в банке, указанный Заказчиком, до 30-го числа месяца в котором Заказчик получил от Исполнителя подписанное и сканированное заявление Заказчика по форме. Финансовый документ, подтверждающий внесение денежных средств Исполнителем на счет Заказчика, является доказательством исполнения Исполнителем обязанности по возврату денежных средств Заказчику, что безоговорочно принимается сторонами.</p>
                  <p><strong>7. ОТВЕТСТВЕННОСТЬ СТОРОН</strong></p>
                  <p>7.1 Исполнитель и Заказчик, принимая во внимания характер оказываемой услуги, обязуются в случае возникновения споров и разногласий, связанных с оказанием Информационной услуги, применять досудебный порядок урегулирования спора. В случае невозможности урегулирования спора в досудебном порядке стороны вправе обратиться в суд.</p>
                  <p>7.2. За неисполнение либо ненадлежащее исполнение обязательств по настоящей Оферте, стороны несут ответственность в соответствии с законодательством Украины.</p>
                  <p>7.3. Исполнитель освобождается от ответственности за результат предоставления услуг по настоящему договору, если Заказчик нарушает условия настоящего договора, не выполняет график-программу саммита, нарушает дисциплину саммита и выполнения задач, не принимает активного участия в обсуждении вопросов, не участвует в закрытых группах, если Заказчик предоставил недостоверные данные и / или информацию о проекте и т.п.</p>
                  <p>7.4. Исполнитель не несет ответственности за любых третьих лиц, которые вредят бизнесу Заказчика; за любые убытки или ущерб, нанесенный Заказчику или третьим лицам в результате использования Заказчиком услуг, вызванные ошибками, небрежностью или неосторожностью со стороны Заказчика.</p>
                  <p>7.5. Исполнитель не несет ответственности за имущество Заказчика расположенное в помещении проведения тренинга (включая среди прочего его недостаток, повреждение и т. д.), за нарушение Заказчиком правил техники безопасности, санитарно-гигиенических норм, правил пожарной безопасности и защиты окружающей среды.</p>
                  <p>7.6.Заказчик несет ответственность за причинение вреда имуществу помещения, в котором проводится тренинг, или имуществу Исполнителя и/или других участников тренинга в размере фактически причиненного ущерба и в соответствии с действующим законодательством Украины.</p>
                  <p><strong>8. ГАРАНТИИ КАЧЕСТВА ИНФОРМАЦИОННОЙ УСЛУГИ</strong></p>
                  <p>8.1. Заказчик, принимая условия настоящей Оферты, принимает на себя также риск неполучения прибыли и риск возможных убытков, связанных с использованием знаний, умений и навыков, полученных Заказчиком в ходе оказания Информационной услуги.</p>
                  <p>8.2. Гарантируя успешность применения полученных знаний, умений и навыков, а также получение Заказчиком Информационной услуги определенной прибыли (дохода) с их использованием (реализацией) в определенном либо неопределенном будущем, Исполнитель не несет ответственности за неполучение прибыли (дохода), получение прибыли (дохода) ниже ожиданий Заказчика, а также за прямые и косвенные убытки Заказчика, поскольку успешность использования Заказчиком полученных знаний, умений и навыков зависит от многих известных и неизвестных Исполнителю факторов: целеустремленности, трудолюбия, упорства, уровня интеллектуального развития, творческих способностей Заказчика, других его индивидуальных качеств и персональных характеристик, что принимается обеими сторонами.</p>
                  <p>8.3. Условия гарантийных сроков по тренингам утрачивают силу при переводе с одного тренинга на другой.</p>
                  <p><strong>9. ФОРС-МАЖОР</strong></p>
                  <p>9.1. Стороны освобождаются от ответственности за частичное или полное неисполнение обязательств по настоящему договору, если это неисполнение явилось следствием действия обстоятельств непреодолимой силы (форс-мажорных обстоятельств), возникших после заключения настоящего договора и сделали невозможным исполнение обязательств в соответствии с условиями настоящего договора. К таким обстоятельствам в частности, но не ограничиваясь, относятся чрезвычайные ситуации техногенного, природного или экологического характера, аварии в системах электроснабжения, разрушение этих систем, вызванные, в частности, землетрясениями, наводнениями, ураганами и т.д., длительная отсутствие электроэнергии и интернета по независящим от сторон причинам, военные действия, мятеж, забастовка, массовые беспорядки, беспорядки и другие противоправные действия, а также состояние здоровья Исполнителя (и\или ведущего тренинга), наводнение, пожар, антитеррористические операции, землетрясение и другие стихийные бедствия, война, военные действия, неконтролируемые, противоправные действия и акты вандализма третьих лиц, революционные действия, общественные беспорядки, акты или действия органов государственного управления, принятия законных или подзаконных актов, которые прямо влияют на возможность выполнения сторонами условий настоящего договора, и любые другие чрезвычайные обстоятельства.</p>
                  <p>9.2. Стороны договорились, что в случае возникновения обстоятельств, предусмотренных п. 9.1. Договора, срок исполнения обязательств по настоящему договору отодвигается на период времени, в течение которого действовали эти обстоятельства и их последствия.</p>
                  <p>9.3. Если форс-мажорные обстоятельства и их последствия продолжают действовать более шести месяцев, стороны в кратчайшие сроки должны провести переговоры с целью выявления приемлемых для обеих Сторон альтернативных способов исполнения условий настоящего Договора и достижения соответствующих письменных договоренностей.</p>
                  <p><strong>10. ДРУГИЕ ПОЛОЖЕНИЯ</strong></p>
                  <p>10.1. Заказчик гарантирует, что все условия оферты ему понятны и он принимает их безусловно и в полном объеме, без каких-либо условий, изъятий и оговорок. </p>
                  <p>10.2. В случае, который не урегулирован настоящим договором, Стороны обязуются руководствоваться нормами, установленными действующим законодательством Украины. </p>
                  <p>10.3. К данному договору применяется законодательство Украины. </p>
                  <p>10.4. Исполнитель по настоящему Договору является ФОП Кушнир О.А. и/или иное лицо, имеющее право на предоставление таких Информационных услуг. </p>
                  <p>10.5. Стороны дают друг другу согласие на обработку и хранение персональных данных, которые становятся известными им, в связи с заключением настоящего договора, в пределах, в которых это необходимо в соответствии с требованиями действующего законодательства Украины. </p>
                  <p>10.6. В случае, если любое из условий и/или положений настоящего Договора окажется/будет признано недействительным, то это не повлияет на действительность других его условий/положений, а также на Договор и его исполнение в целом, как если бы такое никогда не было частью настоящего Договора.</p>
              </div>
            </div>
        </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <h2>Ваше сообщение успешно отправлено.</h2>
                <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
            </div>
        </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
  </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load Scripts Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Load Scripts End -->

</body>
</html>