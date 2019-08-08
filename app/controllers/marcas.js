angular.module('app.marcas', ['app.factories', 'ngDialog'])
.controller('Marcas', function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, $timeout, swa, FileUploader){
	$log.info('Load Module -> Marcas');
  $scope.disabled = false;
  $scope.edit = true;

  var getMarcas = function() {
  	$http.get(path('gerencial/marcas/getMarcas'))
  	.success(function(retorno){
      $log.info(retorno);
  		if (retorno) {
  			$scope.marcas = retorno;
  		}
  		else {
  			toastr.error('Ocorreu um problema ao carregar as Marcas', 'Ops!');
  		}
  	})
  	.error(function(retorno){
  		toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
  	})
  }

  $scope.addMarca = function() {
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
        url: path('gerencial/marcas/salvarMarca'),
        data:  $httpParamSerializerJQLike(dados),
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      })
      .success(function(retorno){
        if (retorno.result == true) {
          swa.success('Marca adicionada com Sucesso');
        }
        else {
          toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
        }
      })
    })
  }

  var uploader = $scope.uploader = new FileUploader({
    url:path('/gerencial/marcas/upload'),
    queueLimit: 1
  });

  /*Uploader Functions*/
  uploader.onWhenAddingFileFailed = function(item /*{File|FileLikeObject}*/ , filter, options) {
    console.info('onWhenAddingFileFailed', item, filter, options);
  };
  uploader.onAfterAddingFile = function(fileItem) {
    console.info('onAfterAddingFile', fileItem);
  };
  uploader.onAfterAddingAll = function(addedFileItems) {
    console.info('onAfterAddingAll', addedFileItems);
  };
  uploader.onBeforeUploadItem = function(item) {
    console.info('onBeforeUploadItem', item);
  };
  uploader.onProgressItem = function(fileItem, progress) {
    console.info('onProgressItem', fileItem, progress);
  };
  uploader.onProgressAll = function(progress) {
    console.info('onProgressAll', progress);
    $scope.flag = 10
  };
  uploader.onSuccessItem = function(fileItem, response, status, headers) {
    $log.info(response);
    $scope.imagem = response.img;
  };
  uploader.onErrorItem = function(fileItem, response, status, headers) {
    console.info('onErrorItem', fileItem, response, status, headers);
  };
  uploader.onCancelItem = function(fileItem, response, status, headers) {
    console.info('onCancelItem', fileItem, response, status, headers);
    $scope.flag = 0;
  };
  uploader.onCompleteItem = function(fileItem, response, status, headers) {
    $log.info('onCompleteItem');
  };
  uploader.cancelAll = function() {
    uploader.clearQueue();
    $scope.flag = 0;
  }
  uploader.onCompleteAll = function() {
    $log.info($scope.images);
  };

  getMarcas();
})