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


Breadcrumbs::for('admin.products.index', function ($trail) {
    $trail->push('Products', route('admin.products.index'));
});

Breadcrumbs::for('admin.leeds.service_complain', function ($trail) {
    $trail->push('Service Complain', route('admin.leeds.service_complain'));
});

Breadcrumbs::for('admin.leeds.customer_complain', function ($trail) {
    $trail->push('Customer Complain', route('admin.leeds.customer_complain'));
});

Breadcrumbs::for('admin.leeds.sales_complain', function ($trail) {
    $trail->push('Service Complain', route('admin.leeds.sales_complain'));
});

Breadcrumbs::for('admin.leeds.feedback', function ($trail) {
    $trail->push('Feedback', route('admin.leeds.feedback'));
});



require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
