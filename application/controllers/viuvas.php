<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viuvas extends MY_Controller {
	
	function __construct(){
			parent::__construct();
	$this->load->model('m_viuva');
	$this->load->model('m_instituicao');
	}
	
	public function index(){
		$variaveis['viuvas'] = $this->m_viuva->viuvas();
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_viuvas', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}

	public function nova_viuva() {
		$variaveis['tipo_tela'] = 'nova';
		$variaveis['id_viuva'] = '';
		$variaveis['nome'] = '';
		$variaveis['telefone'] = '';
		$variaveis['cpf'] = '';
		$variaveis['rg'] = '';
		$variaveis['orgao_exp'] = '';
		$variaveis['naturalidade'] = '';
		$variaveis['estado_civil'] = '';
		$variaveis['data_nascimento'] = '';
		$variaveis['id_instituicao'] = '';
		$variaveis['ler'] = '';
		$variaveis['diabetes'] = '';
		$variaveis['medicacao'] = '';
		$variaveis['observacao_medicacao'] = '';
		$variaveis['renda'] = '';
		$variaveis['origem_renda'] = '';
		$variaveis['observacao_renda'] = '';
		$variaveis['recebe_cesta'] = '';
		$variaveis['origem_cesta'] = '';
		$variaveis['ajuda_cesta'] = '';
		$variaveis['observacao_cesta'] = '';
		$variaveis['mora_aluguel'] = '';
		$variaveis['paga_aluguel'] = '';
		$variaveis['ajuda_aluguel'] = '';
		$variaveis['observacao_aluguel'] = '';
		$variaveis['cep'] = '';
		$variaveis['logradouro'] = '';
		$variaveis['numero_endereco'] = '';
		$variaveis['complemento'] = '';
		$variaveis['bairro'] = '';
		$variaveis['id_cidade'] = '';
		$variaveis['referencia'] = '';
		$variaveis['nome_esposo'] = '';
		$variaveis['mora_sozinha'] = '';
		$variaveis['nome_acompanhante'] = '';
		$variaveis['motivo_procura'] = '';
		$variaveis['observacao_geral'] = '';
		$variaveis['status'] = '';
		
		$variaveis['instituicoes'] = $this->m_instituicao->instituicoes();
		$variaveis['cidades'] = $this->m_viuva->cidades();
		$variaveis['estados_civis'] = $this->m_viuva->estados_civis();
		
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_info_viuva', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');		
	}
	
	public function cadastrar() {
		$id_viuva = $_GET['id_viuva'];
		
		$nome = $this->input->post('nome');
		$telefone = $this->input->post('telefone');
		$cpf = $this->input->post('cpf');
		$rg = $this->input->post('rg');
		$orgao_exp = $this->input->post('orgao_exp');
		$naturalidade = $this->input->post('naturalidade');
		$estado_civil = $this->input->post('estado_civil');
		$data_nascimento = $this->input->post('data_nascimento');
		$id_instituicao = $this->input->post('id_instituicao');
		$ler = $this->input->post('ler');
		$diabetes = $this->input->post('diabetes');
		$medicacao = $this->input->post('medicacao');
		$observacao_medicacao = $this->input->post('observacao_medicacao');
		
		$renda = $this->input->post('renda');
		$origem_renda = $this->input->post('origem_renda');
		$observacao_renda = $this->input->post('observacao_renda');
		$recebe_cesta = $this->input->post('recebe_cesta');
		$origem_cesta = $this->input->post('origem_cesta');
		$ajuda_cesta = $this->input->post('ajuda_cesta');
		$observacao_cesta = $this->input->post('observacao_cesta');
		$mora_aluguel = $this->input->post('mora_aluguel');
		$paga_aluguel = $this->input->post('paga_aluguel');
		$ajuda_aluguel = $this->input->post('ajuda_aluguel');
		$observacao_aluguel = $this->input->post('observacao_aluguel');
		
		$cep = $this->input->post('cep');
		$logradouro = $this->input->post('logradouro');
		$numero_endereco = $this->input->post('numero_endereco');
		$complemento = $this->input->post('complemento');
		$bairro = $this->input->post('bairro');
		$id_cidade = $this->input->post('id_cidade');
		$referencia = $this->input->post('referencia');
		
		$nome_esposo = $this->input->post('nome_esposo');
		$mora_sozinha = $this->input->post('mora_sozinha');
		$nome_acompanhante = $this->input->post('nome_acompanhante');
		
		$motivo_procura = $this->input->post('motivo_procura');
		$observacao_geral = $this->input->post('observacao_geral');
		
		$dados= array(
			'nome' => $nome,
			'telefone' => $telefone,
			'cpf' => $cpf,
			'rg' => $rg ,
			'orgao_exp' => $orgao_exp,
			'naturalidade' => $naturalidade,
			'estado_civil' => $estado_civil,
			'data_nascimento' => $data_nascimento,
			'id_instituicao' => $id_instituicao,
			'ler' => $ler,
			'diabetes' => $diabetes,
			'medicacao' => $medicacao,
			'observacao_medicacao' => $observacao_medicacao,
			'renda' => $renda,
			'origem_renda' => $origem_renda,
			'observacao_renda' => $observacao_renda,
			'recebe_cesta' => $recebe_cesta,
			'origem_cesta' => $origem_cesta,
			'ajuda_cesta' => $ajuda_cesta,
			'observacao_cesta' => $observacao_cesta,
			'mora_aluguel' => $mora_aluguel,
			'paga_aluguel' => $paga_aluguel,
			'ajuda_aluguel' => $ajuda_aluguel,
			'observacao_aluguel' => $observacao_aluguel,
			'cep' => $cep,
			'logradouro' => $logradouro,
			'numero_endereco' => $numero_endereco,
			'complemento' => $complemento,
			'bairro' => $bairro,
			'id_cidade' => $id_cidade,
			'referencia' => $referencia,
			'nome_esposo' => $nome_esposo,
			'mora_sozinha' => $mora_sozinha,
			'nome_acompanhante' => $nome_acompanhante,
			'motivo_procura' => $motivo_procura,
			'observacao_geral' => $observacao_geral,
			'status' => 'A'
			);
			
		$this->m_viuva->cadastrar($dados);
		
		$variaveis['viuvas'] = $this->m_viuva->viuvas();
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_viuvas', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}
	
	public function editar_viuva() {
		$id_viuva = $_GET['id_viuva'];
		
		$viuva = $this->m_viuva->viuva($id_viuva);
		
		$variaveis['tipo_tela'] = 'editar';
		$variaveis['id_viuva'] = $id_viuva;
		$variaveis['nome'] = $viuva->row()->nome;
		$variaveis['telefone'] = $viuva->row()->telefone;
		$variaveis['cpf'] = $viuva->row()->cpf;
		$variaveis['rg'] = $viuva->row()->rg;
		$variaveis['orgao_exp'] = $viuva->row()->orgao_exp;
		$variaveis['naturalidade'] = $viuva->row()->naturalidade;
		$variaveis['estado_civil'] = $viuva->row()->estado_civil;;
		$variaveis['data_nascimento'] = $viuva->row()->data_nascimento;
		$variaveis['id_instituicao'] = $viuva->row()->id_instituicao;
		$variaveis['ler'] = $viuva->row()->ler;
		$variaveis['diabetes'] = $viuva->row()->diabetes;
		$variaveis['medicacao'] = $viuva->row()->medicacao;
		$variaveis['observacao_medicacao'] = $viuva->row()->observacao_medicacao;
		$variaveis['renda'] = $viuva->row()->renda;
		$variaveis['origem_renda'] = $viuva->row()->origem_renda;
		$variaveis['observacao_renda'] = $viuva->row()->observacao_renda;
		$variaveis['recebe_cesta'] = $viuva->row()->recebe_cesta;
		$variaveis['origem_cesta'] = $viuva->row()->origem_cesta;
		$variaveis['ajuda_cesta'] = $viuva->row()->ajuda_cesta;
		$variaveis['observacao_cesta'] = $viuva->row()->observacao_cesta;
		$variaveis['mora_aluguel'] = $viuva->row()->mora_aluguel;
		$variaveis['paga_aluguel'] = $viuva->row()->paga_aluguel;
		$variaveis['ajuda_aluguel'] = $viuva->row()->ajuda_aluguel;
		$variaveis['observacao_aluguel'] = $viuva->row()->observacao_aluguel;
		$variaveis['cep'] = $viuva->row()->cep;
		$variaveis['logradouro'] = $viuva->row()->logradouro;
		$variaveis['numero_endereco'] = $viuva->row()->numero_endereco;
		$variaveis['complemento'] = $viuva->row()->complemento;
		$variaveis['bairro'] = $viuva->row()->bairro;
		$variaveis['id_cidade'] = $viuva->row()->id_cidade;
		$variaveis['referencia'] = $viuva->row()->referencia;
		$variaveis['nome_esposo'] = $viuva->row()->nome_esposo;
		$variaveis['mora_sozinha'] = $viuva->row()->mora_sozinha;
		$variaveis['nome_acompanhante'] = $viuva->row()->nome_acompanhante;
		$variaveis['motivo_procura'] = $viuva->row()->motivo_procura;
		$variaveis['observacao_geral'] = $viuva->row()->observacao_geral;
		$variaveis['status'] = $viuva->row()->status;
		
		$variaveis['instituicoes'] = $this->m_instituicao->instituicoes();
		$variaveis['cidades'] = $this->m_viuva->cidades();
		$variaveis['estados_civis'] = $this->m_viuva->estados_civis();
		
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_info_viuva', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');		
	}
	
	public function salvar_edicao() {
		$id_viuva = $_GET['id_viuva'];
		
		$nome = $this->input->post('nome');
		$telefone = $this->input->post('telefone');
		$cpf = $this->input->post('cpf');
		$rg = $this->input->post('rg');
		$orgao_exp = $this->input->post('orgao_exp');
		$naturalidade = $this->input->post('naturalidade');
		$estado_civil = $this->input->post('estado_civil');
		$data_nascimento = $this->input->post('data_nascimento');
		$id_instituicao = $this->input->post('id_instituicao');
		$ler = $this->input->post('ler');
		$diabetes = $this->input->post('diabetes');
		$medicacao = $this->input->post('medicacao');
		$observacao_medicacao = $this->input->post('observacao_medicacao');
		
		$renda = $this->input->post('renda');
		$origem_renda = $this->input->post('origem_renda');
		$observacao_renda = $this->input->post('observacao_renda');
		$recebe_cesta = $this->input->post('recebe_cesta');
		$origem_cesta = $this->input->post('origem_cesta');
		$ajuda_cesta = $this->input->post('ajuda_cesta');
		$observacao_cesta = $this->input->post('observacao_cesta');
		$mora_aluguel = $this->input->post('mora_aluguel');
		$paga_aluguel = $this->input->post('paga_aluguel');
		$ajuda_aluguel = $this->input->post('ajuda_aluguel');
		$observacao_aluguel = $this->input->post('observacao_aluguel');
		
		$cep = $this->input->post('cep');
		$logradouro = $this->input->post('logradouro');
		$numero_endereco = $this->input->post('numero_endereco');
		$complemento = $this->input->post('complemento');
		$bairro = $this->input->post('bairro');
		$id_cidade = $this->input->post('id_cidade');
		$referencia = $this->input->post('referencia');
		
		$nome_esposo = $this->input->post('nome_esposo');
		$mora_sozinha = $this->input->post('mora_sozinha');
		$nome_acompanhante = $this->input->post('nome_acompanhante');
		
		$motivo_procura = $this->input->post('motivo_procura');
		$observacao_geral = $this->input->post('observacao_geral');
		
		$dados= array(
			'nome' => $nome,
			'telefone' => $telefone,
			'cpf' => $cpf,
			'rg' => $rg ,
			'orgao_exp' => $orgao_exp,
			'naturalidade' => $naturalidade,
			'estado_civil' => $estado_civil,
			'data_nascimento' => $data_nascimento,
			'id_instituicao' => $id_instituicao,
			'ler' => $ler,
			'diabetes' => $diabetes,
			'medicacao' => $medicacao,
			'observacao_medicacao' => $observacao_medicacao,
			'renda' => $renda,
			'origem_renda' => $origem_renda,
			'observacao_renda' => $observacao_renda,
			'recebe_cesta' => $recebe_cesta,
			'origem_cesta' => $origem_cesta,
			'ajuda_cesta' => $ajuda_cesta,
			'observacao_cesta' => $observacao_cesta,
			'mora_aluguel' => $mora_aluguel,
			'paga_aluguel' => $paga_aluguel,
			'ajuda_aluguel' => $ajuda_aluguel,
			'observacao_aluguel' => $observacao_aluguel,
			'cep' => $cep,
			'logradouro' => $logradouro,
			'numero_endereco' => $numero_endereco,
			'complemento' => $complemento,
			'bairro' => $bairro,
			'id_cidade' => $id_cidade,
			'referencia' => $referencia,
			'nome_esposo' => $nome_esposo,
			'mora_sozinha' => $mora_sozinha,
			'nome_acompanhante' => $nome_acompanhante,
			'motivo_procura' => $motivo_procura,
			'observacao_geral' => $observacao_geral,
			'status' => 'A'
			);
			
		$this->m_viuva->editar_viuva($dados,$id_viuva);
		
		$variaveis['viuvas'] = $this->m_viuva->viuvas();
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_viuvas', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
	}
	
	public function excluir_viuva(){
		$id_viuva = $_GET['id_viuva'];
		
		$this->m_viuva->excluir_viuva($id_viuva);
			
		$variaveis['viuvas'] = $this->m_viuva->viuvas();
		$this->load->view('cabecalhos/v_cabecalho_padrao');
		$this->load->view('v_viuvas', $variaveis);
		$this->load->view('rodapes/v_rodape_padrao');
		}
}
