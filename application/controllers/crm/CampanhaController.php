<?php

class CampanhaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('crm/campanhaModel');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['itens'] = $this->campanhaModel->findAll();

        $data['title'] = 'Campanhas de Promoções';

        $this->load->view('templates/header', $data);
        $this->load->view('crm/CampanhaListView', $data);
        $this->load->view('templates/footer');
    }

    public function form() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Dados da Campanha';

        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('dt_inicio', 'Dt Início', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('crm/CampanhaFormView');
            $this->load->view('templates/footer');
        } else {
            $this->campanhaModel->save();
            $this->index();
        }
    }

}
