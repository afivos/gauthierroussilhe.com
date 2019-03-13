<?php snippet('header') ?>

<div class="page--practice">
  <div class="container">
    <div class="grid">
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $project): ?>
        <div class="col-6_sm-12">
          <?php foreach($project->images()->template('cover') as $file): ?>
            <div class="overlay">
              <a href="<?= $project->url() ?>"><img src="<?= $file->url() ?>"></a>
            </div>
          <?php endforeach ?>
          <h4><a href="<?= $project->url() ?>"><em><?= $project->category() ?>:</em> <?= $project->title() ?></a></h4>
          <p><em>Intent:</em> <?= $project->intent() ?></p>
          <p><small><em>Keywords:</em> <?= $project->tags() ?></small></p>
        </div>
      <?php endforeach ?>
    </div>

    <hr>

    <article>
      <?= $page->text()->kt() ?>
    </article>
  </div>
</div>

<?php snippet('footer') ?>
