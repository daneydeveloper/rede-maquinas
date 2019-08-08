<header class="site-header" ng-controller="Header">
    <aviso ng-init="aviso = '<?=@$_GET['aviso']?>'"></aviso>
  <div class="container-fluid">
    <img src="<?=base_url('assets/img/logos')?>/logo-midia9-white.svg" style="width: 165px;margin-left: 2em;">
    <button class="hamburger hamburger--htla">
    <span>toggle menu</span>
    </button>
    <div class="site-header-content">
      <div class="site-header-content-in">
        <div class="site-header-shown">
          <div class="dropdown user-menu">
            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?=base_url('assets')?>/img/avatar-2-64.png" alt="">
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
              <a class="dropdown-item" href="<?=base_url('assets')?>/#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
              <a class="dropdown-item" href="<?=base_url('assets')?>/#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
              <a class="dropdown-item" href="<?=base_url('assets')?>/#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?=base_url('login/sair')?>"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
            </div>
          </div>
          <button type="button" class="burger-right">
          <i class="font-icon-menu-addl"></i>
          </button>
        </div>
        <!--.site-header-shown-->
        <div class="mobile-menu-right-overlay"></div>
         <div class="site-header-collapsed">
          <div class="site-header-collapsed-in">
          </div>
          <!--.site-header-collapsed-in-->
        </div>
        <!--.site-header-collapsed-->
      </div>
      <!--site-header-content-in-->
    </div>
    <!--.site-header-content-->
  </div>
  <!--.container-fluid-->
</header>
<!--.site-header-->

<script type="text/ng-template" id="m_Aviso">
  <div class="col-lg-12">
      <section class="card card-blue-fill">
        <header class="card-header card-header-xl">
          Atenção
          <button type="button" class="modal-close" ng-click="closeThisDialog()">
                      <i class="font-icon-close-2"></i>
                  </button> 
        </header>
        <div class="card-block">
          <div class="row">
              <div class="col-lg-12">
                  <h4>{{avisoInfo.AV_Mensagem}}</h4>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 m-t-lg">
                  <div class="form-group text-right">
                  <button type="button" class="btn btn-inline btn-success" ng-click="closeThisDialog()">Entendi</button>
                </div>
              </div>
          </div>
        </div>
      </section>
  </div>
</script>