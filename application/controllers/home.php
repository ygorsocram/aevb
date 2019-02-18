<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){
			parent::__construct();
	$this->load->model('m_viuva');
	}
	
	public function index()
	{
		$data_inicio = date("Y-m-01");
		$data_fim = date("Y-m-t");
		
		$variaveis['viuvas'] = $this->m_viuva->data_nascimento($data_inicio, $data_fim);
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_home', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}
}
