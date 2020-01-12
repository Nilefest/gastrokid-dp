<?php
class footerController extends Controller {
	public function index() {
        
        $user = $this->user->isLogin();
        if(!empty($user))
            $this->data['user'] = $user['name'];
        else
            $this->data['user'] = false;
        
        $this->data['js'] = $this->config->custom_js;
        
		return $this->load->view('common/footer', $this->data);
	}
}
?>
