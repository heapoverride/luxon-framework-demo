<?php

Router::route("GET", "/^\/$/", ['Application', 'Home']);
Router::route("GET", "/^\/news\/?$/", ['Application', 'News']);
Router::route("GET", "/^\/test\/?$/", ['Application', 'Test']);



Router::route("GET", "/^\/example\/?$/", function() {

    // define a basic document structure
    ($html = new Html\Html())->add(
        ($head = new Html\Head())->add(
            ($title = new Html\Title())
        ),
        ($body = new Html\Body())->add(
            ($header = new Html\Header()),
            ($main = new Html\Main()),
            ($footer = new Html\Footer())
        )
    );

    // modify the document to our needs
    $title->add("Example");
    $main->add(
        (new Html\H1)->add("Example"),
        (new Html\P)->add("Some paragraph here")
    );
    $footer->add(
        (new Html\P())->add("Copyright (c) 2020-".date("Y")." Unreal Security")
    );

    // render it
    $html->html(false, true);

});