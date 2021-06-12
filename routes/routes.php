<?php

Router::route("GET", "/^\/$/", ['Application', 'Home']);
Router::route("GET", "/^\/news\/?$/", ['Application', 'News']);
Router::route("GET", "/^\/test\/?$/", ['Application', 'Test']);