<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instituicoes extends MY_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->model('m_instituicao');
	}
	
	public function index(){
		$variaveis['instituicoes'] = $this->m_instituicao->instituicoes();
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_instituicoes', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}

	public function nova_instituicao() {
		$variaveis['tipo_tela'] = 'nova';		
		$variaveis['instituicoes'] = $this->m_instituicao->instituicoes();
		$variaveis['cidades'] = $this->m_instituicao->cidades();
		
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_info_instituicao', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');		
	}
	
	public function cadastrar() {		
		$nome = $this->input->post('nome');
		$telefone = $this->input->post('telefone');
		$cep = $this->input->post('cep');
		$logradouro = $this->input->post('logradouro');
		$numero_endereco = $this->input->post('numero_endereco');
		$complemento = $this->input->post('complemento');
		$bairro = $this->input->post('bairro');
		$id_cidade = $this->input->post('id_cidade');
		$referencia = $this->input->post('referencia');
		$observacao_geral = $this->input->post('observacao_geral');
		
		$dados = ['nome' => $nome,
			'telefone' => $telefone,
			'cep' => $cep,
			'logradouro' => $logradouro,
			'numero_endereco' => $numero_endereco,
			'complemento' => $complemento,
			'bairro' => $bairro,
			'id_cidade' => $id_cidade,
			'referencia' => $referencia,
			'observacao_geral' => $observacao_geral,
			'status' => 'A'];
			
		$this->m_instituicao->cadastrar($dados);
		
		redirect('instituicoes/');
	}
	
	public function editar_instituicao($id_instituicao){
		
		$instituicao = $this->m_instituicao->instituicao($id_instituicao);
		
		$variaveis['tipo_tela'] = 'editar';
		$variaveis['id_instituicao'] = $id_instituicao;
		$variaveis['nome'] = $instituicao->row()->nome;
		$variaveis['telefone'] = $instituicao->row()->telefone;
		$variaveis['cep'] = $instituicao->row()->cep;
		$variaveis['logradouro'] = $instituicao->row()->logradouro;
		$variaveis['numero_endereco'] = $instituicao->row()->numero_endereco;
		$variaveis['complemento'] = $instituicao->row()->complemento;
		$variaveis['bairro'] = $instituicao->row()->bairro;
		$variaveis['id_cidade'] = $instituicao->row()->id_cidade;
		$variaveis['referencia'] = $instituicao->row()->referencia;
		$variaveis['observacao_geral'] = $instituicao->row()->observacao_geral;
		$variaveis['status'] = $instituicao->row()->status;
		
		$variaveis['instituicoes'] = $this->m_instituicao->instituicoes();
		$variaveis['cidades'] = $this->m_instituicao->cidades();
		
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_info_instituicao', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');		
	}
	
	public function salvar_edicao(){		
		$id_instituicao = $this->input->post('id_instituicao');
		$nome = $this->input->post('nome');
		$telefone = $this->input->post('telefone');
		$cep = $this->input->post('cep');
		$logradouro = $this->input->post('logradouro');
		$numero_endereco = $this->input->post('numero_endereco');
		$complemento = $this->input->post('complemento');
		$bairro = $this->input->post('bairro');
		$id_cidade = $this->input->post('id_cidade');
		$referencia = $this->input->post('referencia');
		$observacao_geral = $this->input->post('observacao_geral');
		
		$dados= array(
			'nome' => $nome,
			'telefone' => $telefone,
			'cep' => $cep,
			'logradouro' => $logradouro,
			'numero_endereco' => $numero_endereco,
			'complemento' => $complemento,
			'bairro' => $bairro,
			'id_cidade' => $id_cidade,
			'referencia' => $referencia,
			'observacao_geral' => $observacao_geral,
			'status' => 'A'
			);
			
		$this->m_instituicao->editar_instituicao($dados,$id_instituicao);
		
		redirect('instituicoes/');
	}
	
	public function excluir_instituicao($id_instituicao){		
		$this->m_instituicao->excluir_instituicao($id_instituicao);
		redirect('instituicoes/');
	}
}
