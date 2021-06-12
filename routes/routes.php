<?php

Router::route("GET", "/^\/$/", ['Application', 'Home']);
Router::route("GET", "/^\/news\/?$/", ['Application', 'News']);