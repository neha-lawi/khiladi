<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends LD_Controller {

	function __construct(){
        parent::__construct();
			if($this->userId() == false){
				redirect("login");
			}
            $this->load->model('ArticlesModel');
	}

	public function index()
	{
		$title = "Articles";
        $data['articles'] = $this->ArticlesModel->getArticles();
		$html = $this->load->view('articles/articles', $data, true);
		$this->displayAppPage($title, $html);
	}

	public function add(){
		if(!empty($this->input->post())){
            $this->ArticlesModel->addArticle();
			redirect('articles');
        }else{

            $data['categories'] = $this->db->get('categories')->result_array();
            $data['authors'] = $this->db->get('authors')->result_array();
            $html = $this->load->view('articles/addArticle', $data, true);
            $this->displayAppPage('Add Articles', $html);
        }
    }

	public function edit($article_id){
		if(!empty($this->input->post())){
            $this->ArticlesModel->editArticle($article_id);
			redirect('articles');
        }else{
			$data['article'] = $this->db->get_where('fmr_articles', array('id'=> $article_id))->row_array();
            $data['categories'] = $this->db->get('categories')->result_array();
            $data['authors'] = $this->db->get('authors')->result_array();
            $html = $this->load->view('articles/editArticle', $data, true);
            $this->displayAppPage('Edit Articles', $html);
        }
    }

	public function ads($articleId){
			if($this->input->post()){
				$updateData['title'] = $this->input->post("blockText");
				$updateData['article_id'] = $articleId;
				$this->db->insert("ads_block", $updateData);
				redirect(current_url());
			}
			$data['adsData'] = $this->ArticlesModel->getAdsBlockByArticleId($articleId);
			$data['article'] = $this->db->get_where('fmr_articles', array('id'=> $articleId))->row_array();
			$html = $this->load->view('articles/ads', $data, true);
			$this->displayAppPage("Ads Management", $html);
		}

		public function blockDelete(){
			$adsId = $this->input->post("adsId");
			$this->db->where("id", $adsId);
			$this->db->delete("ads_block");
			echo 'success'; exit;
		}

}
?>
