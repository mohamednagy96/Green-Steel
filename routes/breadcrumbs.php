<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('admin.home'));
});

/**
 * Dashboard
 * admin uests
 */
//index
Breadcrumbs::for('admin users', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Admins'), route('admin.admin_users.index'));
});
//create
Breadcrumbs::for('create admin user', function ($trail) {
    $trail->parent('admin users');
    $trail->push(__('Create Admin'), route('admin.admin_users.create'));
});
//update
Breadcrumbs::for('update admin user', function ($trail, $admin) {
    $trail->parent('admin users');
    $trail->push(__('Update').' ( '.$admin->name.' )', route('admin.admin_users.edit', $admin->id));
});

/**
 * Dashboard
 * Roles
 */
//index
Breadcrumbs::for('roles', function ($trail) {
    $trail->parent('home');
    $trail->push(__('Roles'), route('admin.roles.index'));
});
//create
Breadcrumbs::for('create role', function ($trail) {
    $trail->parent('roles');
    $trail->push(__('Create Role'), route('admin.roles.create'));
});
//update
Breadcrumbs::for('update role', function ($trail, $role) {
    $trail->parent('roles');
    $trail->push(__('Update').' ( '.$role->name.' )', route('admin.roles.edit', $role->id));
});


/**
 * Dashboard
 * Setting
 */
//index
Breadcrumbs::for('settings', function ($trail) {
    $trail->parent('home');
    $trail->push('Settings', route('admin.settings.index'));
});

/**
 * Dashboard
 * Contact
 */
Breadcrumbs::for('contacts',function($trail){
    $trail->parent('home');
    $trail->push('Contact Us',route('admin.contacts.index'));
});
Breadcrumbs::for('create contact',function($trail){
    $trail->parent('contacts');
    $trail->push('Create Contact',route('admin.contacts.create'));
});
Breadcrumbs::for('update contact',function($trail,$model){
    $trail->parent('contacts');
    $trail->push('Update'.' ( '.$model->name. ' ) ',route('admin.contacts.edit',$model->id));
});

/**
 * Dashboard
 * Category
 */
Breadcrumbs::for('categories',function($trail){
    $trail->parent('home');
    $trail->push('Categories',route('admin.categories.index'));
});
Breadcrumbs::for('create category',function($trail){
    $trail->parent('categories');
    $trail->push('Create Category',route('admin.categories.create'));
});
Breadcrumbs::for('update category',function($trail,$model){
    $trail->parent('categories');
    $trail->push('Update'.' ( '.$model->name . ' ) ',route('admin.categories.edit',$model->id));
});
