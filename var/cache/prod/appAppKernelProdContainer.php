<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCRjG7i5\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCRjG7i5/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerCRjG7i5.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerCRjG7i5\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerCRjG7i5\appAppKernelProdContainer([
    'container.build_hash' => 'CRjG7i5',
    'container.build_id' => '15bc6e1b',
    'container.build_time' => 1710978373,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCRjG7i5');
