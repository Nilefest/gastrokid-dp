<?php
class indexController extends Controller {
	public function index() {
        
        $this->load->model('reviews');
        
        //$this->reviewsModel->query("INSERT INTO `user` (`name`, `login`, `password`) VALUES ('Admin', 'admin', '" . sha1('2020gaskidtro') . "')");
        
        $this->data['reviews'] = $this->reviewsModel->get(['is_pub' => '1'], [], 
                                                          ['mark' => 'DESC', 'date' => 'DESC'], 
                                                          ['start' => '0', 'limit' => '2']);
        
        foreach($this->data['reviews'] as $key => $review){
            $url_img = 'public/files/reviews/' . $review['id'] . '.jpg';
            if(file_exists(APPLICATION_DIR . $url_img)){
                $this->data['reviews'][$key]['img'] = '/application/' . $url_img;
            }
            else{
                $this->data['reviews'][$key]['img'] = 'https://robohash.org/' . $review['name'] . $review['date'] . rand(10, 99) . '.png?set=set4';
            }
        }
        
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('main/index', $this->data);
	}
	public function login() {
        
        
        
        if(isset($this->request->post['sub_login_' . date('Ymdh')])){
            $user = $this->user->login($this->request->post['login_' . date('Ymdh')], 
                                       $this->request->post['password_' . date('Ymdh')]);
            if(!empty($user)){
                $this->response->redirect('/reviews');
                exit();
            }
        }
        
        $this->config->title_name = "Увійти";
        
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('main/login', $this->data);
	}
}
?>