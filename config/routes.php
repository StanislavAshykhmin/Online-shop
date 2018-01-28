<?php

    return array(
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
        'cabinet' => 'cabinet/index',
        'product/([0-9]+)' => 'product/view/$1',
        '' => 'site/index',
    );