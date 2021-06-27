<?php

class Application {

    /**
     * Render the home page
     */
    static function Home() {
        $doc = new Document();

        $luxonGithubLink = new Html\Hyperlink("Luxon Framework", "https://github.com/UnrealSecurity/luxon-framework");
        $luxonDemoGithubLink = new Html\Hyperlink("GitHub", "https://github.com/UnrealSecurity/luxon-framework-demo");

        $doc->main->add(
            new Html\H2("Welcome to Luxon demo site"),
            new MultilineText([
                ["This \"very simple\" website is powered by ", $luxonGithubLink, "."],
                ["You can read this demo site's code on ", $luxonDemoGithubLink, "!"]
            ]),
            new Html\H2("List of cool people"),
            new CoolPeopleList()
        );

        print($doc);
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

        print($doc);
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

        print($doc);
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
        $doc->title = "Test page";

        $multiline = new MultilineText([
            "Normal",
            new Html\B("Bold"),
            new Html\I("Italic"),
            new Html\U("Underline"),
            (new Html\Hyperlink("MultilineText.php", "https://github.com/UnrealSecurity/luxon-framework-demo/blob/main/other/components/MultilineText.php"))
        ]);

        $doc->main->add(
            $multiline,
            new CountrySelect(),
            (new Html\Paragraph())->add(
                (new Html\Hyperlink("CountrySelect.php", "https://github.com/UnrealSecurity/luxon-framework-demo/blob/main/other/components/partials/CountrySelect.php")),
                Markdown::fromFile("static/md/example.md")
            )
        );

        print($doc);
    }

    /**
     * Render the photos page
     */
    static function Photos() {
        $doc = new Document();
        $doc->title = "Photo gallery";

        $outer_container = (new Html\Div())
            ->set("class", "photos-outer-container");

        $inner_container = (new Html\Div())
            ->set("class", "photos-inner-container")
            ->add(Photo::getPhotos());
        
        $outer_container->add($inner_container);

        $doc->main->add($outer_container);

        print($doc);
    }

    /**
     * Render the registration page
     */
    static function Register() {
        $doc = new Document();
        $doc->title = "Register an account";

        $form = (new Html\Form("post"))->add(
            (new Html\Table())
                ->addRow(
                    new Html\Label("Username:", "username"),
                    (new Html\Input("username"))
                        ->setName("username")
                        ->setId("username")
                )
                ->addRow(
                    new Html\Label("Password:", "password"),
                    (new Html\Input("password"))
                        ->setName("password")
                        ->setId("password")
                )
                ->addRow("", (new Html\Input("submit"))->setValue("Register"))
        );

        $doc->main->add($form);

        print($doc);
    }

}