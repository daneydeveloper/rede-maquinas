<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public $is_hookable = TRUE;

	public function index(){
		$this->template->make('dashboard/v_home');
	}
}
