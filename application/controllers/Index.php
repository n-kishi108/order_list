<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('db');
    }
    public function index() {
        $data['list'] = $this->db->getAll();
        $this->load->view('index/index', $data);
    }
}
?>