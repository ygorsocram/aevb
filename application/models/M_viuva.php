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
				return $this->db->query("SELECT * FROM estados_civis order by descricao desc");
		}
		
	public function cadastrar($data)
	{
		$this->db->insert('viuvas', $data);
        return $this->db->insert_id();
	}
	
	public function viuva($id_viuva){
				return $this->db->query("SELECT *
                                 FROM viuvas t WHERE  id_viuva = $id_viuva");
	}
	
	public function editar_viuva($dados,$id_viuva)
	{

			$this->db->where('id_viuva', $id_viuva);
			$this->db->update('viuvas',$dados);
	}

	public function excluir_viuva($id_viuva){
		$this->db
            ->where('id_viuva', $id_viuva)
            ->delete('viuvas');
            
        $this->db
            ->where('id_viuva', $id_viuva)
            ->delete('filhos');
	}
	
	public function data_nascimento($data_inicio,$data_fim){
				return $this->db->query("SELECT v.id_viuva,i.nome as nome_instituicao, v.nome, v.telefone, v.data_nascimento, v.status FROM viuvas v left join instituicoes i on v.id_instituicao = i.id_instituicao where data_nascimento between '$data_inicio' and '$data_fim'");
	}  

    public function altera_foto($foto, $id_viuva){
        $this->db
            ->where('id_viuva', $id_viuva)
            ->update('viuvas', ['foto' => $foto]);
    }
    
	public function add_filho($nome_filhos, $id_viuva){
        $this->db
            ->where('id_viuva', $id_viuva)
            ->delete('filhos');
            
        foreach($nome_filhos as $filho){
            $this->db
                ->insert('filhos', ['nome' => $filho, 'id_viuva' => $id_viuva]);
        }
    }
	
    public function filhos($id_viuva){
        return $this->db
            ->select('nome')
            ->from('filhos')
            ->where('id_viuva', $id_viuva)
            ->get();
    }
}
