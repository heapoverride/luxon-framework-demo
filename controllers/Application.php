<?php

class Application {

    /**
     * Render the home page
     */
    static function Home() {
        $doc = new Document();

        $doc->main->add(
            (new Html\H2())->add("Welcome to demo site"),
            (new Html\Paragraph())->add("This \"very simple\" website is powered by Luxon Framework.")
        );

        $doc->html();
    }

    /**
     * Render the news page
     */
    static function News() {
        $doc = new Document();

        $doc->main->add(
            Article::getArticles()
        );

        $doc->html();
    }

}