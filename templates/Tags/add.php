<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 * @var \Cake\Collection\CollectionInterface|string[] $bookmarks
 */
?>
<?php echo $this->Html->css('form-add.css'); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tags form content">
            <?= $this->Form->create($tag) ?>
            <fieldset>
                <legend><?= __('Adicionar Tag') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('bookmarks._ids',
                        ['options' => $bookmarks,
                        'style' => 'height: auto;',
                        'size' => 10
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
