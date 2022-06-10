<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $__currentLoopData = $provider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<h1><?php echo e($p->name); ?></h1>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\localhost\resources\views/test.blade.php ENDPATH**/ ?>