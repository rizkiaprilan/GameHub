<?php $__env->startSection('content'); ?>
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="<?php echo e(route('register')); ?>" class="register-form" id="register-form">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="form" name="name" id="name" placeholder="Your Name"/>

                            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="email" name="email" id="email" placeholder="Your Email"/>
                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input class="form-control <?php if ($errors->has('pass')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pass'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="password" name="pass" id="pass" placeholder="Password"  required autocomplete="re_pass"/>
                            <?php if ($errors->has('pass')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pass'); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input class="form-control" type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required autocomplete="re_pass"/>

                        </div>
                        <div class="form-group">
                            <input class="form-control <?php if ($errors->has('agree-term')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('agree-term'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="checkbox" name="agree-term" id="agree-term"/>
                            <?php if ($errors->has('agree-term')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('agree-term'); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="Authentication/images/poster_game.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\GameHub\resources\views/auth/register.blade.php ENDPATH**/ ?>