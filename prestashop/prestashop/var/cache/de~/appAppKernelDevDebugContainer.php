<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPOEZLiM\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPOEZLiM/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPOEZLiM.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPOEZLiM\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \ContainerPOEZLiM\appAppKernelDevDebugContainer([
    'container.build_hash' => 'POEZLiM',
    'container.build_id' => '7f8a5636',
    'container.build_time' => 1674139929,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPOEZLiM');