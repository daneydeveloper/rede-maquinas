<div class="page-content" ng-controller="Categoria">
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
                    <button type="button" class="btn btn-inline btn-primary btn-block" ng-click="addCategoria()">Adicionar Categoria</button>
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
							<th style="width: 40%">Nome</th>
							<th style="width: 40%">Marca</th>
							<th style="width: 20%" class="text-center">Ações</th>
						</tr>
						</thead>
						<tbody>
							<tr ng-repeat="row in categorias | filter:filtro">
								<td>{{row.CAT_CodigoCategoria}}</td>
								<td>{{row.CAT_Nome}}</td>
								<td>{{row.MAR_Nome}}</td>
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
	                      <input type="text" class="form-control" ng-model="dados.CAT_Nome" ng-required="true">
	                    </fieldset>
	                  </div>
	                  <div class="col-lg-12">
	                    <fieldset class="form-group">
	                      <label class="form-label semibold text-danger" for="exampleInput">Marca</label>
	                      <select class="form-control" ng-model="dados.CAT_CodigoMarca" ng-required="true">
	                      	<option value="" disabled="disabled">Selecione uma Opção</option>]
	                      	<option ng-repeat="row in marcas" value="{{row.MAR_CodigoMarca}}">{{row.MAR_Nome}}</option>
	                      </select>
	                    </fieldset>
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