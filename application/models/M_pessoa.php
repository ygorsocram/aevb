<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pessoa extends CI_Model {
	public function pessoas($tipo_dado, $where){
		switch ($tipo_dado) {
			case 'tabela_pessoa':
				return $this->db->query("SELECT id_pessoa,cpf, nome, telefone, status
																 FROM pessoas
																 WHERE tipo_pessoa = {$where}");
				break;
			case 'info_viuva':
				return $this->db->query("SELECT *
					 											 FROM pessoas
																 WHERE id_pessoa={$where}");
				break;
		}
	}
}
