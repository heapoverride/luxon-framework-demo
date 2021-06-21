<?php

class CoolPeopleList extends Html\UnorderedList {
    function __construct()
    {
        parent::__construct();

        $list = [
            "HeapOverride",
            "4rlenrey",
			"Krunch"
        ];

        foreach ($list as $text) {
            $listItem = new Html\ListItem();
            $listItem->add($text);

            parent::add($listItem);
        }
    }
}
