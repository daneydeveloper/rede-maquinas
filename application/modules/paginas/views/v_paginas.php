<div class="page-content" ng-controller="Paginas">
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
                    <a class="btn btn-inline btn-primary btn-block" href="<?=base_url('paginas/adicionar')?>">Adicionar Página</a>
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
							<th>Nome</th>
							<th>URL/Identificador</th>
							<th>Tipo</th>
							<th>Status</th>
							<th class="text-center">Ações</th>
						</tr>
						</thead>
						<tbody>
							<tr ng-repeat="row in paginas | filter:filtro">
								<td>{{row.PAG_CodigoPagina}}</td>
								<td>{{row.PAG_Nome}}</td>
								<td>{{row.PAG_URL}}</td>
								<td class="text-center">
									<span ng-show="row.PAG_Tipo == 1" class="label label-info">Bloco</span>
									<span ng-show="row.PAG_Tipo == 2" class="label label-primary">Página</span>
								</td>
								<td class="text-center">
									<span ng-show="row.PAG_Status == 1" class="label label-success">Desbloqueado</span>
									<span ng-show="row.PAG_Status == 0" class="label label-danger">Bloqueado</span>
								</td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-inline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Opções
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?=base_url('paginas/editar')?>/{{row.PAG_CodigoPagina}}">
												<i class="font-icon font-icon-pencil"></i><b>Editar</b>
											</a>
											<a class="dropdown-item" href="#" ng-click="Acao(row.EMP_CodigoEmpresa, 'Você deseja remover esta Empresa? Esta ação não pode ser desfeita', 99)" tooltips tooltip-side="left" tooltip-template="<b>Aviso:</b> esta ação não pode ser desfeita!">
												<i class="font-icon font-icon-trash text-danger"></i><b>Remover</b>
											</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
    	</div>
    </div>

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