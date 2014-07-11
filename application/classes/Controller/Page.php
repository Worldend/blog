<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Base{
 
   // Главная страница
    public function action_index()
    {
        $articles = array();
 
        $content = View::factory('index')
                ->bind('articles', $articles);
 
        $articles = ORM::factory('Article')->get_all();
      //  $articles = $article->get_all();
      //  var_dump($content);
        $this->template->content = $content;
    }
     
} // End Page