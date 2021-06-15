<?php

class MultilineText extends Html\Paragraph {
    function __construct($lines)
    {
        parent::__construct();

        $n = count($lines);
        foreach ($lines as $line) {
            $n--; parent::add($line);
            if ($n > 0) parent::add(new Html\LineBreak());
        }
    }
}