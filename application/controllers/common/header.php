<?php
class headerController extends Controller {

	public function index() {
        
        if($this->config->title_name == ''){
            $this->data['title'] = $this->config->site_name;
        }
        else{
            $this->data['title'] = $this->config->title_name . ' | ' . $this->config->site_name;
        }
        
        $this->data['description'] = $this->config->meta_description;
        $this->data['keywords'] = $this->config->meta_keywords;
        
        $this->data['css'] = $this->config->custom_css;
        
		return $this->load->view('common/header', $this->data);
	}
}
?>
