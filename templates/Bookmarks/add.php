<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Bookmarks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookmarks form content">
            <?= $this->Form->create($bookmark) ?>
            <fieldset>
                <legend><?= __('Adicionar Bookmark') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('url');
                    echo $this->Form->control('tags._ids', ['options' => $tags]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
