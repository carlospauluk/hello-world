<?php

class CampanhaModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function findAll() {

        $query = $this->db->get('crm_promo_campanha');
        return $query->result_array();

        return $query->row_array();
    }

    public function save() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'descricao' => $this->input->post('descricao'),            
            'dt_inicio' => $this->input->post('dt_inicio')
        );

        return $this->db->insert('crm_promo_campanha', $data);
    }

}
