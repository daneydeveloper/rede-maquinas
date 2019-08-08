<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Evo_Hooks {

	public function __construct(){
    $this->CI =& get_instance();
  }

	public function checkSession($dados = array()) {
		if ($this->CI->is_hookable) {
			if ($this->CI->session->userdata('usuario')) {
				return true;
			}
			else {
				redirect('login/?reason=sessionof');
				return false;
			}
		}
	}
}