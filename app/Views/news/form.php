<h1 class="mt-3"><?= isset($id) ? "Editar Noticia" : "Criar Noticia"; ?></h1>

<?php echo \Config\Services::validation()->listErrors(); ?>

<form action="/news/store" method="POST" class="mt-3">
    <div class="form-row">
        <div class="col-12">
            <label for="Noticia">Titulo</label>
            <input type="text" class="form-control bg-dark text-white" placeholder="Titulo" id="title" name="title" value="<?= isset($title) ? $title : set_value('title'); ?>">
        </div>
        <div class="col-12 mt-2">
            <label for="body">Notícia</label>
            <textarea name="body" class="form-control bg-dark text-white" id="body" cols="30" rows="10" placeholder="Notícia"><?= isset($body) ? $body : set_value('body'); ?></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Salvar</button>

    <input type="hidden" name="id" value="<?= isset($id) ? $id : ""; ?>">
</form>
