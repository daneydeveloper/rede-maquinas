<!-- SLIDE -->
<div class="jumbotron  jumbotron--with-captions">
   <div class="carousel  slide  js-jumbotron-slider" id="headerCarousel" data-interval="5000">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
         <div class="item active">
            <img src="<?=THEME_PATH?>/images/demo/slider/slider_04.jpg"	alt="The Best Construction HTML Theme" />
            <div class="container">
               <div class="carousel-content">
                  <div class="jumbotron__title">
                     <h1>Betoneira</h1>
                  </div>
                  <div class="jumbotron__content">
                     <p>
                        O equipamento mais requisitado na construção o equipamento essencial em uma construção civil é a betoneira, usada para misturar diversos materiais, como pedra, areia e cimento na proporção e textura devida, de acordo com o tipo e tamanho da obra.
                     </p>
                     <a class="btn  btn-primary" href="<?=base_url('equipamentos')?>/?categoria=Betoneiras" >Ver Equipamentos</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <img src="<?=THEME_PATH?>/images/demo/slider/slider_05.jpg" alt="Construction Management">
            <div class="container">
               <div class="carousel-content">
                  <div class="jumbotron__title">
                     <h1>Andaimes</h1>
                  </div>
                  <div class="jumbotron__content">
                     <p>
                       É o termo utilizado para designar a estrutura montada para dar acesso a algum lugar ou escorar algo. O Andaime possui diversas denominações e tipos, podendo ser constituído por vários tipos de materiais como: madeira, aço, alumínio, entre outros.
                     </p>
                     <a class="btn  btn-primary" href="<?=base_url('equipamentos')?>/?categoria=Andaimes" >Ver Equipamentos</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item ">
            <img src="<?=THEME_PATH?>/images/demo/slider/slider_01.jpg" alt="Green School in London">
            <div class="container">
               <div class="carousel-content">
                  <div class="jumbotron__title">
                     <h1>Geradores</h1>
                  </div>
                  <div class="jumbotron__content">
                     <p>
                        Os grupos geradores possuem sistemas de controle para operação manual ou automática, controlando os principais parâmetros e grandezas elétricas, de forma integrada, em um único módulo.
                     </p>
                     <a class="btn  btn-primary" href="<?=base_url('equipamentos')?>/?categoria=Grupo%20geradores">Ver Equipamentos</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="item">
            <img src="<?=THEME_PATH?>/images/demo/slider/slider_07.jpg" alt="Relationships That Last" />
            <div class="container">
               <div class="carousel-content">
                  <div class="jumbotron__title">
                     <h1>Plataformas Aéreas</h1>
                  </div>
                  <div class="jumbotron__content">
                     <p>
                        A Locação de plataformas aéreas engloba modelos de plataformas fáceis de instalar e compactas, como uma solução econômica e segura para acesso à altura.
de dimensões e pesos flexíveis que permitem que as plataformas disponíveis para locação adentrem portas padrão, elevadores além de trabalhar em solos frágeis de forma eficiente.
                     </p>
                     <a class="btn  btn-primary" href="<?=base_url('equipamentos')?>/?categoria=Plataformas%20aéreas" >Ver Equipamentos</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#headerCarousel" role="button" data-slide="prev">
      <i class="fa fa-angle-left"></i>
      </a>
      <a class="right carousel-control" href="#headerCarousel" role="button" data-slide="next">
      <i class="fa fa-angle-right"></i>
      </a>
   </div>
