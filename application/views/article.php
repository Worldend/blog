<? if($article): ?>
    <div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;">
        <strong><?=$article->title?></strong><br />
        <i>Автор: <?=$article->user_id?></i> / 
        <i>Дата публикации: <?=$article->date?></i><br /><br />
        <p><?=$article->text?></p>
    </div>    
    <? //echo $comments; ?>
<? else: ?>
    <div style="padding:10px; margin-bottom:10px;">
		Статья не найдена или не существует
    </div>
<? endif; ?>