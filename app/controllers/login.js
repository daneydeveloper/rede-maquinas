angular.module('app.login', ['app.factories', 'ngDialog'])
.controller('Login', function($scope, $http,$log, $httpParamSerializerJQLike, path, $log, $location) {
	$log.debug('Load Module -> Login');
	$scope.load = false;
	$scope.Login = function(dados) {
		$scope.load = true;
		$http({
			method: 'POST',
			url: path('autenticar'),
			data:  $httpParamSerializerJQLike(dados),
			headers: {
	    	'Content-Type': 'application/x-www-form-urlencoded'
	    }
		})
		.success(function(retorno){
			$log.info(retorno);
			$scope.retorno = retorno;
			if (retorno.result == true) {
				$scope.load = true;
				location.reload();
			}
			else {
				$scope.load = false;
			}
		})
		.error(function(retorno){
			$scope.load = false;
			toastr.error('Ocorreu um problema com sua requisição', 'Ops!');
		})
	}
});