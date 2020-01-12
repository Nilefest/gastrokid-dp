<?php
class indexController extends Controller {
	public function index() {
        
        $this->config->title_name = "Наші послуги";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/index', $this->data);
	}
    
	public function diagnostic() {
        
        $this->config->title_name = "Діагностика";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/diagnostic', $this->data);
	}
    
	public function prevention() {
        
        $this->config->title_name = "Профілактика";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/prevention', $this->data);
	}
    
	public function treatment() {
        
        $this->config->title_name = "Лікування";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/treatment', $this->data);
	}
    
	public function diettherapy() {
        
        $this->config->title_name = "Дієтотерапія";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/diettherapy', $this->data);
	}
    
	public function psychotherapy() {
        
        $this->config->title_name = "Психотерапія";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/psychotherapy', $this->data);
	}
    
	public function gastroscopy() {
        
        $this->config->title_name = "Гастроскопия";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/gastroscopy', $this->data);
	}
    
	public function colonoscopy() {
        
        $this->config->title_name = "Колоноскопія";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('services/colonoscopy', $this->data);
	}
}
?>