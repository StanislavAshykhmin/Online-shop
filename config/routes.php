<?php

    return array(
//        'user/login' => 'user/login',
//        'user/logout' => 'user/logout',
//        'cabinet' => 'cabinet/index',
        'product/([0-9]+)' => 'product/view/$1',
        'catalog' => 'catalog/index',
        'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
        'category/([0-9]+)' => 'catalog/category/$1',
        '' => 'site/index',
    );