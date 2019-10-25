<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Porfolio extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data['title']   = 'Mi titulo';
		$data['content'] = 'Mi contenido';

		$this->load->view('template_porfolio.php', $data);
	}
}