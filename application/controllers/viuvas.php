<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viuvas extends MY_Controller {
	public function index()
	{
		$variaveis['viuvas'] = $this->m_pessoa->pessoas('1');
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_viuvas', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}
}
