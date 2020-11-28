<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="toast-container" style="position: fixed; bottom: 100px; right: 0">
        </div>
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title"><?php echo $__env->yieldContent('title'); ?></h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="<?php echo $__env->yieldContent('subheader-link'); ?>" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <?php if (! empty(trim($__env->yieldContent('subheader-action')))): ?>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="javascript:void(0)" class="kt-subheader__breadcrumbs-link">
                    <?php echo $__env->yieldContent('subheader-action'); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\USER\xampp\htdocs\system\resources\views/includes/subheader.blade.php ENDPATH**/ ?>