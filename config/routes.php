<?php
return array(
    'reviews/([0-9]+)' => 'reviews/view/$1', //actionView в NewsController
    'reviews' => 'reviews/index', //actionIndex в RewiewsController
    'news/([0-9]+)' => 'news/view/$1', //actionView в NewsController
    'news' => 'news/index', //actionIndex в NewsController
    'products' => 'product/list', //actionList в ProductControllers
);