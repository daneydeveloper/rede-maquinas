<div class="main-title">
   <div class="container">
      <h1 class="main-title__primary">Equipamentos</h1>
      <h3 class="main-title__secondary"></h3>
   </div>
</div>
<div class="breadcrumbs ">
   <div class="container"></div>
</div>
<div class="master-container">
   <div class="container">
      <div class="row">
         <div class="col-xs-12  col-md-9  col-md-push-3" role="main">
            <ul class="products">
               <?php foreach ($produtos as $key): ?>
               	<li class="product border-categoria ">
                     <a href="<?=base_url('produto')?>/<?=$key->PRO_Nome?>">
                        <img width="150" height="150" src="<?=$path?>/<?=$key->IMG_Imagem?>" alt="Hand Tools" />
                     </a>
                     <div class="padding-categoria">
                        <h3 class="title-categoria text-center"><?=$key->PRO_Nome ?></h3>
                     </div>
                     <a href="<?=base_url('produto')?>/<?=$key->PRO_Nome?>" class="button add_to_cart_button" style="margin-bottom: 0px !important;">Fazer cotação</a>
                  </li>
               <?php endforeach ?>
            </ul>
         </div>
         <!-- BARRA LATERAL CATEGORIAS -->
         <div class="col-xs-12  col-md-3  col-md-pull-9">
            <div class="sidebar shop-sidebar">
               <div class="widget woocommerce widget_product_search push-down-30">
                  <h4 class="sidebar__headings">Buscar Equipamentos</h4>
                  <form action="<?=base_url('buscar')?>" method="get" id="searchform" class="woocommerce-product-search">
                     <div>
                         <input type="text" name="produto" value="<?=@$_GET['produto']?>" id="s" class="form-control" placeholder="Buscar equipamentos...">
                        <input type="submit" id="searchsubmit" value="Buscar"/>
                     </div>
                  </form>
               </div>
               <div class="widget woocommerce widget_product_categories push-down-30">
                  <h4 class="sidebar__headings">Categorias</h4>
                  <ul class="product-categories">
                     <?php foreach ($categorias as $key): ?>
                     	<li><a href="<?=base_url('equipamentos')?>/?categoria=<?=$key->CAT_Nome?>"><?=$key->CAT_Nome ?></a></li>
                     <?php endforeach ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>