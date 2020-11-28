<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('subheader', 'Profile'); ?>
<?php $__env->startSection('subheader-link', route('profiles.show')); ?>

<?php $__env->startSection('subheader-action', 'Show'); ?>

<?php $__env->startSection('pagevendorsstyles'); ?>
    <link href="<?php echo e(asset('assets/plugins/viewerjs/viewer.min.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--Begin::Section-->
        <div class="row">
            <div class="col-xl-12">

                <!--begin:: Widgets/Applications/User/Profile3-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-3">
                            <div class="kt-widget__top">
                                <?php if($user->profile_image_path): ?>
                                    <div class="kt-widget__media kt-hidden-">
                                        <img src="<?php echo e(Storage::url($user->profile_image_path)); ?>" id="profile_image" alt="image">
                                    </div>
                                <?php else: ?>
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light">
                                        <?php echo e($user->name_acronym); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__head">
                                        <a href="#" onclick="return false;" class="kt-widget__username">
                                            <?php echo e($user->name); ?>

                                            <?php if($user->active): ?>
                                                <i class="flaticon2-correct" title="Active"></i>
                                            <?php else: ?>
                                                <i class="flaticon2-correct text-danger" title="Inactive"></i>
                                            <?php endif; ?>
                                            <?php if($user->email_verified_at): ?>
                                                <i class="flaticon-safe-shield-protection" title="Verified"></i>
                                            <?php else: ?>
                                                <i class="flaticon-safe-shield-protection text-danger" title="Not Verified"></i>
                                            <?php endif; ?>
                                        </a>
                                        <div class="kt-widget__action">
                                            <a href="<?php echo e(route('profiles.edit')); ?>" class="btn btn-brand btn-sm btn-upper"><i class="la la-edit"></i>Edit</a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__subhead">
                                        <a href="#" onclick="return false;" title="Created at <?php echo e($user->created_at->format('l, F j, Y h:i:s A')); ?>"><i class="flaticon-calendar"></i><?php echo e($user->created_at->format('F j, Y')); ?></a>
                                        <a href="#" onclick="return false;" title="Updated at <?php echo e($user->updated_at->format('l, F j, Y h:i:s A')); ?>"><i class="flaticon2-pen"></i><?php echo e($user->updated_at->format('F j, Y')); ?></a>
                                    </div>
                                    <div class="kt-widget__subhead">
                                        <a href="#" onclick="return false;" title="User Role"><i class="flaticon-user-ok"></i><?php echo e($user->getRoleNames()[0]); ?></a>
                                        <a href="#" onclick="return false;" title="Student ID"><i class=" flaticon-profile-1"></i><?php echo e($user->student_id); ?></a>
                                    </div>
                                    <div class="kt-widget__subhead">
                                        <a href="#" onclick="return false;" title="IC Number"><i class="flaticon2-calendar-3"></i><?php echo e($user->ic_number); ?></a>
                                        <a href="#" onclick="return false;" title="Email"><i class="flaticon2-new-email"></i><?php echo e($user->email); ?></a>
                                        <a href="#" onclick="return false;" title="Phone Number"><i class="flaticon2-phone"></i><?php echo e($user->phone_number); ?></a>
                                    </div>
                                    <div class="kt-widget__info">
                                        <div class="kt-widget__desc" style="width: 100px;overflow-wrap: break-word;" title="Biography">
                                           <?php echo e($user->biography); ?>

                                        </div>
                                        <div class="kt-widget__progress">
                                            <div class="kt-widget__text">
                                                Active Rate
                                            </div>
                                            <div class="progress" style="height: 5px;width: 100%;">
                                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: <?php echo e($user->active_rate); ?>%;" aria-valuenow="<?php echo e($user->active_rate); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="kt-widget__stats">
                                                <?php echo e($user->active_rate); ?>%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget__bottom">
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-network"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__title">Communities Joined</span>
                                        <span class="kt-widget__value"><?php echo e(number_format($user->communities->count())); ?></span>
                                    </div>
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-presentation"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__title">Events Joined</span>
                                        <span class="kt-widget__value"><?php echo e(number_format($user->events->count())); ?></span>
                                    </div>
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-users"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__title">Communities Managed</span>
                                        <span class="kt-widget__value"><?php echo e(number_format($user->communitiesManaged->count())); ?></span>
                                    </div>
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-confetti"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__title">Events Managed</span>
                                        <span class="kt-widget__value"><?php echo e(number_format($user->eventsManaged->count())); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Applications/User/Profile3-->
            </div>
        </div>

        <!--End::Section-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagevendorsscripts'); ?>
    <script src="<?php echo e(asset('assets/plugins/viewerjs/viewer.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/plugins/jquery-viewer/jquery-viewer.min.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
    <script>
        var $image = $('#profile_image');
        $image.viewer();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\xampp\htdocs\system\resources\views/profiles/show.blade.php ENDPATH**/ ?>