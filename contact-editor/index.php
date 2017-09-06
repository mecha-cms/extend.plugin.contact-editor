<?php

Hook::set('route.enter', function() use($site) {
    if ($site->is === 'page') {
        $s = EXTEND . DS . 'rich-text-editor' . DS . 'lot' . DS . 'asset' . DS;
        Asset::set($s . 'css' . DS . 'r-t-e.min.css', 10.1);
        Asset::set($s . 'js' . DS . 'r-t-e.min.js', 10.1);
        $s = __DIR__ . DS . 'lot' . DS . 'asset' . DS;
        Asset::set($s . 'css' . DS . 'contact-editor.min.css', 10.2);
        Asset::set($s . 'css' . DS . 'contact-editor' . DS . $site->shield . '.min.css', 10.3);
        $s = __DIR__ . DS . 'lot' . DS . 'asset' . DS;
        Asset::set($s . 'js' . DS . 'contact-editor.min.js', 10.2);
    }
});

Config::set('page.o.js.CONTACT.RTE', Plugin::state(__DIR__, 'RTE'));