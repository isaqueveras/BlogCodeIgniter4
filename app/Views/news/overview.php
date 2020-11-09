<script>
    function confirma() {
        if (!confirm("Deseja Excluir?")) {
            return false;
        }
        return true;
    }
</script>

<h1 class="mt-3">Lista de Notícias</h1>
<a href="/news/create" class="btn btn-success my-4">Criar Notícia</a>

<table class="table bg-dark text-white">
    <tr>
        <th>Titulo</th>
        <th>Ações</th>
    </tr>

    <?php if (!empty($news) && is_array($news)): ?>
        <?php foreach($news as $news_item): ?>
            <tr>
                <td><a href="<?= "/news/view/". $news_item['id'] ?>" class="text-white"><?= $news_item['title']; ?></a></td>
                <td>
                    <a href="<?= "/news/edit/". $news_item['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="<?= "/news/delete/". $news_item['id']; ?>" class="btn btn-danger" onclick="return confirma()">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>

    <?php else: ?>
        <tr><td colspan="2">Nenhuma noticia encontrada</td></tr>
    <?php endif; ?>
</table>