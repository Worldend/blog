<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 12:26:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ APPPATH/classes/Controller/Page.php [ 3 ] in file:line
2014-07-08 12:26:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:26:27 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 12:26:27 --- DEBUG: #0 /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 /home/roman/tests/evgeniy-starovoit/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /home/roman/tests/evgeniy-starovoit/application/classes/Controller/Page.php(14): Model_Article->get_all()
#4 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/roman/tests/evgeniy-starovoit/index.php(118): Kohana_Request->execute()
#10 {main} in /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 12:26:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-07-08 12:26:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:26:46 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/PDO.php:130
2014-07-08 12:26:46 --- DEBUG: #0 /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/PDO.php(130): Kohana_Database_PDO->connect()
#1 /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM a...', false, Array)
#2 /home/roman/tests/evgeniy-starovoit/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /home/roman/tests/evgeniy-starovoit/application/classes/Controller/Page.php(14): Model_Article->get_all()
#4 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/roman/tests/evgeniy-starovoit/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/roman/tests/evgeniy-starovoit/index.php(118): Kohana_Request->execute()
#10 {main} in /home/roman/tests/evgeniy-starovoit/modules/database/classes/Kohana/Database/PDO.php:130
2014-07-08 12:28:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_article' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-08 12:28:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:29:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Article' not found ~ APPPATH/classes/Controller/Page.php [ 13 ] in file:line
2014-07-08 12:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 16:21:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Article::find_all() ~ APPPATH/classes/Controller/Page.php [ 14 ] in file:line
2014-07-08 16:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line