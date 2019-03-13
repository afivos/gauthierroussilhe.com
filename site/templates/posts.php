<?php snippet('header') ?>

<div class="page--writings">
  <div class="container">
    <div class="grid">
      <div class="col-6_sm-12">
        <?= $page->text()->kt() ?>
      </div>
    </div>
    <hr>
    <div class="grid">
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $post): ?>
        <div class="col-8_sm-12">
          <div class="grid">
            <div class="col-3">
              <?php foreach($post->images()->template('cover') as $file): ?>
                <img src="<?= $file->url() ?>">
              <?php endforeach ?>
            </div>
            <div class="col">
              <div class="grid">
                <div class="col-6">
                  <h4><em><a href="<?= $post->url() ?>"><?= $post->date()->toDate('d/m/Y') ?></a></em></h4>
                </div>
                <div class="col">
                  <h4><em><?= $post->tags() ?></em></h4>
                </div>
              </div>
              <h1><a href="<?= $post->url() ?>"><?= $post->title() ?></a></h1>
              <?= $post->text()->kt()->excerpt(136) ?>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
