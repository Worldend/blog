<div class="row">

	<div class="span4">
        <img src="/public/img/me.jpg" class="img-polaroid">
		<h2>Старовойт Евгений</h2>
		<p>
			<strong>Зарегистрирован </strong>
			12.01.2008
		</p>
	</div>
	<div class="span8">
    <p>
      <a href="<?=URL::site('new')?>"><button class="btn btn-large btn-primary" type="button">Новая запись</button></a>
    </p><br/>      
    
<?php foreach($articles as $article): ?>
		<article class="clearfix">
			<header>
                <div>Дата публикации: <?=$article['date']?></div>
				<h3><?=$article['title']; ?></h3>
			</header>
			<p>
				<?=$article['preview']; ?>
			</p>
            <a class="btn" href="<?php echo URL::site('articles/' . $article['id']); ?>">Показать полностью&raquo;</a>
		</article>
<?php endforeach; ?>
		<!-- Pagination -->
		<div class="pagination">
			<ul>
				<li class="disabled"><a href="#">&laquo;</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div>

	</div>
</div>
