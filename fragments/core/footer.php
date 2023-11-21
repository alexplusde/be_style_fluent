    <footer class="rex-global-footer">
        <nav class="rex-nav-footer">
            <ul class="list-inline">
                <li><a href="<?= rex_url::backendPage('be_style_fluent/feedback/readme') ?>"
                        target="_blank" rel="noreferrer noopener' ?>">Hilfe</a>
                </li>
                <li><a
                        href="<?= rex::getUser() ? rex_url::backendPage('credits') : 'https://www.redaxo.org/" target="_blank" rel="noreferrer noopener' ?>"><?= rex_i18n::msg('footer_credits') ?></a>
                </li>
                <?php if (rex::getUser() && rex::getUser()->isAdmin()): ?>
                <li><a href="https://www.yakamara.de" target="_blank" rel="noreferrer noopener">yakamara.de</a></li>
                <li><a href="https://www.redaxo.org" target="_blank" rel="noreferrer noopener">redaxo.org</a></li>
                <li class="rex-js-script-time pull-right">
                    <!--DYN--><?= rex_i18n::msg('footer_scripttime', $this->time) ?>
                    <!--/DYN-->
                </li>
                <?php endif ?>

                <?php if (!rex_be_controller::getCurrentPageObject()->isPopup() && rex::getUser() && rex::getUser()->isAdmin() && rex::isDebugMode()): ?>
                <li class="pull-right be_style_fluent-debug-mode"><a class=""
                        href="<?= rex_url::backendPage('system/settings') ?>"
                        title="<?= rex_i18n::msg('debug_mode_marker') ?>">
                        <i style="color: white;" class="rex-icon rex-icon-heartbeat"></i> Debug-Modus ist aktiviert</a>
                </li>
                <?php endif ?>
                <li class="pull-right"><a href="#rex-start-of-page"><i class="fa fa-arrow-up"></i></a></li>
                <li class="pull-right be_style_fluent"><a
                        href="<?= rex_url::backendPage('be_style_fluent/form') ?>"><i
                            class="rex-icon fa-commenting-o"></i> Hilfe anfordern</a></li>
            </ul>
        </nav>
    </footer>