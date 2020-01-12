<?php
class indexController extends Controller {
	public function index() {

        $user = $this->user->isLogin();
        if(!empty($user))
            $this->data['user'] = $user['name'];
        else
            $this->data['user'] = false;
        
        $this->load->model('reviews');
        
        //$this->pre($this->request->post);
        
        if(isset($this->request->post['rev_new'])){
            $this->reviewsModel->add(['date' => time(),
                                      'name' => $this->request->post['rev_name'],
                                      'num' => $this->request->post['rev_num'],
                                      'mess' => $this->request->post['rev_mess'],
                                      'mark' => $this->request->post['rate-points'],
                                      'is_pub' => '']);
        }
        if(!empty($user)){
            if(isset($this->request->post['rev_pub'])){
                $this->reviewsModel->upd(['is_pub' => $this->request->post['rev_is_pub']],
                                         ['id' => $this->request->post['rev_id']]);
                exit();
            }
            elseif(isset($this->request->post['rev_rem'])){
                $this->reviewsModel->del(['id' => $this->request->post['rev_id']]);
                exit();
            }
        }
        
        
        if(!empty($user))
            $this->data['reviews'] = $this->reviewsModel->get([], [], ['date' => 'DESC'], []);
        else
            $this->data['reviews'] = $this->reviewsModel->get(['is_pub' => '1'], [], ['date' => 'DESC'], []);
        
        
        //$this->pre($this->data['reviews']);
        
        $this->config->title_name = "Відгуки та побажання";
        
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('reviews/index', $this->data);
	}
}
?>
