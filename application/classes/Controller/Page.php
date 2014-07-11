<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Page extends Controller_Base{
 
   // Главная страница
    public function action_index()
    {
        $content = View::factory('index');
        $content->articles = ORM::factory('Article')
            ->order_by('id','DESC')
            ->find_all();
        $this->template->content = $content;
    }
     
} // End Page