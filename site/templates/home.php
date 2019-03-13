<?php snippet('header') ?>

<div class="page--about">
  <div class="container">
    <?php foreach($page->images()->template('cover') as $file): ?>
      <figure>
        <div class="overlay">
          <img src="<?= $file->url() ?>" alt="<?= $file->caption() ?>" class="project-photo">
        </div>
        <figcaption><?= $file->caption() ?></figcaption>
      </figure>
    <?php endforeach ?>

    <article class="bio">
      <?= $page->bio()->kt() ?>
    </article>

    <hr>

    <div class="bio-details">
      <div class="grid">
        <div class="col_sm-12">
          <article>
            <?= $page->box1()->kt() ?>
          </article>
        </div>
        <div class="col_sm-12">
          <article>
            <?= $page->box2()->kt() ?>
          </article>
        </div>
      </div>
      <div class="grid">
        <div class="col_sm-12">
          <article>
            <?= $page->box3()->kt() ?>
          </article>
        </div>
        <div class="col_sm-12">
          <article>
            <?= $page->box4()->kt() ?>
          </article>
        </div>
      </div>
    </div>

    <?php foreach($page->images()->template('about-image') as $file): ?>
      <figure>
        <div class="overlay">
          <img src="<?= $file->url() ?>" alt="<?= $file->caption() ?>" class="project-photo">
        </div>
        <figcaption><?= $file->caption() ?></figcaption>
      </figure>
    <?php endforeach ?>

    <hr>

    <div class="bio-lists">
      <div class="grid">
        <div class="col_sm-12">
          <?= $page->column1()->kt() ?>
        </div>
        <div class="col_sm-12">
          <?= $page->column2()->kt() ?>
        </div>
        <div class="col_sm-12">
          <?= $page->column3()->kt() ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
