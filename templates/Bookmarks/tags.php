<?php echo $this->Html->css('search-tags.css'); ?>
<?= $this->Html->link(__('Voltar'), '/', ['class' => 'button']) ?>
<h1>
    Bookmarks que tem a tag
    <strong><?= $this->Text->toList(h($tags)) ?></strong>
</h1>
<?= $this->Form->create(null, ['type' => 'get', 'class' => 'search-form']) ?>
<?= $this->Form->control('tag', [
    'label' => 'Pesquisar por Tag',
    'options' => $allTags,
    'value' => $this->request->getQuery('tag'),
    'class' => 'tag-search'
]) ?>
<?= $this->Form->button(__('Pesquisar')) ?>
<?= $this->Form->end() ?>

<section class="bookmarks-section">
    <?php foreach ($bookmarks as $bookmark): ?>
        <article class="bookmark-item">
            <h4 class="bookmark-title"><?= $this->Html->link($bookmark->title, '/bookmarks/view/'.$bookmark->id) ?></h4>
            <small class="bookmark-url"><?= h($bookmark->url) ?></small>
            <p class="bookmark-description"><?= $this->Text->autoParagraph(h($bookmark->description)) ?></p>
        </article>
    <?php endforeach; ?>
</section>
