<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('menu_model','Menu');
	}

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view_formmenu');
	}

	public function menu_insert(){
		$menu = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			'mprice' => $this->input->post('price')
		);

		$this->Menu->cafe_insert($menu);

		$this->load->view('view_formmenu');

	}

	public function show_menu(){
		$result = $this->Menu->getmenu();
		$this->load->view('view_menu',$result);



	}

	public function delete_menu(){
		$id = $this->input->get('m_id');
		$this->Menu->delete($id);
		$result = $this->Menu->getmenu();
		$this->load->view('view_menu',$result);


	}

	public function edit_menu(){
		$result = $this->Menu->getid($this->input->get('m_id'));
		$this->load->view('view_formedit',$result);
	}

	public function update(){
		$menu = array(
			'menu_id' => $this->input->post('menu_id'),
			'menu_name' => $this->input->post('menu_name'),
			'mcategory_id' => $this->input->post('mcategory_id'),
			'mshop_id' => $this->input->post('mshop_id'),
			'mprice' => $this->input->post('price')
		);

		$this->Menu->menu_update($menu,$this->input->post('menu_id'));
		$result = $this->Menu->getmenu();
		$this->load->view('view_menu',$result);
	}


}
