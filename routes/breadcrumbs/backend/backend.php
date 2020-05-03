<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.blog', function ($trail) {
    $trail->push('Blog', route('admin.blog'));
});


Breadcrumbs::for('admin.edit_blog', function ($trail) {
    $trail->parent('admin.blog');
    $trail->push('Edit Blog', route('admin.edit_blog',1));
});



Breadcrumbs::for('admin.pages', function ($trail) {
    $trail->push('Pages', route('admin.pages'));
});
Breadcrumbs::for('admin.partnerships', function ($trail) {
    $trail->push('Partnerships', route('admin.partnerships'));
});

Breadcrumbs::for('admin.cloud_service', function ($trail) {
    $trail->push('Cloud Service', route('admin.cloud_service'));
});

Breadcrumbs::for('admin.settings', function ($trail) {
    $trail->push('Homepage Settings', route('admin.settings'));
});


require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
