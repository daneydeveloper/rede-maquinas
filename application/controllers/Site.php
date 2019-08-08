<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Site extends CI_Controller {
	public $is_hookable = false;

	public function index(){
		$dados['categorias'] = $this->db->select('CAT_CodigoCategoria, CAT_Nome, IMG_Imagem')
                                    ->from('categorias')
                                    ->join('produtos', 'CAT_CodigoCategoria = PRO_CodigoCategoria')
                                    ->join('produtos_imagem','IMG_CodigoProduto = PRO_CodigoProduto')
                                    ->where('CAT_Status', '1')
                                    ->group_by('CAT_CodigoCategoria')
                                    ->get()
                                    ->result();
      $dados['path'] = 'http://sistemas.midia9.esy.es/redemaquinas/lp.redemaquinas.com.br/assets/images/produtos/';
		
		$this->template->makeSite('theme/rm/v_home',$dados);
	}

	public function equipamentos($cat = null){
    $dados['path'] = 'http://sistemas.midia9.esy.es/redemaquinas/lp.redemaquinas.com.br/assets/images/produtos/';
    
    $dados['categorias'] = $this->db->select('CAT_CodigoCategoria, CAT_Nome, IMG_Imagem')
                                    ->from('categorias')
                                    ->join('produtos', 'CAT_CodigoCategoria = PRO_CodigoCategoria')
                                    ->join('produtos_imagem','IMG_CodigoProduto = PRO_CodigoProduto')
                                    ->where('CAT_Status', '1')
                                    ->group_by('CAT_CodigoCategoria')
                                    ->get()
                                    ->result();

    $dados['produtos'] = $this->db->from('produtos')
                                  ->join('marcas',' MAR_CodigoMarca = PRO_CodigoMarca')
                                  ->join('categorias', 'PRO_CodigoCategoria = CAT_CodigoCategoria')
                                  ->join('produtos_imagem', 'IMG_CodigoProduto = PRO_CodigoProduto')
                                  ->group_by('PRO_CodigoProduto');

    if(@$_GET['categoria']) {
      $dados['produtos'] = $dados['produtos']->where('CAT_Nome', $_GET['categoria'])
                                             ->get()
                                             ->result();
    }
    else {
      $dados['produtos'] = $dados['produtos']->limit(12)
                                             ->get()
                                             ->result();
    }
      $this->template->makeSite('theme/rm/v_equipamentos', $dados);
  }

	public function contato(){
		$this->template->makeSite('theme/rm/v_contato');
	}

	public function equipamento($nome){
	 $dados['path'] = 'http://sistemas.midia9.esy.es/redemaquinas/lp.redemaquinas.com.br/assets/images/produtos/';
	 $dados['categorias'] = $this->db->select('CAT_CodigoCategoria, CAT_Nome, IMG_Imagem')
	                                   ->from('categorias')
	                                   ->join('produtos', 'CAT_CodigoCategoria = PRO_CodigoCategoria')
	                                   ->join('produtos_imagem','IMG_CodigoProduto = PRO_CodigoProduto')
	                                   ->where('CAT_Status', '1')
	                                   ->group_by('CAT_CodigoCategoria')
	                                   ->get()
	                                   ->result();
	 if($nome){
	   $dados['produto'] = $this->db->from('produtos')
	                               ->join('marcas',' MAR_CodigoMarca = PRO_CodigoMarca')
	                               ->join('categorias', 'PRO_CodigoCategoria = CAT_CodigoCategoria')
	                               ->join('produtos_imagem', 'IMG_CodigoProduto = PRO_CodigoProduto')
	                               ->group_by('PRO_CodigoProduto')
	                               ->where('PRO_Nome', urldecode($nome))
	                               ->get()
	                               ->first_row();

	     $dados['relacionados'] = $this->db->from('produtos')
	                               ->join('marcas',' MAR_CodigoMarca = PRO_CodigoMarca')
	                               ->join('categorias', 'PRO_CodigoCategoria = CAT_CodigoCategoria')
	                               ->join('produtos_imagem', 'IMG_CodigoProduto = PRO_CodigoProduto')
	                               ->group_by('PRO_CodigoProduto')
	                               ->where('PRO_CodigoCategoria', $dados['produto']->PRO_CodigoCategoria)
	                               ->get()
	                               ->result();
	   if($dados['produto']) {
	     $this->template->makeSite('theme/rm/v_produto', $dados);
	   }
	 }
	}

	public function buscar(){
    if(@$_GET['produto']){
      $dados['path'] = 'http://sistemas.midia9.esy.es/redemaquinas/lp.redemaquinas.com.br/assets/images/produtos/';
    
      $dados['categorias'] = $this->db->select('CAT_CodigoCategoria, CAT_Nome, IMG_Imagem')
                                      ->from('categorias')
                                      ->join('produtos', 'CAT_CodigoCategoria = PRO_CodigoCategoria')
                                      ->join('produtos_imagem','IMG_CodigoProduto = PRO_CodigoProduto')
                                      ->where('CAT_Status', '1')
                                      ->group_by('CAT_CodigoCategoria')
                                      ->get()
                                      ->result();
                                    
    $dados['produtos'] = $this->db->from('produtos')
                                  ->join('marcas',' MAR_CodigoMarca = PRO_CodigoMarca')
                                  ->join('categorias', 'PRO_CodigoCategoria = CAT_CodigoCategoria')
                                  ->join('produtos_imagem', 'IMG_CodigoProduto = PRO_CodigoProduto')
                                  ->group_by('PRO_CodigoProduto')
                                  ->like('PRO_Nome', urldecode($_GET['produto']))
                                  ->get()
                                  ->result();
      $this->template->makeSite('theme/rm/v_equipamentos', $dados);
    }
  }

	public function projetos(){
		$this->template->makeSite('theme/rm/v_projetos');
	}

	public function quemSomos(){
		$this->template->makeSite('theme/rm/v_quem-somos');
	}

	public function boleto(){
		$this->template->makeSite('theme/rm/v_boleto');
	}

	public function contrato(){
		$this->template->makeSite('theme/rm/v_contrato');
	}

	public function trabalheConosco(){
		$this->template->makeSite('theme/rm/v_trabalhe-conosco');
	}
	

}