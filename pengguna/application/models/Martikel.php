<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Martikel extends CI_Model {  
  
    public function __construct() {  
        parent::__construct();  
    }  
  
    public function get_all_articles() {  
        return $this->db->get('artikel')->result();  
    }  
  
    public function get_article($id) {  
        return $this->db->get_where('artikel', ['id_artikel' => $id])->row();  
    }  

    public function get_articles_by_ids($ids) {  
        $this->db->where_in('id_artikel', $ids);  
        return $this->db->get('artikel')->result();  
    }  
}  
?>  
