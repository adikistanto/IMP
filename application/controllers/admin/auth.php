<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class auth extends CI_Controller {


	public function authenticate() { // action login				
		$_submitter		= $this->input->post('form_submit');
		$_login_user	= $this->input->post('username');
		$_login_pass	= md5($this->input->post('password'));
		
		$this->load->model('web_admin');
		$_user_row = $this->web_admin->user_authenticate($_login_user, $_login_pass);
			if ($_user_row != null) {
					$this->output->set_header("Location:/CodeIgniter/admin/dasboard");
					return;
			} else {
					$data['errors'] = array('Username atau password salah. Pastikan Anda telah menuliskannya dengan benar.');
					$this->load->view("index");
			}
	}
	public function logout() {
		if ($this->nativesession->get('user_id_')) {
			$this->nativesession->delete('user_id_');
			$this->nativesession->delete('user_name_');
			$this->nativesession->delete('user_role_');
		}
		$this->output->set_header('Location: '.base_url("/admin"));
	}
}