angular.module('app', ['app.factories',
											 'app.directives' ,
											 'ngMask',
											 '720kb.datepicker',
											 '720kb.tooltips',
											 'ui.bootstrap',
											 'ui.select2',
											 'blockUI',
											 'ngFileUpload',
											 'angularFileUpload',
											 'ngImgCrop',
											 'yaru22.angular-timeago',
											 'ckeditor',
											 'ui.ace',
											 'ui.bootstrap.pagination',
											 /*Modulos*/
											 /*'app.global'*/
											 'app.marcas',
											 'app.categoria',
											 'app.produtos',
											 'app.paginas',
											 'app.global'
											])

.config(function(blockUIConfig) {
  blockUIConfig.message = 'Carregando!';
  
})
.config(function (timeAgoSettings) {
   timeAgoSettings.overrideLang = 'pt_BR';
})