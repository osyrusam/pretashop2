<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7u81htk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7u81htk/appProdProjectContainer.php') {
    touch(__DIR__.'/Container7u81htk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container7u81htk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container7u81htk\appProdProjectContainer([
    'container.build_hash' => '7u81htk',
    'container.build_id' => '22bb68d2',
    'container.build_time' => 1585666895,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7u81htk');
