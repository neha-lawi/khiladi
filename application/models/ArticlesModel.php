<?php
class ArticlesModel extends CI_Model{
    public function getArticles(){
        $this->db->select("fmr_articles.*, categories.name as category_name, categories.url as category_url, authors.name as author_name");
        $this->db->from('fmr_articles');
        $this->db->join('categories', 'fmr_articles.category_id = categories.id');
        $this->db->join('authors', 'fmr_articles.author_id = authors.id');
        $this->db->order_by('fmr_articles.created_at','DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function addArticle(){
        $values = array(
            'category_id' => $this->input->post('category_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'description1' => $this->input->post('description1'),
            'description2' => $this->input->post('description2'),
            'image' => $this->input->post('image'),
            'read_time' => $this->input->post('read_time'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'author_id' => $this->input->post('author_id'),
            'article_date' => $this->input->post('article_date')
        );
        $this->db->insert('fmr_articles', $values);
    }
    public function editArticle($article_id){
        $values = array(
            'category_id' => $this->input->post('category_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'description1' => $this->input->post('description1'),
            'description2' => $this->input->post('description2'),
            'image' => $this->input->post('image'),
            'read_time' => $this->input->post('read_time'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_description' => $this->input->post('meta_description'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'author_id' => $this->input->post('author_id'),
            'article_date' => $this->input->post('article_date'),
            'system_url' => ($this->input->post("system_url")) ? $this->input->post("system_url") : NULL
        );
        $this->db->where('id', $article_id);
        $this->db->update('articles', $values);
    }

    public function getAdsBlockByArticleId($articleId){
      $query = $this->db->get_where("ads_block", array("article_id" => $articleId));
      return $query->result_array();
    }

}
?>
