<?php
/**
 * @var rex_fragment $this
 * @psalm-scope-this rex_fragment
 */
?>
<div class="rex-branding">
    <?php
    $media = rex_media::get(rex_config::get('be_style_fluent', 'logo'));
    if ($media) {
        echo '<img src="'.$media->getUrl().'" />';
    } else {
        echo rex_file::get(rex_path::addonAssets('be_style_fluent', 'images/redaxo-logo.svg'));
    } ?>
</div>