<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index() {

        $data['ver_todos'] = "Ver todos";

        $data['header'] = $this->load->view('common/header','', TRUE);
        $data['footer'] = $this->load->view('common/footer','', TRUE);

        $this->load->view('index', $data);
    }
}