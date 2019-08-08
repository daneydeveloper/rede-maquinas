<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
	public $is_hookable = TRUE;

	public function index(){
		$this->template->make('gerencial/v_produtos');
	}

	public function getProdutos($id = null){
		if ($id) {
			$query = $this->db->from('produtos')
											->where('PRO_CodigoProduto', $id)
											->get()
											->first_row();
			if ($query){
				$query->PRO_SEO	 = json_decode($query->PRO_SEO);
			}							
			
		}
		else {
			$query = $this->db->from('produtos')
											->join('categorias', 'PRO_CodigoCategoria = CAT_CodigoCategoria')
											->join('marcas',' PRO_CodigoMarca = MAR_CodigoMarca')
											->where('PRO_Status <>', -1)
											->get()
											->result();

			if ($query){
				for ($i=0; $i < count($query); $i++) { 
					$query[$i]->PRO_SEO = json_decode($query[$i]->PRO_SEO);
				}
			}
		}
		$this->evo->json($query);
	}

	public function upload(){
		if ($_FILES) {
			$this->load->helper("image");
			$upload_path = getcwd() . DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."images".DIRECTORY_SEPARATOR."produtos".DIRECTORY_SEPARATOR;

			foreach ($_FILES as $file) {
				if ($file["size"] > 0) {

					$filename = $file["tmp_name"];
          $fileinfo = pathinfo($file["name"]);
          $fileext = strtolower($fileinfo["extension"]);
          $newfilename = md5_file($filename) . '.' . $fileext;
          $newfile = $upload_path . "/" . $newfilename;

          rename($filename,$newfile);
          chmod($newfile,0644);
          $config['image_library'] = 'gd2';
					$config['source_image']	= $newfile;
					$config['maintain_ratio'] = TRUE;
					$config['create_thumb'] = TRUE;
					$config['width']	= 540;
					$config['height']	= 540;

					$this->load->library('image_lib', $config); 
					$this->image_lib->resize();
					$this->image_lib->clear();
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

	public function salvarProduto() {
		if ($_POST) {
			$dados = $this->input->post();
			$dados['PRO_URL'] = $this->url->shortURL($dados['PRO_Nome']);
			$dados['PRO_Status'] = 1;
			$dados['PRO_SEO'] = (@$dados['PRO_SEO'])?json_encode($dados['PRO_SEO']):false;

			$query = $this->db->insert('produtos', $dados);
			if ($query) {
				$this->session->usuario->CodigoProduto = $this->db->insert_id();
				$retorno['result'] = true;
				$retorno['msg'] = "Produto adicionado com sucesso, você será redirecionado para a Galeria de Imagens";
			}
			else {
				$retorno['result'] = false;
				$retorno['msg'] = "Ocorreu um problema ao Adicionar o Produto, tente novamente";
			}
		}
		else {
			$retorno['result'] = false;
			$retorno['msg'] = "Metodo Invalido";
		}
		$this->evo->json($retorno);
	}

	public function galeria(){
		$this->template->make('gerencial/v_produtos_galeria');
	}

	public function adicionar(){
		$this->template->make('gerencial/v_produtos_adicionar');
	}

	public function salvarGaleria(){
		$dados = $this->input->post();
		foreach ($dados['images'] as $key => $value) {
			$data['IMG_CodigoProduto'] = $this->session->usuario->CodigoProduto;
			$data['IMG_Imagem'] = $value;
			$query = $this->db->insert('produtos_imagem', $data);
			if ($query) {
				$retorno['result'] = true;
				$retorno['msg'] = "Imagens Salvas Com Sucesso";
			}
			else {
				$retorno['result'] = false;
				$retorno['msg'] = "Ocorreu um problema ao Salvar suas imagens";
			}
		}
		$this->evo->json($retorno);
	}

	public function editar($id = null){
		if ($_POST) {
			$dados = $this->input->post();
			$dados['PRO_URL'] = $this->url->shortURL($dados['PRO_Nome']);
			$dados['PRO_SEO'] = (@$dados['PRO_SEO'])?json_encode($dados['PRO_SEO']):false;

			$query = $this->db->where('PRO_CodigoProduto', $dados['PRO_CodigoProduto'])
												->update('produtos', $dados);
			if ($query){
				$this->session->usuario->CodigoProduto = $dados['PRO_CodigoProduto'];
				$retorno['result'] = true;
				$retorno['msg'] = "Produto atualizado com sucesso";
			}
			else {
				$retorno['result'] = false;
				$retorno['msg'] = "Ocorreu um problema ao atualizar este produto";
			}
			$this->evo->json($retorno);
		}
		else {
			if ($id) {
				$query['produtos'] = $this->db->from('produtos')
																			->where('PRO_CodigoProduto', $id)
																			->get()
																			->first_row();
				if ($query){
					$this->template->make('gerencial/v_produtos_editar', $query);
				}
				else {
					redirect(base_url('/gerencial/produtos/?aviso=1'));
				}
			}
			else {
				redirect(base_url('/gerencial/produtos/?aviso=1'));
			}
		}
	}
}