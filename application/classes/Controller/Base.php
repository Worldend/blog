<?php
defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller_Template{

    public $template = 'main';
 
    public function before()
    {
        parent::before();
        View::set_global('title', 'Мой сайт');				
        View::set_global('description', 'Самый лучший сайт');
        $this->template->content = '';
        $this->template->styles = array('bootstrap','bootstrap-responsive','bootstrap-min','style');
        $this->template->scripts = array('jQuery.lib','bootstrap','javascript');
    }
 
}// End Base
?>