<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQWxfxfp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQWxfxfp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQWxfxfp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQWxfxfp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQWxfxfp\App_KernelDevDebugContainer([
    'container.build_hash' => 'QWxfxfp',
    'container.build_id' => '056918c6',
    'container.build_time' => 1646189585,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQWxfxfp');