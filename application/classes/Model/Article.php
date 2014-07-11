<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Article extends ORM
{
    protected $_table_name = 'articles';
 
    public function get_user_articles($id)
    {
        $all_articles = ORM::factory('article')
                                ->where('user_id','=',':id')
                                ->param(':id',(int)$id)
                                ->find_all()
                                ->as_array();
        
        foreach($all_articles as $article)
        {
            $arr_articles[] = $article->as_array();
        }
        
        return $arr_articles;
    }
    
    public function append($array)
    {
        $article = ORM::factory('article');
        
        foreach ($array as $column => $value)
        {
            $article->$column = $value;
        }
      //  $article->date = date('Y-m-d');
        $article->save();               

    }
}