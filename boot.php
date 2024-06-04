<?php
$user = rex::getUser();

if (rex::isBackend() && 'dark' !== rex::getProperty('theme') && ($user && 'dark' !== $user->getValue('theme'))) {
    require_once 'functions/backend_styles.php';

    rex_view::addCssFile($this->getAssetsUrl('css/backend.css'));
    rex_view::addJsFile($this->getAssetsUrl('javascripts/css-vars-ponyfill.min.js'));

    rex_extension::register('PAGE_HEADER', 'backend_style_css', rex_extension::LATE);
}
?>
<?php

rex_file::copy($this->getPath('assets'), $this->getAssetsPath(''));
