<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Личный кабинет</h2></div>
                    <br>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <?php if($user): ?>
                            <table>

                                <tr>
                                    <th>Имя:</th>
                                    <td><?php echo e($user->name); ?></td>

                                </tr>
                                <tr>
                                    <th>Електронная почта:</th>
                                    <td><?php echo e($user->email); ?></td>

                                </tr>

                                <tr>
                                    <th>Телефон</th>
                                    <td><?php echo e($user->phone); ?></td>

                                </tr>
                            </table>

                            <BR>


                            <a href="<?php echo e(route('profile.edit')); ?>">
                                <button type="submit" class="btn">
                                    Редактировать данные
                                </button>
                            </a>

                        <?php else: ?> Вы не авторизированы
                        <p>
                            <a href="<?php echo e(route('login')); ?>">
                                <button type="submit" class="btn">
                                    Авториизироваться
                                </button>
                            </a>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>