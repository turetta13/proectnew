<title>Sayadova Baker | Команда</title>



<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="account">
        <div class="container">
            <div class="register">
                <form>
                    <div class="register-top-grid">


                            <h3><?php echo e($team->title); ?></h3>
                            <div class="input">
                                <centre><img src="<?php echo e($team->image_path); ?>"></centre>
                                <p><?php echo e($team->description); ?></p>
                            </div>

                </form>

            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>