<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->model('web_data');
		
		$data['page_title'] = 'Home';
		
		$data['newest_news'] = $this->web_data->get_newest_news(4);
		$this->load->view('home', $data);
	}
	
	public function struktur()
	{
		$data['page_title'] = 'Struktur';
		$this->load->view('struktur',$data);
	}
	
	public function program()
	{
		$data['page_title'] = 'Program';
		
		$this->load->view('program',$data);
	}
	
	public function data()
	{	
		$data['page_title'] = 'Database';
		$this->load->view('data', $data);
	}
	
	public function news($id)
	{
		$this->load->model('web_data');
		$data['page_title'] = 'News';
		$data['news_id'] = $this->web_data->get_news_id($id);
		$this->load->view('news', $data);
	}
	
	public function signin()
	{
		$data['page_title'] = 'Admin';
		$this->load->view('signin', $data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */