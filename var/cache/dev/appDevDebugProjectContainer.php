<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP2ddf6o\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP2ddf6o/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerP2ddf6o.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerP2ddf6o\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerP2ddf6o\appDevDebugProjectContainer([
    'container.build_hash' => 'P2ddf6o',
    'container.build_id' => '1e2b68dc',
    'container.build_time' => 1583084212,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP2ddf6o');
