<?php

use Html\Paragraph;

class Application {

    /**
     * Render the home page
     */
    static function Home() {
        $doc = new Document();

        $doc->main->add(
            (new Html\H2())->add("Welcome to Luxon demo site"),
            (new Html\Paragraph())->add(
                "This \"very simple\" website is powered by ",
                (new Html\Hyperlink("https://github.com/UnrealSecurity/luxon-framework"))->add("Luxon Framework"), 
                ".", (new Html\LineBreak())->repeat(2),

                "You can read this demo site's code on ",
                (new Html\Hyperlink("https://github.com/UnrealSecurity/luxon-framework-demo"))->add("GitHub"),
                "!"
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

        $doc->main->add(
            new CountrySelect(),
            (new Paragraph())->add(
                (new Html\Hyperlink("https://github.com/UnrealSecurity/luxon-framework-demo/blob/main/other/components/partials/CountrySelect.php"))
                    ->add("CountrySelect.php")
            )
        );

        $doc->html();
    }

}