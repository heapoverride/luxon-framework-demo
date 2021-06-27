<?php

Router::route("GET", "/^\/$/", ['Application', 'Home']);
Router::route("GET", "/^\/news\/?$/", ['Application', 'News']);

Router::route("GET", "/^\/news\/admin\/?$/", ['Application', 'NewsAdmin']);
Router::route("POST", "/^\/news\/admin\/?$/", ['Application', 'NewsAdminPost']);

Router::route("GET", "/^\/test\/?$/", ['Application', 'Test']);
Router::route("GET", "/^\/photos\/?$/", ['Application', 'Photos']);

Router::route("GET", "/^\/login\/?$/", ['Application', 'Login']);
Router::route("GET", "/^\/register\/?$/", ['Application', 'Register']);
Router::route("POST", "/^\/login\/?$/", ['Application', 'LoginPost']);
Router::route("POST", "/^\/register\/?$/", ['Application', 'RegisterPost']);