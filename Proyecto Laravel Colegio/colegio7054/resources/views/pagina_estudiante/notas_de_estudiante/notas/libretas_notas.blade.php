@extends('adminlte::page')

@section('title', 'Gestión de Alumnos')

@section('content_header')
    <h1>otas en general anual  estudiantil </h1>
@stop

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">

        <title>Buscar datos de personas por DNI - DNI Perú</title>
    <meta content='Busca todos los datos como nombres, apellidos, dígito de verificación de DNI y RUC 10 de personas del Perú.' name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="https://eldni.com/css/jquery-ui.css"> -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://eldni.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://eldni.com/2020/amp-spectre/spectre.min.css?v=27" >
    <link rel="stylesheet" type="text/css" href="https://eldni.com/2020/css/add-css.css?v=27" >
    <!-- <link rel="stylesheet" type="text/css" href="https://eldni.com/2020/css/adcss.css?v=27" > -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

            <style>
            .adcenter { width: 300px; height: 100px; }
            @media(min-width: 840px) { .adcenter { width: 300px; height: 250px; } }
        </style>
        <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script>
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
        googletag.defineSlot('/22247651397/cuadrado-1', [[300, 250], [320, 480], [300, 600], [336, 280]], 'div-gpt-ad-1610988368290-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
    </script>
    <style type="text/css">
        /* .no_click {
            position: relative;
            cursor: not-allowed;
        }
        .no_click::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
        }
        .no_click .btn {
            -webkit-filter: opacity(.7);
            filter: opacity(.7);
        } */
        /*BUTTON CLEAR INPUT*/
        .input-clear {
            position: relative;
        }
        .input-clear i {
            background: #FFF;
            cursor: pointer;
            position: absolute;
            top: 2px;
            right: 2px;
            display: block;
            padding: 8px;
            border-radius: 50%;
            line-height: 0;
        }
        /* AD */
        .ad {
            line-height: 0;
            text-align: center;
        }
        .div_ad {
            display: inline-block;

        }
        #ad_1 {
            background: #666;
        }
        #title-center-h2::before {
            content: "☝️ "
        }
        @media(min-width: 840px) {
            #title-center-h2::before {
                content: "👈 "
            }
        }
    </style>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <header class="bg-primary">
        <div class="navbar container">
            <div class="navbar-section">
                <a href="https://eldni.com" class="navbar-brand col-mx-auto" title="Inicio de buscador">
                    <!-- <h1><b>eldni.com</b> 🇵🇪</h1> -->
                    <h1><img alt="Buscar DNI" src="https://eldni.com/2020/img/el-dni-logo.svg"></h1>
                </a>
                <!-- <a href="https://github.com/picturepan2/spectre" class="btn btn-link">Noticias</a> -->
            </div>
            <!--<nav class="nav-menu col-6 col-md-12">
                <ul class="tab tab-block ">
                    <li  class="tab-item active" >
                        <a href="https://eldni.com/pe/buscar-datos-por-dni">Buscar Datos por DNI</a>
                    </li>
                    <li  class="tab-item" >
                        <a href="https://eldni.com/pe/buscar-por-nombres">Buscar DNI por Nombres</a>
                    </li>
                    <li  class="tab-item" >
                        <a href="https://eldni.com/pe/obtener-digito-verificador-del-dni">Obtener dígito verificador</a>
                    </li>
                </ul>
            </nav>
            <div class="btn-noticias">
                <a href="/" class="btn" target="_blank"><span>Consultas</span> <img alt="Flecha Derecha" src="https://eldni.com/2020/img/forward.svg"></a>
            </div>-->
        </div>
    </header>
    <!-- <aside class="ad" id="ad_1">
        <div class="div_ad">
            <style>
                .adheader { width: 320px; height: 50px; margin: 5px 0 5px 0;}
                @media(min-width: 460px) { .adheader { width: 468px; height: 60px; } }
                @media(min-width: 720px) { .adheader { width: 728px; height: 90px; } }
            </style>
            <ins class="adsbygoogle adheader"
                 style="display:inline-block"
                 data-ad-client="ca-pub-8995586921396350"
                 data-ad-slot="4927582454"></ins>
             <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </aside> -->
    <main class="container container-padding clearfix">
    <section class="columns" id="dni-nombres">
        <div id="column-left" class="column column-np">
            <div class="column column-np col-12">
                <div class="card text-center">
                    <div class="card-header"><img src="https://eldni.com/2020/img/dni-to-name.svg" width="160"></div>
                    <div class="card-body">
                        <h3>Buscar nombres por DNI</h3>
                        <div class="small">
                            <small>Ingresa el DNI para saber los nombres</small>
                        </div>
                    </div>
                    <form autocomplete="on" action="https://eldni.com/pe/buscar-datos-por-dni" id="buscar-datos-por-dni" method="post" enctype="multipart/form-data" onsubmit="disableButton('#btn-buscar-datos-por-dni')">
                        <input type="hidden" name="_token" value="5JJOsS3hIrhZmYQSakVcA3Xfi3BmxoEtZmWhRoSY">
                        <div class="form-group input-clear" id="input-min">
                            <input class="form-input" type="tel" maxlength="8" name="dni" id="dni" placeholder="Número de DNI"  oninput="writingInput(this)">

                            <i title="Borrar"  style="display:none;"  onclick="clearInput(this)">
                                <svg fill="#888888" height="16px" width="16px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55 c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55 c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505 c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55 l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719 c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"></path> </g></svg>
                            </i>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" id="btn-buscar-datos-por-dni" form="buscar-datos-por-dni">Buscar datos</button>
                        </div>
                                            </form>
                </div>
            </div>
        </div>
        <div id="column-center" class="column column-np">
            <div class="column col-md-12">
                                                                <h2 class="text-center" id="title-center-h2">Encuentra los nombres y apellidos por su DNI.</h2>
                        <p class="text-center">En la siguiente consulta obtendrás los datos de un peruano como:</p>
                        <ul>
                            <li>Nombres y apellidos completos.</li>
                            <li>RUC 10 con o sin negocio de la persona.</li>
                        </ul>
                        <!-- adsense comment 2 -->
                                </div>
        </div>
    </section>
