<?php defined('SYSPATH') or die('No direct script access.');
  
  class Controller_New extends Controller_Base {
 
    public function action_index()
    {
       // echo '<script>alert()</script>';
       $content = View::factory('new');

       if ($post = $this->request->post())
       {
          // $user = ORM::factory('article')->append(array('title','text','date'), array($post['title'],$post['content'],date('Y-m-d')));
           $user = ORM::factory('Article')->append(array(
                                                    'title' => $post['title'],
                                                    'preview' => $post['preview'],
                                                    'text' => $post['content'],
                                                    'date' => date('Y-m-d')
                                                    ));

            $this->redirect(URL::base(true));
       }

        $this->template->content = $content;
    }  
 
} // New  
?>