<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_instituicao extends CI_Model {
	
	public function instituicoes(){
				return $this->db->query("SELECT * FROM instituicoes");
		}

	public function cidades(){
				return $this->db->query("SELECT * FROM cidades");
		}
		
	public function cadastrar($data)
	{
			$this->db->insert('instituicoes', $data);
	}
	
	public function instituicao($id_instituicao){
				return $this->db->query("SELECT *
                                 FROM   instituicoes t WHERE  id_instituicao = $id_instituicao");
	}
	
	public function editar_instituicao($dados,$id_instituicao)
	{

			$this->db->where('id_instituicao', $id_instituicao);
			$this->db->update('instituicoes',$dados);
	}

	public function excluir_instituicao($id_instituicao)
	{
			$this->db->where('id_instituicao', $id_instituicao);
			$this->db->delete('instituicoes');
	}
}
