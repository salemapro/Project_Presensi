<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi extends CI_Controller
{

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

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_presensi');
		$this->load->model('M_auth');
		$this->load->model('M_hadir');
		if (!$this->M_auth->current_user()) {
			redirect('auth/login');
		}
	}

	public function submit()
	{
		$hasil['sukses'] = false;
		$hasil['error'] = "Ada Error terjadi";
		return json_encode($hasil);
		//return "Aku di klik";
	}

	function index()
	{
		$data['presensi'] = $this->M_presensi->get_data();
		// $this->load->view('v_header.php',$data);
		// $this->load->view('v_index.php',$data);
		//$this->load->view('v_login.php');
		$this->load->view('vw_header.php', $data);
		$this->load->view('vw_daftarRapat.php', $data);
	}

	function daftarRapat()
	{
		$data['presensi'] = $this->M_presensi->get_data();
		$this->load->view('vw_header.php', $data);
		$this->load->view('vw_daftarRapat.php', $data);
	}

	function daftarHadir()
	{
		//$data['dHadir'] = $this->M_hadir->get_hadir();
		$data['presensi'] = $this->M_presensi->get_data();
		$this->load->view('vw_header.php', $data);
		$this->load->view('vw_daftarHadir.php', $data);
	}

	// function get_hadir(){
	// 	$dHadir = $this->M_hadir->get_hadir();
	// 	return json_encode($dHadir);

	// }

	public function get_presensi()
	{
		$id_rapat = $this->input->post('id_rapat');
		$result = $this->M_hadir->get_presensi($id_rapat);
		echo json_encode($result);
	}
}
