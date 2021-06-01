<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'home' => [
        'title' => 'Home',

        'actions' => [
            'index' => 'Homepage Content',
            'sub-menu' => 'Sub Menu',
        ],

        'columns' => [
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'icon' => 'Icon',
            'button' => 'Button',
        ],
    ],

    'news' => [
        'title' => 'News',

        'actions' => [
            'index' => 'News',
            'create' => 'New News',
            'edit' => 'Edit :name',
            'will_be_published' => 'News will be published at',
        ],

        'columns' => [
            'id' => 'No',
            'title' => 'Title',
            'type' => 'Type',
            'description' => 'Description',
            'published_at' => 'Published at',
            
        ],
    ],

    'news' => [
        'title' => 'News',

        'actions' => [
            'index' => 'News',
            'create' => 'New News',
            'edit' => 'Edit :name',
            'will_be_published' => 'News will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'type' => 'Type',
            'description' => 'Description',
            'published_at' => 'Published at',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'type' => 'Type',
            'description' => 'Description',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];