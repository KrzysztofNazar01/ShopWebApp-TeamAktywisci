<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWoCJBpT\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWoCJBpT/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerWoCJBpT.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerWoCJBpT\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerWoCJBpT\appAppKernelProdContainer([
    'container.build_hash' => 'WoCJBpT',
    'container.build_id' => 'af43b663',
    'container.build_time' => 1671574598,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWoCJBpT');