<link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/vendor/slick.min.css">
<link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/pages/profile.min.css">

<div class="page-content" ng-controller="Produtos">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <section class="card">
            <header class="card-header card-header-xl">
              Cadastro de Produto 
            </header>
            <div class="card-block">
               <form name="formUsuario">
                <div class="row">
                  <div class="col-lg-12">
                    
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInputEmail1">Marca</label>
                      <select ui-select2 class="select2" ng-model="produto.PRO_CodigoMarca" ng-change="buscarCategoria(produto.PRO_CodigoMarca)" data-placeholder="Selecione uma Marca">
                        <option value=""></option>
                        <option ng-repeat="row in marcas" 
                                value="{{row.MAR_CodigoMarca}}">
                                {{row.MAR_Nome}}
                        </option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-3">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInputEmail1">Categoria</label>
                      <select class="form-control" ng-model="produto.PRO_CodigoCategoria" ng-disabled="!produto.PRO_CodigoMarca">
                        <option value="" disabled="disabled">Selecione uma Categoria</option>
                        <option ng-repeat="row in categorias" 
                                value="{{row.CAT_CodigoCategoria}}">
                                {{row.CAT_Nome}}
                        </option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-5">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Nome</label>
                      <input type="text" class="form-control" ng-model="produto.PRO_Nome" ng-required="true">
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label class="form-label semibold" for="exampleInputEmail1">Descrição do Produto</label>
                    <div ckeditor="options" ng-model="produto.PRO_Descricao" ng-required="true"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h5 class="m-t-lg with-border">Configurações SEO</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Titulo</label>
                      <input type="text" class="form-control maxlength" ng-model="produto.PRO_SEO.Title"   maxlength="60">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Meta Descrição</label>
                      <input type="text" class="form-control maxlength" ng-model="produto.PRO_SEO.MetaDescription" maxlength="160">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Palavras Chave</label>
                      <input type="text" class="form-control" ng-model="produto.PRO_SEO.Keywords">
                      <small class="text-muted">Utilize até 10 Palavras chaves que ligadas estejam diretamente ao seu conteúdo, separando-as por virgulas.</small>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
            <footer>
              <div class="form-group text-right">
                <button type="button" class="btn btn-inline btn-danger" ng-show="!disabled && edit">Cancelar</button>
                <button type="button" class="btn btn-inline btn-success" ng-disabled="formUsuario.$invalid" ng-click="salvarProduto(produto)">Salvar e Continuar para Galeria</button>
              </div>
            </footer>
          </section>
        </div><!--.col- -->
      </div><!--.row-->
    </div><!--.container-fluid-->
  </div><!--.page-content-->
