<div class="main-title" style="background-color: #f2f2f2">
   <div class="container">
      <h1 class="main-title__primary">Trabalhe Conosco</h1>
      <h3 class="main-title__secondary"></h3>
   </div>
</div>
<div class="breadcrumbs breadcrumbs--page-builder">
   <div class="container">
   </div>
</div>
<div class="spacer-big"></div>
<div class="master-container">
   <div class="hentry container" role="main">
      <div class="spacer"></div>
      <div class="panel-grid">
         <h3 class="widget-title">Entre em Contato Conosco</h3>
      </div>
      <div class="spacer"></div>
      <div class="row">
         <div class="col-md-12">
            <div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
               <form name="form" class="wpcf7-form">
                  <div class="row">
                     <div class="col-xs-12  col-sm-4">
                        <span  class="wpcf7-form-control-wrap your-name">
                        	<input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" type="text" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Nome Completo*"/>
                        </span><br/>
                        <span class="wpcf7-form-control-wrap your-email">
                        	<input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="E-mail*"/>
                        </span><br/>
                        <span class="wpcf7-form-control-wrap your-subject">
                        	<input ng-model="dados.LE_Telefone" ng-required="true" ng-disabled="load" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Telefone*" name="telefone" id="telefone" minlength="11" maxlength="15"/>
                        </span>
                        <span class="wpcf7-form-control-wrap your-subject">
                        	<select class="wpcf7-text">
                        		<option>Unidade Mais Próxima</option>
                        		<option>Fortaleza</option>
                        		<option>Barbalha</option>
                        		<option>Kennedy</option>
                        		<option>Mossoró</option>
                        		<option>Petrolina</option>
                        		<option>São Luis</option>
                        		<option>Teresina</option>
                        	</select>
                        </span>
                     </div>
                     <div class="col-xs-12  col-sm-8">
                        <span class="wpcf7-form-control-wrap your-message">
                        <textarea ng-model="dados.LE_Descricao" ng-required="true" ng-disabled="load" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Menssagem*"></textarea>
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
                  <div class="wpcf7-response-output wpcf7-display-none"></div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
   <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>	
   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
   <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
   <script type="text/javascript">
	   /* Máscaras ER */
	   function mascara(o,f){
	       v_obj=o
	       v_fun=f
	       setTimeout("execmascara()",1)
	   }
	   function execmascara(){
	       v_obj.value=v_fun(v_obj.value)
	   }
	   function mtel(v){
	       v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
	       v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
	       v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
	       return v;
	   }
	   function id( el ){
	     return document.getElementById( el );
	   }
	   window.onload = function(){
	     id('telefone').onkeyup = function(){
	       mascara( this, mtel );
	     }
	   }
	</script>
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
            dados.LE_CodigoProduto = 667;
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