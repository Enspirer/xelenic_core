<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.blog', function ($trail) {
    $trail->push('Blog', route('admin.blog'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
