angular.module('app.global', [])

.controller('Header',function($scope, $http, $log, ngDialog, path, $httpParamSerializerJQLike, swa){
	$log.info('Load Module -> Header');

	$scope.$watch('aviso',function(id){
  	$log.info('Aviso: ',id);
  	if (id) {
  		$http.get(path('json/getAvisos/'+id))
  		.success(function(retorno){
  			if (retorno){
  				$scope.avisoInfo = retorno;
  				ngDialog.open({
			  		template:'m_Aviso',
			  		width: '30%',
			  		scope: $scope,
			  		showClose: false
			  	})
  			}
  		})
  	}
  })	
	
})