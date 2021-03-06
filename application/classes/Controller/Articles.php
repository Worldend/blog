<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Articles extends Controller_Base {
 
    public function action_index()
    {
        $content = View::factory('index');
        $this->template->content = $content;
    }
 
    public function action_article()
    {
        $id = $this->request->param('id');
        $content = View::factory('article');
        $content->article = ORM::factory('Article',$id);
        $this->template->content = $content;
    }   

} // Articles