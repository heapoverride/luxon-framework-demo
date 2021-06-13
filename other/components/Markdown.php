<?php

class Markdown extends Html\Element {
    public $md;

    function __construct($markdown = null)
    {
        parent::__construct("");
        if ($markdown !== null) { $this->md = $markdown; }
    }

    function html($return = false, $format = false) {
        $parser = new Parsedown();
        $html = $parser->text($this->md);

        if ($return) {
            return $html;
        } else {
            echo $html;
        }
    }

    static function fromFile($filepath) {
        $data = "";
        
        if (file_exists($filepath)) {
            $data = file_get_contents($filepath);
        }

        return new Markdown($data);
    }
}