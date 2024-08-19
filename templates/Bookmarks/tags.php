<?= $this->Html->link(__('Voltar'), '/', ['class' => 'button']) ?>
<h1>
    Bookmarks que tem a tag
    <?= $this->Text->toList(h($tags)) ?>
</h1>
<?= $this->Form->create(null, ['type' => 'get']) ?>
<?= $this->Form->control('tag', [
    'label' => 'Pesquisar por Tag',
    'options' => $allTags,
    'value' => $this->request->getQuery('tag')
]) ?>
<?= $this->Form->button(__('Pesquisar')) ?>
<?= $this->Form->end() ?>
<section>
    <?php foreach ($bookmarks as $bookmark): ?>
        <article>
            <h4><?= $this->Html->link($bookmark->title, '/bookmarks/view/'.$bookmark->id) ?></h4>
            <small><?= h($bookmark->url) ?></small>
            <?= $this->Text->autoParagraph(h($bookmark->description)) ?>
            <br>
        </article>
    <?php endforeach; ?>
</section>
