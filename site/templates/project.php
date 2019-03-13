<?php snippet('header') ?>

<div class="page--project">
  <div class="container">
      <article>

        <article class="article-header">
          <h1 class="article-title"><?= $page->title() ?></h1>
          <h3 class="article-subtitle"><?= $page->tags() ?></h3>
          <?php foreach($page->images()->template('cover') as $file): ?>
            <figure>
              <img src="<?= $file->url() ?>" alt="<?= $file->caption() ?>" class="project-photo">
              <figcaption><?= $file->caption() ?></figcaption>
            </figure>
          <?php endforeach ?>
        </article>

        <article class="article-body">
          <?= $page->text()->kt() ?>
        </article>

        <!-- Hide for now
        <div class="pagination">
          <div class="container">
            <div class="grid">
              <div class="col-6_sm-12">
                <h2><a href="">← Previous project</a></h2>
              </div>
              <div class="col-6_sm-12 text-right">
                <h2><a href="">Next project →</a></h2>
              </div>
            </div>
          </div>
        </div>
        -->
        
      </article>
  </div>
</div>

<?php snippet('footer') ?>
