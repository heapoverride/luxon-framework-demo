<?php

class Application {

    /**
     * Render the home page
     */
    static function Home() {
        $doc = new Document();

        $doc->main->add(
            (new Html\H2())->add("Welcome to Luxon demo site"),
            (new Html\Paragraph())->add(
                (new Html\Span())
                    ->add("This \"very simple\" website is powered by "),
                (new Html\Hyperlink("https://github.com/UnrealSecurity/luxon-framework"))
                    ->add("Luxon Framework")
            )
        );

        $doc->html();
    }

    /**
     * Render the news page
     */
    static function News() {
        $doc = new Document();
        $doc->title = "News";

        $doc->main->add(
            Article::getArticles()
        );

        $doc->html();
    }

    /**
     * Render the test page
     */
    static function Test() {
        $doc = new Document();
        $doc->title = "Test 123";

        $el = new Html\Span();
        $el->setBefore((new Html\Span())->add("This is a test"));

        $doc->main->add(
            $el
        );

        $doc->html();
    }

}