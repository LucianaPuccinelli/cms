<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookmark $bookmark
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<?php echo $this->Html->css('form-add.css'); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $bookmark->id],
                ['confirm' => __('Você tem certeza que deseja deletar o bookmark {0}?', $bookmark->title), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Bookmarks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookmarks form content">
            <?= $this->Form->create($bookmark) ?>
            <fieldset>
                <legend><?= __('Editar Bookmark') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('url');
                    echo $this->Form->control('tags._ids', [
                        'options' => $tags,
                        'type' => 'select',
                        'label' => __('Tags')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
