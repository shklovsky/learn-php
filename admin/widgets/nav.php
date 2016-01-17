<div class="container">
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Главная страница</a></li>
            <?php if ($action == "add") { ?>
                <li><a href="/admin/index.php">Админ панель</a></li>
            <?php } else { ?>
                <li><a href="index.php?action=add">Добавить статью</a></li>
            <?php } ?>
        </ul>
    </div>
</div>