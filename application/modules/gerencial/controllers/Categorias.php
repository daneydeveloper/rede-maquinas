<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {
	public $is_hookable = TRUE;

	public function index() {
		$this->template->make('gerencial/v_categoria');
	}

	public function getCategorias(){
		$query = $this->db->from('categorias')
											->join('marcas', 'CAT_CodigoMarca = MAR_CodigoMarca')
											->get()
											->result();
		$this->evo->json($query);
	}

	public function salvarCategoria(){
		if ($_POST) {
			$dados = $this->input->post();
		 	$checkCategoria = $this->db->from('categorias')
		 														 ->join('marcas', 'MAR_CodigoMarca = CAT_CodigoMarca')
		 														 ->where($dados)
		 														 ->get()
		 														 ->first_row();
		 		$retorno['ssql'] = $this->db->last_query();
		 	if (!$checkCategoria) {
		 		$query = $this->db->insert('categorias', $dados);
		 		if ($query){
		 			$retorno['result'] = true;
		  		$retorno['msg'] = 'Categoria cadastrada com Sucesso';
		 		}
		 		else {
		 			$retorno['result'] = false;
		  		$retorno['msg'] = 'Ocorreu um problema ao cadastrar a Marca';
		 		}
		 	}
		 	else {
		 		$retorno['result'] = false;
		  	$retorno['msg'] = 'Já existe uma Categoria com este mesmo Nome para a Marca '.$checkCategoria->MAR_Nome;
		 	}
		}
		else {
		  	$retorno['result'] = false;
		  	$retorno['msg'] = 'Ocorreu um problema ao cadastrar a Marca';
		  }
		$this->evo->json($retorno);
	}

	public function alterarStatus($id, $status){
		if ($id || $status) {
			$query = $this->db->set('CAT_Status', $status)
												->where('CAT_CodigoCategoria', $id)
												->update('categorias');
			if ($query) {
				$retorno['result'] = true;
		  	$retorno['msg'] = 'Categoria alterada com Sucesso';
			}
			else {
				$retorno['result'] = false;
		  	$retorno['msg'] = 'Ocorreu um problema ao alterar a categoria';
			}
		}
		else {
			$retorno['result'] = false;
	  	$retorno['msg'] = 'Parametro não informado';
		}
		$this->evo->json($retorno);
	}
}