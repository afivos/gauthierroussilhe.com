<?php snippet('header') ?>

<div class="container">
	<main>
	  <header class="intro">
	    <h1><?= $page->title() ?></h1>
	  </header>
	  <div class="text">
	    <?= $page->text()->kt() ?>
	  </div>
	</main>
</div>

<?php snippet('footer') ?>
