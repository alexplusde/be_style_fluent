<?php
    $icon = '';
    if (rex_config::get('be_style_fluent', 'logo')) {
        $icon = '/media/'.rex_config::get('be_style_fluent', 'logo');
    } else {
        $icon = '/assets/addons/be_style_fluent/images/redaxo-logo.svg';
    }
    ?>
<style>
    :root {
        --backend--color:
            <?= rex_config::get('be_style_fluent', 'color'); ?>
        ;
        --backend--color_font:
            <?= rex_config::get('be_style_fluent', 'color_font'); ?>
        ;
        --backend--color_warning:
            <?= rex_config::get('be_style_fluent', 'color_warning'); ?>
        ;
        --backend--color_success:
            <?= rex_config::get('be_style_fluent', 'color_success'); ?>
        ;
        --backend--color_danger:
            <?= rex_config::get('be_style_fluent', 'color_danger'); ?>
        ;
        --backend--color_anchor:
            <?= rex_config::get('be_style_fluent', 'color_anchor'); ?>
        ;

        --backend--color_highlight:
            <?= rex_config::get('be_style_fluent', 'color_highlight'); ?>
        ;
        --backend--color_warning_highlight:
            <?= rex_config::get('be_style_fluent', 'color_warning_highlight'); ?>
        ;
        --backend--color_success_highlight:
            <?= rex_config::get('be_style_fluent', 'color_success_highlight'); ?>
        ;
        --backend--color_danger_highlight:
            <?= rex_config::get('be_style_fluent', 'color_danger_highlight'); ?>
        ;

        --backend--shadow: 0 0 15px 0px rgba(0, 0, 0, 0.15);
        --backend--shadow-hover: 0 0 20px 0px rgba(0, 0, 0, 0.1);

        --backend--rex_nav_bg: #fff;
        --backend--color-invers: #fff;

        --backend--color_edit: rgb(19, 58, 93);
        --backend--color_edit_hover: rgba(19, 58, 93, 0.1);

        --backend--lightgrey: #f8f8f8;
        --backend--grey: #ddd;
        --backend--darkgrey: #555;

        --backend--font-family: "<?= rex_config::get('be_style_fluent', 'font'); ?>", sans-serif;
    }

    @font-face {
        font-family: "<?= rex_config::get('be_style_fluent', 'font'); ?>";
        font-style: normal;
        font-weight: 300;
        src: local("<?= rex_config::get('be_style_fluent', 'font'); ?>"), local("<?= rex_config::get('be_style_fluent', 'font'); ?>-Light"), url("/assets/addons/be_style_fluent/fonts/<?= rex_config::get('be_style_fluent', 'font'); ?>-Light.woff2") format("woff2");
    }

    @font-face {
        font-family: "<?= rex_config::get('be_style_fluent', 'font'); ?>";
        font-style: normal;
        font-weight: 400;
        src: local("<?= rex_config::get('be_style_fluent', 'font'); ?>"), local("<?= rex_config::get('be_style_fluent', 'font'); ?>-Regular"), url("/assets/addons/be_style_fluent/fonts/<?= rex_config::get('be_style_fluent', 'font'); ?>-Regular.woff2") format("woff2");
    }

    @font-face {
        font-family: "<?= rex_config::get('be_style_fluent', 'font'); ?>";
        font-style: normal;
        font-weight: 700;
        src: local("<?= rex_config::get('be_style_fluent', 'font'); ?>"), local("<?= rex_config::get('be_style_fluent', 'font'); ?>-Bold"), url("/assets/addons/be_style_fluent/fonts/<?= rex_config::get('be_style_fluent', 'font'); ?>-Bold.woff2") format("woff2");
    }
</style>