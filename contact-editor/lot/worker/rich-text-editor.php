<?php

Hook::set('route.enter', function() use($site) {
    if ($site->is('page')) {
        $s = EXTEND . DS . 'rich-text-editor' . DS . 'lot' . DS . 'asset' . DS;
        Asset::set($s . 'css' . DS . 'r-t-e.min.css', 20.1);
        Asset::set($s . 'js' . DS . 'r-t-e.min.js', 20.1);
        $s = __DIR__ . DS . '..' . DS . 'asset' . DS;
        Asset::set($s . 'css' . DS . 'contact-editor.min.css', 20.2);
        Asset::set($s . 'js' . DS . 'contact-editor.min.js', 20.2);
    }
});