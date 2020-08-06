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
 * Dashorad
 * Client
 */
Breadcrumbs::for('clients',function($trail){
    $trail->parent('home');
    $trail->push('Our Clients',route('admin.ourclients.index'));
});

Breadcrumbs::for('create client',function($trail){
    $trail->parent('clients');
    $trail->push('Create Client',route('admin.ourclients.create'));
});

Breadcrumbs::for('update client',function($trail,$model){
    $trail->parent('clients');
    $trail->push('Update'.' ( '.$model->name.' )', route('admin.ourclients.edit', $model->id));
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
 * Slider
 */
Breadcrumbs::for('sliders',function($trail){
    $trail->parent('home');
    $trail->push('Slider',route('admin.sliders.index'));
});
Breadcrumbs::for('create slider',function($trail){
    $trail->parent('sliders');
    $trail->push('Create Slider',route('admin.sliders.create'));
});
Breadcrumbs::for('update slider',function($trail,$model){
    $trail->parent('sliders');
    $trail->push('Update'.' ( '.$model->name . ' ) ',route('admin.sliders.edit',$model->id));
});
