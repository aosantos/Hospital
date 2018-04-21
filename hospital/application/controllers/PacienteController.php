<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PacienteController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PacienteModel');
    }

    public function index() {
        $data['lista'] = $this->PacienteModel->paciente();
        
        $this->load->view('paciente', $data);
    }

    public function cadastrar() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'Nome ', 'required');
        $this->form_validation->set_rules('nome_mae', 'Descrição', 'required');
        $this->form_validation->set_rules('nome_pai', 'Data de Inicio', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('erro2', "Preencha todos os campos!");
            $this->index();
        } else {
            $nome           = $this->input->post('nome');
            $mae            = $this->input->post('nome_mae');
            $pai            = $this->input->post('nome_pai');
            $email          = $this->input->post('email');
            $status         = $this->input->post('status');
            $date           = $this->input->post('data');
            $rua            = $this->input->post('rua');
            $nome_bairro    = $this->input->post('nome_bairro');

            $data = array(
                'nome'      => $nome,
                'nome_mae'  => $mae,
                'nome_pai'  => $pai,
                'email'     => $email,
                'status'    => $status,
                'data'      => $date,
            );

            $this->db->insert('paciente', $data);

            $paciente_id = $this->db->insert_id();
            $datas = array(
                'paciente_id'   => $paciente_id,
                'rua'           => $rua,
                'nome_bairro'   => $nome_bairro,
                'status'        => $status,
                'data'          => $date,
            );
            $this->db->insert('endereco', $datas);

            redirect('PacienteController');
            exit;
        }
    }

    public function atualizar() {
        $id             = $this->input->post('id');
        $nome           = $this->input->post('nome');
        $mae            = $this->input->post('nome_mae');
        $pai            = $this->input->post('nome_pai');
        $email          = $this->input->post('email');
        $status         = $this->input->post('status');
        $date           = $this->input->post('data');
        $rua            = $this->input->post('rua');
        $nome_bairro    = $this->input->post('nome_bairro');

        $data = array(
            'nome'      => $nome,
            'nome_mae'  => $mae,
            'nome_pai'  => $pai,
            'email'     => $email,
            'status'    => $status,
            'data'      => $date,
        );
        $this->db->where('id', $id);
        $this->db->update('paciente', $data);

        $datas = array(
            'paciente_id'   => $id,
            'rua'           => $rua,
            'nome_bairro'   => $nome_bairro,
            'status'        => $status,
            'data'          => $date,
        );

        $this->db->where('paciente_id', $id);
        $this->db->update('endereco', $datas);

        redirect('PacienteController');
        exit;
    }

    public function remover($id) {

        $this->db->where('paciente_id', $id);
        $this->db->delete('endereco');
        $this->db->count_all_results('endereco');
        $this->db->where('paciente_id', "$id");
        $this->db->from('endereco');

        $total = $this->db->count_all_results();
        if ($total == 0) {
            $this->db->where('id', $id);
            $this->db->delete('paciente');
        }
        redirect('PacienteController');
        exit;
    }

}
