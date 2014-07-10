<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-10 08:27:20 --- EMERGENCY: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'evgeniy-starovoit' ~ APPPATH/classes/Database/PDO.php [ 122 ] in /home/evgeniy/evgeniy-starovoit/application/classes/Database/PDO.php:198
2014-07-10 08:27:20 --- DEBUG: #0 /home/evgeniy/evgeniy-starovoit/application/classes/Database/PDO.php(198): Database_PDO->connect()
#1 /home/evgeniy/evgeniy-starovoit/modules/database/classes/Kohana/Database/Query.php(251): Database_PDO->query(1, 'SELECT * FROM a...', false, Array)
#2 /home/evgeniy/evgeniy-starovoit/application/classes/Model/Article.php(16): Kohana_Database_Query->execute()
#3 /home/evgeniy/evgeniy-starovoit/application/classes/Controller/Page.php(14): Model_Article->get_all()
#4 /home/evgeniy/evgeniy-starovoit/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/evgeniy/evgeniy-starovoit/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 /home/evgeniy/evgeniy-starovoit/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/evgeniy/evgeniy-starovoit/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/evgeniy/evgeniy-starovoit/index.php(118): Kohana_Request->execute()
#10 {main} in /home/evgeniy/evgeniy-starovoit/application/classes/Database/PDO.php:198