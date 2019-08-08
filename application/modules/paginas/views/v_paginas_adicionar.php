<link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/vendor/slick.min.css">
<link rel="stylesheet" href="<?=base_url('assets')?>/css/separate/pages/profile.min.css">

<div class="page-content" ng-controller="Paginas">
    <!-- INIT Variaveis -->
    <fon ng-init="pagina.PAG_Tipo = 2"></fon>
    <fon ng-init="pagina.PAG_Status = 1"></fon>
    <!-- End INIT -->

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
                  <div class="col-lg-2">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Tipo de Página</label>
                      <select class="form-control" ng-model="pagina.PAG_Tipo" ng-required="true">
                        <option value="1">Bloco</option>
                        <option value="2" ng-selected="true">Página</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-2">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Status</label>
                      <select class="form-control" ng-model="pagina.PAG_Status" ng-required="true">
                        <option value="1" ng-selected="true">Ativa</option>
                        <option value="0">Inativa</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-lg-3">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput" <?=$this->template->tooltip('Este nome é apenas para controle Interno e identificação da sua Página ou Bloco')?>>Nome da Página <code>?</code></label>
                      <input type="text" class="form-control" ng-model="pagina.PAG_Nome" ng-required="true">
                    </fieldset>
                  </div>
                  <div class="col-lg-5" ng-if="pagina.PAG_Tipo == 2">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Titulo</label>
                      <input type="text" class="form-control maxlength" ng-model="pagina.PAG_Title"   maxlength="60">
                      <small class="text-muted">É ideal que se use entre 50/60 Caracteres</small>
                    </fieldset>
                  </div>
                  <div class="col-lg-3" ng-if="pagina.PAG_Tipo == 2">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Meta Descrição</label>
                      <input type="text" class="form-control maxlength" ng-model="pagina.PAG_SEODescription" maxlength="160">
                      <small class="text-muted">É ideal que se use entre 75/160 Caracteres</small>
                    </fieldset>
                  </div>
                  <div class="col-lg-7" ng-if="pagina.PAG_Tipo == 2">
                    <fieldset class="form-group">
                      <label class="form-label semibold" for="exampleInput">Palavras Chave</label>
                      <input type="text" class="form-control" ng-model="pagina.PAG_SEOKeywords">
                      <small class="text-muted">Utilize até 10 Palavras chaves que ligadas estejam diretamente ao seu conteúdo, separando-as por virgulas.</small>
                    </fieldset>
                  </div>
                </div>
                <div class="row" ng-if="pagina.PAG_Title">
                  <div class="col-md-4">
                    <label class="form-label semibold" for="exampleInputEmail1">Como vai ficar sua página no Google?</label>
                    <div class="border-primary b-a p-a m-b-md">
                      <h5 style="color: #1a0dab" style="font-size:18px;font-family: arial,sans-serif;">{{pagina.PAG_Title}}</h5>
                      <h5 style="margin-top: -19px;font-size: 16px; color:#006621;font-family: arial,sans-serif;">http://www.linenutry.com.br</h5>
                      <h5 style="margin-top: -19px;font-size: 14px;font-family: arial,sans-serif;">{{pagina.PAG_SEODescription}}</h5>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label class="form-label semibold" for="exampleInputEmail1">Conteúdo</label>
                    <!-- <textarea froala="froalaOpt" ng-model="pagina.PAG_HTML" ng-required="true" ></textarea> -->
                    <!-- <div ckeditor="options" ng-model="pagina.PAG_HTML"></div> -->
                     <div ui-ace="{
                      showGutter: false,
                      theme:'twilight',
                      mode: 'php'
                    }" ng-model="pagina.PAG_HTML"></div>
                </div>
              </form>
            </div>
            <footer>
              <div class="form-group text-right">
                <button type="button" class="btn btn-inline btn-danger" ng-show="!disabled && edit">Cancelar</button>
                <button type="button" class="btn btn-inline btn-success" ng-disabled="formUsuario.$invalid" ng-click="salvarPagina(pagina)">Salvar Página</button>
              </div>
            </footer>
          </section>
        </div><!--.col- -->
      </div><!--.row-->
    </div><!--.container-fluid-->
  </div><!--.page-content-->
  <style type="text/css">
    .ace_editor { height: 200px; }
  </style>