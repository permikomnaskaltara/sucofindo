<?php 

/* huruf awal kelas usahakan besar, karena di server production case sensitif */
class V1 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array("v1_dao"));
	}

	public function index() {
		$this->load->view("public/header");
		$this->load->view("v1");
		$this->load->view("public/footer");
	}

	public function page($p="default") {
		$this->load->view("public/header");
		switch($p) {
			case "contoh-view" :
				$this->load->view("contoh-view");
			break;
			case "about-us" :
				$this->load->view("about-us");
			break;
			case "contact-us" :
				$this->load->view("contact-us");
			break;
			case "client-room" :
				$data['csrf'] = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);

				$this->load->view("client-room",$data);
			break;
			default :
				$this->load->view("error-404");
			break;
		}
		$this->load->view("public/footer");
	}

	public function client_auth() {
		$client   = $this->input->post("cln");
		$username = $this->input->post("usr");
		$password = $this->input->post("pwd");
		$o = $this->v1_dao->client_check($username, $password, $client);
		if($o->num_rows() > 0) {
			redirect('/client/index/'.$o->result()[0]->base_page, 'refresh');
		} else {
			$this->session->set_flashdata('error_login_client', 'Username or password incorrect !');
			redirect('/v1/page/client-room/', 'refresh');
		}
	}
}