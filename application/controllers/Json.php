<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {
	public $is_hookable = TRUE;

	public function getMarcas(){
		$query = $this->db->from('marcas')
											->get()
											->result();
		$this->evo->json($query);
	}

	public function buscarCategorias($id){
		$query = $this->db->from('categorias')
											->where('CAT_CodigoMarca', $id)
											->get()
											->result();
		$this->evo->json($query);
	}

	public function getAvisos($id){
		$query = $this->db->from('avisos')
											->where('AV_CodigoAviso', $id)
											->get()
											->first_row();
		$this->evo->json($query);
	}

	public function novoVisitante(){
		if($_POST) {
			$dados = $this->input->post();
		}
		else {

		}
	}
}
