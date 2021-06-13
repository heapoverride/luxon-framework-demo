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
     * Render the admin page for news
     */
    static function NewsAdmin() {
        $doc = new Document();
        $doc->title = "News Admin";

        $doc->main->add(
            ($formContainer = new Html\Div())->add(
                ($form = new Html\Form())->add(
                    (new Html\Table())
                        ->addRow(
                            (new Html\Label())
                                ->add("Article title:")
                                ->set("for", "ar_title"),
                            (new Html\Input)
                                ->setName("title")
                                ->set("type", "text")
                                ->set("autocomplete", "off")
                                ->setId("ar_title")
                                ->setName("title")
                        )
                        ->addRow(
                            (new Html\Label())
                                ->add("Article body:")
                                ->set("for", "ar_body"),
                            (new Html\Textarea)
                                ->setName("body")
                                ->set("autocomplete", "off")
                                ->setId("ar_body")
                        )
                        ->addRow(
                            "",
                            (new Html\Input)
                                ->set("type", "submit")
                                ->set("value", "Add article")
                        )
                )
            ),
            ($articlesContainer = new Html\Div())->add(
                Article::getArticles()
            )
        );

        $formContainer->set("class", "form-container");
        $form->set("method", "post");

        $doc->html();
    }

    /**
     * Handle new article submission
     */
    static function NewsAdminPost() {
        $title = $_POST["title"];
        $body = $_POST["body"];

        $result = ORM::instance()
            ->insert("articles", [
                "title" => $title,
                "body"  => $body,
                "time"  => time()
            ])
            ->exec();

        if ($result->isError) {
            // ...
        }

        header("Location: /news/admin/");
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
                    ->add("CountrySelect.php"),
                Markdown::fromFile("static/md/example.md")
            )
        );

        $doc->html();
    }

}