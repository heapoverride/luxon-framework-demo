<?php

class Application {

    /**
     * Render the home page
     */
    static function Main() {
        $doc = new Document();
        $doc->html();
    }

}