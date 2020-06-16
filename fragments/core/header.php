<?php
if (rex_config::get('be_style_fluent', 'backend_logo')) {
    $logo_path = '/media/'.rex_config::get('be_style_fluent', 'backend_logo');
} else {
    $logo_path = '/assets/addons/be_style_fluent/images/redaxo-logo.svg';
}
?>
<nav class="rex-nav-top navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <?php if (rex_be_controller::getCurrentPageObject()->isPopup()): ?>
            <span class="navbar-brand"><img class="rex-js-svg rex-redaxo-logo"
                    src="<?= $logo_path; ?>" /></span>
            <?php else: ?>
            <a class="navbar-brand"
                href="<?= rex_url::backendController(); ?>"><img
                    class="rex-js-svg rex-redaxo-logo"
                    src="<?= $logo_path; ?>" /></a>
            <?php endif; ?>
        </div>
        <?= $this->meta_navigation; ?>
    </div>
</nav>