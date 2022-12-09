<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    if ($this->form_validation->run() == false) {
      $data['title'] = "Login";
      // $this->load->view('templates/auth_header.php', $data);
      $this->load->view('auth/login', $data);
      // $this->load->view('templates/auth_footer.php');
    } else {
      $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['email' => $email])->row_array();

    if ($user) {

      if ($user['is_active'] == 1) {
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id'],
          ];
          $this->session->set_userData($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('home');
          }
        }

      // $this->AuthModel->login();
    }
  }
  public function register()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => "This email has already registered"
    ]);
    $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]', [
      'required' => 'The Password field is required.',
      'main_length' => 'password to short!',
      'matches' => 'password dont matches!',
    ]);
    $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]', [
      'required' => 'The Password field is required.',
    ]);

    if ($this->form_validation->run() == false) {
      $data['title'] = "Register";
      // $this->load->view('templates/auth_header.php', $data);
      $this->load->view('auth/register', $data);
      // $this->load->view('templates/auth_footer.php');
    } else {
      $data = [
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'image' => "default.jpg",
        'password' => $this->input->post('password1'),
        'role_id' => 2,
        'date_created' => time(),
      ];
      $this->db->insert('user', $data);
      redirect('auth');
      // $this->AuthModel->register();
    }
  }
  public function logout()
  {
    $this->AuthModel->logout();
  }
  public function block()
  {
    $data['title'] = "Blocked";
    $this->load->view('auth/block', $data);
  }
}
