<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct() {  
        parent::__construct();  
        $this->load->model('Martikel');  
    }  
  
    public function index() {  
        $data['artikel'] = $this->Martikel->get_all_articles();  

        $this->load->view('header');
        $this->load->view('artikel', $data);  
        $this->load->view('footer');
    }  
  
    public function detail($id) {    
        $data['detail_artikel'] = $this->Martikel->get_article($id);    
        $data['artikel'] = $this->Martikel->get_all_articles(); // Get all articles for recommendations  
      
        // Calculate similarity scores  
        $similarity_scores = [];  
        foreach ($data['artikel'] as $article) {  
            if ($article->id_artikel != $data['detail_artikel']->id_artikel) { // Exclude the current article  
                $similarity = $this->cosine_similarity($data['detail_artikel']->judul_artikel, $article->judul_artikel);  
                $similarity_scores[$article->id_artikel] = $similarity;  
            }  
        }  
      
        // Sort articles by similarity score in descending order  
        arsort($similarity_scores);  
      
        // Get the top 3 recommended articles  
        $top_recommended_ids = array_slice(array_keys($similarity_scores), 0, 3);  
        $data['recommended_articles'] = $this->Martikel->get_articles_by_ids($top_recommended_ids); // Create this method in your model  
      
        $this->load->view('header');  
        $this->load->view('artikel_detail', $data);    
        $this->load->view('footer');  
    }  

    private function cosine_similarity($judul_a, $judul_b) {  
        $pecah_a = explode(" ", $judul_a);  
        $pecah_b = explode(" ", $judul_b);  
      
        $yang_sama = array_intersect($pecah_a, $pecah_b);  
        $jumlah_yang_sama = count($yang_sama);  
        $jumlah_a = count($pecah_a);  
        $jumlah_b = count($pecah_b);  
        $jumlah_a_x_b = $jumlah_a * $jumlah_b;  
        $akar_a_x_b = sqrt($jumlah_a_x_b);  
      
        $nilai_rekomendasi = $jumlah_a_x_b > 0 ? $jumlah_yang_sama / $akar_a_x_b : 0; // Avoid division by zero  
        $nilai_rekomendasi = number_format($nilai_rekomendasi, 3);   
      
        return $nilai_rekomendasi;  
    }  
    
}
