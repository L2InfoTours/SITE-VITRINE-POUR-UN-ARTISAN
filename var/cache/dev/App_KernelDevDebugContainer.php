<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAAJOPtA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAAJOPtA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAAJOPtA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAAJOPtA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAAJOPtA\App_KernelDevDebugContainer([
    'container.build_hash' => 'AAJOPtA',
    'container.build_id' => '2cd3b4f5',
    'container.build_time' => 1637328390,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAAJOPtA');
