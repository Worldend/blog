<p class="lead">Добавление новой записи в блог</p>
<div class = "row">
    <append>
        <form method="POST">
            <div class = "span12">
                <div>Заголовок</div>
                <input type="text" name = "title"/>
            </div>
            <div class = "span12">
                <div>Превью к статье</div>
                <input type="text" name = "preview"/>
            </div>
            <div class = "span12">
                <div>Содержимое</div>
                <textarea name = "content"></textarea>
                <br />
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </append>
</div>
