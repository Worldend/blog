<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Article extends Model
{
    protected $_tableArticles = 'articles';
 
    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        return ORM::factory($this->_tableArticles)
                        ->order_by('id','DESC')
                        ->find();
    }
    
    public function get_article($id = '')
    {
        $result = ORM::factory($this->_tableArticles)
                        ->where('id','=',':id')
                        ->param(':id',(int)$id)
                        ->as_array();
        if($result)
            return $result[0];
        else
            return FALSE;
    }
    
    public function get_user_articles($id)
    {
        return ORM::factory($this->_tableArticles)
                        ->where('user_id','=',':id')
                        ->param(':id',(int)$id);
    }
    
    public function append($value)
    {
        $article = ORM::factory($this->_tableArticles);
        
        foreach ($column as $value)
        {
            switch ($column)
            {
                case 'title':
                                $article->$title = $column;
                    break;
                case 'preview':
                                $article->$preview = $column;
                    break;
                case 'text':
                                $article->$text = $column;
                    break;
            }
        }
        
        $article->$date = date('Y-m-d');
        $article->save();
    }
}