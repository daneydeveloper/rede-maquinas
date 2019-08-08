<div class="main-title">
   <div class="container">
      <h1 class="main-title__primary">Equipamento</h1>
      <h3 class="main-title__secondary"></h3>
   </div>
</div>
<div class="breadcrumbs ">
   <div class="container">
   </div>
</div>
<div class="master-container">
   <div class="container">
      <div class="row">
         <div class="col-xs-12  col-md-9  col-md-push-3" role="main">
            <div class="product product-type-simple">
               <div class="images">
                  <a href="<?=$path?><?=$produto->IMG_Imagem?>" class="woocommerce-main-image zoom" title="<?=$produto->PRO_Nome ?>" data-rel="prettyPhoto">
                  	<img width="300" height="300" src="<?=$path?><?=$produto->IMG_Imagem?>" class="attachment-shop_single wp-post-image" alt="<?=$produto->PRO_Nome ?>" title="<?=$produto->PRO_Nome ?>"/>
                  </a>
               </div>
               <div class="summary entry-summary">
                  <h1 class="product_title entry-title"><?=$produto->PRO_Nome ?></h1>
                  <div class="short-description">
                     <div class="woocommerce-tabs">
                        <div class="panel entry-content" id="tab-description">
                           <h5>Preecha o formulário e solicite agora mesmo um Orçamento</h5>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="wpcf7" id="wpcf7-f5-o1" dir="ltr">
                           	<div ng-app="app">
                     				<div ng-controller="Lead">
		                              <form name="form" class="wpcf7-form" novalidate="novalidate">
		                              	<input type="hidden" ng-init="dados.LE_CodigoProduto=<?=$produto->PRO_CodigoProduto ?>">
		                                 <div class="row">
		                                    <div class="col-xs-12  col-sm-12">
		                                       <span class="wpcf7-form-control-wrap your-name">
		                                       	<input ng-model="dados.LE_Nome" ng-required="true" ng-disabled="load" type="text" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Nome*"/>
		                                       </span><br/>
		                                       <span class="wpcf7-form-control-wrap your-email">
		                                       	<input ng-model="dados.LE_Email" ng-required="true" ng-disabled="load" type="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="E-mail*"/>
		                                       </span><br/>
		                                       <span class="wpcf7-form-control-wrap your-subject">
		                                       	<input ng-model="dados.LE_Telefone" ng-required="true" ng-disabled="load" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Telefone*" name="telefone" id="telefone" minlength="11" maxlength="15"/>
		                                       </span>
		                                       <span class="wpcf7-form-control-wrap your-subject">
							                        	<select class="wpcf7-text" ng-model="dados.EMP_Key" ng-required="true" ng-disabled="load">
							                        		<option disabled="">Unidade Mais Próxima</option>
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
		                                    <div class="col-xs-12  col-sm-12">
		                                       <span class="wpcf7-form-control-wrap your-message" >
		                                       	<textarea ng-model="dados.LE_Descricao" ng-required="true" ng-disabled="load" style="max-height: 110px;" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Menssagem"></textarea>
		                                       </span><br/>
		                                       <div class="right">
			                                       <div class="form-group">
									                        <button class="btn hvr-bounce-in submit btn-color text-uppercase" id="button_submit" ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load" style="background-color: #D41E25;color: white; border-radius: 0px;">
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
                  </div>
               </div>
               <div class="woocommerce-tabs">
                  <div class="panel entry-content" id="tab-description">
                     <h2>Descrição</h2>
                     <p>
                        <?=$produto->PRO_Descricao ?>
                     </p>
                  </div>
               </div>
               <div class="related products">
							<h2>Produtos Relacionados</h2>
							<ul class="products">
								<?php foreach ($relacionados as $key): ?>
			               	<li class="product border-categoria ">
			                     <a href="<?=base_url('produto')?>/<?=$key->PRO_Nome?>">
			                        <img width="150" height="150" src="<?=$path?>/<?=$key->IMG_Imagem?>" alt="Hand Tools" />
			                     </a>
			                     <div class="padding-categoria">
			                        <h3 class="title-categoria text-center"><?=$key->PRO_Nome ?></h3>
			                     </div>
			                     <a href="<?=base_url('produto')?>/<?=$key->PRO_Nome?>" class="button add_to_cart_button" style="margin-bottom: 0px !important;">Fazer cotação</a>
			                  </li>
			               <?php endforeach ?>
							</ul>
						</div>
            </div>
         </div>
         <div class="col-xs-12  col-md-3  col-md-pull-9">
            <div class="sidebar shop-sidebar">
               <div class="widget woocommerce widget_product_search push-down-30">
                  <h4 class="sidebar__headings">Buscar Equipamentos</h4>
                  <form action="<?=base_url('buscar')?>" method="get" id="searchform" class="woocommerce-product-search">
                     <div>
                         <input type="text" name="produto" value="<?=@$_GET['produto']?>" id="s" class="form-control" placeholder="Buscar equipamentos...">
                        <input type="submit" id="searchsubmit" value="Buscar"/>
                     </div>
                  </form>
               </div>
               <div class="widget woocommerce widget_product_categories push-down-30">
                  <h4 class="sidebar__headings">Categorias</h4>
                  <ul class="product-categories">
                     <?php foreach ($categorias as $key): ?>
                     	<li><a href="<?=base_url('equipamentos')?>/?categoria=<?=$key->CAT_Nome?>"><?=$key->CAT_Nome ?></a></li>
                     <?php endforeach ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="spacer-big"></div>
<div class="spacer-big"></div>
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
            dados.LE_CodigoTipo = 2;
            /*dados.LE_CodigoProduto = 459;*/
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
                  text: "suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve",
                  type: "success",
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false
                },
                function(){
                 window.location.href = "https://www.facebook.com/ExtremaJLR/";
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