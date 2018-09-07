<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_viuva extends MY_Controller {
	public function index()
	{
		$variaveis['viuvas'] = $this->m_pessoa->pessoas('1');
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_info_viuva', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}
}
