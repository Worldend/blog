<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-04 00:08:50 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-07-04 00:08:50 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\page.php(15): Kohana_View::factory('/pages/about')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-07-04 00:13:33 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-07-04 00:13:33 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\page.php(15): Kohana_View::factory('/pages/about')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-07-04 00:18:00 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/about could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-07-04 00:18:00 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/about')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/about', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\page.php(15): Kohana_View::factory('/pages/about')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2014-07-04 14:20:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: content_short ~ APPPATH\views\pages\show.php [ 10 ] in Z:\home\kohana\www\application\views\pages\show.php:10
2014-07-04 14:20:09 --- DEBUG: #0 Z:\home\kohana\www\application\views\pages\show.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\main.php(29): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\pages\show.php:10