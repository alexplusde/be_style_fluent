<?php

$items = $this->items;

$new_items = [];
foreach ($items as $item) {
    if (array_key_exists('hidden_label', $item)) {
        $hidden_labels = explode(' ', $item['hidden_label']);
        $item['label'] = ' ' . array_pop($hidden_labels);
        unset($item['hidden_label']);
        $new_items[] = $item;
    } else {
        $new_items[] = $item;
    }
}

$fragment = new rex_fragment();
$fragment->setVar('buttons', $new_items, false);
$fragment->setVar('size', 'xs', false);
echo $fragment->parse('core/buttons/button_group.php');
