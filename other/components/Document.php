<?php

class Document extends Html\Html {
    public $head;
    public $body;

    function __construct()
    {
        parent::__construct();

        $head = (new Html\Head())
            ->add(
                new Html\Title("Luxon demo"),
                new Html\Style("/css/common.css")
            );

        $body = (new Html\Body())
            ->add(
                (new Html\Header())
                    ->add(
                        (new Html\H1())->add("Luxon demo")
                    ),
                (new Html\Main())
                    ->add(
                        Article::getArticles()
                    ),
                (new Html\Footer())
                    ->add("Luxon Framework ❤")
            );

        $this->add($head);
        $this->add($body);
        
        $this->head = $head;
        $this->body = $body;
    }
}