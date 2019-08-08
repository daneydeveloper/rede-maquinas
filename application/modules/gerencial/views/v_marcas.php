<div class="page-content" ng-controller="Marcas">
  <div class="container-fluid">
    <div class="row">
    	<div class="col-lg-3 col-md-3 col-sm-12">
    		<section class="card">
					<header class="card-header">
						Filtros
						<button type="button" class="modal-close" ng-click="getEmpresa()">
							<i class="fa fa-refresh fa-2x"></i>
						</button> 
					</header>
					<div class="card-block">
						<form name="formFiltro">
							<div class="row">
								<div class="col-lg-12">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Buscar</label>
                      <input type="text" class="form-control" ng-model="filtro" placeholder="Ex: Nome">
                    </fieldset>
                </div>
							</div>
							<div class="row">
								<div class="col-lg-12">
                  <fieldset class="form-group">
                    <button type="button" class="btn btn-inline btn-primary btn-block" ng-click="addMarca()">Adicionar Marca</button>
                  </fieldset>
                </div>
							</div>
						</form>
					</div>
				</section>
    	</div>
    	<div class="col-lg-9 col-md-9 col-sm-12">
    		<section class="card">
					<table id="table-sm" class="table table-bordered table-hover table-sm">
						<thead>
						<tr>
							<th width="1">
								#
							</th>
							<th style="width: 60%">Nome</th>
							<th style="width: 20%">Logo</th>
							<th style="width: 20%" class="text-center">Ações</th>
						</tr>
						</thead>
						<tbody>
							<tr ng-repeat="row in marcas | filter:filtro">
								<td>{{row.MAR_CodigoMarca}}</td>
								<td>{{row.MAR_Nome}}</td>
								<td class="text-center" style="background-color: darkgray"><img src="<?=base_url('assets/images/marcas')?>/{{row.MAR_Logo}}" width="80%"></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-inline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#" ng-click="editEmpresa(row.EMP_CodigoEmpresa)">
												<i class="font-icon font-icon-pencil"></i><b>Editar</b>
											</a>
											<a class="dropdown-item" href="#" ng-click="Acao(row.EMP_CodigoEmpresa, 'Você deseja remover esta Empresa? Esta ação não pode ser desfeita', 99)" tooltips tooltip-side="left" tooltip-template="<b>Aviso:</b> esta ação não pode ser desfeita!">
												<i class="font-icon font-icon-trash text-danger"></i><b>Remover</b>
											</a>
											<a class="dropdown-item" ng-if="row.EMP_Status == 1" href="#" ng-click="Acao(row.EMP_CodigoEmpresa, 'Você deseja Bloquear esta Empresa?', 0)" tooltips tooltip-side="left" tooltip-template="<b>Aviso:</b> esta ação não pode ser desfeita!">
												<i class="font-icon font-icon-lock text-warning"></i><b>Bloquear</b>
											</a>
											<a class="dropdown-item" ng-if="row.EMP_Status == 0" href="#" ng-click="Acao(row.EMP_CodigoEmpresa, 'Você deseja Desbloquear esta Empresa?', 1)">
												<i class="font-icon font-icon-play text-success"></i><b>Desbloquear</b>
											</a>
											<?php if($this->evo->Administrador()): ?>
											<!-- <div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#" ng-click="Acao(row.EMP_CodigoEmpresa, 'Você deseja Desbloquear este Usuário?', 1)" tooltips tooltip-side="left" tooltip-template="Realizar uma Recarga para este usuário">
												<i class="glyphicon glyphicon-usd text-success"></i><b> Fazer Recarga</b>
											</a> -->
											<?php endif;?>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
    	</div>
    </div>

     <!-- Modal Visualizar Empresa -->
    	<script type="text/ng-template" id="m_adicionarMarca">
    		<div class="row">
	        <div class="col-lg-12">
	          <section class="card">
	            <header class="card-header card-header-xl">
	              Informações Cadastrais
	              <button type="button" class="modal-close" ng-click="closeThisDialog()">
									<i class="font-icon-close-2"></i>
								</button>  
	            </header>
	            <div class="card-block">
	               <form name="form2">
	                <div class="row">
	                  <div class="col-lg-12">
	                    <fieldset class="form-group">
	                      <label class="form-label semibold text-danger" for="exampleInput">Nome</label>
	                      <input type="text" class="form-control" ng-model="dados.MAR_Nome" ng-required="true">
	                    </fieldset>
	                  </div>
	                </div>
	                <div class="row">
	                  <div class="col-md-12">
											<fieldset class="form-group">
											 <span class="btn btn-rounded btn-file">
								          <span>Selecionar Imagens</span>
								          <input type="file" nv-file-select="" uploader="uploader" />
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
	              </form>
	            </div>
	            <footer>
	              <div class="form-group text-right">
	                <button type="button" class="btn btn-inline btn-danger" ng-click="closeThisDialog()">Cancelar</button>
	                <button type="button" class="btn btn-inline btn-success" ng-disabled="form2.$invalid" ng-click="confirm(dados)">Salvar</button>
	              </div>
	            </footer>
	          </section>
	        </div><!--.col- -->
	      </div><!--.row-->
    	</script>
    <!-- End Modal -->

    <!-- Modal Ações -->
			<script type="text/ng-template" id="m_Acao">
				<div class="col-lg-12">
		      <section class="card card-warning-fill">
		        <header class="card-header card-header-xl">
		          Atenção
		          <button type="button" class="modal-close" ng-click="closeThisDialog()">
								<i class="font-icon-close-2"></i>
							</button> 
		        </header>
		        <div class="card-block">
		        	<div class="row">
		        		<div class="col-lg-12">
		        			{{msg}}
		        		</div>
		        	</div>
		        	<div class="row">
		        		<div class="col-lg-12 m-t-lg">
		        			<div class="form-group text-right">
				            <button type="button" class="btn btn-inline btn-danger" ng-click="closeThisDialog()">Cancelar</button>
				            <button type="button" class="btn btn-inline btn-success" ng-click="confirm(retorno)">Continuar</button>
				          </div>
		        		</div>
		        	</div>
		        </div>
		      </section>
		    </div>
		  </script>
		<!-- End Modal -->
  </div><!--.container-fluid-->
</div><!--.page-content-->