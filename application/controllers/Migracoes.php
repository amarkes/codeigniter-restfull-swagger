<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migracoes extends CI_Controller {

	public function index()
	{
		$this->load->library('migration');

        $resultado = $this->migration->current();

        if($resultado != FALSE) {
            echo 'Atualizado: '.$resultado;
        }
        else {
            echo 'Erro: '.$this->migration->error_string();
        }
	}
}
