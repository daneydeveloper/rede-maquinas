angular.module('app.paginas', [])
.controller('Paginas', function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, $timeout, swa, FileUploader){
	$log.info('Load Module -> Paginas');

  $scope.options = {
    language: 'pt_br',
    allowedContent: true,
    entities: false
  };

	var getPaginas = function() {
  	$http.get(path('paginas/getPaginas'))
  	.success(function(retorno){
      $log.info(retorno);
  		if (retorno) {
  			$scope.paginas = retorno;
  		}
  		else {
  			toastr.error('Ocorreu um problema ao carregar as Páginas', 'Ops!');
  		}
  	})
  	.error(function(retorno){
  		toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
  	})
  }

  $scope.salvarPagina = function(dados) {
    $http({
      method: 'POST',
      url: path('paginas/salvar'),
      data:  $httpParamSerializerJQLike(dados),
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    })
    .success(function(retorno){
      $log.info(retorno);
      if (retorno.result == true) {
        swal({
          title: "Pronto!",
          text: retorno.msg,
          type: "success",
        },
        function(){
          window.location = path('paginas/');
        });
      }
    })
  }

  getPaginas();
})

.controller('editarPagina', function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, $timeout, swa, FileUploader){
  $log.info('Load Module -> Editar Pagina');
  $scope.tab = 1;
  $scope.froalaOpt = {
    language:'pt_br',
    placeholderText: 'Conteudo da Página',
    height:400
  }

  $scope.setTab = function(i){
    $scope.tab = i;
  }

  $scope.getPagina = function(id) {
    $log.info(id);
    $http.get(path('paginas/getPaginas/'+id))
    .success(function(retorno){
      $log.info(retorno);
      if (retorno) {
        $scope.pagina = retorno;
      }
      else {
        toastr.error('Ocorreu um problema ao carregar as Páginas', 'Ops!');
      }
    })
    .error(function(retorno){
      toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
    })
  }

  $scope.salvarPagina = function(dados) {
    $http({
      method: 'POST',
      url: path('paginas/update'),
      data:  $httpParamSerializerJQLike(dados),
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    })
    .success(function(retorno){
      $log.info(retorno);
      if (retorno.result == true) {
        swal({
          title: "Pronto!",
          text: retorno.msg,
          type: "success",
        },
        function(){
          window.location = path('paginas/');
        });
      }
    })
  }

});