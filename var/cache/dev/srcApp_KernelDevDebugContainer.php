<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6DvKzGh\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6DvKzGh/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6DvKzGh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6DvKzGh\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container6DvKzGh\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '6DvKzGh',
    'container.build_id' => '8fbebfed',
    'container.build_time' => 1574317267,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6DvKzGh');
