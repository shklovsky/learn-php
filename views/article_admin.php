<div class="articles container">
    <h3 class="articles-head">Редактирование статьи</h3>

    <form class="form-horizontal" method="post" action="/admin/index.php?action=add">
        <div class="form-group col-xs-9">
            <label for="text" class="control-label">Название</label>
            <input id="titleArticle" type="text" class="form-control">
        </div>

        <div class="form-group col-xs-9">     
            <label for="date" class="control-label">Дата</label>
            <input id="dateArticle" type="date" class="form-control">
        </div>

        <div class="form-group col-xs-9">  
            <label class="control-label">Текст поста</label>
            <textarea id="contentArticle" class="form-control">
                    
            </textarea>
        </div>

        <div class="form-group col-xs-9">
            <button id="create-article" type="submit" class="btn btn-default">Сохранить</button>
        </div>
    </form>
</div>