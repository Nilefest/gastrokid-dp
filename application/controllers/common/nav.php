<?php
class navController extends Controller {

	public function index() {
        
		return $this->load->view('common/nav', $this->data);
	}
}
?>
