<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bookmark> $bookmarks
 */
?>
<?php echo $this->Html->css('paginator.css'); ?>
<?php echo $this->Html->css('table.css'); ?>
<div class="bookmarks index content">
    <?= $this->Html->link(__('Novo Bookmark'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Voltar'), '/', ['class' => 'button']) ?>
    <h3><?= __('Bookmarks') ?></h3>
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
                <?php foreach ($bookmarks as $bookmark): ?>
                <tr>
                    <td><?= $this->Number->format($bookmark->id) ?></td>
                    <td><?= h($bookmark->title) ?></td>
                    <td><?= h($bookmark->created) ?></td>
                    <td><?= h($bookmark->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $bookmark->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bookmark->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Você tem certeza que deseja deletar o bookmark {0}?', $bookmark->title)]) ?>
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
