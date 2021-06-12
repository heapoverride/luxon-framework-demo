<?php

class Document extends Html\Html {
    public $head;
    public $body;
    public $main;

    function __construct()
    {
        parent::__construct();

        $head = (new Html\Head())
            ->add(
                new Html\Title("Luxon demo"),
                new Html\Style("/css/common.css")
            );

        $main = new Html\Main();
        $body = (new Html\Body())
            ->add(
                (new Html\Header())
                    ->add(
                        (new Html\H1())->add("Luxon demo")
                    ),
                (new Html\Nav())
                    ->add(
                        (new Html\Hyperlink("/"))->add("Home"),
                        (new Html\Hyperlink("/news/"))->add("News"),
                        (new Html\Hyperlink("#"))->add("Wiki"),
                        (new Html\Hyperlink("#"))->add("Contact")
                    ),
                $main,
                (new Html\Footer())
                    ->add("Luxon Framework ❤")
            );

        $this->add($head);
        $this->add($body);
        
        $this->head = $head;
        $this->body = $body;
        $this->main = $main;
    }
}