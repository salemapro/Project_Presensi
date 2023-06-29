<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class presensi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct(){
	 parent::__construct();
	 	$this->load->helper('url');
	 	$this->load->model('M_presensi');
	 	$this->load->model('M_hadir');
	 	$this->load->model('M_auth');
	 	// if(!$this->M_auth->current_user()){
		// 	redirect('auth/login');
		// }
	 }
 
	function index(){
		$data['presensi'] = $this->M_presensi->get_data();
        $data['test'] = 'test';
		$this->load->view('v_header.php',$data);
		$this->load->view('v_index.php',$data);
		// $this->load->view('v_login.php');
	}

	function daftarRapat(){
		$data['presensi'] = $this->M_presensi->get_data();
		$this->load->view('v_header.php',$data);
		$this->load->view('v_daftarRapat.php',$data);
	}

	function daftarHadir(){
		$data['dHadir'] = $this->M_hadir->get_hadir();
		$data['presensi'] = $this->M_presensi->get_data();
		$this->load->view('v_header.php',$data);
		$this->load->view('v_daftarHadir.php',$data);
	}
}