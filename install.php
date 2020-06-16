<?php

rex_file::copy($this->getPath('assets'), $this->getAssetsPath(''));

rex_sql::factory()->setQuery('update rex_config set namespace = "be_style_fluent" where namespace="across/backend"');
