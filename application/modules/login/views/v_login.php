<!DOCTYPE html>
<html>
   <head lang="pt-BR">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Painel Administrativo | Midia9 Group</title>
      <link href="<?=base_url('assets')?>/img/favicon.144x144.html" rel="apple-touch-icon" type="image/png" sizes="144x144">
      <link href="<?=base_url('assets')?>/img/favicon.114x114.html" rel="apple-touch-icon" type="image/png" sizes="114x114">
      <link href="<?=base_url('assets')?>/img/favicon.72x72.html" rel="apple-touch-icon" type="image/png" sizes="72x72">
      <link href="<?=base_url('assets')?>/img/favicon.57x57.html" rel="apple-touch-icon" type="image/png">
      <link href="<?=base_url('assets')?>/img/favicon.html" rel="icon" type="image/png">
      <link href="<?=base_url('assets')?>/img/favicon-2.html" rel="shortcut icon">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/pages/login.min.css">
      <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/font-awesome/font-awesome.min.css">
      <link rel="stylesheet" href="<?=base_url('assets')?>/css/lib/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="<?=base_url('assets')?>/js/lib/toastr/toastr.css">
      <link rel="stylesheet" href="<?=base_url('assets')?>/css/main.css">
   </head>
   <body ng-app="app.login">
      <div class="page-center" style="background-image: url(http://crm2.marketingmidia9.com.br/assets/image/background.png);background-repeat: no-repeat; background-position: center center; background-attachment: fixed; background-size: cover;">
         <div class="page-center-in" ng-controller="Login">
            <div class="container-fluid">
               <form name="form" class="sign-box">
                    <img src="<?=base_url('assets')?>/img/redemaquinas.png" style="max-width: 286px;margin-bottom: 2em;">
                    <?=(@$_GET['reason']=='sessionof')?$this->template->alert('Sessão expirada, faça login novamente.','warning'):null;?>
                    <div ng-if="retorno.result == false" class="alert alert-danger alert-fill alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{retorno.msg}}
                    </div>
                    <div ng-if="retorno.result == true" class="alert alert-success alert-fill alert-close alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                        <b>Ops! </b>{{retorno.msg}}
                    </div>
                    <div class="form-group">
                        <input type="email" ng-model="dados.email" ng-required="true" ng-disabled="load" class="form-control" placeholder="E-Mail"/>
                    </div>
                    <div class="form-group">
                        <input type="password" ng-model="dados.senha" ng-required="true" ng-disabled="load" class="form-control" placeholder="Senha"/>
                    </div>
                    <!-- <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in" ng-model="dados.ContinuarConectado" ng-true-value="1" ng-false-value="0" ng-checked="false"/>
                            <label for="signed-in">Continuar Conectado</label>
                        </div>
                        <div class="float-right reset">
                            <a href="<?=base_url('assets')?>/reset-password.html">Resetar Senha</a>
                        </div>
                    </div> -->
                    <button ng-disabled="form.$invalid || load" ng-click="Login(dados)" type="submit" class="btn btn-rounded btn-block btn-warning">Entrar</button>
                </form>
            </div>
         </div>
      </div>
      <!--.page-center-->
      <script src="<?=base_url('assets')?>/js/lib/jquery/jquery.min.js"></script>
      <script src="<?=base_url('assets')?>/js/lib/tether/tether.min.js"></script>
      <script src="<?=base_url('assets')?>/js/lib/bootstrap/bootstrap.min.js"></script>
      <script src="<?=base_url('assets')?>/js/plugins.js"></script>
      <script src="<?=base_url('assets')?>/js/lib/match-height/jquery.matchHeight.min.js"></script>
      <script src="<?=base_url('assets')?>/js/lib/toastr/toastr.min.js"></script>
      <!-- BEGIN ANGULAR SCRIPTS -->
      <script type="text/javascript" src="<?=base_url('assets/angular')?>/angular.min.js"></script>
      <script type="text/javascript" src="<?=base_url('assets/angular')?>/ngDialog/ngDialog.min.js"></script>
      <script type="text/javascript" src="<?=base_url('app')?>/factories.js"></script>
      <script type="text/javascript" src="<?=base_url('app/controllers')?>/login.js"></script>
      <!-- END ANGULAR SCRIPTS -->
      <script>
         $(function() {
             $('.page-center').matchHeight({
                 target: $('html')
             });
         
             $(window).resize(function(){
                 setTimeout(function(){
                     $('.page-center').matchHeight({ remove: true });
                     $('.page-center').matchHeight({
                         target: $('html')
                     });
                 },100);
             });
         });
      </script>
      <script src="<?=base_url('assets')?>/js/app.js"></script>
   </body>
</html>