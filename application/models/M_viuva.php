<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_viuva extends CI_Model {
	
	public function viuvas(){
				return $this->db->query("SELECT v.id_viuva, v.nome, v.telefone, i.nome as nome_instituicao, v.status FROM viuvas v left join instituicoes i on v.id_instituicao = i.id_instituicao");
		}

	public function bairros(){
				return $this->db->query("SELECT * FROM bairros order by descricao asc");
		}
		
	public function cidades(){
				return $this->db->query("SELECT * FROM cidades order by descricao asc");
		}
		
	public function estados_civis(){
				return $this->db->query("SELECT * FROM estados_civis order by descricao asc");
		}
		
	public function cadastrar($data)
	{
			$this->db->insert('viuvas', $data);
	}
	
	public function viuva($id_viuva){
				return $this->db->query("SELECT *
                                 FROM   viuvas t WHERE  id_viuva = $id_viuva");
	}
	
	public function editar_viuva($dados,$id_viuva)
	{

			$this->db->where('id_viuva', $id_viuva);
			$this->db->update('viuvas',$dados);
	}

	public function excluir_viuva($id_viuva)
	{
			$this->db->where('id_viuva', $id_viuva);
			$this->db->delete('viuvas');
	}
}
