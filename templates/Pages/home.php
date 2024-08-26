<?php echo $this->Html->css('styles.css'); ?>

<div class="container">
    <h1>Escolha o que deseja fazer</h1>
    <div class="button-group">
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" class="btn"><i class="fa-solid fa-user"></i> Usuários</a>
        <a href="<?= $this->Url->build(['controller' => 'Tags', 'action' => 'index']); ?>" class="btn"><i class="fa-solid fa-tag"></i> Tags</a>
        <a href="<?= $this->Url->build(['controller' => 'Bookmarks', 'action' => 'index']); ?>" class="btn"><i class="fa-solid fa-bookmark"></i> Bookmarks</a>
        <a href="<?= $this->Url->build(['controller' => 'Bookmarks', 'action' => 'tags']); ?>" class="btn"><i class="fa-solid fa-magnifying-glass"></i> Procurar por tags</a>
    </div>
</div>
