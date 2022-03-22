<?php

return [

    'layout' => [
      'template' =>env('TWENY_PERMISSION_TEMPLATE','layouts.app'),
      'section' =>env('TWENY_PERMISSION_SECTION','content')
    ],

    'views' => [
        'role' => [
            'index' => env('TWENY_PERMISSION_ROLE_INDEX','tweny-permission-views::roles.index'),
            'edit' => env('TWENY_PERMISSION_ROLE_EDIT','tweny-permission-views::roles.edit')
        ],
        'permission' => [
            'index' => env('TWENY_PERMISSION_PERMISSION_INDEX','tweny-permission-views::permissions.index'),
            'edit' => env('TWENY_PERMISSION_PERMISSION_EDIT','tweny-permission-views::permissions.index')
        ]
    ],



];
