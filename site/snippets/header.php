<!doctype html>
<html>
<head>

  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/main.css', '@auto']) ?>

</head>
<body>

<header>
  <div class="container">
    <div class="grid">
      <div class="col-12 visible-md text-center">
        <nav class="languages">
          <ul>
          <?php foreach($kirby->languages() as $language): ?>
            <li<?php e($kirby->language() == $language, ' class="active"') ?>>
              <a href="<?php e($page->content($language->code())->language() != $site->language($language->code()), $page->url($language->code()))?>"><?php echo $language->code(); ?></a>
            </li>
          <?php endforeach ?>
          </ul>
        </nav>
      </div>
      <div class="col-4_sm-12">
        <h3><span class="text-subtle"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></span>
          <br><?= $site->description() ?></h3>
      </div>
      <div class="col-4_sm-12 languages sm-hidden text-center">
        <nav class="languages">
          <ul>
          <?php foreach($kirby->languages() as $language): ?>
            <li<?php e($kirby->language() == $language, ' class="active"') ?>>
              <a href="<?php e($page->content($language->code())->language() != $site->language($language->code()), $page->url($language->code()))?>"><?php echo $language->code(); ?></a>
            </li>
          <?php endforeach ?>
          </ul>
        </nav>
      </div>
      <div class="col-4_sm-12">
        <h6><?= $site->note() ?></h6>
      </div>
    </div>
  </div>
  <div class="container">
    <?php

    // main menu items
    $items = $pages->listed();

    // only show the menu if items are available
    if($items->isNotEmpty()):

    ?>
    <nav role="navigation">
      <ul>
        <?php foreach($items as $item): ?>
        <li<?php e($item->isOpen(), ' class="active"') ?>>
          <a href="<?= $item->url() ?>">
            <?= html($item->title()) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </nav>
    <?php endif ?>
  </div>
</header>
