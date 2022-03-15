<?php
/**
 * @var rex_fragment $this
 * @psalm-scope-this rex_fragment
 */

$isPopup = rex_be_controller::getCurrentPageObject()->isPopup();
$isLogin = ('login' === rex_be_controller::getCurrentPage());
$isSetup = ('setup' === rex_be_controller::getCurrentPage());

if (rex_config::get('be_style_fluent', 'logo')) {
    $logo_path = '/media/'.rex_config::get('be_style_fluent', 'logo');
} else {
    $logo_path = '/assets/addons/be_style_fluent/images/redaxo-logo.svg';
}
?>

<div id="rex-js-nav-top"
    class="rex-nav-top<?php if (!$isPopup && !$isSetup): ?> rex-nav-top-is-fixed<?php endif; ?>">

    <nav class="rex-nav-top navbar navbar-default">
        <div class="container-fluid">

            <?php if (!$isLogin && !$isPopup): ?>
            <button type="button" class="navbar-toggle" id="rex-js-nav-main-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bars">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
            </button>
            <?php endif; ?>

            <div class="navbar-header">
                <?php if ($isPopup): ?>
                <span class="navbar-brand"><img class="rex-js-svg rex-redaxo-logo"
                        src="<?= $logo_path; ?>" /></span>
                <?php else: ?>

                <a class="navbar-brand"
                    href="<?= rex_url::backendController(); ?>"><img
                        class="rex-js-svg rex-redaxo-logo"
                        src="<?= $logo_path; ?>" /></a>
                <?php endif; ?>
                <?php if (!$isPopup && rex::getUser() && rex::getUser()->isAdmin() && rex::isDebugMode()): ?>
                <a class="rex-marker-debugmode"
                    href="<?= rex_url::backendPage('system/settings') ?>"
                    title="<?= rex_i18n::msg('debug_mode_marker') ?>">
                    <i class="rex-icon rex-icon-heartbeat rex-pulse"></i>
                </a>
                <?php endif; ?>
            </div>

            <?= $this->meta_navigation ?>

        </div>
    </nav>

</div>