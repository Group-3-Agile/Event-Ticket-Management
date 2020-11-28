<?php $__env->startSection('title', __('Reset Password')); ?>

<?php $__env->startSection('pagevendorsstyles'); ?>
    <link href="<?php echo e(asset('assets/css/pages/login/login-3.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--forgot" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?php echo e(asset('assets/media/bg/bg-3.jpg')); ?>);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img src="<?php echo e(asset('assets/media/logos/inti-logo.png')); ?>" width="300px" height="50px">
                            </a>
                        </div>
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title"><?php echo e(__('Reset Password')); ?></h3>
                                <div class="kt-login__desc">Enter your new password:</div>
                            </div>
                            <form class="kt-form" id="reset-form" method="POST" action="<?php echo e(route('password.update')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="token" value="<?php echo e($token); ?>">
                                <div class="input-group">
                                    <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="<?php echo e(__('E-Mail Address')); ?>" name="email" id="kt_email" autocomplete="off" value="<?php echo e($email ?? old('email')); ?>" required autofocus>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="input-group">
                                    <input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           name="password" id="password" placeholder="Password" type="password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="input-group">
                                    <input
                                        class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="password_confirmation" placeholder="Confirm Password" type="password">
                                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="kt-login__actions">
                                    <button id="kt_login_reset_submit" class="btn btn-brand btn-elevate kt-login__btn-primary"><?php echo e(__('Reset Password')); ?></button>&nbsp;&nbsp;
                                    <a href="<?php echo e(route('login')); ?>" id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary"><?php echo e(__('Login')); ?></a>
                                </div>
                            </form>
                        </div>
                        <?php if(Route::has('register')): ?>
                            <div class="kt-login__account">
                                    <span class="kt-login__account-msg">
                                        Don't have an account yet ?
                                    </span>
                                &nbsp;&nbsp;
                                <a href="<?php echo e(route('register')); ?>" id="kt_login_signup" class="kt-login__account-link"><?php echo e(__('Register')); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagevendorsscripts'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagescripts'); ?>
    <script src="<?php echo e(asset('assets/js/pages/custom/login/login-general.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\xampp\htdocs\system\resources\views/auths/passwords/reset.blade.php ENDPATH**/ ?>