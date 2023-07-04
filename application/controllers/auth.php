<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	 	$this->load->model('M_auth');
	 	$this->load->model('M_presensi');
	 }
 
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$data['presensi'] = $this->M_presensi->get_data();
		$this->load->library('form_validation');

		$rules = $this->M_auth->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('vw_index', $data);
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->M_auth->login($username, $password)){
			redirect('presensi');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->load->view('vw_index.php', $data);
	}

	public function logout()
	{
		$this->load->model('M_auth');
		$this->M_auth->logout();
		redirect(site_url());
	}
	

}
