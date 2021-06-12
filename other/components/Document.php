<?php

class Document extends Html\Html {
    public $title = "Luxon demo";

    public $head;
    public $body;
    public $main;

    function __construct()
    {
        parent::__construct();

        $titleText = new Html\TextRef($this->title);

        /* head */
        $head = (new Html\Head())
            ->add(
                new Html\Title($titleText),
                new Html\Style("/css/common.css")
            );

        /* body */
        $body = new Html\Body();

            /* header */
            $header = (new Html\Header())->add(
                (new Html\H1())->add($titleText)
            );
            $body->add($header);

            /* nav */
            $nav = (new Html\Nav())->add(
                (new Html\Hyperlink("/"))->add("Home"),
                (new Html\Hyperlink("/news/"))->add("News"),
                (new Html\Hyperlink("#"))->add("Wiki"),
                (new Html\Hyperlink("#"))->add("Contact"),
                (new Html\Hyperlink("/test/"))->add("Test")
            );
            $body->add($nav);
            
            /* main */
            $main = new Html\Main();
            $body->add($main);

            /* footer */
            $footer = (new Html\Footer())->add("Luxon Framework ❤");
            $body->add($footer);

        $this->add($head);
        $this->add($body);
        
        $this->head = $head;
        $this->body = $body;
        $this->main = $main;
        $this->footer = $footer;
    }
}