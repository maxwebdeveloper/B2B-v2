<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

    public function __construct(){

		parent::__construct();

	}

    public function index(){

        $data['title_page'] = 'Backoffice | Home';

		$this->load->view('template/header', $data);
		$this->load->view('Main/Home');
		$this->load->view('template/footer');

    }

    public function nameFunction(){



    }
}
