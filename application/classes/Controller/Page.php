<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Base{
 
   // Главная страница
    public function action_index()
    {
        $articles = array();
 
        $content = View::factory('index')
                ->bind('articles', $articles);
 
        $article = new Model_Article();
        $articles = $article->get_all();
 
        $this->template->content = $content;
    }
     
} // End Page