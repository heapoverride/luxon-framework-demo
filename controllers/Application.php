<?php

class Application {

    /**
     * Render the home page
     */
    static function Main() {
        $doc = new Document();

        //$select = new CountrySelect();
        //$doc->body->add($select);

        $doc->html();
    }

}