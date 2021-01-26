<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Modern Business - Start Bootstrap Template</title>

<!-- Bootstrap core CSS -->

<link href="<?php echo e(asset('css/bootstrap/bootstrap.min.css')); ?>" rel="stylesheet">
<!-- Custom styles for this template -->

<link href="<?php echo e(asset('css/modern-business.css')); ?>" rel="stylesheet">
</head>

</head>
<body>
<?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php /**PATH /Applications/car/oldriver/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>