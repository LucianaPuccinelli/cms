<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php echo $this->Html->css('form-add.css'); ?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Editar Usuários'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Usuários'), ['action' => 'delete', $user->id], ['confirm' => __('Você tem certeza que deseja deletar o usuário {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Usuários'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->email) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Bookmarks Relacionados') ?></h4>
                <?php if (!empty($user->bookmarks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->bookmarks as $bookmarks) : ?>
                        <tr>
                            <td><?= h($bookmarks->id) ?></td>
                            <td><?= h($bookmarks->user_id) ?></td>
                            <td><?= h($bookmarks->title) ?></td>
                            <td><?= h($bookmarks->description) ?></td>
                            <td><?= h($bookmarks->url) ?></td>
                            <td><?= h($bookmarks->created) ?></td>
                            <td><?= h($bookmarks->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Ver'), ['controller' => 'Bookmarks', 'action' => 'view', $bookmarks->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Bookmarks', 'action' => 'edit', $bookmarks->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Bookmarks', 'action' => 'delete', $bookmarks->id], ['confirm' => __('Você tem certeza que deseja deletar o bookmark {0}?', $bookmarks->title)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
