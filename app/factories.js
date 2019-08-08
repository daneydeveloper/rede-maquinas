angular.module('app.factories', [])
.factory('path', function(url = null, $location){
  var base_url = window.location.origin;
  var host = window.location.host;
  var pathArray = window.location.pathname.split( '/' );
  var base = base_url+'/'+pathArray[1]+'/'+pathArray[2] + '/';
  return function(url = null) {
    if (url) {
      return base.concat(url);
    }
    else {
      return base;
    }
  }
})

.factory('swa', function(msg = null, reload = true){
	var _success = function(msg = null, reload = true){
		swal({
  		title: "Pronto!",
  		text: msg,
  		type: "success",
  	},
		function(){
			if (reload) {
        location.reload();
      }
      else {
        swal.close();
      }
	  });
	};

	var _error = function(msg = null){
		swal({
  		title: "Ops!",
  		text: msg,
  		type: "error",
  	},
		function(){
			
	  });
	}
	return {
		success:_success,
		error:_error
	}
})

.factory('limpaString', function(){
  return function(str){
    return str.replace(/[^\d]+/g,'');
  }
})

