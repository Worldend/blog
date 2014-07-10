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
        $sql = "SELECT * FROM ". $this->_tableArticles . " ORDER BY id DESC";
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
    
    public function get_article($id = '')
    {
        $sql = "SELECT * FROM ". $this->_tableArticles . " WHERE id=:id";
        
        $query = DB::query(Database::SELECT, $sql, FALSE); 
          
        $query->param(':id',(int)$id);
        $result = $query->execute()->as_array();

       // $result = $query->as_array();
 
        if($result)
            return $result[0];
        else
            return FALSE;
    }
    
    public function get_user_articles($id)
    {
        $sql = "SELECT * FROM ". $this->_tableArticles . " WHERE user_id=:id";
        
        return DB::query(Database::SELECT, $sql, FALSE)
                    ->param(':id',(int)$id)
                    ->execute();
    }
    
    public function append($value)
    {
       //  $column = implode(',', $column);
      //   var_dump($column);
      //  $sql = "INSERT INTO ". $this->_tableArticles . " :column VALUES :value";
        $sql = "INSERT INTO ". $this->_tableArticles . " (title,preview,text,date) VALUES :value";
        return DB::query(Database::INSERT, $sql, FALSE)
               //     ->param(':column', $column)
                    ->param(':value', $value)
                    ->execute();
    }
}