</main>
    <footer class="bg-primary">
        <div class="container">
            <div class="columns">
                <div class="column col-12 col-mx-auto text-center">
                    Eldni.com © 2018-2024
                </div>
            </div>
        </div>
    </footer>
    <!-- Disable al hacer click -->
    <script>
        function disableButton(id) {
            //INFO disable button send
            document.querySelector(id).textContent = "🔍 Buscando...";
            document.querySelector(id).disabled = true;
        }
        function writingInput(_this) {
            if(_this.value == "") {
                _this.parentElement.getElementsByTagName('i')[0].style.display = "none";
                console.log(`❌ Vacio`);
            } else {
                _this.parentElement.getElementsByTagName('i')[0].style.display = "block";
                //console.log(`Input value: "${_this.value}"`);
            }
        }
        // document.querySelector('.input-clear input').addEventListener('input', (e) => {
        //     if(e.currentTarget.value == "") {
        //         e.currentTarget.parentElement.getElementsByTagName('i')[0].style.display = "none";
        //         console.log(`❌ Vacio`);
        //     } else {
        //         e.currentTarget.parentElement.getElementsByTagName('i')[0].style.display = "block";
        //         console.log(`Input value: "${e.currentTarget.value}"`);
        //     }
        // });
        function clearInput(_this) {
            _this.parentElement.getElementsByTagName('input')[0].value = "";
            _this.parentElement.getElementsByTagName('input')[0].focus()
            _this.style.display = "none";
        }
    </script>
    <!-- Habilitar los botones al retroceso -->
    <script>
        window.addEventListener("pageshow", () => {
                            document.querySelector('#btn-buscar-datos-por-dni').disabled = false;
                document.querySelector('#btn-buscar-datos-por-dni').textContent = "Buscar datos";
                    });
    </script>
    <!-- adsenc -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        //popup
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8995586921396350",
            enable_page_level_ads: true
        });
    </script>
</body>
</html>

@stop
