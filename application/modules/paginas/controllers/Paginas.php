<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {
	public $is_hookable = TRUE;

	public function index(){
		$this->template->make('paginas/v_paginas');
	}

	public function getPaginas($id = null){
		if($id){
			$query = $this->db->from('paginas')
											  ->where('PAG_CodigoPagina', $id)
												->get()
												->first_row();
		}
		else {
			$query = $this->db->from('paginas')
											->get()
											->result();
		}
		$this->evo->json($query);
	}

	public function adicionar(){
		$this->template->make('paginas/v_paginas_adicionar');
	}

	public function salvar(){
		if ($_POST){
			$dados = $this->input->post();
			$dados['PAG_URL'] = $this->url->shortURL($dados['PAG_Nome']);
			$query = $this->db->insert('paginas', $dados);
			if ($query){
				$retorno['result'] = true;
				$retorno['msg'] = 'Página Adicionada com Sucesso';
			}
			else {
				$retorno['result'] = false;
				$retorno['msg'] = 'Ocorreu um problema ao adicionar sua página';
			}
		}
		else {
			$retorno['result'] = false;
			$retorno['msg'] = 'Metodo Invalido';
		}
		$this->evo->json($retorno);
	}

	public function update(){
		if ($_POST){
			$dados = $this->input->post();
			$query = $this->db->where('PAG_CodigoPagina', $dados['PAG_CodigoPagina'])
												->update('paginas', $dados);
			if ($query){
				$retorno['result'] = true;
				$retorno['msg'] = 'Página Atualizada com Sucesso';
			}
			else {
				$retorno['result'] = false;
				$retorno['msg'] = 'Ocorreu um problema ao Atualizada sua página';
			}
		}
		else {
			$retorno['result'] = false;
			$retorno['msg'] = 'Metodo Invalido';
		}
		$this->evo->json($retorno);
	}

	public function editar($id){
		$dados['id_page'] = $id;
		$this->template->make('paginas/v_paginas_editar',$dados);
	}
}
