<div class="main-title" style="background-color: #f2f2f2; ">
   <div class="container">
      <h1 class="main-title__primary">Contato</h1>
      <h3 class="main-title__secondary"></h3>
   </div>
</div>
<div class="breadcrumbs breadcrumbs--page-builder">
   <div class="container">
   </div>
</div>
<div class="master-container">
   <div class="spacer-big"></div>
   <div class="hentry container" role="main">
      <div class="row">
         <div class="col-md-12">
            <div class="panel panel-grid widget widget_text panel-last-child">
               <h3 class="widget-title">Contato</h3>
            </div>
         </div>
      </div>
      <div class="spacer"></div>
      <div class="row">
         <div class="col-md-3">
            <div class="textwidget panel widget">
               <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Teresina/PI: (86) 2107-1500</b><br>
               <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Kennedy/PI: (86) 3133-7200</b><br>
               <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Fortaleza/CE: (85) 4006-2900</b><br>
               <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Barbalha/CE: (88) 3532-2509</b><br>
               <span class="icon-container"><span class="fa fa-phone"></span></span> <b>São Luis/MA: (98) 3276-2000</b><br>
               <span class="icon-container"><span class="fa fa-phone"></span></span> <b>Mossoró/RN: (84) 3317-0180</b><br><br>

               <span class="icon-container"><span class="fa fa-envelope"></span></span> contato@redemaquinas.com.br</a> 
               <br><br>
               <span class="icon-container"><span class="fa fa-home"></span></span> <b>Seg - Sex : 07:30 - 17:30</b><br><br>
            </div>
            <div class="panel widget widget_pt_social_icons panel-last-child">	
               <a class="social-icons__link" href="https://www.facebook.com/redemaquinas/?ref=br_rs" target="_blank"><i class="fa  fa-facebook"></i></a>
               <a class="social-icons__link" href="https://www.instagram.com/redemaquinas/" target="_blank"><i class="fa  fa-instagram"></i></a>
               <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-linkedin"></i></a>
               <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-google-plus"></i></a>
               <a class="social-icons__link" href="https://api.whatsapp.com/send?phone=5585984150536" target="_blank"><i class="fa  fa-whatsapp"></i></a>
            </div>
         </div>
         <div class="col-md-9">
            <div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
               <form name="form" class="wpcf7-form">
                  <div class="row">
                     <div class="col-xs-12  col-sm-4">
                        <span class="wpcf7-form-control-wrap your-name">
                        	<input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Nome*"/>
                        </span><br/>
                        <span class="wpcf7-form-control-wrap your-email">
                        	<input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="E-mail*"/>
                        </span><br/>
                        <span class="wpcf7-form-control-wrap your-subject">
                        	<input ng-model="dados.tmp.assunto" ng-required="true" ng-disabled="load" type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Assunto*"/>
                        </span>
                        <span class="wpcf7-form-control-wrap your-subject">
                        	<select class="wpcf7-text" ng-model="dados.EMP_Key" ng-required="true" ng-disabled="load">
                        		<option disabled="true">Unidade Mais Próxima</option>
                        		<option value="58l_7EH-D0_4LG1Tpa8ynq7ge165lUMrOPjACExz824">Fortaleza</option>
                        		<option value="uIfM9_-eEtaigB-APLNBH4BrGWWWg_iPgmNRpG70aYk">Barbalha</option>
                        		<option value="j_J0PDPqa5lH1Fts7r8X1H6wLr8h7muGXQ55SD9-nuk">Kennedy</option>
                        		<option value="wvdZ0dbg_tgTwpMD3QkQb5fiBx4MYFbdWMbRrLim9zc">Mossoró</option>
                        		<option value="fxH1EJOeE1f5hpWHXj8dbRQbhcGQlgRRxfoJJi2W5Fk">Petrolina</option>
                        		<option value="DQ-MiVKOTv2l9la5ER4ynmTkzCCHlKLOWSoBoFSwKDs">São Luis</option>
                        		<option value="8eOIOEsMx3wunlzPOfpbUCetevvXkacXkntb1IlSVoM">Teresina</option>
                        	</select>
                        </span>
                     </div>
                     <div class="col-xs-12  col-sm-8">
                        <span class="wpcf7-form-control-wrap your-message">
                        	<textarea ng-model="dados.tmp.mensagem" ng-required="true" ng-disabled="load" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Menssagem*"></textarea>
                        </span><br/>
                        <div class="right pull-right">
                           <div class="form-group">
		                        <button class="btn hvr-bounce-in submit btn-color text-uppercase" id="button_submit" ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load" style="background-color: red; color: white;">
		                           <b ng-if="load">Enviando...</b>
		                           <b ng-if="!load">Enviar</b>
		                        </button>
		                     </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="spacer"></div>
<script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>	
   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
   <script type="text/javascript">
      angular.module('app', ['ngMask', 'ngDialog'])
      .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
          $log.warn($location.host());
          $scope.load = false;
          $scope.dados = {};
          var host = 'http://crm2.marketingmidia9.com.br'
          var registra_acesso = function() {
              $http.get(host + '/api/registraAcesso/ovBJi_O0lKrPJpVEX2dNhVprdX-ThRVtGRXkuNbFBPQ')
              .success(function(result){
                  $log.info(result);
                  $scope.request = result.data;
              });
      
              $http.get('http://ipv4.myexternalip.com/json')
              .success(function(result) { 
                $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip='+result.ip+'&format=json')
                .success(function(data){
                    /*$log.info(data);*/
                    $scope.meta = data;
                })
              });
          }
      
          $scope.enviarLead = function(dados, tmp = null) {
            $scope.load = true;
            /*dados.EMP_Key = $scope.request.EMP_Key;*/
            /*dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';*/
            dados.LE_CodigoTipo = 9996;
            dados.LE_CodigoProduto = 663;
            dados.LE_Descricao = "Assunto: "+dados.tmp.assunto+"\nMensagem: "+dados.tmp.mensagem;
            delete dados.tmp;
            dados.LE_MetaDado = $scope.meta;
            $log.info(dados);
      
            $http({
              method: 'POST',
              url: host + '/api2/registraLead',
              data:  $httpParamSerializerJQLike(dados),
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              }
            })
           .success(function(retorno){
              $scope.load = false;
              if (!retorno.error) {
                swal({
                  title: "Obrigado!",
                  text: "Suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve",
                  type: "success",
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false
                },
                function(){
                 window.location.href = "";
                });
              }
              else {
                swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
              }
            })
            .error(function(retorno){
              $scope.load = false;
              $log.error(retorno);
            });
           
        }
      
          registra_acesso();
      });
   </script>   