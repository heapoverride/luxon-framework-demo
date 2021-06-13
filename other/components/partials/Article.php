<?php

class Article extends Html\Article {
    function __construct($title, $body, $time)
    {
        parent::__construct();

        // ????
        $body = htmlspecialchars($body);
        $body = new Markdown($body);

        $this->add(
            (new Html\H2())->add($title),
            (new Html\Time())->add(date("M j, Y", $time)),
            (new Html\Paragraph())->add($body)
        );
    }

    static function getArticles() {
        $articles = [];

        foreach (Models\Article::getArticles() as $article) {
            $articles[] = new Article($article->Title, $article->Body, $article->Time);
        }

        return $articles;
    }
}