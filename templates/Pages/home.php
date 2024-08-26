<?php echo $this->Html->css('styles.css'); ?>

<div class="container">
    <h1>Escolha o que deseja fazer</h1>
    <div class="button-group">
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" class="btn">Usuários</a>
        <a href="<?= $this->Url->build(['controller' => 'Tags', 'action' => 'index']); ?>" class="btn">Tags</a>
        <a href="<?= $this->Url->build(['controller' => 'Bookmarks', 'action' => 'index']); ?>" class="btn">Bookmarks</a>
        <a href="<?= $this->Url->build(['controller' => 'Bookmarks', 'action' => 'tags']); ?>" class="btn">Procurar bookmarks por tags</a>
    </div>
</div>
