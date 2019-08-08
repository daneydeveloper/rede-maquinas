<link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/pages/tasks.min.css">
<div class="page-content" ng-controller="Galeria">
  <div class="container-fluid">
  	<section class="card card-default mb-3">
			<header class="card-header">
				<b>Galeria de Imagens</b>
				<button type="button" class="modal-close">
					<i class="font-icon-close-2"></i>
				</button>
			</header>
			<div class="card-block">
				<div class="row">
					<div class="col-md-12">
						<?=$this->template->alert('Você pode enviar até 12 imagens para ilustrar seu imóvel, escolha bem suas imagens pois elas seram exibidas no seu site.','warning','fill')?>
					</div>
				</div>
				 <div class="row">
	                  <div class="col-md-12">
											<fieldset class="form-group">
											 <span class="btn btn-rounded btn-file">
								          <span>Selecionar Imagens</span>
								          <input type="file" nv-file-select="" uploader="uploader" multiple />
								        </span>
											</fieldset>
										</div>
	                </div>
	                <div class="row">
	                	<div style="margin-bottom: 40px">
										   <table class="table table-bordered table-hover table-sm">
										      <thead>
										         <tr>
										            <th width="50%">Imagem</th>
										            <th ng-show="uploader.isHTML5">Tamanho</th>
										            <th>Ações</th>
										         </tr>
										      </thead>
										      <tbody>
										         <tr ng-repeat="item in uploader.queue">
										            <td ng-click="info(item)">
										               <div ng-show="uploader.isHTML5" ng-thumb="{ file: item._file, width: 100}"></div>
										            </td>
										            <td ng-show="uploader.isHTML5" nowrap>{{ item.file.size/1024/1024|number:2 }} MB</td>
										            <!-- <td ng-show="uploader.isHTML5">
										               <div class="progress" style="margin-bottom: 0;">
										                  <div class="progress-bar" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>
										               </div>
										            </td>
										            <td class="text-center">
										               <span ng-show="item.isSuccess"><i class="glyphicon glyphicon-ok"></i></span>
										               <span ng-show="item.isCancel"><i class="glyphicon glyphicon-ban-circle"></i></span>
										               <span ng-show="item.isError"><i class="glyphicon glyphicon-remove"></i></span>
										            </td> -->
										            <td nowrap>
										               <button type="button" class="btn btn-success btn-xs" ng-click="item.upload()" ng-disabled="item.isReady || item.isUploading || item.isSuccess">
										               <span class="glyphicon glyphicon-upload"></span> Enviar
										               </button>
										               <button type="button" class="btn btn-warning btn-xs" ng-click="item.cancel()" ng-disabled="!item.isUploading">
										               <span class="glyphicon glyphicon-ban-circle"></span> Cancelar
										               </button>
										               <button type="button" class="btn btn-danger btn-xs" ng-click="item.remove()">
										               <span class="glyphicon glyphicon-trash"></span> Remover
										               </button>
										            </td>
										         </tr>
										      </tbody>
										   </table>
										</div>
	                </div>
			</div>
		</section>
		 <footer>
        <div class="form-group text-right">
          <button type="button" class="btn btn-inline btn-danger">Voltar</button>
          <button type="button" class="btn btn-inline btn-success" ng-disabled="fileItem.length > 2 || flag != 10" ng-click="salvarGaleria(images)">Salvar e ver Galeria</button>
        </div>
      </footer>
  </div>
</div>