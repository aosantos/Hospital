<?php

class PacienteModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function paciente() {
        $this->db->select('paciente.id as id ,
            paciente.nome,
            paciente.nome_mae,
            paciente.nome_pai,
            paciente.email,
            paciente.status,
            paciente.data,
            endereco.id as id_endereco,
            endereco.rua,
            endereco.nome_bairro');
        $this->db->from('paciente');
        $this->db->join('endereco', 'paciente.id = endereco.paciente_id', 'INNER');        
        $this->db->order_by("paciente.id ", "DESC");
        return $this->db->get()->result_array();
    }

}

?>