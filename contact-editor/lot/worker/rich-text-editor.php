<?php

Hook::set('route.enter', function() use($c, $site) {
    if ($site->is('page')) {
        $s = EXTEND . DS . 'rich-text-editor' . DS . 'lot' . DS . 'asset' . DS;
        Asset::set($s . 'css' . DS . 'rich-text-editor.min.css', 20.1);
        Asset::set($s . 'js' . DS . 'rich-text-editor.min.js', 20.1);
        $s = __DIR__ . DS . '..' . DS . 'asset' . DS;
        Asset::set($s . 'css' . DS . 'contact-editor.min.css', 20.2, [
            'href' => function($href) use($c) {
                if (empty($c['css'])) {
                    return $href;
                }
                $c = 'c=' . urlencode(json_encode($c['css']));
                return strpos($href, '?') === false ? $href . '?' . $c : $href . '&' . $c;
            }
        ]);
        Asset::set($s . 'js' . DS . 'contact-editor.min.js', 20.2, [
            'src' => function($src) use($c) {
                if (empty($c['js'])) {
                    return $src;
                }
                $c = 'c=' . urlencode(json_encode($c['js']));
                return strpos($src, '?') === false ? $src . '?' . $c : $src . '&' . $c;
            }
        ]);
    }
});