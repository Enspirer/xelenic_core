<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.blog', function ($trail) {
    $trail->push('Blog', route('admin.blog'));
});

Breadcrumbs::for('admin.pages', function ($trail) {
    $trail->push('Pages', route('admin.pages'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
