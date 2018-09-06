<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pessoa extends CI_Model {

	public function pessoas($tipo_pessoa){ //Juntar com as outras
		return $this->db->query("SELECT id_pessoa,cpf, nome, telefone, status
		FROM pessoas
		WHERE tipo_pessoa = {$tipo_pessoa}");
	}
}
