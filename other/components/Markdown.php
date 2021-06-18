<?php

/**
 * A dirty hack to add Markdown support to HTML renderer
 * with custom component
 */

class Markdown extends Html\Text {
    public $md;

    function __construct($markdown = null)
    {
        parent::__construct();
        parent::setEscapeText(false);
        
        if ($markdown) parent::setText((new Parsedown())->parse($markdown));
    }

    static function fromFile($filepath) {
        $markdown = "";

        if (file_exists($filepath)) {
            $markdown = file_get_contents($filepath);
        }

        return new Markdown($markdown);
    }
}