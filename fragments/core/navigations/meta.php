<?php

$echo = '';

$items = $this->items;

// --------------------- List Items
$list_items = [];

if (count($items) > 0) {
    foreach ($items as $item) {
        $list_item = '';

        if (isset($item['title']) && $item['title'] != '') {
            $list_item .= $item['title'];
        }

        $attributes = '';
        if (isset($item['attributes']) && trim($item['attributes']) != '') {
            $attributes = ' ' . trim($item['attributes']);
        }

        if (isset($item['href']) && $item['href'] != '') {
            $list_item = '<a href="' . $item['href'] . '"' . $attributes . '>' . $list_item . '</a>';
        } elseif ($attributes != '') {
            $list_item = '<span' . $attributes . '>' . $list_item . '</span>';
        }

        $list_items[] = '<li>' . $list_item . '</li>';
    }

    
    // Domain-Button
    $check = "";
    $new = "";
    $list_items = rex_extension::registerPoint(new rex_extension_point('META_NAVI', $list_items));


    $ydomains = rex_yrewrite::getDomains();
    
    if (is_array($ydomains) && count($ydomains) > 2) {
        $domains = '<li>
        <div class="dropdown" style="transform: translate(-15px,8px);">
        <button class="btn btn-link dropdown-toggle" type="button" id="dropdowndomains" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Zur Website <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdowndomains">';

        foreach ($ydomains as $ydomain => $ydomainx) {
            if ($ydomain == "default") {
                continue;
            }
            $domains .= '<li><a style="display: block;" href="'.$ydomainx->getUrl().'" target="_blank">'.$ydomainx->getHost().'</a></li>';
        }
        $domains .=  '</ul></div></li>';
    } else {
        $domains =  '<a class="btn btn-link" style="float: left; transform: translate(-15px,8px);" href="'.rex::getServer().'" target="_blank"><i class="rex-icon fa-desktop""></i> '.rex::getServerName().'</a>';
    }

    // Pixelfirma Neu-Button
    $user = rex_backend_login::createUser();


    if ($user && $user->isAdmin()) {
        $check = "";
        if (rex::getConfig('debug')) {
            $check .=  '<a class="btn btn-link" style="float: left; transform: translate(-15px,8px);" href=""><i class="rex-icon fa-warning""></i>Debug-Modus aktiv</a>';
        }

        if (rex_config::get('maintenance', "frontend_aktiv") == "Aktivieren") {
            $check .=  '<a class="btn btn-link" style="float: left; transform: translate(-15px,8px);" href=""><i class="rex-icon fa-warning""></i>Debug-Modus aktiv</a>';
        }



        $new = '<li style="margin-right: 5px;">
                <div class="dropdown" style="transform: translate(-15px,8px); z-index: 10000;">
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownnew" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Neu <span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownnew">';

        $new .= '<li role="presentation" class="dropdown-header">Medienpool</li>
                <li><a style="display: block;" href="/redaxo/index.php?page=mediapool/upload">Medienpool-Datei</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=mediapool/structure&cat_id=0&media_method=add_cat">Medienpool-Kategorie</a></li>
                <li role="presentation" class="divider"></li>';

        if(rex_addon::get('yform')->getPlugin('manager')->isAvailable()) {
            $new .= '<li role="presentation" class="dropdown-header">YForm</li>
                <li><a style="display: block;" href="/redaxo/index.php?page=yform/manager/table_edit&func=add">YForm Tabelle</a></li>
                <li role="presentation" class="divider"></li>';
        }

        $new .= '<li role="presentation" class="dropdown-header">Domain & URL</li>';

        if (rex_addon::get('yrewrite')->isAvailable()) {
            $new .= '<li><a style="display: block;" href="/redaxo/index.php?page=yrewrite/domains&func=add">YRewrite Domain</a></li>';
        }

        if (rex_addon::get('url')->isAvailable()) {
            $new .= '<li><a style="display: block;" href="/redaxo/index.php?page=url/generate&func=add">URL-Schema</a></li>';
        }

        $new .= '<li role="presentation" class="divider"></li>';

        $new .= '<li role="presentation" class="dropdown-header">Eigenschaften</li>
                <li><a style="display: block;" href="/redaxo/index.php?page=metainfo/articles&func=add">Meta-Info Artikel</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=metainfo/categories&func=add">Meta-Info Kategorien</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=metainfo/media&func=add">Meta-Info Medien</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=metainfo/clangs&func=add">Meta-Info Sprachen</a></li>';

        if (rex_addon::get('global_settings')->isAvailable()) {
            $new .= '<li><a style="display: block;" href="/redaxo/index.php?page=global_settings/fields&func=add">Globale Einstellung</a></li>';
        }

        $new .= '<li role="presentation" class="divider"></li>';

        $new .= '<li role="presentation" class="dropdown-header">Administration</li>
                <li><a style="display: block;" href="/redaxo/index.php?page=install/packages/add">Addon herunterladen</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=templates&function=add">Template hinzufügen</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=modules/modules&function=add">Modul hinzufügen</a></li>';

        if (rex_addon::get('cronjob')->isAvailable()) {
            $new .= '<li><a style="display: block;" href="/redaxo/index.php?page=cronjob/cronjobs&func=add">Cronjob erstellen</a></li>';
        }

        $new .= '<li><a style="display: block;" href="/redaxo/index.php?page=users/users&FUNC_ADD=1">Benutzer hinzufügen</a></li>
                <li><a style="display: block;" href="/redaxo/index.php?page=users/roles&func=add&default_value=1">Rolle hinzufügen</a></li>
                
                </ul></div></li>';
    }

    if (count($list_items) > 0) {
        echo '  <div class="rex-nav-meta">
                    <ul class="nav navbar-nav navbar-right">' . $check . $new . $domains . implode('', $list_items) . '</ul>
                </div>';
    }
}
