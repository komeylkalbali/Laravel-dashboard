<?php

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('داشبورد', route('dashboard'));
});

// Home > profile
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('پروفایل', route('profile'));
});

Breadcrumbs::for('users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('کاربران', route('users.index'));
});

Breadcrumbs::for('createUser', function ($trail) {
    $trail->parent('users');
    $trail->push('ایجاد کاربر', route('users.create'));
});

Breadcrumbs::for('permissions', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('سطح دسترسی ها', route('permissions.index'));
});

Breadcrumbs::for('roles', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('وظایف', route('roles.index'));
});


