<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$nom   = 'Andrés';
		$nota  = 9.8;
		$asign = 'Naturals';
		// $this->load->view('welcome_message');
		echo "L'Alumne " . $nom . " ha tret un " . $nota . " a l'examen de " . $asign;
	}

	public function prueba()
	{
		$this->load->helper('url');
		$data['title']   = 'Mi titulo';
		$data['content'] = 'Mi contenido';
		echo '<pre>';
		print_r($data);
		$this->load->view('test.php', $data);
	}

	public function userID($user = '', $id = '') 
	{
		echo $user . ' ' . $id;
	}

	public function escuela($name='', $note='', $assign='') 
	{
		echo 'El alumno ' . $name . ' ha sacado un ' . $note . ' en ' . $assign;	
	}

	public function empleados() {
		$empleados = [
			['Andres', 'Santa Coloma de Gramenet', '40', '1500'],
			['Veronica', 'Santa Coloma de Gramenet', '38', '1200'],
			['Antonio', 'Viladecans', '35', '1300'],
			['Victoria', 'Castelldefels', '55', '1450'],
			['Evaristo', 'Barcelona', '60', '1920'],
			['Andrea', 'Sant Boi de Llobregat', '59', '1888']
		];

		foreach ($empleados as $empleado) {
			echo '·' . $empleado[0] . ' es de ' . $empleado[1] . ' i te ' . $empleado[2] . ' amb un salari de ' . $empleado[3] . "€<br>";
		}
	}

	public function ifelse() {
		$edat = 17;
		if ($edat >= 18) {
			echo "Soc major d'edat perque tinc " . $edat . " anys";
		} else {
			echo "Soc menor d'edat perque tinc " . $edat . " anys";
		}
	}
}
