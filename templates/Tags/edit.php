<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 * @var string[]|\Cake\Collection\CollectionInterface $bookmarks
 */
?>
<?php echo $this->Html->css('form-add.css'); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tag->id],
                ['confirm' => __('Você tem certeza que deseja deletar a tag {0}?', $tag->title), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags form content">
            <?= $this->Form->create($tag) ?>
            <fieldset>
                <legend><?= __('Editar Tag') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('bookmarks._ids', ['options' => $bookmarks]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
