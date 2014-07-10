<?
defined('SYSPATH') or die('No direct script access.');

class Controller_Registration extends Controller_Base {

    public function action_index()
    {
        if ($post = $this->request->post())
        {
            try {

                $user = ORM::factory('user')->create_user($_POST, array('username','email','password'));

                $user->add('roles',ORM::factory('role',array('name'=>'login')));

                mail($post['email'],'Регистрация на сайте mysite.com','Вы были зерегестрированы на сайте mysite.com, ваш логин: '.$post['username'].' Ваш пароль: '.$post['password']);

                $this->redirect(URL::base(true));

            } catch (ORM_Validtion_Exception $e) {

                $errors = $e->errors('models');

                // echo Debug::vars($errors);
            }
        }
        
        // Registration Form
        $this->template->content = View::factory('registration_form');
    }

} // End Registration
?>