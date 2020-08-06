<?php

return [

    'roles' => [
        'admin',
    ],

    'permissions' => [
        /**
         * admin permissions
         */
        'Admin users' => [
            'admin_users_list',
            'admin_users_create',
            'admin_users_edit',
            'admin_users_delete',
        ],
        'Roles' => [
            'roles_list',
            'roles_create',
            'roles_edit',
            'roles_delete',
        ],
        'Products' => [
            'products_list',
            'products_create',
            'products_edit',
            'products_delete',
        ],
        'services' => [
            'services_list',
            'services_create',
            'services_edit',
            'services_delete',
        ],
        'categories'=>[
            'categories_list',
            'categories_create',
            'categories_edit',
            'categories_delete',
        ],
        'companies'=>[
            'companies_list',
            'companies_create',
            'companies_edit',
            'companies_delete',
        ],
        'About us' => [
            'about_list',
            'about_create',
            'about_edit',
            'about_delete',
        ],
        'Settings' => [
            'settings_list',
            'settings_edit',
        ],
        'Contacts' => [
            'contacts_list',
            'contacts_create',
            'contacts_edit',
            'contacts_delete',
        ],
    ]

];
