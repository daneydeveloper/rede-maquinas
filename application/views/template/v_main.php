<!DOCTYPE html>
<html >
<head lang="pt-BR">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Painel Administrativo</title>

    <link href="<?=base_url('assets')?>/img/favicon.144x144.html" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="<?=base_url('assets')?>/img/favicon.114x114.html" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="<?=base_url('assets')?>/img/favicon.72x72.html" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="<?=base_url('assets')?>/img/favicon.57x57.html" rel="apple-touch-icon" type="image/png">
    <link href="<?=base_url('assets')?>/img/favicon.html" rel="icon" type="image/png">
    <link href="<?=base_url('assets')?>/img/favicon-2.html" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url('assets')?>/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?=base_url('assets')?>/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/lobipanel/lobipanel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/vendor/lobipanel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/jqueryui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/vendor/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/vendor/select2.min.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/js/lib/toastr/toastr.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/bootstrap-sweetalert/sweetalert.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/vendor/sweet-alert-animations.min.css">

    <!-- BEGIN ANGULAR -->
    <link rel="stylesheet" href="<?=base_url('assets/angular')?>/angular-datepicker/angular-datepicker.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/angular')?>/angular-blockui/angular-block-ui.css">
    <link rel="stylesheet" href="<?=base_url('assets/angular')?>/angular-tooltips/angular-tooltips.css">
    <link rel="stylesheet" href="<?=base_url('assets/angular')?>/ngDialog/ngDialog.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/angular')?>/angular-file-upload/ng-img-crop.css">
    <link rel="stylesheet" href="<?=base_url('assets/angular')?>/pm-image-editor/pm-image-editor.scss">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!-- END ANGULAR -->

    <link rel="stylesheet" href="<?=base_url('assets')?>/css/main.css">
    <link rel="stylesheet" href="<?=base_url('assets')?>/css/midia9.css">
</head>
<body class="with-side-menu dark-theme" ng-app="app">

    <?=$header?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?=$menu?>

    <?=$content?>

<script src="<?=base_url('assets')?>/js/lib/jquery/jquery.min.js"></script>
<script src="<?=base_url('assets')?>/js/lib/tether/tether.min.js"></script>
<script src="<?=base_url('assets')?>/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?=base_url('assets')?>/js/plugins.js"></script>

<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/select2/select2.full.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/lobipanel/lobipanel.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/match-height/jquery.matchHeight.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/loader.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/jquery-tag-editor/jquery.caret.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/jquery-tag-editor/jquery.tag-editor.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/toastr/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/bootstrap-maxlength/bootstrap-maxlength.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/bootstrap-maxlength/bootstrap-maxlength-init.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/lib/html-sortable/html.sortable.js"></script>
<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js"></script>
<script type="text/javascript" src="<?=base_url('assets')?>/js/app.js"></script>

<!-- BEGIN ANGULAR -->
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/ngDialog/ngDialog.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/ngMask/ngMask.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-datepicker/angular-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-locale/angular-locale_pt-br.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/ui-boostrap/ui-bootstrap-2.5.0.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-select2/select2.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-blockui/angular-block-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-tooltips/angular-tooltips.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-file-upload/ng-file-upload-shim.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-file-upload/ng-file-upload-all.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-file-upload/ng-img-crop.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-file-upload/angular-file-upload.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-timeago/angular-timeago.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/pm-image-editor/pm-image-editor.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/ngAngularText/ui-ace.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular')?>/angular-ckeditor/angular-ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular/bootstrap/src/paging')?>/paging.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular/bootstrap/src/tabindex')?>/tabindex.js"></script>
<script type="text/javascript" src="<?=base_url('assets/angular/bootstrap/src/pagination')?>/pagination.js"></script>
<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.js"></script>
<script type="text/javascript" src="<?=base_url('app')?>/app.js"></script>
<script type="text/javascript" src="<?=base_url('app')?>/factories.js"></script>
<script type="text/javascript" src="<?=base_url('app')?>/directives.js"></script>
<script type="text/javascript" src="<?=base_url('app/controllers')?>/marcas.js"></script>
<script type="text/javascript" src="<?=base_url('app/controllers')?>/categoria.js"></script>
<script type="text/javascript" src="<?=base_url('app/controllers')?>/produtos.js"></script>
<script type="text/javascript" src="<?=base_url('app/controllers')?>/paginas.js"></script>
<script type="text/javascript" src="<?=base_url('app/controllers')?>/global.js"></script>
<!-- END ANGULAR -->
</body>
</html>