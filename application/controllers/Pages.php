<?php
	class Pages extends CI_Controller{
 	function view( $page = 'home' ) {

		if( !file_exists(APPPATH."/views/pages/$page.php") ) {
			show_404();
		}




			$data['title'] = ucfirst($page);
			$active = array('home'=>'', 'login'=>'', 'view'=>'', 'suggestion'=>'');
			switch($page) {
				default:
					$active['home'] = 'active';
					break;
			}
			$data['active'] = $active;

			$this->load->view('templates/header', $data);
			$this->load->view("pages/$page", $data);
			$this->load->view('templates/footer', $data);

	}
}
