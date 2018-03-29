@extends('acr_tasarla.tasarla')
@section('header')
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300|Lobster|Architects+Daughter|Roboto|Oswald|Montserrat|Lora|PT+Sans|Ubuntu|Roboto+Slab|Fjalla+One|Indie+Flower|Playfair+Display|Poiret+One|Dosis|Oxygen|Lobster|Play|Shadows+Into+Light|Pacifico|Dancing+Script|Kaushan+Script|Gloria+Hallelujah|Black+Ops+One|Lobster+Two|Satisfy|Pontano+Sans|Domine|Russo+One|Handlee|Courgette|Special+Elite|Amaranth|Vidaloka'
          rel='stylesheet' type='text/css'>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="/acr/tasarla/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/acr/tasarla/images/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="/acr/tasarla/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/acr/tasarla/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/acr/tasarla/images/favicons/manifest.json">
    <link rel="mask-icon" href="/acr/tasarla/images/favicons/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor">
    <meta name="theme-color">

    <!-- CSS Start -->
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/ng-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/style.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" type="text/css" href="/acr/tasarla/css/angular-material.css">

@stop
@section('acr_tasarla')
    @include('Acr_tasarlav::tasarim_div')
    <div id="qrcode"></div>
    <div id="wordcloud"></div>
    <div class="css_gen"></div>
    <div class="svgElements"></div>
@stop
@section('footer')
    <script src="/acr/tasarla/assets/angular.js"></script>

    <script src="/acr/tasarla/assets/angular-animate.js"></script>
    <script src="/acr/tasarla/assets/angular-aria.js"></script>

    <script src="/acr/tasarla/assets/angular-material.js"></script>

    <script src="/acr/tasarla/assets/ng-file-upload/angular-file-upload.js"></script>
    <script src="/acr/tasarla/assets/ng-file-upload/angular-file-upload-shim.js"></script>

    <script type="text/javascript" src="/acr/tasarla/assets/qr-code/raphael-2.1.0-min.js"></script>
    <script type="text/javascript" src="/acr/tasarla/assets/qr-code/qrcodesvg.js"></script>

    <script src='/acr/tasarla/assets/word-cloud/d3.v3.min.js'></script>
    <script src='/acr/tasarla/assets/word-cloud/d3.layout.cloud.js'></script>

    <script src="/acr/tasarla/assets/angular-sanitize.min.js"></script>
    <script src="/acr/tasarla/assets/ng-scrollbar.min.js"></script>

    <script src="/acr/tasarla/assets/fabric/fabric.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabric.min.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabricCanvas.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabricConstants.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabricDirective.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabricDirtyStatus.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabricUtilities.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabricWindow.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabric.curvedText.js"></script>
    <script src="/acr/tasarla/assets/fabric/fabric.customiseControls.js"></script>

    <script src="/acr/tasarla/assets/colorpicker/bootstrap-colorpicker-module.js"></script>
    <script src="/acr/tasarla/js/application.js"></script>

    <script src="/acr/tasarla/assets/file/fileSaver.js"></script>
    <script src="/acr/tasarla/assets/pdf/jspdf.debug.js"></script>
@stop