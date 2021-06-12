<?php

namespace Models;

class Article {
    public $Id;
    public $Title;
    public $Body;
    public $Time;

    static function getArticles() {
        $articles = [];

        $result = \Database::query("SELECT * FROM articles");

        while ($row = $result->fetch()) {
            $article = new Article();
            $article->Id    = $row["id"];
            $article->Title = $row["title"];
            $article->Body  = $row["body"];
            $article->Time  = $row["time"];

            $articles[] = $article;
        }

        return $articles;
    }
}