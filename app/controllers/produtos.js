angular.module('app.produtos', [])
.controller('Produtos', function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, $timeout, swa, FileUploader){
	$log.info('Load Module -> Produtos');


	var getProdutos = function() {
  	$http.get(path('gerencial/produtos/getProdutos'))
  	.success(function(retorno){
      $log.info(retorno);
  		if (retorno) {
  			$scope.produtos = retorno;
        $scope.viewby = 10;
        $scope.totalItems = $scope.produtos.length;
        $scope.currentPage = 1;
        $scope.itemsPerPage = $scope.viewby;
        $scope.maxSize = 5;
  		}
  		else {
  			toastr.error('Ocorreu um problema ao carregar os Produtos', 'Ops!');
  		}
  	})
  	.error(function(retorno){
  		toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
  	})
  }

  $scope.setPage = function (pageNo) {
    $scope.currentPage = pageNo;
  };

  $scope.pageChanged = function() {
    console.log('Page changed to: ' + $scope.currentPage);
  };

  $scope.setItemsPerPage = function(num) {
    $scope.itemsPerPage = num;
    $scope.currentPage = 1; //reset to first page
  }

  var getMarcas = function() {
  	$http.get(path('json/getMarcas'))
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

  $scope.buscarCategoria = function(id){
  	$http.get(path('json/buscarCategorias/'+id))
  	.success(function(retorno){
  		$scope.categorias = retorno;
  	})
  	.error(function(retorno){
  		toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
  	})
  }

  $scope.salvarProduto = function(dados){
  	$http({
      method: 'POST',
      url: path('gerencial/produtos/salvarProduto'),
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
          text: 'Estamos quase lá, os principais dados do seu produto já foram cadastrado, falta apenas as imagens.',
          type: "success",
        },
        function(){
          window.location = path('gerencial/produtos/galeria/');
        });
      }
    })
  }

  getMarcas();
  getProdutos();
})

.controller('Galeria', function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, $timeout, swa, FileUploader){
	$log.info('Load Module -> Galeria');
	$scope.imagem = [];
	var imagens = {};
	var uploader = $scope.uploader = new FileUploader({
    url:path('/gerencial/produtos/upload'),
    queueLimit: 6
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
    $scope.imagem.push(response.img);
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
    $log.info($scope.imagem);
  };

  $scope.salvarGaleria = function(){
  	imagens.images = $scope.imagem;
  	$http({
      method: 'POST',
      url: path('gerencial/produtos/salvarGaleria'),
      data:  $httpParamSerializerJQLike(imagens),
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    })
    .success(function(retorno){
    	$log.info(retorno);
      if (retorno.result != false) {
        swal({
          title: "Pronto!",
          text: retorno.msg,
          type: "success",
        },
        function(){
          window.location = path('gerencial/produtos/');
        });
      }
    })
  }
})

.controller('EditarProdutos',function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, swa){
  $log.info('Load Module -> EditarProdutos');

  $scope.atualizarProduto = function(dados){
    $http({
      method: 'POST',
      url: path('gerencial/produtos/editar'),
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
          window.location = path('gerencial/produtos/');
        });
      }
    })
  }

  var getMarcas = function() {
    $http.get(path('json/getMarcas'))
    .success(function(retorno){
      $log.info('Run -> getMarcas');
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

  $scope.buscarCategoria = function(id){
    $http.get(path('json/buscarCategorias/'+id))
    .success(function(retorno){
      $log.info('Run -> buscarCategoria', retorno);
      $scope.categorias = retorno;
    })
    .error(function(retorno){
      toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
    })
  }

  $scope.getProdutos = function(id){
    $http.get(path('gerencial/produtos/getProdutos/'+id))
    .success(function(retorno){
      $log.info('Run -> getProdutos');
      $scope.produto = retorno;
      $scope.buscarCategoria(retorno.PRO_CodigoMarca);

    })
    .error(function(retorno){
      $log.error(retorno);
    })
  }

  getMarcas();
  
})


