<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class monitoring extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Monitoring_model');
    }

	function index()
	{
	  $data['hasil']=$this->Monitoring_model->Jum_absensi();
	  $this->load->view('monitoring',$data);
	}
}
?>