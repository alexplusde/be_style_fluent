<?php
/**
 * Discussion Issue #1174
 * Manipulate this fragment to influence the selection of modules on the slice.
 * By default the core fragment is used.
 *
 * @var bool $block
 * @var string $button_label
 * @var array $items           array contains all modules
 *                  [0]          the index of array
 *                      [id]     the module id
 *                      [title]  the module name
 *                      [href]   the module url
 */
?>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?= "Abschnitt hinzufügen" // $this->button_label?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="combobox">
    <?php
foreach ($this->items as $item) {
    ?>

    <li><a href="<?= $item["href"] ?>"
        class=""><i class="rex-icon fa-chevron-right"></i> <?= $item["title"] ?></a></li>
    <?php
}
?>
</ul>
</div>