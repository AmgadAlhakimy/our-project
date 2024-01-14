<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/framework.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/tables.css')); ?>" rel="stylesheet">
</head>
<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo e(__('public.navbar')); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo e(__('public.home')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo e(__('public.link')); ?></a>
                </li>
                <ul>
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="<?php echo e(__('public.search')); ?>" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><?php echo e(__('public.search')); ?></button>
            </form>
        </div>
    </div>
</nav>
  <?php echo $__env->yieldContent('content'); ?>
  <script src="<?php echo e(URL::asset('js/all.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH E:\My-Github\our-project\resources\views/layouts/master.blade.php ENDPATH**/ ?>