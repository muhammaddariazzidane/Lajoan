<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['map'] = $this->db->get('videos')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('videos/home_page', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$data['map'] = $this->db->get('videos')->result_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pid'] = $this->db->get_where('videos', ['id' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('videos/detail_video', $data);
		$this->load->view('templates/footer');
	}
}
