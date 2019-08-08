<nav class="side-menu">
   <div class="side-menu-avatar">
      <div class="avatar-preview avatar-preview-100">
         <img src="<?=base_url('assets')?>/img/perfil/a1.png" alt="">
      </div>
      <br>
      <div class="text-center" style="color:white">
         <b><?=$this->evo->usuario()->USR_Nome?></b>
      </div>
   </div>
   <ul class="side-menu-list">
      <li class="brown <?=($modulo_url == 'dashboard')? 'opened':''?>">
         <a href="<?=base_url('dashboard')?>">
         <i class="font-icon font-icon-home"></i>
         <span class="lbl">Painel de Controle</span>
         </a>
      </li>
      <li class="purple with-sub <?=($modulo_url == 'gerencial')? 'opened':''?>">
         <span>
         <i class="glyphicon glyphicon-user"></i>
          <span class="lbl">Gerencial</span>
         </span>
         <ul>
            <li><a href="<?=base_url('gerencial/marcas')?>"><span class="lbl">Cadastro de Marcas</span></a></li>
            <li><a href="<?=base_url('gerencial/categorias')?>"><span class="lbl"> Cadastro de Categorias</span></a></li>
            <li><a href="<?=base_url('gerencial/produtos')?>"><span class="lbl"> Cadastro de Produtos</span></a></li>
         </ul>
      </li>
      <li class="purple with-sub <?=($modulo_url == 'paginas')? 'opened':''?>">
         <span>
         <i class="glyphicon glyphicon-open-file"></i>
          <span class="lbl">Páginas</span>
         </span>
         <ul>
            <li><a href="<?=base_url('paginas/')?>"><span class="lbl">Cadastro de Páginas</span></a></li>
         </ul>
      </li>
   </ul>
</nav>
<!--.side-menu-->