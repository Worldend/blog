<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Личный блог</title>
    <!--<title><?php echo $title; ?></title>-->
    <meta name="description" content="<?php echo $description; ?>" />
    <?php foreach($scripts as $script): ?>
        <script src="<?php echo URL::base(); ?>public/js/<?php echo $script; ?>.js"></script>
    <?php endforeach; ?>

    <?php foreach($styles as $style): ?>
        <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
        rel="stylesheet" type="text/css" />
    <?php endforeach; ?>
 
</head>
 
<body>  
  <div class="container">
		<div class="row page-header">
			<h1 class="pull-left">Личный блог</h1>
			<form class="form-search pull-right span4">
				<input type="text" name="search" class="input-medium search-query" placeholder="Поиск" />
				 <button type="submit" class="btn">Найти</button>
			</form>
		</div>

		<ul class="breadcrumb span12">
			<li><a href="<?=URL::site()?>">Главная</a> <span class="divider">/</span></li>
			<li><a href = "<?=URL::site('blog/1')?>">Мой блог</a> <span class="divider">/</span></li>
            <li><a href = "<?=URL::site('room')?>">Кабинет</a> <span class="divider">/</span></li>
            <li  data-toggle="modal" data-target="#myModal-login"><a href="#">Вход</a> <span class="divider">/</span></li>
            <li  data-toggle="modal" data-target="#myModal-reg"><a href="#">Регистрация</a></li>
		</ul>
        
        <div class = "row"><?=$content?></div>
		
	</div>
    <!-- Modal login-->
    <form method="POST">
        <div class="modal hide fade" id="myModal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Авторизация</h3>
          </div>
          <div class="modal-body">
            <div><input type = "text" placeholder = "mail"/></div>
            <div><input type = "password" placeholder = "password"/></div>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </div>
        </div>
    </form>
          
        <!-- Modal registration-->
    <form method="POST">
        <div class="modal hide fade" id="myModal-reg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Регистрация</h3>
          </div>
          <div class="modal-body">
            <div><input type = "text" placeholder = "mail"/></div>
            <div><input type = "password" placeholder = "password"/></div>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </div> 
        </div>
     </form>  
</body>
</html>