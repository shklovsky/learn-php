<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Дата</th>
            <th>Заголовок</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $a) : ?>
            <tr>
                <td><?= $a['date'] ?></td>
                <td><?= $a['title'] ?></td>
                <td class="text-center"><a href="article.php?action=edit&id=<?= $a['id'] ?>"><i class="glyphicon glyphicon-cog"></i></a></td>
                <td class="text-center"><a href="article.php?action=delete&id=<?= $a['id'] ?>"><i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>