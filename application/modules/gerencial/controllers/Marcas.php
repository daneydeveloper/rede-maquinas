<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {
	public $is_hookable = TRUE;

	public function index(){
		$this->template->make('gerencial/v_marcas');
	}

	public function getMarcas(){
		$query = $this->db->from('marcas')
											->get()
											->result();
		$this->evo->json($query);
	}

	public function upload(){
		if ($_FILES) {
			$this->load->helper("image");
			$upload_path = getcwd() . DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."marcas".DIRECTORY_SEPARATOR;

			foreach ($_FILES as $file) {
				if ($file["size"] > 0) {

					$filename = $file["tmp_name"];
          $fileinfo = pathinfo($file["name"]);
          $fileext = strtolower($fileinfo["extension"]);
          $newfilename = md5_file($filename) . '.' . $fileext;
          $newfile = $upload_path . "/" . $newfilename;

          rename($filename,$newfile);
          chmod($newfile,0644);
          $retorno['img'] = $newfilename;
				}
				else {
					$retorno['result'] = false;
					$retorno['msg'] = "Nenhuma imagem foi informada";
				}
			}
		}
		else {
			$retorno['result'] = false;
			$retorno['msg'] = "Metodo Invalido";
		}
		$this->evo->json($retorno);
	}

	public function salvarMarca(){
		if ($_POST) {
			$dados = $this->input->post();
		  $query = $this->db->insert('marcas', $dados);
		  if ($query) {
		  	$retorno['result'] = true;
		  	$retorno['msg'] = 'Empresa cadastrada com Sucesso';
		  }
		  else {
		  	$retorno['result'] = false;
		  	$retorno['msg'] = 'Ocorreu um problema ao cadastrar a Marca';
		  }
		}
		else {
		  	$retorno['result'] = false;
		  	$retorno['msg'] = 'Ocorreu um problema ao cadastrar a Marca';
		  }
		$this->evo->json($retorno);
	}
}
