<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Blog extends Controller_Base{
 
   // Главная страница
    public function action_index()
    {
        $articles = array();
        $id = $this->request->param('id');
        if($id)
        {
            $content = View::factory('index')
                        ->bind('articles', $articles);
     
           
            $articles = Model::factory('Article')->get_user_articles($id);
        }
        else $content = View::factory();
 
        $this->template->content = $content;
    }
     
} // End blog