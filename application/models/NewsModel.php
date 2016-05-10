<?php
/* 
 * 新闻模型
 */
class NewsModel extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    //获取新闻
    public function get_news($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('ci_news');
            return $query->result_array();
        }
        $query = $this->db->get_where('ci_news', array('slug'=>$slug));
        return $query->row_array();
    }
    //更新新闻
    public function set_news(){
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        return $this->db->insert('news', $data);
    }
}