</div>
<!-- MAIN -->
<div class="master-container">

	<!-- CATEGORIAS -->
   <div class="spacer"></div>
   <div class="container" role="main">
      <div class="row">
         <div class="col-md-12">
            <div class="panel-grid">
               <h3 class="widget-title">Categorias</h3>
            </div>
            <ul class="products text-center">
               <?php foreach ($categorias as $key): ?>
               	<li class="product border-categoria col-md-3 col-sm-12">
                     <a href="<?=base_url('equipamentos')?>/?categoria=<?=$key->CAT_Nome?>">
                        <img width="150" height="150" src="<?=$path?>/<?=$key->IMG_Imagem?>" alt="Hand Tools" />
                     </a>
                     <div class="padding-categoria">
                        <h3 class="title-categoria text-center"><?=$key->CAT_Nome ?></h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet.. </p> -->
                     </div>
                     <a href="<?=base_url('equipamentos')?>/?categoria=<?=$key->CAT_Nome?>" class="button add_to_cart_button" style="margin-bottom: 0px !important;">Ver Equipamentos</a>
                  </li>
               <?php endforeach ?>
            </ul>
         </div>
      </div>
   </div>

   <!-- FRASE MISSÃO -->
   <div class="spacer-big"></div>
   <div class="panel-grid" id="pg-7-5">
      <div class="promobg">
         <div class="container">
            <div class="panel widget row">
               <div class="col-md-12">
                  <div class="motivational-text">
                     Nossa Missão é viabilizar soluções inteligentes aos nossos clientes, com equipamentos de qualidade, respeitando o meio ambiente com responsabilidade social.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- BLOG -->
   <!-- <div class="spacer-big"></div>
	<div class="container" role="main">
	   <div class="row">
	   	<div class="panel-grid">
            <h3 class="widget-title">Notícias</h3>
         </div>
         <div class="spacer"></div>
	      <div class="col-md-4">
	         <div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-0-0">
	            <div class="has-post-thumbnail page-box page-box--block">
	               <a class="page-box__picture" href="services-content/design-and-build.html">
	               <img width="360" height="240" src="<?=THEME_PATH?>/images/demo/content/content_1.jpg" alt="Content Image"/>
	               </a>
	               <div class="page-box__content">
	                  <h5 class="page-box__title  text-uppercase">
	                     <a href="design-and-build.html">lorem ipsum</a>
	                  </h5>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                  tempor incididunt ut labore et dolore magna aliqua. 
	                  <p>
	                     <a href="services-content/design-and-build.html" class="read-more read-more--page-box">Ver Mais</a>
	                  </p>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="col-md-4">
	         <div class="panel widget widget_pt_featured_page panel-first-child panel-last-child" id="panel-7-1-1-0">
	            <div class="has-post-thumbnail page-box page-box--block">
	               <a class="page-box__picture" href="services-content/tiling-and-painting.html">
	               <img width="360" height="240" src="<?=THEME_PATH?>/images/demo/content/content_2.jpg" alt="Content Image"/>
	               </a>
	               <div class="page-box__content">
	                  <h5 class="page-box__title text-uppercase">
	                     <a href="tiling-and-painting.html">lorem ipsum</a>
	                  </h5>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                  tempor incididunt ut labore et dolore magna aliqua. 
	                  <p>
	                     <a href="services-content/tiling-and-painting.html" class="read-more read-more--page-box">Ver Mais</a>
	                  </p>
	               </div>
	            </div>
	         </div>
	      </div>
	      <div class="col-md-4">
	         <div class="panel widget widget_pt_featured_page panel-first-child" id="panel-7-1-2-0">
	            <div class="has-post-thumbnail page-box page-box--inline">
	               <a class="page-box__picture" href="services-content/construction-management.html">
	               <img src="<?=THEME_PATH?>/images/demo/content/content_mini_1.jpg" alt="Content Image"/>
	               </a>
	               <div class="page-box__content">
	                  <h5 class="page-box__title text-uppercase">
	                     <a href="services-content/construction-management.html">lorem ipsum</a>
	                  </h5>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod &hellip;	
	               </div>
	            </div>
	            <div class="spacer"></div>
	         </div>
	         <div class="panel widget widget_pt_featured_page" id="panel-7-1-2-1">
	            <div class="has-post-thumbnail page-box page-box--inline">
	               <a class="page-box__picture" href="services-content/condo-remodeling.html">
	               <img width="100" height="75" src="<?=THEME_PATH?>/images/demo/content/content_mini_3.jpg"  class="attachment-thumbnail wp-post-image" alt="Content Image"/>
	               </a>
	               <div class="page-box__content">
	                  <h5 class="page-box__title text-uppercase">
	                     <a href="services-content/condo-remodeling.html">lorem ipsum</a>
	                  </h5>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod &hellip;	
	               </div>
	            </div>
	            <div class="spacer"></div>
	         </div>
	         <div class="panel widget widget_pt_featured_page" id="panel-7-1-2-2">
	            <div class="has-post-thumbnail page-box page-box--inline">
	               <a class="page-box__picture" href="services-content/hardwood-flooring.html">
	               	<img width="100" height="75" src="<?=THEME_PATH?>/images/demo/content/content_mini_2.jpg"  class="attachment-thumbnail wp-post-image" alt="Content Image"/>
	               </a>
	               <div class="page-box__content">
	                  <h5 class="page-box__title text-uppercase">
	                     <a href="services-content/hardwood-flooring.html">lorem ipsum</a>
	                  </h5>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod &hellip;	
	               </div>
	            </div>
	            <div class="spacer"></div>
	         </div>
	         <div class="panel widget widget_pt_featured_page panel-last-child" id="panel-7-1-2-3">
	            <div class="has-post-thumbnail page-box page-box--inline">
	               <a class="page-box__picture" href="services-content/kitchen-remodeling.html">
	               <img width="100" height="75" src="<?=THEME_PATH?>/images/demo/content/content_mini_4.jpg"  class="attachment-thumbnail wp-post-image" alt="Content Image"/>
	               </a>
	               <div class="page-box__content">
	                  <h5 class="page-box__title text-uppercase">
	                     <a href="services-content/kitchen-remodeling.html">lorem ipsum</a>
	                  </h5>
	                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod &hellip;	
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div> -->
</div>
<!-- <div class="spacer-big"></div> -->