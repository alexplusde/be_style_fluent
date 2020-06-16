<?php

$form = rex_config_form::factory($this->getProperty('package'));

$field = $form->addSelectField('font');
$field->setLabel('Backend-Font');
$select = $field->getSelect();
$select->setSize(1);
$select->addOption('Cousine', 'Cousine');
$select->addOption('Fira Sans', 'FiraSans');
$select->addOption('Lato', 'Lato');
$select->addOption('Merriweather', 'Merriweather');
$select->addOption('OpenSans', 'OpenSans');
$select->addOption('Oswald', 'Oswald');
$select->addOption('Playfair Display', 'PlayfairDisplay');
$select->addOption('Roboto', 'Roboto');
$select->addOption('Roboto Condensed', 'RobotoCondensed');
$select->addOption('Robot Mono', 'RobotMono');
$select->addOption('Source Sans Pro', 'SourceSansPro');
$select->addOption('Titillium Web', 'TitilliumWeb');
$select->addOption('Ubuntu', 'Ubuntu');
$field->setNotice('Schriftart wählen');

$field = $form->addRawField('<div class="row"><div class="col-md-4">');

$field = $form->addInputField('color', 'color');
$field->setLabel('Farbe');

$field = $form->addRawField('</div><div class="col-md-4">');

$field = $form->addInputField('color', 'color_highlight');
$field->setLabel('Highlight-Farbe');

$field = $form->addRawField('</div></div>');

$field = $form->addInputField('color', 'color_font');
$field->setLabel('Text-Farbe');

$field = $form->addRawField('<div class="row"><div class="col-md-4">');

$field = $form->addInputField('color', 'color_danger');
$field->setLabel('Danger / Offline');

$field = $form->addRawField('</div><div class="col-md-4">');

$field = $form->addInputField('color', 'color_danger_highlight');
$field->setLabel('Danger / Offline - Highlight');

$field = $form->addRawField('</div></div>');

$field = $form->addRawField('<div class="row"><div class="col-md-4">');

$field = $form->addInputField('color', 'color_warning');
$field->setLabel('Warning');

$field = $form->addRawField('</div><div class="col-md-4">');

$field = $form->addInputField('color', 'color_warning_highlight');
$field->setLabel('Warning - Highlight');

$field = $form->addRawField('</div></div>');
$field = $form->addRawField('<div class="row"><div class="col-md-4">');

$field = $form->addInputField('color', 'color_success');
$field->setLabel('Succes / Online');

$field = $form->addRawField('</div><div class="col-md-4">');

$field = $form->addInputField('color', 'color_success_highlight');
$field->setLabel('Succes / Online - Highlight');

$field = $form->addRawField('</div></div>');

$field = $form->addInputField('color', 'color_anchor');
$field->setLabel('Link-Farbe');

$field = $form->addMediaField('logo');
$field->setLabel('Backend-Logo');

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', 'Farbprofil', false);
$fragment->setVar('body', $form->get(), false);
echo $fragment->parse('core/page/section.php');
