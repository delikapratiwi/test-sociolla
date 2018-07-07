<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * @author Delikapratiwi@gmail.com
	 */
	public function index()
	{
		$data['post'] = $this->main_model->getAllData()->result();
		$this->load->view('main', $data);
	}

	/**
	 * function daftar() untuk registrasi.
	 *
	 * @author Delikapratiwi@gmail.com
	 */
	
	public function daftar()
	{
		$email = $this->input->post('email');
		$name = $this->input->post('name');	
		$password = @ aes_encrypt($this->input->post('password'));
		$alamat = $this->input->post('alamat');
		
		$data = array(
				'EMAIL'		=> $email,
				'NAME'		=> $name,
				'PASSWORD'	=> $password,
				'ALAMAT'	=> $alamat
				);

		$this->main_model->insert('user', $data);
		redirect('main/index');
	}

	/**
	 * function add_thread() untuk menambahkan thread.
	 *
	 * @author Delikapratiwi@gmail.com
	 */
	
	public function add_thread()
	{
		$judul = $this->input->post('judul');
		$desc = $this->input->post('desc');	
		
		$data = array(
				'TITLE'		=> $judul,
				'TEXT'		=> $desc
				);

		$this->main_model->insert('thread', $data);
		redirect('main/index');
	}

	/**
	 * function get_thread_by_id() untuk ambil thread yg dipilih.
	 *
	 * @author Delikapratiwi@gmail.com
	 */
	
	public function get_thread_by_id($id)
	{
		$data['thread'] = $this->main_model->get_thread_by_id($id)->result();
		$this->load->view('thread', $data);
	}


}
