<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tag> $tags
 */
?>
<?php echo $this->Html->css('paginator.css'); ?>
<?php echo $this->Html->css('table.css'); ?>
<div class="tags index content">
    <?= $this->Html->link(__('Nova Tag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Voltar'), '/', ['class' => 'button']) ?>
    <h3><?= __('Tags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tags as $tag): ?>
                <tr>
                    <td><?= $this->Number->format($tag->id) ?></td>
                    <td><?= h($tag->title) ?></td>
                    <td><?= h($tag->created) ?></td>
                    <td><?= h($tag->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $tag->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tag->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tag->id], ['confirm' => __('Você tem certeza que deseja deletar a tag {0}?', $tag->title)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('Primeira') ?>
            <?= $this->Paginator->prev('<Anterior') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('Próxima>') ?>
            <?= $this->Paginator->last('Última') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} item(s) de {{count}} totais')) ?></p>
    </div>
</div>
