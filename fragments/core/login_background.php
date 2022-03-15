<?php
/**
 * @var rex_fragment $this
 * @psalm-scope-this rex_fragment
 */


$media = rex_media::get(rex_config::get('be_style_fluent', 'login_bg'));

$agency = rex_config::get('be_style_fluent', 'agency');
$agency_url = rex_config::get('be_style_fluent', 'agency_url');

if ($media) {
    $login_bg = $media->getUrl();
    $credits = rex_config::get('be_style_fluent', 'login_bg_credits');
    $credits_url = rex_config::get('be_style_fluent', 'login_bg_credits_url');
} else {
    $login_bg = 'rex_url::addonAssets'('be_style_fluent', '/images/sander-weeteling-4I41IQtmSs0-unsplash.jpg');
    $credits = "Photo by Sander Weeteling on Unsplash";
    $credits_url = "https://unsplash.com/@sander-weeteling";
} ?>
<picture class="rex-background">
    <img alt="" src="<?= $login_bg ?>" />
</picture>

<script>
    var picture = document.querySelector('.rex-background');
    picture.classList.add('rex-background--process');
    picture.querySelector('img').onload = function() {
        picture.classList.add('rex-background--ready');
    }
</script>

<footer class="rex-global-footer">
    <nav class="rex-nav-footer">
        <ul class="list-inline">
            <li><a href="<?= $agency_url ?>" target="_blank"
                    rel="noreferrer noopener"><?= $agency ?></a></li>
            <li><a href="https://www.redaxo.org" target="_blank" rel="noreferrer noopener">redaxo.org</a></li>
            <li class="rex-background-credits"><a
                    href="<?= $credits_url ?>" target="_blank"
                    rel="noreferrer noopener"><?= $credits ?></a>
            </li>
        </ul>
    </nav>
</footer>