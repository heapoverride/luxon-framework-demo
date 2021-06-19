<?php

Router::route("GET", "/^\/$/", ['Application', 'Home']);
Router::route("GET", "/^\/news\/?$/", ['Application', 'News']);
Router::route("GET", "/^\/news\/admin\/?$/", ['Application', 'NewsAdmin']);
Router::route("POST", "/^\/news\/admin\/?$/", ['Application', 'NewsAdminPost']);
Router::route("GET", "/^\/test\/?$/", ['Application', 'Test']);
Router::route("GET", "/^\/photos\/?$/", ['Application', 'Photos']);