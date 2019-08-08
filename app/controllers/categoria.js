angular.module('app.categoria', [])
.controller('Categoria', function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, $timeout, swa, FileUploader){
	$log.info('Load Module -> Categoria');

	 var getCategorias = function() {
  	$http.get(path('gerencial/categorias/getCategorias'))
  	.success(function(retorno){
      $log.info(retorno);
  		if (retorno) {
  			$scope.categorias = retorno;
  		}
  		else {
  			toastr.error('Ocorreu um problema ao carregar as Categorias', 'Ops!');
  		}
  	})
  	.error(function(retorno){
  		toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
  	})
  }

  $scope.addCategoria = function() {
    ngDialog.openConfirm({
      template:'m_adicionarMarca',
      scope: $scope,
      width: '40%',
      showClose: false
    })
    .then(function(dados){
      dados.MAR_Logo = $scope.imagem;
      $http({
        method: 'POST',
        url: path('gerencial/categorias/salvarCategoria'),
        data:  $httpParamSerializerJQLike(dados),
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      })
      .success(function(retorno){
      	$log.info(retorno);
        if (retorno.result == true) {
          swa.success(retorno.msg);
        }
        else {
          swa.error(retorno.msg);
        }
      })
    })
  }

  getCategorias();
});