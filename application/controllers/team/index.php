<?php
class indexController extends Controller {
	public function index() {
        
        $this->config->title_name = "Наша команда";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('team/index', $this->data);
	}
}
?>