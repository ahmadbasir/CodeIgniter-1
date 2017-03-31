<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

  public function view($halaman = 'test')
  {
    # untuk mengecek adakah file yang di load?
    if(!file_exists(APPPATH."views/pages/".$halaman.'.php')){
      show_404();
    }

    # untuk mengoper data
    $data['judul'] = $halaman;

    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$halaman);
    $this->load->view('templates/footer');

  }

}
