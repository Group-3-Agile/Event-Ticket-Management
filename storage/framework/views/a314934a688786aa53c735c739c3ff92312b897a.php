<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<!-- begin::Head -->
<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<?php echo $__env->yieldContent('content'); ?>
<!-- end:: Page -->

<!-- begin::Global Config(global config for global JS sciprts) -->

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<?php echo $__env->yieldContent('pagevendorsscripts'); ?>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<?php echo $__env->yieldContent('pagescripts'); ?>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
<?php /**PATH C:\Users\USER\xampp\htdocs\system\resources\views/layouts/auth.blade.php ENDPATH**/ ?>